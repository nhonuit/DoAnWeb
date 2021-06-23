<?php



?>

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
    <title>Đăng nhập UIPath</title>
</head>

<body>
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
    <div class="noidung">
        <div class="container">
            <form action="signin.php" id="formDemo">
                <h1>
                    ĐĂNG NHẬP
                </h1>
                <div class="form">
                    <label>Tên đăng nhập</label><br>
                    <input name="username" type="text"><br>

                    <label>Mật khẩu</label><br>
                    <input id="pass" name="pass" type="password"><br>
                    <a href="#">Quên mật khẩu?</a><br>
                    <a href="loading.html"><input type="button" value="ĐĂNG NHẬP"></a>
                </div>
            </form>
        </div>
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