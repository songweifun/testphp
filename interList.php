<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2017/3/8
 * Time: 下午3:10
 */
$con=mysql_connect('127.0.0.1','root','admin888') or die("Unable to connect to the MySQL!");

$table_name =   sprintf('%s`.`%s','subject_3.0','interlist');
$sql        =   sprintf('SELECT * FROM `%s` ',$table_name);
//        echo $sql;die;
$res        =   mysql_query($sql);
if($res && mysql_num_rows($res)>0)
{
    while($row  =   mysql_fetch_assoc($res))
    {
        $interList[$row['type_id']][$row['param']]    =   $row;
    }
}

echo "<pre>";
print_r($interList);
echo "<pre>";