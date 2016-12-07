<?php
    session_start();
    include "dbconnect.php";
    $ID=$_SESSION['ID'];

    $query = "DELETE FROM PURCHASE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID') ";
    $result = mysqli_query($con, $query);
    $query1 = "DELETE FROM BASKET WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result1 = mysqli_query($con, $query1);
    $query2 = "DELETE FROM PAY WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result2 = mysqli_query($con, $query2);
//    $query3 = "DELETE FROM COMPLETE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
//    $result3 = mysqli_query($con, $query3);

    echo "<script>
    alert('메인으로 이동합니다.');
    location.replace('index.php');
    </script>";
?>