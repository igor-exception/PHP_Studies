<?php

namespace App;

class ToasterPro extends Toaster {

    public function __construct()
    {
        parent::__construct();
        $this->size = 4;
    }

    public function toastBagel()
    {
        foreach($this->slices as $i => $slice) {
        echo "<p>" . ($i + 1) . ": Slice of {$slice} was toasted with bagel Option </p>";
        }
    }
}