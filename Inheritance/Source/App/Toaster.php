<?php

namespace App;

class Toaster {
    protected $slices;
    protected $size;

    public function __construct()
    {
        $this->slices = [];
        $this->size = 2;
    }


    public function addSlice($slice)
    {
        if(count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast()
    {
        foreach($this->slices as $i => $slice)
        {
            echo "<p>" . ($i + 1) . ": A slice of {$slice} was toasted </p>";
        }
    }
}