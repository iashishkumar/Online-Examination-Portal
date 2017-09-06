<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Branch</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="table.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
$rs=mysql_query("select * from mst_subject");
echo "<table class='tg' align=center><th><h3>Select Branch</h3></th>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td class='tg-j8h0' align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>

<link rel="stylesheet" href="footer.css" ... />
 <?php
 
 include("foot.php");
 ?>
</body>
</html>
