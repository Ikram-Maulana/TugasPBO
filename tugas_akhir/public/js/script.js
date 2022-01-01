$(function() {

  $('.tombolTambahData').on('click', function() {
    $('#judulModal').html('Tambah Data Riwayat');
    $('#btnModal').html('Tambah Data');
  })
  
  $('.tombolUbahData').on('click', function () {
    $('#judulModal').html('Ubah Data Riwayat');
    $('#btnModal').html('Ubah Data');
    const id = $(this).data('id');
    $('.modal form').attr('action', 'http://localhost/tugaspbo/tugas_akhir/public/home/ubah');
    
    $.ajax({
      url: 'http://localhost/tugaspbo/tugas_akhir/public/home/getUbah',
      data: {id: id},
      method: 'post',
      dataType: 'json',
      success: function(data) {
        $('#nama').val(data.nama);
        $('#jk').val(data.jk);
        $('#bb').val(data.bb);
        $('#tb').val(data.tb);
        $('#usia').val(data.usia);
        $('#olahraga').val(data.olahraga);
        $('#id').val(data.id);
      }
    })
  });

});
