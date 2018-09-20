<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2017/11/2
 * Time: 下午9:11
 */
// 全排列
class test {
    public function getAllCombine($arr) {
        $result = array();
        foreach ($arr as $item){
            $result[] = array($item);
        }
        foreach($arr as $item) {
            $tempResult = array();
            foreach($result as $itemRe) {
                if (in_array($item, $itemRe)) {
                    continue;
                } else {
                    $temp = array_merge($itemRe, $item);
                    $tempResult[] = $temp;
                }
            }
            $result = $tempResult;
        }
        return $result;

    }
    

}
$test = new test();
$a = array(9,10,7,5,8);
$b = $test->getAllCombine($a);
var_dump($b);

//脚本正常退出
exit(0);

