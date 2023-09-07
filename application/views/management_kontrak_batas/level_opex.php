<script>
    // ini untuk modal global excel 
    var modal_excel_opex_2 = $('#modal_excel_opex_2');
    var form_modal_level_2_opex = $('#form_modal_level_2_opex')
    var form_simpan_level_2_opex = $('#form_simpan_level_2_opex')

    function modal_level_2_opex(id, type, type_add) {
        if (type == 'update_nilai_level_2_opex') {

        }
        if (type == 'tambah_level_2_opex') {

        }
        if (type == 'tambah_level_2_opex_excel') {

        }
        // INI UNTUK YANG ADDENDUM
        if (type == 'update_nilai_level_2_opex_add_1') {

        }
        if (type == 'update_nilai_level_2_opex_add_2') {

        }

        if (type == 'update_nilai_level_2_opex_add_3') {

        }


        if (type == 'update_nilai_level_2_opex_add_4') {

        }

        if (type == 'update_nilai_level_2_opex_add_4') {

        }
        if (type == 'update_nilai_level_2_opex_add_5') {

        }
        if (type == 'update_nilai_level_2_opex_add_6') {

        }
        if (type == 'update_nilai_level_2_opex_add_7') {

        }
        if (type == 'update_nilai_level_2_opex_add_8') {

        }
        if (type == 'update_nilai_level_2_opex_add_9') {

        }
        if (type == 'update_nilai_level_2_opex_add_10') {

        }

        if (type == 'update_nilai_level_2_opex_add_11') {

        }
        if (type == 'update_nilai_level_2_opex_add_12') {

        }
        if (type == 'update_nilai_level_2_opex_add_13') {

        }
        if (type == 'update_nilai_level_2_opex_add_14') {

        }
        if (type == 'update_nilai_level_2_opex_add_15') {

        }
        if (type == 'update_nilai_level_2_opex_add_16') {

        }
        if (type == 'update_nilai_level_2_opex_add_17') {

        }
        if (type == 'update_nilai_level_2_opex_add_18') {

        }
        if (type == 'update_nilai_level_2_opex_add_19') {

        }
        if (type == 'update_nilai_level_2_opex_add_20') {

        }
        if (type == 'update_nilai_level_2_opex_add_21') {

        }
        if (type == 'update_nilai_level_2_opex_add_22') {

        }
        if (type == 'update_nilai_level_2_opex_add_23') {

        }
        if (type == 'update_nilai_level_2_opex_add_24') {

        }
        if (type == 'update_nilai_level_2_opex_add_25') {

        }
        if (type == 'update_nilai_level_2_opex_add_26') {

        }
        if (type == 'update_nilai_level_2_opex_add_27') {

        }
        if (type == 'update_nilai_level_2_opex_add_28') {

        }
        if (type == 'update_nilai_level_2_opex_add_29') {

        }
        if (type == 'update_nilai_level_2_opex_add_30') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_opex/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_2_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_2.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex'].id_opex);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 1')
                }
                if (type == 'update_nilai_level_2_opex') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_2_opex') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'none')
                    $('#button_update_nilai_level_2_opex').css('display', 'none')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'block')
                    $('#button_tambah_level_2_opex').css('display', 'block')

                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('#title_modal_level_2_opex').text('Tambah Uraian')
                }

                // INI UNTUK YANG ADD 1
                if (type == 'update_nilai_level_2_opex_add_1') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_I);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 2
                if (type == 'update_nilai_level_2_opex_add_2') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_II);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }
                // INI UNTUK YANG ADD 3
                if (type == 'update_nilai_level_2_opex_add_3') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_III);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 4
                if (type == 'update_nilai_level_2_opex_add_4') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_IV);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 5
                if (type == 'update_nilai_level_2_opex_add_5') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_V);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 6
                if (type == 'update_nilai_level_2_opex_add_6') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_VI);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 7
                if (type == 'update_nilai_level_2_opex_add_7') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_VII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 8
                if (type == 'update_nilai_level_2_opex_add_8') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_VIII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 9
                if (type == 'update_nilai_level_2_opex_add_9') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_IX);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 10
                if (type == 'update_nilai_level_2_opex_add_10') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_X);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 11
                if (type == 'update_nilai_level_2_opex_add_11') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XI);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 12
                if (type == 'update_nilai_level_2_opex_add_12') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 13
                if (type == 'update_nilai_level_2_opex_add_13') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XIII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 14
                if (type == 'update_nilai_level_2_opex_add_14') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XIV);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 15
                if (type == 'update_nilai_level_2_opex_add_15') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XV);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 16
                if (type == 'update_nilai_level_2_opex_add_16') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XVI);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 17
                if (type == 'update_nilai_level_2_opex_add_17') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XVII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 18
                if (type == 'update_nilai_level_2_opex_add_18') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XVIII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 19
                if (type == 'update_nilai_level_2_opex_add_19') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XIX);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 20
                if (type == 'update_nilai_level_2_opex_add_20') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XX);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 21
                if (type == 'update_nilai_level_2_opex_add_21') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXI);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 22
                if (type == 'update_nilai_level_2_opex_add_22') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 23
                if (type == 'update_nilai_level_2_opex_add_23') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXIII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 24
                if (type == 'update_nilai_level_2_opex_add_24') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXIV);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 25
                if (type == 'update_nilai_level_2_opex_add_25') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXV);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 26
                if (type == 'update_nilai_level_2_opex_add_26') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXVI);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 27
                if (type == 'update_nilai_level_2_opex_add_27') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXVII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }


                // INI UNTUK YANG ADD 28
                if (type == 'update_nilai_level_2_opex_add_28') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXVIII);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 29
                if (type == 'update_nilai_level_2_opex_add_29') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXIX);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

                // INI UNTUK YANG ADD 30
                if (type == 'update_nilai_level_2_opex_add_30') {
                    form_modal_level_2_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_2_opex').css('display', 'block')
                    $('#button_update_nilai_level_2_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_2_opex').css('display', 'none')
                    $('#button_tambah_level_2_opex').css('display', 'none')
                    $('[name="id_opex"]').val(response['row_opex'].id_opex);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex"]').val(response['row_opex'].nilai_opex_add_XXX);
                    $('#title_modal_level_2_opex').text('Update Nilai Kontrak')
                }

            }
        })
    }



    function Simpan_level_2_opex(id, type) {
        if (type == 'update_nilai_level_2_opex') {
            saveData = 'update_nilai_level_2_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_2_opex/') ?>" + id;
        }

        if (type == 'tambah_level_2_opex') {
            saveData = 'tambah_level_2_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_2_opex/') ?>" + id;
        }

        // INI UTNUK YANG ADDENDUM 1
        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_2_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_2_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_2_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_2_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_2_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }


    $("#nilai_opex").keyup(function() {
        var harga = $("#nilai_opex").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_level_2_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>
<!-- Level 3 opex -->
<!-- opex -->
<script>
    var form_modal_level_3_opex = $('#form_modal_level_3_opex')
    var form_simpan_level_3_opex = $('#form_simpan_level_3_opex')
    var modal_excel_opex_3 = $('#modal_excel_opex_3');
    var modal_opex_urutan = $('#modal_opex_urutan');

    function modal_level_3_opex(id, type, type_add) {
        if (type == 'update_nilai_level_3_opex') {

        }
        if (type == 'tambah_level_3_opex') {

        }
        if (type == 'edit_level_3_opex') {

        }
        if (type == 'hapus_level_3_opex') {

        }
        if (type == 'urutan_level_3_opex') {

        }

        // INI NUNTUK ADDENDUM
        if (type == 'update_nilai_level_3_opex_add_1') {

        }
        if (type == 'update_nilai_level_3_opex_add_2') {

        }
        if (type == 'update_nilai_level_3_opex_add_3') {

        }
        if (type == 'update_nilai_level_3_opex_add_4') {

        }
        if (type == 'update_nilai_level_3_opex_add_5') {

        }
        if (type == 'update_nilai_level_3_opex_add_6') {

        }
        if (type == 'update_nilai_level_3_opex_add_7') {

        }
        if (type == 'update_nilai_level_3_opex_add_8') {

        }
        if (type == 'update_nilai_level_3_opex_add_9') {

        }
        if (type == 'update_nilai_level_3_opex_add_10') {

        }
        if (type == 'update_nilai_level_3_opex_add_11') {

        }
        if (type == 'update_nilai_level_3_opex_add_12') {

        }
        if (type == 'update_nilai_level_3_opex_add_13') {

        }
        if (type == 'update_nilai_level_3_opex_add_14') {

        }
        if (type == 'update_nilai_level_3_opex_add_15') {

        }
        if (type == 'update_nilai_level_3_opex_add_16') {

        }
        if (type == 'update_nilai_level_3_opex_add_17') {

        }
        if (type == 'update_nilai_level_3_opex_add_18') {

        }
        if (type == 'update_nilai_level_3_opex_add_19') {

        }
        if (type == 'update_nilai_level_3_opex_add_20') {

        }
        if (type == 'update_nilai_level_3_opex_add_21') {

        }
        if (type == 'update_nilai_level_3_opex_add_22') {

        }
        if (type == 'update_nilai_level_3_opex_add_23') {

        }
        if (type == 'update_nilai_level_3_opex_add_24') {

        }
        if (type == 'update_nilai_level_3_opex_add_25') {

        }
        if (type == 'update_nilai_level_3_opex_add_26') {

        }
        if (type == 'update_nilai_level_3_opex_add_27') {

        }
        if (type == 'update_nilai_level_3_opex_add_28') {

        }
        if (type == 'update_nilai_level_3_opex_add_29') {

        }
        if (type == 'update_nilai_level_3_opex_add_30') {

        }

        if (type == 'tambah_level_3_opex_excel') {}

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_opex_detail/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_3_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_3.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail'].id_opex_detail);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 2')
                }
                if (type == 'update_nilai_level_3_opex') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_3_opex') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'none')
                    $('#button_update_nilai_level_3_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_3_opex').css('display', 'block')
                    $('#button_tambah_level_3_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('#title_modal_level_3_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_3_opex') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'none')
                    $('#button_update_nilai_level_3_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_3_opex').css('display', 'block')
                    $('#button_edit_level_3_opex').css('display', 'block')

                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="nama_uraian"]').val(response['row_opex_detail'].nama_uraian);
                    $('#title_modal_level_3_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_3_opex') {
                    Question_detail_opex(type_add, response['row_opex_detail'].nama_uraian, response['row_opex_detail'].id_opex_detail, response['row_opex_detail'].id_opex)
                }

                if (type == 'urutan_level_3_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_opex'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_opex'][i].id_opex_detail + ',1.1' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_opex'][i].no_urut + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_opex'][i].nama_uraian + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }

                // INI UTK ADDENDUM 1
                if (type == 'update_nilai_level_3_opex_add_1') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_I);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 2
                if (type == 'update_nilai_level_3_opex_add_2') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_II);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 3
                if (type == 'update_nilai_level_3_opex_add_3') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_III);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 4
                if (type == 'update_nilai_level_3_opex_add_4') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_IV);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_3_opex_add_5') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_V);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_3_opex_add_6') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_VI);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_3_opex_add_7') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_VII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_3_opex_add_8') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_VIII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_3_opex_add_9') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_IX);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_3_opex_add_10') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_X);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_3_opex_add_11') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XI);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_3_opex_add_12') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_3_opex_add_13') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XIII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_3_opex_add_14') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XIV);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_3_opex_add_15') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XV);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_3_opex_add_16') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XVI);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_3_opex_add_17') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XVII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_3_opex_add_18') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XVIII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_3_opex_add_19') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XIX);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_3_opex_add_20') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XX);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_3_opex_add_21') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXI);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_3_opex_add_22') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_3_opex_add_23') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXIII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_3_opex_add_24') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXIV);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_3_opex_add_25') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXV);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_3_opex_add_26') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXVI);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_3_opex_add_27') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXVII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_3_opex_add_28') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXVIII);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_3_opex_add_29') {
                    form_modal_level_3_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXIX);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_3_opex_add_30') {
                    form_modal_level_3_opex.modal('show');
                    $('#form_input_nilai_level_3_opex').css('display', 'block')
                    $('#button_update_nilai_level_3_opex').css('display', 'block')
                    $('#form_tambah_level_3_opex').css('display', 'none')
                    $('#button_tambah_level_3_opex').css('display', 'none')
                    $('#button_edit_level_3_opex').css('display', 'none')
                    $('[name="id_opex_detail"]').val(response['row_opex_detail'].id_opex_detail);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_detail_opex"]').val(response['row_opex_detail'].nilai_detail_opex_add_XXX);
                    $('#title_modal_level_3_opex').text('Update Nilai Kontrak')
                }

            }
        })
    }

    function Simpan_level_3_opex(type) {
        if (type == 'update_nilai_level_3_opex') {
            saveData = 'update_nilai_level_3_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_3_opex') ?>";
        }
        if (type == 'tambah_level_3_opex') {
            saveData = 'tambah_level_3_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_3_opex') ?>";
        }
        if (type == 'edit_level_3_opex') {
            saveData = 'edit_level_3_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_3_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_3_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_3_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_3_opex.modal('hide')
                        message('success', 'Data Berhasil Di Update!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_3_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_3_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_3_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_3_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_detail_opex(type_add, ket, id, id_opex) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_3_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_opex: id_opex,
                        type_add: type_add
                    },
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


    $("#nilai_detail_opex").keyup(function() {
        var harga = $("#nilai_detail_opex").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_detail_opex_level_3_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- level 4 opex -->
<script>
    var form_modal_level_4_opex = $('#form_modal_level_4_opex')
    var form_simpan_level_4_opex = $('#form_simpan_level_4_opex')
    var modal_excel_opex_4 = $('#modal_excel_opex_4');

    function modal_level_4_opex(id, type, type_add) {

        if (type == 'update_nilai_level_4_opex') {

        }
        if (type == 'tambah_level_4_opex') {

        }
        if (type == 'edit_level_4_opex') {

        }
        if (type == 'hapus_level_4_opex') {

        }

        if (type == 'urutan_level_4_opex') {

        }

        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_4_opex_add_1') {

        }
        if (type == 'update_nilai_level_4_opex_add_1') {

        }
        if (type == 'update_nilai_level_4_opex_add_2') {

        }
        if (type == 'update_nilai_level_4_opex_add_3') {

        }
        if (type == 'update_nilai_level_4_opex_add_4') {

        }
        if (type == 'update_nilai_level_4_opex_add_5') {

        }
        if (type == 'update_nilai_level_4_opex_add_6') {

        }
        if (type == 'update_nilai_level_4_opex_add_7') {

        }
        if (type == 'update_nilai_level_4_opex_add_8') {

        }
        if (type == 'update_nilai_level_4_opex_add_9') {

        }
        if (type == 'update_nilai_level_4_opex_add_10') {

        }
        if (type == 'update_nilai_level_4_opex_add_11') {

        }
        if (type == 'update_nilai_level_4_opex_add_12') {

        }
        if (type == 'update_nilai_level_4_opex_add_13') {

        }
        if (type == 'update_nilai_level_4_opex_add_14') {

        }
        if (type == 'update_nilai_level_4_opex_add_15') {

        }
        if (type == 'update_nilai_level_4_opex_add_16') {

        }
        if (type == 'update_nilai_level_4_opex_add_17') {

        }
        if (type == 'update_nilai_level_4_opex_add_18') {

        }
        if (type == 'update_nilai_level_4_opex_add_19') {

        }
        if (type == 'update_nilai_level_4_opex_add_20') {

        }
        if (type == 'update_nilai_level_4_opex_add_21') {

        }
        if (type == 'update_nilai_level_4_opex_add_22') {

        }
        if (type == 'update_nilai_level_4_opex_add_23') {

        }
        if (type == 'update_nilai_level_4_opex_add_24') {

        }
        if (type == 'update_nilai_level_4_opex_add_25') {

        }
        if (type == 'update_nilai_level_4_opex_add_26') {

        }
        if (type == 'update_nilai_level_4_opex_add_27') {

        }
        if (type == 'update_nilai_level_4_opex_add_28') {

        }
        if (type == 'update_nilai_level_4_opex_add_29') {

        }
        if (type == 'update_nilai_level_4_opex_add_30') {

        }
        if (type == 'tambah_level_4_opex_excel') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_1/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_4_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_4.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 3')
                }
                if (type == 'update_nilai_level_4_opex') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_4_opex') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'none')
                    $('#button_update_nilai_level_4_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_4_opex').css('display', 'block')
                    $('#button_tambah_level_4_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('#title_modal_level_4_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_4_opex') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'none')
                    $('#button_update_nilai_level_4_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_4_opex').css('display', 'block')
                    $('#button_edit_level_4_opex').css('display', 'block')

                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_1'].nama_uraian_1_opex);
                    $('#title_modal_level_4_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_4_opex') {
                    Question_level_4_opex(type_add, response['row_opex_detail_1'].nama_uraian_1_opex, response['row_opex_detail_1'].id_detail_opex_1, response['row_opex_detail_1'].id_opex_detail)
                }

                if (type == 'urutan_level_4_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_1'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_1'][i].id_detail_opex_1 + ',1.2' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_1'][i].no_urut_1_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_1'][i].nama_uraian_1_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                if (type == 'update_nilai_level_4_opex_add_1') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_I);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_4_opex_add_2') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_II);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_4_opex_add_3') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_III);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_4_opex_add_4') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_IV);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_4_opex_add_5') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_V);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_4_opex_add_6') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_VI);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_4_opex_add_7') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_VII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_4_opex_add_8') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_VIII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_4_opex_add_9') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_IX);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_4_opex_add_10') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_X);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_4_opex_add_11') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XI);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_4_opex_add_12') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_4_opex_add_13') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XIII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_4_opex_add_14') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XIV);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_4_opex_add_15') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XV);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_4_opex_add_16') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XVI);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_4_opex_add_17') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XVII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_4_opex_add_18') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XVIII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_4_opex_add_19') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XIX);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_4_opex_add_20') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XX);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_4_opex_add_21') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXI);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_4_opex_add_22') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_4_opex_add_23') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXIII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_4_opex_add_24') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXIV);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_4_opex_add_25') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXV);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_4_opex_add_26') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXVI);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_4_opex_add_27') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXVII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_4_opex_add_28') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXVIII);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_4_opex_add_29') {
                    form_modal_level_4_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXIX);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_4_opex_add_30') {
                    form_modal_level_4_opex.modal('show');
                    $('#form_input_nilai_level_4_opex').css('display', 'block')
                    $('#button_update_nilai_level_4_opex').css('display', 'block')
                    $('#form_tambah_level_4_opex').css('display', 'none')
                    $('#button_tambah_level_4_opex').css('display', 'none')
                    $('#button_edit_level_4_opex').css('display', 'none')
                    $('[name="id_detail_opex_1"]').val(response['row_opex_detail_1'].id_detail_opex_1);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_1"]').val(response['row_opex_detail_1'].nilai_opex_detail_1_add_XXX);
                    $('#title_modal_level_4_opex').text('Update Nilai Kontrak')
                }
            }
        })
    }




    function Simpan_level_4_opex(type) {
        if (type == 'update_nilai_level_4_opex') {
            saveData = 'update_nilai_level_4_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_4_opex') ?>";
        }
        if (type == 'tambah_level_4_opex') {
            saveData = 'tambah_level_4_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_4_opex') ?>";
        }
        if (type == 'edit_level_4_opex') {
            saveData = 'edit_level_4_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_4_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_4_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_4_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_4_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_4_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_4_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_4_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_4_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_4_opex(type_add, ket, id, id_opex_detail) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_4_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_opex_detail: id_opex_detail,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_1").keyup(function() {
        var harga = $("#nilai_opex_detail_1").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_1_level_4_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- level 5 opex -->
<script>
    var form_modal_level_5_opex = $('#form_modal_level_5_opex')
    var form_simpan_level_5_opex = $('#form_simpan_level_5_opex')
    var modal_excel_opex_5 = $('#modal_excel_opex_5');

    function modal_level_5_opex(id, type, type_add) {

        if (type == 'update_nilai_level_5_opex') {

        }
        if (type == 'tambah_level_5_opex') {

        }
        if (type == 'edit_level_5_opex') {

        }
        if (type == 'hapus_level_5_opex') {

        }
        if (type == 'urutan_level_5_opex') {

        }

        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_5_opex_add_1') {

        }
        if (type == 'update_nilai_level_5_opex_add_1') {

        }
        if (type == 'update_nilai_level_5_opex_add_2') {

        }
        if (type == 'update_nilai_level_5_opex_add_3') {

        }
        if (type == 'update_nilai_level_5_opex_add_4') {

        }
        if (type == 'update_nilai_level_5_opex_add_5') {

        }
        if (type == 'update_nilai_level_5_opex_add_6') {

        }
        if (type == 'update_nilai_level_5_opex_add_7') {

        }
        if (type == 'update_nilai_level_5_opex_add_8') {

        }
        if (type == 'update_nilai_level_5_opex_add_9') {

        }
        if (type == 'update_nilai_level_5_opex_add_10') {

        }
        if (type == 'update_nilai_level_5_opex_add_11') {

        }
        if (type == 'update_nilai_level_5_opex_add_12') {

        }
        if (type == 'update_nilai_level_5_opex_add_13') {

        }
        if (type == 'update_nilai_level_5_opex_add_14') {

        }
        if (type == 'update_nilai_level_5_opex_add_15') {

        }
        if (type == 'update_nilai_level_5_opex_add_16') {

        }
        if (type == 'update_nilai_level_5_opex_add_17') {

        }
        if (type == 'update_nilai_level_5_opex_add_18') {

        }
        if (type == 'update_nilai_level_5_opex_add_19') {

        }
        if (type == 'update_nilai_level_5_opex_add_20') {

        }
        if (type == 'update_nilai_level_5_opex_add_21') {

        }
        if (type == 'update_nilai_level_5_opex_add_22') {

        }
        if (type == 'update_nilai_level_5_opex_add_23') {

        }
        if (type == 'update_nilai_level_5_opex_add_24') {

        }
        if (type == 'update_nilai_level_5_opex_add_25') {

        }
        if (type == 'update_nilai_level_5_opex_add_26') {

        }
        if (type == 'update_nilai_level_5_opex_add_27') {

        }
        if (type == 'update_nilai_level_5_opex_add_28') {

        }
        if (type == 'update_nilai_level_5_opex_add_29') {

        }
        if (type == 'update_nilai_level_5_opex_add_30') {

        }
        if (type == 'tambah_level_5_opex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_2/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_5_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_5.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 5')
                }
                if (type == 'update_nilai_level_5_opex') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_5_opex') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'none')
                    $('#button_update_nilai_level_5_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_5_opex').css('display', 'block')
                    $('#button_tambah_level_5_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('#title_modal_level_5_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_5_opex') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'none')
                    $('#button_update_nilai_level_5_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_5_opex').css('display', 'block')
                    $('#button_edit_level_5_opex').css('display', 'block')

                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_2'].nama_uraian_2_opex);
                    $('#title_modal_level_5_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_5_opex') {
                    Question_level_5_opex(type_add, response['row_opex_detail_2'].nama_uraian_2_opex, response['row_opex_detail_2'].id_detail_opex_2, response['row_opex_detail_2'].id_detail_opex_1)
                }
                // _2
                if (type == 'urutan_level_5_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_2'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_2'][i].id_detail_opex_2 + ',1.3' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_2'][i].no_urut_2_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_2'][i].nama_uraian_2_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_5
                // id_detail_opex_2
                // row_opex_detail_2
                // nilai_opex_detail_2
                if (type == 'update_nilai_level_5_opex_add_1') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_I);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_5_opex_add_2') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_II);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_5_opex_add_3') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_III);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_5_opex_add_4') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_IV);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_5_opex_add_5') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_V);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_5_opex_add_6') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_VI);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_5_opex_add_7') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_VII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_5_opex_add_8') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_VIII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_5_opex_add_9') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_IX);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_5_opex_add_10') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_X);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_5_opex_add_11') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XI);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_5_opex_add_12') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_5_opex_add_13') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XIII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_5_opex_add_14') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XIV);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_5_opex_add_15') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XV);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_5_opex_add_16') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XVI);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_5_opex_add_17') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XVII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_5_opex_add_18') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XVIII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_5_opex_add_19') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XIX);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_5_opex_add_20') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XX);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_5_opex_add_21') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXI);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_5_opex_add_22') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_5_opex_add_23') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXIII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_5_opex_add_24') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXIV);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_5_opex_add_25') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXV);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_5_opex_add_26') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXVI);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_5_opex_add_27') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXVII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_5_opex_add_28') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXVIII);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_5_opex_add_29') {
                    form_modal_level_5_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXIX);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_5_opex_add_30') {
                    form_modal_level_5_opex.modal('show');
                    $('#form_input_nilai_level_5_opex').css('display', 'block')
                    $('#button_update_nilai_level_5_opex').css('display', 'block')
                    $('#form_tambah_level_5_opex').css('display', 'none')
                    $('#button_tambah_level_5_opex').css('display', 'none')
                    $('#button_edit_level_5_opex').css('display', 'none')
                    $('[name="id_detail_opex_2"]').val(response['row_opex_detail_2'].id_detail_opex_2);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_2"]').val(response['row_opex_detail_2'].nilai_opex_detail_2_add_XXX);
                    $('#title_modal_level_5_opex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    // Level 5
    function Simpan_level_5_opex(type) {
        if (type == 'update_nilai_level_5_opex') {
            saveData = 'update_nilai_level_5_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_5_opex') ?>";
        }
        if (type == 'tambah_level_5_opex') {
            saveData = 'tambah_level_5_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_5_opex') ?>";
        }
        if (type == 'edit_level_5_opex') {
            saveData = 'edit_level_5_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_5_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_5_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_5_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_5_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_5_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_5_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_5_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_5_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_5_opex(type_add, ket, id, id_detail_opex_1) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_5_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_1: id_detail_opex_1,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_2").keyup(function() {
        var harga = $("#nilai_opex_detail_2").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_2_level_5_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- level 6 opex -->
<script>
    var form_modal_level_6_opex = $('#form_modal_level_6_opex')
    var form_simpan_level_6_opex = $('#form_simpan_level_6_opex')
    var modal_excel_opex_6 = $('#modal_excel_opex_6');

    function modal_level_6_opex(id, type, type_add) {

        if (type == 'update_nilai_level_6_opex') {

        }
        if (type == 'tambah_level_6_opex') {

        }
        if (type == 'edit_level_6_opex') {

        }
        if (type == 'hapus_level_6_opex') {

        }
        if (type == 'urutan_level_6_opex') {

        }


        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_6_opex_add_1') {

        }
        if (type == 'update_nilai_level_6_opex_add_1') {

        }
        if (type == 'update_nilai_level_6_opex_add_2') {

        }
        if (type == 'update_nilai_level_6_opex_add_3') {

        }
        if (type == 'update_nilai_level_6_opex_add_4') {

        }
        if (type == 'update_nilai_level_6_opex_add_5') {

        }
        if (type == 'update_nilai_level_6_opex_add_6') {

        }
        if (type == 'update_nilai_level_6_opex_add_7') {

        }
        if (type == 'update_nilai_level_6_opex_add_8') {

        }
        if (type == 'update_nilai_level_6_opex_add_9') {

        }
        if (type == 'update_nilai_level_6_opex_add_10') {

        }
        if (type == 'update_nilai_level_6_opex_add_11') {

        }
        if (type == 'update_nilai_level_6_opex_add_12') {

        }
        if (type == 'update_nilai_level_6_opex_add_13') {

        }
        if (type == 'update_nilai_level_6_opex_add_14') {

        }
        if (type == 'update_nilai_level_6_opex_add_15') {

        }
        if (type == 'update_nilai_level_6_opex_add_16') {

        }
        if (type == 'update_nilai_level_6_opex_add_17') {

        }
        if (type == 'update_nilai_level_6_opex_add_18') {

        }
        if (type == 'update_nilai_level_6_opex_add_19') {

        }
        if (type == 'update_nilai_level_6_opex_add_20') {

        }
        if (type == 'update_nilai_level_6_opex_add_21') {

        }
        if (type == 'update_nilai_level_6_opex_add_22') {

        }
        if (type == 'update_nilai_level_6_opex_add_23') {

        }
        if (type == 'update_nilai_level_6_opex_add_24') {

        }
        if (type == 'update_nilai_level_6_opex_add_25') {

        }
        if (type == 'update_nilai_level_6_opex_add_26') {

        }
        if (type == 'update_nilai_level_6_opex_add_27') {

        }
        if (type == 'update_nilai_level_6_opex_add_28') {

        }
        if (type == 'update_nilai_level_6_opex_add_29') {

        }
        if (type == 'update_nilai_level_6_opex_add_30') {

        }

        if (type == 'tambah_level_6_opex_excel') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_3/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_6_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_6.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 6')
                }

                if (type == 'update_nilai_level_6_opex') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_6_opex') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'none')
                    $('#button_update_nilai_level_6_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_6_opex').css('display', 'block')
                    $('#button_tambah_level_6_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('#title_modal_level_6_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_6_opex') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'none')
                    $('#button_update_nilai_level_6_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_6_opex').css('display', 'block')
                    $('#button_edit_level_6_opex').css('display', 'block')

                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_3'].nama_uraian_3_opex);
                    $('#title_modal_level_6_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_6_opex') {
                    Question_level_6_opex(type_add, response['row_opex_detail_3'].nama_uraian_3_opex, response['row_opex_detail_3'].id_detail_opex_3, response['row_opex_detail_3'].id_detail_opex_2)
                }
                // _3
                if (type == 'urutan_level_6_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_3'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_3'][i].id_detail_opex_3 + ',1.4' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_3'][i].no_urut_3_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_3'][i].nama_uraian_3_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_6
                // id_detail_opex_3
                // row_opex_detail_3
                // nilai_opex_detail_3
                if (type == 'update_nilai_level_6_opex_add_1') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_I);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_6_opex_add_2') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_II);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_6_opex_add_3') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_III);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_6_opex_add_4') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_IV);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_6_opex_add_5') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_V);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_6_opex_add_6') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_VI);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_6_opex_add_7') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_VII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_6_opex_add_8') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_VIII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_6_opex_add_9') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_IX);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_6_opex_add_10') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_X);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_6_opex_add_11') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XI);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_6_opex_add_12') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_6_opex_add_13') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XIII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_6_opex_add_14') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XIV);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_6_opex_add_15') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XV);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_6_opex_add_16') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XVI);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_6_opex_add_17') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XVII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_6_opex_add_18') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XVIII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_6_opex_add_19') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XIX);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_6_opex_add_20') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XX);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_6_opex_add_21') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXI);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_6_opex_add_22') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_6_opex_add_23') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXIII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_6_opex_add_24') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXIV);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_6_opex_add_25') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXV);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_6_opex_add_26') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXVI);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_6_opex_add_27') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXVII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_6_opex_add_28') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXVIII);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_6_opex_add_29') {
                    form_modal_level_6_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_2'].nilai_opex_detail_3_add_XXIX);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_6_opex_add_30') {
                    form_modal_level_6_opex.modal('show');
                    $('#form_input_nilai_level_6_opex').css('display', 'block')
                    $('#button_update_nilai_level_6_opex').css('display', 'block')
                    $('#form_tambah_level_6_opex').css('display', 'none')
                    $('#button_tambah_level_6_opex').css('display', 'none')
                    $('#button_edit_level_6_opex').css('display', 'none')
                    $('[name="id_detail_opex_3"]').val(response['row_opex_detail_3'].id_detail_opex_3);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_3"]').val(response['row_opex_detail_3'].nilai_opex_detail_3_add_XXX);
                    $('#title_modal_level_6_opex').text('Update Nilai Kontrak')
                }


            }
        })
    }



    function Simpan_level_6_opex(type) {
        if (type == 'update_nilai_level_6_opex') {
            saveData = 'update_nilai_level_6_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_6_opex') ?>";
        }
        if (type == 'tambah_level_6_opex') {
            saveData = 'tambah_level_6_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_6_opex') ?>";
        }
        if (type == 'edit_level_6_opex') {
            saveData = 'edit_level_6_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_6_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_6_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_6_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_6_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_6_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_6_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_6_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_6_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_6_opex(type_add, ket, id, id_detail_opex_2) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_6_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_2: id_detail_opex_2,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_3").keyup(function() {
        var harga = $("#nilai_opex_detail_3").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_3_level_6_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- Level 7 opex -->
<script>
    var form_modal_level_7_opex = $('#form_modal_level_7_opex')
    var form_simpan_level_7_opex = $('#form_simpan_level_7_opex')
    var modal_excel_opex_7 = $('#modal_excel_opex_7');

    function modal_level_7_opex(id, type, type_add) {

        if (type == 'update_nilai_level_7_opex') {

        }
        if (type == 'tambah_level_7_opex') {

        }
        if (type == 'edit_level_7_opex') {

        }
        if (type == 'hapus_level_7_opex') {

        }
        if (type == 'urutan_level_7_opex') {

        }

        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_7_opex_add_1') {

        }
        if (type == 'update_nilai_level_7_opex_add_1') {

        }
        if (type == 'update_nilai_level_7_opex_add_2') {

        }
        if (type == 'update_nilai_level_7_opex_add_3') {

        }
        if (type == 'update_nilai_level_7_opex_add_4') {

        }
        if (type == 'update_nilai_level_7_opex_add_5') {

        }
        if (type == 'update_nilai_level_7_opex_add_6') {

        }
        if (type == 'update_nilai_level_7_opex_add_7') {

        }
        if (type == 'update_nilai_level_7_opex_add_8') {

        }
        if (type == 'update_nilai_level_7_opex_add_9') {

        }
        if (type == 'update_nilai_level_7_opex_add_10') {

        }
        if (type == 'update_nilai_level_7_opex_add_11') {

        }
        if (type == 'update_nilai_level_7_opex_add_12') {

        }
        if (type == 'update_nilai_level_7_opex_add_13') {

        }
        if (type == 'update_nilai_level_7_opex_add_14') {

        }
        if (type == 'update_nilai_level_7_opex_add_15') {

        }
        if (type == 'update_nilai_level_7_opex_add_16') {

        }
        if (type == 'update_nilai_level_7_opex_add_17') {

        }
        if (type == 'update_nilai_level_7_opex_add_18') {

        }
        if (type == 'update_nilai_level_7_opex_add_19') {

        }
        if (type == 'update_nilai_level_7_opex_add_20') {

        }
        if (type == 'update_nilai_level_7_opex_add_21') {

        }
        if (type == 'update_nilai_level_7_opex_add_22') {

        }
        if (type == 'update_nilai_level_7_opex_add_23') {

        }
        if (type == 'update_nilai_level_7_opex_add_24') {

        }
        if (type == 'update_nilai_level_7_opex_add_25') {

        }
        if (type == 'update_nilai_level_7_opex_add_26') {

        }
        if (type == 'update_nilai_level_7_opex_add_27') {

        }
        if (type == 'update_nilai_level_7_opex_add_28') {

        }
        if (type == 'update_nilai_level_7_opex_add_29') {

        }
        if (type == 'update_nilai_level_7_opex_add_30') {

        }

        if (type == 'tambah_level_7_opex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_4/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_7_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_7.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 7')
                }

                if (type == 'update_nilai_level_7_opex') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_7_opex') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'none')
                    $('#button_update_nilai_level_7_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_7_opex').css('display', 'block')
                    $('#button_tambah_level_7_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('#title_modal_level_7_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_7_opex') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'none')
                    $('#button_update_nilai_level_7_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_7_opex').css('display', 'block')
                    $('#button_edit_level_7_opex').css('display', 'block')

                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_4'].nama_uraian_4_opex);
                    $('#title_modal_level_7_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_7_opex') {
                    Question_level_7_opex(type_add, response['row_opex_detail_4'].nama_uraian_4_opex, response['row_opex_detail_4'].id_detail_opex_4, response['row_opex_detail_4'].id_detail_opex_3)
                }

                // _4
                if (type == 'urutan_level_7_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_4'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_4'][i].id_detail_opex_4 + ',1.5' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_4'][i].no_urut_4_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_4'][i].nama_uraian_4_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_7
                // id_detail_opex_4
                // row_opex_detail_4
                // nilai_opex_detail_4
                if (type == 'update_nilai_level_7_opex_add_1') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_I);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_7_opex_add_2') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_II);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_7_opex_add_3') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_III);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_7_opex_add_4') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_IV);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_7_opex_add_5') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_V);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_7_opex_add_6') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_VI);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_7_opex_add_7') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_VII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_7_opex_add_8') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_VIII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_7_opex_add_9') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_IX);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_7_opex_add_10') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_X);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_7_opex_add_11') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XI);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_7_opex_add_12') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_7_opex_add_13') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XIII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_7_opex_add_14') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XIV);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_7_opex_add_15') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XV);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_7_opex_add_16') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XVI);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_7_opex_add_17') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XVII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_7_opex_add_18') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XVIII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_7_opex_add_19') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XIX);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_7_opex_add_20') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XX);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_7_opex_add_21') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXI);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_7_opex_add_22') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_7_opex_add_23') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXIII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_7_opex_add_24') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXIV);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_7_opex_add_25') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXV);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_7_opex_add_26') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXVI);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_7_opex_add_27') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXVII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_7_opex_add_28') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXVIII);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_7_opex_add_29') {
                    form_modal_level_7_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_2'].nilai_opex_detail_4_add_XXIX);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_7_opex_add_30') {
                    form_modal_level_7_opex.modal('show');
                    $('#form_input_nilai_level_7_opex').css('display', 'block')
                    $('#button_update_nilai_level_7_opex').css('display', 'block')
                    $('#form_tambah_level_7_opex').css('display', 'none')
                    $('#button_tambah_level_7_opex').css('display', 'none')
                    $('#button_edit_level_7_opex').css('display', 'none')
                    $('[name="id_detail_opex_4"]').val(response['row_opex_detail_4'].id_detail_opex_4);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_4"]').val(response['row_opex_detail_4'].nilai_opex_detail_4_add_XXX);
                    $('#title_modal_level_7_opex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    function Simpan_level_7_opex(type) {
        if (type == 'update_nilai_level_7_opex') {
            saveData = 'update_nilai_level_7_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_7_opex') ?>";
        }
        if (type == 'tambah_level_7_opex') {
            saveData = 'tambah_level_7_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_7_opex') ?>";
        }
        if (type == 'edit_level_7_opex') {
            saveData = 'edit_level_7_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_7_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_7_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_7_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_7_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_7_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_7_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_7_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_7_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_7_opex(type_add, ket, id, id_detail_opex_3) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_7_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_3: id_detail_opex_3,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_4").keyup(function() {
        var harga = $("#nilai_opex_detail_4").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_4_level_7_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- Level 8 opex -->
<script>
    var form_modal_level_8_opex = $('#form_modal_level_8_opex')
    var form_simpan_level_8_opex = $('#form_simpan_level_8_opex')
    var modal_excel_opex_8 = $('#modal_excel_opex_8');

    function modal_level_8_opex(id, type, type_add) {

        if (type == 'update_nilai_level_8_opex') {

        }
        if (type == 'tambah_level_8_opex') {

        }
        if (type == 'edit_level_8_opex') {

        }
        if (type == 'hapus_level_8_opex') {

        }

        if (type == 'urutan_level_8_opex') {

        }
        // level_8
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_8_opex_add_1') {

        }
        if (type == 'update_nilai_level_8_opex_add_1') {

        }
        if (type == 'update_nilai_level_8_opex_add_2') {

        }
        if (type == 'update_nilai_level_8_opex_add_3') {

        }
        if (type == 'update_nilai_level_8_opex_add_4') {

        }
        if (type == 'update_nilai_level_8_opex_add_5') {

        }
        if (type == 'update_nilai_level_8_opex_add_6') {

        }
        if (type == 'update_nilai_level_8_opex_add_7') {

        }
        if (type == 'update_nilai_level_8_opex_add_8') {

        }
        if (type == 'update_nilai_level_8_opex_add_9') {

        }
        if (type == 'update_nilai_level_8_opex_add_10') {

        }
        if (type == 'update_nilai_level_8_opex_add_11') {

        }
        if (type == 'update_nilai_level_8_opex_add_12') {

        }
        if (type == 'update_nilai_level_8_opex_add_13') {

        }
        if (type == 'update_nilai_level_8_opex_add_14') {

        }
        if (type == 'update_nilai_level_8_opex_add_15') {

        }
        if (type == 'update_nilai_level_8_opex_add_16') {

        }
        if (type == 'update_nilai_level_8_opex_add_17') {

        }
        if (type == 'update_nilai_level_8_opex_add_18') {

        }
        if (type == 'update_nilai_level_8_opex_add_19') {

        }
        if (type == 'update_nilai_level_8_opex_add_20') {

        }
        if (type == 'update_nilai_level_8_opex_add_21') {

        }
        if (type == 'update_nilai_level_8_opex_add_22') {

        }
        if (type == 'update_nilai_level_8_opex_add_23') {

        }
        if (type == 'update_nilai_level_8_opex_add_24') {

        }
        if (type == 'update_nilai_level_8_opex_add_25') {

        }
        if (type == 'update_nilai_level_8_opex_add_26') {

        }
        if (type == 'update_nilai_level_8_opex_add_27') {

        }
        if (type == 'update_nilai_level_8_opex_add_28') {

        }
        if (type == 'update_nilai_level_8_opex_add_29') {

        }
        if (type == 'update_nilai_level_8_opex_add_30') {

        }

        if (type == 'tambah_level_8_opex_excel') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_5/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {


                if (type == 'tambah_level_8_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_8.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 8')
                }

                if (type == 'update_nilai_level_8_opex') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_8_opex') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'none')
                    $('#button_update_nilai_level_8_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_8_opex').css('display', 'block')
                    $('#button_tambah_level_8_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('#title_modal_level_8_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_8_opex') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'none')
                    $('#button_update_nilai_level_8_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_8_opex').css('display', 'block')
                    $('#button_edit_level_8_opex').css('display', 'block')

                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_5'].nama_uraian_5_opex);
                    $('#title_modal_level_8_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_8_opex') {
                    Question_level_8_opex(type_add, response['row_opex_detail_5'].nama_uraian_5_opex, response['row_opex_detail_5'].id_detail_opex_5, response['row_opex_detail_5'].id_detail_opex_4)
                }

                // _5
                if (type == 'urutan_level_8_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_5'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_5'][i].id_detail_opex_5 + ',1.6' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_5'][i].no_urut_5_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_5'][i].nama_uraian_5_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_8
                // id_detail_opex_5
                // row_opex_detail_5
                // nilai_opex_detail_5
                if (type == 'update_nilai_level_8_opex_add_1') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_I);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_8_opex_add_2') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_II);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_8_opex_add_3') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_III);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_8_opex_add_4') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_IV);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_8_opex_add_5') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_V);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_8_opex_add_6') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_VI);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_8_opex_add_7') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_VII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_8_opex_add_8') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_VIII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_8_opex_add_9') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_IX);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_8_opex_add_10') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_X);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_8_opex_add_11') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XI);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_8_opex_add_12') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_8_opex_add_13') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XIII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_8_opex_add_14') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XIV);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_8_opex_add_15') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XV);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_8_opex_add_16') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XVI);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_8_opex_add_17') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XVII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_8_opex_add_18') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XVIII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_8_opex_add_19') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XIX);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_8_opex_add_20') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XX);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_8_opex_add_21') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXI);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_8_opex_add_22') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_8_opex_add_23') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXIII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_8_opex_add_24') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXIV);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_8_opex_add_25') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXV);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_8_opex_add_26') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXVI);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_8_opex_add_27') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXVII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_8_opex_add_28') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXVIII);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_8_opex_add_29') {
                    form_modal_level_8_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_2'].nilai_opex_detail_5_add_XXIX);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_8_opex_add_30') {
                    form_modal_level_8_opex.modal('show');
                    $('#form_input_nilai_level_8_opex').css('display', 'block')
                    $('#button_update_nilai_level_8_opex').css('display', 'block')
                    $('#form_tambah_level_8_opex').css('display', 'none')
                    $('#button_tambah_level_8_opex').css('display', 'none')
                    $('#button_edit_level_8_opex').css('display', 'none')
                    $('[name="id_detail_opex_5"]').val(response['row_opex_detail_5'].id_detail_opex_5);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_5"]').val(response['row_opex_detail_5'].nilai_opex_detail_5_add_XXX);
                    $('#title_modal_level_8_opex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    function Simpan_level_8_opex(type) {
        if (type == 'update_nilai_level_8_opex') {
            saveData = 'update_nilai_level_8_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_8_opex') ?>";
        }
        if (type == 'tambah_level_8_opex') {
            saveData = 'tambah_level_8_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_8_opex') ?>";
        }
        if (type == 'edit_level_8_opex') {
            saveData = 'edit_level_8_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_8_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_8_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_8_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_8_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_8_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_8_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_8_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_8_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_8_opex(type_add, ket, id, id_detail_opex_4) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_8_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_4: id_detail_opex_4,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_5").keyup(function() {
        var harga = $("#nilai_opex_detail_5").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_5_level_8_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- Level 9 opex -->
<script>
    var form_modal_level_9_opex = $('#form_modal_level_9_opex')
    var form_simpan_level_9_opex = $('#form_simpan_level_9_opex')
    var modal_excel_opex_9 = $('#modal_excel_opex_9');


    function modal_level_9_opex(id, type, type_add) {

        if (type == 'update_nilai_level_9_opex') {

        }
        if (type == 'tambah_level_9_opex') {

        }
        if (type == 'edit_level_9_opex') {

        }
        if (type == 'hapus_level_9_opex') {

        }

        if (type == 'urutan_level_9_opex') {

        }

        // level_9
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_9_opex_add_1') {

        }
        if (type == 'update_nilai_level_9_opex_add_1') {

        }
        if (type == 'update_nilai_level_9_opex_add_2') {

        }
        if (type == 'update_nilai_level_9_opex_add_3') {

        }
        if (type == 'update_nilai_level_9_opex_add_4') {

        }
        if (type == 'update_nilai_level_9_opex_add_5') {

        }
        if (type == 'update_nilai_level_9_opex_add_6') {

        }
        if (type == 'update_nilai_level_9_opex_add_7') {

        }
        if (type == 'update_nilai_level_9_opex_add_8') {

        }
        if (type == 'update_nilai_level_9_opex_add_9') {

        }
        if (type == 'update_nilai_level_9_opex_add_10') {

        }
        if (type == 'update_nilai_level_9_opex_add_11') {

        }
        if (type == 'update_nilai_level_9_opex_add_12') {

        }
        if (type == 'update_nilai_level_9_opex_add_13') {

        }
        if (type == 'update_nilai_level_9_opex_add_14') {

        }
        if (type == 'update_nilai_level_9_opex_add_15') {

        }
        if (type == 'update_nilai_level_9_opex_add_16') {

        }
        if (type == 'update_nilai_level_9_opex_add_17') {

        }
        if (type == 'update_nilai_level_9_opex_add_18') {

        }
        if (type == 'update_nilai_level_9_opex_add_19') {

        }
        if (type == 'update_nilai_level_9_opex_add_20') {

        }
        if (type == 'update_nilai_level_9_opex_add_21') {

        }
        if (type == 'update_nilai_level_9_opex_add_22') {

        }
        if (type == 'update_nilai_level_9_opex_add_23') {

        }
        if (type == 'update_nilai_level_9_opex_add_24') {

        }
        if (type == 'update_nilai_level_9_opex_add_25') {

        }
        if (type == 'update_nilai_level_9_opex_add_26') {

        }
        if (type == 'update_nilai_level_9_opex_add_27') {

        }
        if (type == 'update_nilai_level_9_opex_add_28') {

        }
        if (type == 'update_nilai_level_9_opex_add_29') {

        }
        if (type == 'update_nilai_level_9_opex_add_30') {

        }

        if (type == 'tambah_level_9_opex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_6/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_9_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_9.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 9')
                }

                if (type == 'update_nilai_level_9_opex') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_9_opex') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'none')
                    $('#button_update_nilai_level_9_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_9_opex').css('display', 'block')
                    $('#button_tambah_level_9_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('#title_modal_level_9_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_9_opex') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'none')
                    $('#button_update_nilai_level_9_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_9_opex').css('display', 'block')
                    $('#button_edit_level_9_opex').css('display', 'block')

                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_6'].nama_uraian_6_opex);
                    $('#title_modal_level_9_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_9_opex') {
                    Question_level_9_opex(type_add, response['row_opex_detail_6'].nama_uraian_6_opex, response['row_opex_detail_6'].id_detail_opex_6, response['row_opex_detail_6'].id_detail_opex_5)
                }

                // _6
                // _9
                if (type == 'urutan_level_9_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_6'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_6'][i].id_detail_opex_6 + ',1.7' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_6'][i].no_urut_6_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_6'][i].nama_uraian_6_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_9
                // id_detail_opex_6
                // row_opex_detail_6
                // nilai_opex_detail_6
                if (type == 'update_nilai_level_9_opex_add_1') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_I);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_9_opex_add_2') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_II);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_9_opex_add_3') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_III);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_9_opex_add_4') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_IV);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_9_opex_add_5') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_V);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_9_opex_add_6') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_VI);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_9_opex_add_7') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_VII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_9_opex_add_8') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_VIII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_9_opex_add_9') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_IX);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_9_opex_add_10') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_X);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_9_opex_add_11') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XI);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_9_opex_add_12') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_9_opex_add_13') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XIII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_9_opex_add_14') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XIV);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_9_opex_add_15') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XV);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_9_opex_add_16') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XVI);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_9_opex_add_17') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XVII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_9_opex_add_18') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XVIII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_9_opex_add_19') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XIX);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_9_opex_add_20') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XX);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_9_opex_add_21') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXI);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_9_opex_add_22') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_9_opex_add_23') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXIII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_9_opex_add_24') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXIV);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_9_opex_add_25') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXV);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_9_opex_add_26') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXVI);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_9_opex_add_27') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXVII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_9_opex_add_28') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXVIII);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_9_opex_add_29') {
                    form_modal_level_9_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_2'].nilai_opex_detail_6_add_XXIX);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_9_opex_add_30') {
                    form_modal_level_9_opex.modal('show');
                    $('#form_input_nilai_level_9_opex').css('display', 'block')
                    $('#button_update_nilai_level_9_opex').css('display', 'block')
                    $('#form_tambah_level_9_opex').css('display', 'none')
                    $('#button_tambah_level_9_opex').css('display', 'none')
                    $('#button_edit_level_9_opex').css('display', 'none')
                    $('[name="id_detail_opex_6"]').val(response['row_opex_detail_6'].id_detail_opex_6);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_6"]').val(response['row_opex_detail_6'].nilai_opex_detail_6_add_XXX);
                    $('#title_modal_level_9_opex').text('Update Nilai Kontrak')
                }

            }
        })
    }



    function Simpan_level_9_opex(type) {
        if (type == 'update_nilai_level_9_opex') {
            saveData = 'update_nilai_level_9_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_9_opex') ?>";
        }
        if (type == 'tambah_level_9_opex') {
            saveData = 'tambah_level_9_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_9_opex') ?>";
        }
        if (type == 'edit_level_9_opex') {
            saveData = 'edit_level_9_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_9_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_9_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_9_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_9_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_9_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_9_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_9_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_9_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_9_opex(type_add, ket, id, id_detail_opex_5) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_9_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_5: id_detail_opex_5,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_6").keyup(function() {
        var harga = $("#nilai_opex_detail_6").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_6_level_9_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- Level 10 opex -->
<script>
    var form_modal_level_10_opex = $('#form_modal_level_10_opex')
    var form_simpan_level_10_opex = $('#form_simpan_level_10_opex')
    var modal_excel_opex_10 = $('#modal_excel_opex_10');

    function modal_level_10_opex(id, type, type_add) {

        if (type == 'update_nilai_level_10_opex') {

        }
        if (type == 'tambah_level_10_opex') {

        }
        if (type == 'edit_level_10_opex') {

        }
        if (type == 'hapus_level_10_opex') {

        }
        if (type == 'urutan_level_10_opex') {

        }

        // level_10
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_10_opex_add_1') {

        }
        if (type == 'update_nilai_level_10_opex_add_1') {

        }
        if (type == 'update_nilai_level_10_opex_add_2') {

        }
        if (type == 'update_nilai_level_10_opex_add_3') {

        }
        if (type == 'update_nilai_level_10_opex_add_4') {

        }
        if (type == 'update_nilai_level_10_opex_add_5') {

        }
        if (type == 'update_nilai_level_10_opex_add_6') {

        }
        if (type == 'update_nilai_level_10_opex_add_7') {

        }
        if (type == 'update_nilai_level_10_opex_add_8') {

        }
        if (type == 'update_nilai_level_10_opex_add_9') {

        }
        if (type == 'update_nilai_level_10_opex_add_10') {

        }
        if (type == 'update_nilai_level_10_opex_add_11') {

        }
        if (type == 'update_nilai_level_10_opex_add_12') {

        }
        if (type == 'update_nilai_level_10_opex_add_13') {

        }
        if (type == 'update_nilai_level_10_opex_add_14') {

        }
        if (type == 'update_nilai_level_10_opex_add_15') {

        }
        if (type == 'update_nilai_level_10_opex_add_16') {

        }
        if (type == 'update_nilai_level_10_opex_add_17') {

        }
        if (type == 'update_nilai_level_10_opex_add_18') {

        }
        if (type == 'update_nilai_level_10_opex_add_19') {

        }
        if (type == 'update_nilai_level_10_opex_add_20') {

        }
        if (type == 'update_nilai_level_10_opex_add_21') {

        }
        if (type == 'update_nilai_level_10_opex_add_22') {

        }
        if (type == 'update_nilai_level_10_opex_add_23') {

        }
        if (type == 'update_nilai_level_10_opex_add_24') {

        }
        if (type == 'update_nilai_level_10_opex_add_25') {

        }
        if (type == 'update_nilai_level_10_opex_add_26') {

        }
        if (type == 'update_nilai_level_10_opex_add_27') {

        }
        if (type == 'update_nilai_level_10_opex_add_28') {

        }
        if (type == 'update_nilai_level_10_opex_add_29') {

        }
        if (type == 'update_nilai_level_10_opex_add_30') {

        }
        if (type == 'tambah_level_10_opex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_7/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_10_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_10.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 10')
                }

                if (type == 'update_nilai_level_10_opex') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_10_opex') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'none')
                    $('#button_update_nilai_level_10_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_10_opex').css('display', 'block')
                    $('#button_tambah_level_10_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('#title_modal_level_10_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_10_opex') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'none')
                    $('#button_update_nilai_level_10_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_10_opex').css('display', 'block')
                    $('#button_edit_level_10_opex').css('display', 'block')

                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_7'].nama_uraian_7_opex);
                    $('#title_modal_level_10_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_10_opex') {
                    Question_level_10_opex(type_add, response['row_opex_detail_7'].nama_uraian_7_opex, response['row_opex_detail_7'].id_detail_opex_7, response['row_opex_detail_7'].id_detail_opex_6)
                }

                // _7
                // _10
                if (type == 'urutan_level_10_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_7'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_7'][i].id_detail_opex_7 + ',1.8' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_7'][i].no_urut_7_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_7'][i].nama_uraian_7_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_10
                // id_detail_opex_7
                // row_opex_detail_7
                // nilai_opex_detail_7
                if (type == 'update_nilai_level_10_opex_add_1') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_I);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_10_opex_add_2') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_II);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_10_opex_add_3') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_III);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_10_opex_add_4') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_IV);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_10_opex_add_5') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_V);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_10_opex_add_6') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_VI);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_10_opex_add_7') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_VII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_10_opex_add_8') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_VIII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_10_opex_add_9') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_IX);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_10_opex_add_10') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_X);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_10_opex_add_11') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XI);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_10_opex_add_12') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_10_opex_add_13') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XIII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_10_opex_add_14') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XIV);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_10_opex_add_15') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XV);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_10_opex_add_16') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XVI);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_10_opex_add_17') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XVII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_10_opex_add_18') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XVIII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_10_opex_add_19') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XIX);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_10_opex_add_20') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XX);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_10_opex_add_21') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXI);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_10_opex_add_22') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_10_opex_add_23') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXIII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_10_opex_add_24') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXIV);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_10_opex_add_25') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXV);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_10_opex_add_26') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXVI);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_10_opex_add_27') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXVII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_10_opex_add_28') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXVIII);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_10_opex_add_29') {
                    form_modal_level_10_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_2'].nilai_opex_detail_7_add_XXIX);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_10_opex_add_30') {
                    form_modal_level_10_opex.modal('show');
                    $('#form_input_nilai_level_10_opex').css('display', 'block')
                    $('#button_update_nilai_level_10_opex').css('display', 'block')
                    $('#form_tambah_level_10_opex').css('display', 'none')
                    $('#button_tambah_level_10_opex').css('display', 'none')
                    $('#button_edit_level_10_opex').css('display', 'none')
                    $('[name="id_detail_opex_7"]').val(response['row_opex_detail_7'].id_detail_opex_7);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_7"]').val(response['row_opex_detail_7'].nilai_opex_detail_7_add_XXX);
                    $('#title_modal_level_10_opex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    function Simpan_level_10_opex(type) {
        if (type == 'update_nilai_level_10_opex') {
            saveData = 'update_nilai_level_10_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_10_opex') ?>";
        }
        if (type == 'tambah_level_10_opex') {
            saveData = 'tambah_level_10_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_10_opex') ?>";
        }
        if (type == 'edit_level_10_opex') {
            saveData = 'edit_level_10_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_10_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_10_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_10_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_10_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_10_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_10_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_10_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_10_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_10_opex(type_add, ket, id, id_detail_opex_6) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_10_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_6: id_detail_opex_6,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_7").keyup(function() {
        var harga = $("#nilai_opex_detail_7").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_7_level_10_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- Level 11 opex -->
<script>
    var form_modal_level_11_opex = $('#form_modal_level_11_opex')
    var form_simpan_level_11_opex = $('#form_simpan_level_11_opex')
    var modal_excel_opex_11 = $('#modal_excel_opex_11');

    function modal_level_11_opex(id, type, type_add) {

        if (type == 'update_nilai_level_11_opex') {

        }
        if (type == 'tambah_level_11_opex') {

        }
        if (type == 'edit_level_11_opex') {

        }
        if (type == 'hapus_level_11_opex') {

        }

        if (type == 'urutan_level_11_opex') {

        }

        // level_11
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_11_opex_add_1') {

        }
        if (type == 'update_nilai_level_11_opex_add_1') {

        }
        if (type == 'update_nilai_level_11_opex_add_2') {

        }
        if (type == 'update_nilai_level_11_opex_add_3') {

        }
        if (type == 'update_nilai_level_11_opex_add_4') {

        }
        if (type == 'update_nilai_level_11_opex_add_5') {

        }
        if (type == 'update_nilai_level_11_opex_add_6') {

        }
        if (type == 'update_nilai_level_11_opex_add_7') {

        }
        if (type == 'update_nilai_level_11_opex_add_8') {

        }
        if (type == 'update_nilai_level_11_opex_add_9') {

        }
        if (type == 'update_nilai_level_11_opex_add_10') {

        }
        if (type == 'update_nilai_level_11_opex_add_11') {

        }
        if (type == 'update_nilai_level_11_opex_add_12') {

        }
        if (type == 'update_nilai_level_11_opex_add_13') {

        }
        if (type == 'update_nilai_level_11_opex_add_14') {

        }
        if (type == 'update_nilai_level_11_opex_add_15') {

        }
        if (type == 'update_nilai_level_11_opex_add_16') {

        }
        if (type == 'update_nilai_level_11_opex_add_17') {

        }
        if (type == 'update_nilai_level_11_opex_add_18') {

        }
        if (type == 'update_nilai_level_11_opex_add_19') {

        }
        if (type == 'update_nilai_level_11_opex_add_20') {

        }
        if (type == 'update_nilai_level_11_opex_add_21') {

        }
        if (type == 'update_nilai_level_11_opex_add_22') {

        }
        if (type == 'update_nilai_level_11_opex_add_23') {

        }
        if (type == 'update_nilai_level_11_opex_add_24') {

        }
        if (type == 'update_nilai_level_11_opex_add_25') {

        }
        if (type == 'update_nilai_level_11_opex_add_26') {

        }
        if (type == 'update_nilai_level_11_opex_add_27') {

        }
        if (type == 'update_nilai_level_11_opex_add_28') {

        }
        if (type == 'update_nilai_level_11_opex_add_29') {

        }
        if (type == 'update_nilai_level_11_opex_add_30') {

        }

        if (type == 'tambah_level_11_opex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_8/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_11_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_11.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 11')
                }
                if (type == 'update_nilai_level_11_opex') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_11_opex') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'none')
                    $('#button_update_nilai_level_11_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_11_opex').css('display', 'block')
                    $('#button_tambah_level_11_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('#title_modal_level_11_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_11_opex') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'none')
                    $('#button_update_nilai_level_11_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_11_opex').css('display', 'block')
                    $('#button_edit_level_11_opex').css('display', 'block')

                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_8'].nama_uraian_8_opex);
                    $('#title_modal_level_11_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_11_opex') {
                    Question_level_11_opex(type_add, response['row_opex_detail_8'].nama_uraian_8_opex, response['row_opex_detail_8'].id_detail_opex_8, response['row_opex_detail_8'].id_detail_opex_7)
                }
                // _11
                if (type == 'urutan_level_11_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_8'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_8'][i].id_detail_opex_8 + ',1.9' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_8'][i].no_urut_8_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_8'][i].nama_uraian_8_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_11
                // id_detail_opex_8
                // row_opex_detail_8
                // nilai_opex_detail_8
                if (type == 'update_nilai_level_11_opex_add_1') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_I);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_11_opex_add_2') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_II);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_11_opex_add_3') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_III);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_11_opex_add_4') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_IV);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_11_opex_add_5') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_V);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_11_opex_add_6') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_VI);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_11_opex_add_7') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_VII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_11_opex_add_8') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_VIII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_11_opex_add_9') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_IX);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_11_opex_add_10') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_X);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_11_opex_add_11') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XI);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_11_opex_add_12') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_11_opex_add_13') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XIII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_11_opex_add_14') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XIV);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_11_opex_add_15') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XV);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_11_opex_add_16') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XVI);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_11_opex_add_17') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XVII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_11_opex_add_18') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XVIII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_11_opex_add_19') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XIX);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_11_opex_add_20') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XX);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_11_opex_add_21') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXI);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_11_opex_add_22') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_11_opex_add_23') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXIII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_11_opex_add_24') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXIV);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_11_opex_add_25') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXV);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_11_opex_add_26') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXVI);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_11_opex_add_27') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXVII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_11_opex_add_28') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXVIII);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_11_opex_add_29') {
                    form_modal_level_11_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_2'].nilai_opex_detail_8_add_XXIX);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_11_opex_add_30') {
                    form_modal_level_11_opex.modal('show');
                    $('#form_input_nilai_level_11_opex').css('display', 'block')
                    $('#button_update_nilai_level_11_opex').css('display', 'block')
                    $('#form_tambah_level_11_opex').css('display', 'none')
                    $('#button_tambah_level_11_opex').css('display', 'none')
                    $('#button_edit_level_11_opex').css('display', 'none')
                    $('[name="id_detail_opex_8"]').val(response['row_opex_detail_8'].id_detail_opex_8);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_8"]').val(response['row_opex_detail_8'].nilai_opex_detail_8_add_XXX);
                    $('#title_modal_level_11_opex').text('Update Nilai Kontrak')
                }


            }
        })
    }



    function Simpan_level_11_opex(type) {
        if (type == 'update_nilai_level_11_opex') {
            saveData = 'update_nilai_level_11_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_11_opex') ?>";
        }
        if (type == 'tambah_level_11_opex') {
            saveData = 'tambah_level_11_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_11_opex') ?>";
        }
        if (type == 'edit_level_11_opex') {
            saveData = 'edit_level_11_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_11_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_11_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_11_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_11_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_11_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_11_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_11_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_11_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_11_opex(type_add, ket, id, id_detail_opex_7) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_11_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_7: id_detail_opex_7,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_8").keyup(function() {
        var harga = $("#nilai_opex_detail_8").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_8_level_11_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<!-- Level 12 opex -->
<script>
    var form_modal_level_12_opex = $('#form_modal_level_12_opex')
    var form_simpan_level_12_opex = $('#form_simpan_level_12_opex')
    var modal_excel_opex_12 = $('#modal_excel_opex_12');

    function modal_level_12_opex(id, type, type_add) {

        if (type == 'update_nilai_level_12_opex') {

        }
        if (type == 'tambah_level_12_opex') {

        }
        if (type == 'edit_level_12_opex') {

        }
        if (type == 'hapus_level_12_opex') {

        }
        if (type == 'urutan_level_12_opex') {

        }
        // level_11
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_11_opex_add_1') {

        }
        if (type == 'update_nilai_level_11_opex_add_1') {

        }
        if (type == 'update_nilai_level_11_opex_add_2') {

        }
        if (type == 'update_nilai_level_11_opex_add_3') {

        }
        if (type == 'update_nilai_level_11_opex_add_4') {

        }
        if (type == 'update_nilai_level_11_opex_add_5') {

        }
        if (type == 'update_nilai_level_11_opex_add_6') {

        }
        if (type == 'update_nilai_level_11_opex_add_7') {

        }
        if (type == 'update_nilai_level_11_opex_add_8') {

        }
        if (type == 'update_nilai_level_11_opex_add_9') {

        }
        if (type == 'update_nilai_level_11_opex_add_10') {

        }
        if (type == 'update_nilai_level_11_opex_add_11') {

        }
        if (type == 'update_nilai_level_11_opex_add_12') {

        }
        if (type == 'update_nilai_level_11_opex_add_13') {

        }
        if (type == 'update_nilai_level_11_opex_add_14') {

        }
        if (type == 'update_nilai_level_11_opex_add_15') {

        }
        if (type == 'update_nilai_level_11_opex_add_16') {

        }
        if (type == 'update_nilai_level_11_opex_add_17') {

        }
        if (type == 'update_nilai_level_11_opex_add_18') {

        }
        if (type == 'update_nilai_level_11_opex_add_19') {

        }
        if (type == 'update_nilai_level_11_opex_add_20') {

        }
        if (type == 'update_nilai_level_11_opex_add_21') {

        }
        if (type == 'update_nilai_level_11_opex_add_22') {

        }
        if (type == 'update_nilai_level_11_opex_add_23') {

        }
        if (type == 'update_nilai_level_11_opex_add_24') {

        }
        if (type == 'update_nilai_level_11_opex_add_25') {

        }
        if (type == 'update_nilai_level_11_opex_add_26') {

        }
        if (type == 'update_nilai_level_11_opex_add_27') {

        }
        if (type == 'update_nilai_level_11_opex_add_28') {

        }
        if (type == 'update_nilai_level_11_opex_add_29') {

        }
        if (type == 'update_nilai_level_11_opex_add_30') {

        }
        if (type == 'tambah_level_12_opex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_opex_9/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_12_opex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_opex_12.modal('show');
                    $('[name="id_global_excel"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 12')
                }
                if (type == 'update_nilai_level_12_opex') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_12_opex') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'none')
                    $('#button_update_nilai_level_12_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_12_opex').css('display', 'block')
                    $('#button_tambah_level_12_opex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('#title_modal_level_12_opex').text('Tambah Uraian')
                }
                if (type == 'edit_level_12_opex') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'none')
                    $('#button_update_nilai_level_12_opex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_12_opex').css('display', 'block')
                    $('#button_edit_level_12_opex').css('display', 'block')

                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="nama_uraian"]').val(response['row_opex_detail_9'].nama_uraian_9_opex);
                    $('#title_modal_level_12_opex').text('Edit Uraian')
                }
                if (type == 'hapus_level_12_opex') {
                    Question_level_12_opex(type_add, response['row_opex_detail_9'].nama_uraian_9_opex, response['row_opex_detail_9'].id_detail_opex_9, response['row_opex_detail_9'].id_detail_opex_8)
                }

                // _9
                if (type == 'urutan_level_12_opex') {
                    modal_opex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_opex_9'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_opex(' + response['result_detail_opex_9'][i].id_detail_opex_9 + ',1.10' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_opex_9'][i].no_urut_9_opex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_opex_9'][i].nama_uraian_9_opex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_opex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_12
                // id_detail_opex_9
                // row_opex_detail_9
                // nilai_opex_detail_9
                if (type == 'update_nilai_level_12_opex_add_1') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_I);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_12_opex_add_2') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_II);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_12_opex_add_3') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_III);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_12_opex_add_4') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_IV);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_12_opex_add_5') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_V);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_12_opex_add_6') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_VI);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_12_opex_add_7') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_VII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_12_opex_add_8') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_VIII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_12_opex_add_9') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_IX);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_12_opex_add_10') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_X);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_12_opex_add_11') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XI);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_12_opex_add_12') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_12_opex_add_13') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XIII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_12_opex_add_14') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XIV);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_12_opex_add_15') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XV);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_12_opex_add_16') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XVI);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_12_opex_add_17') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XVII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_12_opex_add_18') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XVIII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_12_opex_add_19') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XIX);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_12_opex_add_20') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XX);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_12_opex_add_21') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXI);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_12_opex_add_22') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_12_opex_add_23') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXIII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_12_opex_add_24') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXIV);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_12_opex_add_25') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXV);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_12_opex_add_26') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXVI);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_12_opex_add_27') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXVII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_12_opex_add_28') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXVIII);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_12_opex_add_29') {
                    form_modal_level_12_opex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_2'].nilai_opex_detail_9_add_XXIX);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_12_opex_add_30') {
                    form_modal_level_12_opex.modal('show');
                    $('#form_input_nilai_level_12_opex').css('display', 'block')
                    $('#button_update_nilai_level_12_opex').css('display', 'block')
                    $('#form_tambah_level_12_opex').css('display', 'none')
                    $('#button_tambah_level_12_opex').css('display', 'none')
                    $('#button_edit_level_12_opex').css('display', 'none')
                    $('[name="id_detail_opex_9"]').val(response['row_opex_detail_9'].id_detail_opex_9);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_opex_detail_9"]').val(response['row_opex_detail_9'].nilai_opex_detail_9_add_XXX);
                    $('#title_modal_level_12_opex').text('Update Nilai Kontrak')
                }

            }
        })
    }



    function Simpan_level_12_opex(type) {
        if (type == 'update_nilai_level_12_opex') {
            saveData = 'update_nilai_level_12_opex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_12_opex') ?>";
        }
        if (type == 'tambah_level_12_opex') {
            saveData = 'tambah_level_12_opex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_12_opex') ?>";
        }
        if (type == 'edit_level_12_opex') {
            saveData = 'edit_level_12_opex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_12_opex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_12_opex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_12_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_12_opex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_12_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_12_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_12_opex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_12_opex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_12_opex(type_add, ket, id, id_detail_opex_8) {
        Swal.fire({
            title: "Apakah Anda Yakin!?",
            text: 'Ingin Menghapus Data ' + ket + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_12_opex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_opex_8: id_detail_opex_8,
                        type_add: type_add
                    },
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


    $("#nilai_opex_detail_9").keyup(function() {
        var harga = $("#nilai_opex_detail_9").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_opex_detail_9_level_12_opex');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

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
    function UbahUrutaan_opex(id_ubah, type, initial) {
        var no_urut_ubah = $('[name="no_urut_ubah_' + initial + '"]').val();
        console.log(id_ubah, no_urut_ubah);
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/data_kontrak/pindahkan_turunan_opex/') ?>" + id,
            dataType: "JSON",
            data: {
                id_ubah: id_ubah,
                type: type,
                no_urut_ubah: no_urut_ubah
            },
            success: function(response) {
                if (response == 'success') {}
            }
        })
    }

    function Update_Turunan() {
        location.reload();
    }
</script>