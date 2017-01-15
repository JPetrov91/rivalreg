<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017.01.15.
 * Time: 0:33
 */

namespace Models;

use Database;

class User
{
    const TABLE = 'users';

    private $id;
    private $login;
    private $password;
    private $email;
    private $name;
    private $level;
    private $strength;
    private $knowledge;
    private $endurance;
    private $current_energy;
    private $max_energy;
    private $money;
    private $gold;
    private $experience;
    private $current_region_id;
    private $residence_region_id;
    private $party_id;

    public static function findAll()
    {
        $database = new Database\database();
        return $database->query(
            'SELECT * FROM ' . self::TABLE, self::class
        );
    }

}