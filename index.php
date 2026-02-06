<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ระบบบัญชีรายรับรายจ่าย</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="index.css">
</head>
<body>
<div id="loader">
  <div class="spinner"></div>
  <p>กำลังโหลดระบบบัญชี...</p>
</div>

<header class="main-header">
  <div class="logo">
    <img src="cat.jpg" alt="logo">
    <div class="text">
      <h1>Smart Accounting</h1>
      <p>ระบบบันทึกรายรับ – รายจ่ายของคุณ</p>
    </div>
  </div>
</header>

<div class="container">
  <div class="card">
    <h2>➕ เพิ่มรายการบัญชี</h2>

    <form action="save.php" method="post" class="form-grid">

      <div>
        <label>วันที่</label>
        <input type="date" name="trans_date" required>
      </div>

      <div>
        <label>ประเภท</label>
        <select name="type" required>
          <option value="income">รายรับ</option>
          <option value="expense">รายจ่าย</option>
        </select>
      </div>

      <div>
        <label>หมวด</label>
        <input type="text" name="category" placeholder="เช่น อาหาร, ค่าเดินทาง" required>
      </div>

      <div>
        <label>จำนวนเงิน</label>
        <input type="number" step="0.01" name="amount" required>
      </div>

      <div class="full">
        <label>หมายเหตุ</label>
        <input type="text" name="note" placeholder="รายละเอียดเพิ่มเติม">
      </div>

      <div class="full">
        <button type="submit" class="btn btn-main">💾 บันทึกรายการ</button>
        <a href="list.php" class="btn btn-secondary">📄 ดูรายการทั้งหมด</a>
      </div>

    </form>
  </div>
</div>
<script>
window.addEventListener("load", () => {
  document.getElementById("loader").style.display = "none";
});
</script>

</body>
</html>
