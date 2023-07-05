<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> ADMINISTRASI ADDENDUM</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('administrasi_kontrak/administrasi_kontrak/list_program/') . $row_program_kontrak_detail['id_kontrak'] ?>">LIST PEROGRAM</a></div>
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/data_kontrak') ?>">ADMINISTRASI ADDENDUM</a></div>
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

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-header">
                                        <div class="row">
                                          <H5>ADMINISTRASI KONTRAK PENYEDIA JASA</H5>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_detail_program_penyedia_jasa_update" value="<?= $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>">
                                    <div class="card-body">
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
                                                                    } ?>
                                                                    <div class="tab-pane fade show" id="custom-tabs-two-<?= $value_addendum['no_addendum'] ?>" role="tabpanel" aria-labelledby="custom-tabs-two-<?= $value_addendum['no_addendum'] ?>-tab">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group">
                                                                                    <label for="">Kepanitian / Papenkon</label>
                                                                                    <select name="papenkon" onclick="PilihPapenkon(<?= $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>)" class="form-control">
                                                                                        <option value="">
                                                                                            <?php if ($row_program_kontrak_detail['papenkon']) { ?>
                                                                                                <?php if ($row_program_kontrak_detail['papenkon'] == 'dengan_papenkon') { ?>
                                                                                                    <label for="">Dengan Papenkon <i class="text-success fas fa fa-check"></i></label>
                                                                                                <?php } else { ?>
                                                                                                    <label for="">Tanpa Papenkon <i class="text-success fas fa fa-check"></i></label>
                                                                                                <?php   } ?>
                                                                                            <?php  } else { ?>

                                                                                            <?php   } ?>
                                                                                        </option>
                                                                                        <option value="dengan_papenkon">Dengan Papenkon</option>
                                                                                        <option value="tanpa_papenkon">Tanpa Papenkon</option>
                                                                                    </select>
                                                                                    <?php if ($row_program_kontrak_detail['papenkon']) { ?>
                                                                                        <?php if ($row_program_kontrak_detail['papenkon'] == 'dengan_papenkon') { ?>
                                                                                            <label for="">Dengan Papenkon <i class="text-success fas fa fa-check"></i></label>
                                                                                        <?php } else { ?>
                                                                                            <label for="">Tanpa Papenkon <i class="text-success fas fa fa-check"></i></label>
                                                                                        <?php   } ?>
                                                                                    <?php  } else { ?>

                                                                                    <?php   } ?>
                                                                                </div>
                                                                                <br>

                                                                                <?php if ($row_program_kontrak_detail['papenkon'] == 'dengan_papenkon') { ?>
                                                                                    <a style="font-size:12px" href="<?= base_url('admin/Administrasi_penyedia/dok_dengan_papenkon/' . $row_program_kontrak_detail['id_detail_program_penyedia_jasa']) ?>" target="_blank" class="btn btn-sm btn-block btn-danger"> <i class="fas fa fa-file"></i> KELOLA SURAT PAPENKON</a>
                                                                                <?php } else if ($row_program_kontrak_detail['papenkon'] == 'tanpa_papenkon') { ?>
                                                                                    <a style="font-size:12px" href="<?= base_url('admin/Administrasi_penyedia/dok_dengan_papenkon/' . $row_program_kontrak_detail['id_detail_program_penyedia_jasa']) ?>" target="_blank" class="btn btn-sm btn-block btn-danger"> <i class="fas fa fa-file"></i> KELOLA SURAT TANPA PAPENKON</a>
                                                                                <?php  } else { ?>

                                                                                <?php   } ?>


                                                                            </div>
                                                                            <div class="col-md-1">

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
                                                                        <?php if ($row_program_kontrak_detail['papenkon']) { ?>
                                                                            <div class="col-md-3">
                                                                                <a href="<?= base_url('admin/Administrasi_penyedia/dok_persetujuan_ip_add/' . $row_program_kontrak_detail['id_detail_program_penyedia_jasa']) ?>" target="_blank" class="btn btn-sm btn-block btn-primary"> Persetujuan IP ADD</a>
                                                                                <a href="<?= base_url('admin/Administrasi_penyedia/dok_addendum_kontrak/' . $row_program_kontrak_detail['id_detail_program_penyedia_jasa']) ?>" target="_blank" class="btn btn-sm btn-block btn-primary mt-2"> Addendum Kontrak</a> <br>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                        <?php   } ?>


                                                                        <ul class="nav nav-tabs" id="myTabku<?= $value_addendum['no_addendum'] ?>" style="margin-top: 50px;">
                                                                            <?php foreach ($result_sub_program as $key => $value) { ?>
                                                                                <li>
                                                                                    <a class="nav-link bg-primary" href="#kirun_addendum<?= $value_addendum['no_addendum'] ?><?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                                                                                </li>
                                                                            <?php  } ?>
                                                                        </ul>
                                                                        <div class="tab-content mt-3">
                                                                            <?php foreach ($result_sub_program as $key => $value) { ?>
                                                                                <div class="tab-pane fade show" id="kirun_addendum<?= $value_addendum['no_addendum'] ?><?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                                                                    <input type="hidden" name="type_add_update" value="<?= $value_addendum['no_addendum'] ?>">
                                                                                    <div class="content">
                                                                                        <br>
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                <center>
                                                                                                    <h4>
                                                                                                        <?= $romawi_add ?> <?= $value['nama_program_mata_anggaran'] ?>
                                                                                                    </h4>
                                                                                                </center>

                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-bordered table-striped">
                                                                                                    <thead style="font-size: 12px;" class="thead-inverse bg-primary">
                                                                                                        <tr>
                                                                                                            <th>No</th>
                                                                                                            <th>No Hps</th>
                                                                                                            <th>Uraian</th>
                                                                                                            <th>Satuan</th>
                                                                                                            <th>Kuantitas</th>
                                                                                                            <th>Harga Satuan</th>
                                                                                                            <th>Jumlah Harga</th>
                                                                                                            <th>Keterangan</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody style="font-size: 10px;">
                                                                                                        <?php
                                                                                                        $this->db->select('*');
                                                                                                        $this->db->from('tbl_hps_penyedia_kontrak_1');
                                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                                                                        $query_tbl_hps_penyedia_kontrak_1 = $this->db->get() ?>
                                                                                                        <?php
                                                                                                        foreach ($query_tbl_hps_penyedia_kontrak_1->result_array() as $key => $value_hps_penyedia_kontrak_1) { ?>

                                                                                                            <?php
                                                                                                            $id_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
                                                                                                            $id_detail_sub_program_penyedia_jasa = $value_hps_penyedia_kontrak_1['id_detail_sub_program_penyedia_jasa'];
                                                                                                            if ($value_hps_penyedia_kontrak_1['total_harga' . $field_addendum]) {
                                                                                                                $total_hps_penyedia_kontrak_addendum_1 +=  $value_hps_penyedia_kontrak_1['total_harga' . $field_addendum];
                                                                                                            } else {
                                                                                                                $total_hps_penyedia_kontrak_addendum_1 +=  0;
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
                                                                                                                <td> &nbsp;<?= $value_hps_penyedia_kontrak_1['no_urut'] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['no_hps'] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['uraian_hps' . $field_addendum] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['satuan_hps' . $field_addendum] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_1['volume_hps' . $field_addendum] ?></td>
                                                                                                                <?php if ($value_hps_penyedia_kontrak_1['harga_satuan_hps' . $field_addendum]) { ?>
                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['harga_satuan_hps' . $field_addendum], 2, ',', '.') ?> <?= $timpang ?></td>
                                                                                                                <?php  } else { ?>
                                                                                                                    <td></td>
                                                                                                                <?php }
                                                                                                                ?>
                                                                                                                <?php if ($value_hps_penyedia_kontrak_1['total_harga' . $field_addendum]) { ?>
                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_1['total_harga' . $field_addendum], 2, ',', '.') ?> <?= $timpang ?></td>
                                                                                                                <?php  } else { ?>
                                                                                                                    <td></td>
                                                                                                                <?php }
                                                                                                                ?>
                                                                                                                <td><?= $keterangan_volume ?></td>
                                                                                                            </tr>
                                                                                                            <?php
                                                                                                            $this->db->select('*');
                                                                                                            $this->db->from('tbl_hps_penyedia_kontrak_2');
                                                                                                            $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
                                                                                                            $query_tbl_hps_penyedia_kontrak_2 = $this->db->get() ?>
                                                                                                            <?php
                                                                                                            foreach ($query_tbl_hps_penyedia_kontrak_2->result_array() as $key => $value_hps_penyedia_kontrak_2) { ?>
                                                                                                                <?php
                                                                                                                $id_hps_penyedia_kontrak_2 = $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'];
                                                                                                                if ($value_hps_penyedia_kontrak_2['total_harga' . $field_addendum]) {
                                                                                                                    $total_hps_penyedia_kontrak_addendum_2 +=  $value_hps_penyedia_kontrak_2['total_harga' . $field_addendum];
                                                                                                                } else {
                                                                                                                    $total_hps_penyedia_kontrak_addendum_2 +=  0;
                                                                                                                }
                                                                                                                if ($value_hps_penyedia_kontrak_2['volume_hps'] < $value_hps_penyedia_kontrak_2['volume_hps' . $field_addendum]) {
                                                                                                                    $keterangan_volume = '<label for="" class="badge badge-success">Volumen Bertambah</label>';
                                                                                                                } else if ($value_hps_penyedia_kontrak_2['volume_hps'] == $value_hps_penyedia_kontrak_2['volume_hps' . $field_addendum]) {
                                                                                                                    $keterangan_volume = '';
                                                                                                                } else {
                                                                                                                    $keterangan_volume = '<label for="" class="badge badge-warning">Volumen Berkurang</label>';
                                                                                                                }
                                                                                                                if ($value_hps_penyedia_kontrak_2['harga_satuan_hps'] < $value_hps_penyedia_kontrak_2['harga_satuan_hps' . $field_addendum]) {
                                                                                                                    $timpang = '<a title="Mengalami Timpang Harga" style="font-size:8px;" class="badge badge-sm badge-info"><i class="fas fa fa-info"></i></a>';
                                                                                                                } else {
                                                                                                                    $timpang = '';
                                                                                                                }
                                                                                                                ?>
                                                                                                                <tr>
                                                                                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_2['no_urut'] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_2['no_hps'] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_2['uraian_hps' . $field_addendum] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_2['satuan_hps' . $field_addendum] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_2['volume_hps' . $field_addendum] ?></td>
                                                                                                                    <?php if ($value_hps_penyedia_kontrak_2['harga_satuan_hps' . $field_addendum]) { ?>
                                                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_2['harga_satuan_hps' . $field_addendum], 2, ',', '.') ?> <?= $timpang ?></td>
                                                                                                                    <?php  } else { ?>
                                                                                                                        <td></td>
                                                                                                                    <?php }
                                                                                                                    ?>
                                                                                                                    <?php if ($value_hps_penyedia_kontrak_2['total_harga' . $field_addendum]) { ?>
                                                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_2['total_harga' . $field_addendum], 2, ',', '.') ?> <?= $timpang ?></td>
                                                                                                                    <?php  } else { ?>
                                                                                                                        <td></td>
                                                                                                                    <?php }
                                                                                                                    ?>

                                                                                                                    <td><?= $keterangan_volume ?></td>

                                                                                                                </tr>
                                                                                                                <?php
                                                                                                                $this->db->select('*');
                                                                                                                $this->db->from('tbl_hps_penyedia_kontrak_3');
                                                                                                                $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
                                                                                                                $query_tbl_hps_penyedia_kontrak_3 = $this->db->get() ?>
                                                                                                                <?php
                                                                                                                foreach ($query_tbl_hps_penyedia_kontrak_3->result_array() as $key => $value_hps_penyedia_kontrak_3) { ?>
                                                                                                                    <?php
                                                                                                                    $id_hps_penyedia_kontrak_3 = $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'];
                                                                                                                    if ($value_hps_penyedia_kontrak_3['total_harga' . $field_addendum]) {
                                                                                                                        $total_hps_penyedia_kontrak_addendum_3 +=  $value_hps_penyedia_kontrak_3['total_harga' . $field_addendum];
                                                                                                                    } else {
                                                                                                                        $total_hps_penyedia_kontrak_addendum_3 +=  0;
                                                                                                                    }
                                                                                                                    if ($value_hps_penyedia_kontrak_3['volume_hps'] < $value_hps_penyedia_kontrak_3['volume_hps' . $field_addendum]) {
                                                                                                                        $keterangan_volume = '<label for="" class="badge badge-success">Volumen Bertambah</label>';
                                                                                                                    } else if ($value_hps_penyedia_kontrak_3['volume_hps'] == $value_hps_penyedia_kontrak_3['volume_hps' . $field_addendum]) {
                                                                                                                        $keterangan_volume = '';
                                                                                                                    } else {
                                                                                                                        $keterangan_volume = '<label for="" class="badge badge-warning">Volumen Berkurang</label>';
                                                                                                                    }
                                                                                                                    if ($value_hps_penyedia_kontrak_3['harga_satuan_hps'] < $value_hps_penyedia_kontrak_3['harga_satuan_hps' . $field_addendum]) {
                                                                                                                        $timpang = '<a title="Mengalami Timpang Harga" style="font-size:8px;" class="badge badge-sm badge-info"><i class="fas fa fa-info"></i></a>';
                                                                                                                    } else {
                                                                                                                        $timpang = '';
                                                                                                                    }

                                                                                                                    ?>
                                                                                                                    <tr>
                                                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_3['no_urut'] ?></td>
                                                                                                                        <td><?= $value_hps_penyedia_kontrak_3['no_hps'] ?></td>
                                                                                                                        <td><?= $value_hps_penyedia_kontrak_3['uraian_hps' . $field_addendum] ?></td>
                                                                                                                        <td><?= $value_hps_penyedia_kontrak_3['satuan_hps' . $field_addendum] ?></td>
                                                                                                                        <td><?= $value_hps_penyedia_kontrak_3['volume_hps' . $field_addendum] ?></td>
                                                                                                                        <?php if ($value_hps_penyedia_kontrak_3['harga_satuan_hps' . $field_addendum]) { ?>
                                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_3['harga_satuan_hps' . $field_addendum], 2, ',', '.') ?> <?= $timpang ?></td>
                                                                                                                        <?php  } else { ?>
                                                                                                                            <td></td>
                                                                                                                        <?php }
                                                                                                                        ?>
                                                                                                                        <?php if ($value_hps_penyedia_kontrak_3['total_harga' . $field_addendum]) { ?>
                                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_3['total_harga' . $field_addendum], 2, ',', '.') ?></td>
                                                                                                                        <?php  } else { ?>
                                                                                                                            <td></td>
                                                                                                                        <?php }
                                                                                                                        ?>
                                                                                                                        <td><?= $keterangan_volume ?></td>

                                                                                                                    </tr>
                                                                                                                    <?php
                                                                                                                    $this->db->select('*');
                                                                                                                    $this->db->from('tbl_hps_penyedia_kontrak_4');
                                                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                                                                                                                    $query_tbl_hps_penyedia_kontrak_4 = $this->db->get() ?>
                                                                                                                    <?php
                                                                                                                    foreach ($query_tbl_hps_penyedia_kontrak_4->result_array() as $key => $value_hps_penyedia_kontrak_4) { ?>
                                                                                                                        <?php
                                                                                                                        $id_hps_penyedia_kontrak_4 = $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'];
                                                                                                                        if ($value_hps_penyedia_kontrak_4['total_harga' . $field_addendum]) {
                                                                                                                            $total_hps_penyedia_kontrak_addendum_4 +=  $value_hps_penyedia_kontrak_4['total_harga' . $field_addendum];
                                                                                                                        } else {
                                                                                                                            $total_hps_penyedia_kontrak_addendum_4 +=  0;
                                                                                                                        }

                                                                                                                        if ($value_hps_penyedia_kontrak_4['volume_hps'] < $value_hps_penyedia_kontrak_4['volume_hps' . $field_addendum]) {
                                                                                                                            $keterangan_volume = '<label for="" class="badge badge-success">Volumen Bertambah</label>';
                                                                                                                        } else if ($value_hps_penyedia_kontrak_4['volume_hps'] == $value_hps_penyedia_kontrak_4['volume_hps' . $field_addendum]) {
                                                                                                                            $keterangan_volume = '';
                                                                                                                        } else {
                                                                                                                            $keterangan_volume = '<label for="" class="badge badge-warning">Volumen Berkurang</label>';
                                                                                                                        }
                                                                                                                        if ($value_hps_penyedia_kontrak_4['harga_satuan_hps'] < $value_hps_penyedia_kontrak_4['harga_satuan_hps' . $field_addendum]) {
                                                                                                                            $timpang = '<a title="Mengalami Timpang Harga" style="font-size:8px;" class="badge badge-sm badge-info"><i class="fas fa fa-info"></i></a>';
                                                                                                                        } else {
                                                                                                                            $timpang = '';
                                                                                                                        }
                                                                                                                        ?>
                                                                                                                        <tr>
                                                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_4['no_urut'] ?></td>
                                                                                                                            <td><?= $value_hps_penyedia_kontrak_4['no_hps'] ?></td>
                                                                                                                            <td><?= $value_hps_penyedia_kontrak_4['uraian_hps' . $field_addendum] ?></td>
                                                                                                                            <td><?= $value_hps_penyedia_kontrak_4['satuan_hps' . $field_addendum] ?></td>
                                                                                                                            <td><?= $value_hps_penyedia_kontrak_4['volume_hps' . $field_addendum] ?></td>
                                                                                                                            <?php if ($value_hps_penyedia_kontrak_4['harga_satuan_hps' . $field_addendum]) { ?>
                                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_4['harga_satuan_hps' . $field_addendum], 2, ',', '.') ?> <?= $timpang ?></td>
                                                                                                                            <?php  } else { ?>
                                                                                                                                <td></td>
                                                                                                                            <?php }
                                                                                                                            ?>
                                                                                                                            <?php if ($value_hps_penyedia_kontrak_4['total_harga' . $field_addendum]) { ?>
                                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_4['total_harga' . $field_addendum], 2, ',', '.') ?></td>
                                                                                                                            <?php  } else { ?>
                                                                                                                                <td></td>
                                                                                                                            <?php }
                                                                                                                            ?>
                                                                                                                            <td><?= $keterangan_volume ?></td>

                                                                                                                        </tr>
                                                                                                                        <?php
                                                                                                                        $this->db->select('*');
                                                                                                                        $this->db->from('tbl_hps_penyedia_kontrak_5');
                                                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                                                                                                                        $query_tbl_hps_penyedia_kontrak_5 = $this->db->get() ?>
                                                                                                                        <?php
                                                                                                                        foreach ($query_tbl_hps_penyedia_kontrak_5->result_array() as $key => $value_hps_penyedia_kontrak_5) { ?>
                                                                                                                            <?php
                                                                                                                            $id_hps_penyedia_kontrak_5 = $value_hps_penyedia_kontrak_5['id_hps_penyedia_kontrak_5'];
                                                                                                                            if ($value_hps_penyedia_kontrak_5['total_harga' . $field_addendum]) {
                                                                                                                                $total_hps_penyedia_kontrak_addendum_5 +=  $value_hps_penyedia_kontrak_5['total_harga' . $field_addendum];
                                                                                                                            } else {
                                                                                                                                $total_hps_penyedia_kontrak_addendum_5 +=  0;
                                                                                                                            }

                                                                                                                            if ($value_hps_penyedia_kontrak_5['volume_hps'] < $value_hps_penyedia_kontrak_5['volume_hps' . $field_addendum]) {
                                                                                                                                $keterangan_volume = '<label for="" class="badge badge-success">Volumen Bertambah</label>';
                                                                                                                            } else if ($value_hps_penyedia_kontrak_5['volume_hps'] == $value_hps_penyedia_kontrak_5['volume_hps' . $field_addendum]) {
                                                                                                                                $keterangan_volume = '';
                                                                                                                            } else {
                                                                                                                                $keterangan_volume = '<label for="" class="badge badge-warning">Volumen Berkurang</label>';
                                                                                                                            }
                                                                                                                            if ($value_hps_penyedia_kontrak_4['harga_satuan_hps'] < $value_hps_penyedia_kontrak_4['harga_satuan_hps' . $field_addendum]) {
                                                                                                                                $timpang = '<a title="Mengalami Timpang Harga" style="font-size:8px;" class="badge badge-sm badge-info"><i class="fas fa fa-info"></i></a>';
                                                                                                                            } else {
                                                                                                                                $timpang = '';
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <tr>
                                                                                                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_5['no_urut'] ?></td>
                                                                                                                                <td><?= $value_hps_penyedia_kontrak_5['no_hps' . $field_addendum] ?></td>
                                                                                                                                <td><?= $value_hps_penyedia_kontrak_5['uraian_hps' . $field_addendum] ?></td>
                                                                                                                                <td><?= $value_hps_penyedia_kontrak_5['satuan_hps' . $field_addendum] ?></td>
                                                                                                                                <td><?= $value_hps_penyedia_kontrak_5['volume_hps' . $field_addendum] ?></td>
                                                                                                                                <?php if ($value_hps_penyedia_kontrak_5['harga_satuan_hps' . $field_addendum]) { ?>
                                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_5['harga_satuan_hps' . $field_addendum], 2, ',', '.') ?><?= $timpang ?></td>
                                                                                                                                <?php  } else { ?>
                                                                                                                                    <td></td>
                                                                                                                                <?php }
                                                                                                                                ?>
                                                                                                                                <?php if ($value_hps_penyedia_kontrak_5['total_harga' . $field_addendum]) { ?>
                                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_5['total_harga' . $field_addendum], 2, ',', '.') ?></td>
                                                                                                                                <?php  } else { ?>
                                                                                                                                    <td></td>
                                                                                                                                <?php }
                                                                                                                                ?>
                                                                                                                                <td><?= $keterangan_volume ?></td>

                                                                                                                            </tr>
                                                                                                                        <?php } ?>
                                                                                                                    <?php } ?>
                                                                                                                <?php } ?>
                                                                                                            <?php } ?>
                                                                                                        <?php } ?>
                                                                                                    </tbody>
                                                                                                    <tfoot>
                                                                                                        <tr>
                                                                                                            <td colspan="2">
                                                                                                                <!-- <label for="" style="font-size: 10px;">GRAND TOTAL (Rp.)</label> -->
                                                                                                            </td>
                                                                                                            <td colspan="3"></td>
                                                                                                            <?php                                                                       ?>
                                                                                                            <td>
                                                                                                                <!-- <label style="font-size: 10px;" for=""> <?= "Rp " . number_format($total_hps_penyedia_kontrak_1 + $total_hps_penyedia_kontrak_2, 2, ',', '.') ?> 
                                                                            </label> -->
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <!-- <a href="javascript:;" onclick="Update_nilai_ke_sub_program_addendum(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>,<?= $value_addendum['no_addendum'] ?>)" class="btn btn-sm btn-primary">Simpan Dan Update</a> -->
                                                                                                            </td>
                                                                                                        </tr>
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

