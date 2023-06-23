<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

<div class="auth__wrapper">
    <div class="auth__authblock">
        <div class="auth__authblockhdr">
            <img src="../public/pict/logo.png" alt="logo">
            <span>Авторизация</span>
        </div>
        <div class="auth__authblockbody">
            <form action="../authorization.php" method="post" name="authform">
                <input type="email" name="email" placeholder="E-mail:">
                <input type="password" name="password" placeholder="Пароль:">
                <button type="submit" name="authbtn">ВОЙТИ</button>
                <span>rmtar@bk.ru</span>
                <span>2203</span>
            </form>
        </div>
    </div>
</div>

</body>
</html>