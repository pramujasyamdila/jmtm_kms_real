<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:white">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>">
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
                                    <div class="col-md-5">
                                        <img src="<?= base_url('assets/logo.png') ?>" width="250px" alt="">
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6 mt-4">
                                        <label> <i class="fa fa-book"></i> Surat Permohonan Persetujuan Izin Prinsip Ca Ke Operasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="card card-primary card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                <li class="pt-2 px-3">
                                                    <h3 class="card-title"><i class="fas fa fa-envelope"></i></h3>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="custom-tabs-two-gunning-tab" data-toggle="pill" href="#custom-tabs-two-gunning" role="tab" aria-controls="custom-tabs-two-gunning" aria-selected="true">Surat Ca Ke Operasi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-two-gm_ke_dirops-tab" data-toggle="pill" href="#custom-tabs-two-gm_ke_dirops" role="tab" aria-controls="custom-tabs-two-gm_ke_dirops" aria-selected="true">Surat GmOps Ke DirOps</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                                <div class="tab-pane active" id="custom-tabs-two-gunning" role="tabpanel" aria-labelledby="custom-tabs-two-gunning-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card card-outline card-info">
                                                                <div class="card-header">
                                                                    <label class="card-title">
                                                                        Surat Permohonan Persetujuan Izin Prinsip Ca Ke Operasi
                                                                    </label>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label></label>
                                                                            </div>
                                                                            <div class="col-md-3">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-5">
                                                                            <div class="col-md-1">
                                                                                Nomor
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>: <input type="text" name="no_surat_pip_administrasi_addendum_1"></label>
                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <input type="date" name="tanggal_surat_pip_administrasi_addendum_1">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                Lampiran
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>: <input type="text" name="lampiran_surat_pip_administrasi_addendum_1"> </label>
                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                Hal
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>: Permohonan Persetujuan Izin Prinsip Usulan Addendum Nomor 0<label for="" class="no_addendum_trakhir"></label> Atas <b for="" class="jenis_pengadaan"></b> <b for="" class="nama_pekerjaan"></b> </label>
                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-5">
                                                                            Yth.Direktur
                                                                            <br>
                                                                            <b><?= $row_program['nama_departemen'] ?> General Manager <br>
                                                                                PT Jasamarga Tollroad Maintenance
                                                                                <br>
                                                                                Gedung C PT Jasa Marga (Persero) Tbk <br>
                                                                                Lt. 1 Plaza Tol Taman Mini Indonesia Indah <br>
                                                                                Jakarta Timur 13550
                                                                            </b>
                                                                        </div>

                                                                        <div class="row mt-3">
                                                                            <div class="mt-2">
                                                                                <label>
                                                                                    Sehubungan dengan pelaksanaan <b class="nama_pekerjaan"></b>, sesuai dengan Kontrak Nomor : <?= $row_program['no_kontrak_penyedia'] ?> tanggal <?= $row_program['tahun_kontrak'] ?>, bersama ini kami sampaikan permohonan Persetujuan Izin Prinsip Usulan Addendum Nomor 0<label class="no_addendum_trakhir"></label> Kontrak dengan penjelasan sebagai berikut :
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <center>
                                                                            <div>
                                                                                <label for="">I. KETERANGAN PEKERJAAN DAN PEMBIAYAAN</label>
                                                                            </div>
                                                                        </center>
                                                                        <br><br>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                1. Nama Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">: <label for="" class="nama_pekerjaan"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                2. Lokasi Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <label for="">: Ruas Jalan Toll <?= $row_program['nama_area'] ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                3. Pelaksana Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <label for="">: <?= $row_program['nama_penyedia'] ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                4. Sasaran Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label class="result_spm_ppip"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                5. Perkiraan Perubahan Nilai Kontrak
                                                                            </div>
                                                                            <div class="col-md-9">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                Kontrak Awal
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label for="" class="total_kontrak_awal">: </label> (termasuk PPN 11%)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                Usulan Addendum Nomor 0<label for="" class="no_addendum_trakhir"></label>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label for="" class="total_kontrak_addendum_trakhir">: </label> (termasuk PPN 11%)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                6. Waktu Pelaksanaan
                                                                            </div>
                                                                            <div class="col-md-9">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                Kontrak Awal
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label type="number" class="waktu_pelaksanaan_pip"> </label> (Hari Kalender)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                Usulan Addendum Nomor 0<label for="" class="no_addendum_trakhir"></label>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label type="number" class="waktu_pelaksanaan_pip"> </label> (Hari Kalender)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                7. Pembebanan Biaya
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label for="">Anggaran Biaya</label> <label type="number" class="result_multiyears_ppip"> </label>
                                                                                <br> <label for=""> &nbsp; PT Jasamarga Tollroad Maintenance</label>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <center>
                                                                            <div>
                                                                                <label for="">II. DASAR PERTIMBANGAN</label>
                                                                            </div>
                                                                        </center>
                                                                        <br><br>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-1">
                                                                                1.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <label for="">Surat Kepala BPJT Nomor : <input type="text" name="no_surat_sk_BPJT"> tanggal <input type="date" name="tanggal_surat_sk_BPJT"> Perihal <label class="result_spm_ppip"></label></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-1">
                                                                                2.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <label for="">Surat Coordinator Area Jakarta Cikampek Nomor : <input type="text" name="no_surat_ca_ppip"> tanggal <input type="date" name="tanggal_surat_ca_ppip"> Perihal Penyesuaian Tambah/Kurang <label for="" class="nama_pekerjaan"></label></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-1">
                                                                                3.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                : <label for="">Surat Kontraktor Pelaksana <?= $row_program['nama_penyedia'] ?> Nomor : <input type="text" name="no_surat_pelaksana_penyedia_ppip"> tanggal <input type="date" name="tanggal_surat_pelaksana_penyedia_ppip"> Perihal Usulan Addendum Nomor 0<label for="" class="no_addendum_trakhir"></label></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="mt-2">
                                                                                <label>
                                                                                    Demikian disampaikan, atas perhatian dan persetujuan Bapak, kami ucapkan terima kasih.
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <div class="row">
                                                                            <di class="col-md-9">

                                                                            </di>
                                                                            <div class="col-md-3">
                                                                                <center>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br><br><br><br>
                                                                                    <label>
                                                                                        Amri Sanusi
                                                                                    </label>
                                                                                    <div style="background-color:black;width:100%;height:2px">

                                                                                    </div>
                                                                                    <label>Coordinator Area <?= $row_program['nama_area'] ?>
                                                                                    </label>
                                                                                </center>
                                                                            </div>
                                                                        </div><br>
                                                                        <div>
                                                                            <a href="javascript:;" onclick="Simpan_dokumen_Administrasi_addendum('ppip_ca_ke_operasi')" class="btn btn-sm btn-success">Simpan</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="custom-tabs-two-gm_ke_dirops" role="tabpanel" aria-labelledby="custom-tabs-two-gm_ke_dirops-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card card-outline card-info">
                                                                <div class="card-header">
                                                                    <label class="card-title">
                                                                        Surat Permohonan Persetujuan Izin Prinsip GMOps Ke DirOps
                                                                    </label>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label></label>
                                                                            </div>
                                                                            <div class="col-md-3">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-5">
                                                                            <div class="col-md-1">
                                                                                Nomor
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>: <input type="text" name="no_surat_pip_administrasi_addendum_2"></label>
                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <input type="date" name="tanggal_surat_pip_administrasi_addendum_2">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                Lampiran
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>: <input type="text" name="lampiran_surat_pip_administrasi_addendum_2"> </label>
                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                Hal
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>: Persetujuan Izin Prinsip Usulan Addendum Nomor 0<label for="" class="no_addendum_trakhir"></label> Atas <b for="" class="jenis_pengadaan"></b> <b for="" class="nama_pekerjaan"></b> </label>
                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                            <div class="col-md-2">

                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-5">
                                                                            Yth.
                                                                            <br>
                                                                            <b> Coordinator Area <?= $row_program['nama_area'] ?> <br>
                                                                                PT Jasamarga Tollroad Maintenance
                                                                                <br>
                                                                                {Alamat Area} Jl. Teuku Umar Sepanjang Jaya Bekasi 17114
                                                                            </b>
                                                                        </div>

                                                                        <div class="row mt-3">
                                                                            <div class="mt-2">
                                                                                <label>
                                                                                    Sehubungan dengan surat saudara Nomor : <input type="text" name="no_surat_pip_administrasi_addendum_1"> Tanggal <input type="date" name="tanggal_surat_pip_administrasi_addendum_1"> Perihal permohonan Persetujuan Izin Prinsip Usulan Addendum Nomor 0<label class="no_addendum_trakhir"></label> Atas Kontrak <label for="" class="nama_pekerjaan"></label>, bersama ini kami sampaikan bahwa pada prinsipnya kami dapat menyetujui usulan saudara untuk melakukan Addendum Nomor 0<label class="no_addendum_trakhir"></label> Pekerjaan dimaksud dengan ketentuan sebagai berikut :
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                1. Nama Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">: <label for="" class="nama_pekerjaan"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                2. Lokasi Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <label for="">: Ruas Jalan Toll <?= $row_program['nama_area'] ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                3. Pelaksana Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <label for="">: <?= $row_program['nama_penyedia'] ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                4. Sasaran Pekerjaan
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label class="result_spm_ppip"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                5. Perkiraan Perubahan Nilai Kontrak
                                                                            </div>
                                                                            <div class="col-md-9">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                Kontrak Awal
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label for="" class="total_kontrak_awal">: </label> (termasuk PPN 11%)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                Usulan Addendum Nomor 0<label for="" class="no_addendum_trakhir"></label>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label for="" class="total_kontrak_addendum_trakhir">: </label> (termasuk PPN 11%)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                6. Waktu Pelaksanaan
                                                                            </div>
                                                                            <div class="col-md-9">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                Kontrak Awal
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label type="number" class="waktu_pelaksanaan_pip"> </label> (Hari Kalender)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                Usulan Addendum Nomor 0<label for="" class="no_addendum_trakhir"></label>
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label type="number" class="waktu_pelaksanaan_pip"> </label> (Hari Kalender)
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                7. Pembebanan Biaya
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                : <label for="">Anggaran Biaya</label> <label type="number" class="result_multiyears_ppip"> </label>
                                                                                <br> <label for=""> &nbsp; PT Jasamarga Tollroad Maintenance</label>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="row">
                                                                            <div class="mt-2">
                                                                                <label>
                                                                                    Selanjutnya agar segera dilakukan evaluasi, sehingga diperoleh harga yang wajar dan dapat dipertanggungjawabkan.
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="row">
                                                                            <div class="mt-2">
                                                                                <label>
                                                                                    Demikian kami sampaikan, atas perhatian Saudara, diucapkan terima kasih.
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <br><br><br>
                                                                        <div class="row">
                                                                            <di class="col-md-9">

                                                                            </di>
                                                                            <div class="col-md-3">
                                                                                <center>
                                                                                    <br>
                                                                                    <br>
                                                                                    PT Jasamarga Tollroad Maintenance
                                                                                    <br><br><br><br>
                                                                                    <label>
                                                                                        Hendra Nata Saputra
                                                                                    </label>
                                                                                    <div style="background-color:black;width:100%;height:2px">

                                                                                    </div>
                                                                                    <label><?= $row_program['nama_departemen'] ?> General Manager
                                                                                    </label>
                                                                                </center>
                                                                            </div>
                                                                        </div><br>
                                                                        <div>
                                                                            <a href="javascript:;" onclick="Simpan_dokumen_Administrasi_addendum('ppip_gmops_ke_dirops')" class="btn btn-sm btn-success">Simpan</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
                <!--/. container-fluid -->
            </div>
    </section>
    <!-- /.content -->
</div>
</div>
</div>