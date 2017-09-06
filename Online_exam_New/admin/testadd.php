<?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
require("../database.php");

include("header.php");


echo "<br><h2><div  class=head1><u>Add Test</u></div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<link rel="stylesheet" href="../style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../button2.css" type="text/css" />
<link rel="stylesheet" href="../table2.css" type="text/css" />
<form name="form1" method="post" onSubmit="return check();">
  <table class="tg" width="45%" border="0" align="center">
    <tr>
      <td class="tg-yw4l" width="50%" height="32"><div align="left"><strong>Enter Subject ID </strong></div></td>
      <td class="tg-yw4l" width="2%%" height="5">  
      <td class="tg-yw4l" width="48%" height="32"><select name="subid">
<div><?php
$rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?></div>
      </select>
        
    <tr>
        <td class="tg-yw4l" height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td class="tg-yw4l">&nbsp;</td>
	  <td class="tg-yw4l"><input name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td class="tg-yw4l" height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td class="tg-yw4l">&nbsp;</td>
      <td class="tg-yw4l"><input name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td class="tg-yw4l" height="26"></td>
      <td class="tg-yw4l">&nbsp;</td>
      <td class="tg-yw4l"><input class="myButton2" type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>

<link rel="stylesheet" href="footer.css" ... />
 <?php
 
 include("foot.php");
 ?>