<?php

include_once __DIR__ . '../autoload.php';


class AutoEntry
{

    public function autologin() {
        $arrCookie = $_COOKIE;
        print_r($arrCookie);

        $data = new DB();
        $data->getDataByName();

    }

}