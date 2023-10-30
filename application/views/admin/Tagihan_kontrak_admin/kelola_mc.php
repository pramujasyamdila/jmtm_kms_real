<!-- Content Wrapper. Contains page content -->
<?php $total_kontraknya2 = 0; ?>
<?php foreach ($result_sub_program as $key => $value2) { ?>
    <?php $id_detail_sub_program_penyedia_jasa2 = $value2['id_detail_sub_program_penyedia_jasa'];  ?>
    <?php
    $this->db->select('*');
    $this->db->from('tbl_nilai_kontrak_mc');
    $this->db->where('tbl_nilai_kontrak_mc.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa2);
    $this->db->where('tbl_nilai_kontrak_mc.id_mc',   $row_mc['id_mc']);
    $result_hps_nilai_kontrak2 = $this->db->get()->result_array() ?>
    <?php foreach ($result_hps_nilai_kontrak2 as $key => $value_nilai_kontrak2) { ?>
        <?php $total_kontraknya2 += $value_nilai_kontrak2['total_satuan_nilai_kontrak_mc'] ?>
    <?php } ?>
<?php } ?>

<?php
$hasil_bobot1 = $row_kontrak['total_kontrak'] / $total_kontraknya2;
$hasil_bobot  = round($hasil_bobot1 * 100);
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> KELOLA MC</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/buat_tagihan/') . $row_kontrak['id_kontrak'] ?>">ADMINISTRASI TAGGIHAN PENYEDIA</a></div>
                <div class="breadcrumb-item active"><a href="">KELOLA MC</a></div>
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
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
                                        <h5>KELOLA MC</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="javascript:;" id="form_mc_edit" method="post">
                                            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_kontrak['id_detail_program_penyedia_jasa'] ?>">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?= $this->session->flashdata('pesan'); ?>
                                                    <div class="card card-outline card-warning">
                                                        <div class="card-header">
                                                            Kelola Nilai Kontrak / Jumlah MC
                                                        </div>
                                                        <div class="card-body">
                                                            <?php if ($cek_nilai_kontrak_mc) { ?>
                                                                <div class="form-group">
                                                                    <label for="">Pilih Buat Baru / Tidak</label>
                                                                    <select style="font-size:11px" name="cek_buat_baru" onchange="Pilih_Baru()" class="form-control form-control-sm">
                                                                        <option value="">--- Plih ---</option>
                                                                        <option value="baru">Buat Nilai Kontark baru</option>
                                                                        <option value="tidak">Tidak</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group" id="buat_baru" style="display:none">
                                                                    <label for="">Pilih Dari Mana Nilai Kontrak / Jumlah Mc</label>
                                                                    <select style="font-size:11px" name="cek_kontrak_penyedia" onchange="Pilih_Nilai_Kontrak(<?= $row_kontrak['id_detail_program_penyedia_jasa'] ?>)" class="form-control form-control-sm">
                                                                        <option value="">--- Plih ---</option>
                                                                        <option value="nilai kontrak awal">Kontrak Awal</option>
                                                                        <?php foreach ($addendum_result as $key => $value) { ?>
                                                                            <option value="<?= $value['no_addendum'] ?>">Addendum <?= $value['no_addendum'] ?></option>
                                                                        <?php  } ?>
                                                                    </select>
                                                                </div>
                                                            <?php   } else { ?>
                                                                <div class="form-group">
                                                                    <label for="">Pilih Dari Mana Nilai Kontrak / Jumlah Mc</label>
                                                                    <select style="font-size:11px" name="cek_kontrak_penyedia" onchange="Pilih_Nilai_Kontrak(<?= $row_kontrak['id_detail_program_penyedia_jasa'] ?>)" class="form-control form-control-sm">
                                                                        <option value="">--- Plih ---</option>
                                                                        <option value="nilai kontrak awal">Kontrak Awal</option>
                                                                        <?php foreach ($addendum_result as $key => $value) { ?>
                                                                            <option value="<?= $value['no_addendum'] ?>">Addendum <?= $value['no_addendum'] ?></option>
                                                                        <?php  } ?>
                                                                    </select>
                                                                </div>
                                                            <?php  }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="card card-primary card-tabs">
                                                        <div class="card-body">
                                                            <!-- Modal -->
                                                            <?php if ($row_mc['sts_mc_nilai'] == 'kontrak_awal') {
                                                                $data_render = '';
                                                            } else {
                                                                $data_render = $row_mc['sts_mc_nilai'];
                                                            } ?>

                                                            <?php if ($row_mc['sts_mc_nilai'] == 'kontrak_awal') {
                                                                $data_render_logic = '';
                                                            } else {
                                                                $data_render_logic = $row_mc['sts_mc_nilai'];
                                                            } ?>
                                                            <ul class="nav nav-tabs" id="myTabku2" style="margin-top: 50px;">
                                                                <?php
                                                                $this->db->select('*');
                                                                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $row_kontrak['id_detail_program_penyedia_jasa']);
                                                                $this->db->where_in('tbl_sub_detail_program_penyedia_jasa.status_mata_anggaran_addendum', [0, 1]);
                                                                $this->db->where_in('tbl_sub_detail_program_penyedia_jasa.addendum_ke', [$data_render_logic, 'kosong']);
                                                                $result_sub_program_tambahan_anggaran = $this->db->get();
                                                                ?>
                                                                <?php foreach ($result_sub_program_tambahan_anggaran->result_array() as $key => $value) { ?>
                                                                    <li>
                                                                        <a class="nav-link bg-primary text-white" href="#angga_adden<?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                                                                    </li>
                                                                <?php  } ?>
                                                            </ul>
                                                            <div class="tab-content mt-3">
                                                                <?php foreach ($result_sub_program_tambahan_anggaran->result_array() as $key => $value) { ?>
                                                                    <div class="tab-pane fade show" id="angga_adden<?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                                                        <?php foreach ($addendum_result as $key => $valu2) { ?>
                                                                            <input type="hidden" name="type_add_update" value="<?= $valu2['no_addendum'] ?>">
                                                                        <?php  } ?>

                                                                        <div class="content">
                                                                            <a href="javascript:;" style="float: right;" class="btn btn-success" data-toggle="modal" data-target="#importdataexcel"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> Import Excel</a>
                                                                            <br><br>
                                                                            <div class="card card-outline card-primary">
                                                                                <div class="card-header">
                                                                                    <center>
                                                                                        <h4>
                                                                                            Nilai Kontrak <?= $value['nama_program_mata_anggaran'] ?>
                                                                                        </h4>
                                                                                    </center>

                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <table style="width: 100%;" class="tabledetail table table-bordered table-striped">
                                                                                        <thead style="font-size: 12px;" class="thead-inverse bg-primary">
                                                                                            <tr>
                                                                                                <th class="text-white">Inisialisasi Turunan</th>
                                                                                                <th class="text-white">Kode Khsus</th>
                                                                                                <th class="text-white">No</th>
                                                                                                <th class="text-white">No Hps</th>
                                                                                                <th class="text-white">Uraian</th>
                                                                                                <th class="text-white">Satuan</th>
                                                                                                <th class="text-white">Kuantitas</th>
                                                                                                <th class="text-white">Harga Satuan</th>
                                                                                                <th class="text-white">Jumlah Harga</th>
                                                                                                <th class="text-white">Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody style="font-size: 10px;">
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
                                                                                                    $total_hps_penyedia_kontrak_mc_addendum_1 +=  $value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render];
                                                                                                } else {
                                                                                                    $total_hps_penyedia_kontrak_mc_addendum_1 +=  0;
                                                                                                }
                                                                                                ?>

                                                                                                <tr>
                                                                                                    <td>level 1</td>
                                                                                                    <td> &nbsp;<?= $value_hps_penyedia_kontrak_mc_1['id_hps_penyedia_kontrak_mc_1'] ?></td>
                                                                                                    <td> &nbsp;<?= $value_hps_penyedia_kontrak_mc_1['no_urut' . $data_render] ?></td>
                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_1['no_hps' . $data_render] ?></td>
                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_1['uraian_hps' . $data_render] ?></td>
                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_1['satuan_hps' . $data_render] ?></td>
                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_1['volume_hps' . $data_render] ?></td>
                                                                                                    <?php if ($value_hps_penyedia_kontrak_mc_1['harga_satuan_hps' . $data_render]) { ?>
                                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['harga_satuan_hps' . $data_render], 2, ',', '.') ?> </td>
                                                                                                    <?php  } else { ?>
                                                                                                        <td></td>
                                                                                                    <?php }
                                                                                                    ?>
                                                                                                    <?php if ($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render]) { ?>
                                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.') ?> </td>
                                                                                                    <?php  } else { ?>
                                                                                                        <td></td>
                                                                                                    <?php }
                                                                                                    ?>
                                                                                                    <td>
                                                                                                        <div class="btn-group">
                                                                                                            <button type="button" class="btn btn-default">Action</button>
                                                                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                                            </button>
                                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                                <!-- 2 -->
                                                                                                                <!-- 1 -->
                                                                                                                <a onclick="modal_hps_penyedia_kontrak_mc_2_addendum(<?= $value_hps_penyedia_kontrak_mc_1['id_hps_penyedia_kontrak_mc_1'] ?>,'edit','<?= $row_mc['sts_mc_nilai'] ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Update"><i class="fas fa-edit"></i></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <?php
                                                                                                $this->db->select('*');
                                                                                                $this->db->from('tbl_hps_penyedia_kontrak_mc_2');
                                                                                                $this->db->where('tbl_hps_penyedia_kontrak_mc_2.id_hps_penyedia_kontrak_mc_1', $id_hps_penyedia_kontrak_mc_1);
                                                                                                $query_tbl_hps_penyedia_kontrak_mc_2 = $this->db->get() ?>
                                                                                                <?php
                                                                                                foreach ($query_tbl_hps_penyedia_kontrak_mc_2->result_array() as $key => $value_hps_penyedia_kontrak_mc_2) { ?>
                                                                                                    <?php
                                                                                                    $id_hps_penyedia_kontrak_mc_2 = $value_hps_penyedia_kontrak_mc_2['id_hps_penyedia_kontrak_mc_2'];
                                                                                                    if ($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render]) {
                                                                                                        $total_hps_penyedia_kontrak_mc_addendum_2 +=  $value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render];
                                                                                                    } else {
                                                                                                        $total_hps_penyedia_kontrak_mc_addendum_2 +=  0;
                                                                                                    }

                                                                                                    ?>
                                                                                                    <tr>
                                                                                                        <td>level 2</td>
                                                                                                        <td> &nbsp;<?= $value_hps_penyedia_kontrak_mc_2['id_hps_penyedia_kontrak_mc_2'] ?></td>
                                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_mc_2['no_urut' . $data_render] ?></td>
                                                                                                        <td><?= $value_hps_penyedia_kontrak_mc_2['no_hps' . $data_render] ?></td>
                                                                                                        <td><?= $value_hps_penyedia_kontrak_mc_2['uraian_hps' . $data_render] ?></td>
                                                                                                        <td><?= $value_hps_penyedia_kontrak_mc_2['satuan_hps' . $data_render] ?></td>
                                                                                                        <td><?= $value_hps_penyedia_kontrak_mc_2['volume_hps' . $data_render] ?></td>
                                                                                                        <?php if ($value_hps_penyedia_kontrak_mc_2['harga_satuan_hps' . $data_render]) { ?>
                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_2['harga_satuan_hps' . $data_render], 2, ',', '.') ?> </td>
                                                                                                        <?php  } else { ?>
                                                                                                            <td></td>
                                                                                                        <?php }
                                                                                                        ?>
                                                                                                        <?php if ($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render]) { ?>
                                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_2['total_harga' . $data_render], 2, ',', '.') ?> </td>
                                                                                                        <?php  } else { ?>
                                                                                                            <td></td>
                                                                                                        <?php }
                                                                                                        ?>

                                                                                                        <td>
                                                                                                            <div class="btn-group">
                                                                                                                <button type="button" class="btn btn-default">Action</button>
                                                                                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                                                                </button>
                                                                                                                <div class="dropdown-menu" role="menu">
                                                                                                                    <!-- 3 -->
                                                                                                                    <!-- 2 -->
                                                                                                                    <a onclick="modal_hps_penyedia_kontrak_mc_3_addendum(<?= $value_hps_penyedia_kontrak_mc_2['id_hps_penyedia_kontrak_mc_2'] ?>,'edit','<?= $row_mc['sts_mc_nilai'] ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </td>

                                                                                                    </tr>
                                                                                                    <?php
                                                                                                    $this->db->select('*');
                                                                                                    $this->db->from('tbl_hps_penyedia_kontrak_mc_3');
                                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_mc_3.id_hps_penyedia_kontrak_mc_2', $id_hps_penyedia_kontrak_mc_2);

                                                                                                    $query_tbl_hps_penyedia_kontrak_mc_3 = $this->db->get() ?>
                                                                                                    <?php
                                                                                                    foreach ($query_tbl_hps_penyedia_kontrak_mc_3->result_array() as $key => $value_hps_penyedia_kontrak_mc_3) { ?>
                                                                                                        <?php
                                                                                                        $id_hps_penyedia_kontrak_mc_3 = $value_hps_penyedia_kontrak_mc_3['id_hps_penyedia_kontrak_mc_3'];
                                                                                                        if ($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render]) {
                                                                                                            $total_hps_penyedia_kontrak_mc_addendum_3 +=  $value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render];
                                                                                                        } else {
                                                                                                            $total_hps_penyedia_kontrak_mc_addendum_3 +=  0;
                                                                                                        }
                                                                                                        ?>
                                                                                                        <tr>
                                                                                                            <td>level 3</td>
                                                                                                            <td> &nbsp;<?= $value_hps_penyedia_kontrak_mc_3['id_hps_penyedia_kontrak_mc_3'] ?></td>
                                                                                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_mc_3['no_urut' . $data_render] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_mc_3['no_hps' . $data_render] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_mc_3['uraian_hps' . $data_render] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_mc_3['satuan_hps' . $data_render] ?></td>
                                                                                                            <td><?= $value_hps_penyedia_kontrak_mc_3['volume_hps' . $data_render] ?></td>
                                                                                                            <?php if ($value_hps_penyedia_kontrak_mc_3['harga_satuan_hps' . $data_render]) { ?>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_3['harga_satuan_hps' . $data_render], 2, ',', '.') ?> </td>
                                                                                                            <?php  } else { ?>
                                                                                                                <td></td>
                                                                                                            <?php }
                                                                                                            ?>
                                                                                                            <?php if ($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render]) { ?>
                                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_3['total_harga' . $data_render], 2, ',', '.') ?></td>
                                                                                                            <?php  } else { ?>
                                                                                                                <td></td>
                                                                                                            <?php }
                                                                                                            ?>
                                                                                                            <td>
                                                                                                                <div class="btn-group">
                                                                                                                    <button type="button" class="btn btn-default">Action</button>
                                                                                                                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                                    </button>
                                                                                                                    <div class="dropdown-menu" role="menu">
                                                                                                                        <!-- 4 -->
                                                                                                                        <!-- 3 -->
                                                                                                                        <a onclick="modal_hps_penyedia_kontrak_mc_4_addendum(<?= $value_hps_penyedia_kontrak_mc_3['id_hps_penyedia_kontrak_mc_3'] ?>,'edit','<?= $row_mc['sts_mc_nilai'] ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </td>

                                                                                                        </tr>
                                                                                                        <?php
                                                                                                        $this->db->select('*');
                                                                                                        $this->db->from('tbl_hps_penyedia_kontrak_mc_4');
                                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_mc_4.id_hps_penyedia_kontrak_mc_3', $id_hps_penyedia_kontrak_mc_3);

                                                                                                        $query_tbl_hps_penyedia_kontrak_mc_4 = $this->db->get() ?>
                                                                                                        <?php
                                                                                                        foreach ($query_tbl_hps_penyedia_kontrak_mc_4->result_array() as $key => $value_hps_penyedia_kontrak_mc_4) { ?>
                                                                                                            <?php
                                                                                                            $id_hps_penyedia_kontrak_mc_4 = $value_hps_penyedia_kontrak_mc_4['id_hps_penyedia_kontrak_mc_4'];
                                                                                                            if ($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render]) {
                                                                                                                $total_hps_penyedia_kontrak_mc_addendum_4 +=  $value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render];
                                                                                                            } else {
                                                                                                                $total_hps_penyedia_kontrak_mc_addendum_4 +=  0;
                                                                                                            }

                                                                                                            ?>
                                                                                                            <tr>
                                                                                                                <td>level 4</td>
                                                                                                                <td> &nbsp;<?= $value_hps_penyedia_kontrak_mc_4['id_hps_penyedia_kontrak_mc_4'] ?></td>
                                                                                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_mc_4['no_urut' . $data_render] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_mc_4['no_hps' . $data_render] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_mc_4['uraian_hps' . $data_render] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_mc_4['satuan_hps' . $data_render] ?></td>
                                                                                                                <td><?= $value_hps_penyedia_kontrak_mc_4['volume_hps' . $data_render] ?></td>
                                                                                                                <?php if ($value_hps_penyedia_kontrak_mc_4['harga_satuan_hps' . $data_render]) { ?>
                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_4['harga_satuan_hps' . $data_render], 2, ',', '.') ?> </td>
                                                                                                                <?php  } else { ?>
                                                                                                                    <td></td>
                                                                                                                <?php }
                                                                                                                ?>
                                                                                                                <?php if ($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render]) { ?>
                                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_4['total_harga' . $data_render], 2, ',', '.') ?></td>
                                                                                                                <?php  } else { ?>
                                                                                                                    <td></td>
                                                                                                                <?php }
                                                                                                                ?>
                                                                                                                <td>
                                                                                                                    <div class="btn-group">
                                                                                                                        <button type="button" class="btn btn-default">Action</button>
                                                                                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                                                        </button>
                                                                                                                        <div class="dropdown-menu" role="menu">
                                                                                                                            <!-- 5 -->
                                                                                                                            <!-- 4 -->
                                                                                                                            <a onclick="modal_hps_penyedia_kontrak_mc_5_addendum(<?= $value_hps_penyedia_kontrak_mc_4['id_hps_penyedia_kontrak_mc_4'] ?>,'edit','<?= $row_mc['sts_mc_nilai'] ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>

                                                                                                            </tr>
                                                                                                            <?php
                                                                                                            $this->db->select('*');
                                                                                                            $this->db->from('tbl_hps_penyedia_kontrak_mc_5');
                                                                                                            $this->db->where('tbl_hps_penyedia_kontrak_mc_5.id_hps_penyedia_kontrak_mc_4', $id_hps_penyedia_kontrak_mc_4);

                                                                                                            $query_tbl_hps_penyedia_kontrak_mc_5 = $this->db->get() ?>
                                                                                                            <?php
                                                                                                            foreach ($query_tbl_hps_penyedia_kontrak_mc_5->result_array() as $key => $value_hps_penyedia_kontrak_mc_5) { ?>
                                                                                                                <?php
                                                                                                                $id_hps_penyedia_kontrak_mc_5 = $value_hps_penyedia_kontrak_mc_5['id_hps_penyedia_kontrak_mc_5'];
                                                                                                                if ($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render]) {
                                                                                                                    $total_hps_penyedia_kontrak_mc_addendum_5 +=  $value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render];
                                                                                                                } else {
                                                                                                                    $total_hps_penyedia_kontrak_mc_addendum_5 +=  0;
                                                                                                                }
                                                                                                                ?>
                                                                                                                <tr>
                                                                                                                    <td>level 5</td>
                                                                                                                    <td> &nbsp;<?= $value_hps_penyedia_kontrak_mc_5['id_hps_penyedia_kontrak_mc_5'] ?></td>
                                                                                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_kontrak_mc_5['no_urut' . $data_render] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_5['no_hps' . $data_render] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_5['uraian_hps' . $data_render] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_5['satuan_hps' . $data_render] ?></td>
                                                                                                                    <td><?= $value_hps_penyedia_kontrak_mc_5['volume_hps' . $data_render] ?></td>
                                                                                                                    <?php if ($value_hps_penyedia_kontrak_mc_5['harga_satuan_hps' . $data_render]) { ?>
                                                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_5['harga_satuan_hps' . $data_render], 2, ',', '.') ?></td>
                                                                                                                    <?php  } else { ?>
                                                                                                                        <td></td>
                                                                                                                    <?php }
                                                                                                                    ?>
                                                                                                                    <?php if ($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render]) { ?>
                                                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_5['total_harga' . $data_render], 2, ',', '.') ?></td>
                                                                                                                    <?php  } else { ?>
                                                                                                                        <td></td>
                                                                                                                    <?php }
                                                                                                                    ?>
                                                                                                                    <td>
                                                                                                                        <div class="btn-group">
                                                                                                                            <button type="button" class="btn btn-default">Action</button>
                                                                                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                                                            </button>
                                                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                                                <!-- 6 -->
                                                                                                                                <!-- 5 -->
                                                                                                                                <a onclick="modal_hps_penyedia_kontrak_mc_6_addendum(<?= $value_hps_penyedia_kontrak_mc_5['id_hps_penyedia_kontrak_mc_5'] ?>,'edit','<?= $row_mc['sts_mc_nilai'] ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            <?php } ?>
                                                                                                        <?php } ?>
                                                                                                    <?php } ?>
                                                                                                <?php } ?>
                                                                                            <?php } ?>
                                                                                            <!-- <tfoot>
                                                                                            <tr>
                                                                                                <td colspan="5"> Mata Anggaran <?= $value['nama_program_mata_anggaran'] ?> Sebelum (ppn) : </td>
                                                                                                <td></td>
                                                                                                <td colspan="2"><?= "Rp " . number_format($value_hps_penyedia_kontrak_mc_1['total_harga' . $data_render], 2, ',', '.'); ?></td>
                                                                                            </tr>
                                                                                        </tfoot> -->
                                                                                        </tbody>
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
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-primary">
                                                        <div class="card-header">
                                                            Edit Detail MC
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <?php if ($row_mc['no_mc'] == 'um') { ?>
                                                                            <input type="hidden" value="<?= $row_mc['sd_bulan_ini'] ?>" name="jumlah_mc_edit">
                                                                        <?php  } else if ($row_mc['no_mc'] == '1') { ?>
                                                                            <input type="hidden" value="<?= $row_mc['sd_bulan_ini'] ?>" name="jumlah_mc_edit">
                                                                        <?php  } else { ?>
                                                                            <input type="hidden" value="<?= $row_mc['sd_bulan_ini'] ?>" name="jumlah_mc_edit">
                                                                        <?php   }
                                                                        ?>

                                                                        <input type="hidden" value="<?= $row_mc['id_mc'] ?>" name="id_mc">
                                                                        <input type="hidden" value="<?= $row_mc['no_mc'] ?>" name="data_no_mc">
                                                                        <label for="">No Kontrak</label>
                                                                        <input type="text" class="form-control form-control-sm" style="font-size:11px" value="<?= $row_kontrak['no_kontrak_penyedia'] ?>" aria-describedby="helpId" placeholder="">
                                                                        <small id="helpId" class="form-text text-muted">Otomartis Generate</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Periode mc</label>
                                                                        <input type="date" style="font-size:11px" class="form-control form-control-sm" value="<?= $row_mc['tanggal_mc'] ?>" name="tanggal_mc" aria-describedby="helpId" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">Retensi</label>
                                                                        <select style="font-size:11px" name="sts_retensi" onchange="LogikaRetensi()" class="form-control form-control-sm">
                                                                            <option value="<?= $row_mc['nilai_retensi'] ?>"><?= $row_mc['nilai_retensi'] ?></option>
                                                                            <option value="1">Tanpa Persen</option>
                                                                            <option value="2">Dengan Persen</option>
                                                                        </select>
                                                                        <br>
                                                                        <div id="retensi_tidak_persen" style="display:none">
                                                                            <div class="input-group mb-3">
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text">
                                                                                                <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                            </span>
                                                                                            <input type="text" style="font-size:11px" class="form-control from-control-sm" name="nilai_retensi_tanpa_persen" value="<?= $row_mc['nilai_retensi'] ?>" id="nilai_retensi2" aria-describedby="helpId" placeholder="Nilai Retensi">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-retensi">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="retensi_persen" style="display:none">
                                                                            <select style="font-size:11px" name="nilai_retensi" class="form-control form-control-sm">
                                                                                <option value="<?= $row_mc['nilai_retensi'] ?>"><?= $row_mc['nilai_retensi'] ?>%</option>
                                                                                <option value="5">5%</option>
                                                                                <option value="10">10%</option>
                                                                                <option value="15">15%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">Uang Muka</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                    </span>

                                                                                    <input type="text" style="font-size:11px" class="form-control form-control-sm" name="nilai_uang_muka" value="<?= $row_mc['nilai_uang_muka'] ?>" id="nilai_uang_muka2" aria-describedby="helpId" placeholder="Nilai Uang Muka">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-uang-muka">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="bobot_nilai" value="<?= $hasil_bobot ?>">
                                                                <div class="col-md-6">
                                                                    <label for="">Denda</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                    </span>
                                                                                    <input type="text" style="font-size:11px" class="form-control form-control-sm" value="<?= $row_mc['denda'] ?>" name="denda" id="denda2" aria-describedby="helpId" placeholder="Nilai Denda">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-denda">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">Jumlah Nilai Kontrak / Mc</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">
                                                                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                    </span>
                                                                                    <input type="text" style="font-size:11px" class="form-control form-control-sm" value="<?= $total_hps_penyedia_kontrak_mc_addendum_1 ?>" name="jumlah_mc">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" value="<?= "Rp " . number_format($total_hps_penyedia_kontrak_mc_addendum_1, 2, ',', '.') ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="jumlah_mc" value="<?= $total_hps_penyedia_kontrak_mc_addendum_1 ?>">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">PPN</label>
                                                                        <select name="persen_ppn" style="font-size:11px" class="form-control form-control-sm">
                                                                            <option value="<?= $row_mc['persen_ppn'] ?>"><?= $row_mc['persen_ppn'] ?>%</option>
                                                                            <option value="10">10%</option>
                                                                            <option value="11">11%</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <?php if ($jika_ada_um_edit) { ?>
                                                                        <div id="jika_ada_um_edit">
                                                                            <input type="hidden" value="tidak ada" name="cek_um">
                                                                            <input type="text" value="Nomor Mc Ke <?= $row_mc['no_mc'] ?>" class="form-control form-control-sm" style="font-size:11px" name="jika_no_urut">
                                                                        </div>
                                                                    <?php  } else { ?>
                                                                        <div id="jika_tidak_ada_um_edit">
                                                                            <div class="form-group">
                                                                                <label for="">Jenis Mc</label>
                                                                                <select name="cek_um" style="font-size:11px" class="form-control form-control-sm">
                                                                                    <option value="">--- Plih ---</option>
                                                                                    <option value="ada">Um</option>
                                                                                    <option value="tidak ada">
                                                                                        Umum
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    <?php  }  ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <a href="javascript:;" style="font-size:11px" onclick="Simpan_edit_traking()" class="btn btn-success btn-block">SIMPAN DATA MC</a>
                                        </form>

                                        <div class="modal fade" data-backdrop="false" id="importdataexcel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-success text-white">
                                                        <h5 class="modal-title">Upload Excel</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <center>
                                                            <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload excel</label>
                                                        </center>
                                                        <form action="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/upload_excel') ?>" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_mc" value="<?= $row_mc['id_mc'] ?>">
                                                            <input type="hidden" name="type_add" value="<?= $row_mc['sts_mc_nilai'] ?>">

                                                            <div class="input-group">
                                                                <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                                                                <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    </section>
