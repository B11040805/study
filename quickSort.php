<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2017/11/2
 * Time: 下午9:11
 */


class test {
    public function quickSort($a) {
        if (count($a) < 2) {
            return $a;
        }
        $key = $a[0];
        $s = array();
        $b = array();
        for($i = 1; $i < count($a); $i++) {
            if ($a[$i] <= $key) {
                $s[] = $a[$i];
            }else if($a[$i] > $key){
                $b[] = $a[$i];
            }
        }
        $s = $this->quickSort($s);
        $b = $this->quickSort($b);
        return array_merge($s,array($key),$b);
    }

}
$test = new test();
$a = array(7,9,10,7,5,8);
$b = $test->quickSort($a);
var_dump($b);

//脚本正常退出
exit(0);
