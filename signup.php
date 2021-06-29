
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
  
  <title>Đăng kí</title>
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
            <a href="signin.php"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a><br />

            <a href="signup.php"> <i class="fas fa-sign-in-alt"></i> Đăng kí </a>
        </div>
    </div>

<!-- Khởi tạo đăng ký -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: signin.php");
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
	$username = $_POST['username'];
  $phonenum = $_POST['phonenum'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$repassword = md5($_POST['repassword']);
  $more = $_POST['more'];

	if ($password == $repassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (name, username, phonenum, email, password , repassword, more)
					VALUES ('$name', '$username', '$phonenum', '$email', '$password', '$repassword', '$more')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
		//	echo "<script>alert('Đăng ký hoàn tất')</script>";
        echo "<script>Swal.fire(
          'Cảm ơn bạn đã đăng ký tài khoản ở NHT ACADEMY',
          'Giờ thì hãy bắt đầu khoá học đầu tiên đi nào!',
          'success'
        )</script>";

				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['repassword'] = "";
			} else {
        echo "<script>alert('Có gì đó sai')</script>";
			}
		} else {
			echo "<script>alert('Email đã tồn tại')</script>";
		}
	} else {
		echo "<script>alert('Mật khẩu nhập lại không giống ')</script>";
	}
}

?>
<!-- Khởi tạo đăng ký -->

<!-- Phần đầu trang -->
</header>
  <div class="noidung">
    <div class="container">
      <form action="" id="formDemo" method="POST">
        <h1>
          THÔNG TIN CÁ NHÂN
        </h1>
        <div style="display: inline-block;">
          <label>Tên</label><br>
          <input name="name" type="text" value="<?php echo $name; ?>" ><br>

          <label>Tên đăng nhập</label><br>
          <input name="username" type="text" value="<?php echo $username; ?>"><br>

          <label>Số điện thoại</label><br>
          <input name="phonenum" type="text" value="<?php echo $phonenum; ?>" ><br>

          <label>Email</label><br>
          <input name="email" type="text" value="<?php echo $email; ?>" ><br>

          <label>Mật khẩu</label><br>
          <input id="password" name="password" type="password" ><br>

          <label>Nhập lại mật khẩu</label><br>
          <input id="repassword" name="repassword" type="password" ><br>

          <label>Thông tin thêm</label><br>
          <input style="margin-bottom: 20pt;" name="more" type="text" placeholder="Tùy chọn" value="<?php echo $more; ?>"><br>
        </div>

        <div>
          <button name="submit" id="btn" onclick="clicking">Gửi</button>
        </div>
        
        <p>Nếu bạn đã có tài khoản rồi thì đăng nhập? <a href="signin.php">Đăng nhập</a>.</p>

<!-- kiểm tra dữ liệu -->
        <script src="http://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script type="text/javascript"
          src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
        <script type="text/javascript">
          $(document).ready(function () {
            $("#formDemo").validate({
              rules: {
                name: {
                  required: true,
                  minlength: 5
                },
                username: {
                  required: true,
                  minlength: 5
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
                password: {
                  required: true,
                  minlength: 5
                },

                repassword: {
                  required: true,
                  minlength: 5,
                  equalTo: password
                },
              },

              //Tin nhắn thông báo

              messages: {
                name: {

                  required: "Vui lòng nhập tên!",
                  minlength: "User name quá ngắn"
                },
                username: {

                  required: "Vui lòng nhập tên đăng nhập!",
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
                repassword: {
                  required: "Vui lòng nhập lại mật khẩu",
                  equalTo: "Mật khấu không trùng",
                }
              }
            });
          });
        </script>
      </form>
    </div>
<!-- kiểm tra dữ liệu -->

<!-- Phần chân trang -->
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
<!-- Phần chân trang -->

</body>
</html>