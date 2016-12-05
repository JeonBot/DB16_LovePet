<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Team09_DB_Project</title>
</head>

<body>
<table width="1060" height="3430" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="212" height="35" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center">&nbsp;</td>
    <td width="212" align="center">
	<?
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
    <img src="image/main_image.png" width="1060" height="700" /></td>
  </tr>
</table>
</body>
</html>