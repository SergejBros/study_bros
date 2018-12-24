<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 24.12.2018
 * Time: 13:07
 */

// задача 2
echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea');

// задача 5
echo preg_replace('#ab*a#', '!', 'aba aca aea abba adca abea');

// задача 9
echo preg_replace('#2\+3#', '!', '2+3 223 2223');

// задача 14
echo preg_replace('#a.+?a#', '!', 'aba accca azzza wwwwa');

// задача 5
echo preg_replace('#a\d+a#', '!', 'a1a a22a a333a a4444a a55555a aba aca');

// задача  8
echo preg_replace('#a\Wb#', '!', 'ave a#b a2b a$b a4b a5b a-b acb');

// задача 19
echo preg_replace('#a[a-zA-Z]+a#', '!', 'aAXa aeffa aGha aza ax23a a3sSa');