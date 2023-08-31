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
                "url": "<?= base_url('administrasi_kontrak/administrasi_kontrak/get_data/') ?>",
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



    var tbl_addendum = $('#tbl_addendum');
    var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();

    function reloadTable_addendum_kontrak_penyedia_jasa() {
        tbl_addendum.DataTable().ajax.reload();
    }

    $(document).ready(function() {
        tbl_addendum.DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('administrasi_kontrak/administrasi_kontrak/get_data_addendum/') ?>" + id_detail_program_penyedia_jasa,
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
                "sZeroRecords": "Tidak Ada Data Yang Di Cari",
                "sProcessing": "Memuat Data...."
            }
        });
    });

    var modal_buat_addendum = $('#buat_addendum');
    var form_addendum_kontrak = $('#form_addendum_kontrak');

    function Simpan_addendum() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/save_addendum') ?>",
            data: form_addendum_kontrak.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_buat_addendum.modal('hide');
                    message('success', 'Berhasil', 'Berhasil Buat Addendum!')
                    reloadTable_addendum_kontrak_penyedia_jasa()
                } else {}
            }
        })
    }

    var modal_edit_global = $('#modal_edit_global');
    var form_penyedia = $('#form_penyedia');

    function KelolaDetail(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_administrasi_kontrak/byid_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                modal_edit_global.modal('show');
                $('[name="id_detail_program_penyedia_jasa"]').val(response['row_program_penyedia_jasa'].id_detail_program_penyedia_jasa);
                $('[name="nama_penyedia"]').val(response['row_program_penyedia_jasa'].nama_penyedia);
                $('[name="no_kontrak_penyedia"]').val(response['row_program_penyedia_jasa'].no_kontrak_penyedia);
                // gunning view
                $('[name="no_gunning"]').val(response['row_program_penyedia_jasa'].no_gunning);
                $('[name="tanggal_gunning"]').val(response['row_program_penyedia_jasa'].tanggal_gunning);
                // sho view
                $('[name="no_sho"]').val(response['row_program_penyedia_jasa'].no_sho);
                $('[name="tanggal_sho"]').val(response['row_program_penyedia_jasa'].tanggal_sho);
                // smk view
                $('[name="no_smk"]').val(response['row_program_penyedia_jasa'].no_smk);
                $('[name="tanggal_smk"]').val(response['row_program_penyedia_jasa'].tanggal_smk);
            }
        })
    }

    function KelolaDetailNilai(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_administrasi_kontrak/byid_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                window.open('<?= base_url('administrasi_kontrak/administrasi_kontrak/kelola_nilai_kontrak_penyedia/') ?>' + id, '_blank');
            }
        })
    }


    function simpan_data() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/simpan_penyedia') ?>",
            data: form_penyedia.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Berhasil Di Update!')
                    location.reload()
                } else {}
            }
        })
    }

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
                    location.reload()
                } else {}
            }
        })
    }


    var form_gunning = $('#form_gunning')

    function Kirim_gunning() {
        var id = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/upload_gunning/') ?>" + id,
            data: form_gunning.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Berhasil Di Update!')
                    location.reload()
                } else {}
            }
        })
    }
    // sho
    var form_sho = $('#form_sho')

    function Kirim_sho() {
        var id = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/upload_sho/') ?>" + id,
            data: form_sho.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Berhasil Di Update!')
                    location.reload()
                } else {}
            }
        })
    }

    // smk
    var form_smk = $('#form_smk')

    function Kirim_smk() {
        var id = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/upload_smk/') ?>" + id,
            data: form_smk.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Berhasil Di Update!')
                    location.reload()
                } else {}
            }
        })
    }
</script>


<!-- INI UNTUK ADMINISTRASI KONTRAK -->

