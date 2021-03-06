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
    <header class="header" style="background: black;">
        <div class="header-container">

            <div class="header-logo" style="display: inline-block;">
                <a href="./homepage.php">
                    <img src="./image/logo/logo_red.png" />
                </a>
            </div>
            <div class="header-menu" style="margin-left:10%">
               <h2 style="color: cornsilk;">Welcome, admin</h2>
            </div>
            
            <div class="action">
                <div style="display: flex;">
            <div class="profile" onclick="menutoggle();">
                    <img src="./image/icon_robot2.png">
                   
            </div>
            <h3>Nguyen Nhon</h3>
        </div>
            <div class="menu">
                
                <ul>
                    <li><a href="profile.php">My profile</a></li>
                    <li><a href="#">Khóa học đã tham gia</a></li>
                    <li><a href="/DoAnWeb/homepage.php">Đăng xuất</a></li>
                </ul>
            </div>
              </div>
        </div>
    </header>
    <div class="noidung">
        <div class="container" style="margin-top: 10%; text-align: center;">
            <button><a href="./quanlikhoahoc.php" style="color: black;"> Quản lí khóa học</a></button>
            <button><a href="./quanliuser.php" style="color: black;"> Quản lí người dùng</a></button>
          </div>
          <button type="button" class="btn btn-success" style="margin-left:45% ;margin-top: 5%;"><a href="./course.php" style="color: white;">Thêm khóa học</a></button>
          <table style="margin-left: 10%;">
              <tr>
                  <th><p style="text-align: center;">Ảnh khóa học</p></th>
                  <th><p style="text-align: center;">Tên khóa học</p></th>
                  <th><p style="text-align: center;">
                    Số phần
                </p>
                </th>
                <th><p style="text-align: center;">
                   Tổng thời lượng
                </p>
                </th>
                <th><p style="text-align: center;">Thao tác</p></th>
              </tr>
              <hr/>
              <tr>
                  <th>
                      <img src="./image/khoahoc/RPADevelopers.jpg" alt="ERROR">
                  </th>
                  <th>
                    <p>RPA Citizen Developer Foundation</p>
                  </th>
                  <th><p style="text-align:center">3</p></th>
                  <th><p style="text-align: center;">45 tiếng</p></th>
                  <th>   
                  <button type="button" class="btn btn-danger"><a href="#" style="color: white;"> Xóa khóa học</a></button>
                  <button type="button" class="btn btn-warning"><a href="#" style="color: white;"> Chỉnh sửa khóa học</a></button>
                  <button type="button" class="btn btn-primary"><a href="#" style="color: white;"> Xem khóa học</a></button></th>
              </tr>
          </table>
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