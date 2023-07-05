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
                                        <label> <i class="fa fa-book"></i> ADDENDUN KONTRAK</label>
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
                                                    <a class="nav-link active" id="custom-tabs-two-gunning-tab" data-toggle="pill" href="#custom-tabs-two-gunning" role="tab" aria-controls="custom-tabs-two-gunning" aria-selected="true">ADDENDUN KONTRAK</a>
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
                                                                    ADDENDUN KONTRAK
                                                                    </label>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
                                                                            </div>
                                                                        </div>
                                                                        <center>
                                                                            <div>
                                                                                <label for=""> ADDENDUM NOMOR 0</label><label for="" class="no_addendum_trakhir"></label><br>
                                                                                <label for="">ATAS</label><br>
                                                                                <label for="" class="nama_pekerjaan"></label> <br>
                                                                                <label for="">NOMOR : <?= $row_program['no_kontrak_penyedia'] ?></label>
                                                                            </div>
                                                                        </center>
                                                                        <div style="background-color: black;width:100%;height:2px;"></div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-4">

                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                NOMOR
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                : <input type="text" name="no_surat_administrasi_adenddum">
                                                                            </div>
                                                                            <div class="col-md-4">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-4">

                                                                            </div>
                                                                            <div class="col-md-1">
                                                                                TANGGAL
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                : <input type="date" name="tanggal_surat_administrasi_adenddum">
                                                                            </div>
                                                                            <div class="col-md-4">

                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <p>
                                                                            Pada hari ini Senin, tanggal Tiga puluh satu bulan Maret tahun Dua ribu dua puluh tiga (31-03-2023), kami yang bertandatangan di bawah ini:
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                I.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <p><label for="">Amri Sanusi</label>, Coordinator Area Jakarta-Cikampek PT Jasamarga Tollroad Maintenance, yang berkedudukan Jalan Teuku Umar Sepanjang Jaya, Bekasi 17114, dalam hal ini bertindak untuk jabatannya sebagaimana tersebut di atas dan karenanya berdasarkan Keputusan Direksi PT Jasamarga Tollroad Maintenance nomor 115/SK.DIR/JMTM/X/2020 tanggal 01 Oktober 2020, tentang Mutasi dan Penempatan Karyawan serta berdasarkan Keputusan Direksi PT Jasamarga Tollroad Maintenance nomor 130/DIR-I/KPTS/2022 Tanggal 1 November 2022 tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa di Lingkungan PT Jasamarga Tollroad Maintenance, dengan demikian mewakili Direksi dan bertindak sedemikian untuk dan atas nama PT Jasamarga Tollroad Maintenance selaku Pengguna Jasa, untuk selanjutnya disebut “Pihak Pertama”.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                II.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <p> <label for="">Danur Akhmad Ersa Putrado</label>, Direktur Utama <label for="" class="nama_penyedia"></label> , yang berkedudukan di Jl. Chairil Anwar Gg. Swadaya RT 006/008 No 23A, Kel. Margahayu, Kecamatan Bekasi Timur, Kota Bekasi dalam hal ini bertindak dalam jabatannya selaku Direktur Utama dan karenanya berdasarkan ketentuan dalam Akte Pendirian Perusaahaan Nomor 11 tanggal 10 Oktober 2018, dan Akte Perubahan Perusahaan terakhir Nomor 373 tanggal 16 Juni 2022 , yang dibuat oleh Bedjo Sarwono, SH, M.Kn., Notaris di Kabupaten Bekasi dan telah mendapat pengesahan dari Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor AHU-0118114.AH.01.11 Tahun 2022 tanggal 23 Juni 2022, dengan demikian bertindak sedemikian untuk dan atas nama serta sah mewakili <label for="" class="nama_penyedia"></label>, untuk selanjutnya disebut “Pihak Kedua”.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                Pihak Pertama dan Pihak Kedua secara bersama-sama untuk selanjutnya disebut ”Para Pihak”.
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-10"></div>
                                                                            <div class="col-md-2">
                                                                                Para....
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="row">
                                                                            <div class="col-md-3"></div>
                                                                            <div class="col-md-6">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr class="text-center">
                                                                                            <th>PARAF PIHAK KEDUA</th>
                                                                                            <th>PARAF PIHAK KEDUA</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td style="height: 70px;"></td>
                                                                                            <td style="height: 70px;"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="col-md-3"></div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                Para Pihak menerangkan terlebih dahulu hal-hal sebagai berikut :
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                1.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <p>Bahwa Para Pihak telah membuat dan menandatangani Kontrak Jasa Pemborongan Pekerjaan Pembuatan Signage KM 8 A dan Lansekap Simpang Susun Cikunir Pada Ruas Tol Jakarta- Cikampek Tahun 2022 Nomor : 40/KONTRAK-CA-JAPEK/XI/2022 tanggal 2 November 2022 (untuk selanjutnya disebut ”Kontrak”)</p>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                2.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <p>Bahwa sehubungan dengan adanya perubahan tambah kurang kuantitas dan penambahan item baru pekerjaan Addendum Nomor 01, Operation 2 General Manager telah mengeluarkan surat Persetujuan Izin Prinsip Usulan Addendum Nomor 01 atas Kontrak Jasa Pemborongan Pekerjaan Pembuatan Signage KM 8A dan Lansekap Simpang Susun Cikunir Pada Ruas Tol Jakarta- Cikampek Tahun 2022 Nomor : 322.1/PPIP/GM-OPS/JMTM/XI/2022 tanggal 18 November 2022</p>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                3.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <p>Bahwa dalam rangka menentukan besarnya perhitungan pekerjaan Addendum Nomor 01, sebagaimana dimaksud dalam angka 2 di atas, Pihak Pertama dengan Pihak Kedua telah melakukan Evaluasi dan Negosiasi atas perubahan dimaksud sebagaimana tertuang dalam Berita Acara Evaluasi dan Negosiasi Usulan Addendum Nomor 01 atas Kontrak Jasa Pemborongan Pekerjaan Pembuatan Signage KM 8 A dan Lansekap Simpang Susun Cikunir Pada Ruas Tol Jakarta- Cikampek Tahun 2022 Nomor : 01/BA/SIG.8A/JAPEK/XI/2022 tanggal 23 November 2022</p>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                Berdasarkan hal-hal tersebut diatas, Para Pihak dengan bertindak sebagaimana tersebut diatas telah setuju dan sepakat untuk mengadakan dan membuat Addendum Nomor 01 atas Kontrak (untuk selanjutnya disebut ”Addendum Nomor 01”) dengan syarat dan ketentuan sebagai berikut :
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <center>
                                                                            <div>
                                                                                <label for="">Pasal 1</label>
                                                                            </div>
                                                                        </center>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                Mengubah Pasal 7 ayat 2 Kontrak, sehingga untuk selanjutnya menjadi berbunyi sebagai berikut :
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                2.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                Nilai Kontrak untuk Pekerjaan sebagaimana dimaksud dalam Pasal 1 Kontrak ini adalah sebesar <label for="" class="total_hps_pure"></label>
                                                                                ( <label for="" class="terbilang_total_hps_pure"></label> ) sudah termasuk Pajak Pertambahan Nilai (PPN) sebesar 11% (sebelas perseratus).
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1">
                                                                                2.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                Nilai Kontrak untuk Pekerjaan sebagaimana dimaksud dalam Pasal 1 Kontrak ini adalah sebesar <label for="" class="total_hps_pure"></label>
                                                                                ( <label for="" class="terbilang_total_hps_pure"></label> ) sudah termasuk Pajak Pertambahan Nilai (PPN) sebesar 11% (sebelas perseratus).
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <center>
                                                                            <div>
                                                                                <label for="">Pasal 2</label>
                                                                            </div>
                                                                        </center>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-1">
                                                                                1.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <label for="">Ketentuan-ketentuan dan syarat-syarat lainnya yang termuat dalam Kontrak beserta lampiran-lampirannya tetap berlaku dan mengikat Para Pihak sepanjang tidak diubah secara tegas dengan Addendum Nomor 01 dan Addendum Nomor 01 ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Kontrak.</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-1">
                                                                                2.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <label for="">Addendum Nomor 01 ini berlaku efektif terhitung sejak tanggal ditandatangani Addendum Nomor 01</label>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="row">
                                                                            <div class="col-md-3"></div>
                                                                            <div class="col-md-6">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr class="text-center">
                                                                                            <th>PARAF PIHAK KEDUA</th>
                                                                                            <th>PARAF PIHAK KEDUA</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td style="height: 70px;"></td>
                                                                                            <td style="height: 70px;"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="col-md-3"></div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-1">
                                                                                3.
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                                <label for="">Addendum Nomor 01 ini dibuat dan ditandatangani pada hari, tanggal, bulan dan tahun sebagaimana tersebut diatas dalam rangkap 2 (dua) bermeterai cukup dan masing-masing mempunyai berkekuatan hukum sama.</label>
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
                                                                            <div class="col-md-3">
                                                                                <center>
                                                                                    <br>
                                                                                    Pihak Kedua
                                                                                    <br>
                                                                                    <label for=""><?= $row_program['nama_penyedia']?></label>
                                                                                    <br><br><br><br>
                                                                                    <label>
                                                                                        Danur Akhmad Ersa Putrado
                                                                                    </label>
                                                                                    <div style="background-color:black;width:100%;height:2px">

                                                                                    </div>
                                                                                    <label>Direktur Utama
                                                                                    </label>
                                                                                </center>
                                                                            </div>
                                                                            <di class="col-md-6">

                                                                            </di>
                                                                            <div class="col-md-3">
                                                                                <center>
                                                                                    <br>
                                                                                    Pihak Pertama
                                                                                    <br>
                                                                                    PT Jasamarga Tollroad Maintenance
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