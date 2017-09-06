	<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="shadow.css" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a>";
		exit;
}
?>

<div class="wrap"><div class="box box5 shadow6"><h1><u>Welcome to Admistrative Area</u></h1>
<p><h1><a href="subadd.php">Add Subject</h1></a></p>
<p class="style7"><h1><a href="testadd.php">Add Test</a></p></h1>
<p class="style7"><h1><a href="questionadd.php">Add Question </h1></a></p>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>

<link rel="stylesheet" href="footer.css" ... />
 <?php
include("foot.php");
 ?>
</body>
</html>
