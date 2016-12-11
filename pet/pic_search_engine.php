<?php
    session_start();
    if($_SESSION['ID']=='')
    {
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
        <table width="1060" height="3430" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="212" height="35" align="center">&nbsp;</td>
                <td width="212" align="center">&nbsp;</td>
                <td width="212" align="center">&nbsp;</td>
                <td width="212" align="center">
                    <?php
                        if($_SESSION['ID']=='')
                        {
                    ?>
                            &nbsp;
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
                <td align="center"><a href="pet_search.php"><img src="image/pet_search_c.png" width="212" height="60" border="0"/></a></td>
                <br>
            </tr>
            <tr>
<!--                <form id="pet_pic_form" name="pet_pic_form" method="post" action="pic_search_engine.php" onsubmit="return true;">-->
                <td align="center">어떤 동물을 보고싶나요? :</td>
                <td align="center">&nbsp;&nbsp;
                    <input id="ps" name="pic_search" type="text" value="" size="20" /></td>
                    <td colspan="2" align="left"><input type="submit" value="검색"/></td>
            </tr>
            <tr>
                <td height="3195" colspan="6" align="center" valign="top">
                <form id="pet_form" name="pet_form" method="post" action="pet_search.php" onsubmit="return true;">
                <table width="1045" height="103" border="1"  bordercolor="#999999" cellpadding="0" cellspacing="0">
                    <br>
                    <tr bordercolor="#999999">
                        <td width="60" align="center">판매번호</td>
                        <td width="100" align="center">가격</td>
                        <td width="60" align="center">의료기록</td>
                        <td width="80" align="center">색</td>
                        <td width="60" align="center">성별</td>
                        <td width="150" align="center">종</td>
                        <td width="80" align="center">중성화여부</td>
                        <td width="50" align="center">크기</td>
                        <td width="40" align="center">사진</td>
                    </tr>
                    <?php
                    include "dbconnect.php";
                    $SEARCH=$_POST['pic_search'];
                    $retriever = "RETRIEVER";
                    $sh = "SIBERIAN HUSKY";
                    $jd = "JINDO DOG";
                    $si = "SHIBA INU";
                    $wc = "WELSH CORGI";
                    $snz = "SCHNAUZER";
                    $tp = "TOY POODLE";
                    $bf = "BICHON FRISE";
                    $m = "MALTESE";
                    $ac = "ABYSSINIAN CAT";
                    $as = "AMERICAN SHORTHAIR";
                    $sf = "SCOTTISH FOLD";
                    $nf = "NORWEGIAN FOREST CAT";
                    $pc = "PERSIAN CAT";
                    $mc = "	MAINE COON";
                    $p = "PONY";
                    $db = "DRE BLACK";
                    $vv = "VITANA V";

                    if($SEARCH == $retriever)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/RETRIEVER.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $sh)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/시베리안허스키.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $jd)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/진돗개.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $si)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/시바견.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $wc)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/웰시코기.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $snz)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/슈나우져.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $tp)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/토이푸들.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $bf)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/비숑프리제.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $m)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/말티즈.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $ac)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/아비시니안.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $as)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/아메리칸숏헤어.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $sf)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/스코티쉬폴드.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $nf)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/노르웨이숲.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $pc)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/페르시안.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $mc)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/메인쿤.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $p)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/포니.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $db)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/드래블랙.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    else if($SEARCH == $vv)
                    {
                        $query1 = "SELECT * FROM PET WHERE SPECIES = '$SEARCH'";
                        $result1 = mysqli_query($con, $query1);
                        while($row1 = mysqli_fetch_array($result1))
                        {
                            echo "<tr bordercolor=\"#999999\">";
                            echo "<td align='center'> $row1[0] </td>";
                            echo "<td align='center'> $row1[1] </td>";
                            echo "<td align='center'> $row1[2] </td>";
                            echo "<td align='center'> $row1[3] </td>";
                            echo "<td align='center'> $row1[4] </td>";
                            echo "<td align='center'> $row1[5] </td>";
                            echo "<td align='center'> $row1[6] </td>";
                            echo "<td align='center'> $row1[7] </td>";
                            echo "<td align='center'> <img src='image/비타나V.png' width='250' height='250' border='0'/></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    <input name="pet_take_button" type="submit" value="담기페이지로"/>
                </tr>

                </td>
            </tr>
    </table>
    </body>
</html>