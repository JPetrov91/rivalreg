<?php
Class Region {
    public $id;
    public $gold;
    public $oil;
    public $ore;
    public $numberOfPlayers;
    public $numberOfResidence;


    public function getNumberOfPlayers()
    {
        $query = "SELECT * from 'users' WHERE id = $this->id";
        
        return $this->numberOfPlayers;
    }
}