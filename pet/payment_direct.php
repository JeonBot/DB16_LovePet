<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DB16_LovePet</title>
</head>
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
$ID=$_SESSION['ID'];
$query = "SELECT PRICE, SPECIES FROM PURCHASE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID ='$ID')";
$result = mysqli_query($con, $query);
?>

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
        <td width="106" align="center"><a href="join_page.php"><img src="image/join.png" width="106" height="35" border="0"/></a></td>
    </tr>
    <tr>
        <td height="127" width="212" align="center"><a href="index.php"><img src="image/logo.png" width="212" height="127" border="0" /></a></td>
        <td colspan="3" align="center"><img src="image/Title.png" width="636" height="127" border="0"/></td>
        <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
        <td height="60" align="center"><a href="mypage.php"><img src="image/mem_info.png" width="212" height="60" border="0"/></a></td>
        <td align="center"><a href="pet_search.php"><img src="image/pet_search.png" width="212" height="60" border="0"/></a></td>
        <td align="center"><a href="payment_direct.pdhp"><img src="image/inbasket.png" width="212" height="60" border="0"/></a></td>
        <td align="center"><img src="image/payment_c.png" width="212" height="60" border="0"/></a></td>
    </tr>
    <tr>
        <td height="3195" colspan="6" align="center" valign="top">
            <form id="payment_form" name="payment_form" method="post" action="payment_direct_engine.php" onsubmit="return true;">
                <table width="1045" height="103" border="1"  bordercolor="#999999" cellpadding="0" cellspacing="0">
                    <tr bordercolor="#999999">
                        <td width="60" align="center"><?php echo $ID; ?> 님이 담은 물건</td>
                        <td width="60" align="center">가격</td>
                    </tr>
                        <br>
                        <?php
                        while($row = mysqli_fetch_array($result))
                        {
                            $row1 = mysqli_fetch_array($result1);
                            $row2 = mysqli_fetch_array($result2);
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row[1] </td>";
                            echo "<td align='center'> $row[0] </td>";
                            echo "</tr>";
                            $total += $row[0];
                        }
                        echo "<td align='center'> 총결제금액 </td>";
                        echo "<td align='center'> $total </td>";
                        ?>
                </table>
                <table>
                    <tr>
                        <td width="500" align="right">지불방법(PAYCO, PAYPAL, KAKAOPAY) :</td>
                        <td width="320" align="left">&nbsp;&nbsp;
                            <input name="PAY_METHOD" type="text" value="" size="20" /></td>
                    </tr>
                    <tr>
                        <td align="right">할부방식(일시불, 12개월무이자) :</td>
                        <td align="left">&nbsp;&nbsp;
                            <input name="INSTALLMENT_PLAN" type="text" value="" size="20" /></td>
                    </tr>
                    <tr>
                        <br>
                        <tr>
                            <td align="right"><input type="radio" name="select" value="1"/>바로결제</tr></td>
                            <td align="right"><input type="radio" name="select" value="2"/>다시선택</td>
                        </tr>
                        <br>
                        <td colspan="2" align="center"><input type="submit" value="고고고"/></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>
</table>
</body>
</html>