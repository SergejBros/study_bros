<?php

$salary = [
    'Иван' => 3000,
    'Виктор' => 2000,
    'Светлана' => 2500
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Зарплаты</title>
</head>
<body>
    <table>
        <tr>
            <th>Имя</th>
            <th>Зарплата</th>
        </tr>
        <?php foreach ($salary as $key => $value): ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>

