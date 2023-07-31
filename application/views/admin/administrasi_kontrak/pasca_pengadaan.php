<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <!-- <div class="section-header">
            <h1><i class="fa fa-book"></i> LIST PROGRAM</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="<?= base_url('admin/administrasi_kontrak/pasca_pengadaan') ?>">DATA KONTRAK</a></div>
                <div class="breadcrumb-item active"><a href="">LIST PROGRAM</a></div>
            </div>
        </div> -->
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#FFFF00;height:50px;
  position: fixed; top:50px">
            <h6><?= $nama_kontrak ?></h6>
            <h6 style="margin-left: auto;"> Pasca Pengadaan</h6>
        </nav>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="ads">
                    <div class="row">
                        <div class="card card-outline card-warning">
                            <div class="card-body">
                                <div class="row">
                                    <form action="<?= base_url('administrasi_kontrak/administrasi_kontrak/search/') . $id_kontrak ?>" method="post">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="keyword" placeholder="Masukan Keyword Pencarian..." class="form-control rounded-0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 mt-1">
                                                <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <input type="hidden" name="id_detail_program_penyedia_jasa">
                                <div class="row">
                                    <div class="col-md-12" style="margin-top: -10px">
                                        <div style="overflow: scroll;">
                                            <table id="mytable" class="table table-striped table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                <thead>
                                                    <tr style="background-color: #193B53;">
                                                        <th class="text-center text-white" style="font-size: 13px;" rowspan="3">No</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Nama Pekerjaan</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Nomor Kontrak</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Hps</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Nilai Kontrak</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Penyedia</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Gunning</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Loi</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Sho</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Smk</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Tanggal Kontrak</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    $j = 1;
                                                    foreach ($get_mata_anggaran as $key => $value) { ?>
                                                        <?php $id_detail_program_penyedia_jasa = $value['id_detail_program_penyedia_jasa'];  ?>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                                        $this->db->where('tbl_sub_detail_program_penyedia_jasa.status_mata_anggaran_addendum', 0);
                                                        $get_nilai_kontrak = $this->db->get() ?>
                                                        <?php
                                                        $total_kontrak  = 0;
                                                        foreach ($get_nilai_kontrak->result_array() as $value_kontrak) {
                                                            $total_kontrak += $value_kontrak['nilai_hps']
                                                        ?>
                                                        <?php } ?>
                                                        <tr style="font-size: 11px;">
                                                            <td><?= $i++ ?></td>
                                                            <td> <label for=""><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></label> </td>
                                                            <td> <?= $value['no_kontrak_penyedia'] ?>
                                                            </td>
                                                            <td> <?= "Rp " . number_format($total_kontrak, 2, ',', '.') ?>
                                                            </td>
                                                            <td> <?= "Rp " . number_format($value['total_kontrak'], 2, ',', '.') ?>
                                                            </td>
                                                            <td><?= $value['nama_penyedia'] ?>
                                                            <td>
                                                                <?php if (!$value['tanggal_gunning']) { ?>
                                                                    <label for="">Belum Upload</label>
                                                                <?php  } else { ?>
                                                                    <label for=""><?= $value['tanggal_gunning'] ?></label>
                                                                <?php   } ?>
                                                            </td>
                                                            <td>
                                                                <?php if (!$value['tanggal_loi']) { ?>
                                                                    <label for="">Belum Upload</label>
                                                                <?php  } else { ?>
                                                                    <label for=""><?= $value['tanggal_loi'] ?></label>
                                                                <?php   } ?>
                                                            </td>
                                                            <td>
                                                                <?php if (!$value['tanggal_sho']) { ?>
                                                                    <label for="">Belum Upload</label>
                                                                <?php  } else { ?>
                                                                    <label for=""><?= $value['tanggal_sho'] ?></label>
                                                                <?php   } ?>
                                                            </td>
                                                            <td>
                                                                <?php if (!$value['tanggal_smk']) { ?>
                                                                    <label for="">Belum Upload</label>
                                                                <?php  } else { ?>
                                                                    <label for=""><?= $value['tanggal_smk'] ?></label>
                                                                <?php   } ?>
                                                            </td>
                                                            <?php if (!$value['tanggal_kontrak_program']) { ?>
                                                                <td> Belum Dibuat
                                                                </td>
                                                            <?php  } else { ?>
                                                                <td> <?= $value['tanggal_kontrak_program'] ?>
                                                                </td>
                                                            <?php   } ?>

                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn btn-default btn-sm">Action</button>
                                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <div class="dropdown-menu" role="menu">
                                                                        <a href="javascript:;" onclick="KelolaDetail(<?= $value['id_detail_program_penyedia_jasa'] ?>)" style="font-size: 12px;" class="btn btn-sm btn-primary btn-block"><i class="fa fa-user"></i> Penyedia</a>
                                                                        <a href="<?= base_url('admin/administrasi_penyedia/kelola_format_surat_pra/' . $value['id_detail_program_penyedia_jasa']) ?>" style="font-size: 12px;" class="btn btn-sm btn-info btn-block"><i class="fa fa-book"></i> Kelola Surat</a>
                                                                        <a href="javascript:;" onclick="KelolaDetailNilai(<?= $value['id_detail_program_penyedia_jasa'] ?>)" style="font-size: 12px;" class="btn btn-sm btn-warning btn-block"><i class="fas fa-dollar-sign"></i> Kelola Nilai Kontrak </a>
                                                                        <a href="<?= base_url('administrasi_kontrak/administrasi_kontrak/administrasi_addendum/') . $value['id_detail_program_penyedia_jasa'] ?>" style="font-size: 12px;" class="btn btn-sm btn-primary btn-block"><i class="fa fa-book"></i> Adminstrasi Addendum</a>

                                                                    </div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                                        $this->db->where('tbl_sub_detail_program_penyedia_jasa.status_mata_anggaran_addendum', 0);
                                                        $query_result_sub_detail_program = $this->db->get() ?>
                                                        <?php
                                                        $b = 1;
                                                        foreach ($query_result_sub_detail_program->result_array() as $value_sub_detail_program) {

                                                        ?>

                                                            <tr style="font-size: 11px;">
                                                                <td class=""></td>
                                                                <td class=""><?= $value_sub_detail_program['nama_program_mata_anggaran'] ?></td>
                                                                <td class=""></td>
                                                                <td>
                                                                    <div style="width:150px">
                                                                        <?= "Rp " . number_format($value_sub_detail_program['nilai_hps'], 2, ',', '.') ?>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div style="width:150px">
                                                                        <?= "Rp " . number_format($value_sub_detail_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?>
                                                                    </div>
                                                                </td>
                                                                <td class="" colspan="5">
                                                                </td>
                                                                <td class="">

                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->
                                <!-- /.card-footer -->
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <!-- Modal -->


                        <div class="modal fade" data-backdrop="false" id="modal_edit_global" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title">Kelola Detail Kontrak Penyedia Jasa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="card card-primary card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                        <li class="pt-2 px-3">
                                                            <h3 class="card-title"><i class="fas fa fa-database"></i></h3>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Pilih Penyedia</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                                        <!-- PIP -->
                                                        <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="card card-outline card-primary">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Pilih Penyedia
                                                                            </h3>
                                                                        </div>
                                                                        <form id="form_penyedia" action="javascript;;">
                                                                            <input type="hidden" name="id_detail_program_penyedia_jasa">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label for="">Nama Penyyedia</label>
                                                                                        <div class="input-group mb-6">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-user"> </i>
                                                                                                </span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" name="nama_penyedia" placeholder="Nama Penyedia">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <button type="button" onclick="simpan_data()" class="btn btn-sm btn-success float-right"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
                                                                </div>
                                                                <div class="col-md-3">
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

                        <!-- /.row -->
                        <!-- Main row -->
                        <!-- /.row -->
                    </div>
            </section>
            <!-- /.content -->
        </div>
    </section>
</div>