<script>
    var modal_bapp = $('#modal_bapp');
    var form_bapp = $('#form_bapp');

    function Bapp(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/byid_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                modal_bapp.modal('show');
                $('[name="id_detail_program_penyedia_jasa"]').val(response['row_program_penyedia_jasa'].id_detail_program_penyedia_jasa);
                $('[name="nama_penyedia"]').val(response['row_program_penyedia_jasa'].nama_penyedia);
                // bapp row
                $('[name="nomor_bapp"]').val(response['bapp_row'].nomor_bapp);
                $('[name="tanggal_bapp"]').val(response['bapp_row'].tanggal_bapp);
                $('[name="no_pekerjaan_bapp"]').val(response['bapp_row'].no_pekerjaan_bapp);
                $('[name="tanggal_pekerjaan_bapp"]').val(response['bapp_row'].tanggal_pekerjaan_bapp);
                $('[name="no_pekerjaan_spmk"]').val(response['bapp_row'].no_pekerjaan_spmk);
                $('[name="tanggal_pekerjaan_spmk"]').val(response['bapp_row'].tanggal_pekerjaan_spmk);
                $('[name="no_pekerjaan_ppp_pihak_kedua"]').val(response['bapp_row'].no_pekerjaan_ppp_pihak_kedua);
                $('[name="tanggal_pekerjaan_ppp_pihak_kedua"]').val(response['bapp_row'].tanggal_pekerjaan_ppp_pihak_kedua);
            }
        })
    }

    function simpan_bapp(id) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/simpan_bapp/') ?>" + id,
            data: form_bapp.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Berhasil Update Format!')
                    location.reload()
                } else {}
            }
        })
    }
</script>

<script>
    var tbl_addendum_fq = $('#tbl_addendum_fq');
    var id_detail_sub_program_penyedia_jasa = $('[name="id_detail_sub_program_penyedia_jasa"]').val();

    function reloadTable_addendum_pq() {
        tbl_addendum_fq.DataTable().ajax.reload();
    }

    $(document).ready(function() {
        tbl_addendum_fq.DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('administrasi_kontrak/administrasi_kontrak/get_data_addendum_pq/') ?>" + id_detail_sub_program_penyedia_jasa,
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
                "sZeroRecords": "Tidak Ada Data Yang Di Cari",
                "sProcessing": "Memuat Data...."
            }
        });
    });

    var modal_buat_addendum_pq = $('#buat_addendum_pq');
    var form_addendum_kontrak_pq = $('#form_addendum_kontrak_pq');

    function Simpan_addendum_pq() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/save_addendum_pq') ?>",
            data: form_addendum_kontrak_pq.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_buat_addendum_pq.modal('hide');
                    message('success', 'Berhasil', 'Berhasil Buat Addendum!')
                    reloadTable_addendum_pq()
                } else {}
            }
        })
    }
</script>
<!-- NILAI KONTRAK PENYEDIA -->

<script>
    function KelolaDetailNilai(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_administrasi_kontrak/byid_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                window.open('<?= base_url('administrasi_kontrak/administrasi_kontrak/kelola_nilai_kontrak_penyedia/') ?>' + id, '_blank');
            }
        })
    }

    var modal_nilai_kontrak = $('#modal_nilai_kontrak');

    function EditNilaiKontrak(id) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/by_id_nilai_kontrak/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                modal_nilai_kontrak.modal('show');
                $('[name="id_nilai_kontrak_penyedia"]').val(response['row_nilai_kontrak'].id_nilai_kontrak_penyedia);
                $('[name="id_detail_program_penyedia_jasa"]').val(response['row_nilai_kontrak'].id_detail_program_penyedia_jasa);
                $('[name="id_detail_sub_program_penyedia_jasa"]').val(response['row_nilai_kontrak'].id_detail_sub_program_penyedia_jasa);
                $('[name="no_nilai_kontrak"]').val(response['row_nilai_kontrak'].no_nilai_kontrak);
                $('[name="uraian_nilai_kontrak"]').val(response['row_nilai_kontrak'].uraian_nilai_kontrak);
                $('[name="satuan_nilai_kontrak"]').val(response['row_nilai_kontrak'].satuan_nilai_kontrak);
                $('[name="volume_nilai_kontrak"]').val(response['row_nilai_kontrak'].volume_nilai_kontrak);
                $('[name="harga_satuan_nilai_kontrak"]').val(response['row_nilai_kontrak'].harga_satuan_nilai_kontrak);
            }
        })
    }
    var form_nilai_kontrak = $('#form_nilai_kontrak');

    function save_data_nilai_kontrak() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/save_nilai_kontrak') ?>",
            data: form_nilai_kontrak.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_nilai_kontrak.modal('hide');
                    message('success', 'Berhasil', 'Berhasil Di Update!')
                    location.reload();
                } else {}
            }
        })
    }

    // 
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
    $('#myTabKontrak a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });
    var hash = window.location.hash;
    $('#myTabKontrak a[href="' + hash + '"]').tab('show');
</script>
<script>
    for (let i = 1; i <= 30; i++) {
        $('#myTabku' + i + ' a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
        $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
            var id = $(e.target).attr("href").substr(1);
            window.location.hash = id;
        });
        var hash = window.location.hash;
        $('#myTabku1 ' + i + ' a[href="' + hash + '"]').tab('show');
    }
