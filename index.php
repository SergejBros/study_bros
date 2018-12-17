<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 19:45
 */

ini_set('display_errors', true);
error_reporting('E-ALL');

require_once __DIR__ . '/vendor/autoload.php';

$kernel = new \App\Kernel();
$kernel->run();

