<?php
    include "dbconnect.php";
    session_start();
    $ID=$_SESSION['ID'];
    $PAY_METHOD=$_POST['PAY_METHOD'];
    $INSTALLMENT_PLAN=$_POST['INSTALLMENT_PLAN'];

    $query = "SELECT BASKET_NUM FROM BASKET WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID ='$ID')";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

//    $query1 = "SELECT SELL_NUM FROM PET WHERE SPECIES = ANY(SELECT BUY_NAME FROM BASKET WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID ='$ID'))";
//    $result1 = mysqli_query($con, $query1);
//    $row1 = mysqli_fetch_array($result1);
//
//    $query2 = "SELECT MEMBER_NUM FROM BASKET WHERE ID = '$ID'";
//    $result2 = mysqli_query($con, $query2);
//    $row2 = mysqli_fetch_array($result2);
//
//    $query3 = "INSERT INTO ACCOUNT_NUM, MEMBER_NUM, BANK VALUES ($ACCESS_NUM, $row2[0], $BANK)";
//    $result3 = mysqli_query($con, $query3);

//    $query4 = "INSERT INTO ACCOUNT_NUM, BANK VALUES($ACCESS_NUM, $BANK)";
//    $result4 = mysqli_query($con, $query4);
//    echo $row[0],$row1[0];

echo "<script>
	    alert('결제가 완료되었습니다.');
	    location.replace('index.php');
    </script>";
?>