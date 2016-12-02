<?php
session_start();
if($_SESSION['ID']=='')
{
	echo "<script>
	alert('로그인 후 이용하세요.');
	location.replace('login_page.php');
	</script>";
}
include "dbconnect.php";
    $ID = $_SESSION['ID'];
    $query = "SELECT PRICE, SPECIES FROM BASKET WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID='$ID')";
    $result = mysqli_query($con, $query);

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
                <a href="login_page.php"><img src="image/logon.png" width="106" height="35" border="0"/></a>
            <?php
            }
            elseif($_SESSION['ID']!='')
            {
            ?>
                <a href="logoff_engine.php"><img src="image/logout.png" width="106" height="35" border="0"/></a>
            <?php
            }
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
        <td height="60" align="center"><a href="mypage.php"><img src="image/mem_info.png" width="212" height="60" border="0"/></a></td>
        <td align="center"><a href="pet_search.php"><img src="image/pet_search.png" width="212" height="60" border="0"/></a></td>
        <td align="center"><a href="inbasket.php"><img src="image/inbasket_c.png" width="212" height="60" border="0"/></a></td>
<!--        <td align="center"><img src="image/payment.png" width="212" height="60" border="0"/></a></td>-->
<!--        <td colspan="2" align="center"><a href="del_sugang.php"><img src="image/del_select.png" width="212" height="60" border="0"/></a></td>-->
    </tr>
    <tr>
        <td height="3195" colspan="6" align="center" valign="top">
        <form id="inbasket_form" name="inbasket_form" method="post" action="inbasket_engine.php" onsubmit="return true;">
        <table width="1045" height="103" border="1"  bordercolor="#999999" cellpadding="0" cellspacing="0">
            <br>
            <tr bordercolor="#999999">
                <td width="100" align="center"><?php echo $ID; ?> 님이 담은 장바구니번호</td>
                <td width="150" align="center">가격</td>
            </tr>
                <?php
                    while($arr = mysqli_fetch_array($result))
                    {
                        echo "<tr bordercolor=\"#999999\">";
                        echo "<td align='center'> $arr[1] </td>";
                        echo "<td align='center'> $arr[0] </td>";
                        $total += $arr[0];
                        echo "</tr>";
                    }
                    echo "<td align='center'> 합계 </td>";
                    echo "<td align='center'> $total </td>";
                ?>
        </table>
        <br>
        <input name="check_button" type="submit" value="결제시작"/>
        </form>
        </td>
    </tr>
    </table>
</body>
</html>