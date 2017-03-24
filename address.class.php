<?php

class clsaddress{
    public $strSource = '';
    public $strDestination = '';

    public function __construct($strSource,$strDestination){
        $this->strSource = $strSource;
        $this->strDestination = $strDestination;
    }
}

?>