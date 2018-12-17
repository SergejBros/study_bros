<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 20:39
 */

namespace App\Service;


use App\Storage\StorageInterface;

class Saver
{
    /**
     * @var
     */
    private $storage;

    /**
     * Saver constructor.
     * @param $storage
     */
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function doIt(){
        $this->storage->save('Данные для сохранния');
    }


}