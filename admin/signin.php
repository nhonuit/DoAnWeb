

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" /> 
    <link rel="stylesheet" type="text/css" href="./style/style3.css">
    <link rel="stylesheet" type="text/css" href="./style/bootstrap.css" />
    <title>Đăng nhập</title>
</head>

<body>
<div class="container">
    <h1>
        ĐĂNG NHẬP
    </h1>
<form action="signin.php" id="form_signin">
               
                <div class="form">
                    <label>Tên đăng nhập</label><br>
                    <input name="username" type="text"><br>

                    <label>Mật khẩu</label><br>
                    <input id="password" name="password" type="password"><br>
                    <a href="#">Quên mật khẩu?</a><br>
                    <a href="#"><input class="login_admin" type="submit" value="ĐĂNG NHẬP"></a>
                </div>
            </form>
    </div>
 <style>
.container {
  width: 30%;
  margin: auto;
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}
.container
{margin-top: 15%;
 
  
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background: #f2f2f2;
}

.login_admin {
   margin-top: 10%;
  font-family: Raleway-Bold;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 150px;
  height: 55px;
  background-color: #333333;
  border-radius: 27px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login_admin:hover {
  background-color: black;
}

 </style>
   
</body>

</html>