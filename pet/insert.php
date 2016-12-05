<?php
include "dbconnect.php";
    $ID=$_SESSION['ID'];
    $PAY_METHOD=$_POST['PAY_METHOD'];
    $INSTALLMENT_PLAN=$_POST['INSTALLMENT_PLAN'];
    $BANK=$_POST['BANK'];
    $ACCESS_NUM=$_POST['ACCESS_NUM'];

echo "계좌번호 : " . $ACCESS_NUM;
echo " 은행 : " . $BANK; 

  $query3 = "INSERT INTO ACCOUNT VALUES ('$ACCESS_NUM',1,'$BANK')";
    $result3 = mysqli_query($con, $query3);


?>
<html>
<body>
<script>
alert("정상적으로 등록되었습니다 ");
</script>
</body>
</html>