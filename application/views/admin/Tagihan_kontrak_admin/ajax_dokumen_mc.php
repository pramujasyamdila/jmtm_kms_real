<script>
    function message(icon, text, title) {
        Swal.fire(
            'Berhasil!',
            'Data Berhasil Diupload.',
            'success'
        )
    }


    function byid(id_dok_mc, nama_dok, id_detail_program_penyedia_jasa, no_urut_dok) {
        $('#modal_upload').modal('show')
        $('.nama_dok').text(nama_dok)
        $('[name="id_dok_mc"]').val(id_dok_mc)
        $('[name="nama_dok"]').val(nama_dok)
        $('[name="id_detail_program_penyedia_jasa"]').val(id_detail_program_penyedia_jasa)
        $('[name="no_urut_dok"]').val(no_urut_dok)

        $('#dok_mc_detail').DataTable({
            "responsive": false,
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "bDestroy": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_data_dok_mc_detail/') ?>" + id_dok_mc,
                "type": "POST",
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false
            }],
            "oLanguage": {
                "sSearch": "Pencarian : ",
                "sEmptyTable": "Data Tidak Tersedia",
                "sLoadingRecords": "Silahkan Tunggu - loading...",
                "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                "sZeroRecords": "Tidak Ada Data Yang Di Cari",
                "sProcessing": "Memuat Data...."
            }
        })
    }

    function reload_table() {
        $('#dok_mc_detail').DataTable().ajax.reload();
    }

    load_table_dok_mc()

    function load_table_dok_mc() {
        var id_mc = $('#id_mc').val()
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_Data_dok_mc/') ?>" + id_mc,
            dataType: "JSON",
            success: function(response) {

                var html = '';
                for (i = 0; i < response.length; ++i) {

                    if (!response[i]['file_mc']) {
                        var dok = '-'
                    } else {
                        if (response[i]['status_tidak_butuh'] == 1) {
                            var dok = '-'
                        } else {
                            // respon dokumen
                            var dok = '<a target="_blank" href="<?= base_url('file_dokumen_mc/') ?>' + response[i]['file_mc'] + '" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-file"></i> Lihat Dokumen</a>'
                        }
                    }

                    if (response[i]['sts_upload'] == 1) {

                        var status_upload = '<span class="badge badge-sm badge-success">Sudah Upload</span>'
                    } else {
                        if (response[i]['status_tidak_butuh'] == 1) {
                            var status_upload = '<span class="badge badge-sm badge-success">Tidak Dibutuhkan</span>'
                        } else {
                            var status_upload = '<span class="badge badge-sm badge-danger">Belum Upload</span>'
                        }

                    }

                    if (!response[i]['tgl_upload']) {
                        var tgl_upload = '-'
                    } else {
                        var tgl_upload = response[i]['tgl_upload']
                    }

                    if (!response[i]['user_uploaded']) {
                        var user_uploaded = '-'
                    } else {
                        var user_uploaded = response[i]['user_uploaded']
                    }

                    if (!response[i]['status_verif']) {
                        var status_verif = '<a href="javascript:;" onclick="yes(\'' + response[i]['id_dok_mc'] + '\'' + ',' + '\'' + response[i]['nama_dok'] + '\')" class="btn btn-sm btn-outline-success"><i class="fas fa fa-check"></i> Yes</a> <a href="javascript:;" onclick="no(\'' + response[i]['id_dok_mc'] + '\'' + ',' + '\'' + response[i]['nama_dok'] + '\')" class="btn btn-sm btn-outline-danger"><i class="fas fa fa-times"></i> No</a>'
                    } else {
                        if (response[i]['status_verif'] == 1) {
                            var status_verif = '<span class="badge badge-success">Yes</span>'
                        } else if (response[i]['status_verif'] == 2) {
                            var status_verif = '<a href="javascript:;" onclick="yes(\'' + response[i]['id_dok_mc'] + '\'' + ',' + '\'' + response[i]['nama_dok'] + '\')" class="btn btn-sm btn-outline-success"><i class="fas fa fa-check"></i> Yes</a> <a href="javascript:;" onclick="no(\'' + response[i]['id_dok_mc'] + '\'' + ',' + '\'' + response[i]['nama_dok'] + '\')" class="btn btn-sm btn-outline-danger"><i class="fas fa fa-times"></i> No</a>'
                        }

                    }

                    if (!response[i]['keterangan']) {
                        var keterangan = '-'
                    } else {
                        var keterangan = response[i]['keterangan']
                    }


                    if (!response[i]['tgl_periksa']) {
                        var tgl_periksa = '-'
                    } else {
                        var tgl_periksa = response[i]['tgl_periksa']
                    }

                    var aksi = '<br><a href="javascript:;" onclick="byid(\'' + response[i]['id_dok_mc'] + '\'' + ',' + '\'' + response[i]['nama_dok'] + '\'' + ',' + '\'' + response[i]['id_detail_program_penyedia_jasa'] + '\'' + ',' + '\'' + response[i]['no_urut_dok'] + '\')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Upload Dokumen</a>' + '<a href="javascript:;" onclick="tidak_diperlukan(\'' + response[i]['id_dok_mc'] + '\'' + ',' + '\'' + response[i]['nama_dok'] + '\')" class="btn btn-block btn-sm btn-outline-danger"><i class="fas fa fa-times"></i> Tidak Diperlukan</a><br>'
                    html +=
                        '<tr>' +
                        '<td>' + response[i]['no_urut_dok'] + '</td>' +
                        '<td>' + response[i]['nama_dok'] + '</td>' +
                        '<td>' + aksi + '</td>' +
                        '<td>' + dok + '</td>' +
                        '<td>' + status_upload + '</td>' +

                        '</tr>';
                }
                $('#result_dok_mc').html(html)
            }
        })

    }

    var form_upload_mc = $('#form_upload_mc')
    $('#form_upload_mc').on('submit', function(e) {
        e.preventDefault();
        if ($('.file-mc').val() == '') {
            alert('File Belum Di Isi!!!');
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>taggihan_kontrak_admin/tagihan_kontrak/upload_file_dok_mc",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                //   beforeSend: function() {
                //       $('#upload_mcku').attr('disabled', 'disabled');angga
                //   },
                success: function(response) {
                    $('#form_upload_mc')[0].reset();
                    //   $('#upload_mcku').attr('disabled', false);
                    // $('#modal_upload').modal('hide');
                    message('success', 'Berhasil', 'Data Berhasil Di Upload!')
                    //   message('success', 'Data Berhasil Di Upload');
                    reload_table()
                    load_table_dok_mc()
                }
            });
        }
    });

    var form_tidak_valid = $('#form_tidak_valid')
    $('#form_tidak_valid').on('submit', function(e) {
        e.preventDefault();
        if ($('[name="keterangan"]').val() == '') {
            alert('Keterangan Belum Diisi!');
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>taggihan_kontrak_admin/tagihan_kontrak/tidak_valid",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                //   beforeSend: function() {
                //       $('#upload_mcku').attr('disabled', 'disabled');angga
                //   },
                success: function(response) {
                    $('#form_tidak_valid')[0].reset();
                    //   $('#upload_mcku').attr('disabled', false);
                    $('#modal_no').modal('hide');
                    message('success', 'Berhasil', 'Data Berhasil Di Update!')
                    //   message('success', 'Data Berhasil Di Upload');
                    reload_table()
                }
            });
        }
    });

    function tidak_diperlukan(id_dok_mc, nama_dok) {
        Swal.fire({
            title: 'Anda Yakin Tidak Memerlukan Dokumen ' + nama_dok + ' ?',
            text: "Ya / Tidak",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url(); ?>taggihan_kontrak_admin/tagihan_kontrak/tidak_diperlukan/" + id_dok_mc,
                    method: "POST",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response == 'success') {
                            Swal.fire(
                                'Berhasil!',
                                'Data Berhasil Diupdate.',
                                'success'
                            )
                            //   message('success', 'Data Berhasil Di Upload');
                            load_table_dok_mc()
                        } else {

                        }

                    }
                })

            }
        })
    }

    function yes(id_dok_mc_detail) {
        Swal.fire({
            title: 'Anda Yakin Dokumen Sudah Valid?',
            text: "Ya / Tidak",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url(); ?>taggihan_kontrak_admin/tagihan_kontrak/validation/" + id_dok_mc_detail,
                    method: "POST",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response == 'success') {
                            Swal.fire(
                                'Berhasil!',
                                'Data Berhasil Diupdate.',
                                'success'
                            )
                            //   message('success', 'Data Berhasil Di Upload');
                            reload_table()
                        } else {

                        }

                    }
                })

            }
        })
    }


    function no(id_dok_mc_detail, nama_dok) {
        $('#modal_no').modal('show')
        $('.nama_dok').text(nama_dok)
        $('[name="id_dok_mc_detail"]').val(id_dok_mc_detail)
    }

    function hapus(id_dok_mc_detail) {
        Swal.fire({
            title: 'Anda Yakin Hapus Dokumen Ini?',
            text: "Ya / Tidak",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url(); ?>taggihan_kontrak_admin/tagihan_kontrak/hapus_dokumen_mc/" + id_dok_mc_detail,
                    method: "POST",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response == 'success') {
                            Swal.fire(
                                'Berhasil!',
                                'Data Berhasil Hapus.',
                                'success'
                            )
                            //   message('success', 'Data Berhasil Di Upload');
                            reload_table()
                        } else {

                        }

                    }
                })

            }
        })
    }
</script>