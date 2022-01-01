<div class="container prose mx-auto mt-12 px-4 align-center">
  <h2 class="font-bold text-2xl my-4">Detail Data</h2>
  <a href="<?= BASEURL; ?>/home" class="btn btn-primary text-white mb-4">Kembali</a>
  <main class="container w-full">
    <div class="flex flex-row justify-evenly">
      <table class="table w-1/2">
        <tr>
          <th colspan="2" class="text-center">Identitas</th>
        </tr>
        <tr>
          <th class="align-left">Nama</th>
          <td><?= $data['riwayat']['nama']; ?></td>
        </tr>
        <tr>
          <th class="align-left">Jenis Kelamin</th>
          <td><?= ($data['riwayat']['jk'] === 'l') ? "Laki-Laki" : "Perempuan" ?></td>
        </tr>
        <tr>
          <th>Berat Badan</th>
          <td><?= $data['riwayat']['bb']; ?></td>
        </tr>
        <tr>
          <th>Tinggi Badan</th>
          <td><?= $data['riwayat']['tb']; ?></td>
        </tr>
        <tr>
          <th>Usia</th>
          <td><?= $data['riwayat']['usia']; ?></td>
        </tr>
        <tr?>
          <th>Aktifitas Olahraga</th>
          <td>
            <?php if ($data['riwayat']['olahraga'] === '1') {
            echo "Sangat Jarang";
          } elseif ($data['riwayat']['olahraga'] === '2') {
            echo "Jarang (1-3 Kali Per Minggu)";
          } elseif ($data['riwayat']['olahraga'] === '3') {
            echo "Cukup Olahraga (3-5 kali per minggu)";
          } elseif ($data['riwayat']['olahraga'] === '4') {
            echo "Sering Olahraga (6-7 kali per minggu)";
          } else {
            echo "Sangat Sering Olahraga (sekitar 2 kali dalam sehari)";
          } ?>
          </td>
          </tr>
      </table>
      <table class="table w-1/2 table-zebra border-2">
        <tr>
          <th class="text-center" colspan="2">
            Angka Kebutuhan Gizi <?= $data['riwayat']['nama']; ?>
          </th>
        </tr>
        <tr>
          <th>Protein</th>
          <td><?= $data['riwayat']['protein']; ?></td>
        </tr>
        <tr>
          <th>Karbohidrat</th>
          <td><?= $data['riwayat']['karbohidrat']; ?></td>
        </tr>
        <tr>
          <th>Lemak</th>
          <td><?= $data['riwayat']['lemak']; ?></td>
        </tr>
      </table>
    </div>
  </main>
</div>