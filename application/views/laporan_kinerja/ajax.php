<script>
    var tabledata = $('#table')
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

    function reloadTable() {
        tabledata.DataTable().ajax.reload();
    }

    $(document).ready(function() {
        tabledata.DataTable({
            "responsive": false,
            "autoWidth": false,
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
                "url": "<?= base_url('laporan_kinerja/get_data') ?>",
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
    $(document).ready(function() {

        $('#mytable').DataTable({
            "responsive": false,
            "dom": 'Bfrtip',
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
        });

    });


    var modal_progres_fisik = $('#modal_progres_fisik');
    var form_progres_fisik = $('#form_progres_fisik');

    function ProgresFisik(id) {
        modal_progres_fisik.modal('show');
        var id_detail_sub_program_penyedia_jasa = $('[name="id_detail_sub_program_penyedia_jasa"]').val(id)
        $.ajax({
            type: "GET",
            url: "<?= base_url('laporan_kinerja/by_id_sub_laporan_kinerja/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                $('[name="persen_progres_fisik"]').val(response['data_sub'].persen_progres_fisik);
                $('[name="nilai_kontrak_km"]').val(response['data_sub'].nilai_kontrak_km);
                $('[name="prognosa_beban"]').val(response['data_sub'].prognosa_beban);
            }
        })
    }

    function SimpanProgresFisik() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('laporan_kinerja/update_progres_fisik') ?>",
            data: form_progres_fisik.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_progres_fisik.modal('hide')
                    message('success', 'Data Berhasil Di Edit!', 'Berhasil');
                    location.reload()
                }
            }
        })
    }



    var modal_keterangan = $('#modal_keterangan');
    var form_keterangan = $('#form_keterangan');

    function Keterangan(id) {
        modal_keterangan.modal('show');
        var id_detail_sub_program_penyedia_jasa = $('[name="id_detail_sub_program_penyedia_jasa"]').val(id)
    }

    function SimpanKeterangan() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('laporan_kinerja/update_keterangan') ?>",
            data: form_keterangan.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_keterangan.modal('hide')
                    message('success', 'Data Berhasil Di Edit!', 'Berhasil');
                    location.reload()
                }
            }
        })
    }

    // 
    var modal_pilih_formula = $('#modal_pilih_formula');
    var form_pilih_formula = $('#form_pilih_formula');

    function PilihFormula(id) {
        modal_pilih_formula.modal('show');
        var id_detail_sub_program_penyedia_jasa = $('[name="id_detail_sub_program_penyedia_jasa"]').val(id)
        $.ajax({
            type: "GET",
            url: "<?= base_url('laporan_kinerja/by_id_sub_laporan_kinerja/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                $('[name="formula_fee_jmtm"]').val(response['data_sub'].formula_fee_jmtm);
            }
        })
    }

    function Simpanpilih_formula() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('laporan_kinerja/update_pilih_formula') ?>",
            data: form_pilih_formula.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_pilih_formula.modal('hide')
                    message('success', 'Formula Berhasil Di Generate!', 'Berhasil');
                    location.reload()
                } else {
                    message('warning', 'Formula Belum Dipilih!', 'Maaf');
                }
            }
        })
    }
</script>

<script>
    $(document).ready(function() {
        $('#dtHorizontalVerticalExample').DataTable({
            "scrollX": true,
            "scrollY": 200,
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>

<script>
    var form_modal_buat_periode = $('#form_modal_buat_periode');
    var modal_buat_periode = $('#modal_buat_periode');

    function Buat_periode(id_kontrak) {
        var id_kontrak = $('[name="id_kontrak"]').val(id_kontrak)
        modal_buat_periode.modal('show');
    }

    function Simpan_Periode() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('laporan_kinerja/buat_periode_laporan') ?>",
            data: form_modal_buat_periode.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    modal_buat_periode.modal('hide')
                    message('success', 'Periode Berhasil Dibuat!', 'Berhasil');
                    location.reload()
                }
            }
        })
    }
    var modal_lihat_formula = $('#modal_lihat_formula');

    function LihatFormula(params) {
        modal_lihat_formula.modal('show');

    }

    var modal_upload_laporan = $('#modal_upload_laporan');

    function Upload_laporan(id) {
        modal_upload_laporan.modal('show');
        $('[name="id_kontrak"]').val(id);
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.table').DataTable({
            "ordering": false,
            "info": true,
            dom: 'Blfrtip',
            lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
            ],
            buttons: [
                'pageLength' 
            // {
            //     extend:    'copyHtml5',
            //     text:      '<i class="fas fa-file"> Copy</i>',
            //     titleAttr: 'Copy'
            // },
            // {
            //     extend:    'excelHtml5',
            //     text:      '<i class="fas fa-file-excel"> Excel</i>',
            //     titleAttr: 'Excel'
            // },
            // {
            //     extend:    'csvHtml5',
            //     text:      '<i class="fas fa-file"> Csv</i>',
            //     titleAttr: 'CSV'
            // },
            // {
            //     extend:    'pdfHtml5',
            //     text:      '<i class="fas fa-file-pdf"> Pdf</i>',
            //     titleAttr: 'PDF'
            // }
        ]
        });
    });
</script>