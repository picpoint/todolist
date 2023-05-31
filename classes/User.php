<?php



class User
{

    public $name;
    public $email;
    public $password;


//    function __construct($name, $email, $password)
//    {
//        $this->name = $name;
//        $this->email = $email;
//        $this->password = $password;
//    }


    public function userData() {
        print_r($_POST);
    }



}