<?php 

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
          echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible alert-alt fade show">
          <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                class="mdi mdi-close"></i></span>
          </button>
          <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '.
        </div>';
            unset($_SESSION['flash']);
        }
    }
}