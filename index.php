<?php

require 'function.php';

$errors = [];

$values = [
    'name' => '',
    'email' => '',
    'password' => '',
    'subscribe' => 0
];
$userAdded = false;

if(isset($_POST)){

    checkEmpty('name', 'Введите имя');
    checkEmpty('email', 'Введите емейл');
    checkEmpty('password', 'Введите пароль');

    if(empty($errors['email']) && strpos($_POST['email'], '@') === false){
            $errors['email'] = 'Email должен содержать @';
    }

    if(!empty($_POST['subscribe'])){
        $values['subscribe'] = 1;

    }

    if(!$errors){
        saveUser($values);
        $userAdded = true;
    }

}

include 'form.html.php';
