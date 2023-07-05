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
                    $hasil = "minus " . trim(penyebut($nilai));
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
                                        <form action="javascript:;" id="form_update_dokumen_sertifikat_pembayaran" method="post">
                                            <input type="hidden" name="id_mc" value="<?= $row_mc['id_mc'] ?>">
                                            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_mc['id_detail_program_penyedia_jasa'] ?>">
                                            <div class="container">
                                                <center>
                                                    <div>
                                                        <label style="font-size: 15px;"> KWITANSI PEMBAYARAN</label>
                                                        <label for="">(Nomor Kwitansi)</label>
                                                    </div>
                                                </center>
                                                <div class="row mt-5">
                                                    <div class="col-md-2">
                                                        <b>Sudah terima dari</b>
                                                    </div>
                                                    <div class="col-md-7">: <b> PT Jasamarga Tollroad Maintenance</b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Banyaknya Uang</b>
                                                    </div>
                                                    <div class="col-md-7">: <b> <?= terbilang($row_mc['setelah_ppn']) ?> Rupiah</b></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Untuk Pembayaran</b>
                                                    </div>
                                                    <div class="col-md-7">
                                                        : <?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?> (MC Ke-<?= $row_mc['no_mc'] ?>)

                                                        <?=
                                                        $row_mc['setelah_ppn']
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Sesuai Dengan</b>
                                                    </div>
                                                    <div class="col-md-7">
                                                        :
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                &nbsp;&nbsp; Nomor Kontrak
                                                            </div>
                                                            <div class="col-md-8">
                                                                : <?= $row_kontrak['no_kontrak_penyedia'] ?>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-4">
                                                                &nbsp;&nbsp; Tanggal Kontrak
                                                            </div>
                                                            <div class="col-md-8">
                                                                : 23-03-2023
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-2">
                                                        <b>Jumlah</b>
                                                    </div>
                                                    <div class="col-md-7">
                                                        : <?= "Rp " . number_format($row_mc['setelah_ppn'], 2, ',', '.') ?>
                                                    </div>
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
                                                            <label>Tempat,Tanggal</label>
                                                            <br>PT/CV <?= $row_kontrak['nama_penyedia'] ?>
                                                            <br><br>
                                                            {materai & stempel}
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