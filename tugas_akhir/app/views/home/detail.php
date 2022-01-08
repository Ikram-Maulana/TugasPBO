<div class="content-body">

  <div class="container-fluid">
    <div class="page-titles mb-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/Home">Home</a></li>
        <li class="breadcrumb-item active"><a href="<?= BASEURL; ?>/Home">Index</a></li>
      </ol>
    </div>

    <a href="<?= BASEURL; ?>/Home" class="btn btn-primary text-white mb-4">Kembali</a>

    <div class="d-flex justify-content-lg-between flex-column flex-lg-row justify-content-center">
      <div class="col-xl-4 col-lg-12 col-sm-12 p-0 pl-lg-0 pr-lg-3">
        <div class="card overflow-hidden">
          <div class="text-center p-3 overlay-box">
            <h3 class="mt-3 mb-1 text-white"><?= $data['rwyt']['nama']; ?></h3>
            <p class="text-white"><?= ($data['rwyt']['jk'] === 'l') ? "Laki-Laki" : "Perempuan" ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Berat Badan</span> <strong
                class="text-muted"><?= $data['rwyt']['bb']; ?> </strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Tinggi Badan</span> <strong
                class="text-muted"><?= $data['rwyt']['tb']; ?> </strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Usia</span> <strong
                class="text-muted"><?= $data['rwyt']['usia']; ?> </strong></li>
          </ul>
        </div>
      </div>

      <div class="col-xl-8 col-lg-12 col-sm-12 p-0 pl-lg-0 pr-lg-3">
        <div class="card text-white bg-warning text-black">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Angka Kebutuhan Gizi</span>
            </li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Protein
                :</span><strong><?= $data['rwyt']['protein']; ?> gram</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Karbohidrat
                :</span><strong><?= $data['rwyt']['karbohidrat']; ?> gram</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Lemak
                :</span><strong><?= $data['rwyt']['lemak']; ?> gram</strong></li>
            <li class="list-group-item"><span class="mb-0">Jadi, Angka Kebutuhan Gizi untuk
                <?= $data['rwyt']['nama']; ?> adalah <strong><?= $data['rwyt']['protein']; ?> gram Protein,
                  <?= $data['rwyt']['karbohidrat']; ?> gram Karbohidrat, <?= $data['rwyt']['lemak']; ?> gram
                  Lemak</strong>.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>