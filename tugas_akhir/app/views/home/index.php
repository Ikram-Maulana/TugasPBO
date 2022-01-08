<!--**********************************
  Content body start
***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="page-titles mb-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/Home">Home</a></li>
        <li class="breadcrumb-item active"><a href="<?= BASEURL; ?>/Home">Index</a></li>
      </ol>
    </div>

    <div class="mb-3">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal"
        data-target="#exampleModalCenter">
        Tambah Data Riwayat
      </button>
    </div>

    <?php Flasher::flash(); ?>

    <!-- row -->

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data Riwayat</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Protein</th>
                    <th scope="col">Karbohidrat</th>
                    <th scope="col">Lemak</th>
                    <th scope="col">Action</th>
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
                      <a href="<?= BASEURL; ?>/Home/detail/<?= $rwyt['id']; ?>" class="badge badge-primary">detail</a>
                      <a href="<?= BASEURL; ?>/Home/ubah/<?= $rwyt['id']; ?>"
                        class="badge badge-success tampilModalUbah" data-toggle="modal"
                        data-target="#exampleModalCenter" data-id="<?= $rwyt['id']; ?>">ubah</a>
                      <a href="<?= BASEURL; ?>/Home/hapus/<?= $rwyt['id']; ?>" class="badge badge-danger"
                        onclick="return confirm('yakin?');">hapus</a>
                    </td>
                  </tr>
                  <?php $no++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Riwayat</h5>
        <button type=" button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
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
            <select class="form-select form-control" aria-label="Default select example" name="jk" id="jk">
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
            <select class="form-control" id="olahraga" name="olahraga">
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
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>