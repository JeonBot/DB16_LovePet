<?php
    include "dbconnect.php";
    session_start();
    $select=$_POST['select'];
    $ID=$_SESSION['ID'];
    $INSTALLMENT_PLAN=$_POST['INSTALLMENT_PLAN'];
    $PAY_METHOD=$_POST['PAY_METHOD'];

if($select == 1) // 바로 결제
{
    $query100 = "SELECT MEMBER_NUM FROM PURCHASE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result100 = mysqli_query($con, $query100);
    $row100 = mysqli_fetch_array($result100);

    $query = "SELECT PRICE FROM PURCHASE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result))
    {
        $total = $total + $row[0];
    }

    $query1 = "SELECT ACCOUNT, BANK FROM MEMBER WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID') ";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_array($result1);

    $query2 = "INSERT INTO PAY(MEMBER_NUM, ACCOUNT, BANK, PAY_METHOD, INSTALLMENT_PLAN, TOTAL) VALUES ('$row100[0]', '$row1[0]', '$row1[1]', '$PAY_METHOD', '$INSTALLMENT_PLAN', '$total')";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_array($result2);

    $query6 = "UPDATE PAY SET MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result6 = mysqli_query($con, $query6);
    $row6 = mysqli_fetch_array($result6);

    $query3 = "SELECT MEMBER_NUM, PAY_NUM, TOTAL FROM PAY WHERE PAY_NUM = (SELECT MAX(PAY_NUM) FROM PAY) AND MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result3 = mysqli_query($con, $query3);
    $row3 = mysqli_fetch_array($result3);

    $query5 = "INSERT INTO COMPLETE (MEMBER_NUM, PAY_NUM, TOTAL) VALUES ('$row100[0]', '$row3[1]', '$total')";
    $result5 = mysqli_query($con, $query5);
    $row5 = mysqli_fetch_array($result5);

    $query7 = "UPDATE COMPLETE SET MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
    $result7 = mysqli_query($con, $query7);

    echo "<script>
            alert('결제를 완료했습니다.');
            location.replace('complete.php');
        </script>";
}
else if($select == 2) // 바로 뒤로
{
    {
        $query3 = "DELETE FROM PURCHASE WHERE MEMBER_NUM = (SELECT MEMBER_NUM FROM MEMBER WHERE ID = '$ID')";
        $result3 = mysqli_query($con, $query3);

        echo "<script>
            alert('바로 결제할 동물을 다시 선택하기 위한 페이지로 이동합니다.');
            location.replace('pet_search.php');
        </script>";
    }
}
?>