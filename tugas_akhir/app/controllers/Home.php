<?php 

class Home extends Controller {
  public function index() {
    $data['judul'] = 'Home';
    $data['riwayat'] = $this->model('Home_model')->getAllRiwayat();

    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id) {
    $data['judul'] = 'Detail';
    $data['riwayat'] = $this->model('Home_model')->getRiwayatById($id);

    $this->view('templates/header', $data);
    $this->view('home/detail', $data);
    $this->view('templates/footer');
  }
  
  public function tambah() {
    if( $this->model('Home_model')->tambahRiwayat($_POST) > 0){
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('location:'. BASEURL .'/home');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }
  
  
  public function hapus($id) {
    if($this->model('Home_model')->hapusRiwayat($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/home');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }

  public function getUbah() {
    echo json_encode($this->model('Home_model')->getRiwayatById($_POST['id']));
  }

  public function ubah() {
    if($this->model('Home_model')->ubahRiwayat($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/home');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }
}

?>