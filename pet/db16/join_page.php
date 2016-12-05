<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LovePet</title>
</head>

<body>
<table width="1060" height="3430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="212" height="35" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center"><?
	if($_SESSION['stu_num']==''){
	?>&nbsp;
    <?
	}
	elseif($_SESSION['stu_num']!=''){
	echo $_SESSION['stu_num']."님 접속중"; }
	?>
    </td>
    <td width="106" align="center">
    <?
	if($_SESSION['stu_num']==''){
	?><a href="login_page.php"><img src="image/logon.png" width="106" height="35" border="0"/></a>
    <?
	}
	elseif($_SESSION['stu_num']!=''){
	?>
    <a href="logoff_engine.php"><img src="image/logout.png" width="106" height="35" border="0"/></a>
    <? }
	?>
    </td>
    <td width="106" align="center"><a href="join_page.php"><img src="image/join.png" width="106" height="35" border="0"/></a></td>
  </tr>
  <tr>
    <td height="127" width="212" align="center"><a href="index.php"><img src="images/logo.png" width="212" height="127" border="0" /></a></td>
    <td colspan="3" align="center"><img src="image/Title.png" width="636" height="127" border="0"/></td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="60" align="center"><a href="mypage.php"><img src="image/stu_info.png" width="212" height="60" border="0"/></a></td>
    <td align="center"><a href="sub_search.php"><img src="image/sub_search.png" width="212" height="60" border="0"/></a></td>
    <td align="center"><a href="sugang.php"><img src="image/sugang.png" width="212" height="60" border="0"/></a></td>
    <td align="center"><a href="now_sugang.php"><img src="image/now_sugang.png" width="212" height="60" border="0"/></a></td>
    <td colspan="2" align="center"><a href="del_sugang.php"><img src="image/del_sugang.png" width="212" height="60" border="0"/></a></td>
  </tr>
  <tr>
    <td height="3195" colspan="6" align="center" valign="top">
    
     <form id="join_form" name="join_form" method="post" action="join.php" onsubmit="return true;">
    <table width="500" height="329" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="175" align="right">닉네임 :</td>
        <td width="319" align="left">&nbsp;&nbsp;
          <input name="stu_num" type="text" value="" size="20" /></td>
      </tr>
      <tr>
        <td align="right">생년월일 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="stu_pwd" type="text" value="" size="20" /></td>
      </tr>
      <tr>
        <td align="right">아이디 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="stu_name" type="text" value="" size="20" /></td>
      </tr>
      <tr>
        <td align="right">이름 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="stu_id" type="text" value="" size="20" /></td>
      </tr>
      <tr>
        <td align="right">이메일 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="stu_major" type="text" value="" size="30" /></td>
      </tr>
      <tr>
        <td align="right">주소 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="stu_addr" type="text" value="" size="30" /></td>
      </tr>
      <tr>
        <td align="right">비밀번호 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="stu_phone" type="text" value="" size="20" /></td>
      </tr>
      <tr>
        <td align="right">휴대폰번호 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="stu_grade" type="text" value="" size="20" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="myinfoinsert" type="submit" value="가입하기"/></td>
      </tr>
    </table>
    </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>