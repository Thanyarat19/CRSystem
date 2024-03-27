<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once 'condb.php';
//query
$query = "SELECT * FROM tbl_table ORDER BY id ASC";
$result = mysqli_query($condb, $query);
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Link to custom styles -->
        <link rel="stylesheet" href="SearchRoomStyle.css">
        <title>ดำเนินการจองห้อง</title>
    </head>

    <body>
    <nav>
        <div class="container">
            <div class="nav-con">
                <div class="Room-con">
                    <a href="C:\xampp\htdocs\CRSystem\Silpakorn_U.png">
                        <img src="Silpakorn_U.png" style="width: 125px; height: auto;">
                    </a>
                    <div class="logo">
                        <br>
                        <a href="#">มหาวิทยาลัยศิลปากร</a>
                        <br>
                        <a href="#">Silpakorn University</a>
                    </div>
                </div>
                <div class="nav-con">
                    <ul class="menu">
                        <li><a href="user_page.php">หน้าเริ่มต้น</a></li>
                        <li><a href="all_room.php">ดูรายละเอียดห้อง</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div>
            <div style="margin-top: 15px; margin-left:20px;">
                <h4 >กรุณาเลือกห้องที่ต้องการจอง</h4>
                <p style="color:darkred"> ตรวจสอบเวลาของห้องที่สามารถใช้งานได้และรายละเอียดของทุกห้องได้ที่เมนู  (ดูรายละเอียดห้อง) กรุณาพิจารณาเวลาการใช้งานของห้อง เพื่อไม่ให้ชนกับตารางการใช้ห้อง * หากต้องการยกเลิกการจองหรือแก้ไขข้อมูล โปรดติดต่อเจ้าหน้าที่ *</p>

                <div>
                  <div>
                    <div class="row" style="margin-bottom: 5px;">
                        <?php foreach ($result as $row) {
                                if ($row['table_status'] == 0) { // ว่าง
                                    echo '<div class="col-2 col-md-2 col-sm-2" style="margin: 20px; ">';
                                    echo '<a href="booking.php?id='.$row["id"].'&act=booking" class="btn" style="background-color: #118f84; color: white; width: 125px; height: 100px; display: flex; align-items: center; justify-content: center; padding: 10px;" target="_blank">';
                                    echo '<span style="white-space: normal;">'.$row['table_name'].'</span></a></div>';
                                } else { // ถูกจอง
                                    echo '<div class="col-2 col-md-2 col-sm-2" style="margin: 20px; ">';
                                    echo '<a href="#" class="btn disabled" style="background-color: #808080; color: white; width: 125px; height: 100px; display: flex; align-items: center; justify-content: center; padding: 10px;" target="_blank">';
                                    echo '<span style="white-space: normal;">'.$row['table_name'].'</span></a></div>';
                                }
                        }?>
                    </div>
                    <p>*สีเขียว = ว่าง สามารถจองได้, สีเทา = ไม่ว่าง ไม่สามารถจองได้*</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="footer-bottomHome">
    <p>Copyright 2024. All right reserved by ECS.</p>
</div>
</body>
</html>