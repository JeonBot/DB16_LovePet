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
      <td width="212" align="center">&nbsp;</td>
      <td width="106" align="center"><a href="login_page.php"><img src="image/logon.png" width="106" height="35" border="0"/></a></td>
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
      <td align="center"><a href="inbasket.php"><img src="image/now_select.png" width="212" height="60" border="0"/></a></td>
    </tr>
    <tr>
      <td height="3195" colspan="6" align="center" valign="top">
      <table width="409" height="318" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="4" height="180"><img src="image/loginimage1.png" width="409" height="180" /></td>
      </tr>
      <form id="login_form" name="login_form" method="post" action="login_engine.php" onsubmit="return checkForm(this.form);">
      <tr>
          <td width="153" height="55"><img src="image/loginimage2.png" width="153" height="55" /></td>
          <td width="121" height="55">
          <input type="text" name="input_id" id="input_id" size="12" height="20" required />
          <br>
          <input type="password" name="input_pw" id="input_pw" size="12"height="20" required />
          </td>
          <td width="73"><input type="image" src="image/loginimage4.png" name="login_but" width="73" height="55" id="login_but" /></td>
          <td width="62"><img src="image/loginimage5.png" width="62" height="55" /></td>
        </tr>
        </form>
      <tr>
        <td colspan="4"><img src="image/loginimage6.png" width="409" height="83" /></td>
      </tr>
      </table>
    </td>
    </tr>
  </table>
</body>
</html>