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
    <center>
        <div class="row mt-5">
            <div class="col-md-9">
                <div class="card" style="margin-top: 20px;margin-left:50px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                    <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 3 - ADMINISTRASI TAGIHAN </b></h4>
                    <h6 style="font-family: 'Poppins', sans-serif;">Modul ini digunakan dalam membuat Data Terkait Tagihan Penyedia Jasa yang dipiliih</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="qr_view">

                </div>
            </div>
        </div>
    </center>
    <br>
    <!-- Main content -->
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="row">
            <div class="col-6">
                <!-- <small id="helpId" class="form-text text-muted">Ini Pake Search Select</small> -->
                <div class="input-group">
                    <input type="hidden" class="form-control" value="<?= $row_kontrak['id_detail_program_penyedia_jasa'] ?>" id="id_detail_program_penyedia_jasa" name="id_detail_program_penyedia_jasa" readonly placeholder="Cari No. Kontrak">
                    <span class="input-group-btn">
                        <!-- <a href="javascript:;" onclick="cari_no_kontrak()" class="btn btn-primary text-white"><i class="fas fa-search"></i> Cari</a> -->
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary mb-4">
                    <br>
                    <!-- <a style="width: 200px;margin-left:10px" href="<?= base_url('export_pdf/buat_pdf/print_tagihan/' . $row_kontrak['id_detail_program_penyedia_jasa']) ?>" class="btn btn-info"> <i class="fas fa fa-file"></i> Report Print To PDF</a> -->
                    <div class="card-header card-info card-outline"><strong>Histori Kontrak Penyedia</strong><span class="small ms-1"></span></div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Penyedia Jasa</th>
                                <th colspan="2"><?= $row_kontrak['nama_penyedia'] ?></th>
                            </tr>
                            <tr>
                                <th class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Nomor Kontrak</th>
                                <th colspan="2"><?= $row_kontrak['no_kontrak_penyedia'] ?></th>
                            </tr>
                            <tr>
                                <td style="background-color:#193B53;font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Histori Kontrak</td>
                                <td style="background-color:#193B53;font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Nilai Kontrak / Addendum</td>
                                <td style="background-color:#193B53;font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Tanggal Kontrak / Addendum</td>
                            </tr>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $row_kontrak['id_detail_program_penyedia_jasa']);
                            $get_nilai_kontrak = $this->db->get();
                            $total_kontrak  = 0;
                            foreach ($get_nilai_kontrak->result_array() as $value_kontrak) {
                                $total_kontrak += $value_kontrak['nilai_sub_kontrak_penyedia']
                            ?>
                            <?php } ?>
                            <tr>
                                <td class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Kontrak Awal</td>
                                <td><?= "Rp " . number_format($total_kontrak, 2, ',', '.') ?></td>
                                <td><?= date('d-M-Y', strtotime($row_kontrak['tanggal_kontrak_program']))  ?></td>
                            </tr>
                            <?php foreach ($looping_adendum as $key => $value) { ?>
                                <tr>
                                    <td class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Addendum <?= $value['no_addendum'] ?></td>
                                    <td><?= "Rp " . number_format($row_kontrak['total_kontrak_addendum_' . $value['no_addendum']], 2, ',', '.') ?></td>
                                    <td><?= date('d-M-Y', strtotime($value['tanggal_addendum']))  ?></td>
                                </tr>
                            <?php    } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-success mb-4">
                    <div class="card-header card-warning card-outline"><strong>Result Master Data Tagihan Penyedia Jasa</strong><span class="small ms-1"></span></div>
                    <div class="card-body">
                        <br>
                        <style type="text/css">
                            .div1 {
                                overflow: scroll;
                                border: 1px solid #777777;
                            }

                            .div1 table {
                                border-spacing: 0;
                            }

                            .div1 th {
                                border-left: none;
                                border-right: 1px solid #bbbbbb;
                                padding: 12px;
                                width: 80px;
                                min-width: 80px;
                                position: sticky;
                                top: 0;
                                color: #e0e0e0;
                                background-color: #409cff;
                                font-weight: normal;
                            }

                            .div1 tr {
                                color: black;
                                ;
                            }

                            .div1 td {
                                border-left: none;
                                border-right: 1px solid #bbbbbb;
                                border-bottom: 1px solid #bbbbbb;
                                padding: 12px;
                                width: 80px;
                                min-width: 80px;
                            }

                            .div1 th:nth-child(1),
                            .div1 td:nth-child(1) {
                                position: sticky;
                                left: 0;
                                width: 150px;
                                min-width: 150px;
                            }

                            .div1 th:nth-child(2),
                            .div1 td:nth-child(2) {
                                position: sticky;
                                left: 150px;
                                width: 50px;
                                min-width: 50px;
                            }

                            .div1 td:nth-child(1),
                            .div1 td:nth-child(2) {
                                background-color: #F0F8FF;
                            }

                            .div1 th:nth-child(1),
                            .div1 th:nth-child(2) {
                                z-index: 2;
                                background-color: #F0F8FF;
                            }
                        </style>
                        <table id="tabledetail" class="table div1" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                            <thead class="text-center">
                                <tr style="background-color:#193B53;">
                                    <th style="font-size: 12px;color:white; width:100px" rowspan="2">MC Ke</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Periode</th>
                                    <th style="font-size: 12px;color:white; width:750px" colspan="3">Sebelum PPN</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">PPN</th>
                                    <th style="font-size: 12px;color:white; width:250px" colspan="3">Setelah PPN</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Retensi</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Pengembaliaan uang muka </th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Denda</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Total Potongan</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Total Invoice</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Status Tracking</th>
                                    <th style="font-size: 12px;color:white; width:250px" rowspan="2">Tanggal Update Tracking</th>
                                </tr>
                                <tr class="table-warning">
                                    <th style="font-size: 12px;width:250px">S.D.Bulan Lalu</th>
                                    <th style="font-size: 12px;width:250px">Bulan Ini</th>
                                    <th style="font-size: 12px;width:250px">S.D Bulan Ini</th>
                                    <th style="font-size: 12px;width:250px">S.D.Bulan Lalu</th>
                                    <th style="font-size: 12px;width:250px">Bulan Ini</th>
                                    <th style="font-size: 12px;width:250px">S.D Bulan Ini</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px;" class="result_datanya">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        view_qr_show()

        function view_qr_show() {
            var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
            $('.qr_view').html('<img src="https://jmtm-ams2.kintekindo.net/render_qr/qrcode_kms_mc/' + id_detail_program_penyedia_jasa + '" alt="Admin" width="200" height="200">');
            // $('.button_view_langsung').html('<a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/buat_tagihan/') ?>' + id_detail_program_penyedia_jasa + '" class="btn btn-sm btn-primary btn-block">Kelola Taggihan Kontrak</a>');
        }
    </script>
    <script>
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)

        function cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa) {
            $('.create_mcku').css('display', 'block');
            var tbl_adendum = $('#tbl_adendum');
            if (id_detail_program_penyedia_jasa == '') {
                message('No. Kontrak Belum Di isi!', 'warning', 'Gagal Mendapatkan Data!')
            } else {
                $.ajax({
                    method: "POST",
                    url: '<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_detail_program_penyedia_jasa/'); ?>' + id_detail_program_penyedia_jasa,
                    dataType: "JSON",
                    success: function(response) {

                        // ini untuk random kode
                        $('#no_urut_mc').text('Nomor Mc Ke' + response['no_urut_mc']);
                        if (response['jika_ada_um']) {
                            $('#jika_ada_um').css('display', 'block');
                            $('#jika_tidak_ada_um').css('display', 'none');
                            $('[name="jika_no_urut"]').val('Nomor Mc Ke ' + response['no_urut_mc']);
                            $('#header_no_mc').html('Nomor Mc Ke ' + response['no_urut_mc']);
                            $('[name="cek_um"]').val('tidak ada');
                        } else {
                            $('#jika_ada_um').css('display', 'none');
                            $('#jika_tidak_ada_um').css('display', 'block');
                        }
                        $('[name="id_detail_program_penyedia_jasau"]').val(id_detail_program_penyedia_jasa);
                        // var rpdata = 'Rp. ' + response['nilai_kontrak']['nilai_hps'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00';
                        // $('[name="total_kontrak"]').val(rpdata);
                        // $('[name="tanggal_kontrak"]').val(response['datakontrak'].tanggal_kontrak);


                        if (response['cek_pertama_mc_apa'].no_mc == 'um') {
                            $('[name="jumlah_mcku"]').val(response['selact_max2'].sd_bulan_ini);
                        } else if (response['cek_pertama_mc_apa'].no_mc == 1) {
                            $('[name="jumlah_mcku"]').val(response['selact_max2'].sd_bulan_ini);
                        } else {
                            $('[name="jumlah_mcku"]').val(response['selact_max2'].sd_bulan_ini);
                        }



                        // -------INI UNTUK GET DETAIL KONTRAK -------------
                        var html = '';
                        var i;
                        var start = response.start;
                        for (i = 0; i < response['get_detail_taggihan'].length; ++i) {
                            // logika bulan ini di sini
                            if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                var mc = 'Um'
                            } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                                var mc = response['get_detail_taggihan'][i].no_mc
                            } else {
                                var mc = response['get_detail_taggihan'][i].no_mc
                            }


                            //   logika hasil bulan lalu
                            var hasil_bulan_lalu = response['get_detail_taggihan'][i].sd_bulan_lalu;
                            var hasil_jumlah_mc = response['get_detail_taggihan'][i].jumlah_mc;
                            if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                var sd_bulan_lalu = 'Rp. ' + hasil_bulan_lalu.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                                var sd_bulan_lalu = 'Rp. ' + hasil_bulan_lalu.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            } else {
                                var sd_bulan_lalu = 'Rp. ' + hasil_bulan_lalu.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            }

                            if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                var bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].jumlah_mc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                                var bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].jumlah_mc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            } else {
                                var bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].jumlah_mc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            }

                            if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                var sd_bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].sd_bulan_ini.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                                var sd_bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].sd_bulan_ini.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            } else {
                                var sd_bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].sd_bulan_ini.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                            }

                            if (response['get_detail_taggihan'][0].no_mc == 'um') {
                                if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                    var nama_pekerjaan_program_mata_anggaran = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_pekerjaan_program_mata_anggaran + '</td>'
                                } else {
                                    var nama_pekerjaan_program_mata_anggaran = ''
                                }
                                if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                    var nama_vendor = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_vendor + '</td>'
                                } else {
                                    var nama_vendor = ''
                                }


                            } else {
                                if (response['get_detail_taggihan'][i].no_mc == '1') {
                                    var nama_pekerjaan_program_mata_anggaran = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_pekerjaan_program_mata_anggaran + '</td>'
                                } else {
                                    var nama_pekerjaan_program_mata_anggaran = ''
                                }
                                if (response['get_detail_taggihan'][i].no_mc == '1') {
                                    var nama_vendor = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_vendor + '</td>'
                                } else {
                                    var nama_vendor = ''
                                }
                            }


                            if (response['get_detail_taggihan'][i].status_penaggihan == 1) {
                                var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-sm btn-block btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a>'
                            } else {
                                if (response['get_detail_taggihan'][i].status_penaggihan == 2 || response['get_detail_taggihan'][i].status_terakhir == 'Pencairan') {
                                    if (response['get_detail_taggihan'][i].status_pencairan == 1) {
                                        var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-block btn-sm btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a><a style="font-size:10px" class="btn btn-block btn-sm btn-secondary text-white" href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/dokumen_mc/') ?>' + response['get_detail_taggihan'][i].id_mc + '"><i class="fa fa-file" aria-hidden="true"></i> Dokumen Taggihan</a><a style="font-size:10px" class="btn btn-block btn-sm btn-danger text-white" onclick="Hapus_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Mc</a>'
                                    } else {
                                        var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-block btn-sm btn-success text-white" onclick="Pencairan(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-credit-card" aria-hidden="true"></i> Pencairan</a> <a style="font-size:10px" class="btn btn-block btn-sm btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a><a style="font-size:10px" class="btn btn-block btn-sm btn-secondary text-white" href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/dokumen_mc/') ?>' + response['get_detail_taggihan'][i].id_mc + '"><i class="fa fa-file" aria-hidden="true"></i> Dokumen Taggihan</a><a style="font-size:10px" class="btn btn-block btn-sm btn-danger text-white" onclick="Hapus_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Mc</a>'
                                    }
                                } else {
                                    var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-sm btn-block btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a><a style="font-size:10px" class="btn btn-block btn-sm btn-secondary text-white" href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/dokumen_mc/') ?>' + response['get_detail_taggihan'][i].id_mc + '"><i class="fa fa-file" aria-hidden="true"></i> Dokumen Taggihan</a><a style="font-size:10px" class="btn btn-block btn-sm btn-danger text-white" onclick="Hapus_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Mc</a>'
                                }
                            }

                            // nilai setelah ppn

                            if (response['get_detail_taggihan'][i].status_terakhir) {
                                if (response['get_detail_taggihan'][i].status_pencairan == 1) {
                                    var sts_trakhir = '<label style="font-size:10px" class="badge badge-sm badge-success text-white">Sudah Dicairkan</label>';
                                } else {
                                    var sts_trakhir = response['get_detail_taggihan'][i].status_terakhir;
                                }

                            } else {
                                var sts_trakhir = 'Belum Update';
                            }

                            if (response['get_detail_taggihan'][i].sts_tanggal_trakhir) {
                                var tanggal_trakhir = response['get_detail_taggihan'][i].sts_tanggal_trakhir;
                            } else {
                                var tanggal_trakhir = 'Belum Update';
                            }

                            // logika retensi
                            if (response['get_detail_taggihan'][i].sts_retensi == 1) {
                                var nilai_retensi = response['get_detail_taggihan'][i].nilai_retensi;
                            } else {
                                var persen_retensi = response['get_detail_taggihan'][i].nilai_retensi;
                                if (persen_retensi == 5) {
                                    var nilai_retensi = response['get_detail_taggihan'][i].jumlah_mc * 0.05;
                                } else if (persen_retensi == 10) {
                                    var nilai_retensi = response['get_detail_taggihan'][i].jumlah_mc * 0.10;
                                } else {
                                    var nilai_retensi = response['get_detail_taggihan'][i].jumlah_mc * 0.15;
                                }
                            }

                            var total_sd_setelah_ppn = parseInt(response['get_detail_taggihan'][i].sd_bulan_lalu) + parseInt(response['get_detail_taggihan'][i].setelah_ppn);

                            // logika potongan
                            var total_potongan = parseInt(nilai_retensi) + parseInt(response['get_detail_taggihan'][i].nilai_uang_muka) + parseInt(response['get_detail_taggihan'][i].denda);
                            var total_invoice = parseInt(total_sd_setelah_ppn) - parseInt(nilai_retensi);
                            html +=
                                '<tr style="font-size:12px">' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + response['get_detail_taggihan'][i].no_mc_manipulasi + '</td>' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + response['get_detail_taggihan'][i].tanggal_mc + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + sd_bulan_lalu + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + bulan_ini + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + sd_bulan_ini + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].ppn_total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + sd_bulan_lalu + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].setelah_ppn.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + total_sd_setelah_ppn.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + nilai_retensi.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].nilai_uang_muka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].denda.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + 'Rp. ' + total_potongan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + 'Rp. ' + total_invoice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + sts_trakhir + '</td> ' +
                                '<td style="font-size:12px" class = "tg-d2hi">' + tanggal_trakhir + ' </td> ' +
                                '</tr>';
                        }
                        $('.result_datanya').html(html);
                        //   $('#pagination_link').html(response.pagination_link);
                    },
                    error: function() {
                        console.log(error);
                    }
                })

                $(document).ready(function() {
                    tbl_adendum.DataTable({
                        "responsive": true,
                        "autoWidth": false,
                        "processing": true,
                        "serverSide": true,
                        "searching": true,
                        "bDestroy": true,
                        "info": false,
                        "order": [],
                        "ajax": {
                            "url": "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_seacrh_dendum_by_kontrak/') ?>" + id_detail_program_penyedia_jasa,
                            "type": "POST",
                        },
                        "oLanguage": {
                            "sSearch": "Cari Data : ",
                            "sEmptyTable": "Data Tidak Tersedia",
                            "sLoadingRecords": "Silahkan Tunggu - loading...",
                            "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                            "sZeroRecords": "Tidak Ada Yang Di Cari",
                            "sProcessing": "Memuat Data...."
                        }
                    });
                });

                function relodTable2() {
                    tbl_adendum.DataTable().ajax.reload();
                }

                //   ini untuk detail taggihan
            }
        }
    </script>
    <style type="text/css" media="print">
        @page {
            size: landscape;
        }
    </style>
</body>

</html>


<!-- Button trigger modal -->