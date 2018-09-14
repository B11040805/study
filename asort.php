<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2017/11/2
 * Time: 下午9:11
 */

class test {
    public function test1($arr) {
        var_dump($arr);
        ksort($arr);
        var_dump($arr);
    }
    public function myAsort($arr) {
        $result = array();
        $count = count($arr);
        // 这里不能直接用count($arr)，因为$arr会被unset掉
        for($i=0; $i<$count; $i++) {
            list($minKey, $min) = $this->getMinItem($arr);
            $result[$minKey] = $min;
        }
        var_dump($result);
        return $result;
    }
    private function getMinItem(&$arr) {
        foreach($arr as $key => $val) {
            if (!isset($min) ||$min > $val){
                $min = $val;
                $minKey = $key;
            } else if ($min == $val) {
                if ($minKey > $key) {
                    $min = $val;
                    $minKey = $key;
                }
            }
        }
        unset($arr[$minKey]);
        return array($minKey, $min);
    }
}
$test = new test();
$arr = array(
    'abc' => 101,
    'bcd' => 102,
    'abb' => 101,
);
$test->myAsort($arr);
//脚本正常退出
exit(0);