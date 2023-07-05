<script>
    var tabledata = $('#table')
    var form_edit = $('#form_edit')
    var form_tambah_kontrak = $('#form_tambah_kontrak')
    var modal_tambah = $('#tambah_program')
    var lihat_uraian = $('#lihat_uraian')
    var table_uraian = $('#table_uraian')

    // sweetalert
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }

    $('.select-field').select2({
        theme: 'bootstrap-5'
    });

    function byid(id, type) {
        if (type == 'edit') {
            saveData = 'edit';
            // formData[0].reset();
        }
        if (type == 'kelola_level') {
            saveData = 'kelola_level';
        }
        if (type == 'kelola_level_unit_price') {
            saveData = 'kelola_level_unit_price';
        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/byid/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'detail_kontrak') {
                    window.location.href = "<?= base_url('admin/data_kontrak/detail_kontrak/') ?>" + id
                } else if (type == 'kelola_level') {
                    window.location.href = "<?= base_url('admin/data_kontrak/kelola_level/') ?>" + id
                } else if (type == 'kelola_level_unit_price') {
                    window.location.href = "<?= base_url('admin/data_kontrak/kelola_level_unit_price/') ?>" + id
                }
            }
        })
    }

    function Question(id_pegawai, nama_pegawai, status, text) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: text + nama_pegawai + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                if (status == 'non_aktif') {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('admin/data_kontrak/status_control/') ?>" + id_pegawai,
                        dataType: "JSON",
                        data: {
                            status: 0
                        },
                        success: function(response) {
                            if (response == 'success') {
                                reloadTable();
                                message('success', 'Berhasil!', 'Data Berhasil Di Aktifkan')
                            }
                        }
                    })
                } else {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('admin/data_kontrak/status_control/') ?>" + id_pegawai,
                        dataType: "JSON",
                        data: {
                            status: 1
                        },
                        success: function(response) {
                            if (response == 'success') {
                                reloadTable();
                                message('success', 'Berhasil!', 'Data Berhasil Di Aktifkan')
                            }
                        }
                    })
                }
            }
        });
    }

    function save_program() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/data_kontrak/add_kontrak/') ?>",
            data: form_tambah_kontrak.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_tambah.modal('hide')
                    message('success', 'Data Berhasil Di Edit!', 'Berhasil');
                    reloadTable()
                    form_tambah_kontrak[0].reset();
                }
                if (response == 'sudah_ada') {
                    message('warning', 'Silakan Buat Addendumn Baru!!', 'No Kontrak Dengan Tahun Anggran Ini Sudah Ada');
                }
            }
        })
    }

    function edit_data() {
        var id_pegawai = $('[name="id_pegawai"]').val()
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/data_kontrak/update_pegawai/') ?>" + id_pegawai,
            data: form_edit.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response) {
                    modal_edit.modal('hide')
                    message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                    reloadTable()
                }
            }
        })
    }

    function reloadTable() {
        tabledata.DataTable().ajax.reload();
    }

    $(document).ready(function() {
        tabledata.DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('admin/data_kontrak/get_data/') ?>",
                "type": "POST"
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
                "sZeroRecords": "Tidak Ada Data Area Yang Di Cari",
                "sProcessing": "Memuat Data...."
            }
        });
    });
</script>
<script>
    $(".row_position_detail_capex").sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $(".row_position_detail_capex").each(function() {
                selectedData.push($(this).attr('id'))
            })
            updateOrder(selectedData);
        }
    })

    function updateOrder(aData) {
        $.ajax({
            url: "<?= base_url('admin/data_kontrak/update_row_detail_capex') ?>",
            method: 'post',
            dataType: "JSON",
            data: {
                alldata: aData
            },
            success: function() {
                alert("youchange succesfull")
            }
        })
    }
</script>

<!-- login post kontrak -->
<script>
    function pilih_addendum() {
        var cek_kondisi = $('[name="no_adendum_post_kontrak"]').val()
        if (cek_kondisi == 'Kontrak Awal') {
            $('#tanggal_adendum_kontrak').css('display', 'none')
        } else {
            $('#tanggal_adendum_kontrak').css('display', 'block')
        }

    }
</script>


<script>
    var modal_rup = $('#rup');
    var form_tambah_rup = $('#form_tambah_rup');

    function rup(id) {
        $('[name="id_detail_program_penyedia_jasa"]').val(id);
        modal_rup.modal('show');
    }

    function save_rup() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_rup') ?>",
            data: form_tambah_rup.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_rup.modal('hide')
                    message('success', 'Data Berhasil Di Buat!', 'Berhasil');
                    location.reload()
                    form_tambah_rup[0].reset();
                }
            }
        })
    }
</script>

<script>
    function alert_hps_belum_dibuat() {
        message('warning', 'Mohon Maaf HPS Anda Masih Kosong!', 'Silakan isi Hps Dahulu!!!');
    }
</script>

<script>
    // pip
    var modal_pip = $('#pip');
    var form_tambah_pip = $('#form_tambah_pip');

    function pip(id) {
        $('[name="id_detail_program_penyedia_jasa"]').val(id);
        modal_pip.modal('show');
    }

    function save_pip() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_pip') ?>",
            data: form_tambah_pip.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_pip.modal('hide')
                    message('success', 'Data Berhasil Di Buat!', 'Berhasil');
                    location.reload()
                    form_tambah_pip[0].reset();
                }
            }
        })
    }
</script>

<script>
    // hps
    var modal_hps = $('#hps');
    var form_tambah_hps = $('#form_tambah_hps');

    function hps(id) {
        $('[name="id_detail_program_penyedia_jasa"]').val(id);
        modal_hps.modal('show');
    }

    function save_hps() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_hps') ?>",
            data: form_tambah_hps.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_hps.modal('hide')
                    message('success', 'Data Berhasil Di Buat!', 'Berhasil');
                    location.reload()
                    form_tambah_hps[0].reset();
                }
            }
        })
    }
</script>

<script>
    // nota
    var modal_nota = $('#nota');
    var form_tambah_nota = $('#form_tambah_nota');

    function nota(id) {
        $('[name="id_detail_program_penyedia_jasa"]').val(id);
        modal_nota.modal('show');
    }

    function save_nota() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_nota') ?>",
            data: form_tambah_nota.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_nota.modal('hide')
                    message('success', 'Data Berhasil Di Buat!', 'Berhasil');
                    location.reload()
                    form_tambah_nota[0].reset();
                }
            }
        })
    }
</script>

