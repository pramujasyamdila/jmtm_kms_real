<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> SERTIFIKAT PEMBAYARAN</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tata_cara_pembayaran/') . $row_mc['id_mc'] ?>">TATA CARA PEMBAYARAN</a></div>
                <div class="breadcrumb-item active"><a href="">SERTIFIKAT PEMBAYARAN</a></div>
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
                                        <form action="javascript:;" id="form_update_dokumen_sertifikat_pembayaran" method="post">
                                            <input type="hidden" name="id_mc" value="<?= $row_mc['id_mc'] ?>">
                                            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_mc['id_detail_program_penyedia_jasa'] ?>">
                                            <div class="container">
                                                <center>
                                                    <div>
                                                        <label style="font-size: 15px;"> SERTIFIKAT PEMBAYARAN</label>
                                                    </div>
                                                </center>
                                                <div class="row mt-5">
                                                    <div class="col-md-2">
                                                        <b>Nomor</b>
                                                    </div>
                                                    <div class="col-md-7">: <b> <?= $row_kontrak['no_kontrak_penyedia'] ?></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Tanggal</b>
                                                    </div>
                                                    <div class="col-md-7">: <b>23-03-2023</b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Pekerjaan</b>
                                                    </div>
                                                    <div class="col-md-4">
                                                        : <?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>NOMOR SPMK / SPP</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>TANGGAL</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>TAHAP/BULAN/BOBOT</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>BULAN</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>MATA ANGGARAN</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>(A) UANG MUKA</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>(B) NILAI KONTRAK</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-3">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>ADDENDUM</b>
                                                    </div>
                                                    <div class="col-md-3">
                                                        :
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Unit Kerja</b>
                                                    </div>
                                                    <div class="col-md-10">:<?= $row_kontrak['nama_departemen'] . '-' . $row_kontrak['nama_area'] ?></div>
                                                </div>
                                                <div class="row mt-5">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>URAIAN</th>
                                                                <th>BOBOT (%)</th>
                                                                <th>REALISASI BULAN INI (Rp)</th>
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
                                                            <?php
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
                                                                $total_bobot_mc = 0;
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
                                                                        <td><?= $no++ ?></td>
                                                                        <td><?= $value['nama_program_mata_anggaran'] ?></td>
                                                                        <td><?= $total_bobot_mc . '%' ?></td>
                                                                        <td> <?= "Rp " . number_format($total_hps_penyedia_kontrak_mc, 2, ',', '.') ?></td>
                                                                    </tr>
                                                                <?php  } ?>
                                                            <?php  } ?>
                                                            <tr>
                                                                <td>C</td>
                                                                <td colspan="2">JUMLAH</td>
                                                                <td> <?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>D</td>
                                                                <td colspan="2">DIBULATKAN</td>
                                                                <td> <?= "Rp " . number_format(round($row_mc['sd_bulan_ini']), 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>E</td>
                                                                <td colspan="2">PPN 10%</td>
                                                                <td> <?= "Rp " . number_format($row_mc['ppn_total'], 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>F</td>
                                                                <td colspan="2">TOTAL</td>
                                                                <td> <?= "Rp " . number_format($row_mc['setelah_ppn'], 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>G</td>
                                                                <td colspan="2">POTONGAN UANG MUKA KE = <?= $row_mc['nilai_retensi'] . '%' ?> X JUMLAH UANG MUKA</td>
                                                                <?php $hasil_uang_muka =  ($row_mc['nilai_retensi'] / 100) * $row_mc['nilai_uang_muka'] ?>
                                                                <td> <?= "Rp " . number_format($hasil_uang_muka, 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>H</td>
                                                                <td colspan="2">DENDA KETERLAMBATAN / KEKURANGAN</td>
                                                                <td> <?= "Rp " . number_format($row_mc['denda'], 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>I</td>
                                                                <td colspan="2">TAGIHAN BULAN INI</td>
                                                                <td> <?= "Rp " . number_format($row_mc['sd_bulan_ini'], 2, ',', '.') ?></td>
                                                            </tr>

                                                            <tr>
                                                                <td>J</td>
                                                                <td colspan="2">PEMBAYARAN S.D BULAN LALU</td>
                                                                <td> <?= "Rp " . number_format($row_mc['sd_bulan_lalu'], 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>K</td>
                                                                <td colspan="2">PEMBAYARAN S.D BULAN INI (I + J)
                                                                </td>
                                                                <?php
                                                                $totalidanj = $row_mc['sd_bulan_ini'] + $row_mc['sd_bulan_lalu'];
                                                                ?>
                                                                <td> <?= "Rp " . number_format($totalidanj, 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>L</td>
                                                                <td colspan="2">SISA PEMBAYARAN (B - K)</td>
                                                                <?php
                                                                $data_b_j = $row_mc['sd_bulan_ini'] + $row_mc['sd_bulan_lalu'];
                                                                $sisa_pembayran = $row_mc['sd_bulan_ini'] - $data_b_j;
                                                                ?>
                                                                <td> <?= "Rp " . number_format($sisa_pembayran, 2, ',', '.') ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>M</td>
                                                                <td colspan="2">SISA UANG MUKA</td>
                                                                <?php
                                                                $sisa_pembayran = ($row_mc['sd_bulan_ini']) - $totalidanj;
                                                                ?>
                                                                <td> <?= "Rp " . number_format($row_mc['nilai_uang_muka'], 2, ',', '.') ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <p>Pembayaran sudah termasuk PPN 10%</p>
                                                    <br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-3">
                                                        <center>
                                                            <br>
                                                            <br>
                                                            <br><br><br><br>
                                                            <label>PT. Jasamarga Tollroad Maintenance</label>
                                                            <br><br><br><br><br>
                                                            <label>Nama
                                                                <br>Jabatan Pejabat Penandatangan Kontrak
                                                            </label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <center>
                                            <!-- <a href="javascript:;" onclick="update_dokumen_ceklist()" class="btn btn-sm btn-success">Simpan</a> -->
                                        </center>
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