<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>หน้าเริ่มต้น</title>
        <link rel="stylesheet" href="indexstyle.css">
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
                <a>มหาวิทยาลัยศิลปากร</a>
                <br>
                <a>Silpakorn University</a>
              </div>
              </div>
              <div class="nav-con">
                <ul class="menu">
                    <li><a href="index.php">หน้าเริ่มต้น</a></li>
                    <li><a href="about.php">เกี่ยวกับ</a></li>
                </ul>
              </div>

            </div>
          </div>
        </nav>

        <section class="Room">
          <div class="container">
            <div class="Room-con">
              <div class="Room-info">
                  <h3>Classroom Reseration System</h3>
                  <p>ระบบจองเข้าใช้ห้องเรียน</p>
                  <div class="blog-view">
                    <a href="login_page.php">เข้าสู่ระบบ</a>
                  </div>
              </div>

              <div class="Room-img">
                <a href="C:\xampp\htdocs\CRSystem\Lecture Room.png">
                  <img src="Lecture Room.png"> 
                </a>
              </div>
            </div>
          </div>
        </section>

        <div class="footer-bottomHome">
          <p>Copyright 2024. All right reserved by ECS.</p>
        </div>
    </body>
</html>
