<?php



class DB
{
    public $dbh;


    function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=tododb', 'rmtar', '2203');
    }

    public function execute() {
        $sth = $this->dbh->prepare('INSERT INTO user(name, email, password) VALUES (\'admin\', \'admin@mail.ru\', \'2203\')' );
        $sth->execute();
    }

}