<?php
class Storage {
    private $id;
    private $oil_quant;
    private $ore_quant;
    private $gun_quant;
    private $antitank_quant;
    private $rocket_quant;
    private $grenadelaunchers_quant;
    private $stormtroopers_quant;
    private $energetics_quant;
    
    public function loadStorage($id) {
        $this->id = $id;
        $query = "SELECT FROM `storage` WHERE `id`= '$id'";
        $result = mysqli_fetch_assoc(mysqli_query($connection, $query));
        $this->oil_quant = $result['oil_quant'];
        $this->ore_quant = $result['ore_quant'];
        $this->gun_quant = $result['gun_quant'];
        $this->antitank_quant = $result['antitank_quant'];
        $this->rocket_quant = $result['rocket_quant'];
        $this->grenadelaunchers_quant = $result['grenadelaunchers_quant'];
        $this->stormtroopers_quant = $result['stormtroopers_quant'];
        $this->energetics_quant = $result['energetics_quant'];
    }
}