<?php

include_once __DIR__ . '/../autoload.php';
$config = __DIR__ . '../config.php';


class Registration
{

    public function registrationUser($data) {
        $reg = new DB();
        $reg->execute($data);

        $coockie = new Coockie();
        $coockie->setCoockieUser();
    }


    public function checkIssetUser($data) {
        $checkData = new DB();
        $data = $checkData->getData($data);
        $result = $data[0];
        return $result;
    }


}