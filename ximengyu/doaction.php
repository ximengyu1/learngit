<?php 
//接受用户
//header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','users');
if($mysqli->connect_errno){
    die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$username=$_POST['username'];
$username=$mysqli->escape_string($username);
$password=($_POST['password']);
$act=$_GET['act'];
$id=$_GET['id'];
switch($act){
    case "adduser":
   $sql="INSERT into information(username,password) VALUES('{$username}','{$password}')";
    $res=$mysqli->query($sql);
    if($res){
        $insert_id=$mysqli->insert_id;
        echo "添加成功";
        echo "<script type='text/javascript'>
        setTimeout(javascript:location.href='http://localhost/18-3%E7%8F%AD-%E5%B8%AD%E6%A2%A6%E9%9B%A8/1/third.html',4000)
        </script>";
        exit;
    }else{
        echo "<script type='text/javascript'>
        alter '重新添加';
        location.herf='adduser.php';
        </script>";
        exit;
    }
    break;
    case 'delUser':
  $sql="DELECT FROM information WHERE id=".$id;
  $res=$mysqli->query($sql);
  if($res){
    $mes='删除成功';
}else{
    $mes='删除失败';
}
$url='userlist.php';
echo "<script type='text/javascript'>
        alter('{$mes}')；
        location.herf='{$url}';
        </script>";
        exit;
    break;
case 'edit':
$sql="UPDATE information SET username='{$username}',password='{$password}' WHERE id=".$id;
$res=$mysqli->query($sql);
if($res){
    $mes='修改成功';
}else{
    $mes='修改失败';
}
$url='userlist.php';
echo "<script type='text/javascript'>
        alter('{$mes}')；
        location.herf='{$url}';
        </script>";
        exit;
break;
}