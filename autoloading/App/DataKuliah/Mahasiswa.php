<?php

class Mahasiswa extends Akademik implements InfoData{
    public $nim, $angkatan;

    public function __construct($nama, $email, $fakultas, $nim, $angkatan) {
       parent::__construct( $nama, $email, $fakultas );
       $this->nim = $nim;
       $this->angkatan = $angkatan;
    }

    function get_nim() {
         return $this->nim;
    }

    function get_angkatan() {
         return $this->angkatan;
    }

    function getInfoData() {
         $mhs = "<p>Nama : ".$this->get_name()."</p>
                 <p>Email : ".$this->get_email()."</p>
                 <p>Fakultas: ".$this->get_fakultas()."</p>
                 <p>NIM : ".$this->get_nim()."</p>
                 <p>Email : ".$this->get_angkatan()."</p>";

   return $mhs;
    }
}
