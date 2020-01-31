<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/1/29
 * Time: 5:48 下午
 */
$path = "/Users/apple/Downloads/83779421/";
$r = shell_exec("ls $path");
$rs = explode(PHP_EOL, $r);
$count = count($rs)-1;
unset($rs[$count]);
//var_dump($rs);
$i = 1;
foreach ($rs as $rr) {
    $cmd1 = "mv $path$rr/80/audio.m4s $path$i.mp3";
    $cmd2 = "mv $path$rr/80/video.m4s $path$i.mp4";
    shell_exec($cmd1);
    shell_exec($cmd2);
//    echo $cmd1.PHP_EOL.$cmd2.PHP_EOL;
    $i++;
}