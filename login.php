<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <title>Đăng nhập</title>
    <style>
        h1 {
            color: blueviolet;
            font-size: 25px;
        }

        body {
            margin-top: 40px;
            margin-left: 400px;
        }

        .form-submit {
            background-color: blue;
            border: 0px;
        }
    </style>
</head>

<body>

    <form action="lg.php" method="POST" id="form-login">
        <h1>ĐĂNG NHẬP</h1>

        <br>
        <input type="text" class="form-input" name="username" placeholder="Mời bạn nhập tên tài khoản"><br>

        <br>
        <input type="password" class="form-input" name="password" placeholder="Mời bạn nhập mật khẩu"><br>
        <input style="margin-top:10px;" type="submit" value="Đăng nhập" class="btn btn-primary" value="Đăng nhập" name="btn_login"></a>


    </form>

</body>

</html>