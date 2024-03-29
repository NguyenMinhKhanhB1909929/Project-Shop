<?php
    include "/xampp/htdocs/NienLuan/classes/adminlogin.php";
?>
<?php
    $class = new adminlogin();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $adminUser = $_POST['adminUser'];
        $adminPass = $_POST['adminPass'];

        $login_check = $class->login_admin($adminUser, $adminPass);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MMK - ADMIN Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
    background: #f7f7f7;
    font-family: 'Roboto', sans-serif;
    background-image: url(https://topthuthuat.com/wp/wp-content/uploads/2020/05/ban-phim-laptop-bi-loi.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-origin: content-box;
}

.login-box {
    margin-top: 75px;
    height: auto;
    background: #2a3f54;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ECF0F5;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=text] {
    background-color: #f7f7f7;
    border: none;
    border-bottom: 2px solid #1abb9c;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #1abb9c;
}

input[type=password] {
    background-color: #f7f7f7;
    border: none;
    border-bottom: 2px solid #1abb9c;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #1abb9c;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #1abb9c;
    outline: 0;
    background-color: #1abb9c;
    color: #ECF0F5;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 10px;
    color: white;
    font-weight: bold;
    letter-spacing: 1px;
    padding-bottom: 4px;
}

.btn-outline-primary {
    border-color: #1abb9c;
    color: #1abb9c;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #1abb9c;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}
  </style>
  </head>

  <body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">

                  <img src="../docs/images/LOGO.png" alt="" style="width: 100px; height: 100px; object-fit: contain;">
                </div>
                <div class="col-lg-12 login-title">
                    NMK - ADMIN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="login.php" method="post">
                            <span>
                                <?php
                                    echo '123456';
                                ?>
                            </span>
                            <div class="form-group">
                                <label class="form-control-label" style="font-size: 16px;">Tên đăng nhập:</label>
                                <input type="text" class="form-control" name="adminUser">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" style="font-size: 16px;" >Mật khẩu:</label>
                                <input type="password" class="form-control" name="adminPass">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-12 login-btm login-button" style="text-align: center;">
                                    <a href="#" type="submit" class="btn btn-outline-primary" style="font-size: 20px;">Đăng nhập</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>





  </body>
</html>
