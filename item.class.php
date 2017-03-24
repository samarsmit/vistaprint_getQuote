<?php

class clsitem{
    public $origin_zip_code = '';
    public $destination_zip_code = '';
    public $volumes = array();

    function __construct($strSouce,$strDestin,$volume){
        $this->origin_zip_code = $strSouce;
        $this->destination_zip_code = $strDestin;
        $this->volumes = array($volume);
    }
}

?>