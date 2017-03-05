<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2017/3/5
 * Time: 下午8:37
 */
//查看当前php安装的数据库驱动
//print_r(pdo_drivers());
//创建pdo对象
try{
    //$dbh=new PDO("mysql:dbname=//101.37.39.106:3306/thinkphpwechat",'root','admin888');
        $dbh = new PDO("mysql:host=101.37.39.106;dbname=thinkphpwechat;chartset=UTF-8",'root','admin888');
}catch (PDOException $e){
    echo "数据库连接失败:".$e->getMessage();

}
//echo $dbh->getAttribute();
//
//var_dump( $dbh->query('select * from 6d_config'));
var_dump( $dbh->getAVailableDrivers());
