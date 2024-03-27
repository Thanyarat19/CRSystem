<?php
//เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
require_once 'condb.php';
//query
$query = "SELECT * FROM tbl_table WHERE id=$_GET[id]";
$result = mysqli_query($condb, $query);
$row = mysqli_fetch_array($result);
//print_r($row);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>กรอกข้อมูลจองห้อง</title>
    <link rel="stylesheet" href="booking_style.css">
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
                <span style="color: white;"><a>มหาวิทยาลัยศิลปากร</a></span>
                <br>
                <span style="color: white;"><a>Silpakorn University</a></span>
              </div>
              </div>
              <div class="nav-con">
                <ul class="menu">
                    <li><a href="user_page.php">หน้าเริ่มต้น</a></li>
                    <li><a href="SearchRoom.php">ห้องทั้งหมด</a></li>
                    <li><a href="logout.php">ออกจากระบบ</a></li>
                </ul>
              </div>

            </div>
          </div>
        </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2"></div>
        <div class="col-12 col-sm-11 col-md-7 devbanban" style="margin-top: 40px;">
          <br>
          <h4 style="color: black; margin-bottom:10px; margin-left:250px; ">กรุณากรอกข้อมูลให้ครบถ้วน</h4>
          <br>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              
                <div style="margin-left: 10px;">
                  <form action="save_booking.php" method="post">
                    <div class="form-group row">
                      <label class="col-sm-4">เลขห้อง</label>
                      <div class="col-sm-8">
                        <input type="text" name="table_name" class="form-control" disabled value="<?php echo $row['table_name'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4">ผู้จอง</label>
                      <div class="col-sm-8">
                        <input type="text" name="booking_name" class="form-control" required placeholder="ชื่อผู้จอง" minlength="5">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4">วันที่</label>
                      <div class="col-sm-8">
                        <input type="date" name="booking_date" class="form-control" required value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4">เวลา</label>
                      <div class="col-sm-8">
                        <select name="booking_time" class="form-control" required>
                          <option value="08:30">08:30 - 09:20 น.</option>
                          <option value="09:25">09:25 - 12:05 น.</option>
                          <option value="10:20">10:20 - 11:10 น.</option>
                          <option value="11:15">11:15 - 12:05 น.</option>
                          <option value="13:00">13:00 - 15:45 น.</option>
                          <option value="13:55">13:55 - 14:45 น.</option>
                          <option value="14:50">14:50 - 15:40 น.</option>
                          <option value="15:45">15:50 - 18:25 น.</option>
                          <option value="16:40">16:40 - 17:30 น.</option>
                          <option value="17:35">17:35 - 18:25 น.</option>
                          <option value="18:30">18:30 - 19:20 น.</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4">เบอร์โทร</label>
                      <div class="col-sm-8">
                        <input type="text" name="booking_phone" class="form-control" required placeholder="เบอร์โทร" minlength="10" maxlength="10">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-4">ผู้บันทึก</label>
                      <div class="col-sm-8">
                        <input type="text" name="booking_staff" class="form-control" required placeholder="ชื่อผู้บันทึก">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-8 text-center">
                        <input type="hidden" name="table_id" value="<?php echo $_GET['id'];?>">
                        <button type="submit" class="btn-success">บันทึกการจอง</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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