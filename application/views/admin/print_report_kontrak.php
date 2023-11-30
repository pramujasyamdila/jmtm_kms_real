<!-- Content Wrapper. Contains page content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Kontrak Management</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.2.1/css/fixedColumns.dataTables.min.css">
    <script src="<?= base_url('assets/'); ?>js/sweetalert.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
    <style>
        @font-face {
            font-family: "RNSSanz-Black";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Black.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Bold";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Bold.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-ExtraBold";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-ExtraBold.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Light";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Light.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Medium";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Medium.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Normal";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Normal.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-SemiBold";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-SemiBold.ttf') ?>) format("truetype");
        }
    </style>
</head>



<body style="font-size: 14px;font-family:'RNSSanz-Light';">
    <div style="height: 50px;">

    </div>
    <table class="table-bordered table-striped tabledetail mt-4">
        <thead style="font-family: RNSSanz-Black;text-transform: uppercase;">
            <tr style="font-size: 13px; height:10px; background-color: #193B53;" class="text-white">
                <th class="text-center text-white" style="background-color: #193B53;" rowspan="2">No </th>
                <th class="text-center text-white" style="width:200px;background-color: #193B53;" rowspan="2">Kontrak Manajemen</th>
                <th class="text-center text-white" style="width:100px;background-color: #193B53;" rowspan="2">Departemen</th>
                <th class="text-center text-white" style="width:100px;background-color: #193B53;" rowspan="2">Area</th>
                <th class="text-center text-white" style="width:100px;background-color: #193B53;" rowspan="2">Sub Area</th>
                <th class="text-center" style="width:100px" rowspan="2">No Kontrak</th>
                <th class="text-center" style="width:100px" rowspan="2">Tanggal Kontrak</th>
                <th class="text-center" style="width:100px" rowspan="2">Tahun Anggaran</th>
                <th class="text-center" colspan="3">Informasi Addendum Terakhir</th>
                <th class="text-center" style="width:100px" rowspan="2">Jenis Kontrak</th>
            </tr>
            <tr style="font-size: 12px;background-color: #193B53;" class="text-white">
                <th class="text-center" style="width:100px">Nilai Add</th>
                <th class="text-center" style="width:100px">Tanggal Add</th>
                <th class="text-center" style="width:100px">Periode Add</th>
            </tr>
        </thead>
        <tbody style="font-size: 12px;font-family: RNSSanz-Bold;">
            <?php $no = 1;
            foreach ($result_export_kontrak as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nama_kontrak'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('table_adendum');
                $this->db->where('table_adendum.id_kontrak', $value['id_kontrak']);
                $this->db->order_by('CAST(no_adendum AS DECIMAL(10,6)) ASC');
                $result_addendum = $this->db->get();
                foreach ($result_addendum->result_array() as $key => $value_histori) { ?>
                    <?php
                    if ($value_histori['no_adendum'] == 1) {
                        $type_add_nilai = 1;
                        $nilai = 'nilai_add_I';
                    } else if ($value_histori['no_adendum'] == 2) {
                        $type_add_nilai = 2;
                        $nilai = 'nilai_add_II';
                    } else if ($value_histori['no_adendum'] == 3) {
                        $type_add_nilai = 3;
                        $nilai = 'nilai_add_III';
                    } else if ($value_histori['no_adendum'] == 4) {
                        $type_add_nilai = 4;
                        $nilai = 'nilai_add_IV';
                    } else if ($value_histori['no_adendum'] == 5) {
                        $type_add_nilai = 5;
                        $nilai = 'nilai_add_V';
                    } else if ($value_histori['no_adendum'] == 6) {
                        $type_add_nilai = 6;
                        $nilai = 'nilai_add_VI';
                    } else if ($value_histori['no_adendum'] == 7) {
                        $type_add_nilai = 7;
                        $nilai = 'nilai_add_VII';
                    } else if ($value_histori['no_adendum'] == 8) {
                        $type_add_nilai = 8;
                        $nilai = 'nilai_add_VIII';
                    } else if ($value_histori['no_adendum'] == 9) {
                        $type_add_nilai = 9;
                        $nilai = 'nilai_add_IX';
                    } else if ($value_histori['no_adendum'] == 10) {
                        $type_add_nilai = 10;
                        $nilai = 'nilai_add_X';
                    } else if ($value_histori['no_adendum'] == 11) {
                        $type_add_nilai = 11;
                        $nilai = 'nilai_add_XI';
                    } else if ($value_histori['no_adendum'] == 12) {
                        $type_add_nilai = 12;
                        $nilai = 'nilai_add_XII';
                    } else if ($value_histori['no_adendum'] == 13) {
                        $type_add_nilai = 13;
                        $nilai = 'nilai_add_XIII';
                    } else if ($value_histori['no_adendum'] == 14) {
                        $type_add_nilai = 14;
                        $nilai = 'nilai_add_XIV';
                    } else if ($value_histori['no_adendum'] == 15) {
                        $type_add_nilai = 15;
                        $nilai = 'nilai_add_XV';
                    } else if ($value_histori['no_adendum'] == 16) {
                        $type_add_nilai = 16;
                        $nilai = 'nilai_add_XVI';
                    } else if ($value_histori['no_adendum'] == 17) {
                        $type_add_nilai = 17;
                        $nilai = 'nilai_add_XVII';
                    } else if ($value_histori['no_adendum'] == 18) {
                        $type_add_nilai = 18;
                        $nilai = 'nilai_add_XVIII';
                    } else if ($value_histori['no_adendum'] == 19) {
                        $type_add_nilai = 19;
                        $nilai = 'nilai_add_XIX';
                    } else if ($value_histori['no_adendum'] == 20) {
                        $type_add_nilai = 20;
                        $nilai = 'nilai_add_XX';
                    } else if ($value_histori['no_adendum'] == 21) {
                        $type_add_nilai = 21;
                        $nilai = 'nilai_add_XXI';
                    } else if ($value_histori['no_adendum'] == 22) {
                        $type_add_nilai = 22;
                        $nilai = 'nilai_add_XXII';
                    } else if ($value_histori['no_adendum'] == 23) {
                        $type_add_nilai = 23;
                        $nilai = 'nilai_add_XXIII';
                    } else if ($value_histori['no_adendum'] == 24) {
                        $type_add_nilai = 24;
                        $nilai = 'nilai_add_XXIV';
                    } else if ($value_histori['no_adendum'] == 25) {
                        $type_add_nilai = 25;
                        $nilai = 'nilai_add_XXV';
                    } else if ($value_histori['no_adendum'] == 26) {
                        $type_add_nilai = 26;
                        $nilai = 'nilai_add_XXVI';
                    } else if ($value_histori['no_adendum'] == 27) {
                        $type_add_nilai = 27;
                        $nilai = 'nilai_add_XXVII';
                    } else if ($value_histori['no_adendum'] == 28) {
                        $type_add_nilai = 28;
                        $nilai = 'nilai_add_XXVIII';
                    } else if ($value_histori['no_adendum'] == 29) {
                        $type_add_nilai = 29;
                        $nilai = 'nilai_add_XXIX';
                    } else if ($value_histori['no_adendum'] == 30) {
                        $type_add_nilai = 30;
                        $nilai = 'nilai_add_XXX';
                    } else {
                        $type_add_nilai = null;
                        $nilai = 'nilai_kontrak_awal';
                    } ?>
                    <tr>
                        <td></td>
                        <td><?= $value['nama_kontrak'] ?></td>
                        <td><?= $value['nama_departemen'] ?></td>
                        <td><?= $value['nama_area'] ?></td>
                        <td><?= $value['nama_sub_area'] ?></td>
                        <td><?= $value['no_kontrak'] ?></td>
                        <td><?= $this->jam_tgl->tgl_indo($value['tahun_kontrak']) ?></td>
                        <td><?= $value['tahun_anggaran'] ?></td>
                        <td><?= "Rp " . number_format($value[$nilai], 2, ',', '.') ?></td>
                        <td><?= $this->jam_tgl->tgl_indo($value_histori['tanggal']) ?></td>
                        <td><?= $value_histori['no_adendum'] ?></td>
                        <td><?= $value['jenis_kontrak'] ?></td>
                    </tr>
                <?php  } ?>
            <?php  } ?>
        </tbody>
    </table>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>assets_stisla/modules/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/popper.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/tooltip.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>assets_stisla/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>assets_stisla/modules/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/chart.min.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/summernote/summernote-bs4.js"></script>
    <script src="<?= base_url() ?>assets_stisla/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>assets_stisla/js/page/index.js"></script>
    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>assets_stisla/js/page/modules-ion-icons.js"></script>
    <!-- Template JS File -->
    <script src="<?= base_url() ?>assets_stisla/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets_stisla/js/custom.js"></script>

    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="<?= base_url() ?>assets_stisla/modules/select2/dist/js/select2.full.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>assets_stisla/js/page/forms-advanced-forms.js"></script>
    <script>
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ':' + m + ':' + s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>
    <script>
        $(document).ready(function() {
            var table = $('.tabledetail').DataTable({
                select: true,
                "ordering": false,
                dom: 'Blfrtip',
                columnDefs: [{
                        target: 0,
                        visible: false,
                    },
                    {
                        target: 1,
                        visible: false,
                    },
                ],
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 Rows', '25 Rows', '50 Rows', 'Back']
                ],
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excel',
                    exportOption: {
                        columns: [0, 1, 2, 3]
                    },
                    text: ' Export a EXCEL'
                }, {
                    extend: 'print',
                    exportOption: {
                        columns: [0, 1, 2, 3]
                    },
                    text: ' Print'
                }],
            });
            table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

        });

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

            if (type == 'hapus') {
                saveData = 'hapus';
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
                    } else {
                        Question(id);
                    }
                }
            })
        }

        function Question(id) {
            Swal.fire({
                title: "Data Di Hapus",
                text: 'Kontrak Ini Mau Di hapus?',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('admin/data_kontrak/delete_kontrak/') ?>" + id,
                        dataType: "JSON",
                        success: function(response) {
                            if (response == 'success') {
                                reloadTable();
                                message('success', 'Berhasil!', 'Data Berhasil Di Hapus')
                            }
                        }
                    })
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
                "orderable": false,
                "searching": false,
                "ordering": false,
                "ajax": {
                    "url": "<?= base_url('admin/data_kontrak/get_data') ?>",
                    "type": "POST",
                    data: {
                        id_departemen: id_departemen,
                        id_area: id_area,
                        id_sub_area: id_sub_area,
                    },
                },
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
</body>

</html>


<!-- Button trigger modal -->