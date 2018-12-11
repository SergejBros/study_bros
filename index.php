<?php

var_dump($_POST);
$errors = [];
if(isset($_POST)){

    if($_POST['name']){
        $errors['name'] = 'Введите имя';
    }
    if($_POST['email']){
        $errors['email'] = 'Введите емейл';
    }
    if($_POST['password']){
        $errors['password'] = 'Введите пароль';
    }
}


include 'form.html.php';
