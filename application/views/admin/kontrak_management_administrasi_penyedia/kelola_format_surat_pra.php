<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> Kelola Surat Kontrak</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/administrasi_penyedia') ?>">Kelola Surat</a></div>
            </div>
        </div>

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
                                    <h5><i class="fa fa-book"></i> Kelola Surat Kontrak</h5>
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
                                                            <a class="nav-link active" id="custom-tabs-two-gunning-tab" data-toggle="pill" href="#custom-tabs-two-gunning" role="tab" aria-controls="custom-tabs-two-gunning" aria-selected="true">Gunning</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-loi-tab" data-toggle="pill" href="#custom-tabs-two-loi" role="tab" aria-controls="custom-tabs-two-loi" aria-selected="false">LOI</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-sho-tab" data-toggle="pill" href="#custom-tabs-two-sho" role="tab" aria-controls="custom-tabs-two-sho" aria-selected="false">SHO</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-spmk-tab" data-toggle="pill" href="#custom-tabs-two-spmk" role="tab" aria-controls="custom-tabs-two-spmk" aria-selected="false">SPMK</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-kontrak-tab" data-toggle="pill" href="#custom-tabs-two-kontrak" role="tab" aria-controls="custom-tabs-two-kontrak" aria-selected="false">Kontrak</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-surat_pasca-tab" data-toggle="pill" onclick="Update_Surat_Pasca()" href="#custom-tabs-two-surat_pasca" role="tab" aria-controls="custom-tabs-two-surat_pasca" aria-selected="false">Upload Surat</a>
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
                                                                            <h5 class="card-title">
                                                                                GUNNING
                                                                            </h5>
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
                                                                                        <h5>GUNNING</h5>
                                                                                    </div>
                                                                                    <div class="col-md-3">

                                                                                    </div>
                                                                                </div>



                                                                                <div class="row mt-5">
                                                                                    <div class="col-md-1">
                                                                                        Nomor
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: <input type="text" name="no_surat_gunning"></label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <input type="date" name="tanggal_gunning">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Lampiran
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: <input type="text" name="lampiran_gunning"> </label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Perihal
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: Surat Penunjukan Penyedia Jasa Pemborongan (Gunning) <b for="" class="jenis_pengadaan"></b> <b for="" class="nama_pekerjaan"></b> </label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-5">
                                                                                    Yth.Direktur
                                                                                    <br>
                                                                                    <b> <?= $row_program['nama_penyedia'] ?></b> <br>
                                                                                    {alamat Penyedia} Jl. Surapati No. 5, Bandung
                                                                                    Jawa Barat

                                                                                </div>

                                                                                <div class="row mt-3">
                                                                                    <div class="mt-2">
                                                                                        <label>Berdasarkan Pengumuman Pemenang oleh Panitia Pengadaan <b class="jenis_pengadaan"></b> Pekerjaan di atas, nomor: 11/PAN/SFO REKON PALIKANCI/II/2023, tanggal: 16 Februari 2023, kami tetapkan perusahaan Saudara, <b class="nama_penyedia"></b> sebagai pelaksana pekerjaan tersebut, dengan penjelasan sebagai berikut:
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Harga Penawaran setelah Koreksi
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <label for="" class="total_hps_pure"></label> (<b class="terbilang_total_hps_pure"></b>)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Tingkat Komponen Dalam Negeri (TKDN)
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <input type="number" name="tkdn_gunning"> %</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Jangka Waktu Pelaksanaan
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <label for="" class="waktu_pemeliharaan_pip"></label> (<b class="terbilang_waktu_pemeliharaan_pip"></b> Hari)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Jangka Waktu Pemeliharaan
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <label for="" class="waktu_pelaksanaan_pip"></label> (<b class="terbilang_waktu_pelaksanaan_pip"></b> Hari)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mt-3">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Sehubungan dengan hal tersebut, <?= $row_program['nama_penyedia'] ?> dimohon agar menyerahkan Jaminan Pelaksanaan sebesar 5% (lima perseratus) dari nilai kontrak dengan masa berlaku sejak ditandatanganinya Kontrak sampai dengan Serah Terima Sementara (Provisional Hand Over) ditambah 60 (enam puluh) hari kalender dan dapat diperpanjang bila diperlukan, sebagai syarat ditandatanganinya Kontrak.
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Pelaksanaan pekerjaan di lapangan dapat dimulai setelah diterbitkannya Surat Perintah Mulai Kerja (SPMK) dari PT Jasamarga Tollroad Maintenance.
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Demikian disampaikan, atas perhatian Saudara, kami ucapkan terima kasih.
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <br><br><br>
                                                                                <div class="row">
                                                                                    <di class="col-md-9">

                                                                                    </di>
                                                                                    <div class="col-md-3">
                                                                                        <center>
                                                                                            PT JASAMARGA TOLLROAD MAINTENANCE
                                                                                            <br>
                                                                                            <br>
                                                                                            <br><br><br><br>
                                                                                            <h5> <input type="text" name="nama_dirops_pra"></h5>
                                                                                            <div style="background-color:black;width:100%;height:2px">

                                                                                            </div>
                                                                                            <h5>Direktur Operasi
                                                                                            </h5>
                                                                                        </center>
                                                                                    </div>
                                                                                </div><br>
                                                                                <div>
                                                                                    <a href="javascript:;" onclick="Simpan_semua_surat('gunning')" class="btn btn-sm btn-success">Simpan Gunning</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="custom-tabs-two-loi" role="tabpanel" aria-labelledby="custom-tabs-two-loi-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Surat Pernyataan Kehendak (Letter of Intent)
                                                                            </h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <h5>Surat Pernyataan Kehendak (Letter of Intent)</h5>
                                                                                    </div>
                                                                                    <div class="col-md-3">

                                                                                    </div>
                                                                                </div>



                                                                                <div class="row mt-5">
                                                                                    <div class="col-md-1">
                                                                                        Nomor
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: <input type="text" name="no_surat_loi"></label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <input type="date" name="tanggal_loi">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Lampiran
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: <input type="text" name="lampiran_loi"> </label>
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
                                                                                        <label>: Surat Pernyataan Kehendak (Letter of Intent) <b for="" class="jenis_pengadaan"></b> <b for="" class="nama_pekerjaan"></b> </label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-5">
                                                                                    Yth.Direktur
                                                                                    <br>
                                                                                    <b> <?= $row_program['nama_penyedia'] ?></b> <br>
                                                                                    {alamat Penyedia} Jl. Surapati No. 5, Bandung
                                                                                    Jawa Barat

                                                                                </div>

                                                                                <div class="row mt-3">
                                                                                    <div class="mt-2">
                                                                                        <label>Sehubungan dengan pelaksanaan <b class="nama_pekerjaan"></b> dan berdasarkan Surat
                                                                                            Penunjukan Penyedia Jasa pekerjaan dimaksud, nomor: <input type="text" name="no_surat_gunning">, sambil menunggu proses penandatanganan kontrak serta dengan pertimbangan
                                                                                            bahwa pekerjaan tersebut merupakan program yang harus segera dilaksanakan, dengan ini kami
                                                                                            terbitkan Surat Pernyataan Kehendak (Letter of Intent) agar Saudara dapat memulai pelaksanaan
                                                                                            pekerjaan tersebut, dengan ketentuan sebagai berikut:

                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        1.
                                                                                    </div>
                                                                                    <div class="col-md-11">
                                                                                        <label for="">Lingkup pekerjaan yang dapat dimulai terlebih dahulu meliputi pekerjaan persiapan, diantaranya
                                                                                            mobilisasi personil, peralatan, material, laboratorium serta koordinasi dengan pihak-pihak terkait.</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        2.
                                                                                    </div>
                                                                                    <div class="col-md-11">
                                                                                        <label for="">Pekerjaan tersebut harus dilaksanakan sesuai dengan persyaratan pelaksanaan pekerjaan
                                                                                            (syarat-syarat umum, administrasi, spesifikasi maupun gambar rencana) yang telah ditetapkan
                                                                                            dalam Dokumen Pengadaan.</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Demikian surat ini kami disampaikan untuk dapat digunakan sesuai dengan peraturan dan ketentuan
                                                                                            yang berlaku.
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Demikian disampaikan, atas perhatian dan kerja sama yang baik, kami ucapkan terima kasih.
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <br><br><br>
                                                                                <div class="row">
                                                                                    <di class="col-md-9">

                                                                                    </di>
                                                                                    <div class="col-md-3">
                                                                                        <center>
                                                                                            PT JASAMARGA TOLLROAD MAINTENANCE
                                                                                            <br>
                                                                                            <br>
                                                                                            <br><br><br><br>
                                                                                            <h5> <input type="text" name="nama_dirops_pra"></h5>
                                                                                            <div style="background-color:black;width:100%;height:2px">

                                                                                            </div>
                                                                                            <h5>Direktur Operasi
                                                                                            </h5>
                                                                                        </center>
                                                                                    </div>
                                                                                </div><br>
                                                                                <div>
                                                                                    <a href="javascript:;" onclick="Simpan_semua_surat('loi')" class="btn btn-sm btn-success">Simpan Gunning</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="custom-tabs-two-sho" role="tabpanel" aria-labelledby="custom-tabs-two-sho-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Surat Pernyataan Kehendak (Letter of Intent)
                                                                            </h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <center>
                                                                                            <h5>BERITA ACARA
                                                                                                SERAH TERIMA LAHAN (SHO)
                                                                                                <label for="" class="nama_pekerjaan"></label>
                                                                                            </h5>
                                                                                        </center>

                                                                                    </div>
                                                                                    <div class="col-md-3">

                                                                                    </div>
                                                                                </div>
                                                                                <div style="background-color:black;width:100%;height:2px">
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        NO SURAT
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        : <input type="text" name="no_surat_sho">
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        TANGGAL
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        : <input type="text" name="tanggal_sho">
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mt-3">
                                                                                    <div class="mt-2">
                                                                                        <label>Pada hari ini Selasa, tanggal Dua Puluh Delapan, bulan Maret tahun Dua ribu dua puluh tiga (28-03-2023), kami yang bertanda tangan di bawah ini:
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        I.
                                                                                    </div>
                                                                                    <div class="col-md-11">
                                                                                        <label for="">Adhi Kristiawan, Direktur Operasi PT Jasamarga Tollroad Maintenance, yang berkedudukan di Jakarta Timur, dalam hal ini bertindak untuk jabatannya sebagaimana tersebut di atas dan karenanya berdasarkan Keputusan Direksi Nomor: 130/DIR-I/KPTS/2022 tanggal 1 November 2022 tentang Pedoman Pengadaan Barang dan Jasa di Lingkungan PT Jasamarga Tollroad Maintenance, serta berdasarkan Surat Keputusan Direksi PT Jasa Marga (Persero) Tbk, Nomor : 276/AA.P-6a/2022, tanggal 30 November 2022, tentang mutasi dan penempatan karyawan, dengan demikian mewakili dan bertindak sedemikian untuk dan atas nama PT Jasamarga Tollroad Maintenance selaku Pengguna Jasa, untuk selanjutnya disebut “Pihak Pertama”.</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        II.
                                                                                    </div>
                                                                                    <div class="col-md-11">
                                                                                        <label for="">Devara Juwono HS , Direktur Utama <b class="nama_penyedia"></b> yang {alamat Penyedia},dalam hal ini bertindak untuk jabatannya selaku Direktur Utama dan karenanya berdasarkan Anggaran Dasar Terakhir dibuat Oleh Ny. Herawati Anwar Efendi, S.H.,dengan Akta Nomor : 09 Tahun 2020 dan telah mendapat pengesahan dari Menteri Kehakiman dan Hak Azasi Manusia Republik Indonesia Nomo : C-07400HT.01.01 Tahun 2001 tanggal 04 September 2001 dan perubahannya, dengan demikian mewakili dan bertindak untuk dan atas nama serta sah mewakili <b class="nama_penyedia"></b> selaku Penyedia Jasa, untuk selanjutnya disebut “Pihak Kedua”.</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Berdasarkan Kontrak <b class="jenis_pengadaan"></b> <b class="nama_pekerjaan"></b>, Nomor <?= $row_program['no_kontrak'] ?> tanggal <?= $row_program['tahun_kontrak'] ?>, Pihak Pertama dan Pihak Kedua telah setuju dan sepakat untuk mengadakan Serah Terima Lahan dengan ketentuan-ketentuan sebagai berikut :
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">

                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="mt-2">
                                                                                            <center>
                                                                                                <table class="table table-bordered">
                                                                                                    <thead style="width:300px">
                                                                                                        <tr class="text-center">
                                                                                                            <th>PARAF PIHAK PERTAMA</th>
                                                                                                            <th>PARAF PIHAK KEDUA</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td style="height:100px"></td>
                                                                                                            <td style="height:100px"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </center>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                    </div>
                                                                                </div>
                                                                                <center>
                                                                                    <div>
                                                                                        <b>Pasal 1</b>
                                                                                    </div>
                                                                                </center>
                                                                                <div>
                                                                                    <p>Pihak Pertama menyerahkan kepada Pihak Kedua, dan Pihak Kedua menyatakan menerima dengan baik dari Pihak Pertama lahan yang akan dipergunakan untuk pelaksanaan <b class="nama_pekerjaan"></b> sebagaimana tercantum pada Dokumen Kontrak.</p>
                                                                                </div>

                                                                                <center>
                                                                                    <div>
                                                                                        <b>Pasal 2</b>
                                                                                    </div>
                                                                                </center>
                                                                                <div>
                                                                                    <p>Lahan sebagaimana dimaksud dalam Pasal 1 pemanfaatannya hanya diperuntukkan bagi Pelaksanaan <b class="nama_pekerjaan"></b> serta fasilitas lainnya yang diperlukan sesuai peraturan yang berlaku.</p>
                                                                                </div>

                                                                                <center>
                                                                                    <div>
                                                                                        <b>Pasal 3</b>
                                                                                    </div>
                                                                                </center>
                                                                                <div>
                                                                                    <p>Setiap perubahan yang terjadi akibat pelaksanaan pekerjaan terhadap bangunan utilitas dan atau utilitas yang terletak di dalam, sepanjang melintas di atas atau di bawah lahan sebagaimana dimaksud pada Pasal 1 harus terlebih dahulu mendapatkan persetujuan Pihak Pertama.</p>
                                                                                </div>

                                                                                <center>
                                                                                    <div>
                                                                                        <b>Pasal 4</b>
                                                                                    </div>
                                                                                </center>
                                                                                <div>
                                                                                    <p>Dengan ditandatanganinya Berita Acara Serah Terima Lahan (Site Hand Over) ini, maka segala tanggung jawab yang ada terhadap pemanfaatan lahan sebagaimana dimaksud Pasal 1 menjadi tanggung jawab Pihak Kedua</p>
                                                                                </div>

                                                                                <center>
                                                                                    <div>
                                                                                        <b>Pasal 5</b>
                                                                                    </div>
                                                                                </center>
                                                                                <div>
                                                                                    <p>Berita Acara Serah Terima Lahan (Site Hand Over) ini ditandatangani oleh Pihak Pertama dan Pihak Kedua pada tanggal tersebut diatas, dalam rangkap 2 (dua) dan diberi meterai serta masing-masing mempunyai kekuatan hukum yang sama.</p>
                                                                                </div>
                                                                                <br><br><br>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        <center>
                                                                                            Pihak Kedua <br>
                                                                                            <?= $row_program['nama_penyedia'] ?>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br><br><br><br>
                                                                                            <h5> <input type="text" name="nama_dirut_pra"></h5>
                                                                                            <div style="background-color:black;width:100%;height:2px">

                                                                                            </div>
                                                                                            <h5>Direktur Utama
                                                                                            </h5>
                                                                                        </center>
                                                                                    </div>
                                                                                    <di class="col-md-6">

                                                                                    </di>
                                                                                    <div class="col-md-3">
                                                                                        <center>
                                                                                            Pihak Pertama
                                                                                            <br>
                                                                                            PT JASAMARGA TOLLROAD MAINTENANCE
                                                                                            <br>
                                                                                            <br>
                                                                                            <br><br><br><br>
                                                                                            <h5> <input type="text" name="nama_dirops_pra"></h5>
                                                                                            <div style="background-color:black;width:100%;height:2px">

                                                                                            </div>
                                                                                            <h5>Direktur Operasi
                                                                                            </h5>
                                                                                        </center>
                                                                                    </div>
                                                                                </div><br>
                                                                                <div>
                                                                                    <a href="javascript:;" onclick="Simpan_semua_surat('sho')" class="btn btn-sm btn-success">Simpan SHO</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="custom-tabs-two-spmk" role="tabpanel" aria-labelledby="custom-tabs-two-spmk-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">
                                                                                SPMK
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <h5>Surat Perintah Mulai Kerja (SPMK)</h5>
                                                                                    </div>
                                                                                    <div class="col-md-4">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mt-5">
                                                                                    <div class="col-md-1">
                                                                                        Nomor
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: <input type="text" name="no_surat_smk"></label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <input type="date" name="tanggal_smk">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Lampiran
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: <input type="text" name="lampiran_smk"> </label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Perihal
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label>: Surat Perintah Mulai Kerja (Notice to Proceed) <b for="" class="jenis_pengadaan"></b> <b for="" class="nama_pekerjaan"></b> </label>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>
                                                                                <div class="mt-5">
                                                                                    Yth.Direktur
                                                                                    <br>
                                                                                    <b> <?= $row_program['nama_penyedia'] ?></b> <br>
                                                                                    {alamat Penyedia} Jl. Surapati No. 5, Bandung
                                                                                    Jawa Barat

                                                                                </div>

                                                                                <div class="row mt-3">
                                                                                    <div class="mt-2">
                                                                                        <label>Sehubungan dengan pelaksanaan pekerjaan Jasa Pemborongan <b class="nama_pekerjaan"></b> berdasarkan Kontrak Nomor : <?= $row_program['no_kontrak'] ?> <?= $row_program['tahun_kontrak'] ?>, bersama ini kami instruksikan kepada Saudara untuk dapat segera memulai pelaksanaan pekerjaan dimaksud sesuai dengan ketentuan sebagai berikut :
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Harga Penawaran setelah Koreksi
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <label for="" class="total_hps_pure"></label> (<b class="terbilang_total_hps_pure"></b>)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Tingkat Komponen Dalam Negeri (TKDN)
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <input type="number" name="tkdn_gunning"> %</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Jangka Waktu Pelaksanaan
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <label for="" class="waktu_pemeliharaan_pip"></label> (<b class="terbilang_waktu_pemeliharaan_pip"></b> Hari)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-3">
                                                                                        Jangka Waktu Pemeliharaan
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <label for="">: <label for="" class="waktu_pelaksanaan_pip"></label> (<b class="terbilang_waktu_pelaksanaan_pip"></b> Hari)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mt-3">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Pekerjaan dimaksud harus dilaksanakan sesuai dengan syarat-syarat pelaksanaan Pekerjaan (sesuai dengan Dokumen Kontrak beserta lampirannya).
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="mt-2">
                                                                                        <label>
                                                                                            Demikian Surat Perintah Mulai Kerja (Notice to Proceed) ini kami sampaikan untuk dilaksanakan sebagaimana mestinya, atas perhatian Saudara diucapkan terima kasih.
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <br><br><br>
                                                                                <div class="row">
                                                                                    <di class="col-md-9">

                                                                                    </di>
                                                                                    <div class="col-md-3">
                                                                                        <center>
                                                                                            PT JASAMARGA TOLLROAD MAINTENANCE
                                                                                            <br>
                                                                                            <br>
                                                                                            <br><br><br><br>
                                                                                            <h5> <input type="text" name="nama_dirops_pra"></h5>
                                                                                            <div style="background-color:black;width:100%;height:2px">

                                                                                            </div>
                                                                                            <h5>Direktur Operasi
                                                                                            </h5>
                                                                                        </center>
                                                                                    </div>
                                                                                </div><br>
                                                                                <div>
                                                                                    <a href="javascript:;" onclick="Simpan_semua_surat('smk')" class="btn btn-sm btn-success">Simpan Spmk</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="custom-tabs-two-kontrak" role="tabpanel" aria-labelledby="custom-tabs-two-kontrak-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">
                                                                                Kontrak
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="card card-outline card-primary">
                                                                                    <div class="card-header">
                                                                                        <h3 class="card-title">
                                                                                            No Kontrak
                                                                                        </h3>
                                                                                    </div>
                                                                                    <form id="form_no_kontrak_penyedia" action="javascript;;">
                                                                                        <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                                                                        <div class="card-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <label for="">No Kontrak</label>
                                                                                                    <div class="input-group mb-4">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="far fa-file"> </i>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <input type="text" class="form-control" name="no_kontrak_penyedia" placeholder="No Kontrak">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label for="">Tanggal Kontrak</label>
                                                                                                    <div class="input-group mb-4">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="far fa-file"> </i>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <input type="date" class="form-control" name="tanggal_kontrak_program" placeholder="No Kontrak">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label for="">Tahun Kontrak</label>
                                                                                                    <div class="input-group mb-4">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="far fa-file"> </i>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <select name="tahun_kontrak_program" class="form-control">
                                                                                                            <?php $i = 0;
                                                                                                            for ($i = 20; $i < 30; $i++) {  ?>
                                                                                                                <option value="20<?= $i ?>">20<?= $i ?></option>
                                                                                                            <?php  } ?>

                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="card card-outline card-info">
                                                                                                        <div class="card-header">
                                                                                                            <h3 class="card-title">
                                                                                                                <!-- danang -->
                                                                                                                Upload Kontrak
                                                                                                            </h3>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <div class="container">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="card card-outline card-primary">
                                                                                                                            <div class="card-header">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-10">
                                                                                                                                        Upload Kontrak
                                                                                                                                    </div>
                                                                                                                                    <div class="col-md-2">
                                                                                                                                        <a href="javascript:;" class="btn btn-sm btn-danger" onclick="upload_kontrak_hps('1')">Upload</a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="card-body">
                                                                                                                                <table class="table">
                                                                                                                                    <thead>
                                                                                                                                        <tr>
                                                                                                                                            <th>File</th>
                                                                                                                                            <th>Aksi</th>
                                                                                                                                        </tr>
                                                                                                                                    </thead>
                                                                                                                                    <tbody id="tbl_upload_kontrak">

                                                                                                                                    </tbody>
                                                                                                                                </table>
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
                                                                                    </form>
                                                                                </div>
                                                                                <button type="button" onclick="simpan_data_no_kontrak()" class="btn btn-sm btn-success float-right"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="custom-tabs-two-surat_pasca" role="tabpanel" aria-labelledby="custom-tabs-two-surat_pasca-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">
                                                                                Upload Surat
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Gunning
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_gunning">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Loi
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_loi">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Sho
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_sho">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Spmk
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_spmk">

                                                                                                    </tbody>
                                                                                                </table>
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
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" data-backdrop="false" id="modal_upload_dokumen_pasca" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title"> Upload Surat <label for="" id="name_file"></label></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <center>
                                                        <form id="form_upload_surat_pasca" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_dokumen_surat_pasca">
                                                            <div class="input-group col-md-12">
                                                                <div class="input-group-append">
                                                                    <button class="input-group-text attach_btn btn-grad100" type="button" id="loadFileXml" value="loadXml" onclick="document.getElementById('file').click();"><i class="fas fa-paperclip"></i></button>
                                                                    <input type="file" style="display:none;" id="file" class="file" name="file" />
                                                                </div>
                                                                <input type="text" name="nama_file" class="form-control" disabled>
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
                                                                <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

<div class="modal fade" data-backdrop="false" id="modal_upload_dokumen_kontrak_hps" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"> Upload <label for="" id="kontrak_hps"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_upload_kontrak_hps" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="container-fluid">
                        <center>
                            <input type="hidden" name="sts_dokumen">
                            <input type="hidden" name="id_detail_program_penyedia_jasa">
                            <input type="file" name="nama_file" class="form-control">
                            <div style="display: none;" id="error_file1" class="alert alert-danger" role="alert">
                                ANDA BELUM MENGISI FILE !!!
                            </div>
                        </center>
                        <br>
                        <center>
                            <div class="form-group col-md-6" id="process_kontrakhps" style="display:none;">
                                <small for="" style="display:none;" id="sedang_dikirim_kontrakhps">Sedang Mengupload....</small>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
</div>