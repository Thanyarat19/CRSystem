<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>เข้าสู่ระบบ</title>
        <link rel="stylesheet" href="login_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    </head>
    <body>

    <?php if (isset($_SESSION['success'])) : ?>
        <div class ="success">
            <?php
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])) : ?>
        <div class ="error">
            <?php
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>

    <form action="login.php" method="post">
        
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
                    <a href="#">Silpakorn University</a>
                </div>
                
                </div>
                <div class="nav-con">
                <ul class="menu">
                    <li><a href="index.php">หน้าเริ่มต้น</a></li>
                    <li><a href="about.php">เกี่ยวกับ</a></li>
                    <li><a href="logout.php">ออกจากระบบ</a></li>
                </ul>
                </div>
                </div>
            </div>
        </nav>

        <div class="login-container">
        <div class="square">
            <div class="blog-pass">
                <a>กรุณาป้อนชื่อผู้ใช้และรหัสผ่าน</a>
            </div>

            <form action="login.php" method="post">
                <div class="input-container">
                    <label for="username">ชื่อผู้ใช้</label>
                    <br>
                    <i class="fa fa-user-circle" aria-hidden="true" style="margin-left: 150px;"></i>
                    <input type="text" name="username" placeholder="Username" require class="input-field">
                    <br>
                    <label for="username">รหัสผ่าน</label>
                    <br>
                    <i class="fa fa-key" aria-hidden="true"  style="margin-left: 150px;"></i>
                    <input type="password" name="password" placeholder="Password" require class="input-field">
                    <br>
                    <input type="submit" name="submit" value="Login" class="submit-btn">
                    <br>
                </div>

            </form>

        </div>
      </div>

      <div class="footer-bottomHome">
        <p>Copyright 2024. All right reserved by ECS.</p>
      </div>
    </body>
    </form>
    </body>
</html>