<?php
interface InfoData {
     function getInfoData();
}


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


// $mahasiswa = new Mahasiswa('Nanda Aditya Putra', 'nandaditra56@gmail.com', 'Ilmu Komputer', '205150207111047','2020') ;
// $dosen = new Dosen('Aditya Brawiyuga', 'adityabrawiyuga@gmail.com', 'Ilmu Komputer', '167382392','2007','2002');
// $penasihatAkademik = new PenasihatAkademik('Heru Nurwarsito', 'herunurwasita@gmail.com', 'Ilmu Komputer', 'Pengurus Akademik');

// echo $dosen->dosenCetak(); 
// echo "<br>";
// echo $mahasiswa->cetakMahasiswa();
// echo "<br>";
// echo $penasihatAkademik->cetakPenasihat();

$produk1 = new Mahasiswa('Nanda Aditya Putra', 'nandaditra56@gmail.com', 'Ilmu Komputer', '205150207111047','2020');
$produk2 = new Dosen('Aditya Brawiyuga', 'adityabrawiyuga@gmail.com', 'Ilmu Komputer', '167382392','2007','2002');
$produk3 = new PenasihatAkademik('Heru Nurwarsito', 'herunurwasita@gmail.com', 'Ilmu Komputer', 'Pengurus Akademik');

$cetakData = new CetakInfoData();
$cetakData->tambahData( $produk1 );
$cetakData->tambahData( $produk2 );
$cetakData->tambahData( $produk3 );

echo $cetakData->cetakData();