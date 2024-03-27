<?php

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>หน้าสำหรับผู้ดูแลระบบ</title>
        
        <link rel="stylesheet" href="admin_pagestyle.css">
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
                  <li><a href="admin_page.php">หน้าเริ่มต้น</a></li>
                  <li><a href="logout.php">ออกจากระบบ</a></li>
              </ul>
          </div>
            </div>
          </div>
        </nav>

        <section class="Room">
          <div class="container">
            <div class="Room-con">
              <div class="Room-info">
                <br>
                <h1>สวัสดีผู้ดูแลระบบ</h1>
                <p>คุณ <?php echo $_SESSION['user']; ?></p>
                <br>
                <div class="blog-view">
                <p><a href="register.php" class="blog-btn">เพิ่มผู้ใช้เข้าฐานข้อมูลสำหรับเข้าสู่ระบบ</a></p>
              </div>
            </div>
              <div class="Room-img">
                <a href="C:\xampp\htdocs\CRSystem\admin.png">
                  <img src="admin.png"> 
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

<?php } ?>



