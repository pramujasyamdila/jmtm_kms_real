<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black"><?= $row_program_kontrak_detail['nama_pekerjaan_program_mata_anggaran'] ?> - <?= $row_program_kontrak_detail['tahun_kontrak_program'] ?> - Lembar Kerja - Pasca Pengadaan</b>
        </nav>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <!-- angga -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-warning">
                                <!-- <div class="card-header">
                                        <div class="row">
                                            <h5> <i class="fa fa-credit-card" aria-hidden="true"></i> KELOLA NILAI KONTRAK</h5>
                                        </div>
                                    </div> -->
                                <input type="hidden" name="id_detail_program_penyedia_jasa_update" value="<?= $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>">
                                <div class="card-body">
                                    <!-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="callout callout-info">
                                                    <center>

                                                    </center>
                                                </div>
                                            </div>
                                        </div> -->
                                    <div class="card-header">
                                        <div class="card-tools">
                                            <a href="javascript:;" onclick="Tambah_addendum_kontrak()" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah_addendum">
                                                <i class="fas fa fa-database"></i> Tambah Addendum</a>
                                        </div>
                                    </div>
                                    <div class="modal fade" data-backdrop="false" data-backdrop="false" id="tambah_addendum" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary text-white">
                                                    <h5 class="modal-title">Tambah Addendum</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="javascript:;" id="form_buat_addendum" method="post">
                                                        <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>">
                                                        <div class="form-group">
                                                            <label for="">No Addendum</label>
                                                            <select name="no_addendum" class="form-control" style="width: 100%;" id="">
                                                                <?php $i = 0;
                                                                for ($i = 1; $i <= 30; $i++) {  ?>
                                                                    <option class="p-2" value="<?= $i ?>"><?= $i ?></option>
                                                                <?php  } ?>
                                                            </select>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label for="">Refrence</label>
                                                            <select class="form-control" name="copy_add">
                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                    <?php
                                                                    if ($value['no_addendum'] == 1) {
                                                                        $romawi_add = 'Addendum Ke I';
                                                                    } else if ($value['no_addendum'] == 2) {
                                                                        $romawi_add = 'Addendum Ke II';
                                                                    } else if ($value['no_addendum'] == 3) {
                                                                        $romawi_add = 'Addendum Ke III';
                                                                    } else if ($value['no_addendum'] == 4) {
                                                                        $romawi_add = 'Addendum Ke IV';
                                                                    } else if ($value['no_addendum'] == 5) {
                                                                        $romawi_add = 'Addendum Ke V';
                                                                    } else if ($value['no_addendum'] == 6) {
                                                                        $romawi_add = 'Addendum Ke VI';
                                                                    } else if ($value['no_addendum'] == 7) {
                                                                        $romawi_add = 'Addendum Ke VII';
                                                                    } else if ($value['no_addendum'] == 8) {
                                                                        $romawi_add = 'Addendum Ke VIII';
                                                                    } else if ($value['no_addendum'] == 9) {
                                                                        $romawi_add = 'Addendum Ke IX';
                                                                    } else if ($value['no_addendum'] == 10) {
                                                                        $romawi_add = 'Addendum Ke X';
                                                                    } else if ($value['no_addendum'] == 11) {
                                                                        $romawi_add = 'Addendum Ke XI';
                                                                    } else if ($value['no_addendum'] == 12) {
                                                                        $romawi_add = 'Addendum Ke XII';
                                                                    } else if ($value['no_addendum'] == 13) {
                                                                        $romawi_add = 'Addendum Ke XIII';
                                                                    } else if ($value['no_addendum'] == 14) {
                                                                        $romawi_add = 'Addendum Ke XIV';
                                                                    } else if ($value['no_addendum'] == 15) {
                                                                        $romawi_add = 'Addendum Ke XV';
                                                                    } else if ($value['no_addendum'] == 16) {
                                                                        $romawi_add = 'Addendum Ke XVI';
                                                                    } else if ($value['no_addendum'] == 17) {
                                                                        $romawi_add = 'Addendum Ke XVII';
                                                                    } else if ($value['no_addendum'] == 18) {
                                                                        $romawi_add = 'Addendum Ke XVIII';
                                                                    } else if ($value['no_addendum'] == 19) {
                                                                        $romawi_add = 'Addendum Ke XIX';
                                                                    } else if ($value['no_addendum'] == 20) {
                                                                        $romawi_add = 'Addendum Ke XX';
                                                                    } else if ($value['no_addendum'] == 21) {
                                                                        $romawi_add = 'Addendum Ke XXI';
                                                                    } else if ($value['no_addendum'] == 22) {
                                                                        $romawi_add = 'Addendum Ke XXII';
                                                                    } else if ($value['no_addendum'] == 23) {
                                                                        $romawi_add = 'Addendum Ke XXIII';
                                                                    } else if ($value['no_addendum'] == 24) {
                                                                        $romawi_add = 'Addendum Ke XXIV';
                                                                    } else if ($value['no_addendum'] == 25) {
                                                                        $romawi_add = 'Addendum Ke XXV';
                                                                    } else if ($value['no_addendum'] == 26) {
                                                                        $romawi_add = 'Addendum Ke XXVI';
                                                                    } else if ($value['no_addendum'] == 27) {
                                                                        $romawi_add = 'Addendum Ke XXVII';
                                                                    } else if ($value['no_addendum'] == 28) {
                                                                        $romawi_add = 'Addendum Ke XXVIII';
                                                                    } else if ($value['no_addendum'] == 29) {
                                                                        $romawi_add = 'Addendum Ke XXIX';
                                                                    } else if ($value['no_addendum'] == 30) {
                                                                        $romawi_add = 'Addendum Ke XXX';
                                                                    } else {
                                                                        $romawi_add = 'Kontrak Awal';
                                                                    }

                                                                    ?>
                                                                    <option value="<?= $value['no_addendum'] ?>"><?= $romawi_add ?></option>
                                                                <?php   } ?>
                                                            </select>
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label for="">Tanggal Addendum</label>
                                                            <input type="date" name="tanggal_addendum" class="form-control">
                                                            <small id="helpId" class="text-muted">Masukan Tanggal Addendum</small>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="javascript:;" onclick="save_addendum()" class="btn btn-primary button_simpan"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <br>
                                                <div class="card card-primary card-tabs">
                                                    <div class="card-header p-0 pt-1">
                                                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                            <li class="pt-2 px-3">
                                                                <h3 class="card-title"><i class="fas fa fa-database"></i></h3>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-two-hps_awal-tab" data-toggle="pill" href="#custom-tabs-two-hps_awal" role="tab" aria-controls="custom-tabs-two-hps_awal" aria-selected="true">Hps</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="custom-tabs-two-kontrak-tab" data-toggle="pill" href="#custom-tabs-two-kontrak" role="tab" aria-controls="custom-tabs-two-kontrak" aria-selected="true">Nilai Kontrak Awal</a>
                                                            </li>
                                                            <?php foreach ($adendum_result as $key => $value) { ?>
                                                                <?php
                                                                if ($value['no_addendum'] == 1) {
                                                                    $romawi_add = 'Addendum I';
                                                                } else if ($value['no_addendum'] == 2) {
                                                                    $romawi_add = 'Addendum II';
                                                                } else if ($value['no_addendum'] == 3) {
                                                                    $romawi_add = 'Addendum III';
                                                                } else if ($value['no_addendum'] == 4) {
                                                                    $romawi_add = 'Addendum IV';
                                                                } else if ($value['no_addendum'] == 5) {
                                                                    $romawi_add = 'Addendum V';
                                                                } else if ($value['no_addendum'] == 6) {
                                                                    $romawi_add = 'Addendum VI';
                                                                } else if ($value['no_addendum'] == 7) {
                                                                    $romawi_add = 'Addendum VII';
                                                                } else if ($value['no_addendum'] == 8) {
                                                                    $romawi_add = 'Addendum VIII';
                                                                } else if ($value['no_addendum'] == 9) {
                                                                    $romawi_add = 'Addendum IX';
                                                                } else if ($value['no_addendum'] == 10) {
                                                                    $romawi_add = 'Addendum X';
                                                                } else if ($value['no_addendum'] == 11) {
                                                                    $romawi_add = 'Addendum XI';
                                                                } else if ($value['no_addendum'] == 12) {
                                                                    $romawi_add = 'Addendum XII';
                                                                } else if ($value['no_addendum'] == 13) {
                                                                    $romawi_add = 'Addendum XIII';
                                                                } else if ($value['no_addendum'] == 14) {
                                                                    $romawi_add = 'Addendum XIV';
                                                                } else if ($value['no_addendum'] == 15) {
                                                                    $romawi_add = 'Addendum XV';
                                                                } else if ($value['no_addendum'] == 16) {
                                                                    $romawi_add = 'Addendum XVI';
                                                                } else if ($value['no_addendum'] == 17) {
                                                                    $romawi_add = 'Addendum XVII';
                                                                } else if ($value['no_addendum'] == 18) {
                                                                    $romawi_add = 'Addendum XVIII';
                                                                } else if ($value['no_addendum'] == 19) {
                                                                    $romawi_add = 'Addendum XIX';
                                                                } else if ($value['no_addendum'] == 20) {
                                                                    $romawi_add = 'Addendum XX';
                                                                } else if ($value['no_addendum'] == 21) {
                                                                    $romawi_add = 'Addendum XXI';
                                                                } else if ($value['no_addendum'] == 22) {
                                                                    $romawi_add = 'Addendum XXII';
                                                                } else if ($value['no_addendum'] == 23) {
                                                                    $romawi_add = 'Addendum XXIII';
                                                                } else if ($value['no_addendum'] == 24) {
                                                                    $romawi_add = 'Addendum XXIV';
                                                                } else if ($value['no_addendum'] == 25) {
                                                                    $romawi_add = 'Addendum XXV';
                                                                } else if ($value['no_addendum'] == 26) {
                                                                    $romawi_add = 'Addendum XXVI';
                                                                } else if ($value['no_addendum'] == 27) {
                                                                    $romawi_add = 'Addendum XXVII';
                                                                } else if ($value['no_addendum'] == 28) {
                                                                    $romawi_add = 'Addendum XXVIII';
                                                                } else if ($value['no_addendum'] == 29) {
                                                                    $romawi_add = 'Addendum XXIX';
                                                                } else if ($value['no_addendum'] == 30) {
                                                                    $romawi_add = 'Addendum XXX';
                                                                } else {
                                                                }

                                                                ?>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="custom-tabs-two-<?= $value['no_addendum'] ?>-tab" data-toggle="pill" href="#custom-tabs-two-<?= $value['no_addendum'] ?>" role="tab" aria-controls="custom-tabs-two-<?= $value['no_addendum'] ?>" aria-selected="true"><?= $romawi_add ?></a>
                                                                </li>
                                                            <?php   } ?>

                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-two-tabContent">
                                                            <div class="tab-pane fade show active" id="custom-tabs-two-hps_awal" role="tabpanel" aria-labelledby="custom-tabs-two-hps_awal-tab">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="card card-outline card-danger">
                                                                            <div class="card-body">
                                                                                <h5>Note!</h5>
                                                                                <p>Setelah Anda Selesai Melakukan Perubahan Pada Tabel Kontrak Awal Dan Addendum Harap Lakukan Validasi Dengan Menklik Tombol Simpan Dan Update Yang Berada Pada Bawah Table</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card card-outline card-primary col-md-4">
                                                                        <div class="card-header">
                                                                            TOTAL NILAI HPS &nbsp; <i class="fa fa-credit-card" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <label for="">
                                                                                <?= "Rp " . number_format($row_program_kontrak_detail['total_hps_mata_anggaran'], 2, ',', '.') ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nav nav-tabs" id="myTab">
                                                                    <li>
                                                                        <a class="nav-link  text-white" href="#rekap_hps_awal" style="background-color: #193B53;">Rekap Penjelasan</a>
                                                                    </li>
                                                                    <?php foreach ($result_sub_program as $key => $value) { ?>
                                                                        <li>
                                                                            <a class="nav-link  text-white" href="#kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?> " style="background-color: #193B53;"><?= $value['nama_program_mata_anggaran'] ?></a>
                                                                        </li>
                                                                    <?php  } ?>
                                                                </ul>
                                                                <div class="tab-content mt-3">
                                                                    <div class="tab-pane fade show" id="rekap_hps_awal">
                                                                        <div class="content">
                                                                            <br>
                                                                            <div class="card">
                                                                                <div class="card-header bg-warning text-white">
                                                                                    PENJELASAN REKAP KONTRAK AWAL
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                                                        <thead class="thead-inverse bg-primary text-white">
                                                                                        <tr style="background-color: #193B53;color:white">
                                                                                                <th style="color:white;">No</th>
                                                                                                <th style="color:white;">Mata Anggaran</th>
                                                                                                <th style="color:white;">Subtotal (Sebelum PPN)</th>
                                                                                                <th style="color:white;">PPN</th>
                                                                                                <th style="color:white;">Subtotal (Setelah PPN)</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php $nomor = 1;
                                                                                            foreach ($result_rekap_hps as $key => $value) { ?>
                                                                                                <tr>
                                                                                                    <td><?= $nomor++ ?></td>
                                                                                                    <td><?= $value['nama_program_mata_anggaran'] ?></td>
                                                                                                    <td><?= "Rp " . number_format($value['total_sebelum_ppn'], 2, ',', '.') ?></td>
                                                                                                    <td><?= "Rp " . number_format($value['ppn'], 2, ',', '.') ?></td>
                                                                                                    <td><?= "Rp " . number_format($value['total_setelah_ppn'], 2, ',', '.') ?></td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php foreach ($result_sub_program as $key => $value) { ?>
                                                                        <div class="tab-pane fade show" id="kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                                                            <div class="content">
                                                                                <br>
                                                                                <div class="card card-outline card-primary">
                                                                                    <div class="card-header">
                                                                                        <i>
                                                                                            DKH <?= $value['nama_program_mata_anggaran'] ?>
                                                                                        </i>

                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div style="overflow-x: auto;">
                                                                                            <table class="table table-bordered table-striped" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                                                                <thead style="font-size: 12px;" class="thead-inverse bg-primary text-white">
                                                                                                    <tr style="background-color: #193B53;color:white">
                                                                                                        <th class="text-white">No</th>
                                                                                                        <th class="text-white">Nomor Mata Pembayaran</th>
                                                                                                        <th class="text-white">Uraian</th>
                                                                                                        <th class="text-white">Satuan</th>
                                                                                                        <th class="text-white">Kuantitas</th>
                                                                                                        <th class="text-white">Harga Satuan</th>
                                                                                                        <th class="text-white">Jumlah Harga</th>
                                                                                                        <th class="text-white">TKDN</th>
                                                                                                        <th class="text-white">Harga Satuan TKDN</th>
                                                                                                        <th class="text-white">Jumlah Harga TKDN</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody style="font-size: 10px;">
                                                                                                    <?php
                                                                                                    $this->db->select('*');
                                                                                                    $this->db->from('tbl_hps_penyedia_1');
                                                                                                    $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                                                                                    $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                                                                    $this->db->order_by('no_urut', 'ASC');
                                                                                                    $query_tbl_hps_penyedia_1 = $this->db->get() ?>
                                                                                                    <?php
                                                                                                    $no = 1;
                                                                                                    $total_hps_penyedia_1 = 0;
                                                                                                    foreach ($query_tbl_hps_penyedia_1->result_array() as $key => $value_hps_penyedia_1) { ?>
                                                                                                        <?php
                                                                                                        if ($value_hps_penyedia_1['total_harga']) {
                                                                                                            $total_hps_penyedia_1 +=  $value_hps_penyedia_1['total_harga'];
                                                                                                        } else {
                                                                                                            $total_hps_penyedia_1 +=  0;
                                                                                                        }
                                                                                                        ?>
                                                                                                        <tr>
                                                                                                            <td> &nbsp;<?= $no++ ?></td>
                                                                                                            <td><?= $value_hps_penyedia_1['no_hps'] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_1['uraian_hps'] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_1['satuan_hps'] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_1['volume_hps'] ?></td>
                                                                                                            <?php if ($value_hps_penyedia_1['harga_satuan_hps']) { ?>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_1['harga_satuan_hps'], 2, ',', '.') ?></td>
                                                                                                            <?php  } else { ?>
                                                                                                                <td></td>
                                                                                                            <?php }
                                                                                                            ?>
                                                                                                            <?php if ($value_hps_penyedia_1['total_harga']) { ?>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_1['total_harga'], 2, ',', '.') ?></td>
                                                                                                            <?php  } else { ?>
                                                                                                                <td></td>
                                                                                                            <?php }
                                                                                                            ?>
                                                                                                            <td><?= $value_hps_penyedia_1['tkdn'] ?>%</td>
                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_1['harga_satuan_tkdn'], 2, ',', '.') ?></td>
                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_1['jumlah_harga_tkdn'], 2, ',', '.') ?></td>
                                                                                                        </tr>
                                                                                                    <?php } ?>
                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                    <tr>
                                                                                                        <td colspan="2">
                                                                                                            <label for="" style="font-size: 12px;">SUBTOTAL (SEBELUM PPN Rp.)</label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                        <?php                                                                       ?>
                                                                                                        <td>
                                                                                                            <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_hps_penyedia_1, 2, ',', '.') ?>
                                                                                                            </label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="2">
                                                                                                            <label for="" style="font-size: 12px;">PPN(<?= $value['ppn_hps'] ?>%)
                                                                                                                <!-- <select name="ppn_hps<?= $value['id_detail_sub_program_penyedia_jasa'] ?>" onchange="pilih_ppn_sub_program('<?= $value['id_detail_sub_program_penyedia_jasa'] ?>')">
                                                                                                                <option selected value="<?= $value['ppn_hps'] ?>">--Pilih PPN--</option>
                                                                                                                <option value="10">10%</option>
                                                                                                                <option value="11">11%</option>
                                                                                                                <option value="12">12%</option>
                                                                                                            </select> -->
                                                                                                            </label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                        <?php
                                                                                                        $total_ppn = ($value['ppn_hps'] * $total_hps_penyedia_1) / 100;
                                                                                                        $total_setelah_ppn = $total_ppn + $total_hps_penyedia_1;
                                                                                                        ?>
                                                                                                        <td>
                                                                                                            <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_ppn, 2, ',', '.') ?>
                                                                                                            </label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="2">
                                                                                                            <label for="" style="font-size: 12px;">TOTAL (SETELAH PPN Rp.)</label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                        <?php                                                                       ?>
                                                                                                        <td>
                                                                                                            <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_setelah_ppn, 2, ',', '.') ?>
                                                                                                            </label>
                                                                                                        </td>
                                                                                                        <td colspan="3"></td>
                                                                                                    </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    <?php  } ?>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade show" id="custom-tabs-two-kontrak" role="tabpanel" aria-labelledby="custom-tabs-two-kontrak-tab">
                                                                <input type="hidden" name="type_add_update" value="0">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="card card-outline card-danger">
                                                                            <div class="card-body">
                                                                                <h5>Note!</h5>
                                                                                <p>Setelah Anda Selesai Melakukan Perubahan Pada Tabel Kontrak Awal Dan Addendum Harap Lakukan Validasi Dengan Menklik Tombol Simpan Dan Update Yang Berada Pada Bawah Table</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card card-outline card-primary col-md-4">
                                                                        <div class="card-header">
                                                                            TOTAL NILAI KONTRAK AWAL
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <label for="">
                                                                                <?= "Rp " . number_format($row_program_kontrak_detail['total_kontrak'], 2, ',', '.') ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nav nav-tabs" id="myTabKontrak" style="margin-top: 50px;">
                                                                    <li>
                                                                        <a class="nav-link  text-white" href="#rekap_kontrak_awal" style="background-color: #193B53;">Rekap Penjelasan</a>
                                                                    </li>
                                                                    <?php foreach ($result_sub_program as $key => $value) { ?>
                                                                        <li>
                                                                            <a style="background-color: #193B53;" class="nav-link text-white" href="#kirun_kontrak<?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                                                                        </li>
                                                                    <?php  } ?>
                                                                </ul>
                                                                <div class="tab-content mt-3">
                                                                    <div class="tab-pane fade show" id="rekap_kontrak_awal">
                                                                        <div class="content">
                                                                            <br>
                                                                            <div class="card">
                                                                                <div class="card-header bg-warning text-white">
                                                                                    PENJELASAN REKAP
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                                                        <thead class="thead-inverse bg-primary text-white">
                                                                                            <tr style="background-color: #193B53;color:white">
                                                                                                <th style="color:white;">No</th>
                                                                                                <th style="color:white;">Mata Anggaran</th>
                                                                                                <th style="color:white;">Subtotal (Sebelum PPN)</th>
                                                                                                <th style="color:white;">PPN</th>
                                                                                                <th style="color:white;">Subtotal (Setelah PPN)</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php $nomor = 1;
                                                                                            foreach ($cek_rekap_kontrak_awal as $key => $value) { ?>
                                                                                                <tr>
                                                                                                    <td><?= $nomor++ ?></td>
                                                                                                    <td><?= $value['nama_program_mata_anggaran'] ?></td>
                                                                                                    <td><?= "Rp " . number_format($value['total_sebelum_ppn'], 2, ',', '.') ?></td>
                                                                                                    <td><?= "Rp " . number_format($value['ppn'], 2, ',', '.') ?></td>
                                                                                                    <td><?= "Rp " . number_format($value['total_setelah_ppn'], 2, ',', '.') ?></td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php foreach ($result_sub_program as $key => $value) { ?>
                                                                        <div class="modal fade" data-backdrop="false" id="modal_tambah_dkh" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header bg-primary text-white">
                                                                                        <h5 class="modal-title">Tambah Uraian</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="javascript:;" id="form_tambah" method="post">
                                                                                            <!-- hps_penyedia_1 -->
                                                                                            <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                                                                                            <input type="hidden" name="id_detail_program_penyedia_jasa">
                                                                                            <input type="hidden" name="id_hps_penyedia_kontrak_1">
                                                                                            <!--  -->
                                                                                            <div class="form-group">
                                                                                                <label for="">No Mata Anggaran</label>
                                                                                                <input type="text" name="no_hps" required class="form-control form-control-sm" placeholder="No Mata Anggaran">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">Uraian</label>
                                                                                                <input type="text" name="uraian_hps" required class="form-control form-control-sm" placeholder="Uraian">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">Satuan</label>
                                                                                                <input type="text" name="satuan_hps" required class="form-control form-control-sm" placeholder="Satuan">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">Volume</label>
                                                                                                <input type="number" id="volume" required name="volume_hps" class="form-control form-control-sm" placeholder="Volume">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">Tkdn</label>
                                                                                                <input type="number" id="tkdn" required name="tkdn" class="form-control form-control-sm" placeholder="Tkdn">
                                                                                            </div>
                                                                                            <label for="">Harga Satuan</label>
                                                                                            <div class="input-group mb-3">
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                            </span>
                                                                                                            <input type="number" class="form-control" name="harga_satuan_hps" id="harga_satuan_hps" aria-describedby="helpId" placeholder="Harga Satuan">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah2">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <!-- simpan -->
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="simpan_1" onclick="save_hps_penyedia_kontrak_1('simpan')">Save</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="simpan_2" onclick="save_hps_penyedia_kontrak_1('simpan')">Save 2</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="simpan_3" onclick="save_hps_penyedia_kontrak_1('simpan')">Save 3</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="simpan_4" onclick="save_hps_penyedia_kontrak_1('simpan')">Save 4</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="simpan_5" onclick="save_hps_penyedia_kontrak_1('simpan')">Save 5</button>
                                                                                        <!-- edit -->
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="edit_1" onclick="save_hps_penyedia_kontrak_1('edit')">Update</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="edit_2" onclick="save_hps_penyedia_kontrak_1('edit')">Update 2</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="edit_3" onclick="save_hps_penyedia_kontrak_1('edit')">Update 3</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="edit_4" onclick="save_hps_penyedia_kontrak_1('edit')">Update 4</button>
                                                                                        <button type="button" style="display: none;" class="btn btn-primary" id="edit_5" onclick="save_hps_penyedia_kontrak_1('edit')">Update 5</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade show" id="kirun_kontrak<?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                                                            <div class="content">
                                                                                <br>
                                                                                <div class="card card-outline card-primary">
                                                                                    <div class="card-header">
                                                                                        <i>
                                                                                            NILAI KONTRAK AWAL <?= $value['nama_program_mata_anggaran'] ?>
                                                                                        </i>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">

                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="card-header-action">
                                                                                                <a class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,'excel')"> <i class="fas fa fa-file"></i> Buat Uraian Dengan Excel</a>
                                                                                                <a class="btn btn-sm btn-danger" href="javascript:;" onclick="clear_table_hps_penyedia_kontrak_1(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,'biasa')"><i class="fas fa fa-trash"></i> Clear Table</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div style="overflow-x: auto;">
                                                                                            <table class="table table-bordered table-striped">
                                                                                                <thead style="font-size: 12px;" class="thead-inverse bg-primary text-white">
                                                                                                <tr style="background-color: #193B53;color:white">
                                                                                                        <th class="text-white">No</th>
                                                                                                        <th class="text-white">No Mata Anggaran</th>
                                                                                                        <th class="text-white">Uraian</th>
                                                                                                        <th class="text-white">Satuan</th>
                                                                                                        <th class="text-white">Kuantitas</th>
                                                                                                        <th class="text-white">Harga Satuan</th>
                                                                                                        <th class="text-white">Jumlah Harga</th>
                                                                                                        <th class="text-white">TKDN</th>
                                                                                                        <th class="text-white">Harga Satuan TKDN</th>
                                                                                                        <th class="text-white">Jumlah Harga TKDN</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody style="font-size: 10px;">
                                                                                                    <?php
                                                                                                    $this->db->select('*');
                                                                                                    $this->db->from('tbl_hps_penyedia_kontrak_1');
                                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_1.item_baru', 'kosong');
                                                                                                    $this->db->order_by('no_urut', 'ASC');
                                                                                                    $query_tbl_hps_penyedia_kontrak_1 = $this->db->get() ?>
                                                                                                    <?php
                                                                                                    $nomor = 1;
                                                                                                    $total_hps_penyedia_kontrak_1 = 0;
                                                                                                    foreach ($query_tbl_hps_penyedia_kontrak_1->result_array() as $key => $value_hps_penyedia_kontrak_1) { ?>
                                                                                                        <?php
                                                                                                        $id_refrence_hps_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
                                                                                                        if ($value_hps_penyedia_kontrak_1['total_harga']) {
                                                                                                            $total_hps_penyedia_kontrak_1 +=  $value_hps_penyedia_kontrak_1['total_harga'];
                                                                                                        } else {
                                                                                                            $total_hps_penyedia_kontrak_1 +=  0;
                                                                                                        }
                                                                                                        ?>
                                                                                                        <tr>
                                                                                                            <td> &nbsp;<?= $nomor++ ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_1['no_hps'] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_1['uraian_hps'] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_1['satuan_hps'] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_1['volume_hps'] ?></td>
                                                                                                            <?php if ($value_hps_penyedia_kontrak_1['harga_satuan_hps']) { ?>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['harga_satuan_hps'], 2, ',', '.') ?></td>
                                                                                                            <?php  } else { ?>
                                                                                                                <td></td>
                                                                                                            <?php }
                                                                                                            ?>
                                                                                                            <?php if ($value_hps_penyedia_kontrak_1['total_harga']) { ?>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['total_harga'], 2, ',', '.') ?></td>
                                                                                                            <?php  } else { ?>
                                                                                                                <td></td>
                                                                                                            <?php }
                                                                                                            ?>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_1['tkdn'] ?>%</td>
                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['harga_satuan_tkdn'], 2, ',', '.') ?></td>
                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['jumlah_harga_tkdn'], 2, ',', '.') ?></td>
                                                                                                            <!-- <td> -->
                                                                                                            <!-- <div class="btn-group">
                                                                                                                    <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                                    </button>
                                                                                                                    <div class="dropdown-menu" role="menu">
                                                                                                                        <?php if ($value_hps_penyedia_kontrak_1['total_harga']) { ?>
                                                                                                                            <a onclick="modal_hps_penyedia_kontrak_2(<?= $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_hps_penyedia_kontrak_2(<?= $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                                        <?php  } else { ?>
                                                                                                                            <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_2(<?= $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                                            <a onclick="modal_hps_penyedia_kontrak_2(<?= $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_hps_penyedia_kontrak_2(<?= $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                                        <?php } ?>

                                                                                                                    </div>
                                                                                                                </div> -->

                                                                                                            <!-- </td> -->
                                                                                                        </tr>
                                                                                                    <?php } ?>
                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                    <tr>
                                                                                                        <td colspan="2">
                                                                                                            <label for="" style="font-size: 12px;">SUBTOTAL (SEBELUM PPN Rp.)</label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                        <?php                                                                       ?>
                                                                                                        <td>
                                                                                                            <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_hps_penyedia_kontrak_1, 2, ',', '.') ?>
                                                                                                            </label>
                                                                                                        </td>

                                                                                                        <td>

                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="2">
                                                                                                            <label for="" style="font-size: 12px;">PPN(<?= $value['ppn_hps_kontrak_awal'] ?>%)<select name="ppn_hps_kontrak_awal<?= $value['id_detail_sub_program_penyedia_jasa'] ?>" onchange="Pilih_ppn_kontrak_awal('<?= $value['id_detail_sub_program_penyedia_jasa'] ?>')">
                                                                                                                    <option selected value="<?= $value['ppn_hps_kontrak_awal'] ?>">--Pilih PPN--</option>
                                                                                                                    <option value="10">10%</option>
                                                                                                                    <option value="11">11%</option>
                                                                                                                    <option value="12">12%</option>
                                                                                                                </select></label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                        <?php
                                                                                                        $total_ppn = ($value['ppn_hps_kontrak_awal'] * $total_hps_penyedia_kontrak_1) / 100;
                                                                                                        $total_setelah_ppn = $total_ppn + $total_hps_penyedia_kontrak_1;
                                                                                                        ?>
                                                                                                        <td>
                                                                                                            <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_ppn, 2, ',', '.') ?>
                                                                                                            </label>
                                                                                                        </td>

                                                                                                        <td>

                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="2">
                                                                                                            <label for="" style="font-size: 12px;">TOTAL (SETELAH PPN Rp.)</label>
                                                                                                        </td>
                                                                                                        <td colspan="4"></td>
                                                                                                        <?php                                                                       ?>
                                                                                                        <td>
                                                                                                            <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_setelah_ppn, 2, ',', '.') ?>
                                                                                                            </label>
                                                                                                        </td>

                                                                                                        <td>
                                                                                                            <a href="javascript:;" onclick="Update_nilai_ke_sub_program_kontrak(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,0)" class="btn btn-sm btn-primary" style="font-size: 12px;"><i class="fas fa fa-save"></i> Simpan Dan Update</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                    <?php  } ?>
                                                                </div>
                                                            </div>
                                                            <?php foreach ($adendum_result as $key => $value_addendum) { ?>
                                                                <?php
                                                                if ($value_addendum['no_addendum'] == 1) {
                                                                    $romawi_add = 'Addendum I';
                                                                    $field_addendum = '_addendum_1';
                                                                } else if ($value_addendum['no_addendum'] == 2) {
                                                                    $romawi_add = 'Addendum II';
                                                                    $field_addendum = '_addendum_2';
                                                                } else if ($value_addendum['no_addendum'] == 3) {
                                                                    $romawi_add = 'Addendum III';
                                                                    $field_addendum = '_addendum_3';
                                                                } else if ($value_addendum['no_addendum'] == 4) {
                                                                    $romawi_add = 'Addendum IV';
                                                                    $field_addendum = '_addendum_4';
                                                                } else if ($value_addendum['no_addendum'] == 5) {
                                                                    $romawi_add = 'Addendum V';
                                                                    $field_addendum = '_addendum_5';
                                                                } else if ($value_addendum['no_addendum'] == 6) {
                                                                    $romawi_add = 'Addendum VI';
                                                                    $field_addendum = '_addendum_6';
                                                                } else if ($value_addendum['no_addendum'] == 7) {
                                                                    $romawi_add = 'Addendum VII';
                                                                    $field_addendum = '_addendum_7';
                                                                } else if ($value_addendum['no_addendum'] == 8) {
                                                                    $romawi_add = 'Addendum VIII';
                                                                    $field_addendum = '_addendum_8';
                                                                } else if ($value_addendum['no_addendum'] == 9) {
                                                                    $romawi_add = 'Addendum IX';
                                                                    $field_addendum = '_addendum_9';
                                                                } else if ($value_addendum['no_addendum'] == 10) {
                                                                    $romawi_add = 'Addendum X';
                                                                    $field_addendum = '_addendum_10';
                                                                } else if ($value_addendum['no_addendum'] == 11) {
                                                                    $romawi_add = 'Addendum XI';
                                                                    $field_addendum = '_addendum_11';
                                                                } else if ($value_addendum['no_addendum'] == 12) {
                                                                    $romawi_add = 'Addendum XII';
                                                                    $field_addendum = '_addendum_12';
                                                                } else if ($value_addendum['no_addendum'] == 13) {
                                                                    $romawi_add = 'Addendum XIII';
                                                                    $field_addendum = '_addendum_13';
                                                                } else if ($value_addendum['no_addendum'] == 14) {
                                                                    $romawi_add = 'Addendum XIV';
                                                                    $field_addendum = '_addendum_14';
                                                                } else if ($value_addendum['no_addendum'] == 15) {
                                                                    $romawi_add = 'Addendum XV';
                                                                    $field_addendum = '_addendum_15';
                                                                } else if ($value_addendum['no_addendum'] == 16) {
                                                                    $romawi_add = 'Addendum XVI';
                                                                    $field_addendum = '_addendum_16';
                                                                } else if ($value_addendum['no_addendum'] == 17) {
                                                                    $romawi_add = 'Addendum XVII';
                                                                    $field_addendum = '_addendum_17';
                                                                } else if ($value_addendum['no_addendum'] == 18) {
                                                                    $romawi_add = 'Addendum XVIII';
                                                                    $field_addendum = '_addendum_18';
                                                                } else if ($value_addendum['no_addendum'] == 19) {
                                                                    $romawi_add = 'Addendum XIX';
                                                                    $field_addendum = '_addendum_19';
                                                                } else if ($value_addendum['no_addendum'] == 20) {
                                                                    $romawi_add = 'Addendum XX';
                                                                    $field_addendum = '_addendum_20';
                                                                } else if ($value_addendum['no_addendum'] == 21) {
                                                                    $romawi_add = 'Addendum XXI';
                                                                    $field_addendum = '_addendum_21';
                                                                } else if ($value_addendum['no_addendum'] == 22) {
                                                                    $romawi_add = 'Addendum XXII';
                                                                    $field_addendum = '_addendum_22';
                                                                } else if ($value_addendum['no_addendum'] == 23) {
                                                                    $romawi_add = 'Addendum XXIII';
                                                                    $field_addendum = '_addendum_23';
                                                                } else if ($value_addendum['no_addendum'] == 24) {
                                                                    $romawi_add = 'Addendum XXIV';
                                                                    $field_addendum = '_addendum_24';
                                                                } else if ($value_addendum['no_addendum'] == 25) {
                                                                    $romawi_add = 'Addendum XXV';
                                                                    $field_addendum = '_addendum_25';
                                                                } else if ($value_addendum['no_addendum'] == 26) {
                                                                    $romawi_add = 'Addendum XXVI';
                                                                    $field_addendum = '_addendum_26';
                                                                } else if ($value_addendum['no_addendum'] == 27) {
                                                                    $romawi_add = 'Addendum XXVII';
                                                                    $field_addendum = '_addendum_27';
                                                                } else if ($value_addendum['no_addendum'] == 28) {
                                                                    $romawi_add = 'Addendum XXVIII';
                                                                    $field_addendum = '_addendum_28';
                                                                } else if ($value_addendum['no_addendum'] == 29) {
                                                                    $romawi_add = 'Addendum XXIX';
                                                                    $field_addendum = '_addendum_29';
                                                                } else if ($value_addendum['no_addendum'] == 30) {
                                                                    $romawi_add = 'Addendum XXX';
                                                                    $field_addendum = '_addendum_30';
                                                                } else {
                                                                    $field_addendum = NULL;
                                                                } ?>
                                                                <div class="tab-pane fade show" id="custom-tabs-two-<?= $value_addendum['no_addendum'] ?>" role="tabpanel" aria-labelledby="custom-tabs-two-<?= $value_addendum['no_addendum'] ?>-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <a target="_blank" href="<?= base_url('admin/data_kontrak_penyedia_jasa/tambah_mata_anggran_addendum/') . $row_program_kontrak_detail['id_kontrak'] . '/' . $field_addendum . '/' . $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>" class="btn btn-sm btn-success"> Tambah Mata Anggaran <i class="fas fa fa-plus"></i></a>
                                                                        </div>
                                                                        <div class="card card-outline card-primary col-md-3">
                                                                            <div class="card-header">
                                                                                TOTAL NILAI KONTRAK AWAL
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <label for="">
                                                                                    <?= "Rp " . number_format($row_program_kontrak_detail['total_kontrak'], 2, ',', '.') ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card card-outline card-primary col-md-3">
                                                                            <div class="card-header">
                                                                                TOTAL NILAI ADDENDUM <?= $value_addendum['no_addendum'] ?>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <label for="">
                                                                                    <?= "Rp " . number_format($row_program_kontrak_detail['total_kontrak_addendum_' . $value_addendum['no_addendum'] . ''], 2, ',', '.') ?>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card card-outline card-primary col-md-2">
                                                                            <div class="card-header">
                                                                                DEVISIASI %
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <?php
                                                                                $nilai_add = $row_program_kontrak_detail['total_kontrak_addendum_' . $value_addendum['no_addendum'] . ''];

                                                                                $nilai_k = $row_program_kontrak_detail['total_kontrak'];
                                                                                $hasil_devisiasi = (($nilai_add / $nilai_k) * 100) / 100;
                                                                                if ($nilai_add >= $nilai_k) {
                                                                                    $bilangan = '-';
                                                                                } else {
                                                                                    $bilangan = '';
                                                                                }

                                                                                ?>
                                                                                <label for="">
                                                                                    <?= $bilangan . round($hasil_devisiasi) ?> %
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <ul class="nav nav-tabs" id="myTabku<?= $value_addendum['no_addendum'] ?>" style="margin-top: 50px;">
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $row_program_kontrak_detail['id_detail_program_penyedia_jasa']);
                                                                        $this->db->where_in('tbl_sub_detail_program_penyedia_jasa.status_mata_anggaran_addendum', [0, 1]);
                                                                        $this->db->where_in('tbl_sub_detail_program_penyedia_jasa.addendum_ke', [$field_addendum, 'kosong']);
                                                                        $result_sub_program_tambahan_anggaran = $this->db->get();
                                                                        ?>
                                                                        <li>
                                                                            <a class="nav-link  text-white" href="#rekap_addendum<?= $value_addendum['no_addendum'] ?>" style="background-color: #193B53;">Rekap Penjelasan</a>
                                                                        </li>
                                                                        <?php foreach ($result_sub_program_tambahan_anggaran->result_array() as $key => $value) { ?>
                                                                            <li>
                                                                                <a class="nav-link text-white" style="background-color: #193B53;" href="#kirun_addendum<?= $value_addendum['no_addendum'] ?><?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                                                                            </li>
                                                                        <?php  } ?>
                                                                    </ul>
                                                                    <div class="tab-content mt-3">
                                                                        <div class="tab-pane fade show" id="rekap_addendum<?= $value_addendum['no_addendum'] ?>">
                                                                            <div class="content">
                                                                                <br>
                                                                                <div class="card">
                                                                                    <div class="card-header bg-warning text-white">
                                                                                        PENJELASAN REKAP ADDENDUM <?= $value_addendum['no_addendum'] ?>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                                                            <thead class="thead-inverse bg-primary text-white">
                                                                                            <tr style="background-color: #193B53;color:white">
                                                                                                    <th>No</th>
                                                                                                    <th>Mata Anggaran</th>
                                                                                                    <th>Subtotal (Sebelum PPN)</th>
                                                                                                    <th>PPN</th>
                                                                                                    <th>Subtotal (Setelah PPN)</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php $nomor = 1;
                                                                                                if ($value_addendum['no_addendum'] == 1) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_1;
                                                                                                } else if ($value_addendum['no_addendum'] == 2) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_2;
                                                                                                } else if ($value_addendum['no_addendum'] == 3) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_3;
                                                                                                } else if ($value_addendum['no_addendum'] == 4) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_4;
                                                                                                } else if ($value_addendum['no_addendum'] == 5) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_5;
                                                                                                } else if ($value_addendum['no_addendum'] == 6) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_6;
                                                                                                } else if ($value_addendum['no_addendum'] == 7) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_7;
                                                                                                } else if ($value_addendum['no_addendum'] == 8) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_8;
                                                                                                } else if ($value_addendum['no_addendum'] == 9) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_9;
                                                                                                } else if ($value_addendum['no_addendum'] == 10) {
                                                                                                    $result_rekap_addendum = $result_rekap_hps_addendum_10;
                                                                                                }
                                                                                                foreach ($result_rekap_addendum as $key => $value) { ?>
                                                                                                    <tr>
                                                                                                        <td><?= $nomor++ ?></td>
                                                                                                        <td><?= $value['nama_program_mata_anggaran'] ?></td>
                                                                                                        <td><?= "Rp " . number_format($value['total_sebelum_ppn'], 2, ',', '.') ?></td>
                                                                                                        <td><?= "Rp " . number_format($value['ppn'], 2, ',', '.') ?></td>
                                                                                                        <td><?= "Rp " . number_format($value['total_setelah_ppn'], 2, ',', '.') ?></td>
                                                                                                    </tr>
                                                                                                <?php } ?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php foreach ($result_sub_program_tambahan_anggaran->result_array() as $key => $value) { ?>
                                                                            <div class="tab-pane fade show" id="kirun_addendum<?= $value_addendum['no_addendum'] ?><?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                                                                <input type="hidden" name="type_add_update" value="<?= $value_addendum['no_addendum'] ?>">
                                                                                <div class="content">
                                                                                    <br>
                                                                                    <div class="card card-outline card-primary">
                                                                                        <div class="card-header">

                                                                                            <i>
                                                                                                Nilai <?= $romawi_add ?> <?= $value['nama_program_mata_anggaran'] ?>
                                                                                            </i>
                                                                                            <div class="col-md-7"></div>
                                                                                            <div class="card-header-action">
                                                                                                <a class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_addendum(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,<?= $value_addendum['no_addendum'] ?>)"> <i class="fas fa fa-file"></i> Buat Uraian Dengan Excel</a>
                                                                                                <a class="btn btn-sm btn-danger" href="javascript:;" onclick="clear_table_hps_addendum_penyedia_kontrak_1(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,<?= $value_addendum['no_addendum'] ?>)"><i class="fas fa fa-trash"></i> Clear Table</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <div style="overflow-x: auto;">
                                                                                                <table class="table table-bordered table-striped">
                                                                                                    <thead style="font-size: 12px;color:white" class="thead-inverse bg-primary text-white">
                                                                                                    <tr style="background-color: #193B53;color:white">
                                                                                                            <th class="text-white">No</th>
                                                                                                            <th class="text-white">No Mata Anggaran</th>
                                                                                                            <th class="text-white">Uraian</th>
                                                                                                            <th class="text-white">Satuan</th>
                                                                                                            <th class="text-white">Kuantitas</th>
                                                                                                            <th class="text-white">Harga Satuan</th>
                                                                                                            <th class="text-white">Jumlah Harga</th>
                                                                                                            <th class="text-white">TKDN</th>
                                                                                                            <th class="text-white">Harga Satuan TKDN</th>
                                                                                                            <th class="text-white">Jumlah Harga TKDN</th>
                                                                                                            <!-- <th class="text-white">Keterangan</th> -->
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody style="font-size: 10px;">
                                                                                                        <?php
                                                                                                        $this->db->select('*');
                                                                                                        $this->db->from('tbl_hps_penyedia_kontrak_1');
                                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_1.uraian_hps' . $field_addendum . '!=', NULL);
                                                                                                        $this->db->order_by('no_urut', 'ASC');
                                                                                                        $query_tbl_hps_penyedia_kontrak_1 = $this->db->get() ?>
                                                                                                        <?php $nomorku = 1;
                                                                                                        $total_hps_addendum = 0;
                                                                                                        foreach ($query_tbl_hps_penyedia_kontrak_1->result_array() as $key => $value_hps_penyedia_kontrak_1) { ?>
                                                                                                            <?php
                                                                                                            $id_refrence_hps_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
                                                                                                            $id_detail_sub_program_penyedia_jasa = $value_hps_penyedia_kontrak_1['id_detail_sub_program_penyedia_jasa'];
                                                                                                            if ($value_hps_penyedia_kontrak_1['total_harga' . $field_addendum]) {
                                                                                                                $total_hps_addendum +=  $value_hps_penyedia_kontrak_1['total_harga' . $field_addendum];
                                                                                                            } else {
                                                                                                                $total_hps_addendum +=  0;
                                                                                                            }
                                                                                                            if ($value_hps_penyedia_kontrak_1['volume_hps'] < $value_hps_penyedia_kontrak_1['volume_hps' . $field_addendum]) {
                                                                                                                $keterangan_volume = '<label for="" class="badge badge-success">Volumen Bertambah</label>';
                                                                                                            } else if ($value_hps_penyedia_kontrak_1['volume_hps'] == $value_hps_penyedia_kontrak_1['volume_hps' . $field_addendum]) {
                                                                                                                $keterangan_volume = '';
                                                                                                            } else {
                                                                                                                $keterangan_volume = '<label for="" class="badge badge-warning">Volumen Berkurang</label>';
                                                                                                            }
                                                                                                            if ($value_hps_penyedia_kontrak_1['harga_satuan_hps'] < $value_hps_penyedia_kontrak_1['harga_satuan_hps' . $field_addendum]) {
                                                                                                                $timpang = '<a title="Mengalami Timpang Harga" style="font-size:8px;" class="badge badge-sm badge-info"><i class="fas fa fa-info"></i></a>';
                                                                                                            } else {
                                                                                                                $timpang = '';
                                                                                                            }
                                                                                                            ?>

                                                                                                            <tr>
                                                                                                                <td> &nbsp;<?= $nomorku++ ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['no_hps' . $field_addendum] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['uraian_hps' . $field_addendum] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['satuan_hps' . $field_addendum] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['volume_hps' . $field_addendum] ?></td>
                                                                                                                <?php if ($value_hps_penyedia_kontrak_1['harga_satuan_hps' . $field_addendum]) { ?>
                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['harga_satuan_hps' . $field_addendum], 2, ',', '.') ?></td>
                                                                                                                <?php  } else { ?>
                                                                                                                    <td></td>
                                                                                                                <?php }
                                                                                                                ?>
                                                                                                                <?php if ($value_hps_penyedia_kontrak_1['total_harga' . $field_addendum]) { ?>
                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['total_harga' . $field_addendum], 2, ',', '.') ?></td>
                                                                                                                <?php  } else { ?>
                                                                                                                    <td></td>
                                                                                                                <?php }
                                                                                                                ?>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['tkdn' . $field_addendum] ?>%</td>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['harga_satuan_tkdn' . $field_addendum], 2, ',', '.') ?></td>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['jumlah_harga_tkdn' . $field_addendum], 2, ',', '.') ?></td>
                                                                                                            </tr>
                                                                                                        <?php } ?>
                                                                                                    </tbody>
                                                                                                    <tfoot>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <label for="" style="font-size: 12px;">SUBTOTAL (SEBELUM PPN Rp.)</label>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <?php                                                                       ?>
                                                                                                            <td>
                                                                                                                <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_hps_addendum, 2, ',', '.') ?>
                                                                                                                </label>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <label for="" style="font-size: 12px;">PPN(<?= $value['ppn_hps_kontrak_addendum_' . $value_addendum['no_addendum']] ?>%)<select name="ppn_hps_kontrak_addendum_<?= $value_addendum['no_addendum'] ?><?= $value['id_detail_sub_program_penyedia_jasa'] ?>" onchange="Pilih_ppn_kontrak_addendum(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,<?= $value_addendum['no_addendum'] ?>)">
                                                                                                                        <option selected value="<?= $value['ppn_hps_kontrak_addendum_' . $value_addendum['no_addendum']] ?>">--Pilih PPN--</option>
                                                                                                                        <option value="10">10%</option>
                                                                                                                        <option value="11">11%</option>
                                                                                                                        <option value="12">12%</option>
                                                                                                                    </select></label>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <?php
                                                                                                            $total_ppn = ($value['ppn_hps_kontrak_addendum_' . $value_addendum['no_addendum']] * $total_hps_addendum) / 100;
                                                                                                            $total_setelah_ppn = $total_ppn + $total_hps_addendum;
                                                                                                            ?>
                                                                                                            <td>
                                                                                                                <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_ppn, 2, ',', '.') ?>
                                                                                                                </label>
                                                                                                            </td>
                                                                                                            <td></td>

                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <label for="" style="font-size: 12px;">TOTAL (SETELAH PPN Rp.)</label>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                            <?php                                                                       ?>
                                                                                                            <td>
                                                                                                                <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_setelah_ppn, 2, ',', '.') ?>
                                                                                                                </label>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <a href="javascript:;" onclick="Update_nilai_ke_sub_program_addendum(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,<?= $value_addendum['no_addendum'] ?>)" class="btn btn-sm btn-primary"><i class="fas fa fa-save"></i> Simpan Dan Update</a>
                                                                                                            </td>
                                                                                                            <td></td>
                                                                                                            <td></td>
                                                                                                        </tr>
                                                                                                    </tfoot>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                </div>
                                                                            </div>

                                                                        <?php  } ?>
                                                                    </div>
                                                                </div>
                                                            <?php   } ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                                <!-- /.card-footer -->
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

