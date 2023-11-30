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
<!-- Level 3 capex -->
<!-- capex -->
<script>
    var form_modal_level_3_capex = $('#form_modal_level_3_capex')
    var form_simpan_level_3_capex = $('#form_simpan_level_3_capex')
    var modal_excel_capex_3 = $('#modal_excel_capex_3');
    var modal_capex_urutan = $('#modal_capex_urutan');

    function modal_level_3_capex(id, type, type_add) {
        console.log(id, type, type_add);
        if (type == 'update_nilai_level_3_capex') {

        }
        if (type == 'tambah_level_3_capex') {

        }
        if (type == 'edit_level_3_capex') {

        }
        if (type == 'hapus_level_3_capex') {

        }
        if (type == 'urutan_level_3_capex') {

        }

        // INI NUNTUK ADDENDUM
        if (type == 'update_nilai_level_3_capex_add_1') {

        }
        if (type == 'update_nilai_level_3_capex_add_2') {

        }
        if (type == 'update_nilai_level_3_capex_add_3') {

        }
        if (type == 'update_nilai_level_3_capex_add_4') {

        }
        if (type == 'update_nilai_level_3_capex_add_5') {

        }
        if (type == 'update_nilai_level_3_capex_add_6') {

        }
        if (type == 'update_nilai_level_3_capex_add_7') {

        }
        if (type == 'update_nilai_level_3_capex_add_8') {

        }
        if (type == 'update_nilai_level_3_capex_add_9') {

        }
        if (type == 'update_nilai_level_3_capex_add_10') {

        }
        if (type == 'update_nilai_level_3_capex_add_11') {

        }
        if (type == 'update_nilai_level_3_capex_add_12') {

        }
        if (type == 'update_nilai_level_3_capex_add_13') {

        }
        if (type == 'update_nilai_level_3_capex_add_14') {

        }
        if (type == 'update_nilai_level_3_capex_add_15') {

        }
        if (type == 'update_nilai_level_3_capex_add_16') {

        }
        if (type == 'update_nilai_level_3_capex_add_17') {

        }
        if (type == 'update_nilai_level_3_capex_add_18') {

        }
        if (type == 'update_nilai_level_3_capex_add_19') {

        }
        if (type == 'update_nilai_level_3_capex_add_20') {

        }
        if (type == 'update_nilai_level_3_capex_add_21') {

        }
        if (type == 'update_nilai_level_3_capex_add_22') {

        }
        if (type == 'update_nilai_level_3_capex_add_23') {

        }
        if (type == 'update_nilai_level_3_capex_add_24') {

        }
        if (type == 'update_nilai_level_3_capex_add_25') {

        }
        if (type == 'update_nilai_level_3_capex_add_26') {

        }
        if (type == 'update_nilai_level_3_capex_add_27') {

        }
        if (type == 'update_nilai_level_3_capex_add_28') {

        }
        if (type == 'update_nilai_level_3_capex_add_29') {

        }
        if (type == 'update_nilai_level_3_capex_add_30') {

        }

        if (type == 'tambah_level_3_capex_excel') {}

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_capex_detail/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_3_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_3.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail'].id_capex_detail);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 2')
                }
                if (type == 'update_nilai_level_3_capex') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_3_capex') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'none')
                    $('#button_update_nilai_level_3_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_3_capex').css('display', 'block')
                    $('#button_tambah_level_3_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('#title_modal_level_3_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_3_capex') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'none')
                    $('#button_update_nilai_level_3_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_3_capex').css('display', 'block')
                    $('#button_edit_level_3_capex').css('display', 'block')

                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="nama_uraian"]').val(response['row_capex_detail'].nama_uraian);
                    $('#title_modal_level_3_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_3_capex') {
                    Question_detail_capex(type_add, response['row_capex_detail'].nama_uraian, response['row_capex_detail'].id_capex_detail, response['row_capex_detail'].id_capex)
                }

                if (type == 'urutan_level_3_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_capex'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_capex'][i].id_capex_detail + ',1.1' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_capex'][i].no_urut + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_capex'][i].nama_uraian + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }

                // INI UTK ADDENDUM 1
                if (type == 'update_nilai_level_3_capex_add_1') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_I);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 2
                if (type == 'update_nilai_level_3_capex_add_2') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_II);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 3
                if (type == 'update_nilai_level_3_capex_add_3') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_III);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 4
                if (type == 'update_nilai_level_3_capex_add_4') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_IV);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_3_capex_add_5') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_V);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_3_capex_add_6') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_VI);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_3_capex_add_7') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_VII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_3_capex_add_8') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_VIII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_3_capex_add_9') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_IX);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_3_capex_add_10') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_X);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_3_capex_add_11') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XI);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_3_capex_add_12') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_3_capex_add_13') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XIII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_3_capex_add_14') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XIV);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_3_capex_add_15') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XV);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_3_capex_add_16') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XVI);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_3_capex_add_17') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XVII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_3_capex_add_18') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XVIII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_3_capex_add_19') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XIX);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_3_capex_add_20') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XX);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_3_capex_add_21') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXI);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_3_capex_add_22') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_3_capex_add_23') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXIII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_3_capex_add_24') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXIV);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_3_capex_add_25') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXV);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_3_capex_add_26') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXVI);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_3_capex_add_27') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXVII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_3_capex_add_28') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXVIII);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_3_capex_add_29') {
                    form_modal_level_3_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXIX);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_3_capex_add_30') {
                    form_modal_level_3_capex.modal('show');
                    $('#form_input_nilai_level_3_capex').css('display', 'block')
                    $('#button_update_nilai_level_3_capex').css('display', 'block')
                    $('#form_tambah_level_3_capex').css('display', 'none')
                    $('#button_tambah_level_3_capex').css('display', 'none')
                    $('#button_edit_level_3_capex').css('display', 'none')
                    $('[name="id_capex_detail"]').val(response['row_capex_detail'].id_capex_detail);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_detail_capex"]').val(response['row_capex_detail'].nilai_detail_capex_add_XXX);
                    $('#title_modal_level_3_capex').text('Update Nilai Kontrak')
                }

            }
        })
    }

    function Simpan_level_3_capex(type) {
        if (type == 'update_nilai_level_3_capex') {
            saveData = 'update_nilai_level_3_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_3_capex') ?>";
        }
        if (type == 'tambah_level_3_capex') {
            saveData = 'tambah_level_3_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_3_capex') ?>";
        }
        if (type == 'edit_level_3_capex') {
            saveData = 'edit_level_3_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_3_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_3_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_3_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_3_capex.modal('hide')
                        message('success', 'Data Berhasil Di Update!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_3_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_3_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_3_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_3_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_detail_capex(type_add, ket, id, id_capex) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_3_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_capex: id_capex,
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


    $("#nilai_detail_capex").keyup(function() {
        var harga = $("#nilai_detail_capex").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_detail_capex_level_3_capex');
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

<!-- level 4 capex -->
<script>
    var form_modal_level_4_capex = $('#form_modal_level_4_capex')
    var form_simpan_level_4_capex = $('#form_simpan_level_4_capex')
    var modal_excel_capex_4 = $('#modal_excel_capex_4');

    function modal_level_4_capex(id, type, type_add) {

        if (type == 'update_nilai_level_4_capex') {

        }
        if (type == 'tambah_level_4_capex') {

        }
        if (type == 'edit_level_4_capex') {

        }
        if (type == 'hapus_level_4_capex') {

        }

        if (type == 'urutan_level_4_capex') {

        }

        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_4_capex_add_1') {

        }
        if (type == 'update_nilai_level_4_capex_add_1') {

        }
        if (type == 'update_nilai_level_4_capex_add_2') {

        }
        if (type == 'update_nilai_level_4_capex_add_3') {

        }
        if (type == 'update_nilai_level_4_capex_add_4') {

        }
        if (type == 'update_nilai_level_4_capex_add_5') {

        }
        if (type == 'update_nilai_level_4_capex_add_6') {

        }
        if (type == 'update_nilai_level_4_capex_add_7') {

        }
        if (type == 'update_nilai_level_4_capex_add_8') {

        }
        if (type == 'update_nilai_level_4_capex_add_9') {

        }
        if (type == 'update_nilai_level_4_capex_add_10') {

        }
        if (type == 'update_nilai_level_4_capex_add_11') {

        }
        if (type == 'update_nilai_level_4_capex_add_12') {

        }
        if (type == 'update_nilai_level_4_capex_add_13') {

        }
        if (type == 'update_nilai_level_4_capex_add_14') {

        }
        if (type == 'update_nilai_level_4_capex_add_15') {

        }
        if (type == 'update_nilai_level_4_capex_add_16') {

        }
        if (type == 'update_nilai_level_4_capex_add_17') {

        }
        if (type == 'update_nilai_level_4_capex_add_18') {

        }
        if (type == 'update_nilai_level_4_capex_add_19') {

        }
        if (type == 'update_nilai_level_4_capex_add_20') {

        }
        if (type == 'update_nilai_level_4_capex_add_21') {

        }
        if (type == 'update_nilai_level_4_capex_add_22') {

        }
        if (type == 'update_nilai_level_4_capex_add_23') {

        }
        if (type == 'update_nilai_level_4_capex_add_24') {

        }
        if (type == 'update_nilai_level_4_capex_add_25') {

        }
        if (type == 'update_nilai_level_4_capex_add_26') {

        }
        if (type == 'update_nilai_level_4_capex_add_27') {

        }
        if (type == 'update_nilai_level_4_capex_add_28') {

        }
        if (type == 'update_nilai_level_4_capex_add_29') {

        }
        if (type == 'update_nilai_level_4_capex_add_30') {

        }
        if (type == 'tambah_level_4_capex_excel') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_1/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_4_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_4.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 3')
                }
                if (type == 'update_nilai_level_4_capex') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_4_capex') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'none')
                    $('#button_update_nilai_level_4_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_4_capex').css('display', 'block')
                    $('#button_tambah_level_4_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('#title_modal_level_4_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_4_capex') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'none')
                    $('#button_update_nilai_level_4_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_4_capex').css('display', 'block')
                    $('#button_edit_level_4_capex').css('display', 'block')

                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_1'].nama_uraian_1_capex);
                    $('#title_modal_level_4_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_4_capex') {
                    Question_level_4_capex(type_add, response['row_capex_detail_1'].nama_uraian_1_capex, response['row_capex_detail_1'].id_detail_capex_1, response['row_capex_detail_1'].id_capex_detail)
                }

                if (type == 'urutan_level_4_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_1'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_1'][i].id_detail_capex_1 + ',1.2' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_1'][i].no_urut_1_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_1'][i].nama_uraian_1_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                if (type == 'update_nilai_level_4_capex_add_1') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_I);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_4_capex_add_2') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_II);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_4_capex_add_3') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_III);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_4_capex_add_4') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_IV);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_4_capex_add_5') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_V);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_4_capex_add_6') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_VI);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_4_capex_add_7') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_VII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_4_capex_add_8') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_VIII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_4_capex_add_9') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_IX);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_4_capex_add_10') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_X);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_4_capex_add_11') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XI);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_4_capex_add_12') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_4_capex_add_13') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XIII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_4_capex_add_14') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XIV);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_4_capex_add_15') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XV);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_4_capex_add_16') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XVI);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_4_capex_add_17') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XVII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_4_capex_add_18') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XVIII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_4_capex_add_19') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XIX);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_4_capex_add_20') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XX);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_4_capex_add_21') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXI);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_4_capex_add_22') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_4_capex_add_23') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXIII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_4_capex_add_24') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXIV);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_4_capex_add_25') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXV);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_4_capex_add_26') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXVI);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_4_capex_add_27') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXVII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_4_capex_add_28') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXVIII);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_4_capex_add_29') {
                    form_modal_level_4_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXIX);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_4_capex_add_30') {
                    form_modal_level_4_capex.modal('show');
                    $('#form_input_nilai_level_4_capex').css('display', 'block')
                    $('#button_update_nilai_level_4_capex').css('display', 'block')
                    $('#form_tambah_level_4_capex').css('display', 'none')
                    $('#button_tambah_level_4_capex').css('display', 'none')
                    $('#button_edit_level_4_capex').css('display', 'none')
                    $('[name="id_detail_capex_1"]').val(response['row_capex_detail_1'].id_detail_capex_1);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_1"]').val(response['row_capex_detail_1'].nilai_capex_detail_1_add_XXX);
                    $('#title_modal_level_4_capex').text('Update Nilai Kontrak')
                }
            }
        })
    }




    function Simpan_level_4_capex(type) {
        if (type == 'update_nilai_level_4_capex') {
            saveData = 'update_nilai_level_4_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_4_capex') ?>";
        }
        if (type == 'tambah_level_4_capex') {
            saveData = 'tambah_level_4_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_4_capex') ?>";
        }
        if (type == 'edit_level_4_capex') {
            saveData = 'edit_level_4_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_4_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_4_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_4_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_4_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_4_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_4_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_4_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_4_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_4_capex(type_add, ket, id, id_capex_detail) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_4_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_capex_detail: id_capex_detail,
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


    $("#nilai_capex_detail_1").keyup(function() {
        var harga = $("#nilai_capex_detail_1").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_1_level_4_capex');
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

<!-- level 5 capex -->
<script>
    var form_modal_level_5_capex = $('#form_modal_level_5_capex')
    var form_simpan_level_5_capex = $('#form_simpan_level_5_capex')
    var modal_excel_capex_5 = $('#modal_excel_capex_5');

    function modal_level_5_capex(id, type, type_add) {

        if (type == 'update_nilai_level_5_capex') {

        }
        if (type == 'tambah_level_5_capex') {

        }
        if (type == 'edit_level_5_capex') {

        }
        if (type == 'hapus_level_5_capex') {

        }
        if (type == 'urutan_level_5_capex') {

        }

        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_5_capex_add_1') {

        }
        if (type == 'update_nilai_level_5_capex_add_1') {

        }
        if (type == 'update_nilai_level_5_capex_add_2') {

        }
        if (type == 'update_nilai_level_5_capex_add_3') {

        }
        if (type == 'update_nilai_level_5_capex_add_4') {

        }
        if (type == 'update_nilai_level_5_capex_add_5') {

        }
        if (type == 'update_nilai_level_5_capex_add_6') {

        }
        if (type == 'update_nilai_level_5_capex_add_7') {

        }
        if (type == 'update_nilai_level_5_capex_add_8') {

        }
        if (type == 'update_nilai_level_5_capex_add_9') {

        }
        if (type == 'update_nilai_level_5_capex_add_10') {

        }
        if (type == 'update_nilai_level_5_capex_add_11') {

        }
        if (type == 'update_nilai_level_5_capex_add_12') {

        }
        if (type == 'update_nilai_level_5_capex_add_13') {

        }
        if (type == 'update_nilai_level_5_capex_add_14') {

        }
        if (type == 'update_nilai_level_5_capex_add_15') {

        }
        if (type == 'update_nilai_level_5_capex_add_16') {

        }
        if (type == 'update_nilai_level_5_capex_add_17') {

        }
        if (type == 'update_nilai_level_5_capex_add_18') {

        }
        if (type == 'update_nilai_level_5_capex_add_19') {

        }
        if (type == 'update_nilai_level_5_capex_add_20') {

        }
        if (type == 'update_nilai_level_5_capex_add_21') {

        }
        if (type == 'update_nilai_level_5_capex_add_22') {

        }
        if (type == 'update_nilai_level_5_capex_add_23') {

        }
        if (type == 'update_nilai_level_5_capex_add_24') {

        }
        if (type == 'update_nilai_level_5_capex_add_25') {

        }
        if (type == 'update_nilai_level_5_capex_add_26') {

        }
        if (type == 'update_nilai_level_5_capex_add_27') {

        }
        if (type == 'update_nilai_level_5_capex_add_28') {

        }
        if (type == 'update_nilai_level_5_capex_add_29') {

        }
        if (type == 'update_nilai_level_5_capex_add_30') {

        }
        if (type == 'tambah_level_5_capex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_2/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_5_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_5.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 5')
                }
                if (type == 'update_nilai_level_5_capex') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_5_capex') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'none')
                    $('#button_update_nilai_level_5_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_5_capex').css('display', 'block')
                    $('#button_tambah_level_5_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('#title_modal_level_5_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_5_capex') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'none')
                    $('#button_update_nilai_level_5_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_5_capex').css('display', 'block')
                    $('#button_edit_level_5_capex').css('display', 'block')

                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_2'].nama_uraian_2_capex);
                    $('#title_modal_level_5_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_5_capex') {
                    Question_level_5_capex(type_add, response['row_capex_detail_2'].nama_uraian_2_capex, response['row_capex_detail_2'].id_detail_capex_2, response['row_capex_detail_2'].id_detail_capex_1)
                }
                // _2
                if (type == 'urutan_level_5_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_2'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_2'][i].id_detail_capex_2 + ',1.3' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_2'][i].no_urut_2_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_2'][i].nama_uraian_2_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_5
                // id_detail_capex_2
                // row_capex_detail_2
                // nilai_capex_detail_2
                if (type == 'update_nilai_level_5_capex_add_1') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_I);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_5_capex_add_2') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_II);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_5_capex_add_3') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_III);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_5_capex_add_4') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_IV);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_5_capex_add_5') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_V);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_5_capex_add_6') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_VI);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_5_capex_add_7') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_VII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_5_capex_add_8') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_VIII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_5_capex_add_9') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_IX);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_5_capex_add_10') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_X);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_5_capex_add_11') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XI);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_5_capex_add_12') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_5_capex_add_13') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XIII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_5_capex_add_14') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XIV);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_5_capex_add_15') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XV);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_5_capex_add_16') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XVI);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_5_capex_add_17') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XVII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_5_capex_add_18') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XVIII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_5_capex_add_19') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XIX);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_5_capex_add_20') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XX);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_5_capex_add_21') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXI);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_5_capex_add_22') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_5_capex_add_23') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXIII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_5_capex_add_24') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXIV);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_5_capex_add_25') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXV);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_5_capex_add_26') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXVI);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_5_capex_add_27') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXVII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_5_capex_add_28') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXVIII);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_5_capex_add_29') {
                    form_modal_level_5_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXIX);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_5_capex_add_30') {
                    form_modal_level_5_capex.modal('show');
                    $('#form_input_nilai_level_5_capex').css('display', 'block')
                    $('#button_update_nilai_level_5_capex').css('display', 'block')
                    $('#form_tambah_level_5_capex').css('display', 'none')
                    $('#button_tambah_level_5_capex').css('display', 'none')
                    $('#button_edit_level_5_capex').css('display', 'none')
                    $('[name="id_detail_capex_2"]').val(response['row_capex_detail_2'].id_detail_capex_2);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_2"]').val(response['row_capex_detail_2'].nilai_capex_detail_2_add_XXX);
                    $('#title_modal_level_5_capex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    // Level 5
    function Simpan_level_5_capex(type) {
        if (type == 'update_nilai_level_5_capex') {
            saveData = 'update_nilai_level_5_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_5_capex') ?>";
        }
        if (type == 'tambah_level_5_capex') {
            saveData = 'tambah_level_5_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_5_capex') ?>";
        }
        if (type == 'edit_level_5_capex') {
            saveData = 'edit_level_5_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_5_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_5_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_5_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_5_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_5_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_5_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_5_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_5_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_5_capex(type_add, ket, id, id_detail_capex_1) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_5_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_1: id_detail_capex_1,
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


    $("#nilai_capex_detail_2").keyup(function() {
        var harga = $("#nilai_capex_detail_2").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_2_level_5_capex');
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

<!-- level 6 capex -->
<script>
    var form_modal_level_6_capex = $('#form_modal_level_6_capex')
    var form_simpan_level_6_capex = $('#form_simpan_level_6_capex')
    var modal_excel_capex_6 = $('#modal_excel_capex_6');

    function modal_level_6_capex(id, type, type_add) {

        if (type == 'update_nilai_level_6_capex') {

        }
        if (type == 'tambah_level_6_capex') {

        }
        if (type == 'edit_level_6_capex') {

        }
        if (type == 'hapus_level_6_capex') {

        }
        if (type == 'urutan_level_6_capex') {

        }


        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_6_capex_add_1') {

        }
        if (type == 'update_nilai_level_6_capex_add_1') {

        }
        if (type == 'update_nilai_level_6_capex_add_2') {

        }
        if (type == 'update_nilai_level_6_capex_add_3') {

        }
        if (type == 'update_nilai_level_6_capex_add_4') {

        }
        if (type == 'update_nilai_level_6_capex_add_5') {

        }
        if (type == 'update_nilai_level_6_capex_add_6') {

        }
        if (type == 'update_nilai_level_6_capex_add_7') {

        }
        if (type == 'update_nilai_level_6_capex_add_8') {

        }
        if (type == 'update_nilai_level_6_capex_add_9') {

        }
        if (type == 'update_nilai_level_6_capex_add_10') {

        }
        if (type == 'update_nilai_level_6_capex_add_11') {

        }
        if (type == 'update_nilai_level_6_capex_add_12') {

        }
        if (type == 'update_nilai_level_6_capex_add_13') {

        }
        if (type == 'update_nilai_level_6_capex_add_14') {

        }
        if (type == 'update_nilai_level_6_capex_add_15') {

        }
        if (type == 'update_nilai_level_6_capex_add_16') {

        }
        if (type == 'update_nilai_level_6_capex_add_17') {

        }
        if (type == 'update_nilai_level_6_capex_add_18') {

        }
        if (type == 'update_nilai_level_6_capex_add_19') {

        }
        if (type == 'update_nilai_level_6_capex_add_20') {

        }
        if (type == 'update_nilai_level_6_capex_add_21') {

        }
        if (type == 'update_nilai_level_6_capex_add_22') {

        }
        if (type == 'update_nilai_level_6_capex_add_23') {

        }
        if (type == 'update_nilai_level_6_capex_add_24') {

        }
        if (type == 'update_nilai_level_6_capex_add_25') {

        }
        if (type == 'update_nilai_level_6_capex_add_26') {

        }
        if (type == 'update_nilai_level_6_capex_add_27') {

        }
        if (type == 'update_nilai_level_6_capex_add_28') {

        }
        if (type == 'update_nilai_level_6_capex_add_29') {

        }
        if (type == 'update_nilai_level_6_capex_add_30') {

        }

        if (type == 'tambah_level_6_capex_excel') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_3/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_6_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_6.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 6')
                }

                if (type == 'update_nilai_level_6_capex') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_6_capex') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'none')
                    $('#button_update_nilai_level_6_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_6_capex').css('display', 'block')
                    $('#button_tambah_level_6_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('#title_modal_level_6_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_6_capex') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'none')
                    $('#button_update_nilai_level_6_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_6_capex').css('display', 'block')
                    $('#button_edit_level_6_capex').css('display', 'block')

                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_3'].nama_uraian_3_capex);
                    $('#title_modal_level_6_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_6_capex') {
                    Question_level_6_capex(type_add, response['row_capex_detail_3'].nama_uraian_3_capex, response['row_capex_detail_3'].id_detail_capex_3, response['row_capex_detail_3'].id_detail_capex_2)
                }
                // _3
                if (type == 'urutan_level_6_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_3'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_3'][i].id_detail_capex_3 + ',1.4' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_3'][i].no_urut_3_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_3'][i].nama_uraian_3_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_6
                // id_detail_capex_3
                // row_capex_detail_3
                // nilai_capex_detail_3
                if (type == 'update_nilai_level_6_capex_add_1') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_I);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_6_capex_add_2') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_II);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_6_capex_add_3') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_III);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_6_capex_add_4') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_IV);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_6_capex_add_5') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_V);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_6_capex_add_6') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_VI);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_6_capex_add_7') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_VII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_6_capex_add_8') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_VIII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_6_capex_add_9') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_IX);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_6_capex_add_10') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_X);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_6_capex_add_11') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XI);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_6_capex_add_12') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_6_capex_add_13') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XIII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_6_capex_add_14') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XIV);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_6_capex_add_15') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XV);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_6_capex_add_16') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XVI);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_6_capex_add_17') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XVII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_6_capex_add_18') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XVIII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_6_capex_add_19') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XIX);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_6_capex_add_20') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XX);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_6_capex_add_21') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXI);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_6_capex_add_22') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_6_capex_add_23') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXIII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_6_capex_add_24') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXIV);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_6_capex_add_25') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXV);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_6_capex_add_26') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXVI);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_6_capex_add_27') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXVII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_6_capex_add_28') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXVIII);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_6_capex_add_29') {
                    form_modal_level_6_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_2'].nilai_capex_detail_3_add_XXIX);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_6_capex_add_30') {
                    form_modal_level_6_capex.modal('show');
                    $('#form_input_nilai_level_6_capex').css('display', 'block')
                    $('#button_update_nilai_level_6_capex').css('display', 'block')
                    $('#form_tambah_level_6_capex').css('display', 'none')
                    $('#button_tambah_level_6_capex').css('display', 'none')
                    $('#button_edit_level_6_capex').css('display', 'none')
                    $('[name="id_detail_capex_3"]').val(response['row_capex_detail_3'].id_detail_capex_3);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_3"]').val(response['row_capex_detail_3'].nilai_capex_detail_3_add_XXX);
                    $('#title_modal_level_6_capex').text('Update Nilai Kontrak')
                }


            }
        })
    }



    function Simpan_level_6_capex(type) {
        if (type == 'update_nilai_level_6_capex') {
            saveData = 'update_nilai_level_6_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_6_capex') ?>";
        }
        if (type == 'tambah_level_6_capex') {
            saveData = 'tambah_level_6_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_6_capex') ?>";
        }
        if (type == 'edit_level_6_capex') {
            saveData = 'edit_level_6_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_6_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_6_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_6_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_6_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_6_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_6_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_6_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_6_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_6_capex(type_add, ket, id, id_detail_capex_2) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_6_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_2: id_detail_capex_2,
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


    $("#nilai_capex_detail_3").keyup(function() {
        var harga = $("#nilai_capex_detail_3").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_3_level_6_capex');
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

<!-- Level 7 capex -->
<script>
    var form_modal_level_7_capex = $('#form_modal_level_7_capex')
    var form_simpan_level_7_capex = $('#form_simpan_level_7_capex')
    var modal_excel_capex_7 = $('#modal_excel_capex_7');

    function modal_level_7_capex(id, type, type_add) {

        if (type == 'update_nilai_level_7_capex') {

        }
        if (type == 'tambah_level_7_capex') {

        }
        if (type == 'edit_level_7_capex') {

        }
        if (type == 'hapus_level_7_capex') {

        }
        if (type == 'urutan_level_7_capex') {

        }

        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_7_capex_add_1') {

        }
        if (type == 'update_nilai_level_7_capex_add_1') {

        }
        if (type == 'update_nilai_level_7_capex_add_2') {

        }
        if (type == 'update_nilai_level_7_capex_add_3') {

        }
        if (type == 'update_nilai_level_7_capex_add_4') {

        }
        if (type == 'update_nilai_level_7_capex_add_5') {

        }
        if (type == 'update_nilai_level_7_capex_add_6') {

        }
        if (type == 'update_nilai_level_7_capex_add_7') {

        }
        if (type == 'update_nilai_level_7_capex_add_8') {

        }
        if (type == 'update_nilai_level_7_capex_add_9') {

        }
        if (type == 'update_nilai_level_7_capex_add_10') {

        }
        if (type == 'update_nilai_level_7_capex_add_11') {

        }
        if (type == 'update_nilai_level_7_capex_add_12') {

        }
        if (type == 'update_nilai_level_7_capex_add_13') {

        }
        if (type == 'update_nilai_level_7_capex_add_14') {

        }
        if (type == 'update_nilai_level_7_capex_add_15') {

        }
        if (type == 'update_nilai_level_7_capex_add_16') {

        }
        if (type == 'update_nilai_level_7_capex_add_17') {

        }
        if (type == 'update_nilai_level_7_capex_add_18') {

        }
        if (type == 'update_nilai_level_7_capex_add_19') {

        }
        if (type == 'update_nilai_level_7_capex_add_20') {

        }
        if (type == 'update_nilai_level_7_capex_add_21') {

        }
        if (type == 'update_nilai_level_7_capex_add_22') {

        }
        if (type == 'update_nilai_level_7_capex_add_23') {

        }
        if (type == 'update_nilai_level_7_capex_add_24') {

        }
        if (type == 'update_nilai_level_7_capex_add_25') {

        }
        if (type == 'update_nilai_level_7_capex_add_26') {

        }
        if (type == 'update_nilai_level_7_capex_add_27') {

        }
        if (type == 'update_nilai_level_7_capex_add_28') {

        }
        if (type == 'update_nilai_level_7_capex_add_29') {

        }
        if (type == 'update_nilai_level_7_capex_add_30') {

        }

        if (type == 'tambah_level_7_capex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_4/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_7_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_7.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 7')
                }

                if (type == 'update_nilai_level_7_capex') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_7_capex') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'none')
                    $('#button_update_nilai_level_7_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_7_capex').css('display', 'block')
                    $('#button_tambah_level_7_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('#title_modal_level_7_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_7_capex') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'none')
                    $('#button_update_nilai_level_7_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_7_capex').css('display', 'block')
                    $('#button_edit_level_7_capex').css('display', 'block')

                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_4'].nama_uraian_4_capex);
                    $('#title_modal_level_7_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_7_capex') {
                    Question_level_7_capex(type_add, response['row_capex_detail_4'].nama_uraian_4_capex, response['row_capex_detail_4'].id_detail_capex_4, response['row_capex_detail_4'].id_detail_capex_3)
                }

                // _4
                if (type == 'urutan_level_7_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_4'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_4'][i].id_detail_capex_4 + ',1.5' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_4'][i].no_urut_4_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_4'][i].nama_uraian_4_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_7
                // id_detail_capex_4
                // row_capex_detail_4
                // nilai_capex_detail_4
                if (type == 'update_nilai_level_7_capex_add_1') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_I);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_7_capex_add_2') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_II);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_7_capex_add_3') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_III);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_7_capex_add_4') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_IV);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_7_capex_add_5') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_V);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_7_capex_add_6') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_VI);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_7_capex_add_7') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_VII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_7_capex_add_8') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_VIII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_7_capex_add_9') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_IX);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_7_capex_add_10') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_X);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_7_capex_add_11') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XI);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_7_capex_add_12') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_7_capex_add_13') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XIII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_7_capex_add_14') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XIV);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_7_capex_add_15') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XV);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_7_capex_add_16') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XVI);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_7_capex_add_17') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XVII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_7_capex_add_18') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XVIII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_7_capex_add_19') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XIX);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_7_capex_add_20') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XX);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_7_capex_add_21') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXI);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_7_capex_add_22') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_7_capex_add_23') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXIII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_7_capex_add_24') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXIV);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_7_capex_add_25') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXV);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_7_capex_add_26') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXVI);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_7_capex_add_27') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXVII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_7_capex_add_28') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXVIII);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_7_capex_add_29') {
                    form_modal_level_7_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_2'].nilai_capex_detail_4_add_XXIX);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_7_capex_add_30') {
                    form_modal_level_7_capex.modal('show');
                    $('#form_input_nilai_level_7_capex').css('display', 'block')
                    $('#button_update_nilai_level_7_capex').css('display', 'block')
                    $('#form_tambah_level_7_capex').css('display', 'none')
                    $('#button_tambah_level_7_capex').css('display', 'none')
                    $('#button_edit_level_7_capex').css('display', 'none')
                    $('[name="id_detail_capex_4"]').val(response['row_capex_detail_4'].id_detail_capex_4);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_4"]').val(response['row_capex_detail_4'].nilai_capex_detail_4_add_XXX);
                    $('#title_modal_level_7_capex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    function Simpan_level_7_capex(type) {
        if (type == 'update_nilai_level_7_capex') {
            saveData = 'update_nilai_level_7_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_7_capex') ?>";
        }
        if (type == 'tambah_level_7_capex') {
            saveData = 'tambah_level_7_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_7_capex') ?>";
        }
        if (type == 'edit_level_7_capex') {
            saveData = 'edit_level_7_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_7_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_7_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_7_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_7_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_7_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_7_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_7_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_7_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_7_capex(type_add, ket, id, id_detail_capex_3) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_7_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_3: id_detail_capex_3,
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


    $("#nilai_capex_detail_4").keyup(function() {
        var harga = $("#nilai_capex_detail_4").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_4_level_7_capex');
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

<!-- Level 8 capex -->
<script>
    var form_modal_level_8_capex = $('#form_modal_level_8_capex')
    var form_simpan_level_8_capex = $('#form_simpan_level_8_capex')
    var modal_excel_capex_8 = $('#modal_excel_capex_8');

    function modal_level_8_capex(id, type, type_add) {

        if (type == 'update_nilai_level_8_capex') {

        }
        if (type == 'tambah_level_8_capex') {

        }
        if (type == 'edit_level_8_capex') {

        }
        if (type == 'hapus_level_8_capex') {

        }

        if (type == 'urutan_level_8_capex') {

        }
        // level_8
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_8_capex_add_1') {

        }
        if (type == 'update_nilai_level_8_capex_add_1') {

        }
        if (type == 'update_nilai_level_8_capex_add_2') {

        }
        if (type == 'update_nilai_level_8_capex_add_3') {

        }
        if (type == 'update_nilai_level_8_capex_add_4') {

        }
        if (type == 'update_nilai_level_8_capex_add_5') {

        }
        if (type == 'update_nilai_level_8_capex_add_6') {

        }
        if (type == 'update_nilai_level_8_capex_add_7') {

        }
        if (type == 'update_nilai_level_8_capex_add_8') {

        }
        if (type == 'update_nilai_level_8_capex_add_9') {

        }
        if (type == 'update_nilai_level_8_capex_add_10') {

        }
        if (type == 'update_nilai_level_8_capex_add_11') {

        }
        if (type == 'update_nilai_level_8_capex_add_12') {

        }
        if (type == 'update_nilai_level_8_capex_add_13') {

        }
        if (type == 'update_nilai_level_8_capex_add_14') {

        }
        if (type == 'update_nilai_level_8_capex_add_15') {

        }
        if (type == 'update_nilai_level_8_capex_add_16') {

        }
        if (type == 'update_nilai_level_8_capex_add_17') {

        }
        if (type == 'update_nilai_level_8_capex_add_18') {

        }
        if (type == 'update_nilai_level_8_capex_add_19') {

        }
        if (type == 'update_nilai_level_8_capex_add_20') {

        }
        if (type == 'update_nilai_level_8_capex_add_21') {

        }
        if (type == 'update_nilai_level_8_capex_add_22') {

        }
        if (type == 'update_nilai_level_8_capex_add_23') {

        }
        if (type == 'update_nilai_level_8_capex_add_24') {

        }
        if (type == 'update_nilai_level_8_capex_add_25') {

        }
        if (type == 'update_nilai_level_8_capex_add_26') {

        }
        if (type == 'update_nilai_level_8_capex_add_27') {

        }
        if (type == 'update_nilai_level_8_capex_add_28') {

        }
        if (type == 'update_nilai_level_8_capex_add_29') {

        }
        if (type == 'update_nilai_level_8_capex_add_30') {

        }

        if (type == 'tambah_level_8_capex_excel') {

        }
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_5/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {


                if (type == 'tambah_level_8_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_8.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 8')
                }

                if (type == 'update_nilai_level_8_capex') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_8_capex') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'none')
                    $('#button_update_nilai_level_8_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_8_capex').css('display', 'block')
                    $('#button_tambah_level_8_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('#title_modal_level_8_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_8_capex') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'none')
                    $('#button_update_nilai_level_8_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_8_capex').css('display', 'block')
                    $('#button_edit_level_8_capex').css('display', 'block')

                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_5'].nama_uraian_5_capex);
                    $('#title_modal_level_8_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_8_capex') {
                    Question_level_8_capex(type_add, response['row_capex_detail_5'].nama_uraian_5_capex, response['row_capex_detail_5'].id_detail_capex_5, response['row_capex_detail_5'].id_detail_capex_4)
                }

                // _5
                if (type == 'urutan_level_8_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_5'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_5'][i].id_detail_capex_5 + ',1.6' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_5'][i].no_urut_5_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_5'][i].nama_uraian_5_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_8
                // id_detail_capex_5
                // row_capex_detail_5
                // nilai_capex_detail_5
                if (type == 'update_nilai_level_8_capex_add_1') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_I);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_8_capex_add_2') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_II);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_8_capex_add_3') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_III);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_8_capex_add_4') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_IV);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_8_capex_add_5') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_V);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_8_capex_add_6') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_VI);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_8_capex_add_7') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_VII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_8_capex_add_8') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_VIII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_8_capex_add_9') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_IX);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_8_capex_add_10') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_X);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_8_capex_add_11') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XI);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_8_capex_add_12') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_8_capex_add_13') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XIII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_8_capex_add_14') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XIV);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_8_capex_add_15') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XV);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_8_capex_add_16') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XVI);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_8_capex_add_17') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XVII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_8_capex_add_18') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XVIII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_8_capex_add_19') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XIX);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_8_capex_add_20') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XX);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_8_capex_add_21') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXI);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_8_capex_add_22') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_8_capex_add_23') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXIII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_8_capex_add_24') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXIV);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_8_capex_add_25') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXV);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_8_capex_add_26') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXVI);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_8_capex_add_27') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXVII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_8_capex_add_28') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXVIII);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_8_capex_add_29') {
                    form_modal_level_8_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_2'].nilai_capex_detail_5_add_XXIX);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_8_capex_add_30') {
                    form_modal_level_8_capex.modal('show');
                    $('#form_input_nilai_level_8_capex').css('display', 'block')
                    $('#button_update_nilai_level_8_capex').css('display', 'block')
                    $('#form_tambah_level_8_capex').css('display', 'none')
                    $('#button_tambah_level_8_capex').css('display', 'none')
                    $('#button_edit_level_8_capex').css('display', 'none')
                    $('[name="id_detail_capex_5"]').val(response['row_capex_detail_5'].id_detail_capex_5);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_5"]').val(response['row_capex_detail_5'].nilai_capex_detail_5_add_XXX);
                    $('#title_modal_level_8_capex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    function Simpan_level_8_capex(type) {
        if (type == 'update_nilai_level_8_capex') {
            saveData = 'update_nilai_level_8_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_8_capex') ?>";
        }
        if (type == 'tambah_level_8_capex') {
            saveData = 'tambah_level_8_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_8_capex') ?>";
        }
        if (type == 'edit_level_8_capex') {
            saveData = 'edit_level_8_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_8_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_8_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_8_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_8_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_8_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_8_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_8_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_8_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_8_capex(type_add, ket, id, id_detail_capex_4) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_8_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_4: id_detail_capex_4,
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


    $("#nilai_capex_detail_5").keyup(function() {
        var harga = $("#nilai_capex_detail_5").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_5_level_8_capex');
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

<!-- Level 9 capex -->
<script>
    var form_modal_level_9_capex = $('#form_modal_level_9_capex')
    var form_simpan_level_9_capex = $('#form_simpan_level_9_capex')
    var modal_excel_capex_9 = $('#modal_excel_capex_9');


    function modal_level_9_capex(id, type, type_add) {

        if (type == 'update_nilai_level_9_capex') {

        }
        if (type == 'tambah_level_9_capex') {

        }
        if (type == 'edit_level_9_capex') {

        }
        if (type == 'hapus_level_9_capex') {

        }

        if (type == 'urutan_level_9_capex') {

        }

        // level_9
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_9_capex_add_1') {

        }
        if (type == 'update_nilai_level_9_capex_add_1') {

        }
        if (type == 'update_nilai_level_9_capex_add_2') {

        }
        if (type == 'update_nilai_level_9_capex_add_3') {

        }
        if (type == 'update_nilai_level_9_capex_add_4') {

        }
        if (type == 'update_nilai_level_9_capex_add_5') {

        }
        if (type == 'update_nilai_level_9_capex_add_6') {

        }
        if (type == 'update_nilai_level_9_capex_add_7') {

        }
        if (type == 'update_nilai_level_9_capex_add_8') {

        }
        if (type == 'update_nilai_level_9_capex_add_9') {

        }
        if (type == 'update_nilai_level_9_capex_add_10') {

        }
        if (type == 'update_nilai_level_9_capex_add_11') {

        }
        if (type == 'update_nilai_level_9_capex_add_12') {

        }
        if (type == 'update_nilai_level_9_capex_add_13') {

        }
        if (type == 'update_nilai_level_9_capex_add_14') {

        }
        if (type == 'update_nilai_level_9_capex_add_15') {

        }
        if (type == 'update_nilai_level_9_capex_add_16') {

        }
        if (type == 'update_nilai_level_9_capex_add_17') {

        }
        if (type == 'update_nilai_level_9_capex_add_18') {

        }
        if (type == 'update_nilai_level_9_capex_add_19') {

        }
        if (type == 'update_nilai_level_9_capex_add_20') {

        }
        if (type == 'update_nilai_level_9_capex_add_21') {

        }
        if (type == 'update_nilai_level_9_capex_add_22') {

        }
        if (type == 'update_nilai_level_9_capex_add_23') {

        }
        if (type == 'update_nilai_level_9_capex_add_24') {

        }
        if (type == 'update_nilai_level_9_capex_add_25') {

        }
        if (type == 'update_nilai_level_9_capex_add_26') {

        }
        if (type == 'update_nilai_level_9_capex_add_27') {

        }
        if (type == 'update_nilai_level_9_capex_add_28') {

        }
        if (type == 'update_nilai_level_9_capex_add_29') {

        }
        if (type == 'update_nilai_level_9_capex_add_30') {

        }

        if (type == 'tambah_level_9_capex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_6/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_9_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_9.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 9')
                }

                if (type == 'update_nilai_level_9_capex') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_9_capex') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'none')
                    $('#button_update_nilai_level_9_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_9_capex').css('display', 'block')
                    $('#button_tambah_level_9_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('#title_modal_level_9_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_9_capex') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'none')
                    $('#button_update_nilai_level_9_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_9_capex').css('display', 'block')
                    $('#button_edit_level_9_capex').css('display', 'block')

                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_6'].nama_uraian_6_capex);
                    $('#title_modal_level_9_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_9_capex') {
                    Question_level_9_capex(type_add, response['row_capex_detail_6'].nama_uraian_6_capex, response['row_capex_detail_6'].id_detail_capex_6, response['row_capex_detail_6'].id_detail_capex_5)
                }

                // _6
                // _9
                if (type == 'urutan_level_9_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_6'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_6'][i].id_detail_capex_6 + ',1.7' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_6'][i].no_urut_6_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_6'][i].nama_uraian_6_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }


                // INI UTNUK ADDENDUM 1
                // level_9
                // id_detail_capex_6
                // row_capex_detail_6
                // nilai_capex_detail_6
                if (type == 'update_nilai_level_9_capex_add_1') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_I);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_9_capex_add_2') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_II);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_9_capex_add_3') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_III);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_9_capex_add_4') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_IV);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_9_capex_add_5') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_V);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_9_capex_add_6') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_VI);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_9_capex_add_7') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_VII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_9_capex_add_8') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_VIII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_9_capex_add_9') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_IX);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_9_capex_add_10') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_X);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_9_capex_add_11') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XI);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_9_capex_add_12') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_9_capex_add_13') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XIII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_9_capex_add_14') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XIV);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_9_capex_add_15') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XV);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_9_capex_add_16') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XVI);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_9_capex_add_17') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XVII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_9_capex_add_18') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XVIII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_9_capex_add_19') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XIX);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_9_capex_add_20') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XX);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_9_capex_add_21') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXI);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_9_capex_add_22') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_9_capex_add_23') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXIII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_9_capex_add_24') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXIV);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_9_capex_add_25') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXV);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_9_capex_add_26') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXVI);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_9_capex_add_27') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXVII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_9_capex_add_28') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXVIII);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_9_capex_add_29') {
                    form_modal_level_9_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_2'].nilai_capex_detail_6_add_XXIX);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_9_capex_add_30') {
                    form_modal_level_9_capex.modal('show');
                    $('#form_input_nilai_level_9_capex').css('display', 'block')
                    $('#button_update_nilai_level_9_capex').css('display', 'block')
                    $('#form_tambah_level_9_capex').css('display', 'none')
                    $('#button_tambah_level_9_capex').css('display', 'none')
                    $('#button_edit_level_9_capex').css('display', 'none')
                    $('[name="id_detail_capex_6"]').val(response['row_capex_detail_6'].id_detail_capex_6);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_6"]').val(response['row_capex_detail_6'].nilai_capex_detail_6_add_XXX);
                    $('#title_modal_level_9_capex').text('Update Nilai Kontrak')
                }

            }
        })
    }



    function Simpan_level_9_capex(type) {
        if (type == 'update_nilai_level_9_capex') {
            saveData = 'update_nilai_level_9_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_9_capex') ?>";
        }
        if (type == 'tambah_level_9_capex') {
            saveData = 'tambah_level_9_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_9_capex') ?>";
        }
        if (type == 'edit_level_9_capex') {
            saveData = 'edit_level_9_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_9_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_9_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_9_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_9_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_9_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_9_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_9_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_9_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_9_capex(type_add, ket, id, id_detail_capex_5) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_9_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_5: id_detail_capex_5,
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


    $("#nilai_capex_detail_6").keyup(function() {
        var harga = $("#nilai_capex_detail_6").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_6_level_9_capex');
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

<!-- Level 10 capex -->
<script>
    var form_modal_level_10_capex = $('#form_modal_level_10_capex')
    var form_simpan_level_10_capex = $('#form_simpan_level_10_capex')
    var modal_excel_capex_10 = $('#modal_excel_capex_10');

    function modal_level_10_capex(id, type, type_add) {

        if (type == 'update_nilai_level_10_capex') {

        }
        if (type == 'tambah_level_10_capex') {

        }
        if (type == 'edit_level_10_capex') {

        }
        if (type == 'hapus_level_10_capex') {

        }
        if (type == 'urutan_level_10_capex') {

        }

        // level_10
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_10_capex_add_1') {

        }
        if (type == 'update_nilai_level_10_capex_add_1') {

        }
        if (type == 'update_nilai_level_10_capex_add_2') {

        }
        if (type == 'update_nilai_level_10_capex_add_3') {

        }
        if (type == 'update_nilai_level_10_capex_add_4') {

        }
        if (type == 'update_nilai_level_10_capex_add_5') {

        }
        if (type == 'update_nilai_level_10_capex_add_6') {

        }
        if (type == 'update_nilai_level_10_capex_add_7') {

        }
        if (type == 'update_nilai_level_10_capex_add_8') {

        }
        if (type == 'update_nilai_level_10_capex_add_9') {

        }
        if (type == 'update_nilai_level_10_capex_add_10') {

        }
        if (type == 'update_nilai_level_10_capex_add_11') {

        }
        if (type == 'update_nilai_level_10_capex_add_12') {

        }
        if (type == 'update_nilai_level_10_capex_add_13') {

        }
        if (type == 'update_nilai_level_10_capex_add_14') {

        }
        if (type == 'update_nilai_level_10_capex_add_15') {

        }
        if (type == 'update_nilai_level_10_capex_add_16') {

        }
        if (type == 'update_nilai_level_10_capex_add_17') {

        }
        if (type == 'update_nilai_level_10_capex_add_18') {

        }
        if (type == 'update_nilai_level_10_capex_add_19') {

        }
        if (type == 'update_nilai_level_10_capex_add_20') {

        }
        if (type == 'update_nilai_level_10_capex_add_21') {

        }
        if (type == 'update_nilai_level_10_capex_add_22') {

        }
        if (type == 'update_nilai_level_10_capex_add_23') {

        }
        if (type == 'update_nilai_level_10_capex_add_24') {

        }
        if (type == 'update_nilai_level_10_capex_add_25') {

        }
        if (type == 'update_nilai_level_10_capex_add_26') {

        }
        if (type == 'update_nilai_level_10_capex_add_27') {

        }
        if (type == 'update_nilai_level_10_capex_add_28') {

        }
        if (type == 'update_nilai_level_10_capex_add_29') {

        }
        if (type == 'update_nilai_level_10_capex_add_30') {

        }
        if (type == 'tambah_level_10_capex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_7/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {

                if (type == 'tambah_level_10_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_10.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 10')
                }

                if (type == 'update_nilai_level_10_capex') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_10_capex') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'none')
                    $('#button_update_nilai_level_10_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_10_capex').css('display', 'block')
                    $('#button_tambah_level_10_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('#title_modal_level_10_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_10_capex') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'none')
                    $('#button_update_nilai_level_10_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_10_capex').css('display', 'block')
                    $('#button_edit_level_10_capex').css('display', 'block')

                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_7'].nama_uraian_7_capex);
                    $('#title_modal_level_10_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_10_capex') {
                    Question_level_10_capex(type_add, response['row_capex_detail_7'].nama_uraian_7_capex, response['row_capex_detail_7'].id_detail_capex_7, response['row_capex_detail_7'].id_detail_capex_6)
                }

                // _7
                // _10
                if (type == 'urutan_level_10_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_7'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_7'][i].id_detail_capex_7 + ',1.8' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_7'][i].no_urut_7_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_7'][i].nama_uraian_7_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_10
                // id_detail_capex_7
                // row_capex_detail_7
                // nilai_capex_detail_7
                if (type == 'update_nilai_level_10_capex_add_1') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_I);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_10_capex_add_2') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_II);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_10_capex_add_3') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_III);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_10_capex_add_4') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_IV);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_10_capex_add_5') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_V);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_10_capex_add_6') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_VI);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_10_capex_add_7') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_VII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_10_capex_add_8') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_VIII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_10_capex_add_9') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_IX);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_10_capex_add_10') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_X);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_10_capex_add_11') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XI);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_10_capex_add_12') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_10_capex_add_13') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XIII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_10_capex_add_14') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XIV);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_10_capex_add_15') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XV);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_10_capex_add_16') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XVI);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_10_capex_add_17') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XVII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_10_capex_add_18') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XVIII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_10_capex_add_19') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XIX);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_10_capex_add_20') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XX);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_10_capex_add_21') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXI);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_10_capex_add_22') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_10_capex_add_23') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXIII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_10_capex_add_24') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXIV);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_10_capex_add_25') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXV);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_10_capex_add_26') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXVI);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_10_capex_add_27') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXVII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_10_capex_add_28') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXVIII);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_10_capex_add_29') {
                    form_modal_level_10_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_2'].nilai_capex_detail_7_add_XXIX);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_10_capex_add_30') {
                    form_modal_level_10_capex.modal('show');
                    $('#form_input_nilai_level_10_capex').css('display', 'block')
                    $('#button_update_nilai_level_10_capex').css('display', 'block')
                    $('#form_tambah_level_10_capex').css('display', 'none')
                    $('#button_tambah_level_10_capex').css('display', 'none')
                    $('#button_edit_level_10_capex').css('display', 'none')
                    $('[name="id_detail_capex_7"]').val(response['row_capex_detail_7'].id_detail_capex_7);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_7"]').val(response['row_capex_detail_7'].nilai_capex_detail_7_add_XXX);
                    $('#title_modal_level_10_capex').text('Update Nilai Kontrak')
                }
            }
        })
    }



    function Simpan_level_10_capex(type) {
        if (type == 'update_nilai_level_10_capex') {
            saveData = 'update_nilai_level_10_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_10_capex') ?>";
        }
        if (type == 'tambah_level_10_capex') {
            saveData = 'tambah_level_10_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_10_capex') ?>";
        }
        if (type == 'edit_level_10_capex') {
            saveData = 'edit_level_10_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_10_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_10_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_10_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_10_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_10_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_10_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_10_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_10_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_10_capex(type_add, ket, id, id_detail_capex_6) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_10_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_6: id_detail_capex_6,
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


    $("#nilai_capex_detail_7").keyup(function() {
        var harga = $("#nilai_capex_detail_7").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_7_level_10_capex');
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

<!-- Level 11 capex -->
<script>
    var form_modal_level_11_capex = $('#form_modal_level_11_capex')
    var form_simpan_level_11_capex = $('#form_simpan_level_11_capex')
    var modal_excel_capex_11 = $('#modal_excel_capex_11');

    function modal_level_11_capex(id, type, type_add) {

        if (type == 'update_nilai_level_11_capex') {

        }
        if (type == 'tambah_level_11_capex') {

        }
        if (type == 'edit_level_11_capex') {

        }
        if (type == 'hapus_level_11_capex') {

        }

        if (type == 'urutan_level_11_capex') {

        }

        // level_11
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_11_capex_add_1') {

        }
        if (type == 'update_nilai_level_11_capex_add_1') {

        }
        if (type == 'update_nilai_level_11_capex_add_2') {

        }
        if (type == 'update_nilai_level_11_capex_add_3') {

        }
        if (type == 'update_nilai_level_11_capex_add_4') {

        }
        if (type == 'update_nilai_level_11_capex_add_5') {

        }
        if (type == 'update_nilai_level_11_capex_add_6') {

        }
        if (type == 'update_nilai_level_11_capex_add_7') {

        }
        if (type == 'update_nilai_level_11_capex_add_8') {

        }
        if (type == 'update_nilai_level_11_capex_add_9') {

        }
        if (type == 'update_nilai_level_11_capex_add_10') {

        }
        if (type == 'update_nilai_level_11_capex_add_11') {

        }
        if (type == 'update_nilai_level_11_capex_add_12') {

        }
        if (type == 'update_nilai_level_11_capex_add_13') {

        }
        if (type == 'update_nilai_level_11_capex_add_14') {

        }
        if (type == 'update_nilai_level_11_capex_add_15') {

        }
        if (type == 'update_nilai_level_11_capex_add_16') {

        }
        if (type == 'update_nilai_level_11_capex_add_17') {

        }
        if (type == 'update_nilai_level_11_capex_add_18') {

        }
        if (type == 'update_nilai_level_11_capex_add_19') {

        }
        if (type == 'update_nilai_level_11_capex_add_20') {

        }
        if (type == 'update_nilai_level_11_capex_add_21') {

        }
        if (type == 'update_nilai_level_11_capex_add_22') {

        }
        if (type == 'update_nilai_level_11_capex_add_23') {

        }
        if (type == 'update_nilai_level_11_capex_add_24') {

        }
        if (type == 'update_nilai_level_11_capex_add_25') {

        }
        if (type == 'update_nilai_level_11_capex_add_26') {

        }
        if (type == 'update_nilai_level_11_capex_add_27') {

        }
        if (type == 'update_nilai_level_11_capex_add_28') {

        }
        if (type == 'update_nilai_level_11_capex_add_29') {

        }
        if (type == 'update_nilai_level_11_capex_add_30') {

        }

        if (type == 'tambah_level_11_capex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_8/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_11_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_11.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 11')
                }
                if (type == 'update_nilai_level_11_capex') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_11_capex') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'none')
                    $('#button_update_nilai_level_11_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_11_capex').css('display', 'block')
                    $('#button_tambah_level_11_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('#title_modal_level_11_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_11_capex') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'none')
                    $('#button_update_nilai_level_11_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_11_capex').css('display', 'block')
                    $('#button_edit_level_11_capex').css('display', 'block')

                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_8'].nama_uraian_8_capex);
                    $('#title_modal_level_11_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_11_capex') {
                    Question_level_11_capex(type_add, response['row_capex_detail_8'].nama_uraian_8_capex, response['row_capex_detail_8'].id_detail_capex_8, response['row_capex_detail_8'].id_detail_capex_7)
                }
                // _11
                if (type == 'urutan_level_11_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_8'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_8'][i].id_detail_capex_8 + ',1.9' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_8'][i].no_urut_8_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_8'][i].nama_uraian_8_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_11
                // id_detail_capex_8
                // row_capex_detail_8
                // nilai_capex_detail_8
                if (type == 'update_nilai_level_11_capex_add_1') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_I);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_11_capex_add_2') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_II);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_11_capex_add_3') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_III);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_11_capex_add_4') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_IV);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_11_capex_add_5') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_V);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_11_capex_add_6') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_VI);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_11_capex_add_7') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_VII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_11_capex_add_8') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_VIII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_11_capex_add_9') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_IX);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_11_capex_add_10') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_X);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_11_capex_add_11') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XI);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_11_capex_add_12') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_11_capex_add_13') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XIII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_11_capex_add_14') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XIV);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_11_capex_add_15') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XV);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_11_capex_add_16') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XVI);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_11_capex_add_17') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XVII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_11_capex_add_18') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XVIII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_11_capex_add_19') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XIX);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_11_capex_add_20') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XX);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_11_capex_add_21') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXI);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_11_capex_add_22') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_11_capex_add_23') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXIII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_11_capex_add_24') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXIV);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_11_capex_add_25') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXV);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_11_capex_add_26') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXVI);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_11_capex_add_27') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXVII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_11_capex_add_28') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXVIII);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_11_capex_add_29') {
                    form_modal_level_11_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_2'].nilai_capex_detail_8_add_XXIX);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_11_capex_add_30') {
                    form_modal_level_11_capex.modal('show');
                    $('#form_input_nilai_level_11_capex').css('display', 'block')
                    $('#button_update_nilai_level_11_capex').css('display', 'block')
                    $('#form_tambah_level_11_capex').css('display', 'none')
                    $('#button_tambah_level_11_capex').css('display', 'none')
                    $('#button_edit_level_11_capex').css('display', 'none')
                    $('[name="id_detail_capex_8"]').val(response['row_capex_detail_8'].id_detail_capex_8);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_8"]').val(response['row_capex_detail_8'].nilai_capex_detail_8_add_XXX);
                    $('#title_modal_level_11_capex').text('Update Nilai Kontrak')
                }


            }
        })
    }



    function Simpan_level_11_capex(type) {
        if (type == 'update_nilai_level_11_capex') {
            saveData = 'update_nilai_level_11_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_11_capex') ?>";
        }
        if (type == 'tambah_level_11_capex') {
            saveData = 'tambah_level_11_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_11_capex') ?>";
        }
        if (type == 'edit_level_11_capex') {
            saveData = 'edit_level_11_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_11_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_11_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_11_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_11_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_11_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_11_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_11_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_11_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_11_capex(type_add, ket, id, id_detail_capex_7) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_11_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_7: id_detail_capex_7,
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


    $("#nilai_capex_detail_8").keyup(function() {
        var harga = $("#nilai_capex_detail_8").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_8_level_11_capex');
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

<!-- Level 12 capex -->
<script>
    var form_modal_level_12_capex = $('#form_modal_level_12_capex')
    var form_simpan_level_12_capex = $('#form_simpan_level_12_capex')
    var modal_excel_capex_12 = $('#modal_excel_capex_12');

    function modal_level_12_capex(id, type, type_add) {

        if (type == 'update_nilai_level_12_capex') {

        }
        if (type == 'tambah_level_12_capex') {

        }
        if (type == 'edit_level_12_capex') {

        }
        if (type == 'hapus_level_12_capex') {

        }
        if (type == 'urutan_level_12_capex') {

        }
        // level_11
        // INI UNTUK ADDENDUM 
        if (type == 'update_nilai_level_11_capex_add_1') {

        }
        if (type == 'update_nilai_level_11_capex_add_1') {

        }
        if (type == 'update_nilai_level_11_capex_add_2') {

        }
        if (type == 'update_nilai_level_11_capex_add_3') {

        }
        if (type == 'update_nilai_level_11_capex_add_4') {

        }
        if (type == 'update_nilai_level_11_capex_add_5') {

        }
        if (type == 'update_nilai_level_11_capex_add_6') {

        }
        if (type == 'update_nilai_level_11_capex_add_7') {

        }
        if (type == 'update_nilai_level_11_capex_add_8') {

        }
        if (type == 'update_nilai_level_11_capex_add_9') {

        }
        if (type == 'update_nilai_level_11_capex_add_10') {

        }
        if (type == 'update_nilai_level_11_capex_add_11') {

        }
        if (type == 'update_nilai_level_11_capex_add_12') {

        }
        if (type == 'update_nilai_level_11_capex_add_13') {

        }
        if (type == 'update_nilai_level_11_capex_add_14') {

        }
        if (type == 'update_nilai_level_11_capex_add_15') {

        }
        if (type == 'update_nilai_level_11_capex_add_16') {

        }
        if (type == 'update_nilai_level_11_capex_add_17') {

        }
        if (type == 'update_nilai_level_11_capex_add_18') {

        }
        if (type == 'update_nilai_level_11_capex_add_19') {

        }
        if (type == 'update_nilai_level_11_capex_add_20') {

        }
        if (type == 'update_nilai_level_11_capex_add_21') {

        }
        if (type == 'update_nilai_level_11_capex_add_22') {

        }
        if (type == 'update_nilai_level_11_capex_add_23') {

        }
        if (type == 'update_nilai_level_11_capex_add_24') {

        }
        if (type == 'update_nilai_level_11_capex_add_25') {

        }
        if (type == 'update_nilai_level_11_capex_add_26') {

        }
        if (type == 'update_nilai_level_11_capex_add_27') {

        }
        if (type == 'update_nilai_level_11_capex_add_28') {

        }
        if (type == 'update_nilai_level_11_capex_add_29') {

        }
        if (type == 'update_nilai_level_11_capex_add_30') {

        }
        if (type == 'tambah_level_12_capex_excel') {

        }

        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/by_id_detail_capex_9/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'tambah_level_12_capex_excel') {
                    $('[name="type_add_excel"]').val(type_add);
                    modal_excel_capex_12.modal('show');
                    $('[name="id_global_excel"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('#title_modal').text('Tambah Uraian Dengan Excel Turunan Ke 12')
                }
                if (type == 'update_nilai_level_12_capex') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }
                if (type == 'tambah_level_12_capex') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'none')
                    $('#button_update_nilai_level_12_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#form_tambah_level_12_capex').css('display', 'block')
                    $('#button_tambah_level_12_capex').css('display', 'block')
                    // edit button
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('#title_modal_level_12_capex').text('Tambah Uraian')
                }
                if (type == 'edit_level_12_capex') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon update dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'none')
                    $('#button_update_nilai_level_12_capex').css('display', 'none')
                    // kondisi butoon tambah dan form
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    // edit button
                    $('#form_tambah_level_12_capex').css('display', 'block')
                    $('#button_edit_level_12_capex').css('display', 'block')

                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="nama_uraian"]').val(response['row_capex_detail_9'].nama_uraian_9_capex);
                    $('#title_modal_level_12_capex').text('Edit Uraian')
                }
                if (type == 'hapus_level_12_capex') {
                    Question_level_12_capex(type_add, response['row_capex_detail_9'].nama_uraian_9_capex, response['row_capex_detail_9'].id_detail_capex_9, response['row_capex_detail_9'].id_detail_capex_8)
                }

                // _9
                if (type == 'urutan_level_12_capex') {
                    modal_capex_urutan.modal('show')
                    var html = '';
                    var i;
                    var no = 0;
                    var kirim_inisial = 0;
                    for (i = 0; i < response['result_detail_capex_9'].length; ++i) {
                        html += '<tr>' +
                            '<td><input type="text" onkeyup="UbahUrutaan_capex(' + response['result_detail_capex_9'][i].id_detail_capex_9 + ',1.10' + ',' + kirim_inisial++ + ')" name="no_urut_ubah_' + no++ + '" value="' + response['result_detail_capex_9'][i].no_urut_9_capex + '" class="form-control form-control-sm"></td>' +
                            '<td>' + response['result_detail_capex_9'][i].nama_uraian_9_capex + ' </td>' +
                            '</tr>';
                    }
                    $('.result_table_capex_urutan').html(html);
                }

                // INI UTNUK ADDENDUM 1
                // level_12
                // id_detail_capex_9
                // row_capex_detail_9
                // nilai_capex_detail_9
                if (type == 'update_nilai_level_12_capex_add_1') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(1);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_I);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 2
                if (type == 'update_nilai_level_12_capex_add_2') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(2);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_II);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 3
                if (type == 'update_nilai_level_12_capex_add_3') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(3);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_III);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTNUK ADDENDUM 4
                if (type == 'update_nilai_level_12_capex_add_4') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(4);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_IV);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 5
                // V
                if (type == 'update_nilai_level_12_capex_add_5') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(5);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_V);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 6
                // add_VI
                if (type == 'update_nilai_level_12_capex_add_6') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(6);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_VI);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 7
                // add_VII
                if (type == 'update_nilai_level_12_capex_add_7') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(7);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_VII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 8
                // add_VIII
                if (type == 'update_nilai_level_12_capex_add_8') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(8);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_VIII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 9
                // add_IX
                if (type == 'update_nilai_level_12_capex_add_9') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(9);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_IX);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 10
                // add_X
                if (type == 'update_nilai_level_12_capex_add_10') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(10);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_X);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 11
                // add_XI
                if (type == 'update_nilai_level_12_capex_add_11') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(11);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XI);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }
                // INI UTK ADDENDUM 12
                // add_XII
                if (type == 'update_nilai_level_12_capex_add_12') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(12);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 13
                // add_XIII
                if (type == 'update_nilai_level_12_capex_add_13') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(13);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XIII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 14
                // add_XIV
                if (type == 'update_nilai_level_12_capex_add_14') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(14);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XIV);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 15
                // add_XV
                if (type == 'update_nilai_level_12_capex_add_15') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(15);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XV);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }


                // INI UTK ADDENDUM 16
                // add_XVI
                if (type == 'update_nilai_level_12_capex_add_16') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(16);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XVI);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 17
                // add_XVII
                if (type == 'update_nilai_level_12_capex_add_17') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(17);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XVII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 18
                // add_XVIII
                if (type == 'update_nilai_level_12_capex_add_18') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(18);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XVIII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 19
                // add_XIX
                if (type == 'update_nilai_level_12_capex_add_19') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(19);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XIX);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 20
                // add_XX
                if (type == 'update_nilai_level_12_capex_add_20') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(20);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XX);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 21
                // add_XXI
                if (type == 'update_nilai_level_12_capex_add_21') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(21);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXI);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 22
                // add_XXII
                if (type == 'update_nilai_level_12_capex_add_22') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(22);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 23
                // add_XXIII
                if (type == 'update_nilai_level_12_capex_add_23') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(23);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXIII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 24
                // add_XXIV
                if (type == 'update_nilai_level_12_capex_add_24') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(24);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXIV);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 25
                // add_XXV
                if (type == 'update_nilai_level_12_capex_add_25') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(25);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXV);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 26
                // add_XXVI
                if (type == 'update_nilai_level_12_capex_add_26') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(26);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXVI);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 27
                // add_XXVII
                if (type == 'update_nilai_level_12_capex_add_27') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(27);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXVII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 28
                // add_XXVIII
                if (type == 'update_nilai_level_12_capex_add_28') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(28);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXVIII);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 29
                // add_XXIX
                if (type == 'update_nilai_level_12_capex_add_29') {
                    form_modal_level_12_capex.modal('show');
                    // kondisi butoon dan form
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    // kondisi butoon dan form
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(29);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_2'].nilai_capex_detail_9_add_XXIX);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

                // INI UTK ADDENDUM 30
                // add_XXX
                if (type == 'update_nilai_level_12_capex_add_30') {
                    form_modal_level_12_capex.modal('show');
                    $('#form_input_nilai_level_12_capex').css('display', 'block')
                    $('#button_update_nilai_level_12_capex').css('display', 'block')
                    $('#form_tambah_level_12_capex').css('display', 'none')
                    $('#button_tambah_level_12_capex').css('display', 'none')
                    $('#button_edit_level_12_capex').css('display', 'none')
                    $('[name="id_detail_capex_9"]').val(response['row_capex_detail_9'].id_detail_capex_9);
                    $('[name="type_add"]').val(30);
                    $('[name="nilai_capex_detail_9"]').val(response['row_capex_detail_9'].nilai_capex_detail_9_add_XXX);
                    $('#title_modal_level_12_capex').text('Update Nilai Kontrak')
                }

            }
        })
    }



    function Simpan_level_12_capex(type) {
        if (type == 'update_nilai_level_12_capex') {
            saveData = 'update_nilai_level_12_capex';
            var url = "<?= base_url('admin/data_kontrak/update_nilai_level_12_capex') ?>";
        }
        if (type == 'tambah_level_12_capex') {
            saveData = 'tambah_level_12_capex';
            var url = "<?= base_url('admin/data_kontrak/tambah_nama_uraian_level_12_capex') ?>";
        }
        if (type == 'edit_level_12_capex') {
            saveData = 'edit_level_12_capex';
            var url = "<?= base_url('admin/data_kontrak/edit_nama_uraian_level_12_capex') ?>";
        }

        $.ajax({
            method: "POST",
            url: url,
            data: form_simpan_level_12_capex.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $('.button_simpan').addClass('disabled');
            },
            success: function(response) {
                if (response == 'success') {
                    if (type == 'update_nilai_level_12_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_12_capex.modal('hide')
                        message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'tambah_level_12_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_12_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                    if (type == 'edit_level_12_capex') {
                        $('.button_simpan').removeClass('disabled');
                        form_modal_level_12_capex.modal('hide')
                        message('success', 'Data Berhasil Di Edit!', 'Berhasil')
                        location.reload()
                    }
                }
            }
        })
    }

    function Question_level_12_capex(type_add, ket, id, id_detail_capex_8) {
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
                    url: "<?= base_url('admin/data_kontrak/hapus_induk_level_12_capex/') ?>" + id,
                    dataType: "JSON",
                    data: {
                        id_detail_capex_8: id_detail_capex_8,
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


    $("#nilai_capex_detail_9").keyup(function() {
        var harga = $("#nilai_capex_detail_9").val();
        var tanpa_rupiah = document.getElementById('rupiah_nilai_capex_detail_9_level_12_capex');
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
    function UbahUrutaan_capex(id_ubah, type, initial) {
        var no_urut_ubah = $('[name="no_urut_ubah_' + initial + '"]').val();
        console.log(id_ubah, no_urut_ubah);
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/data_kontrak/pindahkan_turunan_capex/') ?>" + id,
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