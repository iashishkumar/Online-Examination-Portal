<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to KIET Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="table3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="footer.css" ... />

</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
	echo '
		<table width="28%"  border="0" align="center">
		<tr><td colspan=2><img src="image/icon3.png" align="center" alt=""/></td></tr>
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <h2><a href="sublist.php" class="style4">Choose Branch for Quiz </a></h2></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <h2><a href="result.php" class="style4">Result </a></h2></td>
  </tr>
</table>';

 
 
 include("foot.php");
 
   
		exit;
		

}


?>
<link rel="stylesheet" href="footer.css" ... />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="button.css" type="text/css" />
<table border="0" width="100%">
<tbody>
<tr>
<td width="70%" height="25">&nbsp;</td>
<td rowspan="2" width="1%">&nbsp;</td>
<td bgcolor="#70FF70" width="29%">
<div class="style4" align="center"><strong><span style="text-decoration: underline;">User Login</span></strong></div>
</td>
</tr>
<tr>
<td valign="top" height="296" >
<div align="center">
<div align="center">
<img src="image/icon3.png" alt="" width="100%"/></div>
</div>
<param name="movie" value="english theams two brothers.dat" /><param name="quality" value="high" /><param name="movie" value="Drag to a file to choose it." /><param name="quality" value="high" /><param name="BGCOLOR" value="#FFFFFF" />
<div align="center">
<p class="style5" align="left">&nbsp;</p>
<blockquote>
<h3 class="style5" align="left"><span class="style7">Technology is our religion and quality is our motto, is the driving force motivating the society to work with total commitment towards excellence in every endeavor. It seeks to develop in each member of its organization the ability and passion to work wisely, creatively and effectively for the betterment of humankind. It has a promise to impart futuristic technical education and instill higher values, making the students technologically superior and ethically strong.</span></h3>
</blockquote>
</div>
</td>
<td valign="top"><form action="" method="post" name="form1">
<table class="tg" border="0" width="200" cellspacing="5">
<tbody>
<tr align=center>
<td><span class="tg-yw4l">Login ID 	</span></td>
<td class="tg-yw4l"><input id="loginid2" name="loginid" type="text" /></td>
</tr>
<tr align=center>
<td><span class="tg-yw4l">Password	 </span></td>
<td class="tg-yw4l"><input id="pass2" name="pass" type="password" /></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr align=center>
<td class="errors" colspan="2" align="center"><input class="myButton" id="submit" name="submit" type="submit" value="Login" /></td>
</tr>
<tr>
<td colspan="2" bgcolor="#70FF70">
<div align="center">
<h3>New User? <a href="signup.php" class="myButton">Register Now</a>
</td>
</tr>
</tbody>
</table>
<div align="center">

</div>
</form></td>
</tr>
</tbody>
</table>


 <?php
 
 include("foot.php");
 ?>
</body>
</html>
