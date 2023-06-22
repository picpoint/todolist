<?php

include_once __DIR__ . '/../autoload.php';


class Authorization
{

    public function checkAuth($data)
    {
        print_r($data);

        echo "<br>";
        echo "<br>";

        $checkUser = new DB();
        $dataRaw = $checkUser->getData($data);

        $res = $dataRaw[0];

        echo "<pre>";
        var_dump($res);
        echo "</pre>";

        if (!empty($res)) {
            if ($res['email'] == $data['email']) {
                echo "ACCESS";
            } else {
                echo "Неправильно введён логин или пароль...";
            }
        } else {
            echo "Такого пользователя не существует...";
        }


//        if (!empty($res)) {
//            foreach ($res as $key => $value) {
//                if ($key == 'email' && $value == $data['email']) {
//                    echo "ACCESS";
//                } else {
//                    echo "Неправильно введён логин или пароль...";
//                }
//            }
//        } else {
//            echo "Такого пользователя не существует...";
//        }


//        $checkUser->checkUserDate($data);


    }

}