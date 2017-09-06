<?php
session_start()
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../button.css" type="text/css" />
<link href="../table3.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../style.css" media="screen" type="text/css" />
</head>

<body>
<?php
include("header.php");
?>
<br>
<br>
<form name="form1" method="post" action="login.php">
<table class="tg" align=center width="490" border="0">
<tr><th class="tg-yw4l" colspan=3><h2>Admin Login</h2></th></tr>
  <tr>
    <td class="tg-yw4l" width="106"><span class="style2"></span></td>
    <td class="tg-yw4l" width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></td>
    <td class="tg-yw4l" width="238"><table width="219" border="0" align="center">
  <tr>
    <td class="tg-yw4l" width="163" class="style2">Login ID </td>
    <td class="tg-yw4l" width="149"><input name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="tg-yw4l" class="style2">Password</td>
    <td class="tg-yw4l"><input name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="tg-yw4l" class="style2">&nbsp;</td>
    <td class="tg-yw4l">&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td class="tg-yw4l"><input class="myButton" name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>

</form>


<link rel="stylesheet" href="footer.css" ... />
 <?php
 
 include("foot.php");
 ?>

</body>
</html>
