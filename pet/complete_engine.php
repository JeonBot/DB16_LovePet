<?php
    session_start();
    include "dbconnect.php";
    $ID=$_SESSION['ID'];

    $query = "DELETE FROM PURCHASE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID') ";
    $result = mysqli_query($con, $query);
    $query1 = "DELETE FROM BASKET WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result1 = mysqli_query($con, $query1);
    $query1 = "DELETE FROM COMPLETE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result1 = mysqli_query($con, $query1);
    echo "<script>
    alert('메인으로 이동합니다.');
    location.replace('index.php');
    </script>";
?>