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
                                                    <input type="hidden" value="<?= $id_mc ?>" id="id_mc">
                                                    <div style="overflow-x: auto;">
                                                        <table class="table table-striped table-bordered" id="table_dok_mc">
                                                            <thead class="text-center">
                                                                <tr class="bg-primary">
                                                                    <th class="text-white">No</th>
                                                                    <th class="text-white">Nama Dokumen</th>
                                                                    <th class="text-white">Upload</th>
                                                                    <th class="text-white">Download</th>
                                                                    <th class="text-white">Status</th>
                                                                    <th class="text-white">Tgl Upload</th>
                                                                    <th class="text-white">Diupload Oleh</th>
                                                                    <th class="text-white">Status Verifikasi JMTM Pusat</th>
                                                                    <th class="text-white">Keterangan</th>
                                                                    <th class="text-white">Tgl Periksa</th>
                                                                    <!-- <th class="text-white">Upload</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody id="result_dok_mc">

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- ./card-body -->
                                        <!-- /.card-footer -->
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

<!-- Modal -->
<div class="modal fade" id="modal_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Upload Dokumen <label class="nama_dok"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_upload_mc" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="container-fluid">
                        <center>
                            <input type="hidden" name="id_dok_mc">
                            <div class="input-group-append">
                                <input type="file" id="file_mc" class="file_dokumen_mc form-control" name="file_dokumen_mc" />
                            </div>
                            <!-- <br>
                            <br>
                            <button type="button" class="btn btn-danger">Tidak Diperlukan</button> -->
                            <!-- <div style="display: none;" id="error_file" class="alert alert-danger" role="alert">
                            ANDA BELUM MENGISI FILE !!!
                        </div> -->
                        </center>
                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Upload</button>

                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_no" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Keterangan Tidak Valid Dokumen <label class="nama_dok"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_tidak_valid" enctype="multipart/form-data">
                <div class="modal-body">
                    <center>
                        <input type="hidden" name="id_dok_mc">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Isi Keterangan Tidak Valid</label>
                            <br>
                            <textarea id="exampleFormControlTextarea1" name="keterangan" rows="5" cols="50"></textarea>
                        </div>
                        <!-- <br>
                            <br>
                            <button type="button" class="btn btn-danger">Tidak Diperlukan</button> -->
                        <!-- <div style="display: none;" id="error_file" class="alert alert-danger" role="alert">
                            ANDA BELUM MENGISI FILE !!!
                        </div> -->
                    </center>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>

                </div>
            </form>
        </div>
    </div>
</div>