<div class="modal fade" data-backdrop="false" id="modal_tambah_dkh_addendum" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Update </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:;" id="form_tambah_addendum_hps_penyedia_kontrak" method="post">
                    <!-- hps_penyedia_1 -->
                    <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                    <input type="hidden" name="id_detail_program_penyedia_jasa">
                    <input type="hidden" name="id_hps_penyedia_kontrak_1">
                    <input type="hidden" name="id_hps_penyedia_kontrak_2">
                    <input type="hidden" name="id_hps_penyedia_kontrak_3">
                    <input type="hidden" name="id_hps_penyedia_kontrak_4">
                    <input type="hidden" name="id_hps_penyedia_kontrak_5">
                    <input type="hidden" name="type_add">
                    <!--  -->
                    <div class="form-group">
                        <label for="">No Mata Anggaran</label>
                        <input type="text" name="no_hps" class="form-control form-control-sm" placeholder="No Mata Anggaran">
                    </div>
                    <div class="form-group">
                        <label for="">Uraian</label>
                        <input type="text" name="uraian_hps" class="form-control form-control-sm" placeholder="Uraian">
                    </div>
                    <div class="form-group">
                        <label for="">Satuan</label>
                        <input type="text" name="satuan_hps" class="form-control form-control-sm" placeholder="Satuan">
                    </div>
                    <div class="form-group">
                        <label for="">Volume</label>
                        <input type="number" id="volume2" name="volume_hps" class="form-control form-control-sm" placeholder="Volume">
                    </div>
                    <div class="form-group">
                        <label for="">TKDN</label>
                        <input type="number" name="tkdn" class="form-control form-control-sm" placeholder="tkdn">
                    </div>
                    <label for="">Harga Satuan</label>
                    <div class="input-group mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control harga_satuan_hps2" name="harga_satuan_hps" id="harga_satuan_hps2" aria-describedby="helpId" placeholder="Harga Satuan">
                                </div>
                            </div>
                            <div class="col-6">
                                <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- simpan -->
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_1_addendum" onclick="save_hps_penyedia_kontrak_1_addendum('simpan')">Save</button>
                <!-- edit -->
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_1_addendum" onclick="save_hps_penyedia_kontrak_1_addendum('edit')">Update1</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" data-backdrop="false" id="modal_excel_hps_penyedia_kontrak_1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Uraian Dengan Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_excel_hps_kontrak.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak_hps/upload_excel_hps/upload_excel_hps_penyedia_kontrak_1') ?>
                <input type="hidden" value="<?= $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                <input type="hidden" name="id_kontrak" value="<?= $row_program_kontrak_detail['id_kontrak'] ?>">
                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" data-backdrop="false" id="modal_excel_addendum_hps_penyedia_kontrak_1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Uraian Dengan Excel Addendum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_excel_hps_kontrak.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak_hps/upload_excel_hps/upload_excel_addendum_hps_penyedia_kontrak_1') ?>
                <input type="hidden" value="<?= $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                <input type="text" name="id_detail_sub_program_penyedia_jasa">
                <input type="hidden" name="addendum_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_program_kontrak_detail['id_kontrak'] ?>">
                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>