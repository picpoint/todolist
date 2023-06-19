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
        $reg = new DB();
        $result = $reg->getData($data);
        var_dump($result);

    }


}