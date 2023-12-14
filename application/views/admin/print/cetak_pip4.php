<!DOCTYPE html>
<html lang="en">

<head>
    <title>Persetujuan Izin Prinsip Pengadaan DIROPS ke DIRUT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body style="font-size: 13px;margin:25mm 25mm 25mm;">
    <div class="container">
    <img src="https://www.jmtm.co.id/assets/img-jmtm/logojmtm.png" width="200px" alt="">
        <!-- <a target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_pip1/' . $row_program['id_detail_program_penyedia_jasa']) ?>" class="btn btn-sm btn-primary">Cetak <i class="fa fa-print"></i></a> -->
        <div class="row">
            <div class="col-md-6">
                <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
            </div>
        </div><br><br>
        <input type="hidden" name="type_pip_number" value="1">
        <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $id_detail_program_penyedia_jasa ?>">
        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Nomor</label>
            </div>
            <div class="col-md-1">
                <label for="" style="margin-right: auto;"> :</label>
            </div>
            <div class="col-md-4">
                <label for="" style="margin-left: -90px;"><?= $row_program_detail['no_surat_pip_ca_ke_gm'] ?></label>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <label><?= $row_program_detail['tgl_surat_pip_ca_ke_gm'] ?></label>

            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Lampiran</label>
            </div>
            <div class="col-md-1">
                <label for="" style="margin-right: auto;"> :</label>
            </div>
            <div class="col-md-4">
                <label for="" style="margin-left: -90px;">Lampiran : 1 (Satu) Berkas</label>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Perihal</label>
            </div>
            <div class="col-md-11">
                <label for="" style="margin-left: auto;">
                    : <b> Persetujuan Izin Prinsip Pengadaan <label for=""><?= $row_program_detail['jenis_pengadaan'] ?></label> <label for=""><?= $row_program_detail['nama_pekerjaan_program_mata_anggaran'] ?></label> </b></b>
                </label>
            </div>
        </div>
        <div class="mt-5">
            Yth.
            <br>
            <b> <label for=""><?= $row_program_detail['jabatan_penerima_pip_ca_ke_gm'] ?></label></b> <br>
            PT Jasamarga Tollroad Maintenance <br>
            Gedung C PT Jasa Marga (Persero) Tbk, Lt.1 <br>
            Plaza Tol Taman Mini Indonesia Indah, Jakarta 13550


        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-12">
                    Sehubungan deengan akan dilaksanakannya <b>Pengadaan</b> <b for="" class="jenis_pengadaan"></b>
                    <b> <label for=""><?= $row_program_detail['jenis_pengadaan'] ?></label> <label for=""><?= $row_program_detail['nama_pekerjaan_program_mata_anggaran'] ?></label></b> , bersama ini kami mengajukan permohonan izin
                    prinsip pengadaan pekerjaan dimaksud dengan penjelasan sebagai berikut :
                </div>
            </div>
        </div>
        <center class="mt-3">
            <b>I. KETERANGAN PEKERJAAN</b>
        </center>
        <div class="mt-3">
            <div class="row">
                <div class="col-md-2">
                    <label for="">1. Lokasi Pekerjaan</label>
                </div>
                <div class="col-md-10">
                    <label for="">: Ruas Jalan Tol <label><?= $row_program_detail['lokasi_pekerjaan_surat'] ?></label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label for="">2. Sasaran Pekerjaan</label>
                </div>
                <div class="col-md-10">
                    <label for="">: Pemenuhan Standar Pelayanan Minimal (SPM) Subtansi Pelayanan
                        <label><?= $row_program_detail['spm_surat'] ?></label>
                    </label>
                </div>
            </div>
        </div>
        <center class="mt-3">
            <b>II. KETERANGAN PEMBIAYAAN</b>
        </center>
        <div class="mt-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="">1. Pekerjaan</label>
                </div>
                <div class="col-md-9">
                    <label for="">: <b> <label for=""><?= $row_program_detail['nama_pekerjaan_program_mata_anggaran'] ?></label> </b></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">2. Pagu Biaya</label>
                </div>
                <div class="col-md-9">
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
                            $hasil = "minus " . trim(penyebut($nilai));
                        } else {
                            $hasil = trim(penyebut($nilai));
                        }
                        return $hasil;
                    }
                    ?>
                    <?php
                    $total_pagu = 0;
                    $total_hps = 0;
                    ?>
                    <?php foreach ($result_sub_program as $key => $value) { ?>

                        <?php
                        $total_pagu += $value['nilai_program_mata_anggran'];
                        $total_hps += $value['nilai_hps'];
                        ?>
                    <?php  } ?>
                    <label for="">: <b>Rp.<?= number_format($total_pagu, 2, ',', '.'); ?> </b> (<?= terbilang($total_pagu) ?> Rupiah) termasuk PPN <?= $row_program_detail['ppn_surat'] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">3. Perkiraan Biaya</label>
                </div>
                <div class="col-md-9">
                    <input type="hidden" name="perkiraan_biaya_pip">
                    <label for="">:
                        <!-- <b class="total_hps_mata_anggaran"></b> -->
                        <b class="terbilang_hps"> Rp.<?= number_format($total_hps, 2, ',', '.'); ?></b> (<?= terbilang($total_hps) ?> Rupiah) termasuk PPN <?= $row_program_detail['ppn_surat'] ?>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9" style="display: none;" id="multi_years_jika_ada">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            RINCIAN MULTIYERS
                            <div class="card-tools">
                                TOTAL RINCIAN MULTIYEARS : <b class="total_hps_mata_anggaran"></b>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab">
                                <?php foreach ($result_sub_program as $key => $value) { ?>
                                    <li>
                                        <a class="ml-3 nav-link bg-primary" href="#kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                                    </li>
                                <?php  } ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($result_sub_program as $key => $value) { ?>
                                    <div class="tab-pane fade show" id="kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                        <div class="content">
                                            <br>
                                            <div class="card card-outline card-primary">
                                                <div class="card-body">
                                                    <table class="table table-bordered table-striped">
                                                        <thead style="font-size: 12px;" class="thead-inverse bg-primary">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>No Hps</th>
                                                                <th>Uraian</th>
                                                                <th>Total Harga</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="font-size: 10px;">
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_hps_penyedia_1');
                                                            $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                                            $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                            $query_tbl_hps_penyedia_1 = $this->db->get() ?>
                                                            <?php
                                                            foreach ($query_tbl_hps_penyedia_1->result_array() as $key => $value_hps_penyedia_1) { ?>
                                                                <?php
                                                                $id_hps_penyedia_1 = $value_hps_penyedia_1['id_hps_penyedia_1'];
                                                                if ($value_hps_penyedia_1['total_harga']) {
                                                                    $total_hps_penyedia_1 +=  $value_hps_penyedia_1['total_harga'];
                                                                } else {
                                                                    $total_hps_penyedia_1 +=  0;
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td> &nbsp;<?= $value_hps_penyedia_1['no_urut'] ?></td>
                                                                    <td><?= $value_hps_penyedia_1['no_hps'] ?></td>
                                                                    <td><?= $value_hps_penyedia_1['uraian_hps'] ?></td>
                                                                    <?php if ($value_hps_penyedia_1['total_harga']) { ?>
                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_1['total_harga'], 2, ',', '.') ?></td>
                                                                    <?php  } else { ?>
                                                                        <td></td>
                                                                    <?php }
                                                                    ?>
                                                                </tr>
                                                                <?php
                                                                $this->db->select('*');
                                                                $this->db->from('tbl_hps_penyedia_2');
                                                                $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
                                                                $query_tbl_hps_penyedia_2 = $this->db->get() ?>
                                                                <?php
                                                                foreach ($query_tbl_hps_penyedia_2->result_array() as $key => $value_hps_penyedia_2) { ?>
                                                                    <?php
                                                                    $id_hps_penyedia_2 = $value_hps_penyedia_2['id_hps_penyedia_2'];
                                                                    if ($value_hps_penyedia_2['total_harga']) {
                                                                        $total_hps_penyedia_2 +=  $value_hps_penyedia_2['total_harga'];
                                                                    } else {
                                                                        $total_hps_penyedia_2 +=  0;
                                                                    }
                                                                    ?>
                                                                    <tr>
                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_2['no_urut'] ?></td>
                                                                        <td><?= $value_hps_penyedia_2['no_hps'] ?></td>
                                                                        <td><?= $value_hps_penyedia_2['uraian_hps'] ?></td>
                                                                        <?php if ($value_hps_penyedia_2['total_harga']) { ?>
                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_2['total_harga'], 2, ',', '.') ?></td>
                                                                        <?php  } else { ?>
                                                                            <td></td>
                                                                        <?php }
                                                                        ?>
                                                                    </tr>
                                                                    <?php
                                                                    $this->db->select('*');
                                                                    $this->db->from('tbl_hps_penyedia_3');
                                                                    $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
                                                                    $query_tbl_hps_penyedia_3 = $this->db->get() ?>
                                                                    <?php
                                                                    foreach ($query_tbl_hps_penyedia_3->result_array() as $key => $value_hps_penyedia_3) { ?>
                                                                        <?php
                                                                        $id_hps_penyedia_3 = $value_hps_penyedia_3['id_hps_penyedia_3'];
                                                                        if ($value_hps_penyedia_3['total_harga']) {
                                                                            $total_hps_penyedia_3 +=  $value_hps_penyedia_3['total_harga'];
                                                                        } else {
                                                                            $total_hps_penyedia_3 +=  0;
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_3['no_urut'] ?></td>
                                                                            <td><?= $value_hps_penyedia_3['no_hps'] ?></td>
                                                                            <td><?= $value_hps_penyedia_3['uraian_hps'] ?></td>
                                                                            <?php if ($value_hps_penyedia_3['total_harga']) { ?>
                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_3['total_harga'], 2, ',', '.') ?></td>
                                                                            <?php  } else { ?>
                                                                                <td></td>
                                                                            <?php }
                                                                            ?>

                                                                        </tr>
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_hps_penyedia_4');
                                                                        $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
                                                                        $query_tbl_hps_penyedia_4 = $this->db->get() ?>
                                                                        <?php
                                                                        foreach ($query_tbl_hps_penyedia_4->result_array() as $key => $value_hps_penyedia_4) { ?>
                                                                            <?php
                                                                            $id_hps_penyedia_4 = $value_hps_penyedia_4['id_hps_penyedia_4'];
                                                                            if ($value_hps_penyedia_4['total_harga']) {
                                                                                $total_hps_penyedia_4 +=  $value_hps_penyedia_4['total_harga'];
                                                                            } else {
                                                                                $total_hps_penyedia_4 +=  0;
                                                                            }
                                                                            ?>
                                                                            <tr>
                                                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_4['no_urut'] ?></td>
                                                                                <td><?= $value_hps_penyedia_4['no_hps'] ?></td>
                                                                                <td><?= $value_hps_penyedia_4['uraian_hps'] ?></td>
                                                                                <?php if ($value_hps_penyedia_4['total_harga']) { ?>
                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_4['total_harga'], 2, ',', '.') ?></td>
                                                                                <?php  } else { ?>
                                                                                    <td></td>
                                                                                <?php }
                                                                                ?>

                                                                            </tr>
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_5');
                                                                            $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
                                                                            $query_tbl_hps_penyedia_5 = $this->db->get() ?>
                                                                            <?php
                                                                            foreach ($query_tbl_hps_penyedia_5->result_array() as $key => $value_hps_penyedia_5) { ?>
                                                                                <?php
                                                                                $id_hps_penyedia_5 = $value_hps_penyedia_5['id_hps_penyedia_5'];
                                                                                if ($value_hps_penyedia_5['total_harga']) {
                                                                                    $total_hps_penyedia_5 +=  $value_hps_penyedia_5['total_harga'];
                                                                                } else {
                                                                                    $total_hps_penyedia_5 +=  0;
                                                                                }
                                                                                ?>
                                                                                <tr>
                                                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_5['no_urut'] ?></td>
                                                                                    <td><?= $value_hps_penyedia_5['no_hps'] ?></td>
                                                                                    <td><?= $value_hps_penyedia_5['uraian_hps'] ?></td>
                                                                                    <?php if ($value_hps_penyedia_5['total_harga']) { ?>
                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_5['total_harga'], 2, ',', '.') ?></td>
                                                                                    <?php  } else { ?>
                                                                                        <td></td>
                                                                                    <?php }
                                                                                    ?>

                                                                                </tr>
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </tbody>
                                                        <tfoot>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">4. Waktu Pelaksanaan</label>
                </div>
                <div class="col-md-9">
                    <label for="">: <?= $row_program_detail['waktu_pelaksanaan_pip'] ?> (<?= terbilang($row_program_detail['waktu_pelaksanaan_pip']) ?>) <?= $row_program_detail['satuan_pelaksanaan_surat'] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">5. Waktu Pemeliharaan</label>
                </div>
                <div class="col-md-9"><label for="">: <?= $row_program_detail['waktu_pemeliharaan_pip'] ?> (<?= terbilang($row_program_detail['waktu_pemeliharaan_pip']) ?>) <?= $row_program_detail['satuan_pemeliharaan_surat'] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">6. Metode Pengadaan</label>
                </div>
                <div class="col-md-9">
                    <label for="">: <?= $row_program_detail['metode_pengadaan_sk'] ?> Dengan <?= $row_program_detail['pra_pasca_surat'] ?></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">7. Pembebanan Biaya</label>
                </div>
                <div class="col-md-9">
                    <label for="">: Mata Anggaran <?= $row_program_detail['mata_anggaran_surat'] ?> <br> &nbsp; PT Jasamarga Tollroad Maintenance Area <?= $row_program_detail['lokasi_pekerjaan_surat']  ?> <br>&nbsp; <?= $row_program_detail['tahun_anggaran_surat']  ?></label>
                </div>
            </div>
        </div>
        <br>
        <center class="mt-3">
            <b>III. ALASAN METODE PEMILIHAN PENYEDIA JASA</b>
        </center>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for=""><b>1. Alasan Administrasi</b></label>
            </div>
        </div>

        <div style="margin-left: 40px;">
            <?php $i = 0;
            foreach ($data_administrasi as $value) { ?>
                <div class="row">
                    <div class="col-md-1">1.<?= $i + 1 ?></div>
                    <div class="col-md-11" style="margin-left: -40px;">
                        <?= $value['nama_alasan'] ?>
                    </div>
                </div>
            <?php }  ?>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for=""><b>2. Alasan Teknis</b></label>
            </div>
        </div>
        <div style="margin-left: 40px;">
            <?php $i = 0;
            foreach ($data_teknis as $value) { ?>
                <div class="row">
                    <div class="col-md-1">2.<?= $i + 1 ?></div>
                    <div class="col-md-11" style="margin-left: -40px;">
                        <?= $value['nama_alasan'] ?>
                    </div>
                </div>
            <?php }  ?>
        </div>
        <br>
        Demikian disampaikan, atas perhatian dan persetujuan Bapak, kami ucapkan Terima kasih.
        <br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <center>
                    <h6>PT Jasamarga Tollroad Maintenance</h6>
                    <br>
                    <br>
                    <br><br>
                    <h6> <u style="text-transform: capitalize;"><?= $row_program_detail['pengirim_pip_ca_ke_gm'] ?></u></h6>
                    <h6><?= $row_program_detail['jabatan_pengirim_pip_ca_ke_gm'] ?>
                    </h6>

                </center>
                
            </div>
        </div>
        <br><br>
    </div>


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
    <!-- DataTables  & Plugins -->
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

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard2.js"></script> -->

    <!-- Select2 -->
    <script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="<?php echo base_url() ?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="<?php echo base_url() ?>assets/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js"></script>
    <!-- Scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // window.print();


        Kelola_surat()

        function Kelola_surat() {
            var id = $('[name="id_detail_program_penyedia_jasa"]').val();
            $.ajax({
                type: "GET",
                url: "<?= base_url('admin/administrasi_penyedia/byid_detail_program_penyedia_jasa/'); ?>" + id,
                dataType: "JSON",
                success: function(response) {
                    if (response['row_program_detail'].sts_tahun_pembebanan == 'single_years') {
                        $('#multi_years_jika_ada').css('display', 'none')
                    } else {
                        $('#multi_years_jika_ada').css('display', 'block')
                    }
                    $('[name="id_detail_program_penyedia_jasa"]').val(response['row_program_detail'].id_detail_program_penyedia_jasa);
                    $('.nama_pekerjaan').html(response['row_program_detail'].nama_pekerjaan_program_mata_anggaran);
                    $('.nama_area').html(response['row_program_detail'].nama_area);
                    $('.nama_departemen').html(response['row_program_detail'].nama_departemen);
                    $('.jenis_pengadaan').html(response['row_program_detail'].jenis_pengadaan);
                    $('.waktu_pelaksanaan_pip').html(response['row_program_detail'].waktu_pelaksanaan_pip);
                    $('.waktu_pemeliharaan_pip').html(response['row_program_detail'].waktu_pemeliharaan_pip);
                    $('.terbilang_waktu_pemeliharaan_pip').html(terbilang(response['row_program_detail'].waktu_pemeliharaan_pip));
                    $('.terbilang_waktu_pelaksanaan_pip').html(terbilang(response['row_program_detail'].waktu_pelaksanaan_pip));
                    var nilai_total_multi_years = response['row_program_detail'].total_hps_mata_anggaran * response['count_multi_yeras'];
                    $('.total_hps_mata_anggaran').html('Rp. ' + nilai_total_multi_years.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                    $('[name="pagu_biaya"]').val(response['row_program_detail'].pagu_biaya);
                    $('[name="jenis_pengadaan"]').val(response['row_program_detail'].jenis_pengadaan);
                    $('[name="nama_pekerjaan_pip"]').val(response['row_program_detail'].nama_pekerjaan_pip);

                    $('[name="lokasi_pekerjaan_pip"]').val(response['row_program_detail'].lokasi_pekerjaan_pip);
                    $('[name="sasaran_pekerjaan_pip"]').val(response['row_program_detail'].sasaran_pekerjaan_pip);
                    $('[name="biaya_rkap_pip"]').val(response['row_program_detail'].biaya_rkap_pip);
                    $('[name="perkiraan_biaya_pip"]').val(response['row_program_detail'].perkiraan_biaya_pip);
                    $('[name="waktu_pelaksanaan_pip"]').val(response['row_program_detail'].waktu_pelaksanaan_pip);
                    $('[name="waktu_pemeliharaan_pip"]').val(response['row_program_detail'].waktu_pemeliharaan_pip);
                    $('[name="pembebanan_biaya"]').val(response['row_program_detail'].pembebanan_biaya);
                    $('[name="format_persetujuan_pip"]').val(response['row_program_detail'].format_persetujuan_pip);
                    $('[name="format_persetujuan_hps"]').val(response['row_program_detail'].format_persetujuan_hps);
                    $('[name="no_surat_nota"]').val(response['row_program_detail'].no_surat_nota);
                    $('[name="tgl_surat_nota"]').val(response['row_program_detail'].tgl_surat_nota);
                    $('[name="format_persetujuan_nota"]').val(response['row_program_detail'].format_persetujuan_nota);
                    $('[name="total_hps_mata_anggaran"]').val(response['row_program_detail'].total_hps_mata_anggaran);
                    $('.total_hps_pure').html('Rp. ' + response['row_program_detail'].total_hps_mata_anggaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                    $('.terbilang_total_hps_pure').html(terbilang(response['row_program_detail'].total_hps_mata_anggaran));
                    $('.terbilang_hps').html(terbilang(nilai_total_multi_years));
                    $('[name="perkiraan_biaya_pip"]').val(nilai_total_multi_years);
                    $('[name="sts_tahun_pembebanan"]').val(response['row_program_detail'].sts_tahun_pembebanan);

                    // ttd
                    $('[name="nama_ca_ke_gm"]').val(response['row_program_detail'].nama_ca_ke_gm);
                    $('[name="nama_gm_ke_dirops"]').val(response['row_program_detail'].nama_gm_ke_dirops);
                    $('[name="nama_dirops_ke_dirut"]').val(response['row_program_detail'].nama_dirops_ke_dirut);

                    // persetujuan_pip
                    $('[name="no_surat_persetujuan_pip_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_persetujuan_pip_dirops_ke_dirut);
                    $('[name="tgl_surat_persetujuan_pip_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_persetujuan_pip_dirops_ke_dirut);
                    $('[name="nama_persetujuan_pip_dirops_ke_dirut"]').val(response['row_program_detail'].nama_persetujuan_pip_dirops_ke_dirut);

                    // pip
                    $('[name="lampiran_pip_ca_ke_gm"]').val(response['row_program_detail'].lampiran_pip_ca_ke_gm);
                    $('[name="no_surat_pip_ca_ke_gm"]').val(response['row_program_detail'].no_surat_pip_ca_ke_gm);
                    $('[name="tgl_surat_pip_ca_ke_gm"]').val(response['row_program_detail'].tgl_surat_pip_ca_ke_gm);

                    $('[name="lampiran_pip_gm_ke_dirops"]').val(response['row_program_detail'].lampiran_pip_gm_ke_dirops);
                    $('[name="no_surat_pip_gm_ke_dirops"]').val(response['row_program_detail'].no_surat_pip_gm_ke_dirops);
                    $('[name="tgl_surat_pip_gm_ke_dirops"]').val(response['row_program_detail'].tgl_surat_pip_gm_ke_dirops);

                    $('[name="lampiran_pip_dirops_ke_dirut"]').val(response['row_program_detail'].lampiran_pip_dirops_ke_dirut);
                    $('[name="no_surat_pip_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_pip_dirops_ke_dirut);
                    $('[name="tgl_surat_pip_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_pip_dirops_ke_dirut);

                    // hps
                    // ttd
                    $('[name="nama_hps_ca_ke_gm"]').val(response['row_program_detail'].nama_hps_ca_ke_gm);
                    $('[name="nama_hps_gm_ke_dirops"]').val(response['row_program_detail'].nama_hps_gm_ke_dirops);
                    $('[name="nama_hps_dirops_ke_dirut"]').val(response['row_program_detail'].nama_hps_dirops_ke_dirut);
                    // persetujuan_hps
                    $('[name="no_surat_persetujuan_hps_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_persetujuan_hps_dirops_ke_dirut);
                    $('[name="tgl_surat_persetujuan_hps_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_persetujuan_hps_dirops_ke_dirut);
                    $('[name="nama_persetujuan_hps_dirops_ke_dirut"]').val(response['row_program_detail'].nama_persetujuan_hps_dirops_ke_dirut);

                    $('[name="no_surat_hps_ca_ke_gm"]').val(response['row_program_detail'].no_surat_hps_ca_ke_gm);
                    $('[name="tgl_surat_hps_ca_ke_gm"]').val(response['row_program_detail'].tgl_surat_hps_ca_ke_gm);
                    $('[name="lampiran_hps_ca_ke_gm"]').val(response['row_program_detail'].lampiran_hps_ca_ke_gm);

                    $('[name="no_surat_hps_gm_ke_dirops"]').val(response['row_program_detail'].no_surat_hps_gm_ke_dirops);
                    $('[name="tgl_surat_hps_gm_ke_dirops"]').val(response['row_program_detail'].tgl_surat_hps_gm_ke_dirops);
                    $('[name="lampiran_hps_gm_ke_dirops"]').val(response['row_program_detail'].lampiran_hps_gm_ke_dirops);

                    $('[name="no_surat_hps_dirops_ke_dirut"]').val(response['row_program_detail'].no_surat_hps_dirops_ke_dirut);
                    $('[name="tgl_surat_hps_dirops_ke_dirut"]').val(response['row_program_detail'].tgl_surat_hps_dirops_ke_dirut);
                    $('[name="lampiran_hps_dirops_ke_dirut"]').val(response['row_program_detail'].lampiran_hps_dirops_ke_dirut);

                    // nota dinas
                    $('[name="nama_nota_dinas"]').val(response['row_program_detail'].nama_nota_dinas);
                    $('[name="no_surat_nota"]').val(response['row_program_detail'].no_surat_nota);
                    $('[name="tgl_surat_nota"]').val(response['row_program_detail'].tgl_surat_nota);
                    $('[name="lampiran_nota"]').val(response['row_program_detail'].lampiran_nota);

                    // gunning
                    $('[name="no_surat_gunning"]').val(response['row_program_detail'].no_surat_gunning);
                    $('[name="tanggal_gunning"]').val(response['row_program_detail'].tanggal_gunning);
                    $('[name="lampiran_gunning"]').val(response['row_program_detail'].lampiran_gunning);
                    $('[name="tkdn_gunning"]').val(response['row_program_detail'].tkdn_gunning);

                    // loi
                    $('[name="no_surat_loi"]').val(response['row_program_detail'].no_surat_loi);
                    $('[name="tanggal_loi"]').val(response['row_program_detail'].tanggal_loi);
                    $('[name="lampiran_loi"]').val(response['row_program_detail'].lampiran_loi);
                    $('[name="no_surat_penunjukan_loi"]').val(response['row_program_detail'].no_surat_penunjukan_loi);

                    // sho
                    $('[name="no_surat_sho"]').val(response['row_program_detail'].no_surat_sho);
                    $('[name="tanggal_sho"]').val(response['row_program_detail'].tanggal_sho);

                    // smk
                    $('[name="no_surat_smk"]').val(response['row_program_detail'].no_surat_smk);
                    $('[name="tanggal_smk"]').val(response['row_program_detail'].tanggal_smk);
                    $('[name="lampiran_smk"]').val(response['row_program_detail'].lampiran_smk);
                    // hps hps
                    var html = '';
                    var i;
                    for (i = 0; i < response['data_spm'].length; i++) {
                        $hps = response['data_spm'][i].hps;
                        html += '<a href="javascript:;" onclick="hapus_spm(' + response['data_spm'][i].id_spm + ')" class="text-dark"> ' + response['data_spm'][i].nama_spm + ', <i class="text-danger fas fa fa-trash"></i></a>';
                    }
                    $('.result_spm').html(html);

                    var html2 = '';
                    var j;
                    for (j = 0; j < response['data_multi_years'].length; j++) {
                        html2 += '<a href="javascript:;" onclick="hapus_multi_years(' + response['data_multi_years'][j].id_multi_years + ')" class="text-dark"> ' + response['data_multi_years'][j].tahun_multiyers + ', <i class="text-danger fas fa fa-trash"></i></a>';
                    }
                    $('.result_multiyears').html(html2);

                    var html3 = '';
                    var x;
                    for (x = 0; x < response['data_teknis'].length; x++) {
                        html3 += '<div class="row"><div class="col-md-1">2.' + ++x + '</div>' +
                            '<div class="col-md-11" style="margin-left: -40px;">' +
                            '<b>' + response['data_teknis'][x].nama_alasan + '</b>' +
                            '&nbsp;<a href="javascript:;" onclick="hapus_teknis(' + response['data_teknis'][x].id_alasan_teknis + ')" class="text-dark"><i class="text-danger fas fa fa-trash"></i></a>' +
                            '</div>' +
                            '</div>';
                    }
                    $('#alasan_teknis').html(html3);

                    var html4 = '';
                    var o;
                    for (o = 0; o < response['data_administrasi'].length; o++) {
                        html4 += '<div class="row"><div class="col-md-1">1.' + ++o + '</div>' +
                            '<div class="col-md-11" style="margin-left: -40px;">' +
                            '<b>' + response['data_administrasi'][o].nama_alasan + '</b>' +
                            '&nbsp;<a href="javascript:;" onclick="hapus_administrasi(' + response['data_administrasi'][o].id_alasan_administrasi + ')" class="text-dark"><i class="text-danger fas fa fa-trash"></i></a>' +
                            '</div>' +
                            '</div>';
                    }
                    $('#alasan_administrasi').html(html4);
                }
            })
        }

        function terbilang(angka) {

            var bilne = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

            if (angka < 12) {

                return bilne[angka];

            } else if (angka < 20) {

                return terbilang(angka - 10) + " belas";

            } else if (angka < 100) {

                return terbilang(Math.floor(parseInt(angka) / 10)) + " puluh " + terbilang(parseInt(angka) % 10);

            } else if (angka < 200) {

                return "seratus " + terbilang(parseInt(angka) - 100);

            } else if (angka < 1000) {

                return terbilang(Math.floor(parseInt(angka) / 100)) + " ratus " + terbilang(parseInt(angka) % 100);

            } else if (angka < 2000) {

                return "seribu " + terbilang(parseInt(angka) - 1000);

            } else if (angka < 1000000) {

                return terbilang(Math.floor(parseInt(angka) / 1000)) + " ribu " + terbilang(parseInt(angka) % 1000);

            } else if (angka < 1000000000) {

                return terbilang(Math.floor(parseInt(angka) / 1000000)) + " juta " + terbilang(parseInt(angka) % 1000000);

            } else if (angka < 1000000000000) {

                return terbilang(Math.floor(parseInt(angka) / 1000000000)) + " milyar " + terbilang(parseInt(angka) % 1000000000);

            } else if (angka < 1000000000000000) {

                return terbilang(Math.floor(parseInt(angka) / 1000000000000)) + " trilyun " + terbilang(parseInt(angka) % 1000000000000);

            }

        }
    </script>
   <script>
        setTimeout(() => {
            window.print();
        }, 1000);
    </script>
</body>

</html>