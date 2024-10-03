<?php

class Mobil {

public $merk;
public $model;
public $tahun;
public $warna;

// Method
public function start()
{
    echo 'Mobil dinyalakan';
}

public function cek($nama,$ket)
{
    echo 'Merek :' . $this->merk. '<br>';
    echo 'Model :' . $this->model. '<br>';
    echo 'Tahun :' . $this->tahun. '<br>';
    echo 'warna :' . $this->warna. '<br>';
    echo 'pemilik :' . $nama. '<br>';
    echo 'keterangan :' . $ket. '<br>';
}

public function stop()
{
    echo 'Mobil dimatikan';
}

}

class kendaraan extends Mobil {
    public $jenis;

    public function bergerak()
    {
        echo 'kendaraan sedang bergerak';

    }
}

// Objek

$mobil = new Mobil();
$kendaraan = new kendaraan();
$mobil->merk = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'putih';

// Panggil Method
$ket =' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio aliquam earum vero fuga! Eligendi, voluptatum officia fugit totam quod quasi?.';
$mobil->cek('Yamile',$ket );

$kendaraan->merk = 'BWM';
$kendaraan->model = 'Nova';
$kendaraan->tahun = 2023;
$kendaraan->warna = 'putih';
echo $kendaraan->merk;
$kendaraan->cek('Yamile','');
