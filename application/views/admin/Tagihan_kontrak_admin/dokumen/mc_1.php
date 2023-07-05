<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> BAST</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tata_cara_pembayaran/') . $row_mc['id_mc'] ?>">TATA CARA PEMBAYARAN</a></div>
                <div class="breadcrumb-item active"><a href="">BAST</a></div>
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
                                        <div style="overflow-x: auto;">
                                            <table class="table table-bordered table-striped">
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
                                                <?php
                                                $total_bobot_mc2 = 0;
                                                $no = 1;
                                                foreach ($query_tbl_result_sub->result_array() as $key => $value) { ?>
                                                    <?php
                                                    $this->db->select('*');
                                                    $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
                                                    $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $row_mc['id_mc']);
                                                    $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                    $query_tbl_hps_penyedia_kontrak_mc_1 = $this->db->get() ?>
                                                    <?php
                                                    $total_hps_penyedia_kontrak_mc = 0;

                                                    foreach ($query_tbl_hps_penyedia_kontrak_mc_1->result_array() as $key => $value_hps_penyedia_kontrak_mc_1) { ?>
                                                        <?php
                                                        $id_hps_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['id_hps_penyedia_kontrak_mc_1'];
                                                        $id_detail_sub_program_penyedia_jasa = $value_hps_penyedia_kontrak_mc_1['id_detail_sub_program_penyedia_jasa'];
                                                        if ($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]) {
                                                            $total_hps_penyedia_kontrak_mc +=  $value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render];
                                                            $total_bobot_mc2 +=  $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc'];
                                                        } else {
                                                            $total_hps_penyedia_kontrak_mc +=  0;
                                                            $total_bobot_mc2 +=  0;
                                                        }
                                                        ?>
                                                    <?php  } ?>
                                                <?php  } ?>
                                                <thead>
                                                    <tr>
                                                        <th class="tg-0pky" rowspan="3">No</th>
                                                        <th class="tg-0pky" colspan="2" rowspan="3">Uraian Pekerjaan</th>
                                                        <th class="tg-0pky" colspan="4">KONTRAK AWAL</th>
                                                        <th class="tg-0pky" colspan="12">PROGRESS</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="tg-0pky" colspan="3" rowspan="2">Rp</th>
                                                        <th class="tg-0pky" rowspan="2">Bobot %</th>
                                                        <th class="tg-0pky" colspan="4">S/D BULAN LALU</th>
                                                        <th class="tg-0pky" colspan="4">BULAN INI</th>
                                                        <th class="tg-0pky" colspan="4">S/D BULAN INI</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="tg-0pky" colspan="3">Rp</th>
                                                        <th class="tg-0pky">Bobot %</th>
                                                        <th class="tg-0pky" colspan="3">Rp</th>
                                                        <th class="tg-0pky">Bobot %</th>
                                                        <th class="tg-0pky" colspan="3">Rp</th>
                                                        <th class="tg-0pky">Bobot %</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="tg-0pky" colspan="3"><?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"><?= $total_bobot_mc2 ?>%</td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"><?= $total_bobot_mc2 ?>%</td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"><?= $total_bobot_mc2 ?>%</td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"><?= $total_bobot_mc2 ?>%</td>
                                                    </tr>
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
                                                    <?php
                                                    $no_program = 1;
                                                    $no_program_A = 1;
                                                    $no_program_B = 1;
                                                    $no_program_C = 1;
                                                    foreach ($query_tbl_result_sub->result_array() as $key => $value) { ?>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
                                                        $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $row_mc['id_mc']);
                                                        $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                        $query_tbl_hps_penyedia_kontrak_mc_1 = $this->db->get() ?>
                                                        <?php
                                                        $total_hps_penyedia_kontrak_mc = 0;
                                                        $total_bobot_mc = 0;
                                                        $no = 1;
                                                        foreach ($query_tbl_hps_penyedia_kontrak_mc_1->result_array() as $key => $value_hps_penyedia_kontrak_mc_1) { ?>
                                                            <?php
                                                            $id_hps_penyedia_kontrak_mc_1 = $value_hps_penyedia_kontrak_mc_1['id_hps_penyedia_kontrak_mc_1'];
                                                            $id_detail_sub_program_penyedia_jasa = $value_hps_penyedia_kontrak_mc_1['id_detail_sub_program_penyedia_jasa'];
                                                            if ($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]) {
                                                                $total_hps_penyedia_kontrak_mc +=  $value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render];
                                                                $total_bobot_mc +=  $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc'];
                                                            } else {
                                                                $total_hps_penyedia_kontrak_mc +=  0;
                                                                $total_bobot_mc +=  0;
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td class="tg-0pky"><?= $no_program++ ?></td>
                                                                <td class="tg-0pky" colspan="2"><?= $value['nama_program_mata_anggaran'] ?></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc']; ?>%</td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc']; ?>%</td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc']; ?>%</td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"><?= $value_hps_penyedia_kontrak_mc_1['bobot_hps_mc']; ?>%</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tg-0pky">A<?= $no_program_A++ ?></td>
                                                                <td class="tg-0pky" colspan="2">DIBULATKAN</td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]), 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]), 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]), 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]), 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                            </tr>
                                                            <?php
                                                            $nilai_ppn = $value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render] * 0.10;
                                                            $total_setalah_ppn = $nilai_ppn + $value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render];
                                                            if ($row_mc['sd_bulan_ini'] <= $total_setalah_ppn) {
                                                                $bobot_ppn = '-' . (($row_mc['sd_bulan_ini'] / $total_setalah_ppn) * 100) / 100;
                                                            } else {
                                                                $bobot_ppn = (($row_mc['sd_bulan_ini'] / $total_setalah_ppn) * 100) / 100;
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td class="tg-0pky">B<?= $no_program_B++ ?></td>
                                                                <td class="tg-0pky" colspan="2">PPN 10%</td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($nilai_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($nilai_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($nilai_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($nilai_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tg-0pky">C<?= $no_program_C++ ?></td>
                                                                <td class="tg-0pky" colspan="2">JUMLAH SERTIFIKAT BULANAN</td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($total_setalah_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($total_setalah_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($total_setalah_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                                <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($total_setalah_ppn, 2, ',', '.') ?></td>
                                                                <td class="tg-0pky"></td>
                                                            </tr>
                                                        <?php  } ?>
                                                    <?php  } ?>
                                                    <tr>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="2">JUMLAH FISIK </td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0pky">A</td>
                                                        <td class="tg-0pky" colspan="2">DIBULATKAN</td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($row_mc['sd_bulan_ini']), 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($row_mc['sd_bulan_ini']), 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($row_mc['sd_bulan_ini']), 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format(round($row_mc['sd_bulan_ini']), 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0pky">B</td>
                                                        <td class="tg-0pky" colspan="6">PPN 10%</td>
                                                        <td class="tg-0pky text-center" colspan="8"><?= "Rp " . number_format(round($row_mc['setelah_ppn']), 2, ',', '.') ?></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0pky">C</td>
                                                        <td class="tg-0pky" colspan="6">JUMLAH SERTIFIKAT BULANAN</td>
                                                        <td class="tg-0pky" colspan="8"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="2">POTONGAN-POTONGAN</td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0pky">D</td>
                                                        <td class="tg-0pky">SERTIFIKAT S/D BULAN LALU</td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($row_mc['sd_bulan_lalu'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <?php
                                                        $total_retensi =  ($row_mc['nilai_retensi'] / 100) * $row_mc['sd_bulan_ini'];
                                                        $total_uang_muka = $row_mc['sd_bulan_ini'] * 0.15;
                                                        $total_denda = ((1 / 1000) * $row_mc['setelah_ppn']) * 10;
                                                        ?>
                                                        <td class="tg-0pky">E</td>
                                                        <td class="tg-0pky">RETENTION MONEY ( 5% )</td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($total_retensi, 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0pky">F</td>
                                                        <td class="tg-0pky">PENGEMBALIAN UANG MUKA</td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($total_uang_muka, 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0pky">G</td>
                                                        <td class="tg-0pky">DENDA</td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"><?= "Rp " . number_format($total_denda, 2, ',', '.') ?></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                        <td class="tg-0pky" colspan="3"></td>
                                                        <td class="tg-0pky"></td>
                                                    </tr>
                                                    <?php
                                                    $total_potongan = $row_mc['sd_bulan_lalu'] + $total_retensi + $total_uang_muka + $total_denda;
                                                    $total_tagiham_bulan_ini = $row_mc['sd_bulan_ini'] - $total_potongan;
                                                    ?>
                                                    <tr>
                                                        <td class="tg-0lax">H</td>
                                                        <td class="tg-0lax">JUMLAH POTONGAN</td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"><?= "Rp " . number_format($total_potongan, 2, ',', '.') ?></td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"></td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"></td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"></td>
                                                        <td class="tg-0lax"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0lax">I</td>
                                                        <td class="tg-0lax">TOTAL TAGIHAN BULAN INI</td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"><?= "Rp " . number_format($total_tagiham_bulan_ini, 2, ',', '.') ?></td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"></td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"></td>
                                                        <td class="tg-0lax"></td>
                                                        <td class="tg-0lax" colspan="3"></td>
                                                        <td class="tg-0lax"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0lax" colspan="19">TERBILANG : <?= terbilang($total_tagiham_bulan_ini) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0lax" colspan="7" rowspan="3"></td>
                                                        <td class="tg-0lax" colspan="3" rowspan="3">REALISASI<br>PROGRES</td>
                                                        <td class="tg-0lax" colspan="5">SAMPAI DENGAN BULAN INI</td>
                                                        <?php
                                                        $bobot_bulan_ini = '-' . (($row_mc['sd_bulan_ini'] / $row_kontrak['total_kontrak' . $data_render]) * 100) / 100;
                                                        ?>
                                                        <td class="tg-0lax" colspan="4"><?= round($bobot_bulan_ini)  ?>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0lax" colspan="5">SAMPAI DENGAN BULAN LALU</td>
                                                        <?php
                                                        $bobot_bulan_lalu = '-' . (($row_mc['sd_bulan_lalu'] / $row_kontrak['total_kontrak' . $data_render]) * 100) / 100;
                                                        ?>
                                                        <td class="tg-0lax" colspan="4"><?= round($bobot_bulan_lalu)  ?>%%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tg-0lax" colspan="5">BULAN INI</td>
                                                        <td class="tg-0lax" colspan="4"><?= round($bobot_bulan_ini)  ?>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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