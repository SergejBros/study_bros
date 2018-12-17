<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 20:43
 */

namespace App\Storage;


class DataBase implements StorageInterface
{

    public function save($data)
    {
        echo 'Сохраняем с помощью БД: ' . $data . "<br>";
    }
}