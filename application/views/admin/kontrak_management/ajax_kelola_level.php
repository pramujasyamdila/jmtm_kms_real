<script>
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }

    var id = $('[name="id_kontrak"]').val();
    get_kelola_kontrak()

    function get_kelola_kontrak() {
        var Modal_traking = $('#modal_traking')
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/data_kontrak/by_id_kontrak/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                // var html = '';
                // var i;
                // var j;
                // var start = response.start;
                // for (i = 0; i < response['result_level3'].length; ++i) {
                //     for (i = 0; i < response['result_level3'][i].length; ++i) {
                //         html += '<tr>' +
                //             '<td class = "tg-c3ow"> </td>' +
                //             '<td class = "tg-c3ow"> Level 3 </td>' +
                //             '<td class = "tg-0pky"> ASDASD </td> ' +
                //             '<td class = "tg-0pky" colspan = "3"> ASDASD </td>' +
                //             '<td class = "tg-0lax"> </td>' +
                //             '</tr>' +
                //             ' <tr>' +
                //             '<td class = "tg-c3ow"></td>' +
                //             '<td class = "tg-c3ow"> </td> ' +
                //             '<td class = "tg-0pky"> </td> ' +
                //             '<td class = "tg-0pky"> Level 4 </td> ' +
                //             '<td class = "tg-0pky"> 1.1 </td> ' +
                //             '<td class = "tg-0pky"> ASDAS </td> ' +
                //             '<td class = "tg-0lax" > </td> ' +
                //             '</tr>';
                //     }
                // }
                // $('.result_datanya').html(html);
            }
        })
    }

    $(document).ready(function() { // Ketika halaman sudah diload dan siap
        var manipulasi_nilai_capex = $('[name="manipulasi_nilai_capex"]').val();
        var i = 1;
        $('#add').click(function() {
            $('.simpan_capex').css('display', 'block');
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '">' +
                '<td class="tg-0lax"></td>' +
                '<td class="tg-0lax" colspan="5"><input type="text" name="nama_uraian_kedua[]" class="form-control"></td>' +
                '<td class="tg-0lax"><input type="text" name="nilai_detail_kedua[]" id="nilai_capex_detail_1' + i + '" class="form-control nilai_detail_capex"><input type="text" disabled class="float-right form-control form-control-sm mt-1 tanpa-rupiah20" style="width: 200px;"></td>' +
                '<td class="tg-0lax"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn-sm btn_remove"><i class="fas fa-trash-alt"></i></button></td>' +
                '</tr>');
            var total_amount = function() {

                var sum = 0;
                $('.nilai_detail_capex').each(function() {
                    var num = $(this).val().replace(',', '');
                    if (num != 0) {
                        sum += parseFloat(num)
                    } else {
                        sum += parseFloat(num)
                    }
                });
                $('#total_amount').val(parseFloat(sum.toFixed()) + parseFloat(manipulasi_nilai_capex));
            }
            $(".nilai_detail_capex").keyup(function() {

                var tanpa_rupiah = document.getElementsByClassName('tanpa-rupiah20');
                tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
                /* Fungsi */

                total_amount();

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

        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            $('.simpan_capex').css('display', 'none');
        });


    });
</script>


<script>
    var form_simpan_capex_dan_detail_capex = $('#form_simpan_capex_dan_detail_capex');

    function simpan_capex_dan_detail_capex(id) {
        var nama_uraian_kedua = $('input[name="nama_uraian_kedua[]"]').map(function() {
            return this.value;
        }).get();
        var nilai_capex_sum = $('input[name="nilai_capex_sum"]').val()
        var nilai_detail_kedua = $('input[name="nilai_detail_kedua[]"]').map(function() {
            return this.value;
        }).get();
        $.ajax({
            method: "POST",
            dataType: "JSON",
            url: "<?= base_url('admin/data_kontrak/simpan_capex_dan_detail_capex/') ?>" + id,
            // traditional: true,
            data: {
                'nama_uraian_kedua[]': nama_uraian_kedua,
                'nilai_detail_kedua[]': nilai_detail_kedua,
                'nilai_capex_sum': nilai_capex_sum,
                // other data
            },
            beforeSend: function() {
                $('#simpan_button_data_lvl_4_2').addClass('disabled');
                $('#reset_button_data_lvl_4_2').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    $('#reset_button_data_lvl_4_2').removeClass('disabled');
                    $('#simpan_button_data_lvl_4_2').removeClass('disabled');
                    // modal_level_4_2.modal('hide')
                    message('success', 'Nilai Berhasil Di Update!', 'Berhasil')
                    location.reload()
                }
            }
        })
    }