</script>
<script>
    var form_buat_addendum = $('#form_buat_addendum');
    var tambah_addendum = $('#tambah_addendum')

    function save_addendum() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/add_addendum') ?>",
            data: form_buat_addendum.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    $('.button_simpan').removeClass('disabled');
                    tambah_addendum.modal('hide')
                    message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }
</script>



<!-- hps_penyedia_kontrak_2 -->
<script>
    var modal_tambah_dkh = $('#modal_tambah_dkh');
    var form_tambah = $('#form_tambah')

    function modal_hps_penyedia_kontrak_2(id_hps_penyedia_kontrak_1, type) {
        console.log(id_hps_penyedia_kontrak_1);
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_kontrak_1') ?>",
            data: {
                id_hps_penyedia_kontrak_1: id_hps_penyedia_kontrak_1,
            },
            dataType: "JSON",
            success: function(response) {
                if (type == 'edit') {
                    $('[name="id_hps_penyedia_kontrak_1"]').val(response['get_hps_penyedia_kontrak_1'].id_hps_penyedia_kontrak_1);
                    $('[name="id_detail_program_penyedia_kontrak_jasa"]').val(response['get_hps_penyedia_kontrak_1'].id_detail_program_penyedia_kontrak_jasa);
                    $('[name="id_detail_sub_program_penyedia_kontrak_jasa"]').val(response['get_hps_penyedia_kontrak_1'].id_detail_sub_program_penyedia_kontrak_jasa);
                    modal_tambah_dkh.modal('show');
                    $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps);
                    $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn);
                    $('.modal-title').html('Edit Uraian');
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'block');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');
                } else if (type == 'hapus') {
                    var uraian_hps = response['get_hps_penyedia_kontrak_1'].uraian_hps;
                    Question_hps_penyedia_1(id_hps_penyedia_kontrak_1, uraian_hps)
                } else {
                    $('[name="id_hps_penyedia_kontrak_1"]').val(response['get_hps_penyedia_kontrak_1'].id_hps_penyedia_kontrak_1);
                    $('[name="id_detail_program_penyedia_kontrak_jasa"]').val(response['get_hps_penyedia_kontrak_1'].id_detail_program_penyedia_kontrak_jasa);
                    $('[name="id_detail_sub_program_penyedia_kontrak_jasa"]').val(response['get_hps_penyedia_kontrak_1'].id_detail_sub_program_penyedia_kontrak_jasa);
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'block');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');
                }

            }
        })
    }

    function Question_hps_penyedia_1(id_hps_penyedia_kontrak_1, uraian_hps) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: "Menghapus" + uraian_hps + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/hapus_hps_penyedia_kontrak_1/') ?>" + id_hps_penyedia_kontrak_1,
                    dataType: "JSON",
                    data: {
                        id_hps_penyedia_kontrak_1: id_hps_penyedia_kontrak_1,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            location.reload()
                        }
                    }
                })
            }
        });
    }

    function save_hps_penyedia_kontrak_2(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_kontrak_2') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_kontrak_2') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>


