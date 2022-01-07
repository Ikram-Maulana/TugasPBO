<div class="container">
  <h2 class="font-bold text-2xl my-4">Detail Data</h2>
  <a href="<?= BASEURL; ?>/Home" class="btn btn-primary text-white mb-4">Kembali</a>
</div>
<main class="container d-flex">
  <table class="table table-striped w-100 w-md-50 me-3">
    <tbody>
      <tr>
        <th colspan="2" class="text-center">Identitas</th>
      </tr>
      <tr>
        <th>Nama</th>
        <td><?= $data['rwyt']['nama']; ?></td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td><?= ($data['rwyt']['jk'] === 'l') ? "Laki-Laki" : "Perempuan" ?></td>
      </tr>
      <tr>
        <th>Berat Badan</th>
        <td><?= $data['rwyt']['bb']; ?></td>
      </tr>
      <tr>
        <th>Tinggi Badan</th>
        <td><?= $data['rwyt']['tb']; ?></td>
      </tr>
      <tr>
        <th>Usia</th>
        <td><?= $data['rwyt']['usia']; ?></td>
      </tr>
      <tr>
    </tbody>
  </table>

  <table class="table table-striped w-100 w-md-50">
    <tr>
      <th class="text-center" colspan="2">
        Angka Kebutuhan Gizi <?= $data['rwyt']['nama']; ?>
      </th>
    </tr>
    <tr>
      <th>Protein</th>
      <td><?= $data['rwyt']['protein']; ?></td>
    </tr>
    <tr>
      <th>Karbohidrat</th>
      <td><?= $data['rwyt']['karbohidrat']; ?></td>
    </tr>
    <tr>
      <th>Lemak</th>
      <td><?= $data['rwyt']['lemak']; ?></td>
    </tr>
  </table>
</main>