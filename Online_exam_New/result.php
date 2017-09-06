<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="table3.css" rel="stylesheet" type="text/css">

</head>

<body>
<link rel="stylesheet" href="footer.css" ... />
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$rs=mysql_query("select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'",$cn) or die(mysql_error());

echo "<h1 align=center><font color=purple><u> Result </u></font></h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 align=center> You have not given any quiz</h1>";
	include("foot.php");
	exit;
}
echo "<table class='tg' border=1 align=center><tr class=style2><th class='tg-031e' width=300>Test Name <th class='tg-031e'> Total<br> Question <th class='tg-031e'> Score";
while($row=mysql_fetch_row($rs))
{
echo "<tr align=center class=style8><td class='tg-031e'>$row[0] <td class='tg-031e' align=center> $row[1] <td class='tg-031e' align=center> $row[3]";
}
echo "</table>";
include("foot.php");
?>


 
</body>
</html>