<!-- hps_penyedia_kontrak_3 -->
<script>
    function modal_hps_penyedia_kontrak_3(id_hps_penyedia_kontrak_2, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_kontrak_2') ?>",
            data: {
                id_hps_penyedia_kontrak_2: id_hps_penyedia_kontrak_2,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh.modal('show');
                $('[name="id_hps_penyedia_kontrak_2"]').val(response['get_hps_penyedia_kontrak_2'].id_hps_penyedia_kontrak_2);
                if (type == 'edit') {
                    $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_2'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_2'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_2'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_2'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_2'].harga_satuan_hps);
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'block');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');
                } else {
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'block');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');
                }
            }
        })
    }
    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_kontrak_3(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_kontrak_3') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_kontrak_3') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>

<!-- hps_penyedia_kontrak_4 -->
<script>
    function modal_hps_penyedia_kontrak_4(id_hps_penyedia_kontrak_3, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_kontrak_3') ?>",
            data: {
                id_hps_penyedia_kontrak_3: id_hps_penyedia_kontrak_3,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh.modal('show');

                $('[name="id_hps_penyedia_kontrak_3"]').val(response['get_hps_penyedia_kontrak_3'].id_hps_penyedia_kontrak_3);
                if (type == 'edit') {
                    $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_3'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_3'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_3'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_3'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_3'].harga_satuan_hps);
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'block');
                    $('#edit_5').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');
                } else {
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'block');
                    $('#simpan_5').css('display', 'none');
                }

            }
        })
    }
    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_kontrak_4(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_kontrak_4') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_kontrak_4') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>


<!-- hps_penyedia_kontrak_5 -->
<script>
    function modal_hps_penyedia_kontrak_5(id_hps_penyedia_kontrak_4, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_kontrak_4') ?>",
            data: {
                id_hps_penyedia_kontrak_4: id_hps_penyedia_kontrak_4,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh.modal('show');
                $('[name="id_hps_penyedia_kontrak_4"]').val(response['get_hps_penyedia_kontrak_4'].id_hps_penyedia_kontrak_4);
                if (type == 'edit') {
                    $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_4'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_4'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_4'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_4'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_4'].harga_satuan_hps);
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'block');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');
                } else {
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'block');
                }
            }
        })
    }
    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_kontrak_5(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_kontrak_5') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_kontrak_5') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>

<!-- hps_penyedia_kontrak_6 -->
<script>
    function modal_hps_penyedia_kontrak_6(id_hps_penyedia_kontrak_5, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_kontrak_5') ?>",
            data: {
                id_hps_penyedia_kontrak_5: id_hps_penyedia_kontrak_5,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh.modal('show');

                $('[name="id_hps_penyedia_kontrak_5"]').val(response['get_hps_penyedia_kontrak_5'].id_hps_penyedia_kontrak_5);
                if (type == 'edit') {
                    $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_5'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_5'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_5'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_5'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_5'].harga_satuan_hps);
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    $('#edit_6').css('display', 'block');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');

                } else {
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                    $('#edit_6').css('display', 'none');
                    // simpan
                    $('#simpan_1').css('display', 'none');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'block');
                }
            }
        })
    }
    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_kontrak_6(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_kontrak_6') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_kontrak_6') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>



