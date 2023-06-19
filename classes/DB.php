<?php



class DB
{
    public $dbh;


    function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=tododb', 'rmtar', '2203');
    }

    public function getData($data) {
        $email = $data[1];
        $sth = $this->dbh->prepare("SELECT `email` FROM `user` WHERE `email` = $email LIMIT 1");
        $res = $sth->execute();
        return $res;

    }

    public function execute($data) {
        $name = $data[0];
        $email = $data[1];
        $password = $data[2];
        $sth = $this->dbh->prepare("INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$password')" );
        $sth->execute();
    }

}