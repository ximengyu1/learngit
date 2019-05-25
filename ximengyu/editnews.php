<html>
<head>
<title>新闻管理系统</title>
</head>
<body>
<center>
<?php include("menu.php"); 
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','users');
if($mysqli->connect_errno){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('uft8');
$sql="select * from news where id={$_GET['id']};";
$result=$mysqli->query($sql);
if($result&&mysql_num_row($result)>0){
     $news=mysql_fetch_assoc($result);
}else{
     die("没有找到要修改的信息！");
}


?>
<h3>编辑新闻</h3>
<form action="action.php?action=update" method="post">
<input type="hidden" name="id" value="<?php echo $news['id'];?>"/>
<table width="350" border="0">
<tr>
<td>标题</td>
<td><input type="text" name="title" value="<?php echo $news['title']; ?>"/></td>
</tr>
<tr>
<td valign="top">内容</td>
<td><textarea cols="25" rows="5" name="content" value="<?php echo $news['content']; ?>"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
     <input type="submit" value="编辑"/>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>