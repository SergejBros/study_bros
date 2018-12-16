<?php
/**
 * Created by PhpStorm.
 * User: Bros
 * Date: 16.12.2018
 * Time: 16:29
 */

class Form
{

    /**
     * @param $arr
     * @return mixed
     */
    public function input($arr)
    {
        return '<input ' . $this->getStr(($arr)) . '>';
    }


    public function submit($arr)
    {
        return '<input type="submit" ' . $this->getStr(($arr)) . '>';
    }

    public function password($arr)
    {
        return '<input type="password" ' . $this->getStr(($arr)) . '>';
    }

    public function textarea($arr, $text)
    {
        return '<textarea ' . $this->getStr(($arr)) . '>' . $text . '</textarea>';
    }

    public function open($arr)
    {
        return '<form ' . $this->getStr(($arr)) . '>';
    }

    public function close()
    {
        return '</form>';
    }


    /**
     * @param $arr2
     * @return mixed
     */
    private function getStr($arr2)
    {
        $str = '';
        foreach($arr2 as $key => $value){
            $str .= $key . '="' . $value . '" ';
        }
        return $str;
    }

}