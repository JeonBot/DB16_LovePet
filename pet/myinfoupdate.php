<?php
require "dbconnect.php";

$ID=$_POST['ID'];
$NICKNAME=$_POST['NICKNAME'];
$ADDRESS=$_POST['ADDRESS'];
$PASSWARD=$_POST['PASSWARD'];
$PHONE=$_POST['PHONE'];

$query = "UPDATE MEMBER SET NICKNAME='$NICKNAME',ADDRESS='$ADDRESS',PASSWARD='$PASSWARD',PHONE='$PHONE' WHERE ID = '$ID'";
$result = mysqli_query($con, $query);

echo "<script>
alert('정보가 수정되었습니다.');
location.replace('index.php');
</script>";

?>