<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 03.12.18
 * Time: 21:17
 */





/// задача 1

$arr = [1, 2, 3, 4, 5];
$result = 0;

foreach($arr as $value){
    $result += pow($value, 2);
}
echo $result;



echo "<br><br>";

// задача 2

$arr = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400 ];
foreach ($arr as $key => $value){
    echo $key . ' - зарплата ' . $value . ' долларов. <br>';
}


echo "<br><br>";

/// задача 3

$a = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 'пн';
foreach ($a as $value){
    if($value == $day){
        echo "<i>" . $value . "</i><br>";
    }
    else{
        echo $value . "<br>";
    }
}


echo "<br><br>";

/// задача 4

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en = [];
$ru = [];

foreach ($arr as $key => $value){
    $en[] = $key;
    $ru[] = $value;
}
print_r ($en);
echo "<br>";
print_r ($ru);

?>