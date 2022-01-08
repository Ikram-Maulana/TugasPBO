$(function() {

    $('.tombolTambahData').on('click', function() {
        $('.modal-title').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#jk').val('');
        $('#bb').val('');
        $('#tb').val('');
        $('#usia').val('');
        $('#olahraga').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('.modal-title').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/explore-mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/explore-mvc/public/mahasiswa/getubah',
            data: {id : id},
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
        });
        
    });

});