<?php

include_once __DIR__ . '/../autoload.php';


class AutoEntry
{

    public function autologin() {
        $arrCookie = $_COOKIE;

        foreach ($arrCookie as $key => $value) {
            if ($key == 'PHPSESSID') {
                continue;
            }

            $coockieKey = $key;
        }

        $data = new DB();
        $datauser = $data->getDataByName($coockieKey);
        print_r($datauser[0]);

        if ($coockieKey == $datauser[0]['name']) {
            echo "ACCESSS";
        } else {
            echo "DONT";
        }

    }

}