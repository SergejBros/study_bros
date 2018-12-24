<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 24.12.2018
 * Time: 12:50
 */

session_start();
if(isset($_POST['country'])){
   $_SESSION['country'] = $_POST['country'];
}

echo"<form method='POST'>
        <input  type='text' id='country' name='country'>
        <input type='submit'>
    </form>";