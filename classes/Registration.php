<?php

include __DIR__ . '/DB.php';

$config = __DIR__ . '../config.php';


class Registration
{

    public function registrationUser($data) {
        $reg = new DB();
        $reg->execute();
    }


}