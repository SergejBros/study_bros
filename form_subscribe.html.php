<html>
<head>
 <title>Подписка</title>
</head>
<body>
    <?php if($subscribeAdded): ?>
    <p> Спасибо за подписку </p>
    <?php else: ?>
    <form action="index_subscribe.php" method="POST">
        <label>Email <input type="email" name="email" value="<?=$email?>"></label>
        <?= isset($errors['email']) ? $errors['email'] : '' ?><br><br>
        <button type="submit">Подписаться</button>
    </form>
    <?php endif ?>
</body>
</html>