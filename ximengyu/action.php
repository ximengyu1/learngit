<?php
//信息增删改操作的处理页
// header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','users');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('uft-8');
 switch($_GET["action"]){
     case "add":
     
    $title=$_POST['title'];
    $content=$_POST['content'];
    $addtime=time();
    
    
    $sql="INSERT into news VALUES(null,'{$title}','{$content}',{$addtime})";
    $res=$mysqli->query($sql);
echo $sql;
    if($res>0)
    {
        echo "<h3>新闻信息添加成功</h3>";
    }else{
        echo "<h3>添加失败</h3>";
    }
    echo "<a href='javascript:window.history.back();'>返回</a>&nbsp;&nbsp;";
    echo "<a href='liulan.php'>浏览新闻</a>";
    break;
     case "del":
     $id=$_GET['id'];
     $sql="delete from news where id={$id}";
     $res=$mysqli->query($sql);
     header("Location:liulan.php");
     break;
     case "update":
     $id=$_POST['id'];
     $title=$_POST['title'];
     $content=$_POST['content'];
     
     $sql="update news set title='{$title}',content='{$content}' where id={$id}";
    
    
     break;
 }
