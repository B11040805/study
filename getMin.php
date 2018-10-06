class test {
	// 折线型数组，前半段都是降序，后半段都是升序
    public function minNumberInRotateArray($rotateArray)
    {
    // write code here
    if (count($rotateArray) == 0) {
        return 0;
    }
    if (count($rotateArray) == 1) {
        return $rotateArray[0];
    }
    $min = 0;
    $max = count($rotateArray) - 1;
    $half = ceil($max/2);
    if($rotateArray[$half] < $rotateArray[$max]) {
        $mArray = array_slice($rotateArray, $min, $half);
        return $this->minNumberInRotateArray($mArray);
    } else if($rotateArray[$half] >= $rotateArray[$max]) {
        $mArray = array_slice($rotateArray, $half);
        return $this->minNumberInRotateArray($mArray);
    }
    }
}
$test = new test();
$arr = [4,3,2,1,3,4,5,7];
$v = $test->minNumberInRotateArray($arr);
var_dump($v);
//脚本正常退出
exit(0);
