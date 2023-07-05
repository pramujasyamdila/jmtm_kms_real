<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> CHECKLIST KELENGKAPAN DOKUMEN</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tata_cara_pembayaran/') . $row_mc['id_mc'] ?>">TATA CARA PEMBAYARAN</a></div>
                <div class="breadcrumb-item active"><a href="">CHECKLIST KELENGKAPAN DOKUMEN</a></div>
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
                                        <form action="javascript:;" id="form_update_dokumen_ceklist" method="post">
                                            <input type="hidden" name="id_mc" value="<?= $row_mc['id_mc'] ?>">
                                            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_mc['id_detail_program_penyedia_jasa'] ?>">
                                            <div class="container">
                                                <center>
                                                    <div>
                                                        <label style="font-size: 15px;">CHECKLIST KELENGKAPAN DOKUMEN</label>
                                                    </div>
                                                    <div>
                                                        <label style="font-size: 13px;">PENGAJUAN MONTHLY CERTIFICATE NOMOR <?= ' ' . $row_mc['no_mc'] . ' BULAN ' ?> <?= date("m Y", strtotime($row_mc['tanggal_mc'])) ?></label>
                                                    </div>
                                                </center>
                                                <div class="row mt-5">
                                                    <div class="col-md-2">
                                                        <b>Pekerjaan</b>
                                                    </div>
                                                    <div class="col-md-7">: <b><?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>No Kontrak</b>
                                                    </div>
                                                    <div class="col-md-7">: <b><?= $row_kontrak['no_kontrak_penyedia'] ?></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Tangggal Kontrak</b>
                                                    </div>
                                                    <div class="col-md-7">: <b><?= '22-03-2020' ?></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Kelompok</b>
                                                    </div>
                                                    <div class="col-md-2">: Rutin </b></div>
                                                    <div class="col-md-2"> <input type="checkbox" name="kelompok" <?php if ($row_dokumen_ceklist['kelompok'] == 'rutin') { ?> checked <?php  } else { ?> <?php } ?> value="rutin" class="form-control form-control-sm"></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-2">: Non-Rutin </b></div>
                                                    <div class="col-md-2"> <input type="checkbox" name="kelompok" <?php if ($row_dokumen_ceklist['kelompok'] == 'non rutin') { ?> checked <?php  } else { ?> <?php } ?> value="non rutin" class="form-control form-control-sm"></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>PML / Non-PML</b>
                                                    </div>
                                                    <div class="col-md-2">: Dengan Pemeliharaan </b></div>
                                                    <div class="col-md-2"> <input type="checkbox" name="pml" <?php if ($row_dokumen_ceklist['pml'] == 'dengan pemeliharaan') { ?> checked <?php  } else { ?> <?php } ?> value="dengan pemeliharaan" class="form-control form-control-sm"></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b></b>
                                                    </div>
                                                    <div class="col-md-2">: Tanpa Pemeliharaan </b></div>
                                                    <div class="col-md-2"> <input type="checkbox" name="pml" <?php if ($row_dokumen_ceklist['pml'] == 'tanpa pemeliharaan') { ?> checked <?php  } else { ?> <?php } ?> value="tanpa pemeliharaan" class="form-control form-control-sm"></b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Nilai Pekerjaan</b>
                                                    </div>
                                                    <div class="col-md-10">: <?= "Rp " . number_format($row_mc['setelah_ppn'], 2, ',', '.') ?> </b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Penyedia Jasa</b>
                                                    </div>
                                                    <div class="col-md-10">: <?= $row_kontrak['nama_penyedia'] ?> </b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Monthly Certificat</b>
                                                    </div>
                                                    <div class="col-md-10">: <?= 'No ' . $row_mc['no_mc'] . ' Bulan ' ?> <?= date("m Y", strtotime($row_mc['tanggal_mc'])) ?></b></div>
                                                </div>
                                                <div class="row mt-5">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>URAIAN/DOKUMEN</th>
                                                                <th>DOKUMEN TERSEDIA &LENGKAP</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Sertifikat Pembayaran</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_sertifikat_pembayaran'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_sertifikat_pembayaran" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_sertifikat_pembayaran" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_sertifikat_pembayaran'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Surat Permohonan Pembayaran</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_surat_permohonan_pembayaran'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_surat_permohonan_pembayaran" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <b>No Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input type="text" value="<?= $row_dokumen_ceklist['no_surat_permohonan_pembayaran'] ?>" name="no_surat_permohonan_pembayaran"> </b></div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-3">
                                                                            <b>Tgl Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input style="width:170px" value="<?= $row_dokumen_ceklist['tgl_surat_permohonan_pembayaran'] ?>" name="tgl_surat_permohonan_pembayaran" type="date"> </b></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Kwitansi Pembayaran</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_kwitansi_pembayaran'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_kwitansi_pembayaran" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <b>No Kwitansi</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input type="text" value="<?= $row_dokumen_ceklist['no_surat_kwitansi_pembayaran'] ?>" name="no_surat_kwitansi_pembayaran"> </b></div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-3">
                                                                            <b>Tgl Kwitansi</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input style="width:170px" value="<?= $row_dokumen_ceklist['tgl_surat_kwitansi_pembayaran'] ?>" name="tgl_surat_kwitansi_pembayaran" type="date"> </b></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Faktur Pajak & E-Nofa</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_sertifikat_pembayaran'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_faktur_pajak_1" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_faktur_pajak_1" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_faktur_pajak_1'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Surat Permohonan Pemeriksaan Pekerjaan dan Serah
                                                                    Terima Pekerjaan
                                                                </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_sppt_1'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_sppt_1" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_sppst_1" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_sppst_1'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Faktur Pajak & E-Nofa</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_faktur_pajak_2'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_faktur_pajak_2" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_faktur_pajak_2" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_faktur_pajak_2'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>Surat Permohonan Pemeriksaan Pekerjaan dan Serah
                                                                    Terima Pekerjaan</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_sppt_2'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_sppt_2" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <b>No Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input name="no_surat_sppt_2" value="<?= $row_dokumen_ceklist['no_surat_sppt_2'] ?>" type="text"> </b></div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-3">
                                                                            <b>Tgl Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input name="tgl_surat_sppt_2" value="<?= $row_dokumen_ceklist['tgl_surat_sppt_2'] ?>" style="width:170px" type="date"> </b></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Berita Acara Pemeriksaan Pekerjaan</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_bapp'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_bapp" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <b>No Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input value="<?= $row_dokumen_ceklist['no_surat_bapp'] ?>" name="no_surat_bapp" type="text"> </b></div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-3">
                                                                            <b>Tgl Surat BAPP</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input style="width:170px" value="<?= $row_dokumen_ceklist['tgl_surat_bapp'] ?>" name="tgl_surat_bapp" type="date"> </b></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>Monthly Certificate dan Back Up MC</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_mc_backup_1'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_mc_backup_1" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_mc_backup_1" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_mc_backup_1'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>Referensi Bank (Copy)</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_referensi_bank_1'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_referensi_bank_1" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_referensi_bank_1" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_referensi_bank_1'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>Berita Acara Serah Terima Pekerjaan</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_bastp'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_bastp" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <b>No Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input name="no_surat_bastp" <?= $row_dokumen_ceklist['no_surat_bastp'] ?> type="text"> </b></div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-3">
                                                                            <b>Tgl Surat BAST</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input name="tgl_surat_bastp" <?= $row_dokumen_ceklist['tgl_surat_bastp'] ?> style="width:170px" type="date"> </b></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>NPWP (Copy)</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_npwp_1'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_npwp_1" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_npwp_1" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_npwp_1'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>Surat Pengukuhan Pengusahan Kena Pajak (Copy)</td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_sppkp_1'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_sppkp_1" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_sppkp_1" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_sppkp_1'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>14</td>
                                                                <td>BA Progress Fisik 100% </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_ba_progres_fisik'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_ba_progres_fisik" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <b>Tgl Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input <?= $row_dokumen_ceklist['tgl_surat_ba_progres_fisik'] ?> name="tgl_surat_ba_progres_fisik" type="date"> </b></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>15</td>
                                                                <td>Monthly Certificate dan Back Up MC </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_mc_backup_2'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_mc_backup_2" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <b>Tgl Surat</b>
                                                                        </div>
                                                                        <div class="col-md-9">: <input <?= $row_dokumen_ceklist['tgl_surat_mc_backup_2'] ?> name="tgl_surat_mc_backup_2" type="date"> </b></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>16</td>
                                                                <td>Referensi Bank (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_referensi_bank_2'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_referensi_bank_2" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_referensi_bank_2" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_referensi_bank_2'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>17</td>
                                                                <td>KTP (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_ktp'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_ktp" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_ktp" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_ktp'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>18</td>
                                                                <td>NPWP (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_npwp_2'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_npwp_2" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_npwp_2" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_npwp_2'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>19</td>
                                                                <td>Surat Pengukuhan Pengusahan Kena Pajak (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_sppkp_2'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_sppkp_2" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_sppkp_2" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_sppkp_2'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>20</td>
                                                                <td>SBU dan SIUJK/SIUP (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_sbu'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_sbu" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_sbu" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_sbu'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>21</td>
                                                                <td>Kontrak Jasa Pemborongan (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_kontrak_jasa_pemborongan'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_kontrak_jasa_pemborongan" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_kontrak_jasa_pemborongan" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_kontrak_jasa_pemborongan'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>22</td>
                                                                <td>Addendum (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_addendum'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_addendum" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_addendum" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_addendum'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>23</td>
                                                                <td>SPMK (Copy) </td>
                                                                <td><input type="checkbox" <?php if ($row_dokumen_ceklist['sts_tersedia_spmk'] == '1') { ?> checked <?php  } else { ?> <?php } ?> value="1" name="sts_tersedia_spmk" class="form-control form-control-sm"></td>
                                                                <td>
                                                                    <textarea name="keterangan_spmk" style="width:100%" rows="2"><?= $row_dokumen_ceklist['keterangan_spmk'] ?></textarea>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <p>Seluruh dokumen diatas telah diterima secara lengkap dan benar pada tanggal <input type="date" value="<?= $row_dokumen_ceklist['tgl_dokumen_ceklist'] ?>" name="tgl_dokumen_ceklist"> serta telah dipastikan kesesuainya
                                                        dengan prosedur dan aturan yang berlaku.</p>
                                                    <br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <center>
                                                            <br>
                                                            <br>
                                                            <br><br><br><br>
                                                            <label>Mengetahui,</label>
                                                            <br>
                                                            PT/CV <?= $row_program_kontrak_detail['nama_penyedia'] ?>
                                                            <br><br><br>
                                                            <br><br><br>
                                                            <label>Nama
                                                                <br>Coordinator/Manager Area
                                                            </label>
                                                        </center>
                                                    </div>
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-3">
                                                        <center>
                                                            <br>
                                                            <br>
                                                            <br><br><br><br>
                                                            <label>Tempat, Tanggal <br>
                                                                Diperiksa Oleh :</label>
                                                            <br><br><br><br><br>
                                                            <label>Nama
                                                                <br>Deputy MA Program & Administrasi / Supervisor Administrasi
                                                            </label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <center>
                                            <a href="javascript:;" onclick="update_dokumen_ceklist()" class="btn btn-sm btn-success">Simpan</a>
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