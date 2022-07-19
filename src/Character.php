<?php

namespace App;

class Character {

    private int $healthGoku;
    private int $healthVegeta;
    private int $gokuLevel;
   private bool $gokuLive;
   private int $damegeReceived;

    public function __construct()
    {
        $this->healthGoku = 1000;
        $this ->healthVegeta = 1000;
        $this->gokuLevel = 1;
        $this ->gokuLive = true;
        $this ->damegeReceived = 500;
    }

    public function getHealthGoku()
    {
        return $this->healthGoku; 
    }

    public function getHealthVegeta()
    {
        return $this->healthVegeta; 
    }

    public function getLevel()
    {
        return $this->gokuLevel;
    }

    public function getLive()
    {
        return $this->gokuLive;
    }
    
    public function getDamageReceived()
    {
        return $this->damegeReceived;
    }
}

?>