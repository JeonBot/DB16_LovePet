<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DB16_LovePet</title>
</head>

<body>

<table width="1060" height="3430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="212" height="35" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center">
    </td>
    <td width="106" align="center"><a href="join.php"><img src="image/join.png" width="106" height="35" border="0"/></a></td>
  </tr>
  <tr>
    <td height="127" width="212" align="center"><a href="index.php"><img src="image/logo.png" width="212" height="127" border="0" /></a></td>
    <td colspan="3" align="center"><img src="image/Title.png" width="636" height="127" border="0"/></td>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="60" align="center"><a href="mypage.php"><img src="image/mem_info.png" width="212" height="60" border="0"/></a></td>
    <td align="center"><a href="pet_search.php"><img src="image/pet_search.png" width="212" height="60" border="0"/></a></td>
    <td align="center"><a href="inbasket.php"><img src="image/inbasket.png" width="212" height="60" border="0"/></a></td>
<!--    <td align="center"><img src="image/payment.png" width="212" height="60" border="0"/></a></td>-->
<!--    <td colspan="2" align="center"><a href="del_sugang.php"><img src="image/del_select.png" width="212" height="60" border="0"/></a></td>-->
  </tr>
  <tr>
    <td height="3195" colspan="6" align="center" valign="top">
    
     <form id="join_form" name="join_form" method="POST" action="join_engine.php">
    <table width="500" height="329" border="0" cellpadding="0" cellspacing="0">
      <br>
      <tr>
        <td width="500" align="right">계좌번호(***-***-***) :</td>
        <td width="320" align="left">&nbsp;&nbsp;
          <input name="ACCOUNT" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td align="right">닉네임 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="NICKNAME" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td align="right">생년월일(YYYYMMDD) :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="BIRTH" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td align="right">아이디 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="ID" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td align="right">은행(**은행) :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="BANK" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td align="right">이름 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="NAME" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td align="right">이메일(example@hongik.ac.kr) :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="EMAIL" type="text" value="" size="30" required /></td>
      </tr>
      <tr>
        <td align="right">주소(**도**읍,면,동) :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="ADDRESS" type="text" value="" size="30" required /></td>
      </tr>
      <tr>
        <td align="right">비밀번호 :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="PASSWARD" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td align="right">휴대폰번호(010********) :</td>
        <td align="left">&nbsp;&nbsp;
          <input name="PHONE" type="text" value="" size="20" required /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="가입하기" required /></td>
      </tr>
    </table>
    </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>