<?php

include_once __DIR__ . '/../autoload.php';


class Authorization
{

    public function checkAuth($data)
    {
        $checkUser = new DB();
        $dataRaw = $checkUser->getData($data);
        $fullRes = $dataRaw[0];

        if (!empty($fullRes)) {
            if ($fullRes['email'] == $data['email'] && password_verify($data['password'], $fullRes['password'])) {
                header('Location: lk.php');
            } else {
                echo "Неправильно введён логин или пароль...";
            }
        } else {
            echo "Такого пользователя не существует...";
        }
    }

}