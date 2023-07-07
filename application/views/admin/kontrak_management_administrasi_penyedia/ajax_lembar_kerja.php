
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

    // function byid(id, type) {
    //     if (type == 'lihat_program') {
    //         saveData = 'lihat_program';
    //     }
    //     $.ajax({
    //         type: "GET",
    //         url: "<?= base_url('admin/data_kontrak/byid/'); ?>" + id,
    //         dataType: "JSON",
    //         success: function(response) {
    //             if (type == 'lihat_program') {
    //                 window.location.href = "<?= base_url('admin/administrasi_penyedia/list_program/') ?>" + id
    //             }
    //         }
    //     })
    // }

    function byid(id, type) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/data_kontrak/byid/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                var lembar_kerja = 'lembar_kerja';
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/lembar_kerja/list_program/'); ?>" + id,
                    data: {
                        lembar_kerja:lembar_kerja,
                    },
                    dataType: "JSON",
                    success: function(response) {
                        window.location.href = "<?= base_url('admin/administrasi_penyedia/list_program/') ?>" + id
                    }
                })
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
    fill_datatable();

    function fill_datatable(id_departemen, id_area, id_sub_area) {
        tabledata.DataTable({
            "responsive": false,
            "autoWidth": true,
            "processing": true,
            "serverSide": true,
            scrollX: true,
            scrollCollapse: true,
            "dom": 'Bfrtip',
            fixedColumns: {
                left: 2,
            },
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel"> Excel</i>',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf"> Pdf</i>',
                    titleAttr: 'PDF'
                }
            ],
            "order": [],
            "ajax": {
                "url": "<?= base_url('admin/Administrasi_penyedia/get_data') ?>",
                "type": "POST",
                data: {
                    id_departemen: id_departemen,
                    id_area: id_area,
                    id_sub_area: id_sub_area,
                },
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
    }

    function Filter() {
        var id_departemen = $('[name="id_departemen"]').val()
        var id_area = $('[name="id_area"]').val()
        var id_sub_area = $('[name="id_sub_area"]').val()
        tabledata.DataTable().destroy();
        fill_datatable(id_departemen, id_area, id_sub_area);
    }
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
    function get_area() {
        var id_departemen = $('[name="id_departemen"]').val()
        console.log(id_departemen);
        if (id_departemen == '') {
            var id_departemen = $('[name="id_departemen"]').val('')
            var id_area = $('[name="id_area"]').val('')
            var id_sub_area = $('[name="id_sub_area"]').val('')
            message('warning', 'Maaf Ada Kesalahan!', 'Maaf')
        } else {
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Filter_role/get_area') ?>/' + id_departemen,
                success: function(html) {
                    $("#get_area").html(html);
                }
            });
        }
    };

    function get_sub_area() {
        var id_area = $('[name="id_area"]').val()
        if (id_area == '') {
            var id_departemen = $('[name="id_departemen"]').val('')
            var id_area = $('[name="id_area"]').val('')
            var id_sub_area = $('[name="id_sub_area"]').val('')
            message('warning', 'Maaf Ada Kesalahan!', 'Maaf')
        } else {
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Filter_role/get_sub_area') ?>/' + id_area,
                success: function(html) {
                    $("#get_sub_area").html(html);
                }
            });
        }

    };
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_list').DataTable({
            "ordering": false,
            "info": true,
        });
    });
</script>