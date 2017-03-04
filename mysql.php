<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2017/3/4
 * Time: 下午11:19
 */
$link=mysql_connect('101.37.39.106','root','admin888');
if(!$link){
    die('链接失败'.mysql_error());
}

echo mysql_get_host_info();