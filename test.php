<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 24.12.2018
 * Time: 12:55
 */

session_start();
if(isset($_SESSION['country'])){
    echo $_SESSION['country'];
}
