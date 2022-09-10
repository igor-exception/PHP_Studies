<?php

namespace App;

class FancyOven extends ToasterPro {
    
    public function __construct()
    {
        parent::__construct();
        $this->size = 6;
    }

    public function fry()
    {
        echo "<p>Something was fried!</p>";
    }

}