<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 24.12.2018
 * Time: 11:34
 */

require "Form.php";
require "SmartForm.php";

$form = new SmartForm();
echo $form->open(['action'=>'hw_8_8.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'name'=>'name', 'id'=>'name']);
echo '<br>';
echo $form->textarea(['placeholder'=>'placeholder', 'name'=>'textarea', 'id'=>'textarea'], '');
echo '<br>';
echo $form->submit(['value'=>'Отправить']);
echo $form->close();
