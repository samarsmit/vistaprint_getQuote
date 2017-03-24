<?php

class clsConsignment{
    public $weigth;
    public $volume;
    public $costofgood;
    public $width;
    public $heigth;
    public $length;

    public function __construct($weigth,$volume,$costofgood,$width,$heigth,$length){
        $this->weigth = $weigth;
        $this->volume = $volume;
        $this->costofgood = $costofgood;
        $this->width = $width;
        $this->heigth = $heigth;
        $this->length = $length;
    }
}


?>