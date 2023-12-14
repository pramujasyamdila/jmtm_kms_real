<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#FFFF00;height:50px;
  position: fixed; top:50px">
        <b>
            <?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?>
        </b>
        <b style="margin-left: auto;"> Administrasi Tagihan</b>
    </nav>
    <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
        <b style="margin-left: auto; font-weight:1000" class="text-black"> Dokumen MC</b>
    </nav>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 3 - DOKUMEN MC </b></h4>
                <h6 style="font-family: 'Poppins', sans-serif;">Modul ini digunakan dalam membuat Data Terkait Tagihan Penyedia Jasa yang dipiliih</h6>
            </div>
        </div>
    </div>
    <section class="section" style="margin-top: -45px;">
        <div class="container-fluid">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body bg-white">
                            <div class="card card-outline card-primary col-md-12">
                                <div class="card-body" style="font-family: RNSSanz-Black;">
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
                            <input type="hidden" value="<?= $id_mc ?>" id="id_mc">
                            <div style="overflow-x: auto;">
                                <table class="table table-striped table-bordered" id="table_dok_mc" style="font-family: RNSSanz-Black; text-transform: uppercase;">
                                    <thead class="text-center" style="background-color:#193B53;">
                                        <tr>
                                            <th class="text-white">No</th>
                                            <th class="text-white">Nama Dokumen</th>
                                            <th class="text-white">Upload</th>
                                            <th class="text-white">Status</th>
                                            <!-- <th class="text-white">Tgl Upload</th>
                                                                    <th class="text-white">Diupload Oleh</th>
                                                                    <th class="text-white">Status Verifikasi JMTM Pusat</th>
                                                                    <th class="text-white">Keterangan</th>
                                                                    <th class="text-white">Tgl Periksa</th> -->
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
    </section>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="modal_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
                            <input type="hidden" name="nama_dok">
                            <input type="hidden" name="no_urut_dok">
                            <input type="hidden" name="id_detail_program_penyedia_jasa">
                            <div class="input-group-append">
                                <input type="file" id="file_mc" class="file_dokumen_mc form-control" name="file_dokumen" />
                            </div>
                            <div style="display: none;" id="error_file" class="alert alert-danger" role="alert">
                                ANDA BELUM MENGISI FILE !!!
                            </div>
                            <br>
                            <br>
                            <table class="table table-striped table-bordered" id="dok_mc_detail">
                                <thead class="text-center">
                                    <tr class="bg-primary">
                                        <th class="text-white">No</th>
                                        <th class="text-white">Tgl Upload</th>
                                        <th class="text-white">File</th>
                                        <th class="text-white">Diupload Oleh</th>
                                        <th class="text-white">Status Verifikasi JMTM Pusat</th>
                                        <th class="text-white">Keterangan</th>
                                        <th class="text-white">Tgl Periksa</th>
                                        <th class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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
                        <input type="text" name="id_dok_mc_detail">
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

<div class="modal fade bd-example-modal-xl" id="modal_upload2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Upload Dokumen <label class="nama_dok"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_upload_mc2" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="container-fluid">
                        <center>
                            <input type="hidden" name="id_detail_program_penyedia_jasa">
                            <input type="hidden" name="jenis_dok">
                            <div class="input-group-append">
                                <input type="file" id="file_mc" class="file_dokumen_mc2 form-control" name="file_dokumen" />
                            </div>
                            <div style="display: none;" id="error_file" class="alert alert-danger" role="alert">
                                ANDA BELUM MENGISI FILE !!!
                            </div>
                            <br>
                            <br>
                            <table class="table table-striped table-bordered" id="dok_mc_detail2">
                                <thead class="text-center">
                                    <tr class="bg-primary">
                                        <th class="text-white">No</th>
                                        <th class="text-white">Tgl Upload</th>
                                        <th class="text-white">File</th>
                                        <th class="text-white">Diupload Oleh</th>
                                        <th class="text-white">Status Verifikasi JMTM Pusat</th>
                                        <th class="text-white">Keterangan</th>
                                        <th class="text-white">Tgl Periksa</th>
                                        <th class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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

<div class="modal fade" id="modal_no2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Keterangan Tidak Valid Dokumen <label class="nama_dok"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_tidak_valid2" enctype="multipart/form-data">
                <div class="modal-body">
                    <center>
                        <input type="hidden" name="id_dok_mc_detail2">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Isi Keterangan Tidak Valid</label>
                            <br>
                            <textarea id="exampleFormControlTextarea1" id="keterangan" name="keterangan" rows="5" cols="50"></textarea>
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