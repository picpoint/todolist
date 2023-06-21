<?php

include __DIR__ . '../autoload.php';


class Authorization
{

    public function checkAuth($data) {
        print_r($data);

        $checkUser = new DB();
        $checkUser->checkUserDate($data);


    }

}