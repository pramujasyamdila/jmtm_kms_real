<div class="container">
    <a target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_pip3/' . $row_program['id_detail_program_penyedia_jasa']) ?>" class="btn btn-sm btn-primary">Cetak <i class="fa fa-print"></i></a>
    <div class="row">
        <div class="col-md-6">
            <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
        </div>
    </div><br><br>
    <input type="hidden" name="type_pip_number" value="3">
    <input type="hidden" name="id_detail_program_penyedia_jasa">
    <div class="row">
        <div class="col-md-1">
            <label for="" style="margin-right: auto;">Nomor</label>
        </div>
        <div class="col-md-1">
            <label for="" style="margin-right: auto;"> :</label>
        </div>
        <div class="col-md-4">
            <input type="text" style="margin-left: -80px;" class="" name="no_surat_pip_dirops_ke_dirut" placeholder="No Surat">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
            <label for="" style="margin-left: -15px;"><input type="date" class="" name="tgl_surat_pip_dirops_ke_dirut"></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
            <label for="" style="margin-right: auto;">Lampiran</label>
        </div>
        <div class="col-md-1">
            <label for="" style="margin-right: auto;"> :</label>
        </div>
        <div class="col-md-4">
            <input type="text" class="" style="margin-left: -80px;" name="lampiran_pip_dirops_ke_dirut" placeholder="Lampiran">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
            <label for="" style="margin-right: auto;">Perihal</label>
        </div>
        <div class="col-md-11">
            <label for="" style="margin-left: auto;">:
                <b> Pengajuan Permohonan Izin Prinsip Pengadaan <input type="text" name="jenis_pengadaan"> <b for="" class="nama_pekerjaan"></b></b>
            </label>
        </div>
    </div>
    <div class="mt-5">
        Yth.
        <br>
        <b> Direktur Utama</b> <br>
        PT Jasamarga Tollroad Maintenance <br>
        Gedung C PT Jasa Marga (Persero) Tbk, Lt.1 <br>
        Plaza Tol Taman Mini Indonesia Indah, Jakarta 13550


    </div>
    <div class="mt-4">
        <div class="row">
            <div class="col-md-12">
                Sehubungan deengan akan dilaksanakannya <b>Pengadaan <b for="" class="jenis_pengadaan"></b>
                    <b for="" class="nama_pekerjaan"></b></b>, bersama ini kami mengajukan permohonan izin
                prinsip pengadaan pekerjaan dimaksud dengan penjelasan sebagai berikut :
            </div>
        </div>
    </div>
    <center class="mt-4">
        <b>I. KETERANGAN PEKERJAAN</b>
    </center>
    <div class="mt-3">
        <div class="row">
            <div class="col-md-2">
                <label for="">1. Lokasi Pekerjaan</label>
            </div>
            <div class="col-md-10">
                <label for="">: Ruas Jalan Tol <label for="" class="nama_area"></label></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label for="">2. Sasaran Pekerjaan</label>
            </div>
            <div class="col-md-10">
                <label for="">: Pemenuhan Standar Pelayanan Minimal (SPM) Subtansi Pelayanan
                    <select name="id_spm" onchange="pilih_spm()">
                        <option value="">-- Pilih SPM --</option>
                        <?php foreach ($get_spm as $key => $value) { ?>
                            <option value="<?= $value['id_spm'] ?>"><?= $value['nama_spm'] ?></option>
                        <?php } ?>
                    </select><br>
                    <div class="result_spm"></div>
                </label>
            </div>
        </div>
    </div>

    <center class="mt-4">
        <b>II. KETERANGAN PEMBIAYAAN</b>
    </center>
    <div class="mt-3">
        <div class="row">
            <div class="col-md-3">
                <label for="">1. Pekerjaan</label>
            </div>
            <div class="col-md-9">
                <label for="">: <b for="" class="nama_pekerjaan"></b></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="">2. Pagu Biaya</label>
            </div>
            <div class="col-md-9">
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
                <label for="">: <input type="text" name="pagu_biaya" id="pagu_biaya"> - <input type="text" id="tanpa-rupiah2" name="pagu_biaya" disabled> termasuk PPN 11%</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="">3. Perkiraan Biaya</label>
            </div>
            <div class="col-md-9">
                <input type="hidden" name="perkiraan_biaya_pip">
                <label for="">:
                    <b class="total_hps_mata_anggaran"></b>
                    ( <b class="terbilang_hps"></b> ) termasuk PPN 11%</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-9" style="display: none;" id="multi_years_jika_ada">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        RINCIAN MULTIYERS
                        <div class="card-tools">
                            TOTAL RINCIAN MULTIYEARS : <b class="total_hps_mata_anggaran"></b>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab">
                            <?php foreach ($result_sub_program as $key => $value) { ?>
                                <li>
                                    <a class="ml-3 nav-link bg-primary" href="#kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                                </li>
                            <?php  } ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($result_sub_program as $key => $value) { ?>
                                <div class="tab-pane fade show" id="kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                    <div class="content">
                                        <br>
                                        <div class="card card-outline card-primary">
                                            <div class="card-body">
                                                <table class="table table-bordered table-striped">
                                                    <thead style="font-size: 12px;" class="thead-inverse bg-primary">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>No Hps</th>
                                                            <th>Uraian</th>
                                                            <th>Total Harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 10px;">
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_hps_penyedia_1');
                                                        $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                                        $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                        $query_tbl_hps_penyedia_1 = $this->db->get() ?>
                                                        <?php
                                                        foreach ($query_tbl_hps_penyedia_1->result_array() as $key => $value_hps_penyedia_1) { ?>
                                                            <?php
                                                            $id_hps_penyedia_1 = $value_hps_penyedia_1['id_hps_penyedia_1'];
                                                            if ($value_hps_penyedia_1['total_harga']) {
                                                                $total_hps_penyedia_1 +=  $value_hps_penyedia_1['total_harga'];
                                                            } else {
                                                                $total_hps_penyedia_1 +=  0;
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td> &nbsp;<?= $value_hps_penyedia_1['no_urut'] ?></td>
                                                                <td><?= $value_hps_penyedia_1['no_hps'] ?></td>
                                                                <td><?= $value_hps_penyedia_1['uraian_hps'] ?></td>
                                                                <?php if ($value_hps_penyedia_1['total_harga']) { ?>
                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_1['total_harga'], 2, ',', '.') ?></td>
                                                                <?php  } else { ?>
                                                                    <td></td>
                                                                <?php }
                                                                ?>
                                                            </tr>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_hps_penyedia_2');
                                                            $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
                                                            $query_tbl_hps_penyedia_2 = $this->db->get() ?>
                                                            <?php
                                                            foreach ($query_tbl_hps_penyedia_2->result_array() as $key => $value_hps_penyedia_2) { ?>
                                                                <?php
                                                                $id_hps_penyedia_2 = $value_hps_penyedia_2['id_hps_penyedia_2'];
                                                                if ($value_hps_penyedia_2['total_harga']) {
                                                                    $total_hps_penyedia_2 +=  $value_hps_penyedia_2['total_harga'];
                                                                } else {
                                                                    $total_hps_penyedia_2 +=  0;
                                                                }
                                                                ?>
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_2['no_urut'] ?></td>
                                                                    <td><?= $value_hps_penyedia_2['no_hps'] ?></td>
                                                                    <td><?= $value_hps_penyedia_2['uraian_hps'] ?></td>
                                                                    <?php if ($value_hps_penyedia_2['total_harga']) { ?>
                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_2['total_harga'], 2, ',', '.') ?></td>
                                                                    <?php  } else { ?>
                                                                        <td></td>
                                                                    <?php }
                                                                    ?>
                                                                </tr>
                                                                <?php
                                                                $this->db->select('*');
                                                                $this->db->from('tbl_hps_penyedia_3');
                                                                $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
                                                                $query_tbl_hps_penyedia_3 = $this->db->get() ?>
                                                                <?php
                                                                foreach ($query_tbl_hps_penyedia_3->result_array() as $key => $value_hps_penyedia_3) { ?>
                                                                    <?php
                                                                    $id_hps_penyedia_3 = $value_hps_penyedia_3['id_hps_penyedia_3'];
                                                                    if ($value_hps_penyedia_3['total_harga']) {
                                                                        $total_hps_penyedia_3 +=  $value_hps_penyedia_3['total_harga'];
                                                                    } else {
                                                                        $total_hps_penyedia_3 +=  0;
                                                                    }
                                                                    ?>
                                                                    <tr>
                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_3['no_urut'] ?></td>
                                                                        <td><?= $value_hps_penyedia_3['no_hps'] ?></td>
                                                                        <td><?= $value_hps_penyedia_3['uraian_hps'] ?></td>
                                                                        <?php if ($value_hps_penyedia_3['total_harga']) { ?>
                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_3['total_harga'], 2, ',', '.') ?></td>
                                                                        <?php  } else { ?>
                                                                            <td></td>
                                                                        <?php }
                                                                        ?>

                                                                    </tr>
                                                                    <?php
                                                                    $this->db->select('*');
                                                                    $this->db->from('tbl_hps_penyedia_4');
                                                                    $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
                                                                    $query_tbl_hps_penyedia_4 = $this->db->get() ?>
                                                                    <?php
                                                                    foreach ($query_tbl_hps_penyedia_4->result_array() as $key => $value_hps_penyedia_4) { ?>
                                                                        <?php
                                                                        $id_hps_penyedia_4 = $value_hps_penyedia_4['id_hps_penyedia_4'];
                                                                        if ($value_hps_penyedia_4['total_harga']) {
                                                                            $total_hps_penyedia_4 +=  $value_hps_penyedia_4['total_harga'];
                                                                        } else {
                                                                            $total_hps_penyedia_4 +=  0;
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_4['no_urut'] ?></td>
                                                                            <td><?= $value_hps_penyedia_4['no_hps'] ?></td>
                                                                            <td><?= $value_hps_penyedia_4['uraian_hps'] ?></td>
                                                                            <?php if ($value_hps_penyedia_4['total_harga']) { ?>
                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_4['total_harga'], 2, ',', '.') ?></td>
                                                                            <?php  } else { ?>
                                                                                <td></td>
                                                                            <?php }
                                                                            ?>

                                                                        </tr>
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_hps_penyedia_5');
                                                                        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
                                                                        $query_tbl_hps_penyedia_5 = $this->db->get() ?>
                                                                        <?php
                                                                        foreach ($query_tbl_hps_penyedia_5->result_array() as $key => $value_hps_penyedia_5) { ?>
                                                                            <?php
                                                                            $id_hps_penyedia_5 = $value_hps_penyedia_5['id_hps_penyedia_5'];
                                                                            if ($value_hps_penyedia_5['total_harga']) {
                                                                                $total_hps_penyedia_5 +=  $value_hps_penyedia_5['total_harga'];
                                                                            } else {
                                                                                $total_hps_penyedia_5 +=  0;
                                                                            }
                                                                            ?>
                                                                            <tr>
                                                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_5['no_urut'] ?></td>
                                                                                <td><?= $value_hps_penyedia_5['no_hps'] ?></td>
                                                                                <td><?= $value_hps_penyedia_5['uraian_hps'] ?></td>
                                                                                <?php if ($value_hps_penyedia_5['total_harga']) { ?>
                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_5['total_harga'], 2, ',', '.') ?></td>
                                                                                <?php  } else { ?>
                                                                                    <td></td>
                                                                                <?php }
                                                                                ?>

                                                                            </tr>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </tbody>
                                                    <tfoot>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="">4. Waktu Pelaksanaan</label>
            </div>
            <div class="col-md-9">
                <label for="">: <input type="text" name="waktu_pelaksanaan_pip"> Hari kalender</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="">5. Waktu Pemeliharaan</label>
            </div>
            <div class="col-md-9"><label for="">: <input type="text" name="waktu_pemeliharaan_pip">Hari kalender</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="">6. Metode Pengadaan</label>
            </div>
            <div class="col-md-9">
                <label for="">: <b for="" class="jenis_pengadaan"></b></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="">7. Pembebanan Biaya</label>
            </div>
            <div class="col-md-9">
                <label for="">: RKAP CAPEX PT Jasamarga Tollroad Maintenance Area <label for="" class="nama_area"></label></label>
                <select name="sts_tahun_pembebanan" onchange="pilih_sts_tahun()" id="">
                    <option value="">-- Pilih --</option>
                    <option value="single_years">Single Years</option>
                    <option value="multi_years">Multi Years</option>
                </select>
                <br>
                <div id="pilih_tahun">
                    <select name="tahun_multiyers" onchange="add_multi_years()">
                        <option value="">-- Pilih --</option>
                        <?php $i = 0;
                        for ($i = 1; $i <= 30; $i++) {  ?>
                            <option class="p-2" value="202<?= $i ?>">202<?= $i ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div class="result_multiyears"></div>
            </div>
        </div>
    </div>
    <br>
    <center class="mt-4">
        <b>III. ALASAN METODE PEMILIHAN PENYEDIA JASA</b>
    </center>
    <br>
    <div class="row">
        <div class="col-md-3">
            <label for=""><b>1. Alasan Administrasi</b></label>
        </div>
    </div>

    <div style="margin-left: 40px;">
        <div class="row">
            <div class="col-md-6">
                <textarea name="nama_alasan_administrasi" id="" style="width:100%" rows="2"></textarea>
            </div>
            <div class="col-md-6" style="margin-top: 10px;">
                <label for=""><a href="javascript:;" class="btn btn-primary btn-sm" onclick="Simpan_alasan('administrasi')">Simpan</a></label>
            </div>
        </div>
        <div id="alasan_administrasi"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <img class="mt-5" src="<?= base_url('assets/image/jmtm.png') ?>" alt="" width="350px">
    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <label for=""><b>2. Alasan Teknis</b></label>
        </div>
    </div>
    <div style="margin-left: 40px;">
        <div class="row">
            <div class="col-md-6">
                <textarea name="nama_alasan_teknis" id="" style="width:100%" rows="2"></textarea>
            </div>
            <div class="col-md-6" style="margin-top: 10px;">
                <label for=""><a href="javascript:;" class="btn btn-primary btn-sm" onclick="Simpan_alasan('teknis')">Simpan</a></label>
            </div>
        </div>
        <div id="alasan_teknis"></div>
    </div>
    <br>
    <br>
    <br>
    Demikian disampaikan, atas perhatian dan persetujuan Bapak, kami ucapkan Terima kasih.
    <br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center>
                <br>
                <br>
                <br><br><br><br>
                <h5><input type="text" name="nama_dirops_ke_dirut"></h5>
                <div style="background-color:black;width:100%;height:3px">

                </div>
                <h5>Direktur Operasional
                </h5>

            </center>
        </div>
    </div>
    <br><br>


</div>