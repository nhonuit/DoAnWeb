<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./style/style1.css" />
    <link rel="stylesheet" type="text/css" href="./style/bootstrap.css" />
    <title>ERROR</title>
</head>

<body>
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
            <div class="sign">
                <a href="signin.php" ><i class="fas fa-sign-in-alt"></i> Đăng nhập</a><br />

                <a href="signup.php" > <i class="fas fa-sign-in-alt"></i> Đăng kí </a>
            </div>          
        </div>
    </header>
    <div class="noidung">
        <div class="container" style="text-align: center;padding-top: 15%;" >
            <h2>Lost your way?</h2>
            <p>Khóa học này đã bị xóa hoặc đang được update, vui lòng quay lại sau!</p>
        </div>
    </div>
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

</html>