<?php

abstract class Akademik {
     protected $nama, $email, $fakultas;

     public function __construct($nama, $email, $fakultas) {
        $this->nama = $nama;
        $this->email = $email;
        $this->fakultas = $fakultas;
     }

     function get_name() {
          return $this->nama;
     }     

     function get_email() {
          return $this->email;
     }     

     function get_fakultas() {
          return $this->fakultas;
     }
     
     function cetakAkademik() {
          $a = "<p>Nama : ".$this->get_name()."</p>
                <p>Email : ".$this->get_email()."</p>
                <p>Fakultas: ".$this->get_fakultas()."</p>";
          return $a;
     }
}
