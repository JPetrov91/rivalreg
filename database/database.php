<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017.01.14.
 * Time: 22:12
 */

namespace Database;


class database
{

    protected $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new \PDO('mysql:host=localhost;dbname=rival;port=3308', 'root', '');
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function execute($sql) {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute();
        return $result;
    }

    public function query($sql, $class) {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute();
        if (false !== $result) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return[];
    }

}