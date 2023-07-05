<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
    <div class="section-header">
            <h1><i class="fa fa-book"></i> DOKUMEN TATA CARA PEMBAYARAN</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/buat_tagihan/') . $row_kontrak['id_kontrak'] ?>">ADMINISTRASI TAGGIHAN</a></div>
                <div class="breadcrumb-item active"><a href="">DOKUMEN TATA CARA PEMBAYARAN</a></div>
            </div>
        </div>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-header">
                                        <h5>Tata Cara Pembayaran Taggihan</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-header">
                                            <?= $row_mc['nama_pekerjaan_program_mata_anggaran'] ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <div class="card card-outline card-primary col-md-12">
                                                        <div class="card-header">
                                                            Note
                                                        </div>
                                                        <div class="card-body">
                                                            <label for="">
                                                                <center>
                                                                    ATURAN UMUM DALAM PROSES PENAGIHAN
                                                                    <br><br>
                                                                </center>
                                                                1. Pembayaran Pekerjaan dilakukan secara terpusat melalui Departemen Keuangan PT. JMTM.

                                                                <br> 2. Tata cara pembayaran mengacu pada kontrak kerja yang disepakati oleh para pihak.
                                                                <br>3. Pembayaran akan dilakukan berdasarkan prestasi pekerjaan (perhitungan yang disepakati
                                                                oleh kedua belah pihak).
                                                                <br> 4. Nilai/jumlah pembayaran yang dinyatakan dalam Berita Acara Pemeriksaan Pekerjaan harus
                                                                berdasarkan pemeriksaan pekerjaan yang dilampirkan atau dilengkapi dengan semua
                                                                kelengkapan dokumen (back up data, foto dokumentasi, dan ketentuan-ketentuan lain
                                                                dalam dokumen kontrak) yang terkait dengan proses pembayaran.
                                                                <br> 5. Pada setiap sertifikat pembayaran harus sudah diperhitungkan atau dikurangi dengan halhal sebagai berikut:
                                                                <br> a) Jumlah nilai pembayaran pada sertifikat pembayaran yang terdahulu;
                                                                <br>b) Potongan-potongan lain sebagaimana ditentukan dalam Kontrak dan ketentuan lainnya,
                                                                antara lain kewajiban perpajakan dan denda (bila ada).
                                                                <br> 6. Pelaksanaan pembayaran dilakukan dalam jangka waktu selambat-lambatnya 30 (tiga puluh)
                                                                hari kerja, terhitung sejak sertifikat pembayaran termasuk seluruh administrasi pembayaran
                                                                diterima secara lengkap dan benar oleh Departemen Keuangan PT. JMTM.
                                                                <br> 7. Pada saat pengiriman berkas ke Area, faktur pajak cukup dengan faktur pajak non barcode.
                                                                Pada saat pengiriman berkas ke Departemen Keuangan, faktur pajak sudah harus barcode
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <table class="table table-striped table-bordered">
                                                        <thead class="text-center">
                                                            <tr class="bg-primary">
                                                                <th class="text-white">No</th>
                                                                <th class="text-white">Nama Format</th>
                                                                <th class="text-white">Keterangan Dokumen</th>
                                                                <th class="text-white" style="width:250px">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Checklist</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/ceklist_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Nota Dinas Permohonan Pembayaran</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Sertifikat Pembayaran</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/sertifikat_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Surat Permohonan Pembayaran</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Kwitansi Pembayaran</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/kwitansi_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Faktur Pajak dan E-NOFA</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>Surat Permohonan Pemeriksaan Pekerjaan dan Serah Terima Pekerjaan</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/bastp_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Berita Acara Pemeriksaan Pekerjaan</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/bapp_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>Acara Serah Terima Pekerjaan/BA PHO</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/ba_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>BA Progress Fisik 100%</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/ba_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>Monthly Certificate</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/mc_1_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.1 Cover MC</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.2 MC *</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/mc_1_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.3 Keterangan Jaminan *</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.4 Rekap MC *</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.5 Rekap Progress Fisik</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.6 Rekap Progress</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.7 Progress Pembayaran</td>
                                                                <td></td>
                                                                <td><a href="" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11.8 Detail Progress Pembayaran</td>
                                                                <td></td>
                                                                <td><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/detail_mc_pembayaran_dokumen/') . $row_mc['id_mc'] ?>" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>Referensi Bank </td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_refrensi_bank_mc','Referensi Bank')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>KTP</td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_ktp_mc','KTP')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>14</td>
                                                                <td>NPWP</td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_npwp_mc','NPWP')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>15</td>
                                                                <td>Surat Pengukuhan Pengusahan Kena Pajak (Copy)</td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_sppkp_mc','Surat Pengukuhan Pengusahan Kena Pajak (Copy)')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>16</td>
                                                                <td>SBU dan SIUJK / SIUP</td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_sbu_mc','SBU dan SIUJK / SIUP')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>17</td>
                                                                <td>Kontrak Jasa Pemborongan</td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_kontrak_jasa_pemborongan_mc','Kontrak Jasa Pemborongan')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>18</td>
                                                                <td>Addendum</td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_addendum_mc','Addendum')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>19</td>
                                                                <td>SPMK</td>
                                                                <td></td>
                                                                <td><a href="javascript:;" onclick="ModalDokumen('file_spmk_mc','SPMK')" class="btn btn-block btn-sm btn-outline-primary"><i class="fas fa fa-database"></i> Keloa Format Dokumen</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- ./card-body -->
                                        <!-- /.card-footer -->
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL BAPP NO 8 -->
                            <div class="modal fade" id="modal_bapp" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title">KELOLA FORMAT BERITA ACARA PEMERIKSAAN PEKERJAAN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="card card-primary card-tabs">
                                                    <div class="card-header p-0 pt-1">
                                                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                            <li class="pt-2 px-3">
                                                                <h3 class="card-title"><i class="fas fa fa-database"></i></h3>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Form BAPP</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="<?= base_url('administrasi_kontrak/administrasi_kontrak/view_dokumen_8/') . $row_mc['id_mc'] ?>">View Format</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-two-tabContent">
                                                            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                                                <form id="form_bapp" action="javascript:;">
                                                                    <div class="col-md-12">
                                                                        <div class="card card-outline card-primary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">
                                                                                    Nomor Surat BAPP
                                                                                </h3>
                                                                            </div>
                                                                            <input type="hidden" name="id_mc">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Nomor</label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-user"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" name="nomor_bapp" placeholder="Nomor">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Tanggal </label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-calendar"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="date" class="form-control" name="tanggal_bapp" placeholder="tanggal">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="card card-outline card-primary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">
                                                                                    Kontrak Pekerjaan
                                                                                </h3>
                                                                            </div>
                                                                            <input type="hidden" name="id_mc">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Nomor</label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-user"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" name="no_pekerjaan_bapp" placeholder="Nomor">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Tanggal </label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-calendar"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="date" class="form-control" name="tanggal_pekerjaan_bapp" placeholder="Nomor">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="card card-outline card-primary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">
                                                                                    Surat Perintah Mulai Kerja
                                                                                </h3>
                                                                            </div>
                                                                            <input type="hidden" name="id_mc">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Nomor</label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-user"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" name="no_pekerjaan_spmk" placeholder="Nomor">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Tanggal </label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-calendar"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="date" class="form-control" name="tanggal_pekerjaan_spmk" placeholder="Nomor">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="card card-outline card-primary">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">
                                                                                    Permohonan Pemeriksaan Pekerjaan dari Pihak Kedua
                                                                                </h3>
                                                                            </div>
                                                                            <input type="hidden" name="id_mc">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Nomor</label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-user"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" name="no_pekerjaan_ppp_pihak_kedua" placeholder="Nomor">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="">Tanggal </label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-calendar"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="date" class="form-control" name="tanggal_pekerjaan_ppp_pihak_kedua" placeholder="Nomor">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" onclick="simpan_bapp(<?= $row_mc['id_mc'] ?>)" class="btn btn-sm btn-success float-right"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- /.col -->
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

