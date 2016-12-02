<?php
session_start();
$ID=$_SESSION['ID'];
if($_SESSION['ID']==''){
	echo "<script>
	alert('로그인 후 이용하세요.');
	location.replace('login_page.php');
	</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DB16_LovePet</title>
</head>

<body>
<script>
function checkForm(theForm){
	if(theForm.NICKNAME.value=="" || theForm.ADDRESS.value=="" || theForm.PASSWARD.value=="" || theForm.PHONE.value=="" || theForm.ID.value==""){
		alert("빈칸이 있습니다. 모두 채워주세요.");
		theForm.ID.focus();
		return false;
	}else {
		return true;
	}
}
</script>
<?php
 include "dbconnect.php";
?>
<table width="1060" height="3430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="212" height="35" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center">
    <?php
	if($_SESSION['ID']==''){
	?>&nbsp;
    <?php
	}
	    elseif($_SESSION['ID']!=''){
	    echo $_SESSION['ID']."님 접속중"; }
	?>
    </td>
    <td width="106" align="center">
    <?php
	if($_SESSION['ID']==''){
	?><a href="login_page.php"><img src="image/logon.png" width="106" height="35" border="0"/></a>
    <?php
	}
	elseif($_SESSION['ID']!=''){
	?>
    <a href="logoff_engine.php"><img src="image/logout.png" width="106" height="35" border="0"/></a>
    <?php }
	?>
    </td>
    <td width="106" align="center"><a href="join.php"><img src="image/join.png" width="106" height="35" border="0"/></a></td>
  </tr>
  <tr>
    <td height="127" width="212" align="center"><a href="index.php"><img src="image/logo.png" width="212" height="127" border="0" /></a></td>
    <td colspan="3" align="center"><img src="image/Title.png" width="636" height="127" border="0"/></td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="60" align="center"><a href="mypage.php"><img src="image/mem_info_c.png" width="212" height="60" border="0"/></a></td>
    <td align="center"><a href="pet_search.php"><img src="image/pet_search.png" width="212" height="60" border="0"/></a></td>
    <td align="center"><a href="inbasket.php"><img src="image/inbasket.png" width="212" height="60" border="0"/></a></td>
<!--    <td align="center"><img src="image/payment.png" width="212" height="60" border="0"/></a></td>-->
<!--    <td colspan="2" align="center"><a href="del_sugang.php"><img src="image/del_select.png" width="212" height="60" border="0"/></a></td>-->
  </tr>
  <tr>
    <td height="3195" colspan="6" align="center" valign="top">
    <?php
    $query = "SELECT * FROM MEMBER WHERE ID='$_SESSION[ID]'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
	?>
    <form id="myinfo_form" name="myinfo_form" method="post" action="myinfoupdate.php" onsubmit="return checkForm(this.form);">
    <table width="500" height="329" border="0" cellpadding="0" cellspacing="0">
        <br>
      <tr>
        <td width="500" align="right">ID :</td>
        <td width="320" align="left">&nbsp;&nbsp;<input name="ID" type="text" value="<?php echo $row[3]; ?>" size="30" "/></td>
      </tr>
      <tr>
          <td align="right">닉네임 :</td>
          <td align="left">&nbsp;&nbsp;<input name="NICKNAME" type="text" value="<?php echo $row[1]; ?>" size="30" /></td>
      </tr>
      <tr>
        <td align="right">주소</td>
        <td align="left">&nbsp;&nbsp;<input name="ADDRESS" type="text" value="<?php echo $row[6]; ?>" size="30" /></td>
      </tr>
      <tr>
        <td align="right">비밀번호 :</td>
        <td align="left">&nbsp;&nbsp;<input name="PASSWARD" type="text" value="<?php echo $row[7]; ?>" size="30" /></td>
      </tr>
      <tr>
        <td align="right">휴대폰번호 :</td>
        <td align="left">&nbsp;&nbsp;<input name="PHONE" type="text" value="<?php echo $row[8]; ?>" size="30" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="myinfoinsert" type="submit" value="수정하기"/></td>
        </tr>
    </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>