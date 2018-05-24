<?php
/**
 * Created by .
 * User: dredger
 * Date: 5/24/2018
 * Time: 14:45
 */

namespace Skeleton1;


class Hello
{

    /**
     * @param string $msg
     */
    public function hello($msg = 'Hello world ')
    {
        echo " \n <br> $msg";
    }


    /**
     * @param string $arg1
     * @return bool|Hello
     */
    public function do1($arg1='')
    {
        return (!empty($arg1) ? true : false);

    }


    /**
     * @param string $imagePath
     */
    public function getImage($imagePath){

//        var_dump($imagePath);exit();
        return file_get_contents($imagePath);
    }

}