<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
<?php
include("header.php");
?>

<link rel="stylesheet" href="button2.css" type="text/css" />
<link rel="stylesheet" href="button.css" type="text/css" />
<h1 style="text-align: left;"><strong>Create Your Account&nbsp;</strong></h1>
<hr />
<div>
  <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
		<table align=center>
				<tr>
		<td><input type="text" id="lid" name="lid" placeholder="UID"></td></tr>
        <tr>
        <td><input type="password" id="pass" name="pass" placeholder="Password"></td></tr>
        <tr>
        <td><input name="cpass" type="password" id="cpass" placeholder="Confirm Password"></td></tr>
        <tr>
        <td><input name="name" type="text" id="name" placeholder="Name"></td></tr>
        <tr>
        <td><input name="city" type="text" id="city" placeholder="City"></td></tr>
        <tr>
        <td><input name="phone" maxlength="10" type="text" id="phone" placeholder="Phone No."></td></tr>
        <tr><td><input name="email" type="text" id="email" placeholder="E-Mail"></td></tr>
        <tr>
		<td><input class="myButton2" type="submit" name="Submit" value="Signup"></td></tr>
		<form><INPUT class="myButton" Type="button" VALUE="<< GO Back" onClick="history.go(-1);return true;">
		</FORM>
		
		</table>
		</form>
  
<p>&nbsp;</p>
 <p>&nbsp; </p></p>
 
 <link rel="stylesheet" href="footer.css" ... />
 <?php
 
 include("foot.php");
 ?>
</body>
</html>
