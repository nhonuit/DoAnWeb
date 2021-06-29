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
                <div style="display: flex;">
            <div class="profile" onclick="menutoggle();">
                    <img src="./image/icon_robot2.png">
                   
            </div>
            <h3>Nguyen Nhon</h3>
        </div>
            <div class="menu">
                
                <ul>
                    <li><a href="/user/profile.php">My profile</a></li>
                    <li><a href="/user/mycourse.php">Khóa học đã tham gia</a></li>
                    <li><a href="signout.php">Đăng xuất</a></li>
                </ul>
            </div>
              </div>
        </div>
    </header>
    <div class="noidung">

        <div class="container">
            <div style="padding-top: 10%; padding-left: 10%; padding-bottom: 10%; text-align: center;">
                <table>
                    <th>
                        <div>
                            <img src="./image/icon_hocvien.png" height="30%" width="30%"/>
                            <p>Trên 43.373 học viên</p>
                        </div>
                    </th>
                    <th>
                        <div>
                            <img src="./image/icon_khoahoc.png" height="30%" width="30%" />
                            <p>8+ khóa học giành cho bạn</p>
                        </div>
                    </th>
                    <th>
                        <div>
                            <img src="./image/icon_hoc.png" height="30%" width="30%" />
                            <p>Học bất cứ lúc nào, bất cứ nơi đâu</p>
                        </div>
                    </th>
                </table>
            </div>

            <div class="khoahocnoibat">
                <h2>KHÓA HỌC NỔI BẬT</h2>
                <p>Những khóa học được truy cập nhiều nhất</p>
                <div class="slider-frame">
                    <div class="slide-images">
                        <div class="img-container">
                            <img src="./image/slide/courses_1.jpg" width="50%" height="50%" />
                        </div>
                        <div class="img-container">
                            <img src="./image/slide/courses_2.png" />
                        </div>
                        <div class="img-container">
                            <img src="./image/slide/courses_3.png" />
                        </div>
                    </div>
                </div>
                <a href="khoahoc.php" ><button type="button" class="btn btn-primary">Tất cả khóa học</button></a>
            </div>
            <div class="loiich">
                <h2>Chúng tôi có thể mang lại điều gì?</h2>

                <table>
                    <tr>
                        <th>
                            <div>
                                <img src="./image/Icon-speed .png" />
                                <h2>Tiết kiệm thời gian, công sức</h2>
                                <br />
                                <p style="text-align: left;">
                                    UiPath streamlines processes, uncovers efficiencies and provides insights, making
                                    the path to digital transformation fast and cost-effective. It leverages existing
                                    systems to minimize disruption.
                                </p>
                            </div>
                        </th>
                        <th>
                            <div>
                                <img src="./image/Icon-light-group-of-users.png" />
                                <h2>Học cùng với hàng nghìn người</h2>
                                <p style="text-align: left;">
                                    By automating tasks, your teams are free to spend time on work with better returns.
                                    More than 200 ready-made components in our Marketplace give your employees more
                                    time—in less time.
                                </p>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div>
                                <img src="./image/Icon-light-read-guidelines.png" />
                                <h2>Nhiều khóa học chất lượng</h2>
                                <p style="text-align: left;">
                                    UiPath robots improve compliance by following the exact process that meets your
                                    standards. Reporting tracks your robots, so documentation is always at your
                                    fingertips.
                                </p>
                            </div>
                        </th>
                        <th>
                            <div>
                                <img src="./image/Icon-light-thank-you.png" />
                                <h2>
                                    Lan tỏa tinh thần học hỏi tới cộng đồng
                                </h2>
                                <p style="text-align: left;">
                                    With robots handling tasks, teams are free to deliver extra service to your
                                    highest-level customers. By standardizing processes, your outcomes are more
                                    efficient and effective.
                                </p>
                            </div>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="khoahocnoibat">
                <a href="signup.php"></a><button type="button" class="btn btn-primary">Tham gia ngay</button>
            </div>
            <div class="icon_logo" style="display: inline-block;">
                <table>
                    <tr>
                        <th>
                            <img src="./image/Google.png" />
                        </th>
                        <th>
                            <img src="./image/Fujifilm.png" />
                        </th>
                        <th>
                            <img src="./image/General_Electric-color-logo-180x90.png" />
                        </th>
                        <th>
                            <img src="./image/HP.png" />
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <img src="./image/logo_airbus.png" />
                        </th>
                        <th>
                            <img src="./image/Schneider_Electric.png" />
                        </th>
                        <th>
                            <img src="./image/Equifax.png" />
                        </th>
                        <th>
                            <img src="./image/VirginMedia.png" />
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="app-maps">
            <div class="app-maps-container grid">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15672.929714852033!2d106.8038081!3d10.8699184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafa66f9c8be3c91!2sUniversity%20of%20Information%20Technology%20VNU-HCM!5e0!3m2!1sen!2s!4v1624347961229!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">nht@edu.com</a> <br />

                        <i style="color: blue;" class="fab fa-facebook"></i><a href="https://facebook.com"> NHT</a>
                        <br />
                        <i style="color: red;" class="fab fa-youtube"></i><a href="https://youtube.com"> NHT
                            Channel</a><br />
                        <i style="color: aqua;" class="fab fa-twitter"></i><a
                            href="https://twitter.com"> NHT</a><br />
                        <i style="color: red;" class="fab fa-google-plus-g"></i><a
                            href="https://google.com"> NHT</a><br />
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>