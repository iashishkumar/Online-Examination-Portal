<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../button2.css" type="text/css" />
<link rel="stylesheet" href="table.css" type="text/css" />
<?php
extract($_POST);

echo "<BR>";
if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1><u>Add Question </u></h3><br>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')",$cn) or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>


<form name="form1" method="post" onSubmit="return check();">
  <table class="tg" width="90%"  border="1" align="center">
    <tr>
      <td class="tg-j8h0" width="34%" height="32"><div align="left">Select Test Name</div></td>
      <td class="tg-j8h0" width="1%" height="5">  
      <td class="tg-j8h0" width="75%" height="32"><select name="testid" id="testid">
<?php
$rs=mysql_query("Select * from mst_test order by test_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select>
        
    <tr>
        <td class="tg-j8h0" height="26"><div align="left"> Enter Question </div></td>
        <td class="tg-j8h0">&nbsp;</td>
	    <td class="tg-j8h0"><textarea name="addque" cols="60" rows="2" id="addque"></textarea></td>
    </tr>
    <tr>
      <td class="tg-j8h0" height="26"><div align="left">Enter Option 1</div></td>
      <td class="tg-j8h0">&nbsp;</td>
      <td class="tg-j8h0"><input name="ans1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td class="tg-j8h0" height="26">Enter Option 2 </td>
      <td class="tg-j8h0">&nbsp;</td>
      <td class="tg-j8h0"><input name="ans2" type="text" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td class="tg-j8h0" height="26">Enter Option 3 </td>
      <td class="tg-j8h0">&nbsp;</td>
      <td class="tg-j8h0"><input name="ans3" type="text" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td class="tg-j8h0" height="26">Enter Option 4</td>
      <td class="tg-j8h0">&nbsp;</td>
      <td class="tg-j8h0"><input name="ans4" type="text" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td class="tg-j8h0" height="26">Enter Correct Answer </td>
      <td class="tg-j8h0">&nbsp;</td>
      <td class="tg-j8h0"><input name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td class="tg-j8h0" height="26"></td>
      <td class="tg-j8h0">&nbsp;</td>
      <td class="tg-j8h0"><input class="myButton2" type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
  <form><INPUT class="myButton2" Type="button" VALUE="<< GO Back" onClick="history.go(-1);return true;">
		</FORM>

<link rel="stylesheet" href="footer.css" ... />
 <?php
 
 include("foot.php");
 ?>