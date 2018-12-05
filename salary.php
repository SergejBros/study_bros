<?php

error_reporting(E_ALL); ini_set("display_errors", 1);

$salary = [
    'Иван' => 3000,
    'Виктор' => 2000,
    'Светлана' => 2500
];

$dir = 'asc';

if(isset($_GET['dir']) && $_GET['dir'] == 'desc'){
    $dir = 'desc';
}

if(isset($_GET['sort'])){
  switch ($_GET['sort']){
      case 'name':
            if($dir == 'asc') {
                ksort($salary);
            }
            else{
                krsort($salary);
            }
      break;
      case 'salary':
             if($dir == 'asc') {
                 asort($salary);
             }
             else{
                 arsort($salary);
             }
      break;
  }
};

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
            <th><a href="salary.php?sort=name&dir=asc"> + </a><a href="salary.php?sort=name&dir=desc"> - </a> Имя</th>
            <th><a href="salary.php?sort=salary&dir=asc"> + </a><a href="salary.php?sort=salary&dir=desc"> - </a>Зарплата</th>
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

