<?php 

class Home_model {
    private $table = 'riwayat';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRiwayat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRiwayatById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataRiwayat($data)
    {
      $query = "INSERT INTO riwayat VALUES (NULL, :nama, :jk, :bb, :tb, :usia, :olahraga, :protein, :karbohidrat,:lemak)";
      // Perhitungan 1
      if ($data['jk'] === 'l') {
        $harisBenedict = 66 + (13.7 * $data['bb']) + (5 * $data['tb']) - (6.8 * $data['usia']);
      } else {
        $harisBenedict = 655 + (9.6 * $data['bb']) + (1.8 * $data['tb']) - (4.7 * $data['usia']);
      } 
      // Perhitungan 2
      if ($data['olahraga'] === 1) {
        $total =  1.2 * $harisBenedict;
      } elseif ($data['olahraga'] === 2) {
        $total = 1.375 * $harisBenedict;
      } elseif ($data['olahraga'] === 3) {
        $total = 1.55 * $harisBenedict;
      } elseif ($data['olahraga'] === 4) {
        $total = 1.725 * $harisBenedict;
      } else {
        $total = 1.9 * $harisBenedict;
      }
      // Perhitungan 3
      $protein = (15/100) * $total;
      $karbohidrat = (60/100) * $total;
      $lemak = (15/100) * $total;
      // Perhitungan 4
      $proteinGram = $protein/4;
      $karboGram = $karbohidrat/4;
      $lemakGram = $lemak/9;
      
      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('jk', $data['jk']);
      $this->db->bind('bb', $data['bb']);
      $this->db->bind('tb', $data['tb']);
      $this->db->bind('usia', $data['usia']);
      $this->db->bind('olahraga', $data['olahraga']);
      
      $this->db->bind('protein', $proteinGram);
      $this->db->bind('karbohidrat', $karboGram);
      $this->db->bind('lemak', $lemakGram);
  
      $this->db->execute();
      return $this->db->rowCount();
    }

    public function hapusDataRiwayat($id)
    {
        $query = "DELETE FROM riwayat WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataRiwayat($data)
    {
      $query = "UPDATE riwayat SET nama = :nama, jk = :jk, bb = :bb, tb = :tb, usia = :usia, olahraga = :olahraga, protein = :protein, karbohidrat = :karbohidrat, lemak = :lemak WHERE id = :id";
      // Perhitungan 1
      if ($data['jk'] === 'l') {
        $harisBenedict = 66 + (13.7 * $data['bb']) + (5 * $data['tb']) - (6.8 * $data['usia']);
      } else {
        $harisBenedict = 655 + (9.6 * $data['bb']) + (1.8 * $data['tb']) - (4.7 * $data['usia']);
      } 
      // Perhitungan 2
      if ($data['olahraga'] === 1) {
        $total =  1.2 * $harisBenedict;
      } elseif ($data['olahraga'] === 2) {
        $total = 1.375 * $harisBenedict;
      } elseif ($data['olahraga'] === 3) {
        $total = 1.55 * $harisBenedict;
      } elseif ($data['olahraga'] === 4) {
        $total = 1.725 * $harisBenedict;
      } else {
        $total = 1.9 * $harisBenedict;
      }
      // Perhitungan 3
      $protein = (15/100) * $total;
      $karbohidrat = (60/100) * $total;
      $lemak = (15/100) * $total;
      // Perhitungan 4
      $proteinGram = $protein/4;
      $karboGram = $karbohidrat/4;
      $lemakGram = $lemak/9;
      
      $this->db->query($query);
      $this->db->bind('id', $data['id']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('jk', $data['jk']);
      $this->db->bind('bb', $data['bb']);
      $this->db->bind('tb', $data['tb']);
      $this->db->bind('usia', $data['usia']);
      $this->db->bind('olahraga', $data['olahraga']);
      
      $this->db->bind('protein', $proteinGram);
      $this->db->bind('karbohidrat', $karboGram);
      $this->db->bind('lemak', $lemakGram);
      
      $this->db->execute();
      return $this->db->rowCount();
    }
}