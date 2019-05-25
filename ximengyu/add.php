<html>
<head>
<title>新闻管理系统</title>
</head>
<body>
<center>
<?php include("menu.php"); ?>
<h3>发布新闻</h3>
<form action="action.php?action=add" method="post">
<table width="350" border="0">
<tr>
<td>标题</td>
<td><input type="text" name="title"/></td>
</tr>
<tr>
<td valign="top">内容</td>
<td><textarea cols="25" rows="5" name="content"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
     <input type="submit" value="添加"/>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>