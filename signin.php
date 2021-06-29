<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./style/style1.css" />
    <link rel="stylesheet" type="text/css" href="./style/style3.css" />
    <link rel="stylesheet" type="text/css" href="./style/bootstrap.css" />
    <title>Đăng nhập</title>
</head>

<body>

<!-- Phần đầu trang -->
    <header class="header">
        <div class="header-container">

            <div class="header-logo" style="display: inline-block;">
                <a href="./homepage.html">
                    <img src="./image/logo/logo_red.png" />
                </a>
            </div>
            <div class="header-menu">
                <ul class="header-list">
                    <li class="header-menu-item">
                        <a href="homepage.html">TRANG CHỦ</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="khoahoc.html">KHÓA HỌC</a>
                    </li>
                    <li class="header-menu-item">
                        <a href="homepage.html">LIÊN HỆ</a>
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
            <div class="sign">
                <a href="signin.php" ><i class="fas fa-sign-in-alt"></i> Đăng nhập</a><br />

                <a href="signup.php" > <i class="fas fa-sign-in-alt"></i> Đăng kí </a>
            </div>          
        </div>
    </header>



<!-- Đăng nhập -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: /user/profile.php");
}
/*else {
    echo "<script>Swal.fire(
        'Bạn cần đăng nhập',
        'Nhập Email và Mật khẩu',
        'error'
      )</script>";
}*/

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: /user/profile.php");
	} else {
		echo "<script>Swal.fire(
            'Lỗi đăng nhập',
            'Nhập lại Email hoặc Mật khẩu',
            'error'
          )</script>";
	}
}

?>
<!-- Đăng nhập -->

        <!-- Phần giao diện đăng nhập -->
    <div class="noidung">
        <div class="container">
            <form action="" id="formDemo" method="POST">
                <h1>
                    ĐĂNG NHẬP
                </h1>
                <div class="form">

                    <label>Email</label><br>
                    <input name="email" type="text" value="<?php echo $email; ?>"><br>

                    <label>Mật khẩu</label><br>
                    <input id="password" name="password" type="password" ><br>
                    <a href="quenmatkhau.html">Quên mật khẩu?</a><br>

                    <!-- <a><input type="button" name="submit" value="ĐĂNG NHẬP"></a> -->
                    <button name="submit" class="btn">Login</button>
                </div>
            </form>
            <div class="signin_gg_fb">
                <a></a><button type="button"><i style="color: blue;" class="fab fa-facebook"></i>Đăng nhập bằng Facebook</button><br>
                <a></a><button type="button"><i style="color: red;" class="fab fa-google-plus-g"></i>Đăng nhập bằng Google   </button>
            </div>

            <p>Bạn đã có tài khoản chưa? <a href="signup.php">Đăng ký ở đây</a>.</p>
        </div>
        <!-- Phần giao diện đăng nhập -->

        <!-- Phần chân trang -->
        <footer class="footer">
            <div style="padding-top: 10%;">
                <hr/>
               
                <div class="row">
                    <div class="col-sm-3">     
                        <div class="tieude">                  
                        <h5>Bản Đồ</h5>    
                        </div>                   
                    <div class="footer-content-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.5751160153172!2d105.78721831490384!3d20.969571286030543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad1efccf9677%3A0xbc67cd671314e5d1!2sHTBakery!5e0!3m2!1svi!2s!4v1623925136041!5m2!1svi!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

</html>