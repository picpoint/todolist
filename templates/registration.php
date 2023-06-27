<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

<div class="reg__wrapper">
    <div class="reg__regblock">
        <div class="reg__regblockhdr">
            <img src="../public/pict/logo.png" alt="logo">
            <span>Регистрация</span>
        </div>
        <div class="reg__regblockbody">
            <form action="../registration.php" method="post" name="regform">
                <input type="text" name="name" placeholder="Имя:">
                <input type="email" name="email" placeholder="E-mail:">
                <input type="password" name="password" placeholder="Пароль:">
                <button type="submit" name="regbtn">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>