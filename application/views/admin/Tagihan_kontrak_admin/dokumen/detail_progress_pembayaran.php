<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> DETAIL PROGRES PEMBAYARAN</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tata_cara_pembayaran/') . $row_mc['id_mc'] ?>">TATA CARA PEMBAYARAN</a></div>
                <div class="breadcrumb-item active"><a href="">DETAIL PROGRES PEMBAYARAN</a></div>
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">

                            </h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <?php

            function penyebut($nilai)
            {
                $nilai = abs($nilai);
                $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
                $temp = "";
                if ($nilai < 12) {
                    $temp = " " . $huruf[$nilai];
                } else if ($nilai < 20) {
                    $temp = penyebut($nilai - 10) . " Belas";
                } else if ($nilai < 100) {
                    $temp = penyebut($nilai / 10) . " Puluh" . penyebut($nilai % 10);
                } else if ($nilai < 200) {
                    $temp = " Seratus" . penyebut($nilai - 100);
                } else if ($nilai < 1000) {
                    $temp = penyebut($nilai / 100) . " Ratus" . penyebut($nilai % 100);
                } else if ($nilai < 2000) {
                    $temp = " Seribu" . penyebut($nilai - 1000);
                } else if ($nilai < 1000000) {
                    $temp = penyebut($nilai / 1000) . " Ribu" . penyebut($nilai % 1000);
                } else if ($nilai < 1000000000) {
                    $temp = penyebut($nilai / 1000000) . " Juta" . penyebut($nilai % 1000000);
                } else if ($nilai < 1000000000000) {
                    $temp = penyebut($nilai / 1000000000) . " Milyar" . penyebut(fmod($nilai, 1000000000));
                } else if ($nilai < 1000000000000000) {
                    $temp = penyebut($nilai / 1000000000000) . " Trilyun" . penyebut(fmod($nilai, 1000000000000));
                }
                return $temp;
            }

            function terbilang($nilai)
            {
                if ($nilai < 0) {
                    $hasil = "Minus " . trim(penyebut($nilai));
                } else {
                    $hasil = trim(penyebut($nilai));
                }
                return $hasil;
            }

            ?>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-2 mt-4">
                                                <a class="btn btn-danger btn-sm" href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/print_dokumen_ceklist/' . $row_mc['id_mc']) ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-print"></i> Export PDF </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <div class="text-center">
                                                <h4>DETAIL PROGRESS PEMBAYARAN</h4>
                                                <label for=""><?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?></label>
                                            </div>
                                        </center>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-1">
                                                PENGGUNA JASA
                                            </div>
                                            <div class="col-md-8">
                                                : PT JASAMARGA TOLLROAD MAINTENANCE
                                            </div>
                                            <div class="col-md-1">
                                                SERTIFIKAT
                                            </div>
                                            <div class="col-md-2">
                                                : <?= $row_mc['no_mc'] ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                PENYEDIA JASA
                                            </div>
                                            <div class="col-md-8">
                                                : PT/CV <?= $row_kontrak['nama_penyedia'] ?>
                                            </div>
                                            <div class="col-md-1">
                                                BULAN PERIODE
                                            </div>
                                            <div class="col-md-2">
                                                : <?= $row_mc['tanggal_mc'] ?> s/d <?= $row_mc['sts_tanggal_trakhir'] ?>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .tg {
                                                border-collapse: collapse;
                                                border-spacing: 0;
                                            }

                                            .tg td {
                                                border-color: black;
                                                border-style: solid;
                                                border-width: 1px;
                                                font-family: Arial, sans-serif;
                                                font-size: 14px;
                                                overflow: hidden;
                                                padding: 10px 5px;
                                                word-break: normal;
                                            }

                                            .tg th {
                                                border-color: black;
                                                border-style: solid;
                                                border-width: 1px;
                                                font-family: Arial, sans-serif;
                                                font-size: 14px;
                                                font-weight: normal;
                                                overflow: hidden;
                                                padding: 10px 5px;
                                                word-break: normal;
                                            }

                                            .tg .tg-0pky {
                                                border-color: inherit;
                                                text-align: left;
                                                vertical-align: top
                                            }

                                            .tg .tg-0lax {
                                                text-align: left;
                                                vertical-align: top
                                            }
                                        </style>
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="tg-0pky" rowspan="3">No</th>
                                                    <th class="tg-0pky" colspan="2" rowspan="3">URAIAN / KEGIATAN</th>
                                                    <th class="tg-0pky" rowspan="3">Sat</th>
                                                    <th class="tg-0pky" rowspan="3">HARGA SATUAN</th>
                                                    <th class="tg-0pky" colspan="3" rowspan="2">KONTRAK AWAL</th>
                                                    <th class="tg-0pky" colspan="6">PROGRESS</th>
                                                    <th class="tg-0pky" colspan="6">PROGRESS PEMBAYARAN</th>
                                                </tr>
                                                <tr>
                                                    <th class="tg-0pky" colspan="2">S/D BULAN LALU</th>
                                                    <th class="tg-0pky" colspan="2">BULAN INI</th>
                                                    <th class="tg-0pky" colspan="2">S/D BULAN INI</th>
                                                    <th class="tg-0pky" colspan="2">S/D BULAN LALU</th>
                                                    <th class="tg-0pky" colspan="2">BULAN INI</th>
                                                    <th class="tg-0pky" colspan="2">S/D BULAN INI</th>
                                                </tr>
                                                <tr>
                                                    <th class="tg-0pky">Vol.</th>
                                                    <th class="tg-0pky">Total Harga</th>
                                                    <th class="tg-0pky">Bobot (%)</th>
                                                    <th class="tg-0pky">Vol.</th>
                                                    <th class="tg-0pky">Bobot (%)</th>
                                                    <th class="tg-0pky">Vol.</th>
                                                    <th class="tg-0pky">Bobot (%)</th>
                                                    <th class="tg-0pky">Vol.</th>
                                                    <th class="tg-0pky">Bobot (%)</th>
                                                    <th class="tg-0pky" colspan="2">Rp</th>
                                                    <th class="tg-0pky" colspan="2">Rp</th>
                                                    <th class="tg-0pky" colspan="2">Rp</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($row_mc['sts_mc_nilai'] == 'kontrak_awal') {
                                                    $data_render = '';
                                                } else {
                                                    $data_render = $row_mc['sts_mc_nilai'];
                                                } ?>
                                                <?php
                                                $this->db->select('*');
                                                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $row_mc['id_detail_program_penyedia_jasa']);
                                                $query_tbl_result_sub = $this->db->get() ?>
                                                <?php $no_urut_manual = 1;
                                                foreach ($query_tbl_result_sub->result_array() as $key => $value) { ?>
                                                    <tr>
                                                        <td class="tg-0pky" colspan="3"><?= $value['nama_program_mata_anggaran'] ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="2"></td>
                                                        <td class="tg-0pky" colspan="2"></td>
                                                        <td class="tg-0pky" colspan="2"></td>
                                                    </tr>
                                                    <?php
                                                    $this->db->select('*');
                                                    $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
                                                    $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $row_mc['id_mc']);
                                                    $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                    $query_tbl_hps_penyedia_kontrak_mc_1 = $this->db->get() ?>
                                                    <?php
                                                    $total_hps_penyedia_kontrak_mc_addendum_1 = 0;
                                                    foreach ($query_tbl_hps_penyedia_kontrak_mc_1->result_array() as $key => $value_hps_penyedia_kontrak_mc_1) { ?>
                                                        <?php
                                                        $id_hps_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['id_hps_penyedia_kontrak_mc_1'];
                                                        $id_detail_sub_program_penyedia_jasa = $value_hps_penyedia_kontrak_mc_1['id_detail_sub_program_penyedia_jasa'];
                                                        if ($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]) {
                                                            $total_hps_penyedia_kontrak_mc_addendum_1 +=  $value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render];
                                                        } else {
                                                            $total_hps_penyedia_kontrak_mc_addendum_1 +=  0;
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td class="tg-0pky"></td>
                                                            <?php if ($value_hps_penyedia_kontrak_mc_1['uraian_hps' . $data_render] == null) { ?>
                                                                <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_1['no_hps' . $data_render] ?></td>
                                                            <?php  } else { ?>
                                                                <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_1['uraian_hps' . $data_render] ?></td>
                                                            <?php   }
                                                            ?>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['satuan_hps' . $data_render] ?></td>
                                                            <?php if ($value_hps_penyedia_kontrak_mc_1['harga_satuan_hps' . $data_render] == null || $value_hps_penyedia_kontrak_mc_1['harga_satuan_hps' . $data_render] == 0) { ?>
                                                                <td class="tg-0pky"></td>
                                                            <?php  } else { ?>
                                                                <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['harga_satuan_hps' . $data_render], 2, ',', '.')   ?></td>
                                                            <?php   }
                                                            ?>

                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['volume_hps' . $data_render] ?></td>
                                                            <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc'] ?>%</td>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['volume_hps' . $data_render] ?></td>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc'] ?>%</td>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['volume_hps' . $data_render] ?></td>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc'] ?>%</td>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['volume_hps' . $data_render] ?></td>
                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc'] ?>%</td>
                                                            <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                            <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                            <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                        </tr>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_hps_penyedia_kontrak_mc_2');
                                                        $this->db->where('tbl_hps_penyedia_kontrak_mc_2.id_hps_penyedia_kontrak_mc_1', $id_hps_penyedia_kontrak_mc_1);
                                                        $query_tbl_hps_penyedia_kontrak_mc_2 = $this->db->get() ?>
                                                        <?php
                                                        foreach ($query_tbl_hps_penyedia_kontrak_mc_2->result_array() as $key => $value_hps_penyedia_kontrak_mc_2) { ?>
                                                            <?php
                                                            $id_hps_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['id_hps_penyedia_kontrak_mc_2'];
                                                            if ($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render]) {
                                                                $total_hps_penyedia_kontrak_mc_addendum_2 +=  $value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render];
                                                            } else {
                                                                $total_hps_penyedia_kontrak_mc_addendum_2 +=  0;
                                                            }

                                                            ?>
                                                            <tr>
                                                                <td class="tg-0pky"></td>
                                                                <?php if ($value_hps_penyedia_kontrak_mc_2['uraian_hps' . $data_render] == null) { ?>
                                                                    <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_2['no_hps' . $data_render] ?></td>
                                                                <?php  } else { ?>
                                                                    <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_2['uraian_hps' . $data_render] ?></td>
                                                                <?php   }
                                                                ?>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['satuan_hps' . $data_render] ?></td>
                                                                <?php if ($value_hps_penyedia_kontrak_mc_2['harga_satuan_hps' . $data_render] == null || $value_hps_penyedia_kontrak_mc_2['harga_satuan_hps' . $data_render] == 0) { ?>
                                                                    <td class="tg-0pky"></td>
                                                                <?php  } else { ?>
                                                                    <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_2['harga_satuan_hps' . $data_render], 2, ',', '.')   ?></td>
                                                                <?php   }
                                                                ?>

                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['volume_hps' . $data_render] ?></td>
                                                                <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['bobot_hps_mc'] ?>%</td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['volume_hps' . $data_render] ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['bobot_hps_mc'] ?>%</td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['volume_hps' . $data_render] ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['bobot_hps_mc'] ?>%</td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['volume_hps' . $data_render] ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_2['bobot_hps_mc'] ?>%</td>
                                                                <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                            </tr>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_hps_penyedia_kontrak_mc_3');
                                                            $this->db->where('tbl_hps_penyedia_kontrak_mc_3.id_hps_penyedia_kontrak_mc_2', $id_hps_penyedia_kontrak_mc_2);

                                                            $query_tbl_hps_penyedia_kontrak_mc_3 = $this->db->get() ?>
                                                            <?php
                                                            foreach ($query_tbl_hps_penyedia_kontrak_mc_3->result_array() as $key => $value_hps_penyedia_kontrak_mc_3) { ?>
                                                                <?php
                                                                $id_hps_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['id_hps_penyedia_kontrak_mc_3'];
                                                                if ($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render]) {
                                                                    $total_hps_penyedia_kontrak_mc_addendum_3 +=  $value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render];
                                                                } else {
                                                                    $total_hps_penyedia_kontrak_mc_addendum_3 +=  0;
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td class="tg-0pky"></td>
                                                                    <?php if ($value_hps_penyedia_kontrak_mc_3['uraian_hps' . $data_render] == null) { ?>
                                                                        <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_3['no_hps' . $data_render] ?></td>
                                                                    <?php  } else { ?>
                                                                        <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_3['uraian_hps' . $data_render] ?></td>
                                                                    <?php   }
                                                                    ?>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['satuan_hps' . $data_render] ?></td>
                                                                    <?php if ($value_hps_penyedia_kontrak_mc_3['harga_satuan_hps' . $data_render] == null || $value_hps_penyedia_kontrak_mc_3['harga_satuan_hps' . $data_render] == 0) { ?>
                                                                        <td class="tg-0pky"></td>
                                                                    <?php  } else { ?>
                                                                        <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_3['harga_satuan_hps' . $data_render], 2, ',', '.')   ?></td>
                                                                    <?php   }
                                                                    ?>

                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['volume_hps' . $data_render] ?></td>
                                                                    <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['bobot_hps_mc'] ?>%</td>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['volume_hps' . $data_render] ?></td>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['bobot_hps_mc'] ?>%</td>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['volume_hps' . $data_render] ?></td>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['bobot_hps_mc'] ?>%</td>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['volume_hps' . $data_render] ?></td>
                                                                    <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_3['bobot_hps_mc'] ?>%</td>
                                                                    <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                    <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                    <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                </tr>
                                                                <?php
                                                                $this->db->select('*');
                                                                $this->db->from('tbl_hps_penyedia_kontrak_mc_4');
                                                                $this->db->where('tbl_hps_penyedia_kontrak_mc_4.id_hps_penyedia_kontrak_mc_3', $id_hps_penyedia_kontrak_mc_3);

                                                                $query_tbl_hps_penyedia_kontrak_mc_4 = $this->db->get() ?>
                                                                <?php
                                                                foreach ($query_tbl_hps_penyedia_kontrak_mc_4->result_array() as $key => $value_hps_penyedia_kontrak_mc_4) { ?>
                                                                    <?php
                                                                    $id_hps_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['id_hps_penyedia_kontrak_mc_4'];
                                                                    if ($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render]) {
                                                                        $total_hps_penyedia_kontrak_mc_addendum_4 +=  $value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render];
                                                                    } else {
                                                                        $total_hps_penyedia_kontrak_mc_addendum_4 +=  0;
                                                                    }

                                                                    ?>
                                                                    <tr>
                                                                        <td class="tg-0pky"></td>
                                                                        <?php if ($value_hps_penyedia_kontrak_mc_4['uraian_hps' . $data_render] == null) { ?>
                                                                            <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_4['no_hps' . $data_render] ?></td>
                                                                        <?php  } else { ?>
                                                                            <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_4['uraian_hps' . $data_render] ?></td>
                                                                        <?php   }
                                                                        ?>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['satuan_hps' . $data_render] ?></td>
                                                                        <?php if ($value_hps_penyedia_kontrak_mc_4['harga_satuan_hps' . $data_render] == null || $value_hps_penyedia_kontrak_mc_4['harga_satuan_hps' . $data_render] == 0) { ?>
                                                                            <td class="tg-0pky"></td>
                                                                        <?php  } else { ?>
                                                                            <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_4['harga_satuan_hps' . $data_render], 2, ',', '.')   ?></td>
                                                                        <?php   }
                                                                        ?>

                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['volume_hps' . $data_render] ?></td>
                                                                        <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'] ?>%</td>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['volume_hps' . $data_render] ?></td>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'] ?>%</td>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['volume_hps' . $data_render] ?></td>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'] ?>%</td>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['volume_hps' . $data_render] ?></td>
                                                                        <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'] ?>%</td>
                                                                        <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                        <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                        <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                    </tr>
                                                                    <?php
                                                                    $this->db->select('*');
                                                                    $this->db->from('tbl_hps_penyedia_kontrak_mc_5');
                                                                    $this->db->where('tbl_hps_penyedia_kontrak_mc_5.id_hps_penyedia_kontrak_mc_4', $id_hps_penyedia_kontrak_mc_4);

                                                                    $query_tbl_hps_penyedia_kontrak_mc_5 = $this->db->get() ?>
                                                                    <?php
                                                                    foreach ($query_tbl_hps_penyedia_kontrak_mc_5->result_array() as $key => $value_hps_penyedia_kontrak_mc_5) { ?>
                                                                        <?php
                                                                        $id_hps_penyedia_kontrak_mc_5 = $value_hps_penyedia_kontrak_mc_5['id_hps_penyedia_kontrak_mc_5'];
                                                                        if ($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render]) {
                                                                            $total_hps_penyedia_kontrak_mc_addendum_5 +=  $value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render];
                                                                        } else {
                                                                            $total_hps_penyedia_kontrak_mc_addendum_5 +=  0;
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td class="tg-0pky"></td>
                                                                            <?php if ($value_hps_penyedia_kontrak_mc_5['uraian_hps' . $data_render] == null) { ?>
                                                                                <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_5['no_hps' . $data_render] ?></td>
                                                                            <?php  } else { ?>
                                                                                <td class="tg-0pky" colspan="2"><?= $value_hps_penyedia_kontrak_mc_5['uraian_hps' . $data_render] ?></td>
                                                                            <?php   }
                                                                            ?>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['satuan_hps' . $data_render] ?></td>
                                                                            <?php if ($value_hps_penyedia_kontrak_mc_5['harga_satuan_hps' . $data_render] == null || $value_hps_penyedia_kontrak_mc_5['harga_satuan_hps' . $data_render] == 0) { ?>
                                                                                <td class="tg-0pky"></td>
                                                                            <?php  } else { ?>
                                                                                <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_5['harga_satuan_hps' . $data_render], 2, ',', '.')   ?></td>
                                                                            <?php   }
                                                                            ?>

                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['volume_hps' . $data_render] ?></td>
                                                                            <td class="tg-0pky"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['bobot_hps_mc'] ?>%</td>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['volume_hps' . $data_render] ?></td>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['bobot_hps_mc'] ?>%</td>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['volume_hps' . $data_render] ?></td>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['bobot_hps_mc'] ?>%</td>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['volume_hps' . $data_render] ?></td>
                                                                            <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_5['bobot_hps_mc'] ?>%</td>
                                                                            <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                            <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                            <td class="tg-0pky" colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render], 2, ',', '.')   ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <tr>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="2"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky">TOTAL BAB </td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"><?= "Rp " . number_format($total_hps_penyedia_kontrak_mc_addendum_1, 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="2"></td>
                                                        <td class="tg-0pky" colspan="2"></td>
                                                        <td class="tg-0pky" colspan="2"></td>
                                                    </tr>
                                                <?php  } ?>
                                                <tr>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky" colspan="2"></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky">PROGRESS FISIK</td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky" colspan="2"></td>
                                                    <td class="tg-0pky" colspan="2"></td>
                                                    <td class="tg-0pky" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax">PROGRESS FISIK DIBULATKAN</td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format(round($row_mc['sd_bulan_ini']), 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax">PPN 10%</td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format(round($row_mc['ppn_total']), 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax">SERTIFIKAT</td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format(round($row_mc['setelah_ppn']), 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                    <td class="tg-0lax" colspan="2"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <center>
                                                    <br>
                                                    <br>
                                                    <label>Diketahui:</label><br>
                                                    <label for="">Pengguna Jasa</label>
                                                    <br>
                                                    PT JASAMARGA TOLLROAD MAINTENANCE
                                                    <br><?= $row_kontrak['nama_departemen'] . '-' . $row_kontrak['nama_area'] ?>
                                                    <br><br><br>
                                                    <br><br><br>
                                                    <label>{Nama}
                                                        <br>Wakil Pihak Petama
                                                    </label>
                                                </center>
                                            </div>
                                            <div class="col-md-4">
                                                <center>
                                                    <br>
                                                    <br>
                                                    <label>Diperiksa dan Disetujui Oleh :</label>
                                                    <br>Konsultan Pengawas
                                                    <br>PT/CV <?= $row_kontrak['nama_penyedia'] ?>
                                                    <br><br><br><br><br><br><br>
                                                    <label>{nama}
                                                        <br>Resident Engineer
                                                    </label>
                                                </center>
                                            </div>
                                            <div class="col-md-4">
                                                <center>
                                                    <br>
                                                    <br>
                                                    <label>Diajukan Oleh :</label>
                                                    <br>Penyedia Jasa
                                                    <br>PT/CV <?= $row_kontrak['nama_penyedia'] ?>
                                                    <br><br><br><br><br><br><br>
                                                    <label>{nama}
                                                        <br>General Superintendent
                                                    </label>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <!-- /.row -->
                    </div>
            </section>
            <!-- /.content -->
        </div>
    </section>
</div>