<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>รายการบัญชี</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include "config.php";
$result = $conn->query("SELECT * FROM transactions ORDER BY trans_date DESC");
?>

<div class="page-header">
  <h2>รายการทั้งหมด</h2>

  <a href="index.php" class="btn-back">
    ← กลับหน้าหลัก
  </a>
</div>



<table>
<tr>
  <th>วันที่</th>
  <th>ประเภท</th>
  <th>หมวด</th>
  <th>จำนวนเงิน</th>
  <th>หมายเหตุ</th>
  <th>จัดการ</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
  <td><?= $row['trans_date'] ?></td>
  <td><?= $row['type'] ?></td>
  <td><?= $row['category'] ?></td>
  <td><?= $row['amount'] ?></td>
  <td><?= $row['note'] ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-edit">แก้ไข</a>
    <a href="delete.php?id=<?= $row['id'] ?>" 
       class="btn btn-del"
       onclick="return confirm('ลบรายการนี้?')">ลบ</a>
  </td>
</tr>
<?php } ?>

</table>

</body>
</html>
