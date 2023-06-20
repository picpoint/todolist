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
        $data = $checkData->getData($data);
        $result = $data[0];
        return $result;
    }


}