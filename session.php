<?php
session_start();

if(!isset($_SESSION['count'])){
    echo 'Вы еще не обновляли страницу';
    $_SESSION['count'] = 1;
}
else{
    $_SESSION['count'] = $_SESSION['count'] + 1;
    echo 'Счетчик обновления страницы: ' . $_SESSION['count'];
}