<div class="modal fade" id="modal_dok_mc" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="data_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <center>
                        <form id="form_dok_mc" enctype="multipart/form-data">
                            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_mc['id_detail_program_penyedia_jasa'] ?>">
                            <input type="hidden" name="type">
                            <div class="input-group col-md-6">
                                <div class="input-group-append">
                                    <button class="input-group-text attach_btn btn-grad100" type="button" id="loadFileXml" value="loadXml" onclick="document.getElementById('file_mc').click();"><i class="fas fa-paperclip"></i></button>
                                    <input type="file" style="display:none;" id="file_mc" class="file_dokumen_mc" name="file_dokumen_mc" />
                                </div>
                                <input type="text" name="nama_file_dok_mc" class="form-control form-control-sm" placeholder="Nama File....">
                                <div class="input-group-append">
                                    <button type="submit" id="upload" name="upload" class="input-group-text  btn-grad100"><i class="fas fa-upload"></i></button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div style="display: none;" id="error_file" class="alert alert-danger" role="alert">
                            ANDA BELUM MENGISI FILE !!!
                        </div>
                    </center>
                    <br>
                    <center>
                        <div class="form-group col-md-6" id="process" style="display:none;">
                            <small for="" style="display:none;" id="sedang_dikirim">Sedang Mengupload....</small>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="">
                                </div>
                            </div>
                        </div>
                    </center>
                    <table class="table table-hover" id="tabledata_dok_mc">
                        <thead>
                            <tr class="btn-grad100">
                                <th>No</th>
                                <th>Nama Dokumen</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>