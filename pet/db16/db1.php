<?php
/**
 * Created by PhpStorm.
 * User: Jeon
 * Date: 2016-11-23
 * Time: 오전 2:45
 */
$db_host = "localhost";
$db_user = "jeonbot";
$db_passwd = "db12345";
$db_name = "db16_lovepet";
$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if(mysqli_connect_errno($conn)) {
    echo "접속 실패" . mysqli_connect_error();
} else {
    echo "접속 성공";
}
?>