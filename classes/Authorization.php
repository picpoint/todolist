<?php

include_once __DIR__ . '/../autoload.php';


class Authorization
{

    public function checkAuth($data)
    {
        $checkUser = new DB();
        $dataRaw = $checkUser->getData($data);
        $res = $dataRaw[0];

        if (!empty($res)) {
            if ($res['email'] == $data['email'] && password_verify($data['password'], $res['password'])) {
                header('Location: lk.php');
            } else {
                echo "Неправильно введён логин или пароль...";
            }
        } else {
            echo "Такого пользователя не существует...";
        }
    }

}