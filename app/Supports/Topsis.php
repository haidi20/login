<?php

namespace App\Supports;

use App\Models\Hasil;
use App\Models\Kinerja;
use App\Models\Kreteria;
use App\Models\Alternatif;
use App\Models\Normalisasi;

class Topsis {
  public function __construct(){
    $this->kreteria = Kreteria::orderBy('kode')->get();
  }

  public function Kinerja($jenis){
    $alternatif = Alternatif::all();
    $nilai      = [];

    foreach ($alternatif as $index => $item) {
      $nilai[$item->id] = Kinerja::alternatifKreteria($item->id)
                                    ->kondisiJenis($jenis)
                                    ->pluck('nilai','kreteria_id');
    }

    return $nilai ;
  }

  public function normalisasiProses(){
    $pembagi = $this->pembagiProses();

    $normalisasi = [];
    foreach ($pembagi as $index => $item) {
      $hasil = Hasil::where('kreteria_id',$index)->get();
      $normalisasi[] = proses_normalisasi_topsis($pembagi,$hasil);
    }

    return $normalisasi;
  }

  public function pembagiProses(){
    $pembagi = [];

    foreach ($this->kreteria as $index => $item) {
      $hasil = Hasil::where('kreteria_id',$item->id)->get() ;
      $pembagi[$item->id] = number_format(sqrt(array_sum(proses_pangkat($hasil))),5);
    }

    return $pembagi ;
  }
}
