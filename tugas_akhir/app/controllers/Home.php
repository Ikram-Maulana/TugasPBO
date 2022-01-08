<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Riwayat';
        $data['rwyt'] = $this->model('Home_model')->getAllRiwayat();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Riwayat';
        $data['rwyt'] = $this->model('Home_model')->getRiwayatById($id);
        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Home_model')->tambahDataRiwayat($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Home');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Home_model')->hapusDataRiwayat($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Home');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Home_model')->getRiwayatById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Home_model')->ubahDataRiwayat($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Home');
            exit;
        } 
    }
}