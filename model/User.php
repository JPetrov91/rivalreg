<?php
Class User {
    private $id;
    private $login;
    private $password;
    private $name;
    private $strength;
    private $knowledge;
    private $endurance;
    private $money;
    private $gold;
    private $currentEnergy;
    private $maxEnergy;
    private $currentRegion;
    private $residenceRegion;

    function __construct($id) {
        $this->id = $id;
    }

    function getStrength() {
        return $this->strength;
    }
    function getKnowledge() {
        return $this->knowledge;
    }
    function getEndurance() {
        return $this->endurance;
    }
    function getMoney() {
        return $this->money;
    }
    function getGold() {
        return $this->gold;
    }
    function getEnergy() {
        $query = "SELECT FROM `users` WHERE `id`= '$this->id'";
        $result = mysqli_fetch_assoc(mysqli_query($connection, $query));
        $this->currentEnergy = $result['current_energy'];
    }
    function recoverEnergy() {
        while ($this->currentEnergy == $this->maxEnergy) {
        }
    }
}