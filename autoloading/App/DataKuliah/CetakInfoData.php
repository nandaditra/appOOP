<?php

class CetakInfoData {
    public $daftarData = array();

    public function tambahData( Akademik $human) {
         $this->daftarData[] = $human;
    }

    public function cetakData() {
         $list = "Data : <br>";

         foreach( $this->daftarData as $l) {
             $list .= "-{$l->getInfoData()}<br>";
         }

         return $list;
    }
}
