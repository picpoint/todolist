<?php



class DB
{
    public $dbh;


    function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=tododb', 'rmtar', '2203');
    }

    public function execute($data) {
        $name = $data[0];
        $email = $data[1];
        $password = $data[2];
        $sth = $this->dbh->prepare("INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$password')" );
        $sth->execute();
    }

}