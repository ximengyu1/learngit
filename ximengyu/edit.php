<?php
$mysqli=new mysqli('localhost','root','','users');
if($mysqli->connect_errno){
    die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$id=$_GET['id'];
$sql="SELECT id,username,password FROM information WHERE id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result>0){
$row=$mysqli_result->fetch_assoc();
}
print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>编辑用户</title>
</head>
<body>
    <h2>编辑用户</h2>
    <form action="doaction.php?act=edit&id=<?php echo $id;?>" method='post'>
    <table cellpadding='0' cellspacing='0' bgcolor='#abcdef' border='1' width='80%'>
<tr>
  <td>用户名</td>
  <td><input type="text" name="username" value="<?php echo $row['username'];?>" required='required'></td>
</tr>
<tr>
  <td>密码</td>
  <td><input type="password" name="password" placeholder='请输入合法密码' require='required'></td>
</tr>
<tr>
<td colspan='2'><input type="submit" value="修改用户"></td>
</tr>
</table>
</form>
</body>
</html>