<script>
    $("#harga_satuan_hps").keyup(function() {
        var harga = $("#harga_satuan_hps").val();
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
    $("#modal_tambah_dkh").on('hide.bs.modal', function() {
        form_tambah[0].reset();
    });
</script>

<!-- addendum -->

<!-- hps_penyedia_kontrak_2 -->
<script>
    var modal_tambah_dkh_addendum = $('#modal_tambah_dkh_addendum');
    var form_tambah_addendum_hps_penyedia_kontrak = $('#form_tambah_addendum_hps_penyedia_kontrak')

    function modal_hps_penyedia_kontrak_2_addendum(id_hps_penyedia_kontrak_1, type, add) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_kontrak_1') ?>",
            data: {
                id_hps_penyedia_kontrak_1: id_hps_penyedia_kontrak_1,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh_addendum.modal('show');
                $('[name="id_hps_penyedia_kontrak_1"]').val(response['get_hps_penyedia_kontrak_1'].id_hps_penyedia_kontrak_1);
                $('[name="id_detail_program_penyedia_kontrak_jasa"]').val(response['get_hps_penyedia_kontrak_1'].id_detail_program_penyedia_kontrak_jasa);
                $('[name="id_detail_sub_program_penyedia_kontrak_jasa"]').val(response['get_hps_penyedia_kontrak_1'].id_detail_sub_program_penyedia_kontrak_jasa);
                if (type == 'edit') {
                    // get_hps_penyedia_kontrak_1

                    if (add == 1) {
                        $('[name="type_add"]').val(1);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_1);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_1);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_1);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_1);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_1);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_1);
                    } else if (add == 2) {
                        // 2
                        // _addendum_2
                        $('[name="type_add"]').val(2);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_2);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_2);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_2);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_2);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_2);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_2);
                    } else if (add == 3) {
                        // 3
                        // _addendum_3
                        $('[name="type_add"]').val(3);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_3);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_3);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_3);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_3);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_3);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_3);

                        // 4
                        // _addendum_4
                    } else if (add == 4) {
                        $('[name="type_add"]').val(4);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_4);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_4);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_4);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_4);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_4);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_4);
                        // 5
                        // _addendum_5
                    } else if (add == 5) {
                        $('[name="type_add"]').val(5);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_5);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_5);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_5);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_5);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_5);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_5);
                        // 6
                        // _addendum_6
                    } else if (add == 6) {
                        $('[name="type_add"]').val(6);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_6);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_6);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_6);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_6);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_6);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_6);
                        // 7
                        // _addendum_7
                    } else if (add == 7) {
                        $('[name="type_add"]').val(7);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_7);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_7);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_7);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_7);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_7);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_7);
                        // 8
                        // _addendum_8
                    } else if (add == 8) {
                        $('[name="type_add"]').val(8);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_8);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_8);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_8);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_8);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_8);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_8);
                        // 9
                        // _addendum_9
                    } else if (add == 9) {
                        $('[name="type_add"]').val(9);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_9);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_9);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_9);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_9);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_9);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_9);
                        // 10
                        // _addendum_10
                    } else if (add == 10) {
                        $('[name="type_add"]').val(10);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_1'].no_hps_addendum_10);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_1'].uraian_hps_addendum_10);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].satuan_hps_addendum_10);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_1'].volume_hps_addendum_10);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_1'].harga_satuan_hps_addendum_10);
                        $('[name="tkdn"]').val(response['get_hps_penyedia_kontrak_1'].tkdn_addendum_10);
                        // 11
                        // _addendum_11
                    } else {

                    }
                    // edit
                    $('#edit_1_addendum').css('display', 'block');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                } else {
                    if (add == 1) {
                        $('[name="type_add"]').val(1);
                    } else if (add == 2) {
                        // 2
                        // _addendum_2
                        $('[name="type_add"]').val(2);
                    } else if (add == 3) {
                        // 3
                        // _addendum_3
                        $('[name="type_add"]').val(3);
                    } else if (add == 4) {
                        $('[name="type_add"]').val(4);
                    } else if (add == 5) {
                        $('[name="type_add"]').val(5);
                    } else if (add == 6) {
                        $('[name="type_add"]').val(6);
                    } else if (add == 7) {
                        $('[name="type_add"]').val(7);
                    } else if (add == 8) {
                        $('[name="type_add"]').val(8);
                    } else if (add == 9) {
                        $('[name="type_add"]').val(9);
                    } else if (add == 10) {
                        $('[name="type_add"]').val(10);
                    } else {

                    }
                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'block');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');
                }

            }
        })
    }

    function save_hps_penyedia_kontrak_2_addendum(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_kontrak_2_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_kontrak_2_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }

    function save_hps_penyedia_kontrak_1_addendum(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_kontrak_1_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_kontrak_1_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>

<script>
    function Update_nilai_ke_sub_program_kontrak(id_detail_sub_program_penyedia_jasa, type_add) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa_update"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_ke_sub_dan_detail_program_penyedia') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                id_detail_sub_program_penyedia_jasa: id_detail_sub_program_penyedia_jasa,
                type_add: type_add,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Data Di Update!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }

    function Update_nilai_ke_sub_program_addendum(id_detail_sub_program_penyedia_jasa, type_add) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa_update"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_ke_sub_dan_detail_program_penyedia') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                id_detail_sub_program_penyedia_jasa: id_detail_sub_program_penyedia_jasa,
                type_add: type_add,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Data Di Update!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }
