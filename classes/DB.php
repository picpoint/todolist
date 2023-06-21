<?php



class DB
{
    public $dbh;


    function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=tododb', 'rmtar', '2203');
    }

    public function getData($data) {
        $email = $data['email'];
        $sth = $this->dbh->prepare("SELECT * FROM user WHERE email = :email LIMIT 1");
        $sth->execute(['email' => $email]);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


//    public function checkUserDate($array) {
//        $email = $array[0];
//        $password = $array[1];
//        $sth = $this->dbh->prepare("SELECT * FROM user WHERE email = :email AND password = :password LIMIT 1");
//        $sth->execute(['email' => $email, 'password' => $password]);
//        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//    }



    public function execute($data) {
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $sth = $this->dbh->prepare("INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$password')" );
        $sth->execute();
    }

}