<script>
    var modal_kelola_surat = $('#kelola_surat');

    function terbilang(angka) {

        var bilne = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

        if (angka < 12) {

            return bilne[angka];

        } else if (angka < 20) {

            return terbilang(angka - 10) + " belas";

        } else if (angka < 100) {

            return terbilang(Math.floor(parseInt(angka) / 10)) + " puluh " + terbilang(parseInt(angka) % 10);

        } else if (angka < 200) {

            return "seratus " + terbilang(parseInt(angka) - 100);

        } else if (angka < 1000) {

            return terbilang(Math.floor(parseInt(angka) / 100)) + " ratus " + terbilang(parseInt(angka) % 100);

        } else if (angka < 2000) {

            return "seribu " + terbilang(parseInt(angka) - 1000);

        } else if (angka < 1000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000)) + " ribu " + terbilang(parseInt(angka) % 1000);

        } else if (angka < 1000000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000000)) + " juta " + terbilang(parseInt(angka) % 1000000);

        } else if (angka < 1000000000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000000000)) + " milyar " + terbilang(parseInt(angka) % 1000000000);

        } else if (angka < 1000000000000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000000000000)) + " trilyun " + terbilang(parseInt(angka) % 1000000000000);

        }

    }

    Kelola_surat()
    Result_Dokumen()
    Result_Dokumen_Pasca()

    function Result_Dokumen() {
        var id = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/administrasi_penyedia/byid_detail_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                var html_dokumen_pra_pip = '';
                var i;
                for (i = 0; i < response['result_tbl_dokumen_surat_pra_pip'].length; i++) {
                    if (response['result_tbl_dokumen_surat_pra_pip'][i].status == 1) {
                        var status = '<a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') ?>' + response['result_tbl_dokumen_surat_pra_pip'][i].file + '" onclick="ById_dokumen(' + response['result_tbl_dokumen_surat_pra_pip'][i].id_dokumen_surat_pra + ')">' + response['result_tbl_dokumen_surat_pra_pip'][i].file + '</a>';
                    } else {
                        var status = 'Belum Upload Surat !!';
                    }
                    html_dokumen_pra_pip += '<tr>' +
                        '<td>' + response['result_tbl_dokumen_surat_pra_pip'][i].nama_file + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(' + response['result_tbl_dokumen_surat_pra_pip'][i].id_dokumen_surat_pra + ')">Upload Surat</a></td>' +
                        '</tr>'
                }
                $('#result_dokumen_pip').html(html_dokumen_pra_pip);

                var html_dokumen_pra_hps = '';
                var i;
                for (i = 0; i < response['result_tbl_dokumen_surat_pra_hps'].length; i++) {
                    if (response['result_tbl_dokumen_surat_pra_hps'][i].status == 1) {
                        var status = '<a href="<?= base_url('file_surat_prakualifikasi/') ?>' + response['result_tbl_dokumen_surat_pra_hps'][i].file + '" onclick="ById_dokumen(' + response['result_tbl_dokumen_surat_pra_hps'][i].id_dokumen_surat_pra + ')">' + response['result_tbl_dokumen_surat_pra_hps'][i].file + '</a>';
                    } else {
                        var status = 'Belum Upload Surat !!';
                    }
                    html_dokumen_pra_hps += '<tr>' +
                        '<td>' + response['result_tbl_dokumen_surat_pra_hps'][i].nama_file + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(' + response['result_tbl_dokumen_surat_pra_hps'][i].id_dokumen_surat_pra + ')">Upload Surat</a></td>' +
                        '</tr>'
                }
                $('#result_dokumen_hps').html(html_dokumen_pra_hps);

                var html_dokumen_pra_nota_dinas = '';
                var i;
                for (i = 0; i < response['result_tbl_dokumen_surat_pra_nota_dinas'].length; i++) {
                    if (response['result_tbl_dokumen_surat_pra_nota_dinas'][i].status == 1) {
                        var status = '<a href="<?= base_url('file_surat_prakualifikasi/') ?>' + response['result_tbl_dokumen_surat_pra_nota_dinas'][i].file + '" onclick="ById_dokumen(' + response['result_tbl_dokumen_surat_pra_nota_dinas'][i].id_dokumen_surat_pra + ')">' + response['result_tbl_dokumen_surat_pra_nota_dinas'][i].file + '</a>';
                    } else {
                        var status = 'Belum Upload Surat !!';
                    }
                    html_dokumen_pra_nota_dinas += '<tr>' +
                        '<td>' + response['result_tbl_dokumen_surat_pra_nota_dinas'][i].nama_file + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(' + response['result_tbl_dokumen_surat_pra_nota_dinas'][i].id_dokumen_surat_pra + ')">Upload Surat</a></td>' +
                        '</tr>'
                }
                $('#result_dokumen_nota_dinas').html(html_dokumen_pra_nota_dinas);
            }
        })
    }

    function Result_Dokumen_Pasca() {
        // pasca
        var id = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/administrasi_penyedia/byid_detail_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                var html_dokumen_pasca_gunning = '';
                var i;
                for (i = 0; i < response['result_tbl_dokumen_surat_pasca_gunning'].length; i++) {
                    if (response['result_tbl_dokumen_surat_pasca_gunning'][i].status == 1) {
                        var status = '<a href="<?= base_url('file_surat_pascakualifikasi/') ?>' + response['result_tbl_dokumen_surat_pasca_gunning'][i].file + '" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_gunning'][i].id_dokumen_surat_pasca + ')">' + response['result_tbl_dokumen_surat_pasca_gunning'][i].file + '</a>';
                    } else {
                        var status = 'Belum Upload Surat !!';
                    }
                    html_dokumen_pasca_gunning += '<tr>' +
                        '<td>' + response['result_tbl_dokumen_surat_pasca_gunning'][i].nama_file + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_gunning'][i].id_dokumen_surat_pasca + ')">Upload Surat</a></td>' +
                        '</tr>'
                }
                $('#result_dokumen_gunning').html(html_dokumen_pasca_gunning);

                var html_dokumen_pasca_loi = '';
                var i;
                for (i = 0; i < response['result_tbl_dokumen_surat_pasca_loi'].length; i++) {
                    if (response['result_tbl_dokumen_surat_pasca_loi'][i].status == 1) {
                        var status = '<a href="<?= base_url('file_surat_pascakualifikasi/') ?>' + response['result_tbl_dokumen_surat_pasca_loi'][i].file + '" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_loi'][i].id_dokumen_surat_pasca + ')">' + response['result_tbl_dokumen_surat_pasca_loi'][i].file + '</a>';
                    } else {
                        var status = 'Belum Upload Surat !!';
                    }
                    html_dokumen_pasca_loi += '<tr>' +
                        '<td>' + response['result_tbl_dokumen_surat_pasca_loi'][i].nama_file + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_loi'][i].id_dokumen_surat_pasca + ')">Upload Surat</a></td>' +
                        '</tr>'
                }
                $('#result_dokumen_loi').html(html_dokumen_pasca_loi);

                var html_dokumen_pasca_sho = '';
                var i;
                for (i = 0; i < response['result_tbl_dokumen_surat_pasca_sho'].length; i++) {
                    if (response['result_tbl_dokumen_surat_pasca_sho'][i].status == 1) {
                        var status = '<a href="<?= base_url('file_surat_pascakualifikasi/') ?>' + response['result_tbl_dokumen_surat_pasca_sho'][i].file + '" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_sho'][i].id_dokumen_surat_pasca + ')">' + response['result_tbl_dokumen_surat_pasca_sho'][i].file + '</a>';
                    } else {
                        var status = 'Belum Upload Surat !!';
                    }
                    html_dokumen_pasca_sho += '<tr>' +
                        '<td>' + response['result_tbl_dokumen_surat_pasca_sho'][i].nama_file + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_sho'][i].id_dokumen_surat_pasca + ')">Upload Surat</a></td>' +
                        '</tr>'
                }
                $('#result_dokumen_sho').html(html_dokumen_pasca_sho);

                var html_dokumen_pasca_spmk = '';
                var i;
                for (i = 0; i < response['result_tbl_dokumen_surat_pasca_spmk'].length; i++) {
                    if (response['result_tbl_dokumen_surat_pasca_spmk'][i].status == 1) {
                        var status = '<a href="<?= base_url('file_surat_pascakualifikasi/') ?>' + response['result_tbl_dokumen_surat_pasca_spmk'][i].file + '" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_spmk'][i].id_dokumen_surat_pasca + ')">' + response['result_tbl_dokumen_surat_pasca_spmk'][i].file + '</a>';
                    } else {
                        var status = 'Belum Upload Surat !!';
                    }
                    html_dokumen_pasca_spmk += '<tr>' +
                        '<td>' + response['result_tbl_dokumen_surat_pasca_spmk'][i].nama_file + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen_pasca(' + response['result_tbl_dokumen_surat_pasca_spmk'][i].id_dokumen_surat_pasca + ')">Upload Surat</a></td>' +
                        '</tr>'
                }
                $('#result_dokumen_spmk').html(html_dokumen_pasca_spmk);


            }
        })
    }

    var modal_upload_dokumen_pra = $('#modal_upload_dokumen_pra');

    function ById_dokumen(id_dokumen_surat_pra) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/administrasi_penyedia/by_id_dokumen_pra_pengadaan/'); ?>" + id_dokumen_surat_pra,
            dataType: "JSON",
            success: function(response) {
                modal_upload_dokumen_pra.modal('show');
                $('#nama_file').html(response['row_id_dokumen_surat_pra'].nama_file);
                $('[name="id_dokumen_surat_pra"]').val(response['row_id_dokumen_surat_pra'].id_dokumen_surat_pra);
                $('[name="nama_file"]').val(response['row_id_dokumen_surat_pra'].nama_file);

            }
        })
    }
    // pasca
    var modal_upload_dokumen_pasca = $('#modal_upload_dokumen_pasca');

    function ById_dokumen_pasca(id_dokumen_surat_pasca) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/administrasi_penyedia/by_id_dokumen_pasca_pengadaan/'); ?>" + id_dokumen_surat_pasca,
            dataType: "JSON",
            success: function(response) {
                modal_upload_dokumen_pasca.modal('show');
                $('#nama_file').html(response['row_id_dokumen_surat_pasca'].nama_file);
                $('[name="id_dokumen_surat_pasca"]').val(response['row_id_dokumen_surat_pasca'].id_dokumen_surat_pasca);
                $('[name="nama_file"]').val(response['row_id_dokumen_surat_pasca'].nama_file);

            }
        })
    }


    var form_upload_surat = $('#form_upload_surat');
    form_upload_surat.on('submit', function(e) {
        e.preventDefault();
        if ($('.file').val() == '') {
            $('#error_file').show();
            setTimeout(function() {
                $('#error_file').hide();
            }, 4000);
        } else {
            $.ajax({
                url: "<?= base_url('admin/administrasi_penyedia/update_dokumen_surat_prakualifikasi') ?>",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#upload').attr('disabled', 'disabled');
                    $('#process').css('display', 'block');
                    $('#sedang_dikirim').show();
                },
                success: function(response) {
                    var percentage = 0;
                    var timer = setInterval(function() {
                        percentage = percentage + 20;
                        progress_bar_process_dok_penunjang(percentage, timer);
                    }, 1000);
                }
            });
        }
    });

    var form_upload_surat_pasca = $('#form_upload_surat_pasca');
    form_upload_surat_pasca.on('submit', function(e) {
        e.preventDefault();
        if ($('.file').val() == '') {
            $('#error_file').show();
            setTimeout(function() {
                $('#error_file').hide();
            }, 4000);
        } else {
            $.ajax({
                url: "<?= base_url('admin/administrasi_penyedia/update_dokumen_surat_pascakualifikasi') ?>",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#upload').attr('disabled', 'disabled');
                    $('#process').css('display', 'block');
                    $('#sedang_dikirim').show();
                },
                success: function(response) {
                    var percentage = 0;
                    var timer = setInterval(function() {
                        percentage = percentage + 20;
                        progress_bar_process_dok_pasca(percentage, timer);
                    }, 1000);
                }
            });
        }
    });


    function progress_bar_process_dok_penunjang(percentage, timer) {
        $('.progress-bar').css('width', percentage + '%');
        if (percentage > 100) {
            clearInterval(timer);
            // $('#form_upload_surat')[0].reset();
            // $('#form_upload_surat_pasca')[0].reset();
            $('#process').css('display', 'none');
            $('#sedang_dikirim').show();
            $('.progress-bar').css('width', percentage + '%');
            $('#upload').attr('disabled', false);
            message('success', 'Surat Berhasil Di Upload!', 'Berhasil');
            modal_upload_dokumen_pra.modal('hide');
            modal_upload_dokumen_pasca.modal('hide');
            Result_Dokumen()
            Result_Dokumen_Pasca()
        }
    }

    function progress_bar_process_dok_pasca(percentage, timer) {
        $('.progress-bar').css('width', percentage + '%');
        if (percentage > 100) {
            clearInterval(timer);
            $('#form_upload_surat_pasca')[0].reset();
            $('#process').css('display', 'none');
            $('#sedang_dikirim').show();
            $('.progress-bar').css('width', percentage + '%');
            $('#upload').attr('disabled', false);
            message('success', 'Surat Berhasil Di Upload!', 'Berhasil');
            modal_upload_dokumen_pasca.modal('hide');
            Result_Dokumen_Pasca()
        }
    }




    function hapus_dok_penunjang(id) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ?',
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_dok_penunjang/') ?>" + id,
                    dataType: "JSON",
                    success: function(response) {
                        if (response == 'success') {
                            message('success', 'Berhasil!', 'Data Berhasil Di Hapus')
                            location.reload()
                        }
                    }
                })
            } else {
                message('success', 'Berhasil!', 'Data Tidak Jadi Di Hapus')
            }
        });
    }

    function Kelola_surat() {
        var id = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/administrasi_penyedia/byid_detail_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (response['row_program_detail'].sts_tahun_pembebanan == 'single_years') {
                    $('#multi_years_jika_ada').css('display', 'none')
                } else {
                    $('#multi_years_jika_ada').css('display', 'block')
                }
                $('[name="id_detail_program_penyedia_jasa"]').val(response['row_program_detail'].id_detail_program_penyedia_jasa);
                $('.nama_pekerjaan').html(response['row_program_detail'].nama_pekerjaan_program_mata_anggaran);
                $('.nama_area').html(response['row_program_detail'].nama_area);
                $('.nama_departemen').html(response['row_program_detail'].nama_departemen);
                $('.jenis_pengadaan').html(response['row_program_detail'].jenis_pengadaan);
                $('.waktu_pelaksanaan_pip').html(response['row_program_detail'].waktu_pelaksanaan_pip);
                $('.waktu_pemeliharaan_pip').html(response['row_program_detail'].waktu_pemeliharaan_pip);
                $('.terbilang_waktu_pemeliharaan_pip').html(terbilang(response['row_program_detail'].waktu_pemeliharaan_pip));
                $('.terbilang_waktu_pelaksanaan_pip').html(terbilang(response['row_program_detail'].waktu_pelaksanaan_pip));
                var nilai_total_multi_years = response['row_program_detail'].total_hps_mata_anggaran * response['count_multi_yeras'];
                $('.total_hps_mata_anggaran').html('Rp. ' + nilai_total_multi_years.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                $('[name="pagu_biaya"]').val(response['row_program_detail'].pagu_biaya);
                $('[name="jenis_pengadaan"]').val(response['row_program_detail'].jenis_pengadaan);
                $('[name="nama_pekerjaan_pip"]').val(response['row_program_detail'].nama_pekerjaan_pip);

                $('[name="lokasi_pekerjaan_pip"]').val(response['row_program_detail'].lokasi_pekerjaan_pip);
                $('[name="sasaran_pekerjaan_pip"]').val(response['row_program_detail'].sasaran_pekerjaan_pip);
                $('[name="biaya_rkap_pip"]').val(response['row_program_detail'].biaya_rkap_pip);
                $('[name="perkiraan_biaya_pip"]').val(response['row_program_detail'].perkiraan_biaya_pip);
                $('[name="waktu_pelaksanaan_pip"]').val(response['row_program_detail'].waktu_pelaksanaan_pip);
                $('[name="waktu_pemeliharaan_pip"]').val(response['row_program_detail'].waktu_pemeliharaan_pip);
                $('[name="pembebanan_biaya"]').val(response['row_program_detail'].pembebanan_biaya);
                $('[name="format_persetujuan_pip"]').val(response['row_program_detail'].format_persetujuan_pip);
                $('[name="format_persetujuan_hps"]').val(response['row_program_detail'].format_persetujuan_hps);
                $('[name="no_surat_nota"]').val(response['row_program_detail'].no_surat_nota);
                $('[name="tgl_surat_nota"]').val(response['row_program_detail'].tgl_surat_nota);
                $('[name="format_persetujuan_nota"]').val(response['row_program_detail'].format_persetujuan_nota);
                $('[name="total_hps_mata_anggaran"]').val(response['row_program_detail'].total_hps_mata_anggaran);
                $('.total_hps_pure').html('Rp. ' + response['row_program_detail'].total_hps_mata_anggaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                $('.terbilang_total_hps_pure').html(terbilang(response['row_program_detail'].total_hps_mata_anggaran));
                $('.terbilang_hps').html(terbilang(nilai_total_multi_years));
                $('[name="perkiraan_biaya_pip"]').val(nilai_total_multi_years);
                $('[name="sts_tahun_pembebanan"]').val(response['row_program_detail'].sts_tahun_pembebanan);

                // ttd
                $('[name="nama_ca_ke_gm"]').val(response['row_program_detail'].nama_ca_ke_gm);
                $('[name="nama_gm_ke_dirops"]').val(response['row_program_detail'].nama_gm_ke_dirops);
                $('[name="nama_dirops_ke_dirut"]').val(response['row_program_detail'].nama_dirops_ke_dirut);

                // persetujuan_pip
                $('[name="no_surat_persetujuan_pip_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_persetujuan_pip_dirops_ke_dirut);
                $('[name="tgl_surat_persetujuan_pip_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_persetujuan_pip_dirops_ke_dirut);
                $('[name="nama_persetujuan_pip_dirops_ke_dirut"]').val(response['row_program_detail'].nama_persetujuan_pip_dirops_ke_dirut);

                // pip
                $('[name="lampiran_pip_ca_ke_gm"]').val(response['row_program_detail'].lampiran_pip_ca_ke_gm);
                $('[name="no_surat_pip_ca_ke_gm"]').val(response['row_program_detail'].no_surat_pip_ca_ke_gm);
                $('[name="tgl_surat_pip_ca_ke_gm"]').val(response['row_program_detail'].tgl_surat_pip_ca_ke_gm);

                $('[name="lampiran_pip_gm_ke_dirops"]').val(response['row_program_detail'].lampiran_pip_gm_ke_dirops);
                $('[name="no_surat_pip_gm_ke_dirops"]').val(response['row_program_detail'].no_surat_pip_gm_ke_dirops);
                $('[name="tgl_surat_pip_gm_ke_dirops"]').val(response['row_program_detail'].tgl_surat_pip_gm_ke_dirops);

                $('[name="lampiran_pip_dirops_ke_dirut"]').val(response['row_program_detail'].lampiran_pip_dirops_ke_dirut);
                $('[name="no_surat_pip_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_pip_dirops_ke_dirut);
                $('[name="tgl_surat_pip_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_pip_dirops_ke_dirut);

                // hps
                // ttd
                $('[name="nama_hps_ca_ke_gm"]').val(response['row_program_detail'].nama_hps_ca_ke_gm);
                $('[name="nama_hps_gm_ke_dirops"]').val(response['row_program_detail'].nama_hps_gm_ke_dirops);
                $('[name="nama_hps_dirops_ke_dirut"]').val(response['row_program_detail'].nama_hps_dirops_ke_dirut);
                // persetujuan_hps
                $('[name="no_surat_persetujuan_hps_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_persetujuan_hps_dirops_ke_dirut);
                $('[name="tgl_surat_persetujuan_hps_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_persetujuan_hps_dirops_ke_dirut);
                $('[name="nama_persetujuan_hps_dirops_ke_dirut"]').val(response['row_program_detail'].nama_persetujuan_hps_dirops_ke_dirut);

                $('[name="no_surat_hps_ca_ke_gm"]').val(response['row_program_detail'].no_surat_hps_ca_ke_gm);
                $('[name="tgl_surat_hps_ca_ke_gm"]').val(response['row_program_detail'].tgl_surat_hps_ca_ke_gm);
                $('[name="lampiran_hps_ca_ke_gm"]').val(response['row_program_detail'].lampiran_hps_ca_ke_gm);

                $('[name="no_surat_hps_gm_ke_dirops"]').val(response['row_program_detail'].no_surat_hps_gm_ke_dirops);
                $('[name="tgl_surat_hps_gm_ke_dirops"]').val(response['row_program_detail'].tgl_surat_hps_gm_ke_dirops);
                $('[name="lampiran_hps_gm_ke_dirops"]').val(response['row_program_detail'].lampiran_hps_gm_ke_dirops);

                $('[name="no_surat_hps_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_hps_dirops_ke_dirut);
                $('[name="tgl_surat_hps_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_hps_dirops_ke_dirut);
                $('[name="lampiran_hps_dirops_ke_dirut"]').val(response['row_program_detail'].lampiran_hps_dirops_ke_dirut);

                // nota dinas
                $('[name="nama_nota_dinas"]').val(response['row_program_detail'].nama_nota_dinas);
                $('[name="no_surat_nota"]').val(response['row_program_detail'].no_surat_nota);
                $('[name="tgl_surat_nota"]').val(response['row_program_detail'].tgl_surat_nota);
                $('[name="lampiran_nota"]').val(response['row_program_detail'].lampiran_nota);

                // gunning
                $('[name="no_surat_gunning"]').val(response['row_program_detail'].no_surat_gunning);
                $('[name="tanggal_gunning"]').val(response['row_program_detail'].tanggal_gunning);
                $('[name="lampiran_gunning"]').val(response['row_program_detail'].lampiran_gunning);
                $('[name="tkdn_gunning"]').val(response['row_program_detail'].tkdn_gunning);

                // loi
                $('[name="no_surat_loi"]').val(response['row_program_detail'].no_surat_loi);
                $('[name="tanggal_loi"]').val(response['row_program_detail'].tanggal_loi);
                $('[name="lampiran_loi"]').val(response['row_program_detail'].lampiran_loi);
                $('[name="no_surat_penunjukan_loi"]').val(response['row_program_detail'].no_surat_penunjukan_loi);

                // sho
                $('[name="no_surat_sho"]').val(response['row_program_detail'].no_surat_sho);
                $('[name="tanggal_sho"]').val(response['row_program_detail'].tanggal_sho);

                // smk
                $('[name="no_surat_smk"]').val(response['row_program_detail'].no_surat_smk);
                $('[name="tanggal_smk"]').val(response['row_program_detail'].tanggal_smk);
                $('[name="lampiran_smk"]').val(response['row_program_detail'].lampiran_smk);

                // ttd_pra
                $('[name="nama_dirops_pra"]').val(response['row_program_detail'].nama_dirops_pra);
                $('[name="nama_dirut_pra"]').val(response['row_program_detail'].nama_dirut_pra);

                // no_kontrak
                $('[name="no_kontrak_penyedia"]').val(response['row_program_detail'].no_kontrak_penyedia);
                $('[name="tanggal_kontrak_program"]').val(response['row_program_detail'].tanggal_kontrak_program);
                $('[name="tahun_kontrak_program"]').val(response['row_program_detail'].tahun_kontrak_program);


                // hps hps
                var html = '';
                var i;
                for (i = 0; i < response['data_spm'].length; i++) {
                    $hps = response['data_spm'][i].hps;
                    html += '<a href="javascript:;" onclick="hapus_spm(' + response['data_spm'][i].id_spm + ')" class="text-dark"> ' + response['data_spm'][i].nama_spm + ', <i class="text-danger fas fa fa-trash"></i></a>';
                }
                $('.result_spm').html(html);

                var html2 = '';
                var j;
                for (j = 0; j < response['data_multi_years'].length; j++) {
                    html2 += '<a href="javascript:;" onclick="hapus_multi_years(' + response['data_multi_years'][j].id_multi_years + ')" class="text-dark"> ' + response['data_multi_years'][j].tahun_multiyers + ', <i class="text-danger fas fa fa-trash"></i></a>';
                }
                $('.result_multiyears').html(html2);

                var html3 = '';
                var x;
                for (x = 0; x < response['data_teknis'].length; x++) {
                    html3 += '<div class="row"><div class="col-md-1">2.' + [x + 1] + '</div>' +
                        '<div class="col-md-11" style="margin-left: -40px;">' +
                        '<b>' + response['data_teknis'][x].nama_alasan + '</b>' +
                        '&nbsp;<a href="javascript:;" onclick="hapus_teknis(' + response['data_teknis'][x].id_alasan_teknis + ')" class="text-dark"><i class="text-danger fas fa fa-trash"></i></a>' +
                        '</div>' +
                        '</div>';
                }
                $('#alasan_teknis').html(html3);

                var html4 = '';
                var o;
                for (o = 0; o < response['data_administrasi'].length; o++) {
                    html4 += '<div class="row"><div class="col-md-1">1.' + [o + 1] + '</div>' +
                        '<div class="col-md-11" style="margin-left: -40px;">' +
                        '<b>' + response['data_administrasi'][o].nama_alasan + '</b>' +
                        '&nbsp;<a href="javascript:;" onclick="hapus_administrasi(' + response['data_administrasi'][o].id_alasan_administrasi + ')" class="text-dark"><i class="text-danger fas fa fa-trash"></i></a>' +
                        '</div>' +
                        '</div>';
                }
                $('#alasan_administrasi').html(html4);
            }
        })
    }
</script>

<script>
    function pilih_spm() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var id_spm = $('[name="id_spm"]').val()
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_spm') ?>",
            data: {
                id_spm: id_spm,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }

    function hapus_multi_years(id_multi_years) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/hapus_multiyears') ?>",
            data: {
                id_multi_years: id_multi_years,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }


    function hapus_teknis(id) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var type = 'teknis';
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/delete_alasan') ?>",
            data: {
                id: id,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }

    function hapus_administrasi(id) {
        console.log(id);
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var type = 'administrasi';
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/delete_alasan') ?>",
            data: {
                id: id,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }




    function hapus_spm(id_spm) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/hapus_spm') ?>",
            data: {
                id_spm: id_spm,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }

    function pilih_sts_tahun() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var sts_tahun_pembebanan = $('[name="sts_tahun_pembebanan"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_sts_tahun_pembebanan') ?>",
            data: {
                sts_tahun_pembebanan: sts_tahun_pembebanan,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }

    function add_multi_years() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var tahun_multiyers = $('[name="tahun_multiyers"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_multi_years') ?>",
            data: {
                tahun_multiyers: tahun_multiyers,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }

    function Simpan_alasan(type) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var nama_alasan_teknis = $('[name="nama_alasan_teknis"]').val();
        var nama_alasan_administrasi = $('[name="nama_alasan_administrasi"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/add_alasan') ?>",
            data: {
                type: type,
                nama_alasan_administrasi: nama_alasan_administrasi,
                nama_alasan_teknis: nama_alasan_teknis,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    Kelola_surat()
                }
            }
        })
    }
</script>

<script>
    var form_no_kontrak_penyedia = $('#form_no_kontrak_penyedia')

    function simpan_data_no_kontrak() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/simpan_data_no_kontrak') ?>",
            data: form_no_kontrak_penyedia.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Berhasil Di Update!')
                    Kelola_surat()
                } else {}
            }
        })
    }