</script>

<!-- DETAIL CAPEX -->
<script>
    $(document).ready(function() { // Ketika halaman sudah diload dan siap
        var manipulasi_nilai_capex = $('[name="manipulasi_nilai_capex"]').val();
        var i = 1;
        var t = 0;
        var z = [1, 2, 3, 4, 5, 6, 7, 8];
        $('#add_detail_capex' + z++ + '').click(function() {
            i++;
            t++;
            $('#simpan_detail_capex' + t + '').css('display', 'block');
            $('.dynamic_field_detail_capex').append(' <tr id = "row' + i + '" > ' +
                '<td class="tg-0lax"></td>' +
                '<td class="tg-0lax" colspan="5"><input type="text" name="nama_uraian_1_capex[]" class="form-control"></td>' +
                '<td class="tg-0lax"><input type="text" name="nilai_capex_detail_1[]" id="nilai_detail_capex' + i + '" class="form-control nilai_capex_detail_1"><input type="text" disabled class="float-right form-control form-control-sm mt-1 tanpa-rupiah_detail_capex" style="width: 200px;"></td>' +
                '<td class="tg-0lax"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn-sm btn_remove_detail_capex"><i class="fas fa-trash-alt"></i></button></td>' +
                '</tr>');
            var total_amount = function() {

                var sum = 0;
                $('.nilai_capex_detail_1').each(function() {
                    var num = $(this).val().replace(',', '');
                    if (num != 0) {
                        sum += parseFloat(num)
                    } else {
                        sum += parseFloat(num)
                    }
                });
                $('#total_amount').val(parseFloat(sum.toFixed()) + parseFloat(manipulasi_nilai_capex));
            }
            $(".nilai_capex_detail_1").keyup(function() {

                var tanpa_rupiah = document.getElementsByClassName('tanpa-rupiah_detail_capex');
                tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
                /* Fungsi */

                total_amount();

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

        });
        $(document).on('click', '.btn_remove_detail_capex', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            $('.simpan_detail_capex').css('display', 'none');
        });


    });
</script>

<script>
    function cari_no_kontrak() {
        var id_kontrak = $('#id_kontrak').val();
        $.ajax({
            method: "POST",
            url: '<?= base_url('admin/tagihan_kontrak/by_id_kontrak_get_detail_capex/'); ?>' + id_kontrak,
            dataType: "JSON",
            success: function(response) {
                var html = '';
                var i;
                var start = response.start;
                for (i = 0; i < response['row_kontrak'].length; ++i) {
                    html +=
                        '<tr>' +
                        '<td class="tg-0lax" colspan="6">Capex</td>' +
                        '<td class="tg-0lax">Rp.50000</td>' +
                        '<td class="tg-0lax"><a class="btn btn-sm btn-primary" href=""><i class="fas fa fa-plus"></i></a></td>' +
                        '</tr>';
                }
                $('.result_datanya').html(html);
            }
        });
    }
</script>

<!-- level 1 -->
<script>
    var modal_nilai_kontrak_awal_level_1 = $('#modal_nilai_kontrak_awal_level_1')
    var form_simpan_nilai_kontrak_awal_level_1 = $('#form_simpan_nilai_kontrak_awal_level_1')


    function modal_level_1(id, type) {


        if (type == 'update_nilai_level_1') {

        }
        if (type == 'edit_level_1') {

        }

        if (type == 'tambah_level_2') {

        }
        // INI Addendum action
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_kontrak/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'update_nilai_level_1') {
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_1').css('display', 'block')
                    $('#button_update_nilai_level_1').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_input_nama_kontrak_level_1').css('display', 'none')
                    $('#button_edit_level_1').css('display', 'none')
                    modal_nilai_kontrak_awal_level_1.modal('show');
                    $('[name="id_kontrak"]').val(response['row_kontrak'].id_kontrak);
                    $('[name="nilai_kontrak_awal"]').val(response['row_kontrak'].nilai_kontrak_awal);
                    $('#title_modal_level_1').text('Update Nilai Kontrak')
                }
                if (type == 'edit_level_1') {
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_1').css('display', 'none')
                    $('#button_update_nilai_level_1').css('display', 'none')
                    // kondisi butoon dan form
                    $('#form_input_nama_kontrak_level_1').css('display', 'block')
                    $('#button_edit_level_1').css('display', 'block')
                    modal_nilai_kontrak_awal_level_1.modal('show');
                    $('[name="id_kontrak"]').val(response['row_kontrak'].id_kontrak);
                    $('[name="nama_kontrak"]').val(response['row_kontrak'].nama_kontrak);
                    $('#title_modal_level_1').text('Update Nama Kontrak')
                }



                if (type == 'tambah_level_2') {
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_1').css('display', 'none')
                    $('#button_update_nilai_level_1').css('display', 'none')
                    // kondisi butoon dan form
                    $('#form_input_nama_uraian_detail').css('display', 'block')
                    $('#button_tambah_level_2').css('display', 'block')
                    modal_nilai_kontrak_awal_level_1.modal('show');
                    $('[name="id_kontrak"]').val(response['row_kontrak'].id_kontrak);
                    $('[name="nama_kontrak"]').val(response['row_kontrak'].nama_kontrak);
                    $('#title_modal_level_1').text('Update Nama Kontrak')
                }
            }
        })
    }



    function Simpan_level_1(id, type) {
        if (type == 'update_nilai_level_1') {
            saveData = 'update_nilai_level_1';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_kontrak_awal_level_1/') ?>" + id;
        }
        if (type == 'edit_level_1') {
            saveData = 'edit_level_1';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_kontrak_level_1/') ?>" + id;
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_nilai_kontrak_awal_level_1.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_1') {
                        $('.button_simpan').removeClass('disabled');
                        modal_nilai_kontrak_awal_level_1.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_1') {
                        $('.button_simpan').removeClass('disabled');
                        modal_nilai_kontrak_awal_level_1.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }


    $("#nilai_kontrak_awal").keyup(function() {
        var harga = $("#nilai_kontrak_awal").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_kontrak_awal_level_1');
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

<!-- BATAS CAPEX  -->
<!-- capex -->
<script>
    // ini untuk modal global excel 
    var modal_excel_capex_2 = $('#modal_excel_capex_2');
    var form_modal_level_2_capex = $('#form_modal_level_2_capex')
    var form_simpan_level_2_capex = $('#form_simpan_level_2_capex')

    function modal_level_2_capex(id, type, type_add) {
        if (type == 'update_nilai_level_2_capex') {

        }
        if (type == 'tambah_level_2_capex') {

        }
        if (type == 'tambah_level_2_capex_excel') {

        }
        // INI UNTUK YANG ADDENDUM
        if (type == 'update_nilai_level_2_capex_add_1') {

        }
        if (type == 'update_nilai_level_2_capex_add_2') {

        }

        if (type == 'update_nilai_level_2_capex_add_3') {

        }


        if (type == 'update_nilai_level_2_capex_add_4') {

        }

        if (type == 'update_nilai_level_2_capex_add_4') {

        }
        if (type == 'update_nilai_level_2_capex_add_5') {

        }
        if (type == 'update_nilai_level_2_capex_add_6') {

        }
        if (type == 'update_nilai_level_2_capex_add_7') {

        }
        if (type == 'update_nilai_level_2_capex_add_8') {

        }
        if (type == 'update_nilai_level_2_capex_add_9') {

        }
        if (type == 'update_nilai_level_2_capex_add_10') {

        }

        if (type == 'update_nilai_level_2_capex_add_11') {

        }
        if (type == 'update_nilai_level_2_capex_add_12') {

        }
        if (type == 'update_nilai_level_2_capex_add_13') {

        }
        if (type == 'update_nilai_level_2_capex_add_14') {

        }
        if (type == 'update_nilai_level_2_capex_add_15') {

        }
        if (type == 'update_nilai_level_2_capex_add_16') {

        }
        if (type == 'update_nilai_level_2_capex_add_17') {

        }
        if (type == 'update_nilai_level_2_capex_add_18') {

        }
        if (type == 'update_nilai_level_2_capex_add_19') {

        }
        if (type == 'update_nilai_level_2_capex_add_20') {

        }
        if (type == 'update_nilai_level_2_capex_add_21') {

        }
        if (type == 'update_nilai_level_2_capex_add_22') {

        }
        if (type == 'update_nilai_level_2_capex_add_23') {

        }
        if (type == 'update_nilai_level_2_capex_add_24') {

        }
        if (type == 'update_nilai_level_2_capex_add_25') {

        }
        if (type == 'update_nilai_level_2_capex_add_26') {

        }
        if (type == 'update_nilai_level_2_capex_add_27') {

        }
        if (type == 'update_nilai_level_2_capex_add_28') {

        }
        if (type == 'update_nilai_level_2_capex_add_29') {

        }
        if (type == 'update_nilai_level_2_capex_add_30') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_capex/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_2_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_2.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex'].id_capex);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 1')
                }
                if (type == 'update_nilai_level_2_capex') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_2_capex') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'none')
                    $('#button_update_nilai_level_2_capex').css('display', 'none')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'block')
                    $('#button_tambah_level_2_capex').css('display', 'block')

                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('#title_modal_level_2_capex').text('Tambah Uraian')
                }

                // INI UNTUK YANG ADD 1
                if (type == 'update_nilai_level_2_capex_add_1') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_I);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 2
                if (type == 'update_nilai_level_2_capex_add_2') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_II);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }
                // INI UNTUK YANG ADD 3
                if (type == 'update_nilai_level_2_capex_add_3') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_III);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 4
                if (type == 'update_nilai_level_2_capex_add_4') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_IV);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 5
                if (type == 'update_nilai_level_2_capex_add_5') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_V);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 6
                if (type == 'update_nilai_level_2_capex_add_6') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_VI);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 7
                if (type == 'update_nilai_level_2_capex_add_7') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_VII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 8
                if (type == 'update_nilai_level_2_capex_add_8') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_VIII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 9
                if (type == 'update_nilai_level_2_capex_add_9') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_IX);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 10
                if (type == 'update_nilai_level_2_capex_add_10') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_X);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 11
                if (type == 'update_nilai_level_2_capex_add_11') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XI);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 12
                if (type == 'update_nilai_level_2_capex_add_12') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 13
                if (type == 'update_nilai_level_2_capex_add_13') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XIII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 14
                if (type == 'update_nilai_level_2_capex_add_14') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XIV);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 15
                if (type == 'update_nilai_level_2_capex_add_15') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XV);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 16
                if (type == 'update_nilai_level_2_capex_add_16') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XVI);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 17
                if (type == 'update_nilai_level_2_capex_add_17') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XVII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 18
                if (type == 'update_nilai_level_2_capex_add_18') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XVIII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 19
                if (type == 'update_nilai_level_2_capex_add_19') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XIX);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 20
                if (type == 'update_nilai_level_2_capex_add_20') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XX);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 21
                if (type == 'update_nilai_level_2_capex_add_21') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXI);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 22
                if (type == 'update_nilai_level_2_capex_add_22') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 23
                if (type == 'update_nilai_level_2_capex_add_23') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXIII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 24
                if (type == 'update_nilai_level_2_capex_add_24') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXIV);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 25
                if (type == 'update_nilai_level_2_capex_add_25') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXV);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 26
                if (type == 'update_nilai_level_2_capex_add_26') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXVI);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 27
                if (type == 'update_nilai_level_2_capex_add_27') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXVII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 28
                if (type == 'update_nilai_level_2_capex_add_28') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXVIII);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 29
                if (type == 'update_nilai_level_2_capex_add_29') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXIX);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 30
                if (type == 'update_nilai_level_2_capex_add_30') {
                    form_modal_level_2_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_capex').css('display', 'block')
                    $('#button_update_nilai_level_2_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_capex').css('display', 'none')
                    $('#button_tambah_level_2_capex').css('display', 'none')
                    $('[name="id_capex"]').val(response['row_capex'].id_capex);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex"]').val(response['row_capex'].nilai_capex_add_XXX);
                    $('#title_modal_level_2_capex').text('Update Nilai Kontrak')
                }

            }
        })
    }



    function Simpan_level_2_capex(id, type) {
        if (type == 'update_nilai_level_2_capex') {
            saveData = 'update_nilai_level_2_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_2_capex/') ?>" + id;
        }

        if (type == 'tambah_level_2_capex') {
            saveData = 'tambah_level_2_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_2_capex/') ?>" + id;
        }

        // INI UTNUK YANG ADDENDUM 1
        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_2_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_2_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_2_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_2_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_2_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }


    $("#nilai_capex").keyup(function() {
        var harga = $("#nilai_capex").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_level_2_capex');
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
<!-- BATAS CAPEX -->
<?php $this->load->view('management_kontrak_batas/level_capex'); ?>
<!-- BATAS OPEX  -->
<?php $this->load->view('management_kontrak_batas/level_opex'); ?>
<!-- BATAS bua  -->
<?php $this->load->view('management_kontrak_batas/level_bua'); ?>
<!-- BATAS sdm  -->
<?php $this->load->view('management_kontrak_batas/level_sdm'); ?>
<!-- BUAT ADENDUM -->
<script>
    var tambah_addendum = $('#tambah_addendum')
    var form_buat_adendum = $('#form_buat_adendum')

    function angga() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('admin/data_kontrak/add_addendum') ?>",
            data: form_buat_adendum.serialize(),
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
    var modal_dok_penunjang = $('#modal_dok_penunjang');
    var form_dok_penunjang = $('#form_dok_penunjang');
    var tabledata_dok_penunjang = $('#tabledata_dok_penunjang');

    function ModalPenunjang(add) {
        modal_dok_penunjang.modal('show');
        $('[name="sts_dokumen"]').val(add);
        $('[name="id_kontrak"]').val();
        var id_kontrak = $('[name="id_kontrak"]').val();
        var sts_dokumen = $('[name="sts_dokumen"]').val(add);
        tabledata_dok_penunjang.DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "bDestroy": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('admin/data_kontrak/data_get_dok_penunjang/') ?>" + id_kontrak,
                "type": "POST",
                data: {
                    add: add,
                }
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": true
            }],
            "oLanguage": {
                "sSearch": "Pencarian : ",
                "sEmptyTable": "Data Tidak Tersedia",
                "sLoadingRecords": "Silahkan Tunggu - loading...",
                "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                "sZeroRecords": "Moho Maaf Tidak Ada Data Paket Yang Di Cari",
                "sProcessing": "Memuat Data...."
            }
        });
    }

    form_dok_penunjang.on('submit', function(e) {
        e.preventDefault();
        if ($('.file_dokumen_penunjang').val() == '') {
            $('#error_file').show();
            setTimeout(function() {
                $('#error_file').hide();
            }, 4000);
        } else {
            $.ajax({
                url: "<?= base_url('admin/data_kontrak/add_dok_penunjang') ?>",
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


    function progress_bar_process_dok_penunjang(percentage, timer) {
        $('.progress-bar').css('width', percentage + '%');
        if (percentage > 100) {
            clearInterval(timer);
            $('#form_dok_penunjang')[0].reset();
            $('#process').css('display', 'none');
            $('#sedang_dikirim').show();
            $('.progress-bar').css('width', percentage + '%');
            $('#upload').attr('disabled', false);
            message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
            location.reload()
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
</script>

<script>
    $(document).ready(function() {
        $('#table_kontrak').DataTable({
            "ordering": false
        });

    });
</script>