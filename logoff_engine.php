<?php
session_start();
unset($_SESSION['ID']);
echo "<script>
alert('로그아웃 되었습니다.');
location.replace('index.php');
</script>";
?>