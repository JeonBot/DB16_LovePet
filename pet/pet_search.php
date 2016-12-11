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
    $query1 = "SELECT * FROM PET WHERE SELL_NUM=1";
    $query2 = "SELECT * FROM PET WHERE SELL_NUM=2";
    $query3 = "SELECT * FROM PET WHERE SELL_NUM=3";
    $query4 = "SELECT * FROM PET WHERE SELL_NUM=4";
    $query5 = "SELECT * FROM PET WHERE SELL_NUM=5";
    $query6 = "SELECT * FROM PET WHERE SELL_NUM=6";
    $query7 = "SELECT * FROM PET WHERE SELL_NUM=7";
    $query8 = "SELECT * FROM PET WHERE SELL_NUM=8";
    $query9 = "SELECT * FROM PET WHERE SELL_NUM=9";
    $query10 = "SELECT * FROM PET WHERE SELL_NUM=10";
    $query11 = "SELECT * FROM PET WHERE SELL_NUM=11";
    $query12 = "SELECT * FROM PET WHERE SELL_NUM=12";
    $query13 = "SELECT * FROM PET WHERE SELL_NUM=13";
    $query14 = "SELECT * FROM PET WHERE SELL_NUM=14";
    $query15 = "SELECT * FROM PET WHERE SELL_NUM=15";
    $query16 = "SELECT * FROM PET WHERE SELL_NUM=16";
    $query17 = "SELECT * FROM PET WHERE SELL_NUM=17";
    $query18 = "SELECT * FROM PET WHERE SELL_NUM=18";

    $result1 = mysqli_query($con, $query1);
    $result2 = mysqli_query($con, $query2);
    $result3 = mysqli_query($con, $query3);
    $result4 = mysqli_query($con, $query4);
    $result5 = mysqli_query($con, $query5);
    $result6 = mysqli_query($con, $query6);
    $result7 = mysqli_query($con, $query7);
    $result8 = mysqli_query($con, $query8);
    $result9 = mysqli_query($con, $query9);
    $result10 = mysqli_query($con, $query10);
    $result11 = mysqli_query($con, $query11);
    $result12 = mysqli_query($con, $query12);
    $result13 = mysqli_query($con, $query13);
    $result14 = mysqli_query($con, $query14);
    $result15 = mysqli_query($con, $query15);
    $result16 = mysqli_query($con, $query16);
    $result17 = mysqli_query($con, $query17);
    $result18 = mysqli_query($con, $query18);

    $row1 = mysqli_fetch_array($result1);
    $row2 = mysqli_fetch_array($result2);
    $row3 = mysqli_fetch_array($result3);
    $row4 = mysqli_fetch_array($result4);
    $row5 = mysqli_fetch_array($result5);
    $row6 = mysqli_fetch_array($result6);
    $row7 = mysqli_fetch_array($result7);
    $row8 = mysqli_fetch_array($result8);
    $row9 = mysqli_fetch_array($result9);
    $row10 = mysqli_fetch_array($result10);
    $row11 = mysqli_fetch_array($result11);
    $row12 = mysqli_fetch_array($result12);
    $row13 = mysqli_fetch_array($result13);
    $row14 = mysqli_fetch_array($result14);
    $row15 = mysqli_fetch_array($result15);
    $row16 = mysqli_fetch_array($result16);
    $row17 = mysqli_fetch_array($result17);
    $row18 = mysqli_fetch_array($result18);
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
                <form id="pet_pic_form" name="pet_pic_form" method="post" action="pic_search_engine.php" onsubmit="return true;">
                    <td align="center">어떤 동물을 보고싶나요? :</td>
                    <td align="center">&nbsp;&nbsp;
                        <input id="ps" name="pic_search" type="text" value="" size="20" /></td>
                    <td colspan="2" align="left"><input type="submit" value="검색"/></td>
                    </form>
            </tr>
            <tr>
                <td height="3195" colspan="6" align="center" valign="top">
                <form id="pet_form" name="pet_form" method="post" action="pet_search_engine.php" onsubmit="return true;">
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
                        <td width="40" align="center">담기</td>

                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row1[0]; ?></td>
                        <td align="center"><?php echo $row1[1]; ?></td>
                        <td align="center"><?php echo $row1[2]; ?></td>
                        <td align="center"><?php echo $row1[3]; ?></td>
                        <td align="center"><?php echo $row1[4]; ?></td>
                        <td align="center"><?php echo $row1[5]; ?></td>
                        <td align="center"><?php echo $row1[6]; ?></td>
                        <td align="center"><?php echo $row1[7]; ?></td>
                        <td align="center"><img src="image/RETRIEVER.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row1[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row2[0]; ?></td>
                        <td align="center"><?php echo $row2[1]; ?></td>
                        <td align="center"><?php echo $row2[2]; ?></td>
                        <td align="center"><?php echo $row2[3]; ?></td>
                        <td align="center"><?php echo $row2[4]; ?></td>
                        <td align="center"><?php echo $row2[5]; ?></td>
                        <td align="center"><?php echo $row2[6]; ?></td>
                        <td align="center"><?php echo $row2[7]; ?></td>
                        <td align="center"><img src="image/시베리안허스키.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row2[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row3[0]; ?></td>
                        <td align="center"><?php echo $row3[1]; ?></td>
                        <td align="center"><?php echo $row3[2]; ?></td>
                        <td align="center"><?php echo $row3[3]; ?></td>
                        <td align="center"><?php echo $row3[4]; ?></td>
                        <td align="center"><?php echo $row3[5]; ?></td>
                        <td align="center"><?php echo $row3[6]; ?></td>
                        <td align="center"><?php echo $row3[7]; ?></td>
                        <td align="center"><img src="image/진돗개.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row3[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row4[0]; ?></td>
                        <td align="center"><?php echo $row4[1]; ?></td>
                        <td align="center"><?php echo $row4[2]; ?></td>
                        <td align="center"><?php echo $row4[3]; ?></td>
                        <td align="center"><?php echo $row4[4]; ?></td>
                        <td align="center"><?php echo $row4[5]; ?></td>
                        <td align="center"><?php echo $row4[6]; ?></td>
                        <td align="center"><?php echo $row4[7]; ?></td>
                        <td align="center"><img src="image/시바견.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row4[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row5[0]; ?></td>
                        <td align="center"><?php echo $row5[1]; ?></td>
                        <td align="center"><?php echo $row5[2]; ?></td>
                        <td align="center"><?php echo $row5[3]; ?></td>
                        <td align="center"><?php echo $row5[4]; ?></td>
                        <td align="center"><?php echo $row5[5]; ?></td>
                        <td align="center"><?php echo $row5[6]; ?></td>
                        <td align="center"><?php echo $row5[7]; ?></td>
                        <td align="center"><img src="image/웰시코기.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row5[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row6[0]; ?></td>
                        <td align="center"><?php echo $row6[1]; ?></td>
                        <td align="center"><?php echo $row6[2]; ?></td>
                        <td align="center"><?php echo $row6[3]; ?></td>
                        <td align="center"><?php echo $row6[4]; ?></td>
                        <td align="center"><?php echo $row6[5]; ?></td>
                        <td align="center"><?php echo $row6[6]; ?></td>
                        <td align="center"><?php echo $row6[7]; ?></td>
                        <td align="center"><img src="image/슈나우져.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row6[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row7[0]; ?></td>
                        <td align="center"><?php echo $row7[1]; ?></td>
                        <td align="center"><?php echo $row7[2]; ?></td>
                        <td align="center"><?php echo $row7[3]; ?></td>
                        <td align="center"><?php echo $row7[4]; ?></td>
                        <td align="center"><?php echo $row7[5]; ?></td>
                        <td align="center"><?php echo $row7[6]; ?></td>
                        <td align="center"><?php echo $row7[7]; ?></td>
                        <td align="center"><img src="image/토이푸들.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row7[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row8[0]; ?></td>
                        <td align="center"><?php echo $row8[1]; ?></td>
                        <td align="center"><?php echo $row8[2]; ?></td>
                        <td align="center"><?php echo $row8[3]; ?></td>
                        <td align="center"><?php echo $row8[4]; ?></td>
                        <td align="center"><?php echo $row8[5]; ?></td>
                        <td align="center"><?php echo $row8[6]; ?></td>
                        <td align="center"><?php echo $row8[7]; ?></td>
                        <td align="center"><img src="image/비숑프리제.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row8[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row9[0]; ?></td>
                        <td align="center"><?php echo $row9[1]; ?></td>
                        <td align="center"><?php echo $row9[2]; ?></td>
                        <td align="center"><?php echo $row9[3]; ?></td>
                        <td align="center"><?php echo $row9[4]; ?></td>
                        <td align="center"><?php echo $row9[5]; ?></td>
                        <td align="center"><?php echo $row9[6]; ?></td>
                        <td align="center"><?php echo $row9[7]; ?></td>
                        <td align="center"><img src="image/말티즈.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row9[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row10[0]; ?></td>
                        <td align="center"><?php echo $row10[1]; ?></td>
                        <td align="center"><?php echo $row10[2]; ?></td>
                        <td align="center"><?php echo $row10[3]; ?></td>
                        <td align="center"><?php echo $row10[4]; ?></td>
                        <td align="center"><?php echo $row10[5]; ?></td>
                        <td align="center"><?php echo $row10[6]; ?></td>
                        <td align="center"><?php echo $row10[7]; ?></td>
                        <td align="center"><img src="image/아비시니안.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row10[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row11[0]; ?></td>
                        <td align="center"><?php echo $row11[1]; ?></td>
                        <td align="center"><?php echo $row11[2]; ?></td>
                        <td align="center"><?php echo $row11[3]; ?></td>
                        <td align="center"><?php echo $row11[4]; ?></td>
                        <td align="center"><?php echo $row11[5]; ?></td>
                        <td align="center"><?php echo $row11[6]; ?></td>
                        <td align="center"><?php echo $row11[7]; ?></td>
                        <td align="center"><img src="image/아메리칸숏헤어.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row11[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row12[0]; ?></td>
                        <td align="center"><?php echo $row12[1]; ?></td>
                        <td align="center"><?php echo $row12[2]; ?></td>
                        <td align="center"><?php echo $row12[3]; ?></td>
                        <td align="center"><?php echo $row12[4]; ?></td>
                        <td align="center"><?php echo $row12[5]; ?></td>
                        <td align="center"><?php echo $row12[6]; ?></td>
                        <td align="center"><?php echo $row12[7]; ?></td>
                        <td align="center"><img src="image/스코티쉬폴드.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row12[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row13[0]; ?></td>
                        <td align="center"><?php echo $row13[1]; ?></td>
                        <td align="center"><?php echo $row13[2]; ?></td>
                        <td align="center"><?php echo $row13[3]; ?></td>
                        <td align="center"><?php echo $row13[4]; ?></td>
                        <td align="center"><?php echo $row13[5]; ?></td>
                        <td align="center"><?php echo $row13[6]; ?></td>
                        <td align="center"><?php echo $row13[7]; ?></td>
                        <td align="center"><img src="image/노르웨이숲.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row13[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row14[0]; ?></td>
                        <td align="center"><?php echo $row14[1]; ?></td>
                        <td align="center"><?php echo $row14[2]; ?></td>
                        <td align="center"><?php echo $row14[3]; ?></td>
                        <td align="center"><?php echo $row14[4]; ?></td>
                        <td align="center"><?php echo $row14[5]; ?></td>
                        <td align="center"><?php echo $row14[6]; ?></td>
                        <td align="center"><?php echo $row14[7]; ?></td>
                        <td align="center"><img src="image/페르시안.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row14[5]; ?>"  /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row15[0]; ?></td>
                        <td align="center"><?php echo $row15[1]; ?></td>
                        <td align="center"><?php echo $row15[2]; ?></td>
                        <td align="center"><?php echo $row15[3]; ?></td>
                        <td align="center"><?php echo $row15[4]; ?></td>
                        <td align="center"><?php echo $row15[5]; ?></td>
                        <td align="center"><?php echo $row15[6]; ?></td>
                        <td align="center"><?php echo $row15[7]; ?></td>
                        <td align="center"><img src="image/메인쿤.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row15[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row16[0]; ?></td>
                        <td align="center"><?php echo $row16[1]; ?></td>
                        <td align="center"><?php echo $row16[2]; ?></td>
                        <td align="center"><?php echo $row16[3]; ?></td>
                        <td align="center"><?php echo $row16[4]; ?></td>
                        <td align="center"><?php echo $row16[5]; ?></td>
                        <td align="center"><?php echo $row16[6]; ?></td>
                        <td align="center"><?php echo $row16[7]; ?></td>
                        <td align="center"><img src="image/포니.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row16[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row17[0]; ?></td>
                        <td align="center"><?php echo $row17[1]; ?></td>
                        <td align="center"><?php echo $row17[2]; ?></td>
                        <td align="center"><?php echo $row17[3]; ?></td>
                        <td align="center"><?php echo $row17[4]; ?></td>
                        <td align="center"><?php echo $row17[5]; ?></td>
                        <td align="center"><?php echo $row17[6]; ?></td>
                        <td align="center"><?php echo $row17[7]; ?></td>
                        <td align="center"><img src="image/드래블랙.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row17[5]; ?>" /></td>
                    </tr>
                    <tr bordercolor="#999999">
                        <td align="center"><?php echo $row18[0]; ?></td>
                        <td align="center"><?php echo $row18[1]; ?></td>
                        <td align="center"><?php echo $row18[2]; ?></td>
                        <td align="center"><?php echo $row18[3]; ?></td>
                        <td align="center"><?php echo $row18[4]; ?></td>
                        <td align="center"><?php echo $row18[5]; ?></td>
                        <td align="center"><?php echo $row18[6]; ?></td>
                        <td align="center"><?php echo $row18[7]; ?></td>
                        <td align="center"><img src="image/비타나V.png" width="250" height="250" border="0"/></td>
                        <td align="center"><input type="checkbox" name="take[]" value="<?php echo $row18[5]; ?>" /></td>
                    </tr>
                </table>
                <br>
                <input type="radio" name="select" value="1"/>장바구니로<br>
                <input type="radio" name="select" value="2"/>바로구매로<br>
                <br>
                <input name="pet_take_button" type="submit" value="고고고"/>
                </td>
            </tr>
    </table>
    </body>
</html>