<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>รายละเอียดห้องท.221 วิศวะ</title>
        
        <link rel="stylesheet" href="room_labstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
                  <li><a href="all_room.php">ห้องทั้งหมด</a></li>
              </ul>
          </div>
            </div>
          </div>
        </nav>

        <section class="Room">
          <div class="container">
            <div class="Room-con">
              <div class="Room-info">
                  <h3>ท.221 วิศวะ</h3>
                  <p> ห้องปฏิบัติการ ความจุ 60 คน</p>
                  <p> ตารางการใช้งานของห้อง</p>
                  <p> - จันทร์ <br> 09:25-12:05 <br> 15:45-18:30</p>
                  <p> - พุธ <br> 09:25-12:05</p>
                  <p> - พฤหัสบดี <br> 13:00-15:45</p>
                  <div class="blog-view">
                  <a href="SearchRoom.php" class="blog-btn">ดำเนินการจองห้อง</a>
                  </div>
              </div>

              <div class="Room-img">
                <a href="C:\xampp\htdocs\CRSystem\LAB.jpg">
                  <img src="LAB.jpg"> 
                </a>
              </div>
            </div>
          </div>
        </section>

        <div class="footer-bottom">
          <p>Copyright 2024. All right reserved by ECS.</p>
        </div>

    </body>
</html>
