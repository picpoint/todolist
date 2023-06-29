<?php

include_once __DIR__ . '/../autoload.php';


class Coockie
{

    public function setCoockieUser() {
        setcookie($_POST['name'], session_id(), time() + 86400);
    }

}