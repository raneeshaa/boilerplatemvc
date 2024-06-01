$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#exampleModal').html('Tambah Data Golongan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_golongan').val('');
        $('#gaji_pokok').val('');
        
    });




    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Golongan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/boilerplatemvc/public/golongan/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/boilerplatemvc/public/golongan/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama_golongan').val(data.nama_golongan);
                $('#gaji_pokok').val(data.gaji_pokok);
            }
        });
        
    });


    $('.tombolTambahData').on('click', function() {
        $('#exampleModal').html('Tambah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nip').val('');
        $('#nik').val('');
        $('#nama').val('');
        $('#jenis_kelamin').val('');
        $('#tempat_lahir').val('');
        $('#tanggal_lahir').val('');
        $('#whatsapp').val('');
        $('#alamat').val('');
        $('#golongan_id').val('');
        
    });




    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/boilerplatemvc/public/karyawan/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/boilerplatemvc/public/karyawan/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nip').val(data.nip);
                $('#nik').val(data.nik);
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#tempat_lahir').val(data.tempat_lahir);
                $('#tanggal_lahir').val(data.tanggal_lahir);
                $('#whatsapp').val(data.whatsapp);
                $('#alamat').val(data.alamat);
                $('#golongan_id').val(dat.golongan_id);
            }
        });
        
    });
});