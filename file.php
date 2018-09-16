<?php
/**
 * Created by PhpStorm.
 * User: chenjiajia
 * Date: 2018/9/16
 * Time: 下午2:36
 */
class myFile{
    /**
     * @desc 字符串反转
     */
    public function getAllFile($dir) {
       // 判断不是目录，直接退出
        if(!is_dir($dir) && !is_file($dir)) {
            return false;
        }
        $files = array();
        if (is_file($dir)) {
            $files[] = $dir;
            return $files;
        }
        if (is_dir($dir)) {
            $res = opendir($dir);
            while($row = readdir($res)) {
                if ($row == '.' || $row == '..') {
                    continue;
                }
                if (is_file($dir.'/'.$row)){
                    $files[] = $row;
                } else if (is_dir($dir.'/'.$row)) {
                    $files[$row] = $this->getAllFile($dir.'/'.$row);
                }
            }
        }

        return $files;


    }

    
}

$test = new myFile();
$dir = '/home/work';
$b = $test->getAllFile($dir);
var_dump($b);

//脚本正常退出
exit(0);