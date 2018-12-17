<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 19:47
 */

namespace App;


// use App\Service\Mailer;
use App\Service\Saver;
use App\Storage\DataBase;
use App\Storage\File;

class Kernel
{
    public function run(){

        // $mailer = new Mailer();
        // $mailer->send('test@test.com');

        $database = new DataBase();
        $files = new File();

        $databaseSaver = new Saver($database);
        $filesSaver = new Saver($files);

        $databaseSaver->doIt();
        $filesSaver->doIt();
    }





}