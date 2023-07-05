<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> KELOLA HPS</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="<?= base_url('admin/administasi_penyedia') ?>">ADMINISTRASI PENYEDIA</a></div>
                <div class="breadcrumb-item active"><a href="#">KELOLA HPS</a></div>

            </div>
        </div>
        <div class="content-wrapper">
            <br><br>
            <?php
            $total_hps_penyedia_1 = 0;
            $total_hps_penyedia_2 = 0;
            $total_hps_penyedia_3 = 0;
            $total_hps_penyedia_4 = 0;
            $total_hps_penyedia_5 = 0;
            $total_hps = 0;
            ?>
            <!-- Content Header (Page header) -->
            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-header">
                                        <h5>KELOLA HPS</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-outline card-success">
                                                    <div class="card-body">
                                                        <h5> <i> <?= $row_program['nama_pekerjaan_program_mata_anggaran'] ?></i></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="card card-outline card-danger">
                                                    <div class="card-body">
                                                        <h5>Note!</h5>
                                                        <p>Setelah Anda Selesai Membuat DKH Harap Lakukan Validasi Dengan Menklik Tombol Simpan Dan Update Yang Berada Pada Bawah Table</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="nav nav-tabs" id="myTab" style="margin-top: 50px;">
                                            <?php foreach ($result_sub_program as $key => $value) { ?>
                                                <li>
                                                    <a class="nav-link bg-primary text-white" href="#kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                                                </li>
                                            <?php  } ?>
                                        </ul>
                                        <div class="tab-content">
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
                                                                    <input type="hidden" name="id_hps_penyedia_1">
                                                                    <input type="hidden" name="id_hps_penyedia_2">
                                                                    <input type="hidden" name="id_hps_penyedia_3">
                                                                    <input type="hidden" name="id_hps_penyedia_4">
                                                                    <input type="hidden" name="id_hps_penyedia_5">
                                                                    <!--  -->
                                                                    <div class="form-group">
                                                                        <label for="">No Mata Anggaran</label>
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
                                                                        <input type="number" id="volume" name="volume_hps" class="form-control form-control-sm" placeholder="Volume">
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
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_1" onclick="save_hps_penyedia_1('simpan')">Save</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_2" onclick="save_hps_penyedia_2('simpan')">Save 2</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_3" onclick="save_hps_penyedia_3('simpan')">Save 3</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_4" onclick="save_hps_penyedia_4('simpan')">Save 4</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="simpan_5" onclick="save_hps_penyedia_5('simpan')">Save 5</button>
                                                                <!-- edit -->
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="edit_1" onclick="save_hps_penyedia_1('edit')">Update</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="edit_2" onclick="save_hps_penyedia_2('edit')">Update 2</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="edit_3" onclick="save_hps_penyedia_3('edit')">Update 3</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="edit_4" onclick="save_hps_penyedia_4('edit')">Update 4</button>
                                                                <button type="button" style="display: none;" class="btn btn-primary" id="edit_5" onclick="save_hps_penyedia_5('edit')">Update 5</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show" id="kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                                                    <div class="content">
                                                        <br>
                                                        <div class="card card-outline card-primary">
                                                            <div class="card-header">
                                                                <h4> DKH <?= $value['nama_program_mata_anggaran'] ?></h4>
                                                                <div class="card-header-action">
                                                                    <a class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>)"> <i class="fas fa fa-file"></i> Buat Uraian Dengan Excel</a>
                                                                    <a class="btn btn-sm btn-info" href="javascript:;" onclick="tambah_uraian(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>)"><i class="fas fa fa-plus"></i> Buat Uraian Manual</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <table id="table_data" class="table table-bordered table-striped">
                                                                    <thead style="font-size: 12px;" class="thead-inverse bg-primary">
                                                                        <tr>
                                                                            <th class="text-white">No</th>
                                                                            <th class="text-white">No Mata Anggaran</th>
                                                                            <th class="text-white">Uraian</th>
                                                                            <th class="text-white">Satuan</th>
                                                                            <th class="text-white">Kuantitas</th>
                                                                            <th class="text-white">Harga Satuan</th>
                                                                            <th class="text-white">Jumlah Harga</th>
                                                                            <th class="text-white">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody style="font-size: 12px;">
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_hps_penyedia_1');
                                                                        $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                                                        $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                                                        $this->db->order_by('no_urut', 'ASC');
                                                                        $query_tbl_hps_penyedia_1 = $this->db->get() ?>
                                                                        <?php
                                                                        foreach ($query_tbl_hps_penyedia_1->result_array() as $key => $value_hps_penyedia_1) { ?>
                                                                            <?php
                                                                            $id_hps_penyedia_1 = $value_hps_penyedia_1['id_hps_penyedia_1'];
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_2');
                                                                            $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $value_hps_penyedia_1['id_hps_penyedia_1']);
                                                                            $query_cek_tbl_hps_penyedia_2 = $this->db->get()->result_array();
                                                                            if ($value_hps_penyedia_1['total_harga']) {
                                                                                $total_hps_penyedia_1 +=  $value_hps_penyedia_1['total_harga'];
                                                                            } else {
                                                                                $total_hps_penyedia_1 +=  0;
                                                                            }
                                                                            ?>
                                                                            <tr class="text-black">
                                                                                <td> &nbsp;<?= $value_hps_penyedia_1['no_urut'] ?></td>
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
                                                                                <td>
                                                                                    <div class="btn-group">
                                                                                        <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                        </button>
                                                                                        <div class="dropdown-menu" role="menu">
                                                                                            <?php if ($query_cek_tbl_hps_penyedia_2) { ?>
                                                                                                <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                <a title="Pindahkan Urutan" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-info" href="javascript:;" onclick="pindah_urutan_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"><i class="fa fa-list-ol" aria-hidden="true"></i></a>
                                                                                            <?php   } else { ?>
                                                                                                <?php if ($value_hps_penyedia_1['total_harga']) { ?>
                                                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                    <a title="Pindahkan Urutan" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-info" href="javascript:;" onclick="pindah_urutan_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"><i class="fa fa-list-ol" aria-hidden="true"></i></a>
                                                                                                <?php  } else { ?>
                                                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                    <a title="Pindahkan Urutan" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-info" href="javascript:;" onclick="pindah_urutan_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"><i class="fa fa-list-ol" aria-hidden="true"></i></a>
                                                                                                <?php } ?>
                                                                                            <?php  } ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_2');
                                                                            $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
                                                                            $this->db->order_by('no_urut', 'ASC');
                                                                            $query_tbl_hps_penyedia_2 = $this->db->get() ?>
                                                                            <?php
                                                                            foreach ($query_tbl_hps_penyedia_2->result_array() as $key => $value_hps_penyedia_2) { ?>
                                                                                <?php
                                                                                $id_hps_penyedia_2 = $value_hps_penyedia_2['id_hps_penyedia_2'];
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_hps_penyedia_3');
                                                                                $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $value_hps_penyedia_2['id_hps_penyedia_2']);
                                                                                $query_cek_tbl_hps_penyedia_3 = $this->db->get()->result_array();

                                                                                $id_hps_penyedia_2 = $value_hps_penyedia_2['id_hps_penyedia_2'];
                                                                                if ($value_hps_penyedia_2['total_harga']) {
                                                                                    $total_hps_penyedia_2 +=  $value_hps_penyedia_2['total_harga'];
                                                                                } else {
                                                                                    $total_hps_penyedia_2 +=  0;
                                                                                }
                                                                                ?>
                                                                                <tr class="text-black">
                                                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_2['no_urut'] ?></td>
                                                                                    <td><?= $value_hps_penyedia_2['no_hps'] ?></td>
                                                                                    <td><?= $value_hps_penyedia_2['uraian_hps'] ?></td>
                                                                                    <td><?= $value_hps_penyedia_2['satuan_hps'] ?></td>
                                                                                    <td><?= $value_hps_penyedia_2['volume_hps'] ?></td>
                                                                                    <?php if ($value_hps_penyedia_2['harga_satuan_hps']) { ?>
                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_2['harga_satuan_hps'], 2, ',', '.') ?></td>
                                                                                    <?php  } else { ?>
                                                                                        <td></td>
                                                                                    <?php }
                                                                                    ?>
                                                                                    <?php if ($value_hps_penyedia_2['total_harga']) { ?>
                                                                                        <td><?= "Rp " . number_format($value_hps_penyedia_2['total_harga'], 2, ',', '.') ?></td>
                                                                                    <?php  } else { ?>
                                                                                        <td></td>
                                                                                    <?php }
                                                                                    ?>
                                                                                    <td>
                                                                                        <div class="btn-group">
                                                                                            <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                <?php if ($query_cek_tbl_hps_penyedia_3) { ?>
                                                                                                    <a onclick="modal_hps_penyedia_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                <?php   } else { ?>
                                                                                                    <?php if ($value_hps_penyedia_2['total_harga']) { ?>
                                                                                                        <a onclick="modal_hps_penyedia_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_hps_penyedia_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                    <?php  } else { ?>
                                                                                                        <a onclick="modal_hps_penyedia_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                        <a onclick="modal_hps_penyedia_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_hps_penyedia_3(<?= $value_hps_penyedia_2['id_hps_penyedia_2'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                    <?php } ?>
                                                                                                <?php  } ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_hps_penyedia_3');
                                                                                $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
                                                                                $this->db->order_by('no_urut', 'ASC');
                                                                                $query_tbl_hps_penyedia_3 = $this->db->get() ?>
                                                                                <?php
                                                                                foreach ($query_tbl_hps_penyedia_3->result_array() as $key => $value_hps_penyedia_3) { ?>
                                                                                    <?php
                                                                                    $id_hps_penyedia_3 = $value_hps_penyedia_3['id_hps_penyedia_3'];
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_hps_penyedia_4');
                                                                                    $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $value_hps_penyedia_3['id_hps_penyedia_3']);
                                                                                    $query_cek_tbl_hps_penyedia_4 = $this->db->get()->result_array();


                                                                                    $id_hps_penyedia_3 = $value_hps_penyedia_3['id_hps_penyedia_3'];
                                                                                    if ($value_hps_penyedia_3['total_harga']) {
                                                                                        $total_hps_penyedia_3 +=  $value_hps_penyedia_3['total_harga'];
                                                                                    } else {
                                                                                        $total_hps_penyedia_3 +=  0;
                                                                                    }
                                                                                    ?>
                                                                                    <tr class="text-black">
                                                                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $value_hps_penyedia_3['no_urut'] ?></td>
                                                                                        <td><?= $value_hps_penyedia_3['no_hps'] ?></td>
                                                                                        <td><?= $value_hps_penyedia_3['uraian_hps'] ?></td>
                                                                                        <td><?= $value_hps_penyedia_3['satuan_hps'] ?></td>
                                                                                        <td><?= $value_hps_penyedia_3['volume_hps'] ?></td>
                                                                                        <?php if ($value_hps_penyedia_3['harga_satuan_hps']) { ?>
                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_3['harga_satuan_hps'], 2, ',', '.') ?></td>
                                                                                        <?php  } else { ?>
                                                                                            <td></td>
                                                                                        <?php }
                                                                                        ?>
                                                                                        <?php if ($value_hps_penyedia_3['total_harga']) { ?>
                                                                                            <td><?= "Rp " . number_format($value_hps_penyedia_3['total_harga'], 2, ',', '.') ?></td>
                                                                                        <?php  } else { ?>
                                                                                            <td></td>
                                                                                        <?php }
                                                                                        ?>
                                                                                        <td>
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" role="menu">
                                                                                                    <?php if ($query_cek_tbl_hps_penyedia_4) { ?>
                                                                                                        <a onclick="modal_hps_penyedia_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                    <?php   } else { ?>
                                                                                                        <?php if ($value_hps_penyedia_3['total_harga']) { ?>
                                                                                                            <a onclick="modal_hps_penyedia_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_hps_penyedia_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                        <?php  } else { ?>
                                                                                                            <a onclick="modal_hps_penyedia_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                            <a onclick="modal_hps_penyedia_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_hps_penyedia_4(<?= $value_hps_penyedia_3['id_hps_penyedia_3'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                        <?php } ?>
                                                                                                    <?php  } ?>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_hps_penyedia_4');
                                                                                    $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
                                                                                    $this->db->order_by('no_urut', 'ASC');
                                                                                    $query_tbl_hps_penyedia_4 = $this->db->get() ?>
                                                                                    <?php
                                                                                    foreach ($query_tbl_hps_penyedia_4->result_array() as $key => $value_hps_penyedia_4) { ?>
                                                                                        <?php
                                                                                        $id_hps_penyedia_4 = $value_hps_penyedia_4['id_hps_penyedia_4'];
                                                                                        $this->db->select('*');
                                                                                        $this->db->from('tbl_hps_penyedia_5');
                                                                                        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $value_hps_penyedia_4['id_hps_penyedia_4']);
                                                                                        $query_cek_tbl_hps_penyedia_5 = $this->db->get()->result_array();

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
                                                                                            <td><?= $value_hps_penyedia_4['satuan_hps'] ?></td>
                                                                                            <td><?= $value_hps_penyedia_4['volume_hps'] ?></td>
                                                                                            <?php if ($value_hps_penyedia_4['harga_satuan_hps']) { ?>
                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_4['harga_satuan_hps'], 2, ',', '.') ?></td>
                                                                                            <?php  } else { ?>
                                                                                                <td></td>
                                                                                            <?php }
                                                                                            ?>
                                                                                            <?php if ($value_hps_penyedia_4['total_harga']) { ?>
                                                                                                <td><?= "Rp " . number_format($value_hps_penyedia_4['total_harga'], 2, ',', '.') ?></td>
                                                                                            <?php  } else { ?>
                                                                                                <td></td>
                                                                                            <?php }
                                                                                            ?>
                                                                                            <td>
                                                                                                <div class="btn-group">
                                                                                                    <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu" role="menu">
                                                                                                        <?php if ($query_cek_tbl_hps_penyedia_5) { ?>
                                                                                                            <a onclick="modal_hps_penyedia_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                        <?php   } else { ?>
                                                                                                            <?php if ($value_hps_penyedia_4['total_harga']) { ?>
                                                                                                                <a onclick="modal_hps_penyedia_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_hps_penyedia_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                            <?php  } else { ?>
                                                                                                                <a onclick="modal_hps_penyedia_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                                <a onclick="modal_hps_penyedia_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_hps_penyedia_5(<?= $value_hps_penyedia_4['id_hps_penyedia_4'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                            <?php } ?>
                                                                                                        <?php  } ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php
                                                                                        $this->db->select('*');
                                                                                        $this->db->from('tbl_hps_penyedia_5');
                                                                                        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
                                                                                        $this->db->order_by('no_urut', 'ASC');
                                                                                        $query_tbl_hps_penyedia_5 = $this->db->get() ?>
                                                                                        <?php
                                                                                        foreach ($query_tbl_hps_penyedia_5->result_array() as $key => $value_hps_penyedia_5) { ?>
                                                                                            <?php
                                                                                            $id_hps_penyedia_5 = $value_hps_penyedia_5['id_hps_penyedia_5'];
                                                                                            $this->db->select('*');
                                                                                            $this->db->from('tbl_hps_penyedia_6');
                                                                                            $this->db->where('tbl_hps_penyedia_6.id_hps_penyedia_5', $value_hps_penyedia_5['id_hps_penyedia_5']);
                                                                                            $query_cek_tbl_hps_penyedia_6 = $this->db->get()->result_array();
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
                                                                                                <td><?= $value_hps_penyedia_5['satuan_hps'] ?></td>
                                                                                                <td><?= $value_hps_penyedia_5['volume_hps'] ?></td>
                                                                                                <?php if ($value_hps_penyedia_5['harga_satuan_hps']) { ?>
                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_5['harga_satuan_hps'], 2, ',', '.') ?></td>
                                                                                                <?php  } else { ?>
                                                                                                    <td></td>
                                                                                                <?php }
                                                                                                ?>
                                                                                                <?php if ($value_hps_penyedia_5['total_harga']) { ?>
                                                                                                    <td><?= "Rp " . number_format($value_hps_penyedia_5['total_harga'], 2, ',', '.') ?></td>
                                                                                                <?php  } else { ?>
                                                                                                    <td></td>
                                                                                                <?php }
                                                                                                ?>
                                                                                                <td>
                                                                                                    <div class="btn-group">
                                                                                                        <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                                        </button>
                                                                                                        <div class="dropdown-menu" role="menu">
                                                                                                            <?php if ($query_cek_tbl_hps_penyedia_6) { ?>
                                                                                                                <a onclick="modal_hps_penyedia_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                            <?php   } else { ?>
                                                                                                                <?php if ($value_hps_penyedia_5['total_harga']) { ?>
                                                                                                                    <a onclick="modal_hps_penyedia_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_hps_penyedia_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                                <?php  } else { ?>
                                                                                                                    <a onclick="modal_hps_penyedia_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                    <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                                                                    <a onclick="modal_hps_penyedia_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_hps_penyedia_6(<?= $value_hps_penyedia_5['id_hps_penyedia_5'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                                                                <?php } ?>
                                                                                                            <?php  } ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
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
                                                                                <!-- <label for="" style="font-size: 12px;">GRAND TOTAL (Rp.)</label> -->
                                                                            </td>
                                                                            <td colspan="3"></td>
                                                                            <?php                                                                       ?>
                                                                            <td>
                                                                                <!-- <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_hps_penyedia_1 + $total_hps_penyedia_2, 2, ',', '.') ?> 
                                                                            </label> -->
                                                                            </td>
                                                                            <td>
                                                                                <a href="javascript:;" onclick="Update_nilai_ke_sub_program('<?= $value['id_detail_sub_program_penyedia_jasa'] ?>')" class="btn btn-sm btn-success"> <i class="fas fa fa-save"></i> Simpan Dan Update</a>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <!-- Modal -->
                                                </div>
                                                <div class="modal fade" data-backdrop="false" id="modal_urutan2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h5 class="modal-title text-white">Pindahkan Urutan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_progrm_penyedia">
                                                                <input type="hidden" value="<?= $value['id_detail_sub_program_penyedia_jasa'] ?>" name="id_detail_sub_program_penyedia_jasa">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No Urut</th>
                                                                            <th>Uraian</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="result_table_urutan">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="<?= base_url('admin/administrasi_penyedia/buat_hps/'.$row_program['id_detail_program_penyedia_jasa'])?>" class="btn btn-primary">Simpan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php  } ?>
                                            <!-- Modal -->
                                            <div class="modal fade" data-backdrop="false" id="modal_excel_hps_penyedia_1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                                    <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_1_hps.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                                                                </div>
                                                            </center>
                                                            <center>
                                                                <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                                                            </center>
                                                            <?= form_open_multipart('excelisasi_kontrak_hps/Upload_excel_hps/upload_excel_hps_penyedia_1') ?>
                                                            <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                                            <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                                                            <input type="hidden" name="id_kontrak" value="<?= $row_program['id_kontrak'] ?>">
                                                            <div class="input-group">
                                                                <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                                                                <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                                                            </div>
                                                            <?= form_close(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- hps penyedia 2 -->
                                            <div class="modal fade" data-backdrop="false" id="modal_excel_hps_penyedia_2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                                    <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_2_hps.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                                                                </div>
                                                            </center>
                                                            <center>
                                                                <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                                                            </center>
                                                            <?= form_open_multipart('excelisasi_kontrak_hps/Upload_excel_hps/upload_excel_hps_penyedia_2') ?>
                                                            <input type="text" name="id_hps_penyedia_1">
                                                            <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                                            <div class="input-group">
                                                                <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                                                                <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                                                            </div>
                                                            <?= form_close(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- hps penyedia 3 -->
                                            <div class="modal fade" data-backdrop="false" id="modal_excel_hps_penyedia_3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                                    <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_3_hps.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                                                                </div>
                                                            </center>
                                                            <center>
                                                                <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                                                            </center>
                                                            <?= form_open_multipart('excelisasi_kontrak_hps/Upload_excel_hps/upload_excel_hps_penyedia_3') ?>
                                                            <input type="text" name="id_hps_penyedia_2">
                                                            <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                                            <div class="input-group">
                                                                <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                                                                <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                                                            </div>
                                                            <?= form_close(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" data-backdrop="false" id="modal_excel_hps_penyedia_4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                                    <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_4_hps.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                                                                </div>
                                                            </center>
                                                            <center>
                                                                <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                                                            </center>
                                                            <?= form_open_multipart('excelisasi_kontrak_hps/Upload_excel_hps/upload_excel_hps_penyedia_4') ?>
                                                            <input type="text" name="id_hps_penyedia_3">
                                                            <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                                            <div class="input-group">
                                                                <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                                                                <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                                                            </div>
                                                            <?= form_close(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" data-backdrop="false" id="modal_excel_hps_penyedia_5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                                    <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_5_hps.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                                                                </div>
                                                            </center>
                                                            <center>
                                                                <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                                                            </center>
                                                            <?= form_open_multipart('excelisasi_kontrak_hps/Upload_excel_hps/upload_excel_hps_penyedia_5') ?>
                                                            <input type="text" name="id_hps_penyedia_4">
                                                            <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                                            <div class="input-group">
                                                                <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                                                                <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                                                            </div>
                                                            <?= form_close(); ?>
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
</section>
</div>