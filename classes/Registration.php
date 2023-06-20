<?php

include __DIR__ . '/DB.php';

$config = __DIR__ . '../config.php';


class Registration
{

    public function registrationUser($data) {
        $reg = new DB();
        $reg->execute($data);
    }


    public function checkIssetUser($data) {
        $checkData = new DB();
        $res = $checkData->getData($data);

        echo "<pre>";
        print_r($res);
        echo "</pre>";


    }


}