</script>

<script>
    function PilihPapenkon(id_detail_program_penyedia_jasa) {
        var papenkon = $('[name="papenkon"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_papenkon') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                papenkon: papenkon,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Pepenkon Di Update!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }

    function PilihViewSurat(id_detail_program_penyedia_jasa) {
        var view_surat = $('[name="view_surat"]').val();
        if (view_surat == 1) {
            window.open('<?= base_url('admin/Administrasi_penyedia/dok_permohonan_evaluasi_dan_negosiasi/') ?>' + id_detail_program_penyedia_jasa, '_blank');
        } else if (2) {
            window.open('<?= base_url('admin/Administrasi_penyedia/dok_penandatanganan_undangan_evaluasi/') ?>' + id_detail_program_penyedia_jasa, '_blank');
        } else if (3) {
            window.open('<?= base_url('admin/Administrasi_penyedia/dok_ba_evaluasi/') ?>' + id_detail_program_penyedia_jasa, '_blank');
        } else if (4) {
            window.open('<?= base_url('admin/Administrasi_penyedia/dok_spp_ba_adddendum/') ?>' + id_detail_program_penyedia_jasa, '_blank');
        } else if (5) {
            window.open('<?= base_url('admin/Administrasi_penyedia/dok_surat_persetujuan_addendum/') ?>' + id_detail_program_penyedia_jasa, '_blank');
        }
    }
</script>

<script>
    document.getElementById("harga_satuan_hps1").onkeyup = function() {
        var validasiHuruf = /^[a-zA-Z ]+ $ /;
        var validasisimbol = /[^0-9]/;
        var harga_satuan_hps1 = $('#harga_satuan_hps1').val();
        if (harga_satuan_hps1.match(validasiHuruf)) {
            $('#harga_satuan_hps1').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#harga_satuan_hps1').val('');
        } else if (harga_satuan_hps1.match(validasisimbol)) {
            $('#harga_satuan_hps1').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#harga_satuan_hps1').val('');
        } else {
            $('#harga_satuan_hps1').css('border-color', 'green');
            $('#harga_satuan_hps1').val(harga_satuan_hps1);

        }

    };

    document.getElementById("volume1").onkeyup = function() {
        var validasiHuruf = /^[a-zA-Z ]+ $ /;
        var validasisimbol = /[^0-9]/;
        var volume1 = $('#volume1').val();
        if (volume1.match(validasiHuruf)) {
            $('#volume1').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#volume1').val('');
        } else if (volume1.match(validasisimbol)) {
            $('#volume1').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#volume1').val('');
        } else {
            $('#volume1').css('border-color', 'green');
            $('#volume1').val(volume1);

        }

    };

    document.getElementById("harga_satuan_hps2").onkeyup = function() {
        var validasiHuruf = /^[a-zA-Z ]+ $ /;
        var validasisimbol = /[^0-9]/;
        var harga_satuan_hps2 = $('#harga_satuan_hps2').val();
        if (harga_satuan_hps2.match(validasiHuruf)) {
            $('#harga_satuan_hps2').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#harga_satuan_hps2').val('');
        } else if (harga_satuan_hps2.match(validasisimbol)) {
            $('#harga_satuan_hps2').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#harga_satuan_hps2').val('');
        } else {
            $('#harga_satuan_hps2').css('border-color', 'green');
            $('#harga_satuan_hps2').val(harga_satuan_hps2);

        }

    };

    document.getElementById("volume2").onkeyup = function() {
        var validasiHuruf = /^[a-zA-Z ]+ $ /;
        var validasisimbol = /[^0-9]/;
        var volume2 = $('#volume2').val();
        if (volume2.match(validasiHuruf)) {
            $('#volume2').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#volume2').val('');
        } else if (volume2.match(validasisimbol)) {
            $('#volume2').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#volume2').val('');
        } else {
            $('#volume2').css('border-color', 'green');
            $('#volume2').val(volume2);

        }

    };
</script>

