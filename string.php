<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2018/9/16
 * Time: 下午2:36
 */
class myString{
    /**
     * @desc 字符串反转
     */
    public function strRev($a) {
        $len = strlen($a);
        if ($len < 2){
            return $a;
        }
        $str = '';
        for($i = $len-1; $i > 0; $i--){
            $str = $str.substr($a, $i, 1);
        }
        return $str;
    }


}

$test = new myString();
$a = 'hello world';
$b = $test->strRev($a);
var_dump($b);

//脚本正常退出
exit(0);