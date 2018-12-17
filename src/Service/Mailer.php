<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 17.12.18
 * Time: 19:59
 */

namespace App\Service;


class Mailer
{

    public function send($to){
        echo 'Отправка письма ' . $to;
        $transport = (new \Swift_SmtpTransport('smtp.ethereal.email', 587, 'tls'))
            ->setUsername('tmx6yq7wpkdqxphg@ethereal.email')
            ->setPassword('BzjTYM9fdPz8d2hY2Q');

        $mailer = new \Swift_Mailer($transport);

        $message = (new \Swift_Message('Тема'))
            ->setFrom(["serzh@mail.com" => 'Join Doe'])
            ->setTo($to)
            ->setBody('Сообщение из PHP')
        ;

        $mailer->send($message);

    }

}