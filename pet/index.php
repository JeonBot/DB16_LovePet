<?php
    session_start();
    include 'dbconnect.php';
    if(isset($_SESSION['ID']))
    {
        $user_id = $_SESSION['ID'];
        $query = "SELECT * FROM MEMBER WHERE ID='$user_id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
    }
?>
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
                <?php
                    if($_SESSION['ID']=='')
                    {
                ?>&nbsp;
                <?php
                    }
                    elseif($_SESSION['ID']!='')
                    {
                        echo $_SESSION['ID']."님 접속중";
                    }
                ?>
                </td>
                <td width="106" align="center">
                <?php
                    if($_SESSION['ID']=='')
                    {
                ?>
                <?php
                    }
                    elseif($_SESSION['ID']!=''){
                ?>
                <?php
                    }
                ?>
                </td>
                <td width="106" align="center">
                <a href="login_page.php"><img src="image/logon.png" width="106" height="35" border="0"/></a>
                <a href="logoff_engine.php"><img src="image/logout.png" width="106" height="35" border="0"/></a>
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
            </tr>
            <tr>
                <td height="3195" colspan="6" align="center" valign="top">
                <img src="image/main_image.png" width="1060" height="700" /></td>
            </tr>
        </table>
    </body>
</html>