<div class="modal fade" data-backdrop="false" id="modal_tambah_dkh" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Edit Kuantitas / Volume</h5>
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
                    <input type="hidden" name="id_hps_penyedia_kontrak_2">
                    <input type="hidden" name="id_hps_penyedia_kontrak_3">
                    <input type="hidden" name="id_hps_penyedia_kontrak_4">
                    <input type="hidden" name="id_hps_penyedia_kontrak_5">
                    <!--  -->
                    <div class="form-group">
                        <label for="">No Hps</label>
                        <input type="text" name="no_hps" class="form-control form-control-sm" placeholder="No Hps">
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
                        <input type="number" name="volume_hps" class="form-control form-control-sm" placeholder="Volume">
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
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_2" onclick="save_hps_penyedia_kontrak_2('simpan')">Save 2</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_3" onclick="save_hps_penyedia_kontrak_3('simpan')">Save 3</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_4" onclick="save_hps_penyedia_kontrak_4('simpan')">Save 4</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_5" onclick="save_hps_penyedia_kontrak_5('simpan')">Save 5</button>
                <!-- edit -->
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_1" onclick="save_hps_penyedia_kontrak_1('edit')">Update</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_2" onclick="save_hps_penyedia_kontrak_2('edit')">Update 2</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_3" onclick="save_hps_penyedia_kontrak_3('edit')">Update 3</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_4" onclick="save_hps_penyedia_kontrak_4('edit')">Update 4</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_5" onclick="save_hps_penyedia_kontrak_5('edit')">Update 5</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" data-backdrop="false" id="modal_tambah_dkh_addendum" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Addendum </h5>
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
                        <label for="">No Hps</label>
                        <input type="text" name="no_hps" class="form-control form-control-sm" placeholder="No Hps">
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
                        <input type="number" name="volume_hps" class="form-control form-control-sm" placeholder="Volume">
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
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_1_addendum" onclick="save_hps_penyedia_kontrak_1_addendum('simpan')">Save</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_2_addendum" onclick="save_hps_penyedia_kontrak_2_addendum('simpan')">Save 2</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_3_addendum" onclick="save_hps_penyedia_kontrak_3_addendum('simpan')">Save 3</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_4_addendum" onclick="save_hps_penyedia_kontrak_4_addendum('simpan')">Save 4</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_5_addendum" onclick="save_hps_penyedia_kontrak_5_addendum('simpan')">Save 5</button>
                <!-- edit -->
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_1_addendum" onclick="save_hps_penyedia_kontrak_1_addendum('edit')">Update</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_2_addendum" onclick="save_hps_penyedia_kontrak_2_addendum('edit')">Update 2</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_3_addendum" onclick="save_hps_penyedia_kontrak_3_addendum('edit')">Update 3</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_4_addendum" onclick="save_hps_penyedia_kontrak_4_addendum('edit')">Update 4</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_5_addendum" onclick="save_hps_penyedia_kontrak_5_addendum('edit')">Update 5</button>
            </div>
        </div>
    </div>
</div>