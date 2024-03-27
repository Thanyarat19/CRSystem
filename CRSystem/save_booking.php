<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="savebooking_style.css">
 <title>แจ้งบันทึกการจอง</title>
    <style type="text/css">
        .devbanban {
            background-color: #ffffff;
        }
        .message-container {
            margin-top: 50px; /* ปรับค่าตามความเหมาะสม */
            text-align: center;
        }
        .message-container a {
            margin-top: 20px; /* ปรับค่าตามความเหมาะสม */
        }
    </style>
</head>
<body style="background-color: #ffffff;">
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
                    <li><a href="user_page.php">หน้าแรก</a></li>
                    <li><a href="SearchRoom.php">หน้าจองห้อง</a></li>
                </ul>
              </div>
			

        </div>
    </div>
</nav>
<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once 'condb.php';

//print_r($_POST);

if (isset($_POST['table_id']) && isset($_POST['booking_name']) && isset($_POST['booking_date'])) {


    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $booking_name = $_POST['booking_name'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $booking_phone = $_POST['booking_phone'];
    $booking_staff = $_POST['booking_staff'];
    $table_id = $_POST['table_id'];
    $dateCreate = date('Y-m-d H:i:s'); //วันที่บันทึก

    //insert booking
    mysqli_query($condb, "BEGIN");
    $sqlInsertBooking = "INSERT INTO  tbl_booking values(null, '$table_id', '$booking_name', '$booking_date', '$booking_time', '$booking_phone', '$booking_staff', '$dateCreate')";
    $rsInsertBooking = mysqli_query($condb, $sqlInsertBooking);

    //การใช้ Transection ประกอบด้วย  BEGIN COMMIT ROLLBACK 

    //update table status
    $sqlUpdate = "UPDATE tbl_table SET table_status=1 WHERE id = $table_id"; //1=จอง
    $rsUpdate = mysqli_query($condb, $sqlUpdate);

    if ($rsInsertBooking && $rsUpdate) { //ตรรวจสอบถ้า 2 ตัวแปรทำงานได้ถูกต้องจะทำการบันทึก แต่ถ้าเกิดข้อผิดพลาดจะ Rollback คือไม่บันทึกข้อมูลใดๆ
        mysqli_query($condb, "COMMIT");
        echo '<div class="left-align"><br>บันทึกข้อมูลการจองเรียบร้อยแล้ว</div>';
    } else {
        mysqli_query($condb, "ROLLBACK");
        $msg = 'บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ<br><br><a href="index.php">กลับหน้าหลัก</a>';
    }
} //isset 
else {
    header("Location: index.php");
}
?>
<div class="footer-bottomHome">
    <p>Copyright 2024. All right reserved by ECS.</p>
</div>
</body>
</html>