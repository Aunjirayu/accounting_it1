<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $date = $_POST['trans_date'];
  $type = $_POST['type'];
  $category = $_POST['category'];
  $amount = $_POST['amount'];
  $note = $_POST['note'];

  $sql = "INSERT INTO transactions 
          (trans_date, type, category, amount, note)
          VALUES 
          ('$date','$type','$category','$amount','$note')";
  $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="5;url=index.php">
<title>บันทึกสำเร็จ</title>

<link rel="stylesheet" href="css/main.css">

<style>
.success-box{
  max-width:420px;
  margin:120px auto;
  background:#fff;
  padding:40px;
  border-radius:24px;
  text-align:center;
  box-shadow:0 25px 50px rgba(0,0,0,.2);
  animation:pop .6s ease
}
.success-icon{
  font-size:64px;
  margin-bottom:16px;
}
@keyframes pop{
  from{transform:scale(.8);opacity:0}
  to{transform:scale(1);opacity:1}
}
</style>
</head>

<body>

<div class="success-box">
  <div class="success-icon">✅</div>
  <h2>บันทึกรายการสำเร็จ</h2>
  <p>ข้อมูลของคุณถูกบันทึกเรียบร้อยแล้ว</p>

  <p style="color:#777;margin-top:8px">
    ระบบจะพาคุณกลับหน้าเพิ่มรายการภายใน <b>5 วินาที</b>
  </p>

</div>

</body>
</html>
