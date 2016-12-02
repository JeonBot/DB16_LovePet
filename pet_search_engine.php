<?php
	include "dbconnect.php";
	session_start();
	$ID=$_SESSION['ID'];
	$take_nums=$_POST['take'];
	$select=$_POST['select'];
	$count_of_take=count($take_nums);

	if($select == 1)
	{
		$query = "SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID'";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);

		for ($i = 0; $i <= $count_of_take; $i++) {
			if ($take_nums[0] != '' and $i != $count_of_take) {
				$query2 = "SELECT PRICE, SPECIES FROM PET WHERE SPECIES = '$take_nums[$i]'";
				$result2 = mysqli_query($con, $query2);
				$row2 = mysqli_fetch_array($result2);

				$query1 = "INSERT INTO BASKET (MEMBER_NUM, PRICE, SPECIES) VALUES  ($row[0],'$row2[0]','$row2[1]')";
				$result1 = mysqli_query($con, $query1);
				$row1 = mysqli_fetch_array($result1);

				echo "<script>
				alert('장바구니에 담았습니다.');
				location.replace('pet_search.php');
			</script>";
			} else {
				echo "<script>
				alert('구매할 동물을 선택해주세요.');
				location.replace('pet_search.php');
			</script>";
			}
		}
	}
	else if($select == 2)
	{
		$query3 = "SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID'";
		$result3 = mysqli_query($con, $query3);
		$row3 = mysqli_fetch_array($result3);

		for ($i = 0; $i <= $count_of_take; $i++) {
			if ($take_nums[0] != '' and $i != $count_of_take) {
				$query4 = "SELECT PRICE, SPECIES FROM PET WHERE SPECIES = '$take_nums[$i]'";
				$result4 = mysqli_query($con, $query4);
				$row4 = mysqli_fetch_array($result4);

				$query5 = "INSERT INTO BASKET (MEMBER_NUM, PRICE, SPECIES) VALUES  ($row[0],'$row2[0]','$row2[1]')";
				$result5 = mysqli_query($con, $query5);
				$row5 = mysqli_fetch_array($result5);

				echo "<script>
				alert('결제 화면으로 이동합니다.');
				location.replace('payment_direct.php');
				</script>";
			} else {
				echo "<script>
				alert('구매할 동물을 선택해주세요.');
				location.replace('pet_search.php');
			</script>";
			}
		}
	}

?>