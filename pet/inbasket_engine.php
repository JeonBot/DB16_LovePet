<?php
include "dbconnect.php";
session_start();
$ID=$_SESSION['ID'];
$chk_selection=$_POST['selection'];
$select=$_POST['select'];
$count_of_chk=count($chk_selection);

if($select == 1) // 선택 결제
{
        echo "<script>
	    alert('결제 화면으로 이동합니다.');
	    location.replace('payment.php');
        </script>";
}
else if($select == 2) // 선택 제거
{
    for ($i = 0; $i <= $count_of_chk; $i++) {
        if ($chk_selection[0] != '' and $i != $count_of_chk) {
            $query = "DELETE FROM BASKET WHERE SELL_NUM = '$chk_selection[$i]'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            if ($row[0] != '')
            {
                echo "<script>
                alert('장바구니에 동물이 없습니다. 동물을 골라주세요.');
                location.replace('pet_search.php');
                </script>";
            }
            else if ($row[0] == '')
            {
                echo "<script>
                alert('선택된 동물이 제거되었습니다.');
                location.replace('inbasket.php');
                </script>";
            }
        } else {
            echo "<script>
			alert('제거할 동물을 선택하세요.');
			location.replace('inbasket.php');
			</script>";
        }
    }
}
else
{
    echo "<script>
    alert('결제나 제거 옵션을 선택하세요.');
    location.replace('inbasket.php');
	</script>";
}
?>