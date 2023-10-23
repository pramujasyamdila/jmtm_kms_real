<!-- Content Wrapper. Contains page content -->
<style>
    .wrapper1,
    .wrapper2 {
        width: 300px;
        overflow-x: scroll;
        overflow-y: hidden;
    }

    .wrapper1 {
        height: 20px;
    }

    .wrapper2 {
        height: 200px;
    }

    .div1 {
        width: 1000px;
        height: 20px;
    }

    .div2 {
        width: 1000px;
        height: 200px;
        overflow: auto;
    }

    .tableFixHead {
        font-family: 'RNSSanz-ExtraBold';
        overflow: auto;
        height: 100px;

    }

    .tableFixHead thead th {
        background-color: #302B63;
        color: white;
        font-family: 'RNSSanz-ExtraBold';
        color: 'white';
        position: sticky;
        top: 0;
    }

    .customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .customers td,
    .customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .customers tr:hover {
        background-color: #ddd;
    }

    .customers th {
        padding-top: 2px;
        padding-bottom: 2px;
        text-align: left;
        background-color: #302B63;
        color: white;
    }
</style>
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
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header" style="background-color: #302B63;color:white">
                                                                    Master Data
                                                                </div>
                                                                <div class="card-body">
                                                                    <table class="table2">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>URAIAN</th>
                                                                                <th><label for="" class="ml-5">NAMA</label></th>
                                                                                <th>JABATAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td scope="row">JABATAN 1 TINGKAT DI ATAS PENGGUNA JASA </td>
                                                                                <td><input type="text" class="form-control ml-3" title="Dibutuhkan untuk Kronologis Penambahan >30% dari Kontrak" placeholder="Nama..." name="nama_1_tingkat_pengguna_jasa_papenkon"></td>
                                                                                <td><input type="text" class="form-control ml-3" title="Dibutuhkan untuk Kronologis Penambahan >30% dari Kontrak" placeholder="Jabatan..." name="jabatan_1_tingkat_pengguna_jasa_papenkon"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">KETUA PAPENKON</td>
                                                                                <td><input title="Dibutuhkan Jika Mengunakan Papenkon" type="text" class="form-control ml-3" placeholder="Nama..." name="nama_ketua_jasa_papenkon"></td>
                                                                                <td><input title="Dibutuhkan Jika Mengunakan Papenkon" type="text" class="form-control ml-3" placeholder="Jabatan..." name="jabatan_ketua_jasa_papenkon"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">PENGGUNA JASA</td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Nama..." name="nama_pengguna_jasa_papenkon"></td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Jabatan..." name="jabatan_pengguna_jasa_papenkon"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">PENYEDIA JASA</td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Nama..." name="nama_penyedia_jasa_papenkon"></td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Jabatan..." name="jabatan_penyedia_jasa_papenkon"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">WAKIL PENGGUNA JASA</td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Nama..." name="nama_wakil_pengguna_jasa_papenkon"></td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Jabatan..." name="jabatan_wakil_pengguna_jasa_papenkon"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">WAKIL PENYEDIA JASA</td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Nama..." name="nama_wakil_penyedia_jasa_papenkon"></td>
                                                                                <td><input type="text" class="form-control ml-3" placeholder="Jabatan..." name="jabatan_wakil_penyedia_jasa_papenkon"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-5">

                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <a href="javascript:;" class="btn btn-success btn-sm" onclick="simpan_master_pepenkon()"> Simpan Master</a>
                                                                        </div>
                                                                        <div class="col-md-5">

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                                            <div class="form-group">
                                                                                <label for="">Pilih Flow</label>
                                                                                <select name="flow_papenkon_<?= $value_addendum['no_addendum'] ?>" class="form-control" id="">
                                                                                    <option value="">-- Pilih Flow --</option>
                                                                                    <option value="TANPA PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL">TANPA PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL</option>
                                                                                    <option value="TANPA PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL">TANPA PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL</option>
                                                                                    <option value="DENGAN PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL">DENGAN PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL</option>
                                                                                    <option value="DENGAN PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL">DENGAN PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-5">

                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <a href="javascript:;" style="margin-top: 40px;" class="btn btn-success btn-sm" onclick="simpan_flow_papenkon(<?= $value_addendum['no_addendum'] ?>)"> Simpan Flow</a>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="card" id="papenkon_1">
                                                                                    <div class="card-header" style="background-color: #302B63;color:white">
                                                                                        <?= $row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . ''] ?>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div onscroll='scroller("scroller", "scrollme")' style="overflow:scroll; height: 10;overflow-y: hidden;" id=scroller>
                                                                                            <img src="" height=1 width=2066 style="width:2066px;">
                                                                                        </div>
                                                                                        <div onscroll='scroller("scrollme", "scroller")' style="overflow:scroll; height:400px" id="scrollme">
                                                                                            <br>
                                                                                            <?php
                                                                                            $this->db->select('*');
                                                                                            $this->db->from('tbl_flow_papenkon');
                                                                                            $this->db->where('tbl_flow_papenkon.id_detail_program_penyedia_jasa', $row_program_kontrak_detail['id_detail_program_penyedia_jasa']);
                                                                                            $this->db->where('tbl_flow_papenkon.addendum_flow', $value_addendum['no_addendum']);
                                                                                            $this->db->where('tbl_flow_papenkon.flow_papenkon', $row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . '']);
                                                                                            $result_flow_cek = $this->db->get() ?>
                                                                                            <?php if ($result_flow_cek->result_array()) { ?>
                                                                                                <table class="customers tableFixHead" style="font-size: 14px;">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>No</th>
                                                                                                            <th>Uraian</th>
                                                                                                            <th>No Surat</th>
                                                                                                            <th>Tanggal Surat</th>
                                                                                                            <th>Nama Dari</th>
                                                                                                            <th>Jabatan Dari</th>
                                                                                                            <th>Nama Ke</th>
                                                                                                            <th>Jabatan Ke</th>
                                                                                                            <th>Download</th>
                                                                                                            <th>Upload</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <?php
                                                                                                        $this->db->select('*');
                                                                                                        $this->db->from('tbl_flow_papenkon');
                                                                                                        $this->db->where('tbl_flow_papenkon.id_detail_program_penyedia_jasa', $row_program_kontrak_detail['id_detail_program_penyedia_jasa']);
                                                                                                        $this->db->where('tbl_flow_papenkon.addendum_flow', $value_addendum['no_addendum']);
                                                                                                        $this->db->where('tbl_flow_papenkon.flow_papenkon', $row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . '']);
                                                                                                        $result_flow = $this->db->get() ?>
                                                                                                        <?php
                                                                                                        $no = 1;
                                                                                                        foreach ($result_flow->result_array() as $value_flow) { ?>
                                                                                                            <tr>
                                                                                                                <td><?= $no++ ?></td>
                                                                                                                <td><label for="" style="width: 200px;"><?= $value_flow['nama_uraian'] ?></label></td>
                                                                                                                <td><input style="width: 200px;" type="text" name="no_surat" data-no_surat_id="<?= $value_flow['id_flow_papenkon'] ?>" class="no_surat form-control" placeholder="No Surat" value="<?= $value_flow['no_surat'] ?>"></td>
                                                                                                                <td><input type="date" style="width: 200px;" name="tanggal_surat" data-tanggal_surat_id="<?= $value_flow['id_flow_papenkon'] ?>" class="tanggal_surat form-control" value="<?= $value_flow['tanggal'] ?>"></td>
                                                                                                                <td><input type="text" style="width: 200px;" name="nama_dari" data-nama_dari_id="<?= $value_flow['id_flow_papenkon'] ?>" class="nama_dari form-control" placeholder="Nama Dari" value="<?= $value_flow['nama_dari'] ?>"></td>
                                                                                                                <td><input type="text" style="width: 200px;" name="jabatan_dari" data-jabatan_dari_id="<?= $value_flow['id_flow_papenkon'] ?>" class="jabatan_dari form-control" placeholder="Jabatan Dari" value="<?= $value_flow['jabatan_dari'] ?>"></td>
                                                                                                                <td><input type="text" style="width: 200px;" name="nama_ke" data-nama_ke_id="<?= $value_flow['id_flow_papenkon'] ?>" class="nama_ke form-control" placeholder="Nama Ke" value="<?= $value_flow['nama_ke'] ?>"></td>
                                                                                                                <td><input type="text" style="width: 200px;" name="jabatan_ke" data-jabatan_ke_id="<?= $value_flow['id_flow_papenkon'] ?>" class="jabatan_ke form-control" placeholder="Jabatan Ke" value="<?= $value_flow['jabatan_ke'] ?>"></td>
                                                                                                                <td>
                                                                                                                    <?php if ($value_flow['status_upload'] == 1) { ?>
                                                                                                                        <a target="_blank" href="<?= base_url('file_dokumen_papenkon/' . $value_flow['file_dokumen']) ?>" class="badge badge-block badge-sm badge-success">Download</a>
                                                                                                                    <?php } else { ?>
                                                                                                                        <label for="" class="badge badge-block badge-sm badge-danger"> Belum Upload</label>
                                                                                                                    <?php  }
                                                                                                                    ?>

                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <a href="javascript:;" onclick="modal_upload_surat_papenkon_ku(<?= $value_flow['id_flow_papenkon'] ?>,'<?= $value_flow['nama_uraian'] ?>')" class="btn btn-block btn-sm btn-warning">Upload</a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        <?php }
                                                                                                        ?>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                                <!-- MASS BONGGA SAYANG-->
                                                                                            <?php   } else { ?>

                                                                                            <?php }
                                                                                            ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="col-md-12">
                                                                                <div class="card" id="papenkon_1">
                                                                                    <div class="card-header" style="background-color: #302B63;color:white">
                                                                                        <?php if ($row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . ''] == 'TANPA PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') { ?>
                                                                                            Tambahkan kronologis persuratan tambahan sesuai yang dibutuhkan (contoh : Surat Instruksi Addendum dari Wakil Pengguna Jasa atau Surat Permohonan Addendum dari Penyedia Jasa, Surat Permohonan Evaluasi Addendum ke Konsultan (jika ada) atau dasar-dasar penguat Addendum lain yang dibutuhkan)
                                                                                        <?php } else  if ($row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . ''] == 'TANPA PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') { ?>
                                                                                            Tambahkan kronologis persuratan tambahan sesuai yang dibutuhkan (contoh : Surat Instruksi Addendum dari Wakil Pengguna Jasa atau Surat Permohonan Addendum dari Penyedia Jasa, Surat Permohonan Evaluasi Addendum ke Konsultan (jika ada) atau dasar-dasar penguat Addendum lain yang dibutuhkan)
                                                                                        <?php } else  if ($row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . ''] == 'DENGAN PAPENKON DAN < 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') { ?>
                                                                                            Tambahkan kronologis persuratan tambahan sesuai yang dibutuhkan (contoh : Surat Instruksi Addendum dari Wakil Pengguna Jasa atau Surat Permohonan Addendum dari Penyedia Jasa, Surat Permohonan Evaluasi Addendum ke Konsultan (jika ada) atau dasar-dasar penguat Addendum lain yang dibutuhkan)
                                                                                        <?php } else  if ($row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . ''] == 'DENGAN PAPENKON DAN > 30% PENAMBAHAN NILAI ADDENDUM DARI KONTRAK AWAL') { ?>
                                                                                            Permohonan Addendum dari Penyedia Jasa, Surat Permohonan Evaluasi Addendum ke Konsultan (jika ada) atau dasar-dasar penguat Addendum lain yang dibutuhkan)
                                                                                        <?php } else { ?>
                                                                                        <?php } ?>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <div onscroll='scroller("scroller", "scrollme")' style="overflow:scroll; height: 10;overflow-y: hidden;" id=scroller>
                                                                                            <img src="" height=1 width=2066 style="width:2066px;">
                                                                                        </div>
                                                                                        <div onscroll='scroller("scrollme", "scroller")' style="overflow:scroll; height:400px" id="scrollme">
                                                                                            <br>
                                                                                            <a href="javascript:;" onclick="modal_tambah_papenkon_tambahan(<?= $value_addendum['no_addendum'] ?>,'<?= $row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . ''] ?>')" class="mb-2 btn btn-success btn-sm">Tambah</a>
                                                                                            <br>
                                                                                            <table class="customers tableFixHead" style="font-size: 14px;">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>No</th>
                                                                                                        <th>Uraian</th>
                                                                                                        <th>No Surat</th>
                                                                                                        <th>Tanggal Surat</th>
                                                                                                        <th>Nama Dari</th>
                                                                                                        <th>Jabatan Dari</th>
                                                                                                        <th>Nama Ke</th>
                                                                                                        <th>Jabatan Ke</th>
                                                                                                        <th>Download</th>
                                                                                                        <th>Upload</th>
                                                                                                        <th>Hapus</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <?php
                                                                                                    $this->db->select('*');
                                                                                                    $this->db->from('tbl_tambahan_flow_papenkon');
                                                                                                    $this->db->where('tbl_tambahan_flow_papenkon.id_detail_program_penyedia_jasa', $row_program_kontrak_detail['id_detail_program_penyedia_jasa']);
                                                                                                    $this->db->where('tbl_tambahan_flow_papenkon.addendum_flow_tambahan', $value_addendum['no_addendum']);
                                                                                                    $this->db->where('tbl_tambahan_flow_papenkon.flow_papenkon_tambahan', $row_program_kontrak_detail['flow_papenkon_addendum_' . $value_addendum['no_addendum'] . '']);
                                                                                                    $result_flow = $this->db->get() ?>
                                                                                                    <?php
                                                                                                    $no = 1;
                                                                                                    foreach ($result_flow->result_array() as $value_flow) { ?>
                                                                                                        <tr>
                                                                                                            <td><?= $no++ ?></td>
                                                                                                            <td><input style="width: 200px;" type="text" name="nama_uraian_tambahan" data-nama_uraian_id_tambahan="<?= $value_flow['id_flow_papenkon_tambahan'] ?>" class="nama_uraian_tambahan form-control" placeholder="Nama Uraian" value="<?= $value_flow['nama_uraian_tambahan'] ?>"></td>
                                                                                                            <td><input style="width: 200px;" type="text" name="no_surat_tambahan" data-no_surat_id_tambahan="<?= $value_flow['id_flow_papenkon_tambahan'] ?>" class="no_surat_tambahan form-control" placeholder="No Surat" value="<?= $value_flow['no_surat_tambahan'] ?>"></td>
                                                                                                            <td><input type="date" style="width: 200px;" name="tanggal_surat_tambahan" data-tanggal_surat_id_tambahan="<?= $value_flow['id_flow_papenkon_tambahan'] ?>" class="tanggal_surat_tambahan form-control" value="<?= $value_flow['tanggal_tambahan'] ?>"></td>
                                                                                                            <td><input type="text" style="width: 200px;" name="nama_dari_tambahan" data-nama_dari_id_tambahan="<?= $value_flow['id_flow_papenkon_tambahan'] ?>" class="nama_dari_tambahan form-control" placeholder="Nama Dari" value="<?= $value_flow['nama_dari_tambahan'] ?>"></td>
                                                                                                            <td><input type="text" style="width: 200px;" name="jabatan_dari_tambahan" data-jabatan_dari_id_tambahan="<?= $value_flow['id_flow_papenkon_tambahan'] ?>" class="jabatan_dari_tambahan form-control" placeholder="Jabatan Dari" value="<?= $value_flow['jabatan_dari_tambahan'] ?>"></td>
                                                                                                            <td><input type="text" style="width: 200px;" name="nama_ke_tambahan" data-nama_ke_id_tambahan="<?= $value_flow['id_flow_papenkon_tambahan'] ?>" class="nama_ke_tambahan form-control" placeholder="Nama Ke" value="<?= $value_flow['nama_ke_tambahan'] ?>"></td>
                                                                                                            <td><input type="text" style="width: 200px;" name="jabatan_ke_tambahan" data-jabatan_ke_id_tambahan="<?= $value_flow['id_flow_papenkon_tambahan'] ?>" class="jabatan_ke_tambahan form-control" placeholder="Jabatan Ke" value="<?= $value_flow['jabatan_ke_tambahan'] ?>"></td>
                                                                                                            <td>
                                                                                                                <?php if ($value_flow['status_upload_tambahan'] == 1) { ?>
                                                                                                                    <a target="_blank" href="<?= base_url('file_dokumen_papenkon/' . $value_flow['file_dokumen_tambahan']) ?>" class="badge badge-block badge-sm badge-success">Download</a>
                                                                                                                <?php } else { ?>
                                                                                                                    <label for="" class="badge badge-block badge-sm badge-danger"> Belum Upload</label>
                                                                                                                <?php  }
                                                                                                                ?>

                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <a href="javascript:;" onclick="modal_upload_surat_papenkon_ku_tambahan(<?= $value_flow['id_flow_papenkon_tambahan'] ?>,'<?= $value_flow['nama_uraian_tambahan'] ?>')" class="btn btn-block btn-sm btn-warning">Upload</a>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <a href="javascript:;" onclick="hapus_surat_tambahan(<?= $value_flow['id_flow_papenkon_tambahan'] ?>,'<?= $value_flow['nama_uraian_tambahan'] ?>')" class="btn btn-block btn-sm btn-danger"><i class="fas fa fa-trash"></i></a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    <?php }
                                                                                                    ?>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <!-- Modal -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
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
<!-- Modal -->
<div class="modal fade" id="modal_tambahan_papenkon" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambahkan kronologis persuratan tambahan sesuai yang dibutuhkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" value="<?= $row_program_kontrak_detail['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa_tambah_data">
                <input type="hidden" name="addendum_flow_tambahan_tambah_data">
                <input type="hidden" name="flow_papenkon_tambahan_tambah_data">
                <div class="form-group">
                    <label for="">Jumlah Baris</label>
                    <input type="number" value="1" name="jumlah_row" placeholder="Masukan Jumlah Rows / Baris" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="buat_tambahan_row()" class="btn btn-success">Create Rows</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_upload_surat_papenkon_tambahan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">UPLOAD SURAT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <form id="form_upload_surat_papenkon_tambahan" enctype="multipart/form-data">
                        <input type="hidden" name="id_flow_papenkon_tambahan_upload">
                        <div class="input-group col-md-12">
                            <div class="input-group-append">
                                <button class="input-group-text attach_btn btn-grad100" type="button" id="loadFileXml" value="loadXml" onclick="document.getElementById('file').click();"><i class="fas fa-paperclip"></i></button>
                                <input type="file" style="display:none;" id="file" class="file_dokumen_tambahan" name="file_dokumen_tambahan" />
                            </div>
                            <input type="text" name="nama_uraian_upload_tambahan" readonly class="form-control" placeholder="Nama File....">
                            <div class="input-group-append">
                                <button type="submit" id="upload_tambahan" name="upload_tambahan" class="input-group-text  btn-grad100"><i class="fas fa-upload"></i></button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div style="display: none;" id="error_file_tambahan" class="alert alert-danger" role="alert">
                        ANDA BELUM MENGISI FILE !!!
                    </div>
                </center>
                <br>
                <center>
                    <div class="form-group col-md-6" id="process_tambahan" style="display:none;">
                        <small for="" style="display:none;" id="sedang_dikirim_tambahan">Sedang Mengupload....</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_upload_surat_papenkon" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">UPLOAD SURAT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <form id="form_upload_surat_papenkon" enctype="multipart/form-data">
                        <input type="hidden" name="id_flow_papenkon_upload">
                        <div class="input-group col-md-12">
                            <div class="input-group-append">
                                <button class="input-group-text attach_btn btn-grad100" type="button" id="loadFileXml" value="loadXml" onclick="document.getElementById('file').click();"><i class="fas fa-paperclip"></i></button>
                                <input type="file" style="display:none;" id="file" class="file_dokumen" name="file_dokumen" />
                            </div>
                            <input type="text" name="nama_uraian_upload" readonly class="form-control" placeholder="Nama File....">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
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