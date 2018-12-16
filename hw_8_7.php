<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 16:43
 */

require "Form.php";

$ob = new Form();
echo $ob->input(['type'=>'text', 'value'=>'333', 'class'=>'ggg']);

