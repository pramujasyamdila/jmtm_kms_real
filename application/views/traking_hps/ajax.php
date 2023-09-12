<!-- <script>
    Filte_add()
    // sweetalert
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }

    function Filte_add() {
        var sampai = $('[name="sampai_add"]').val();
        if (sampai == 1) {
            for (let step = 1; step <= 1; step++) {
                $('#value_add_' + step + '').css('display', 'block')
            }
            for (let ste2 = 2; ste2 <= 30; ste2++) {
                $('#value_add_' + ste2 + '').css('display', 'none')
            }
        } else if (sampai == 2) {
            for (let step = 1; step <= 2; step++) {
                $('#value_add_' + step + '').css('display', 'block')
            }
            for (let ste2 = 3; ste2 <= 30; ste2++) {
                $('#value_add_' + ste2 + '').css('display', 'none')
            }
        } else if (sampai == 3) {
            for (let step = 1; step <= 4; step++) {
                $('#value_add_' + step + '').css('display', 'block')
            }
            for (let ste2 = 5; ste2 <= 30; ste2++) {
                $('#value_add_' + ste2 + '').css('display', 'none')
            }
        } else {
            for (let step = 10; step <= 1; step++) {
                $('#value_add_' + step + '').css('display', 'none')
            }
        }
    }

    function get_area() {
        var id_departemen = $('[name="id_departemen"]').val()
        $('[name="id_departemen"]').val(id_departemen)
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
        $('[name="id_area"]').val(id_area)
        console.log(id_area);
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


    function get_sub_sendiri() {
        var id_sub_area = $('[name="id_sub_area"]').val()
        $('[name="id_sub_area"]').val(id_sub_area)
    };



    function Filter_traking_hps() {
        var id_departemen = $('[name="id_departemen"]').val()
        var id_area = $('[name="id_area"]').val()
        var id_sub_area = $('[name="id_sub_area"]').val()
        var uraian = $('[name="uraian"]').val()
        $.ajax({
            method: "POST",
            url: "<?= base_url('traking_hps/traking_hps/search') ?>",
            data: {
                id_area: id_area,
                id_departemen: id_departemen,
                id_sub_area: id_sub_area,
                uraian: uraian
            },
            dataType: "JSON",
            success: function() {
                location.replace('<?= base_url('traking_hps/traking_hps/search') ?>');
            }
        })
    }
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
</script> -->

<script>
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }
    var tbl_uraian_hps = $('#tbl_uraian_hps');
    $(document).ready(function() {
        function fill_datatable_hps(cari_uraian_hps = '') {
            tbl_uraian_hps.DataTable({
                "responsive": false,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ],
                "order": [],
                "ajax": {
                    "url": "<?= base_url('traking_hps/traking_hps/get_uraian_hps') ?>",
                    "type": "POST",
                    data: {
                        cari_uraian_hps: cari_uraian_hps
                    }
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
                    "sZeroRecords": "Tidak Ada DataYang Di Cari",
                },
            });
        }
        $('#filter_hps').click(function() {
            var cari_uraian_hps = $('#cari_uraian_hps').val();
            if (cari_uraian_hps != '') {
                tbl_uraian_hps.DataTable().destroy();
                fill_datatable_hps(cari_uraian_hps);
            } else {
                message('No. Kontrak Belum Di isi!', 'warning', 'Gagal Mendapatkan Data!')
            }
        })

    });

    // hps_kontrak

    var tbl_uraian_hps_kontrak = $('#tbl_uraian_hps_kontrak');
    $(document).ready(function() {
        function fill_datatable_hps_kontrak(cari_uraian_hps_kontrak = '') {
            tbl_uraian_hps_kontrak.DataTable({
                "responsive": false,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ],
                "order": [],
                "ajax": {
                    "url": "<?= base_url('traking_hps/traking_hps/get_uraian_hps_kontrak') ?>",
                    "type": "POST",
                    data: {
                        cari_uraian_hps_kontrak: cari_uraian_hps_kontrak
                    }
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
                    "sZeroRecords": "Tidak Ada DataYang Di Cari",
                },
            });
        }
        $('#filter_hps_kontrak').click(function() {
            var cari_uraian_hps_kontrak = $('#cari_uraian_hps_kontrak').val();
            if (cari_uraian_hps_kontrak != '') {
                tbl_uraian_hps_kontrak.DataTable().destroy();
                fill_datatable_hps_kontrak(cari_uraian_hps_kontrak);
            } else {
                message('No. Kontrak Belum Di isi!', 'warning', 'Gagal Mendapatkan Data!')
            }
        })

    });
</script>