<?php 

// Abstract Class CSS Units
class css_units {
  public $px;

  public function __construct($px) {
    $this->px = $px;
  }
}

// convert px to em class
final class px_em extends css_units {
  public function hitung_satuan() {
    $em = $this->px/16;
    return $em;
  }

final public function __destruct() {
    echo "Keterangan Konversi Unit: <br>
    16px = 1em";
  }
}

// inisialisasi 32px
$pxtoem = new px_em(32);
echo "Nilai konversi px ke em adalah ".$pxtoem->hitung_satuan()."em";
echo "<hr>";

?>