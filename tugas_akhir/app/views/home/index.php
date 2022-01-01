<div class="container prose mx-auto mt-12 px-4 align-center">
  <h2 class="font-bold text-2xl my-4">Data Angka Kecukupan Gizi</h2>
  <label for="my-modal-2" class="btn btn-primary modal-button tombolTambahData mb-4">Tambah Data</label>
  <div class="w-full mb-4">
    <?php Flasher::flash(); ?>
  </div>

  <div class="overflow-x-auto">
    <table class="table w-full">
      <thead>
        <tr>
          <th></th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Protein</th>
          <th>Karbohidrat</th>
          <th>Lemak</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach($data['riwayat'] as $riwayat) : ?>
        <tr>
          <th><?= $no ?></th>
          <th><?= $riwayat['nama']; ?></th>
          <?php $jk = $riwayat['jk']; ?>
          <td><?= ($jk === 'l') ? "Laki-Laki" : "Perempuan" ?></td>
          <td><?= $riwayat['protein']; ?> gram</td>
          <td><?= $riwayat['karbohidrat']; ?> gram</td>
          <td><?= $riwayat['lemak']; ?> gram</td>
          <td>
            <a href="<?= BASEURL; ?>/home/detail/<?= $riwayat['id']; ?>"
              class="btn btn-sm btn-primary text-white">Detail</a>
            <label for="my-modal-2" class="btn btn-sm modal-button btn-success text-white tombolUbahData"
              data-id="<?= $riwayat['id']; ?>">Edit</label>
            <a href="<?= BASEURL; ?>/home/hapus/<?= $riwayat['id']; ?>" class="btn btn-sm btn-error text-white"
              onclick="return confirm('yakin?');">Hapus</a>
          </td>
        </tr>
        <?php $no++ ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<input type="checkbox" id="my-modal-2" class="modal-toggle">
<div class="modal">
  <div class="modal-box max-h-[35rem] overflow-y-auto">
    <h1 class="text-2xl font-bold mb-2" id="judulModal">Tambah Data</h1>
    <form action="<?= BASEURL; ?>/home/tambah" method="POST">
      <input type="hidden" name="id" id="id">
      <label class="label">
        <span class="label-text">Nama Lengkap</span>
      </label>
      <input type="text" placeholder="Masukan Nama Anda" name="nama" id="nama" class="input input-bordered w-full">
      <label class="label">
        <span class="label-text">Jenis Kelamin</span>
      </label>
      <div>
        <select class="select select-bordered w-full" name="jk" id="jk">
          <option disabled="disabled" selected="selected">Pilih</option>
          <option value="l">Pria</option>
          <option value="p">Wanita</option>
        </select>
      </div>
      <label class="label">
        <span class="label-text">Berat Badan</span>
      </label>
      <input type="text" placeholder="Masukan Berat Badan Anda" name="bb" id="bb" class="input input-bordered w-full">
      <label class="label">
        <span class="label-text">Tinggi Badan</span>
      </label>
      <input type="text" placeholder="Masukan Tinggi Badan Anda" name="tb" id="tb" class="input input-bordered w-full">
      <label class="label">
        <span class="label-text">Usia</span>
      </label>
      <input type="text" placeholder="Masukan Usia Anda" name="usia" id="usia" class="input input-bordered w-full">
      <label class="label">
        <span class="label-text">Berapa sering anda olahraga</span>
      </label>
      <div>
        <select class="select select-bordered w-full" name="olahraga" id="olahraga">
          <option disabled="disabled" selected="selected">Pilih</option>
          <option value="1">Sangat Jarang</option>
          <option value="2">Jarang (1-3 kali per minggu)</option>
          <option value="3">Cukup (3-5 kali per minggu)</option>
          <option value="4">Sering (6-7 kali per minggu)</option>
          <option value="5">Sangat Sering (sekitar 2 kali dalam sehari)</option>
        </select>
      </div>
      <div class="modal-action">
        <button type="submit" for="my-modal-2" class="btn btn-outline btn-primary" id="btnModal">Tambah Data</button>
        <label for="my-modal-2" class="btn">Close</label>
      </div>
    </form>
  </div>
</div>