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
        <title>หน้าเริ่มต้นสำหรับผู้ใช้</title>
        <link rel="stylesheet" href="user_pagestyle.css">
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
                  <li><a href="about.php">เกี่ยวกับ</a></li>
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
                <h1>สวัสดี, คุณคือสมาชิกภาควิชาไฟฟ้า</h1>
                <p>คุณ <?php echo $_SESSION['user']; ?></p>
                <div class="blog-view">
                <p> <a href="all_room.php">ดูรายละเอียดห้องทั้งหมด</a> <a href="SearchRoom.php">ดำเนินการจองห้อง</a> </p>
              </div>
            </div>

            <div class="Room-img">
                <a href="C:\xampp\htdocs\CRSystem\user.png">
                  <img src="user.png"> 
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