</div>

<div class="modal fade" data-backdrop="false" id="modal_edit_nilai_kontrak_mc">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title">
                    <i class="fas fa-database"></i>
                    Edit Nilai Kontrak
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit"></i>
                                    Edit Nilai Kontrak
                                </h3>
                            </div>
                            <form id="form_nilai_kontrak_mc">
                                <div class="card-body">
                                    <input type="hidden" name="id_detail_program_penyedia_jasa_edit">
                                    <input type="hidden" name="id_mc_edit">
                                    <input type="hidden" name="sts_nilai_kontrak_mc_edit">
                                    <input type="hidden" name="id_nilai_kontrak_mc">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">No</label>
                                            <input type="text" readonly name="no_nilai_kontrak_mc" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Uraian</label>
                                            <input type="text" readonly name="uraian_nilai_kontrak_mc" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Satuan</label>
                                            <input type="text" name="satuan_nilai_kontrak_mc" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Kuantitas</label>
                                            <input type="text" name="volume_nilai_kontrak_mc" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Harga Satuan</label>
                                            <input type="text" name="harga_satuan_nilai_kontrak_mc" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <button type="button" onclick="save_data_nilai_kontrak_mc()" class="btn btn-success float-right">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" data-backdrop="false" id="modal_excel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Upload Excel <label for="" id="nama_sub"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('taggihan_kontrak_admin/tagihan_kontrak/uploaddata') ?>
                <input type="hidden" name="id_detail_program_penyedia_jasa_excel">
                <input type="hidden" name="id_detail_sub_program_penyedia_jasa_excel">
                <input type="hidden" name="id_mc_excel">
                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" data-backdrop="false" id="modal_tambah_dkh_addendum" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Edit </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:;" id="form_tambah_addendum_hps_penyedia_kontrak_mc" mc_ method="post">
                    <!-- hps_penyedia_1 -->
                    <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                    <input type="hidden" name="id_detail_program_penyedia_jasa">
                    <input type="hidden" name="id_hps_penyedia_kontrak_mc_1">
                    <input type="hidden" name="id_hps_penyedia_kontrak_mc_2">
                    <input type="hidden" name="id_hps_penyedia_kontrak_mc_3">
                    <input type="hidden" name="id_hps_penyedia_kontrak_mc_4">
                    <input type="hidden" name="id_hps_penyedia_kontrak_mc_5">
                    <input type="hidden" name="type_add">
                    <input type="hidden" name="id_mc" value="<?= $row_mc['id_mc'] ?>">
                    <!--  -->
                    <div class="form-group">
                        <label for="">No Hps</label>
                        <input type="text" readonly name="no_hps" class="form-control form-control-sm" placeholder="No Hps">
                    </div>
                    <div class="form-group">
                        <label for="">Uraian</label>
                        <input type="text" readonly name="uraian_hps" class="form-control form-control-sm" placeholder="Uraian">
                    </div>
                    <div class="form-group">
                        <label for="">Satuan</label>
                        <input type="text" name="satuan_hps" class="form-control form-control-sm" placeholder="Satuan">
                    </div>
                    <div class="form-group">
                        <label for="">Volume / Kuantitas</label>
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
                                    <input type="number" class="form-control" name="harga_satuan_hps" id="harga_satuan_hps2" aria-describedby="helpId" placeholder="Harga Satuan">
                                </div>
                            </div>
                            <div class="col-6">
                                <input type="text" id="tanpa-rupiah-uang-muka2" name="value_hps2" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- simpan -->
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_1_addendum" onclick="save_hps_penyedia_kontrak_mc_1_addendum('simpan')">Save</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_2_addendum" onclick="save_hps_penyedia_kontrak_mc_2_addendum('simpan')">Save 2</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_3_addendum" onclick="save_hps_penyedia_kontrak_mc_3_addendum('simpan')">Save 3</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_4_addendum" onclick="save_hps_penyedia_kontrak_mc_4_addendum('simpan')">Save 4</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_5_addendum" onclick="save_hps_penyedia_kontrak_mc_5_addendum('simpan')">Save 5</button>
                <!-- edit -->
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_1_addendum" onclick="save_hps_penyedia_kontrak_mc_1_addendum('edit')">Update</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_2_addendum" onclick="save_hps_penyedia_kontrak_mc_2_addendum('edit')">Update s2</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_3_addendum" onclick="save_hps_penyedia_kontrak_mc_3_addendum('edit')">Update 3</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_4_addendum" onclick="save_hps_penyedia_kontrak_mc_4_addendum('edit')">Update 4</button>
                <button type="button" style="display: none;" class="btn btn-primary" id="edit_5_addendum" onclick="save_hps_penyedia_kontrak_mc_5_addendum('edit')">Update 5</button>
            </div>
        </div>
    </div>
</div>