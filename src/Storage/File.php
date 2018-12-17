<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 20:46
 */

namespace App\Storage;


class File implements StorageInterface
{

    public function save($data)
    {
        echo 'Сохраняем в файл: ' . $data . "<br>";
    }
}