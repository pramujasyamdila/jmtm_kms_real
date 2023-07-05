<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
    <div class="section-header">
            <h1><i class="fa fa-book"></i> BA</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tata_cara_pembayaran/') . $row_mc['id_mc'] ?>">TATA CARA PEMBAYARAN</a></div>
                <div class="breadcrumb-item active"><a href="">BA</a></div>
            </div>
        </div>
        <!-- Content Wrapper. Contains page content -->
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
                                        <?php
                                        function tanggal_indo($tanggal, $cetak_hari = true)
                                        {
                                            $hari = array(
                                                1 =>    'Senin',
                                                'Selasa',
                                                'Rabu',
                                                'Kamis',
                                                'Jumat',
                                                'Sabtu',
                                                'Minggu'
                                            );
                                            $split       = explode('-', $tanggal);
                                            $tgl_indo = $split[0];

                                            if ($cetak_hari) {
                                                $num = date('N', strtotime($tanggal));
                                                return $hari[$num];
                                            }
                                            return $tgl_indo;
                                        }
                                        function bulan_indo($tanggal)
                                        {

                                            $bulan = array(
                                                1 =>   'Januari',
                                                'Februari',
                                                'Maret',
                                                'April',
                                                'Mei',
                                                'Juni',
                                                'Juli',
                                                'Agustus',
                                                'September',
                                                'Oktober',
                                                'November',
                                                'Desember'
                                            );
                                            $split       = explode('-', $tanggal);
                                            $bulanku = $bulan[(int)$split[0]];
                                            return $bulanku;
                                        }
                                        $hari = date('d', strtotime($row_dokumen_ceklist['tgl_surat_bastp']));
                                        $bulan = date('m', strtotime($row_dokumen_ceklist['tgl_surat_bastp']));
                                        $tahun = date('Y', strtotime($row_dokumen_ceklist['tgl_surat_bastp']));


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

                                        function tanggal_asli($tanggal, $cetak_hari = false)
                                        {
                                            $hari = array(
                                                1 =>    'Senin',
                                                'Selasa',
                                                'Rabu',
                                                'Kamis',
                                                'Jumat',
                                                'Sabtu',
                                                'Minggu'
                                            );

                                            $bulan = array(
                                                1 =>   'Januari',
                                                'Februari',
                                                'Maret',
                                                'April',
                                                'Mei',
                                                'Juni',
                                                'Juli',
                                                'Agustus',
                                                'September',
                                                'Oktober',
                                                'November',
                                                'Desember'
                                            );
                                            $split       = explode('-', $tanggal);
                                            $tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

                                            if ($cetak_hari) {
                                                $num = date('N', strtotime($tanggal));
                                                return $hari[$num] . ', ' . $tgl_indo;
                                            }
                                            return $tgl_indo;
                                        }

                                        $date_indo = date('Y-m-d', strtotime($row_dokumen_ceklist['tgl_surat_bastp']));
                                        ?>
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
                                        $total_hps_penyedia_kontrak_mc = 0;
                                        $total_bobot_mc = 0;
                                        foreach ($query_tbl_result_sub->result_array() as $key => $value) { ?>
                                            <?php
                                            $this->db->select('*');
                                            $this->db->from('tbl_hps_penyedia_kontrak_mc_1');
                                            $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_mc', $row_mc['id_mc']);
                                            $this->db->where('tbl_hps_penyedia_kontrak_mc_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                            $query_tbl_hps_penyedia_kontrak_mc_1 = $this->db->get() ?>
                                            <?php
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
                                            <?php  } ?>
                                        <?php  } ?>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:10px">
                                                </div>
                                                <div class="col-md-5 mt-5" style="margin-left:-70px">
                                                    <center>
                                                        <label>BERITA ACARA</label>
                                                    </center>
                                                </div>
                                                <div class="col-md-3">
                                                    <img src="https://kintekindo.net/assets/img/profil/30.png" alt="" width="250px" style="margin-top:10px">
                                                </div>
                                            </div>
                                            <br><br><br>
                                            <div class="container-fluid mt-4">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label for="" style="margin-right: auto;">Pekerjaan</label>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="" style="margin-right: auto;">: <?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?></label>
                                                    </div>
                                                    <div class="col-md-1">

                                                    </div>
                                                    <div class="col-md-1">
                                                        <label for="" style="margin-right: -50px;"> Nomor</label>
                                                        <br>
                                                        <label for="" style="margin-right: -50px;"> Tanggal</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="" style="margin-right: -50px;"> : <?= $row_dokumen_ceklist['no_surat_bastp'] ?> </label>
                                                        <br>
                                                        <label for="" style="margin-right: -50px;"> : <?= tanggal_asli($date_indo) ?></label>
                                                    </div>
                                                </div><br><br>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label for="" style="margin-right: auto;">Unit Pekerjaan</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="margin-right: auto;">: <?= $row_kontrak['nama_departemen'] ?> - <?= $row_kontrak['nama_area'] ?> - <?= $row_kontrak['nama_sub_area'] ?></label>
                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                    <div class="col-md-3">

                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <p>
                                                        Pada hari ini <label style="font-weight: bold;" for=""><?= tanggal_indo($hari) ?></label> tanggal <label style="font-weight: bold;" for=""><?= terbilang(date('d', strtotime($bastp_row['tanggal_bastp']))) ?></label> bulan <label for="" style="font-weight: bold;"><?= bulan_indo($bulan) ?></label> tahun <label for="" style="font-weight: bold;"><?= terbilang($tahun) ?></label> (<label style="font-weight: bold;" for=""><?= tanggal_indo($hari) ?>,<?= tanggal_asli($date_indo) ?></label>) berdasarkan:
                                                    </p>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                        </div>
                                                    </div>
                                                </div>
                                                <center class="mt-4">
                                                    <b>I. KETERANGAN PEKERJAAN</b>
                                                </center>
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="">a. Kontrak Pekerjaan</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label for=""> </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for=""> &nbsp;&nbsp;&nbsp; Nomor</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">: <?= $row_kontrak['no_kontrak_penyedia'] ?></label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for=""> &nbsp;&nbsp;&nbsp; Tanggal</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">: 23-03-2023</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="">b. Surat Perintah Mulai Kerja</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <label for=""> </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for=""> &nbsp;&nbsp;&nbsp; Nomor</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">: SPMK/16340.10</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for=""> &nbsp;&nbsp;&nbsp; Tanggal</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">: 23-03-2023</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="">c. BA PHO</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for=""> </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for=""> &nbsp;&nbsp;&nbsp; Nomor</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">: SPPP/16340.10</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label for=""> &nbsp;&nbsp;&nbsp; Tanggal</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">: 23-03-2023</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-left: 40px;">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                        </div>
                                                        <div class="col-md-11" style="margin-left: -40px;">
                                                            <label for="">PIHAK PERTAMA Bersama-sama PIHAK KEDUA telah memeriksa hasil pekerjaan PIHAK KEDUA dengan kesimpulan sebegai berikut:</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label for="">1 &ensp;</label>
                                                        </div>
                                                        <div class="col-md-11" style="margin-left: -40px;">
                                                            <label for="">PIHAK KEDUA telah menyelesaikan Pekerjaan Pengadaan Barang/Jasa*) secara kumulatif sebesar 100 % sampai dengan tanggal <?= $row_mc['sts_tanggal_trakhir'] ?>;</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label for="">2 &ensp;</label>
                                                        </div>
                                                        <div class="col-md-11" style="margin-left: -40px;">
                                                            <label for="">Dengan diselesaikannya pekerjaan sesuai dengan keterangan pada butir 1 diatas, maka PIHAK KEDUA menyerahkan hasil
                                                                pekerjaan kepada PIHAK PERTAMA. PIHAK PERTAMA menyatakan menerima dengan baik hasil pekerjaan tersebut, selanjutnya
                                                                PIHAK KEDUA tetap/tidak*) bertanggung jawab terhadap pekerjaan tersebut sebagaimana dimaksud dalam Kontrak tersebut di
                                                                atas;</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label for="">3 &ensp;</label>
                                                        </div>
                                                        <div class="col-md-11" style="margin-left: -40px;">
                                                            <label for="">Berdasarkan hal tersebut diatas, maka PIHAK KEDUA berhak mendapatkan pembayaran untuk MC/Invoice <?= $row_mc['no_mc'] ?> yaitu sebesar <?= "Rp " . number_format($row_mc['setelah_ppn'], 2, ',', '.') ?> (<?= terbilang($row_mc['setelah_ppn']) ?>) sudah termasuk PPN 10%.</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label for="">4 &ensp;</label>
                                                        </div>
                                                        <div class="col-md-11" style="margin-left: -40px;">
                                                            <label for="">Berita acara ini dapat dinyatakan sebagai berita acara penyelesaian fisik 100% ketika progress pekerjaan Pekerjaan Barang/Jasa
                                                                secara kumulatif telah mencapai 100% sebagaimana poin 2 di atas</label>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    Demikian Berita Acara ini untuk dapat dipergunakan sebagaimana mestinya
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <center>
                                                                <br>
                                                                <br>
                                                                <br><br><br><br>
                                                                <label>PIHAK KEDUA</label>
                                                                <br>
                                                                PT/CV <?= $row_kontrak['nama_penyedia'] ?>
                                                                <br><br><br>
                                                                <br><br><br>
                                                                <label>{Nama}
                                                                    <br>General Superintendent
                                                                </label>
                                                            </center>
                                                        </div>
                                                        <div class="col-md-5"></div>
                                                        <div class="col-md-3">
                                                            <center>
                                                                <br>
                                                                <br>
                                                                <br><br><br><br>
                                                                <label>PIHAK PERTAMA</label>
                                                                <br>PT Jasamarga Tollroad Maintenance
                                                                <br><br><br><br><br>
                                                                <label>{nama}
                                                                    <br>Coordinator/Manager Area
                                                                </label>
                                                            </center>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
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