<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label>Имя <input type="text" name="name"></label><?= $errors['name'] ?: '' ?><br>
        <label>Email <input type="email" name="email"></label><?= $errors['email'] ?: '' ?><br>
        <label>Пароль <input type="password" name="password"></label><?= $errors['password'] ?: '' ?><br>
        <label><input type="checkbox" name="subscribe" value="1"> Подписаться на рассылку</label><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>