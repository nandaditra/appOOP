<?php

require_once 'App/init.php';

$produk1 = new Mahasiswa('Nanda Aditya Putra', 'nandaditra56@gmail.com', 'Ilmu Komputer', '205150207111047','2020');
$produk2 = new Dosen('Aditya Brawiyuga', 'adityabrawiyuga@gmail.com', 'Ilmu Komputer', '167382392','2007','2002');
$produk3 = new PenasihatAkademik('Heru Nurwarsito', 'herunurwasita@gmail.com', 'Ilmu Komputer', 'Pengurus Akademik');

$cetakData = new CetakInfoData();
$cetakData->tambahData( $produk1 );
$cetakData->tambahData( $produk2 );
$cetakData->tambahData( $produk3 );

echo $cetakData->cetakData();

var_dump($cetakData->cetakData());