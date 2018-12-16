<?php

define('DATA_FILE_NAME', 'subscribers.txt');

function checkEmpty($fieldName, $errorMessage){
    global $email, $errors;
    if (empty($_POST[$fieldName])){
        $errors[$fieldName] = $errorMessage;
    } else{
        $email = $_POST[$fieldName];
    }
}

function saveSubscribe($values){
    $file = fopen(DATA_FILE_NAME, 'a');
    fputs($file, $values . "\n");
    fclose($file);
}