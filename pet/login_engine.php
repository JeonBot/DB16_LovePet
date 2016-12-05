<?php
session_start();

$input_id=$_POST[input_id];
$input_pw=$_POST[input_pw];
include "dbconnect.php";

$query = "SELECT * FROM MEMBER WHERE ID='$input_id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($row[9]==$input_pw) {
	$_SESSION['ID']=$input_id;
	echo "<script>
	alert('로그인 되었습니다.');
	location.replace('index.php');
	</script>";
} else {
	echo "<script>
	alert('아이디와 비밀번호를 다시 확인해 주세요.');
	location.replace('login_page.php');
	</script>";
}

mysqli_close($con);