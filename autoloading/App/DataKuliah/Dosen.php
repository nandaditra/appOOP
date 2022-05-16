<?php

class Dosen extends Akademik implements InfoData{
     public $nid, $tahunAjar, $lulusan;

     public function __construct($nama, $email, $fakultas,$nid, $tahunAjar, $lulusan) {
         parent::__construct($nama, $email, $fakultas);
         $this->nid= $nid;
         $this->tahunAjar= $tahunAjar;
         $this->lulusan= $lulusan;
     }

     function get_nid() {
          return $this->nid;
     }

     function get_tahunAjar() {
          return $this->tahunAjar;
     }

     function get_lulusan() {
          return $this->lulusan;
     }

     function getInfoData() {
          $dsn = "<p>Nama : ".$this->get_name()."</p>
                  <p>Email : ".$this->get_email()."</p>
                  <p>Fakultas: ".$this->get_fakultas()."</p>
                  <p>Nid : ".$this->get_nid()."</p>
                  <p>Tahun Ajaran : ".$this->get_tahunAjar()."</p>
                  <p>Lulusan : ".$this->get_lulusan()."</p>";

          return $dsn;
     }
}
