<?php



class DB
{
    public $dbh;


    function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=tododb', 'rmtar', '2203');
    }

    public function execute($data) {
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];

        print_r($data);


        $sth = $this->dbh->prepare("INSERT INTO user(name, email, password) VALUES ('$username', '$email', '$password')" );
        $sth->execute();
    }

}