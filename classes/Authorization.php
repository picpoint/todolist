<?php

include_once __DIR__ . '/../autoload.php';


class Authorization
{

    public function checkAuth($data) {
        print_r($data);

        $checkUser = new DB();
        $res = $checkUser->getData($data);

        print_r($res);

//        $checkUser->checkUserDate($data);


    }

}