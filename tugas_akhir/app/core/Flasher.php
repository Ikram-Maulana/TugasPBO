<?php 

class Flasher {
  public static function setFlash($pesan, $aksi, $tipe) {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }
  
  public static function flash() {
    if(isset($_SESSION['flash'])) {
      echo '
      <div class="alert alert-'. $_SESSION['flash']['tipe'] .'">
        <div class="flex-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>                          
          </svg> 
          <label>Data Riwayat <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '</label>
        </div>
      </div>';
      unset($_SESSION['flash']);
    }
    
  }
}

?>