<<<<<<< HEAD
<?php

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: signin.php");
}
?>

=======
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./style/style1.css" />
    <link rel="stylesheet" type="text/css" href="./style/bootstrap.css" />
    <script type="text/javascript" src="./js/toggle.js"></script>
    <title>NHT</title>
</head>

<body>
<<<<<<< HEAD
<!-- Phần đầu trang -->
=======
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
    <header class="header">
        <div class="header-container">

            <div class="header-logo" style="display: inline-block;">
                <a href="./homepage.php">
                    <img src="./image/logo/logo_red.png" />
                </a>
            </div>
            <div class="header-menu">
                <ul class="header-list">
                    <li class="header-menu-item">
                        <a href="homepage.php">TRANG CHỦ</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="khoahoc.php">KHÓA HỌC</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="homepage.php">LIÊN HỆ</a>
                        <ul class="header-submenu">
                            <li class="header-submenu-item">
                                <a class="header-submenu-item" href="https://facebook.com">Facebook</a>
                            </li>
                            <li class="header-submenu-item">
                                <a class="header-submenu-item" href="https://youtube.com">Youtube</a>
                            </li>
                            <li class="header-submenu-item">
                                <a class="header-submenu-item"
                                    href="https://mail.google.com/mail/u/0/#inbox?compose=new">Mail</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">

                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                    aria-label="Search">
            </form>
            <div class="action">
<<<<<<< HEAD
                <div style="display: inline-block;">
=======
                <div style="display: flex;">
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
            <div class="profile" onclick="menutoggle();">
                    <img src="./image/icon_robot2.png">
                   
            </div>
<<<<<<< HEAD
            <!--<h3>Nguyen Nhon</h3> -->
            <?php echo "<h3>" . $_SESSION['username'] . "</h3>"; ?>
=======
            <h3>Nguyen Nhon</h3>
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
        </div>
            <div class="menu">
                
                <ul>
<<<<<<< HEAD
                    <li><a href="/user/profile.php">My profile</a></li>
                    <li><a href="/user/mycourse.php">Khóa học đã tham gia</a></li>
                    <li><a href="signout.php">Đăng xuất</a></li>
=======
                    <li><a href="profile.php">My profile</a></li>
                    <li><a href="mycourse.php">Khóa học đã tham gia</a></li>
                    <li><a href="/DoAnWeb/homepage.php">Đăng xuất</a></li>
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
                </ul>
            </div>
              </div>
        </div>
    </header>
<<<<<<< HEAD

    <!-- Hiển thị thông tin cá nhân -->
    <div class="noidung">
        <div class="container">
          <form action="" id="formDemo" style="margin-left: 30%;">
=======
    <div class="noidung">
        <div class="container">
          <form action="signup.php" id="formDemo" style="margin-left: 30%;">
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
            <h1>
              THÔNG TIN CÁ NHÂN
            </h1>
            <div style="display: inline-block; margin-left: 10%;" >
<<<<<<< HEAD
              
              <label>Tên</label><br>
              <input name="name" type="text" value="<?php echo $_SESSION['name']; ?>">

              <label>Tên đăng nhập</label><br>
              <input name="username" type="text" value="<?php echo $_SESSION['username']; ?>" READONLY><br>
              
              <br>
              <label>Số điện thoại</label><br>
              <input name="phonenum" type="text" value="<?php echo $_SESSION['phonenum']; ?>">
              <br>
    
              <label>Email</label><br>
              <input name="email" type="text" value="<?php echo $_SESSION['email']; ?>">
              <br>
    
              <br>
              <label>Thông tin thêm</label><br>
              <input style="margin-bottom: 20pt;" name="more" type="text" value="<?php echo $_SESSION['more']; ?>"><br>
    
            </div>
            <div style="margin-left: 10%;">
            <a href="signout.php">Logout</a>
            </div>