</script>

<script>
    $('#myTab a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>

<script>
    function Simpan_semua_surat(type) {
        var type_pip_number = $('[name="type_pip_number"]').val();
        var type_hps_number = $('[name="type_hps_number"]').val();
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();

        // ttd
        var nama_ca_ke_gm = $('[name="nama_ca_ke_gm"]').val();
        var nama_gm_ke_dirops = $('[name="nama_gm_ke_dirops"]').val();
        var nama_dirops_ke_dirut = $('[name="nama_dirops_ke_dirut"]').val();

        // PIP
        var tgl_surat_pip_ca_ke_gm = $('[name="tgl_surat_pip_ca_ke_gm"]').val();
        var no_surat_pip_ca_ke_gm = $('[name="no_surat_pip_ca_ke_gm"]').val();
        var lampiran_pip_ca_ke_gm = $('[name="lampiran_pip_ca_ke_gm"]').val();

        var tgl_surat_pip_gm_ke_dirops = $('[name="tgl_surat_pip_gm_ke_dirops"]').val();
        var no_surat_pip_gm_ke_dirops = $('[name="no_surat_pip_gm_ke_dirops"]').val();
        var lampiran_pip_gm_ke_dirops = $('[name="lampiran_pip_gm_ke_dirops"]').val();

        var tgl_surat_pip_dirops_ke_dirut = $('[name="tgl_surat_pip_dirops_ke_dirut"]').val();
        var no_surat_pip_dirops_ke_dirut = $('[name="no_surat_pip_dirops_ke_dirut"]').val();
        var lampiran_pip_dirops_ke_dirut = $('[name="lampiran_pip_dirops_ke_dirut"]').val();

        // persetujuan_pip
        var no_surat_persetujuan_pip_dirops_ke_dirut = $('[name="no_surat_persetujuan_pip_dirops_ke_dirut"]').val();
        var tgl_surat_persetujuan_pip_dirops_ke_dirut = $('[name="tgl_surat_persetujuan_pip_dirops_ke_dirut"]').val();
        var nama_persetujuan_pip_dirops_ke_dirut = $('[name="nama_persetujuan_pip_dirops_ke_dirut"]').val();

        // HPS
        // hps
        // ttd
        var nama_hps_ca_ke_gm = $('[name="nama_hps_ca_ke_gm"]').val();
        var nama_hps_gm_ke_dirops = $('[name="nama_hps_gm_ke_dirops"]').val();
        var nama_hps_dirops_ke_dirut = $('[name="nama_hps_dirops_ke_dirut"]').val();

        var tgl_surat_hps_ca_ke_gm = $('[name="tgl_surat_hps_ca_ke_gm"]').val();
        var no_surat_hps_ca_ke_gm = $('[name="no_surat_hps_ca_ke_gm"]').val();
        var lampiran_hps_ca_ke_gm = $('[name="lampiran_hps_ca_ke_gm"]').val();

        var tgl_surat_hps_gm_ke_dirops = $('[name="tgl_surat_hps_gm_ke_dirops"]').val();
        var no_surat_hps_gm_ke_dirops = $('[name="no_surat_hps_gm_ke_dirops"]').val();
        var lampiran_hps_gm_ke_dirops = $('[name="lampiran_hps_gm_ke_dirops"]').val();

        var tgl_surat_hps_dirops_ke_dirut = $('[name="tgl_surat_hps_dirops_ke_dirut"]').val();
        var no_surat_hps_dirops_ke_dirut = $('[name="no_surat_hps_dirops_ke_dirut"]').val();
        var lampiran_hps_dirops_ke_dirut = $('[name="lampiran_hps_dirops_ke_dirut"]').val();

        // persetujuan_hps
        var no_surat_persetujuan_hps_dirops_ke_dirut = $('[name="no_surat_persetujuan_hps_dirops_ke_dirut"]').val();
        var tgl_surat_persetujuan_hps_dirops_ke_dirut = $('[name="tgl_surat_persetujuan_hps_dirops_ke_dirut"]').val();
        var nama_persetujuan_hps_dirops_ke_dirut = $('[name="nama_persetujuan_hps_dirops_ke_dirut"]').val();

        var jenis_pengadaan = $('[name="jenis_pengadaan"]').val();
        var pagu_biaya = $('[name="pagu_biaya"]').val();
        var waktu_pelaksanaan_pip = $('[name="waktu_pelaksanaan_pip"]').val();
        var waktu_pemeliharaan_pip = $('[name="waktu_pemeliharaan_pip"]').val();

        // nota dinas 
        var nama_nota_dinas = $('[name="nama_nota_dinas"]').val();
        var no_surat_nota = $('[name="no_surat_nota"]').val();
        var tgl_surat_nota = $('[name="tgl_surat_nota"]').val();
        var lampiran_nota = $('[name="lampiran_nota"]').val();

        // gunning
        var tgl_surat_gunning = $('[name="tanggal_gunning"]').val();
        var no_surat_gunning = $('[name="no_surat_gunning"]').val();
        var lampiran_gunning = $('[name="lampiran_gunning"]').val();
        var tkdn_gunning = $('[name="tkdn_gunning"]').val();

        // loi
        var tgl_surat_loi = $('[name="tanggal_loi"]').val();
        var no_surat_loi = $('[name="no_surat_loi"]').val();
        var lampiran_loi = $('[name="lampiran_loi"]').val();
        var no_surat_penunjukan_loi = $('[name="no_surat_penunjukan_loi"]').val();

        // smk
        var tgl_surat_smk = $('[name="tanggal_smk"]').val();
        var no_surat_smk = $('[name="no_surat_smk"]').val();
        var lampiran_smk = $('[name="lampiran_smk"]').val();
        // sho
        var tgl_surat_sho = $('[name="tanggal_sho"]').val();
        var no_surat_sho = $('[name="no_surat_sho"]').val();

        // ttd_pra
        var nama_dirops_pra = $('[name="nama_dirops_pra"]').val();
        var nama_dirut_pra = $('[name="nama_dirut_pra"]').val();

        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/simpan_global_kelola_surat') ?>",
            data: {
                type: type,
                type_pip_number: type_pip_number,
                type_hps_number: type_hps_number,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,

                // ttd_pra
                nama_dirops_pra: nama_dirops_pra,
                nama_dirut_pra: nama_dirut_pra,

                // ttd pip
                nama_ca_ke_gm: nama_ca_ke_gm,
                nama_gm_ke_dirops: nama_gm_ke_dirops,
                nama_dirops_ke_dirut: nama_dirops_ke_dirut,
                nama_persetujuan_pip_dirops_ke_dirut: nama_persetujuan_pip_dirops_ke_dirut,

                // persetujuan_pip
                no_surat_persetujuan_pip_dirops_ke_dirut: no_surat_persetujuan_pip_dirops_ke_dirut,
                tgl_surat_persetujuan_pip_dirops_ke_dirut: tgl_surat_persetujuan_pip_dirops_ke_dirut,

                tgl_surat_pip_ca_ke_gm: tgl_surat_pip_ca_ke_gm,
                no_surat_pip_ca_ke_gm: no_surat_pip_ca_ke_gm,
                lampiran_pip_ca_ke_gm: lampiran_pip_ca_ke_gm,

                tgl_surat_pip_gm_ke_dirops: tgl_surat_pip_gm_ke_dirops,
                no_surat_pip_gm_ke_dirops: no_surat_pip_gm_ke_dirops,
                lampiran_pip_gm_ke_dirops: lampiran_pip_gm_ke_dirops,

                tgl_surat_pip_dirops_ke_dirut: tgl_surat_pip_dirops_ke_dirut,
                no_surat_pip_dirops_ke_dirut: no_surat_pip_dirops_ke_dirut,
                lampiran_pip_dirops_ke_dirut: lampiran_pip_dirops_ke_dirut,

                // hps
                // ttd pip
                nama_hps_ca_ke_gm: nama_hps_ca_ke_gm,
                nama_hps_gm_ke_dirops: nama_hps_gm_ke_dirops,
                nama_hps_dirops_ke_dirut: nama_hps_dirops_ke_dirut,
                nama_persetujuan_hps_dirops_ke_dirut: nama_persetujuan_hps_dirops_ke_dirut,

                // persetujuan_hps
                no_surat_persetujuan_hps_dirops_ke_dirut: no_surat_persetujuan_hps_dirops_ke_dirut,
                tgl_surat_persetujuan_hps_dirops_ke_dirut: tgl_surat_persetujuan_hps_dirops_ke_dirut,

                tgl_surat_hps_ca_ke_gm: tgl_surat_hps_ca_ke_gm,
                no_surat_hps_ca_ke_gm: no_surat_hps_ca_ke_gm,
                lampiran_hps_ca_ke_gm: lampiran_hps_ca_ke_gm,

                tgl_surat_hps_gm_ke_dirops: tgl_surat_hps_gm_ke_dirops,
                no_surat_hps_gm_ke_dirops: no_surat_hps_gm_ke_dirops,
                lampiran_hps_gm_ke_dirops: lampiran_hps_gm_ke_dirops,

                tgl_surat_hps_dirops_ke_dirut: tgl_surat_hps_dirops_ke_dirut,
                no_surat_hps_dirops_ke_dirut: no_surat_hps_dirops_ke_dirut,
                lampiran_hps_dirops_ke_dirut: lampiran_hps_dirops_ke_dirut,

                // gunning
                tgl_surat_gunning: tgl_surat_gunning,
                no_surat_gunning: no_surat_gunning,
                lampiran_gunning: lampiran_gunning,
                tkdn_gunning: tkdn_gunning,

                // loi
                tgl_surat_loi: tgl_surat_loi,
                no_surat_loi: no_surat_loi,
                lampiran_loi: lampiran_loi,
                no_surat_penunjukan_loi: no_surat_penunjukan_loi,

                // smk
                tgl_surat_smk: tgl_surat_smk,
                no_surat_smk: no_surat_smk,
                lampiran_smk: lampiran_smk,
                // sho
                tgl_surat_sho: tgl_surat_sho,
                no_surat_sho: no_surat_sho,
                // pip

                // nota dinas
                nama_nota_dinas: nama_nota_dinas,
                no_surat_nota: no_surat_nota,
                tgl_surat_nota: tgl_surat_nota,
                lampiran_nota: lampiran_nota,

                jenis_pengadaan: jenis_pengadaan,
                pagu_biaya: pagu_biaya,
                waktu_pelaksanaan_pip: waktu_pelaksanaan_pip,
                waktu_pemeliharaan_pip: waktu_pemeliharaan_pip,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil!', 'Data Berhasil Di Simpan')
                    Kelola_surat()
                }
            }
        })
    }