<script>
    $(".harga_satuan_hps1").keyup(function() {
        var harga = $(".harga_satuan_hps1").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah1');
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

    $(".harga_satuan_hps2").keyup(function() {
        var harga = $(".harga_satuan_hps2").val();
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
    $(document).ready(function() {
        var table = $('.table').DataTable({
            select: true,
            "ordering": false,
            dom: 'Blfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 Rows', '25 Rows', '50 Rows', 'Back']
            ],
            dom: 'Bfrtip',
            buttons: [{
                extend: 'pdf',
                text: ' Export a PDF'
            }, {
                extend: 'csv',
                text: ' Export a CSV'
            }, {
                extend: 'excel',
                text: ' Export a EXCEL'
            }, 'pageLength'],
        });
        table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

    });
</script>

<script>
    var modal_tambah_dkh = $('#modal_tambah_dkh');
    var modal_tambah_dkh_addendum = $('#modal_tambah_dkh_addendum');
    var form_tambah = $('#form_tambah')

    function tambah_uraian(id_detail_sub_program_penyedia_jasa, type, add) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_sub_program_penyedia') ?>",
            data: {
                id_detail_sub_program_penyedia_jasa: id_detail_sub_program_penyedia_jasa,
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
            },
            dataType: "JSON",
            success: function(response) {
                if (type == 'biasa') {
                    $('.modal-title').html('Tambah Uraian');
                    modal_tambah_dkh.modal('show');
                    $('[name="id_detail_program_penyedia_jasa"]').val(response['row_sub_program'].id_detail_program_penyedia_jasa);
                    $('[name="id_detail_sub_program_penyedia_jasa"]').val(response['row_sub_program'].id_detail_sub_program_penyedia_jasa);
                    $('#simpan_1').css('display', 'block');
                    $('#simpan_2').css('display', 'none');
                    $('#simpan_3').css('display', 'none');
                    $('#simpan_4').css('display', 'none');
                    $('#simpan_5').css('display', 'none');
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_3').css('display', 'none');
                    $('#edit_4').css('display', 'none');
                    $('#edit_5').css('display', 'none');
                } else {
                    $('.modal-title').html('Tambah Uraian');
                    modal_tambah_dkh_addendum.modal('show');
                    $('[name="id_detail_program_penyedia_jasa"]').val(response['row_sub_program'].id_detail_program_penyedia_jasa);
                    $('[name="id_detail_sub_program_penyedia_jasa"]').val(response['row_sub_program'].id_detail_sub_program_penyedia_jasa);
                    $('[name="type_add"]').val(add);
                    $('#simpan_1_addendum').css('display', 'block');
                    $('#simpan_2_addendum').css('display', 'none');
                    // edit_addendum
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                }

            }
        })
    }

    function save_hps_penyedia_kontrak_1(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/tambah_hps_penyedia_kontrak_1') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('administrasi_kontrak/administrasi_kontrak/edit_hps_penyedia_kontrak_1') ?>",
                data: form_tambah.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response == 'success') {
                        modal_tambah_dkh.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }
    }
</script>

<script>
    function Pilih_ppn_kontrak_awal(id_detail_sub_program_penyedia_jasa) {
        var ppn_hps = $('[name="ppn_hps_kontrak_awal' + id_detail_sub_program_penyedia_jasa + '"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_ppn_sub_detail_program_kontrak_awal') ?>",
            data: {
                id_detail_sub_program_penyedia_jasa: id_detail_sub_program_penyedia_jasa,
                ppn_hps: ppn_hps
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'PPN Berhasil Di Update!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }

    function Pilih_ppn_kontrak_addendum(id_detail_sub_program_penyedia_jasa, no_addendum) {
        var ppn_hps = $('[name="ppn_hps_kontrak_addendum_' + no_addendum + id_detail_sub_program_penyedia_jasa + '"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_ppn_sub_detail_program_kontrak_addendum') ?>",
            data: {
                id_detail_sub_program_penyedia_jasa: id_detail_sub_program_penyedia_jasa,
                ppn_hps: ppn_hps,
                no_addendum: no_addendum
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'PPN Berhasil Di Update!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }
</script>