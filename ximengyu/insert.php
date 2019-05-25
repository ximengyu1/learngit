<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','users');
if($,ysqli->connect_error){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('uft8');

$sql="INSERT information(username,password) VALUES('{$username}','{$password}')";
$res=$mysqli->query($sql);
if($res){
    echo '成功，第'.$mysqli->insert_id.'位用户</br>';
}else{
    echo 'Error'.$mysqli->error.':'.$mysqli->error;
}