<html>
<head>
<title>新闻管理系统</title>
<script type="text/javascript">
function dodel(id)
{
    if(confirm("确定要删除吗？")){
        window.location="action.php>action=del&&id="+id;
    }
}
</script>
</head>
<body>
<center>
<?php include("menu.php"); ?>
<h3>浏览新闻</h3>
<table width="800" border="1">
<tr>
<th>新闻id</th><th>标题</th><th>内容</th><th>添加时间</th><th>操作</th>
</tr>
<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','users');
if($mysqli->connect_errno){
    die($mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql="SELECT * from news order by addtime desc";
$result=$mysqli->query($sql);
while($row=mysqli_fetch_assoc($result)){
     echo "<tr>";
     echo "<td>{$row['id']}</td>";
     echo "<td>{$row['title']}</td>";
     echo "<td>{$row['content']}</td>";
     echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
     echo "<td>
     <a href='javascript:dodel({$row['id']})'>删除</a>
     <a href='editnews.php?id={$row['id']}'>修改</a></td>";
     echo "</tr>";
}
mysqli_free_result($result);
mysqli_close($mysqli);
?>
</table>
</center>
</body>
</html>