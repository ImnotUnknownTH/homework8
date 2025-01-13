<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("conn.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบสร้างตาราง</title>
<!--bs -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">


<!-- ส่วนของ DataTable -->
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">  

<style>
    body{
        font-family: "Kanit", serif;
  font-weight: 600;
  font-style: normal;
  margin-left: 100px;
  margin-right: 100px;
  margin-top: 100px;
  margin-bottom: 100px;
    }
</style>
</head>
<body>

<h1>ตารางข้อมูลการ์ดจอ</h1>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>รหัสประจำตัวของการ์ดจอ</th>
                <th>ยี่ห้อ</th>
                <th>รุ่น</th>
                <th>ชิปเซ็ต</th>
                <th>ขนาดหน่วยความจำ</th>
                <th>ราคา</th>
            </tr>
        </thead>
    <?php
    $sql = "SELECT * FROM graphicscard";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr>" ;
        echo "<td>" . $row["GPU_ID"]. " </td>" ;
        echo "<td>" . $row["Brand"]. " </td>" ;
        echo "<td>" . $row["Model"]. " </td>" ;
        echo "<td>" . $row["Chipset"]. " </td>" ;
        echo "<td>" . $row["Memory"]. " </td>" ;
        echo "<td>" . $row["Price"]. " </td>" ;
        echo "</tr>" ;
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
    </table>

    
</body>
<!-- bs js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- datatables js -->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
</html>