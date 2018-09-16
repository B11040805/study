<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2017/11/2
 * Time: 下午9:11
 */


class search {
    /**
     * @param $a
     * @return array
     */
    public function binSearch($a) {
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

    /**
     * @param $a
     * @return mixed
     * @desc 冒泡排序
     */
    public function seqSearch($a){
        if (count($a) < 2) {
            return $a;
        }
        $count = count($a);
        for ($i = 0; $i < $count; $i++){
            for($j = 0; $j < $count -1; $j++){
                if ($a[$j] > $a[$j+1]) {
                    $temp = $a[$j];
                    $a[$j] = $a[$j+1];
                    $a[$j+1] = $temp;
                }
            }
        }
        return $a;
    }


    /**
     * @param $a
     * @return mixed
     * @desc 桶排序
     */
    public function bucketSort($a) {
        return $a;
    }


}
$test = new search();
$a = array(7,9,10,7,5,8);
$b = $test->quickSort($a);
var_dump($b);

//脚本正常退出
exit(0);
