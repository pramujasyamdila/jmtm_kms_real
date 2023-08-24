<script>
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
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

<!-- hps_penyedia_2 -->
<script>
    var modal_tambah_dkh = $('#modal_tambah_dkh');
    var form_tambah = $('#form_tambah')

    function tambah_uraian(id_detail_sub_program_penyedia_jasa) {
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
            }
        })
    }

    function save_hps_penyedia_1(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_1') ?>",
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
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_1') ?>",
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

    var modal_excel_hps_penyedia_1 = $('#modal_excel_hps_penyedia_1');

    function tambah_uraian_excel(id_detail_sub_program_penyedia_jasa) {
        modal_excel_hps_penyedia_1.modal('show');
        $('[name="id_detail_sub_program_penyedia_jasa"]').val(id_detail_sub_program_penyedia_jasa);
    }

    var modal_excel_hps_penyedia_2 = $('#modal_excel_hps_penyedia_2');

    function tambah_uraian_excel_2(id_hps_penyedia_1) {
        modal_excel_hps_penyedia_2.modal('show');
        $('[name="id_hps_penyedia_1"]').val(id_hps_penyedia_1);
    }

    var modal_excel_hps_penyedia_3 = $('#modal_excel_hps_penyedia_3');

    function tambah_uraian_excel_3(id_hps_penyedia_2) {
        modal_excel_hps_penyedia_3.modal('show');
        $('[name="id_hps_penyedia_2"]').val(id_hps_penyedia_2);
    }

    var modal_excel_hps_penyedia_4 = $('#modal_excel_hps_penyedia_4');

    function tambah_uraian_excel_4(id_hps_penyedia_3) {
        modal_excel_hps_penyedia_4.modal('show');
        $('[name="id_hps_penyedia_3"]').val(id_hps_penyedia_3);
    }

    var modal_excel_hps_penyedia_5 = $('#modal_excel_hps_penyedia_5');

    function tambah_uraian_excel_5(id_hps_penyedia_4) {
        modal_excel_hps_penyedia_5.modal('show');
        $('[name="id_hps_penyedia_4"]').val(id_hps_penyedia_4);
    }

    var modal_excel_hps_penyedia_6 = $('#modal_excel_hps_penyedia_6');

    function tambah_uraian_excel_6(id_hps_penyedia_5) {
        modal_excel_hps_penyedia_6.modal('show');
        $('[name="id_hps_penyedia_5"]').val(id_hps_penyedia_5);
    }
</script>

<!-- hps_penyedia_2 -->
<script>
    function modal_hps_penyedia_2(id_hps_penyedia_1, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_1') ?>",
            data: {
                id_hps_penyedia_1: id_hps_penyedia_1,
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="id_hps_penyedia_1"]').val(response['get_hps_penyedia_1'].id_hps_penyedia_1);
                $('[name="id_detail_program_penyedia_jasa"]').val(response['get_hps_penyedia_1'].id_detail_program_penyedia_jasa);
                $('[name="id_detail_sub_program_penyedia_jasa"]').val(response['get_hps_penyedia_1'].id_detail_sub_program_penyedia_jasa);
                if (type == 'edit') {
                    modal_tambah_dkh.modal('show');
                    $('[name="no_hps"]').val(response['get_hps_penyedia_1'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_1'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_1'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_1'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_1'].harga_satuan_hps);
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
                    var uraian_hps = response['get_hps_penyedia_1'].uraian_hps;
                    Question_hps_penyedia_1(id_hps_penyedia_1, uraian_hps)
                } else {
                    modal_tambah_dkh.modal('show');
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


    function Question_hps_penyedia_1(id_hps_penyedia_1, uraian_hps) {
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
                    url: "<?= base_url('admin/Administrasi_penyedia/hapus_hps_penyedia_1/') ?>" + id_hps_penyedia_1,
                    dataType: "JSON",
                    data: {
                        id_hps_penyedia_1: id_hps_penyedia_1,
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
    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_2(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_2') ?>",
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
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_2') ?>",
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


<!-- hps_penyedia_3 -->
<script>
    function modal_hps_penyedia_3(id_hps_penyedia_2, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_2') ?>",
            data: {
                id_hps_penyedia_2: id_hps_penyedia_2,
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="id_hps_penyedia_2"]').val(response['get_hps_penyedia_2'].id_hps_penyedia_2);
                if (type == 'edit') {
                    modal_tambah_dkh.modal('show');
                    $('[name="no_hps"]').val(response['get_hps_penyedia_2'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_2'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_2'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_2'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_2'].harga_satuan_hps);
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
                } else if (type == 'hapus') {
                    var uraian_hps = response['get_hps_penyedia_2'].uraian_hps;
                    var id_hps_penyedia_1 = response['get_hps_penyedia_2'].id_hps_penyedia_1;
                    Question_hps_penyedia_2(id_hps_penyedia_2, uraian_hps, id_hps_penyedia_1)
                } else {
                    modal_tambah_dkh.modal('show');
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

    function Question_hps_penyedia_2(id_hps_penyedia_2, uraian_hps, id_hps_penyedia_1) {
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
                    url: "<?= base_url('admin/Administrasi_penyedia/hapus_hps_penyedia_2/') ?>" + id_hps_penyedia_2,
                    dataType: "JSON",
                    data: {
                        id_hps_penyedia_2: id_hps_penyedia_2,
                        id_hps_penyedia_1: id_hps_penyedia_1
                    },
                    success: function(response) {
                        if (response == 'success') {
                            location.reload();
                        }
                    }
                })
            }
        });
    }

    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_3(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_3') ?>",
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
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_3') ?>",
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

<!-- hps_penyedia_4 -->
<script>
    function modal_hps_penyedia_4(id_hps_penyedia_3, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_3') ?>",
            data: {
                id_hps_penyedia_3: id_hps_penyedia_3,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh.modal('show');

                $('[name="id_hps_penyedia_3"]').val(response['get_hps_penyedia_3'].id_hps_penyedia_3);
                if (type == 'edit') {
                    $('[name="no_hps"]').val(response['get_hps_penyedia_3'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_3'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_3'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_3'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_3'].harga_satuan_hps);
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
                } else if (type == 'hapus') {
                    var uraian_hps = response['get_hps_penyedia_3'].uraian_hps;
                    var id_hps_penyedia_2 = response['get_hps_penyedia_3'].id_hps_penyedia_2;
                    Question_hps_penyedia_3(id_hps_penyedia_3, uraian_hps, id_hps_penyedia_2)
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


    function Question_hps_penyedia_3(id_hps_penyedia_3, uraian_hps, id_hps_penyedia_2) {
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
                    url: "<?= base_url('admin/Administrasi_penyedia/hapus_hps_penyedia_3/') ?>" + id_hps_penyedia_3,
                    dataType: "JSON",
                    data: {
                        id_hps_penyedia_3: id_hps_penyedia_3,
                        id_hps_penyedia_2: id_hps_penyedia_2
                    },
                    success: function(response) {
                        if (response == 'success') {
                            location.reload();
                        }
                    }
                })
            }
        });
    }

    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_4(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_4') ?>",
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
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_4') ?>",
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


<!-- hps_penyedia_5 -->
<script>
    function modal_hps_penyedia_5(id_hps_penyedia_4, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_4') ?>",
            data: {
                id_hps_penyedia_4: id_hps_penyedia_4,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh.modal('show');
                $('[name="id_hps_penyedia_4"]').val(response['get_hps_penyedia_4'].id_hps_penyedia_4);
                if (type == 'edit') {
                    $('[name="no_hps"]').val(response['get_hps_penyedia_4'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_4'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_4'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_4'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_4'].harga_satuan_hps);
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
                } else if (type == 'hapus') {
                    var uraian_hps = response['get_hps_penyedia_4'].uraian_hps;
                    var id_hps_penyedia_3 = response['get_hps_penyedia_4'].id_hps_penyedia_3;
                    Question_hps_penyedia_4(id_hps_penyedia_4, uraian_hps, id_hps_penyedia_3)
                } else {
                    // edit
                    $('#edit_1').css('display', 'none');
                    $('#edit_2').css('display', 'none');
                    $('#edit_4').css('display', 'none');
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

    function Question_hps_penyedia_4(id_hps_penyedia_4, uraian_hps, id_hps_penyedia_3) {
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
                    url: "<?= base_url('admin/Administrasi_penyedia/hapus_hps_penyedia_4/') ?>" + id_hps_penyedia_4,
                    dataType: "JSON",
                    data: {
                        id_hps_penyedia_4: id_hps_penyedia_4,
                        id_hps_penyedia_3: id_hps_penyedia_3
                    },
                    success: function(response) {
                        if (response == 'success') {
                            location.reload();
                        }
                    }
                })
            }
        });
    }
    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_5(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_5') ?>",
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
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_5') ?>",
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

<!-- hps_penyedia_6 -->
<script>
    function modal_hps_penyedia_6(id_hps_penyedia_5, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_5') ?>",
            data: {
                id_hps_penyedia_5: id_hps_penyedia_5,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh.modal('show');

                $('[name="id_hps_penyedia_5"]').val(response['get_hps_penyedia_5'].id_hps_penyedia_5);
                if (type == 'edit') {
                    $('[name="no_hps"]').val(response['get_hps_penyedia_5'].no_hps);
                    $('[name="uraian_hps"]').val(response['get_hps_penyedia_5'].uraian_hps);
                    $('[name="satuan_hps"]').val(response['get_hps_penyedia_5'].satuan_hps);
                    $('[name="volume_hps"]').val(response['get_hps_penyedia_5'].volume_hps);
                    $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_5'].harga_satuan_hps);
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
                } else if (type == 'hapus') {
                    var uraian_hps = response['get_hps_penyedia_5'].uraian_hps;
                    var id_hps_penyedia_4 = response['get_hps_penyedia_5'].id_hps_penyedia_4;
                    Question_hps_penyedia_5(id_hps_penyedia_5, uraian_hps, id_hps_penyedia_4)
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

    function Question_hps_penyedia_5(id_hps_penyedia_5, uraian_hps, id_hps_penyedia_4) {
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
                    url: "<?= base_url('admin/Administrasi_penyedia/hapus_hps_penyedia_5/') ?>" + id_hps_penyedia_5,
                    dataType: "JSON",
                    data: {
                        id_hps_penyedia_5: id_hps_penyedia_5,
                        id_hps_penyedia_4: id_hps_penyedia_4
                    },
                    success: function(response) {
                        if (response == 'success') {
                            location.reload();
                        }
                    }
                })
            }
        });
    }
    var form_tambah = $('#form_tambah')

    function save_hps_penyedia_6(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('admin/Administrasi_penyedia/tambah_hps_penyedia_6') ?>",
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
                url: "<?= base_url('admin/Administrasi_penyedia/edit_hps_penyedia_6') ?>",
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

<script>
    function Update_nilai_ke_sub_program(id_detail_sub_program_penyedia_jasa) {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        var ppn_hps = $('[name="ppn_hps' + id_detail_sub_program_penyedia_jasa + '"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_ke_sub_dan_detail_program') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                id_detail_sub_program_penyedia_jasa: id_detail_sub_program_penyedia_jasa,
                ppn_hps: ppn_hps
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
    var tambah_addendum = $('#tambah_addendum')
    var form_buat_addendum = $('#form_buat_addendum')

    function angga() {
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

<script>
    // document.getElementById("harga_satuan_hps").onkeyup = function() {
    //     var validasiHuruf = /^[a-zA-Z ]+ $ /;
    //     var validasisimbol = /[^0-9]/;
    //     var harga_satuan_hps = $('#harga_satuan_hps').val();
    //     if (harga_satuan_hps.match(validasiHuruf)) {
    //         $('#harga_satuan_hps').css('border-color', 'red');
    //         message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
    //         $('#harga_satuan_hps').val('');
    //     } else if (harga_satuan_hps.match(validasisimbol)) {
    //         $('#harga_satuan_hps').css('border-color', 'red');
    //         message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
    //         $('#harga_satuan_hps').val('');
    //     } else {
    //         $('#harga_satuan_hps').css('border-color', 'green');
    //         $('#harga_satuan_hps').val(harga_satuan_hps);

    //     }

    // };

    // document.getElementById("volume").onkeyup = function() {
    //     var validasiHuruf = /^[a-zA-Z ]+ $ /;
    //     var validasisimbol = /[^0-9]/;
    //     var volume = $('#volume').val();
    //     if (volume.match(validasiHuruf)) {
    //         $('#volume').css('border-color', 'red');
    //         message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
    //         $('#volume').val('');
    //     } else if (volume.match(validasisimbol)) {
    //         $('#volume').css('border-color', 'red');
    //         message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
    //         $('#volume').val('');
    //     } else {
    //         $('#volume').css('border-color', 'green');
    //         $('#volume').val(volume);

    //     }

    // };
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
                    text: ' Export a PDF',
                    className: 'btn btn-primary'
                }, {
                    extend: 'csv',
                    text: ' Export a CSV',
                    className: 'btn btn-primary'
                }, {
                    extend: 'excel',
                    text: ' Export a EXCEL',
                    className: 'btn btn-primary'
                }, {
                    extend: 'pageLength',
                    text: ' Show 10 Rows',
                    className: 'btn btn-primary'
                }

            ],
        });
        table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

    });