=======
              <label>Tên đăng nhập</label><br>
              <input name="username" type="text" value="nhonnhon" READONLY><br>
              
              <label>Tên</label><br>
              <input name="name" type="text" value="Nguyen Nhon">
              <br>
              <label>Số điện thoại</label><br>
              <input name="phonenum" type="text" value="0999999999">
              <br>
    
              <label>Email</label><br>
              <input name="email" type="text" value="nhon1234@gmail.com">
              <br>
    
              <label>Mật khẩu</label><br>
              <input id="password" name="password" type="password" value="123456789">
    
              <br>
              <label>Nhập lại mật khẩu</label><br>
              <input id="repassword" name="repassword" type="password">
    
              <br>
              <label>Thông tin thêm</label><br>
              <input style="margin-bottom: 20pt;" name="more" type="text" value="Nhondeptrai"><br>
    
            </div>
            <div style="margin-left: 10%;">
              <button id="btn" onclick="clicking">Gửi</button>
            </div>
            <script src="http://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <script type="text/javascript"
              src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    
            <script type="text/javascript">
              $(document).ready(function () {
                $("#formDemo").validate({
                  rules: {
                    username: {
                      required: true,
                      minlength: 5
                    },
                    name: {
                      required: true,
                      minlength: 1
                    },
                    phonenum: {
                      required: true,
                      minlength: 10,
                      maxlength: 11
                    },
                    email: {
                      required: true,
                      email: true
                    },
                    word: {
                      required: true,
                      minlength: 5
                    },
    
                    repassword: {
                      required: true,
                      minlength: 5,
                      equalTo: password
                    },
                  },
                  messages: {
                    username: {
    
                      required: "Vui lòng nhập tên đăng nhập!",
                      minlength: "User name quá ngắn"
                    },
                    username: {
    
                      required: "Vui lòng nhập tên!",
                      minlength: "Tên quá ngắn"
                    },
                    phonenum: {
                      required: "Vui lòng nhập số điện thoại",
                      minlength: "Số máy quý khách vừa nhập không có thực",
                      maxlength: "Số máy quý khách vừa nhập không có thực",
                    },
                    email: {
                      required: "Vui lòng nhập vào email",
                      email: "Nhập đúng định dạng email"
                    },
                    password: {
                      required: "Vui lòng nhập mật khẩu!",
                      minlength: "Vui lòng nhập ít nhất 5 kí tự",
    
                    },
                    repass: {
                      required: "Vui lòng nhập lại mật khẩu",
                      equalTo: "Mật khấu không trùng",
                    }
                  }
                });
              });
            </script>
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
          </form>
        </div>
    <style>
        #formDemo{
            margin-top: 10%;
        }
    </style>
        <footer class="footer">
          <div style="padding-top: 10%;">
              <hr />
    
              <div class="row">
                  <div class="col-sm-3">
                      <div class="tieude">
                          <h5>Bản Đồ</h5>
                      </div>
                      <div class="footer-content-maps">
                          <iframe
                              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15672.929714852033!2d106.8038081!3d10.8699184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafa66f9c8be3c91!2sUniversity%20of%20Information%20Technology%20VNU-HCM!5e0!3m2!1sen!2s!4v1624347961229!5m2!1sen!2s"
                              width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
    
                  </div>
                  <div class="col-sm-3" style="margin-left: 10%;">
                      <div class="tieude">
                          <h5>Quy định và điều khoản</h5>
                      </div>
                      <ul>
                          <li><a href="">Quy định</a></li>
                          <li><a href="">Điều khoản</a></li>
                          <li><a href="">Quyền và nghĩa vụ</a></li>
                      </ul>
                  </div>
    
                  <div class="col-sm-3">
                      <div class="tieude">
                          <h5>Thông tin liên hệ</h5>
                      </div>
                      Khu phố 6, P.Linh Trung, Q.Thủ Đức, Tp.Hồ Chí Minh<br />
    
                      <i class="fas fa-phone"></i>
                      0999999999 <br />
                      <i class="far fa-envelope"></i>
                      <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">uipath@edu.com</a> <br />
    
                      <i style="color: blue;" class="fab fa-facebook"></i><a href="https://facebook.com">UIpath</a>
                      <br />
                      <i style="color: red;" class="fab fa-youtube"></i><a href="https://youtube.com">UIPath
                          Channel</a><br />
                      <i style="color: aqua;" class="fab fa-twitter"></i><a
                          href="https://twitter.com">UIPath</a><br />
                      <i style="color: red;" class="fab fa-google-plus-g"></i><a
                          href="https://google.com">UIPath</a><br />
                  </div>
              </div>
          </div>
      </footer>
    </div>
    </body>
    
<<<<<<< HEAD
</html>


=======
    </html>
>>>>>>> edd0d01e1ba29db462085782fc4c1902656774fd
