<?php
require 'dbconnect.php';

$ACCOUNT=$_POST['ACCOUNT'];
$NICKNAME=$_POST['NICKNAME'];
$BIRTH=$_POST['BIRTH'];
$ID=$_POST['ID'];
$BANK=$_POST['BANK'];
$NAME=$_POST['NAME'];
$EMAIL=$_POST['EMAIL'];
$ADDRESS=$_POST['ADDRESS'];
$PASSWARD=$_POST['PASSWARD'];
$PHONE=$_POST['PHONE'];

$query1 = "SELECT ID FROM MEMBER  WHERE ID='$ID'";
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_num_rows($result1);

if($row1 > 0)
{
    echo "<script>
            alert('다른 ID를 사용해주세요.');
            location.replace('join.php');
        </script>";
}
else
{
    $query2 = "SELECT NICKNAME FROM MEMBER  WHERE NICKNAME='$NICKNAME'";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_num_rows($result2);

    if($row2 > 0)
    {
        echo "<script>
            alert('다른 닉네임을 사용해주세요.');
            location.replace('join.php');
        </script>";
    }
    else
    {
        $query = "INSERT INTO MEMBER (ACCOUNT, NICKNAME, BIRTH, ID, BANK, NAME, EMAIL, ADDRESS, PASSWARD, PHONE) VALUES ('$ADDOUNT', '$NICKNAME', '$BIRTH', '$ID', '$BANK', '$NAME', '$EMAIL', '$ADDRESS', '$PASSWARD', '$PHONE')";
        mysqli_query($con, $query);
        echo "<script>
            alert('가입되었습니다.');
            location.replace('index.php');
        </script>";
    }
}

mysqli_close($con);