</script>

<script>
    // pindhkan urutan
    function pindah_urutan_2(id_hps_penyedia_1) {
        var modal_urutan = $('#modal_urutan2');
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/get_hps_penyedia_1') ?>",
            data: {
                id_hps_penyedia_1: id_hps_penyedia_1,
            },
            dataType: "JSON",
            success: function(response) {
                modal_urutan.modal('show');
                var html = '';
                var i;
                var no = 0;
                var kirim_inisial = 0;
                for (i = 0; i < response['result_urutan_hps_penyedia_1'].length; ++i) {
                    html += '<tr>' +
                        '<td><input type="text" onkeyup="UbahUrutaan_hps(' + response['result_urutan_hps_penyedia_1'][i].id_hps_penyedia_1 + ',1.1' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_urutan_hps_penyedia_1'][i].no_urut + '" class="form-control form-control-sm"></td>' +
                        '<td>' + response['result_urutan_hps_penyedia_1'][i].uraian_hps + ' </td>' +
                        '</tr>';
                }
                $('.result_table_urutan').html(html);
            }
        })
    }

    function UbahUrutaan_hps(id_ubah, type, initial) {
        var no_urut_ubah = $('[name="no_urut_ubah_' + initial + '"]').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/pindahkan_turunan') ?>",
            dataType: "JSON",
            data: {
                id_ubah: id_ubah,
                type: type,
                no_urut_ubah: no_urut_ubah
            },
            success: function(response) {
                if (response == 'success') {

                }
            }
        })
    }

    function Update_Turunan() {
        location.reload();
    }
</script>
<script>
    function pilih_ppn_sub_program(id_detail_sub_program_penyedia_jasa) {
        var ppn_hps = $('[name="ppn_hps' + id_detail_sub_program_penyedia_jasa + '"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_ppn_sub_detail_program') ?>",
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

    function pilih_tahun_rekap(id_detail_program_penyedia_jasa) {
        var tahun_anggaran_rekap = $('[name="tahun_anggaran_rekap"]').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/Administrasi_penyedia/update_tahun_anggaran_rekap') ?>",
            data: {
                id_detail_program_penyedia_jasa: id_detail_program_penyedia_jasa,
                tahun_anggaran_rekap: tahun_anggaran_rekap
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Tahun Anggaran Rekap Berhasil Di Tambah!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }
</script>