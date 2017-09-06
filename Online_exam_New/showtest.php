<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="table.css" rel="stylesheet" type="text/css">
</head>
<body style="font-family:new century schoolbook;">
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=purple><u> $row1[1]</u></font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1><u>Oops! No Quiz for this Subject </u></h2>";
	exit;
}
echo "<table class='tg' align=center><th><h2>Select Quiz</h2></th>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td class='tg-j8h0' align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>

<link rel="stylesheet" href="footer.css" ... />
 <?php
 
 include("foot.php");
 ?>
</body>
</html>
