<?php 

// Abstract Class CSS Units
abstract class css_units {
  public $px;

  public function __construct($px) {
    $this->px = $px;
  }

  abstract public function hitung_satuan();
}

interface detail_units {
  public function nilai_units();
}

class px_em extends css_units implements detail_units {
  public function hitung_satuan() {
    $em = $this->px/16;
    return "Nilai konversi px ke em adalah $em em";
  }

  public function nilai_units() {
    return "
    <br>
    Keterangan Konversi Units: 
    <br>
    16px = 1em
    ";
  }
}

class px_percent extends css_units implements detail_units {
  public function hitung_satuan() {
    $percent = $this->px/16*100;
    return "Nilai konversi px ke percent adalah $percent %";
  }

  public function nilai_units() {
    return "
    <br>
    Keterangan Konversi Units: 
    <br>
    1px = 6.25%
    ";
  }
}

function cetak_detail_units($object_detail) {
  return $object_detail->nilai_units();
}

$pxtoem = new px_em(16);
echo $pxtoem->hitung_satuan();
echo cetak_detail_units($pxtoem);
echo "<hr>";

$pxtopercent = new px_percent(16);
echo $pxtopercent -> hitung_satuan();
echo cetak_detail_units($pxtopercent);
?>