<?php

require 'function_subscribe.php';

$errors = [];
$email = '';
$subscribeAdded = false;
if(isset($_POST)) {
    if ($_POST['email']) {
        checkEmpty('email', 'Введите емейл');
        if (empty($errors['email']) && strpos($_POST['email'], '@') === false) {
            $errors['email'] = 'Email должен содержать @';
        }
        if (!$errors) {
            saveSubscribe($email);
            $subscribeAdded = true;
        }
    }
}

include 'form_subscribe.html.php';