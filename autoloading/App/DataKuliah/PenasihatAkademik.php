<?php

class PenasihatAkademik extends Akademik implements InfoData{
    public $status;

    public function __construct($nama, $email, $fakultas, $status) {
       parent::__construct($nama, $email, $fakultas);
       $this->status= $status;
       }

    function get_status() {
         return $this->status;
    }

    function getInfoData() {
         $pn = "<p>Nama : ".$this->get_name()."</p>
         <p>Email : ".$this->get_email()."</p>
         <p>Fakultas: ".$this->get_fakultas()."</p>
         <p>status : ".$this->get_status()."</p>";
    
 return $pn;
    }
}