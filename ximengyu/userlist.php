<?php
$mysqli=new mysqli('localhost','root','','users');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$sql="SELECT username,password from information";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    while($row=$mysqli_result->fetch_assoc()){
      $rows[]=$row;
    }
}
//print_r($rows);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户列表</title>
</head>
<body>
<h2>用户列表--<a href='adduser.php'>添加用户</a></h2>
    <table  cellpadding='0' cellspacing='0' width='80%' bgcolor='#abcdef'>
<tr>
<td>编号</td>
<td>用户名</td>
<td>密码</td>
<td>操作</td>
</tr>
<?php $i=1;foreach($rows as $row):?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['password'];?></td>
<td><a href="doaction.php?act=del&id=<?php echo $row['id'];?>">删除</a>&nbsp;&nbsp;<a href="edit.php?id=<?php echo $row['id'];?>">修改</a></td>
</tr>
<?php $i++;endforeach;?>
    </table>
</body>
</html>