</script>

<script>
    $("#pagu_biaya").keyup(function() {
        var harga = $("#pagu_biaya").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah2');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<script>
    function Pilih_flow() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var flow_pra_dokumen_kontrak = $('[name="flow_pra_dokumen_kontrak"]').val();
        if (flow_pra_dokumen_kontrak == '') {
            message('warning', 'Maaf!', 'Pilih Yang Benar');
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/administrasi_penyedia/update_flow_detail_program_penyedia') ?>",
                data: {
                    id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                    flow_pra_dokumen_kontrak: flow_pra_dokumen_kontrak
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="flow_pra_dokumen_kontrak"]').val(response['row_program'].flow_pra_dokumen_kontrak);
                    message('success', 'Berhasil!', 'Flow Berhasil Diupdate');

                    window.location.href = ''
                }
            })
        }
    }
</script>
<script>
    function flow_1_ip() {
        var flow_1_ip = $('[name="flow_1_ip"]').val();
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/get_ip') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                flow_1_ip: flow_1_ip,
            },
            success: function(html) {
                $('.render').html(html);
            }
        })
    }

    function flow_1_hps() {
        var flow_1_hps = $('[name="flow_1_hps"]').val();
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/get_hps') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                flow_1_hps: flow_1_hps,
            },
            success: function(html) {
                $('.render_hps').html(html);
            }
        })
    }


    function flow_2_ip() {
        var flow_2_ip = $('[name="flow_2_ip"]').val();
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/get_ip') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                flow_2_ip: flow_2_ip,
            },
            success: function(html) {
                $('.render').html(html);
            }
        })
    }

    function flow_2_hps() {
        var flow_2_hps = $('[name="flow_2_hps"]').val();
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/get_hps') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                flow_2_hps: flow_2_hps,
            },
            success: function(html) {
                $('.render_hps').html(html);
            }
        })
    }

    function Update() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/generate_upload_surat') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
            },
            success: function(response) {
                Kelola_surat()
                Result_Dokumen()
                Result_Dokumen_Pasca()
            }
        })
    }

    function Update_Surat_Pasca() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/generate_upload_surat_pasca') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
            },
            success: function(response) {
                Kelola_surat()
                Result_Dokumen()
                Result_Dokumen_Pasca()
            }
        })
    }


    // danang
    var modal_upload_dokumen_kontrak_hps = $('#modal_upload_dokumen_kontrak_hps')

    function upload_kontrak_hps(sts_dokumen) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();

        $('[name="sts_dokumen"]').val(sts_dokumen);
        if (sts_dokumen == 1) {
            $('#kontrak_hps').html('Kontrak')
        } else {
            $('#kontrak_hps').html('HPS')
        }
        modal_upload_dokumen_kontrak_hps.modal('show')
    }


    var form_upload_kontrak_hps = $('#form_upload_kontrak_hps');
    form_upload_kontrak_hps.on('submit', function(e) {
        e.preventDefault();
        if ($('.nama_file').val() == '') {
            $('#error_file1').show();
            setTimeout(function() {
                $('#error_file1').hide();
            }, 4000);
        } else {
            $.ajax({
                url: "<?= base_url('admin/administrasi_penyedia/upload_kontrak_dan_hps') ?>",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    // $('#upload1').attr('disabled', 'disabled');
                    $('#process_kontrakhps').css('display', 'block');
                    $('#sedang_dikirim_kontrakhps').show();
                },
                success: function(response) {
                    var percentage = 0;
                    var timer = setInterval(function() {
                        percentage = percentage + 20;
                        progressbar_dok_kontrak_hps(percentage, timer);
                    }, 1000);
                }
            });
        }
    });


    function progressbar_dok_kontrak_hps(percentage, timer) {
        $('.progress-bar').css('width', percentage + '%');
        if (percentage > 100) {
            clearInterval(timer);
            // $('#form_upload_surat')[0].reset();
            // $('#form_upload_surat_pasca')[0].reset();
            $('#process_kontrakhps').css('display', 'none');
            $('#sedang_dikirim_kontrakhps').show();
            $('.progress-bar').css('width', percentage + '%');
            // $('#upload').attr('disabled', false);
            message('success', 'Surat Berhasil Di Upload!', 'Berhasil');
            modal_upload_dokumen_kontrak_hps.modal('hide');
            view_dok_kontrak()
            view_dok_hps()
        }
    }

    view_dok_kontrak()

    function view_dok_kontrak() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            type: 'ajax',
            url: '<?= base_url('admin/administrasi_penyedia/get_kontrak_dan_hps/') ?>' + id_detail_program_penyedia_jasa,
            async: false,
            dataType: 'json',
            success: function(data) {
                var kontrak = '';
                var o;
                for (o = 0; o < data.length; o++) {
                    kontrak += '<tr>' +
                        '<td>' + '<a target="_blank" href="<?= base_url('file_kontrak/') ?>' + data[o].nama_file + '">' + data[o].nama_file + '</a>' + '</td>' +
                        '<td>' + '<a href="" class="text-danger"><i class="fa fa-trash"></i></a>' + '</td>' +
                        '</tr>'
                }
                $('#tbl_upload_kontrak').html(kontrak);
            }
        })
    }


    view_dok_hps()

    function view_dok_hps() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            type: 'ajax',
            url: '<?= base_url('admin/administrasi_penyedia/get_kontrak_dan_hps2/') ?>' + id_detail_program_penyedia_jasa,
            async: false,
            dataType: 'json',
            success: function(data) {
                var hps = '';
                var o;
                for (o = 0; o < data.length; o++) {
                    hps += '<tr>' +
                        '<td>' + '<a target="_blank" href="<?= base_url('file_hps/') ?>' + data[o].nama_file + '">' + data[o].nama_file + '</a>' + '</td>' +
                        '<td>' + '<a href="" class="text-danger"><i class="fa fa-trash"></i></a>' + '</td>' +
                        '</tr>'
                }
                $('#tbl_upload_hps').html(hps);
            }
        })
    }

    var modal_edit_nama_program = $('#modal_edit_nama_program');
    var form_edit_nama_program = $('#form_edit_nama_program');

    function Edit_nama_mata_anggaran(id_detail_program_penyedia_jasa) {
        $.ajax({
            type: 'GET',
            url: '<?= base_url('admin/administrasi_penyedia/get_detail_program/') ?>' + id_detail_program_penyedia_jasa,
            async: false,
            dataType: 'json',
            success: function(response) {
                modal_edit_nama_program.modal('show')
                $('[name="id_detail_program_penyedia_jasa"]').val(response['program'].id_detail_program_penyedia_jasa);
                $('[name="nama_pekerjaan_program_mata_anggaran"]').val(response['program'].nama_pekerjaan_program_mata_anggaran);
            }
        })
    }

    function save_edit_program() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/administrasi_penyedia/update_program') ?>",
            data: form_edit_nama_program.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_edit_nama_program.modal('hide')
                    message('success', 'Nama Uraian Pekerjaan Berhasil Di Edit!', 'Berhasil');
                    location.reload()
                }
            }
        })
    }

    function Hapus_nama_mata_anggaran(id_detail_program_penyedia_jasa) {
        $.ajax({
            type: 'GET',
            url: '<?= base_url('admin/administrasi_penyedia/get_detail_program/') ?>' + id_detail_program_penyedia_jasa,
            async: false,
            dataType: 'json',
            success: function(response) {
                Question_hapus_anggaran(response['program'].id_detail_program_penyedia_jasa, response['program'].nama_pekerjaan_program_mata_anggaran)
            }
        })
    }

    function Question_hapus_anggaran(id_detail_program_penyedia_jasa, nama_pekerjaan_program_mata_anggaran) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: nama_pekerjaan_program_mata_anggaran + "?",
            icon: "warning",
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/administrasi_penyedia/hapus_detail_program/') ?>" + id_detail_program_penyedia_jasa,
                    dataType: "JSON",
                    success: function(response) {
                        if (response == 'success') {
                            message('success', 'Berhasil!', 'Data Berhasil Di Hapus')
                            location.reload()
                        }
                    }
                })
            } else {
                message('success', 'Berhasil!', 'Data Tidak Di Hapus Data Anda Aman')
            }
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table_list').DataTable({
            "ordering": false,
        });
    });
</script>