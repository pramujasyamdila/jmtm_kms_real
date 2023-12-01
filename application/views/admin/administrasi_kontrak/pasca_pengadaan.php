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
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black"><?= $row_kontrak['nama_kontrak'] ?> - <?= $row_kontrak['tahun_anggaran'] ?> - Lembar Kerja - Pasca Pengadaan</b>
        </nav>
        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 2 - PASCA PENGADAAN </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;"><b> Modul ini bertujuan untuk mengelola Administrasi Kontrak Program Pekerjaan yang sudah melalui Proses Pengadaan
                </b></h6>
        </div>

        <br>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <div class="card" style="margin-top: -20px; padding-top: 10px; padding-left: 20px">
                <h5 style="font-family: 'Poppins', sans-serif;"><b>CHECKLIST DAN TO DO LIST </b></h5>
                <div class="row" style="padding-left:90px">
                    <div class="col-md-4">
                        <div class="card bg-success" style="margin-top: 20px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                            <div class="row">
                                <div class="col-md-6">
                                    <center>
                                        <h5 style="font-family: 'Poppins', sans-serif;">Done</h5>
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                        <center>
                                            <h5><?= $total_final_dok_pasca_baru ?></h5>
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning" style="margin-top: 20px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                            <div class="row">
                                <div class="col-md-6">
                                    <center>
                                        <h5 style="font-family: 'Poppins', sans-serif;">On Progres</h5>
                                    </center>

                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                        <center>
                                            <h5><?= $total_final_progres ?></h5>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="javascirpt:;" class="btn btn-primary" data-toggle="modal" data-target="#modal_m2_pasca" class="btn btn-xl btn-primary" style="font-family: RNSSanz-Black;text-transform: uppercase;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:30px">Lihat Detail</a>
                    </div>
                </div>
            </div>
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
                                                        <th class="text-center text-white" style="font-size: 13px;">Penyedia</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Nomor Kontrak</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Tanggal Kontrak</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Nilai Hps</th>
                                                        <th class="text-center text-white" style="font-size: 13px;">Nilai Kontrak</th>
                                                        <!-- <th class="text-center text-white" style="font-size: 13px;">Gunning</th> -->
                                                        <!-- <th class="text-center text-white" style="font-size: 13px;">Loi</th> -->
                                                        <!-- <th class="text-center text-white" style="font-size: 13px;">Sho</th> -->
                                                        <!-- <th class="text-center text-white" style="font-size: 13px;">Smk</th> -->
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
                                                            <td class="table-warning"><?= $i++ ?></td>
                                                            <td class="table-warning"> <label for=""><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></label> </td>
                                                            <td><?= $value['nama_penyedia'] ?>
                                                            <td> <?= $value['no_kontrak_penyedia'] ?>
                                                            </td>
                                                            <?php if (!$value['tanggal_kontrak_program']) { ?>
                                                                <td> Belum Dibuat
                                                                </td>
                                                            <?php  } else { ?>
                                                                <td> <?= $value['tanggal_kontrak_program'] ?>
                                                                </td>
                                                            <?php   } ?>
                                                            <td> <?= "Rp " . number_format($total_kontrak, 2, ',', '.') ?>
                                                            </td>
                                                            <td> <?= "Rp " . number_format($value['total_kontrak'], 2, ',', '.') ?> asdasd
                                                            </td>

                                                            <!-- <td>
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
                                                            </td> -->


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
                                                                <td class=""></td>
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
                        <br>
                        <div class="card" style="margin-top: -18px; padding: 20px;width:100%;">
                            <h4 style="text-transform: uppercase;font-family: 'Poppins', sans-serif;">PETUNJUK UMUM</h4>
                            <b>
                                <h6 style="text-transform: capitalize;;font-family: 'Poppins', sans-serif;">*Seluruh Nilai yang ada pada Tabel di atas adalah Nilai Setelah PPN</h6>
                            </b>
                            <b>
                                <h6 style="text-transform: capitalize;;font-family: 'Poppins', sans-serif;">*Nama Penyedia Jasa adalah Penyedia Jasa yang sudah terdaftar pada e-Procurement</h6>
                            </b>
                            <b>
                                <h6 style="text-transform: capitalize;;font-family: 'Poppins', sans-serif;">*Nomor Kontrak dan Tanggal Kontrak diambil dari Button Aksi Kelola Surat</h6>
                            </b>
                            <b>
                                <h6 style="text-transform: capitalize;;font-family: 'Poppins', sans-serif;">*Nilai Kontrak diambil dari Button Aksi Kelola Nilai Kontrak</h6>
                            </b>

                        </div>
                        <!-- Button trigger modal -->
                        <!-- Modal -->


                        <div class="modal fade" data-backdrop="false" id="modal_edit_global" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                                <div class="col-md-12">
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
                                                                                        <div class="input-group mb-12">
                                                                                            <div class="input-group-prepend" style="width: 100%;">
                                                                                                <span class="input-group-text">
                                                                                                    <i class="far fa-user"> </i>
                                                                                                </span>
                                                                                                <select name="id_identitas_prusahaan" class="form-control select2">
                                                                                                    <option value="">-- Pilih Penyedia --</option>
                                                                                                    <?php foreach ($get_penyedia as $key => $value) { ?>
                                                                                                        <option value="<?= $value['id_identitas_prusahaan'] ?>"><?= $value['nama_usaha'] ?></option>
                                                                                                    <?php  } ?>
                                                                                                </select>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <button type="button" onclick="simpan_data()" class="btn btn-sm btn-success float-right"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
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

<div class="modal fade bd-example-modal-lg" id="modal_m2_pasca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MODUL 2 - DOKUMEN PRA PENGADAAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian Pekerjaan</th>
                            <th>Done</th>
                            <th>On Progres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_pekerjaan as $key => $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                <td>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('tbl_dokumen_pasca');
                                    $this->db->where('tbl_dokumen_pasca.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $this->db->where('type_dok', 'gunning');
                                    $query_guning = $this->db->count_all_results();

                                    $this->db->select('*');
                                    $this->db->from('tbl_dokumen_pasca');
                                    $this->db->where('tbl_dokumen_pasca.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $this->db->where('type_dok', 'loi');
                                    $query_loi = $this->db->count_all_results();

                                    $this->db->select('*');
                                    $this->db->from('tbl_dokumen_pasca');
                                    $this->db->where('tbl_dokumen_pasca.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $this->db->where('type_dok', 'sho');
                                    $query_sho = $this->db->count_all_results();

                                    $this->db->select('*');
                                    $this->db->from('tbl_dokumen_pasca');
                                    $this->db->where('tbl_dokumen_pasca.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $this->db->where('type_dok', 'kontrak');
                                    $query_kontrak = $this->db->count_all_results();

                                    $this->db->select('*');
                                    $this->db->from('tbl_dokumen_pasca');
                                    $this->db->where('tbl_dokumen_pasca.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $this->db->where('type_dok', 'spmk');
                                    $query_spmk = $this->db->count_all_results();

                                    $this->db->select('*');
                                    $this->db->from('tbl_dokumen_pasca');
                                    $this->db->where('tbl_dokumen_pasca.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $this->db->where('type_dok', 'jaminan');
                                    $query_jaminan = $this->db->count_all_results();
                                    ?>
                                    <?= $query_guning + $query_loi + $query_sho + $query_kontrak + $query_spmk + $query_jaminan ?>
                                    <?php $total_done = $query_guning + $query_loi + $query_sho + $query_kontrak + $query_spmk + $query_jaminan ?>
                                </td>
                                <td>
                                    <?= 6 - $total_done ?>
                                </td>
                            </tr>
                        <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>