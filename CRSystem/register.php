<?php
    session_start();
    require_once "connection.php";

    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);
            $query = "INSERT INTO user (username,password,firstname,lastname,userlevel)
                        VALUES ('$username', '$passwordenc', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายชื่อผู้ใช้เข้าฐานข้อมูล</title>
    <link rel="stylesheet" href="register_style.css">
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
                    <a>Silpakorn University</a>
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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <br>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your Username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        <br>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" placeholder="Enter your Firstname" required>
        <br>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" placeholder="Enter your lastname" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <div class="footer-bottomHome">
        <p>Copyright 2024. All right reserved by ECS.</p>
    </div>
</body>
</html>
