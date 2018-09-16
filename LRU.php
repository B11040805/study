<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2018/9/16
 * Time: 下午6:07
 */


class LRU{
    private static $cache = array();
    public function __construct($cache)
    {
        self::$cache = $cache;
    }

    public function set($key, $val){
        $b = array_merge(array($key => $val), self::$cache);
        self::$cache = $b;
        //array_unshift(self::$cache, $val);
    }

    public function get($key){
        $val = self::$cache[$key];
        unset(self::$cache[$key]);
        $b = array_merge(array($key => $val), self::$cache);
        self::$cache = $b;
    }

    public function clear(){
        $count = count(self::$cache);
        if ($count > 10) {
            for($i = 0; $i < $count - 10; $i++){
                array_pop(self::$cache);
            }
        }
    }
}
$a = array(
    'a' => 1,
    'b' => 2,
    'c' => 4,
);
$test = new LRU($a);

$test->get('a');


