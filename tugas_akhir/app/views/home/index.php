<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Riwayat
      </button>
    </div>
  </div>

  <section>
    <h3>Daftar Riwayat</h3>
    <table class="table table-striped">
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
        <?php $no = 1; foreach( $data['rwyt'] as $rwyt ) : ?>
        <tr>
          <th><?= $no ?></th>
          <th><?= $rwyt['nama']; ?></th>
          <?php $jk = $rwyt['jk']; ?>
          <td><?= ($jk === 'l') ? "Laki-Laki" : "Perempuan" ?></td>
          <td><?= $rwyt['protein']; ?> gram</td>
          <td><?= $rwyt['karbohidrat']; ?> gram</td>
          <td><?= $rwyt['lemak']; ?> gram</td>
          <td>
            <a href="<?= BASEURL; ?>/Home/detail/<?= $rwyt['id']; ?>" class="btn btn-primary">detail</a>
            <a href="<?= BASEURL; ?>/Home/ubah/<?= $rwyt['id']; ?>" class="btn btn-success tampilModalUbah"
              data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $rwyt['id']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/Home/hapus/<?= $rwyt['id']; ?>" class="btn btn-danger"
              onclick="return confirm('yakin?');">hapus</a>
          </td>
        </tr>
        <?php $no++ ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Riwayat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/Home/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="jk" id="jk">
              <option disabled="disabled" selected="selected">Pilih</option>
              <option value="l">Pria</option>
              <option value="p">Wanita</option>
            </select>
          </div>

          <div class="form-group">
            <label for="bb">Berat Badan</label>
            <input type="number" class="form-control" id="bb" name="bb" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="tb">Tinggi Badan</label>
            <input type="number" class="form-control" id="tb" name="tb" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="usia">Usia</label>
            <input type="number" class="form-control" id="usia" name="usia" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="olahraga">Seringnya Olahraga</label>
            <select class="form-select" aria-label="Default select example" id="olahraga" name="olahraga">
              <option disabled="disabled" selected="selected">Pilih</option>
              <option value="1">Sangat Jarang</option>
              <option value="2">Jarang (1-3 kali per minggu)</option>
              <option value="3">Cukup (3-5 kali per minggu)</option>
              <option value="4">Sering (6-7 kali per minggu)</option>
              <option value="5">Sangat Sering (sekitar 2 kali dalam sehari)</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>