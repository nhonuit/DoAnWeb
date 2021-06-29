<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./style/style1.css" />
    <link rel="stylesheet" type="text/css" href="./style/style4.css" />
    <link rel="stylesheet" type="text/css" href="./style/bootstrap.css" />
    <script type="text/javascript" src="./js/toggle.js"></script>
    <title>Course</title>
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
            <div class="action">
                <div style="display: inline-block;">
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
        <div class="container" style="text-align: center;padding-top: 15%;" >
            <div>
                <h2>Tên khóa học</h2>
                <p>RPA Citizen Developer Foundation</p>
            </div>
        <table>
           
            <tr>
                <th>
                    <img src="./image/khoahoc/html_css.jpg">  
                </th>
                <th>
                    <button type="button" class="btn btn-info">Thêm khóa học</button>
                    <h2>Thông tin khóa học</h2>
                    <p>Tên khóa học</p>
                    <p>Số video</p>
                    <p>Thời lượng</p>
                </th>
            </tr>
        </table>
        </div>
        <hr>
        <div>
            <h2>
                    BÌNH LUẬN
            </h2>
            <textarea name="" class="commentbox" placeholder="Vui lòng bình luận về chất lượng khóa học"></textarea>
        </div>
        <div class="user_img" style="display: flex;">
           

        
            <img class="img" src="./image/logo_blue.png" alt="logo">
           
            <h1>Nguyen Nhon</h1>  
       
        
        </div>
        <div class="user_ct">
                     
            <p style="font-size: 15px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis facere dolorem, reprehenderit veritatis est dolorum asperiores praesentium illum unde maxime minus eos natus libero dolores ex, sapiente blanditiis vero odio.</p>
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