<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <!-- <div class="section-header">
            <h1><i class="fa fa-book"></i> Pra Pengadaan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="<?= base_url('admin/administrasi_penyedia') ?>">Admininstrasi Penyedia</a></div>
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/data_kontrak') ?>"> Pra Pengadaan</a></div>
            </div>
        </div> -->
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">(<?= $nama_kontrak['nama_kontrak'] ?>) (<?= $nama_kontrak['tahun_anggaran'] ?>) - Lembar Kerja - Pra Pengadaan</b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h6>MODUL 2 - PRA PENGADAAN</h6>
            <label for="">Modul ini bertujuan untuk memilih mata anggaran yang akan dibuat menjadi suatu Program Pekerjaan</label>
        </div>


        <div class="card" style="margin-top: -20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">

            <form action="<?= base_url('admin/administrasi_penyedia/search/') . $id_kontrak ?>" method="post">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" name="keyword" placeholder="Masukan Keyword Pencarian..." class="form-control  rounded-0">

                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-sm btn-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                    </div>
                </div>


            </form>
        </div>


        <div class="content-wrapper" style="margin-top: -18px;background-color:white">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="card card-outline card-warning">
                    <div class="card-body">

                        <!-- /.card-header -->
                        <style type="text/css">
                            .angga {
                                z-index: 999;
                                left: 0;
                                top: 0;
                                position: sticky;
                                border: 3px solid black;
                            }
                        </style>
                        <table id="table_list_program" class="table table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                            <thead>
                                <tr class="text-center " style="background-color: #193B53;">
                                    <th class="tg-0pky text-center text-white" style="font-size: 12px;">No</th>
                                    <th class="tg-0pky text-center text-white" style="font-size: 12px;width:300px !important;border: 1px solid #ccc;" rowspan="1">Uraian Pekerjaan</th>
                                    <th class="tg-0pky text-center text-white" style="font-size: 12px;">Jenis Pengadaan</th>
                                    <th class="tg-0pky text-center text-white" style="font-size: 12px;">Nilai Pagu (Setelah PPN)</th>
                                    <th class="tg-0pky text-center text-white" style="font-size: 12px;">Nilai Hps (Setelah PPN)</th>
                                    <th class="tg-0pky text-center text-white" style="font-size: 12px;">Aksi</th>
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
                                    // $this->db->order_by('display_order', 'ASC');
                                    $get_sum = $this->db->get() ?>
                                    <?php
                                    $b = 1;
                                    $total_pagu = 0;
                                    $tot_hps = 0;
                                    foreach ($get_sum->result_array() as $value_sum) { ?>
                                        <?php
                                        $total_pagu += $value_sum['nilai_program_mata_anggran'];
                                        $tot_hps += $value_sum['nilai_hps'];
                                        ?>
                                    <?php } ?>
                                    <tr>
                                        <td class="tg-0pky table-warning" style="font-size: 12px;"><?= $i++ ?></td>
                                        <td class="tg-0pky angga table-warning" style="font-size: 12px;border: 1px solid #ccc;">
                                            <?= $value['nama_pekerjaan_program_mata_anggaran'] ?>
                                        </td>
                                        <td class="tg-0pky"><?= $value['jenis_pengadaan'] ?></td>
                                        <td class="tg-0pky"><?= "Rp " . number_format($total_pagu, 2, ',', '.') ?></td>
                                        <td class="tg-0pky"><?= "Rp " . number_format($tot_hps, 2, ',', '.') ?></td>
                                        <?php if ($value['total_kontrak'] == null) { ?>
                                            <td class="tg-0pky text-center" style="font-size: 12px;">
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend" style="width: 100%;">
                                                        <button type="button" class="btn-block btn btn-primary" data-toggle="dropdown">
                                                            <i class="fa fa-cogs" aria-hidden="true"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a style="font-size: 12px;" title="Hapus Nama Program Mata Anggaran" class="btn btn-sm btn-outline-danger" href="javascript:;" onclick="Hapus_nama_mata_anggaran(' <?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Edit Nama Program Mata Anggaran" class="btn btn-sm btn-outline-warning" href="javascript:;" onclick="Edit_nama_mata_anggaran('<?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Buat Hps" class="btn btn-sm btn-outline-secondary" target="_blank" href="<?= base_url('admin/administrasi_penyedia/buat_hps/' . $value['id_detail_program_penyedia_jasa']) ?>"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                                                            <a href="javascript:;" style="font-size: 12px;" onclick="alert_hps_belum_dibuat()" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" title="Kelola Format Surat"><i class="fas fa fa-envelope"></i> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php  } else { ?>
                                            <td class="tg-0pky text-center" style="font-size: 12px;">
                                                <div class="input-group">
                                                    <div class="input-group-prepend" style="width: 100%;">
                                                        <button type="button" class="btn-block btn btn-primary" data-toggle="dropdown">
                                                            <i class="fa fa-cogs" aria-hidden="true"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a style="font-size: 12px;" title="Hapus Nama Program Mata Anggaran" class="btn btn-sm btn-outline-danger" href="javascript:;" onclick="Hapus_nama_mata_anggaran('<?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Edit Nama Program Mata Anggaran" class="btn btn-sm btn-outline-warning" href="javascript:;" onclick="Edit_nama_mata_anggaran('<?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Buat Hps" class="btn btn-sm btn-outline-secondary" target="_blank" href="<?= base_url('admin/administrasi_penyedia/buat_hps/' . $value['id_detail_program_penyedia_jasa']) ?>"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                                                            <a target="_blank" style="font-size: 12px;" href="<?= base_url('admin/administrasi_penyedia/kelola_format_surat_pasca/' . $value['id_detail_program_penyedia_jasa']) ?>" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" title="Kelola Format Surat"><i class="fas fa fa-envelope"></i> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php }  ?>
                                    </tr>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                    // $this->db->order_by('display_order', 'ASC');
                                    $query_result_sub_detail_program = $this->db->get() ?>
                                    <?php
                                    $b = 1;
                                    foreach ($query_result_sub_detail_program->result_array() as $value_sub_detail_program) { ?>
                                        <tr>
                                            <td class="tg-0pky" style="font-size: 12px;"></td>
                                            <td class="tg-0pky angga bg-white" style="font-size: 12px;border: 1px solid #ccc;"><?= $value_sub_detail_program['nama_program_mata_anggaran'] ?>
                                            </td>
                                            <td class="tg-0pky" style="font-size: 12px;"></td>
                                            <td class="tg-0pky" style="font-size: 12px;"><?= "Rp " . number_format($value_sub_detail_program['nilai_program_mata_anggran'], 2, ',', '.') ?></td>
                                            <td class="tg-0pky" style="font-size: 12px;"><?= "Rp " . number_format($value_sub_detail_program['nilai_hps'], 2, ',', '.') ?></td>
                                            <td class="tg-0pky" style="font-size: 12px;">
                                                <a style="font-size: 12px;width: 100%;" title="Edit Nilai Pagu" class="btn btn-sm btn-outline-warning" href="javascript:;" onclick="Edit_pagu('<?= $value_sub_detail_program['id_detail_sub_program_penyedia_jasa'] ?>')"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>

                        </table>

                        <!-- /.row -->

                        <!-- ./card-body -->
                        <!-- /.card-footer -->

                        <!-- /.card -->

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" data-backdrop="false" id="modal_edit_nama_program" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Nama Nama Uraian Pekerjaan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <form action="javascript:;" id="form_edit_nama_program" method="post">
                                            <input type="hidden" name="id_detail_program_penyedia_jasa">
                                            <div class="form-group">
                                                <label for="">Nama Uraian Pekerjaan</label>
                                                <input type="text" name="nama_pekerjaan_program_mata_anggaran" id="" class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a class="btn btn-success" onclick="save_edit_program()" href="javascript:;">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" data-backdrop="false" id="modal_edit_pagu" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Nilai Pagu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <form action="javascript:;" id="form_edit_pagu" method="post">
                                            <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                                            <div class="form-group">
                                                <label for="">Nilai Pagu</label>
                                                <input type="text" name="nilai_program_mata_anggran" id="" class="form-control nilai_program_mata_anggran">
                                                <div class="float-right">
                                                    <input type="text" readonly class="form-control" id="rupiah_nilai_program_mata_anggran">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a class="btn btn-success" onclick="save_edit_pagu()" href="javascript:;">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <!-- /.row -->
                    <!-- Main row -->
                    <!-- /.row -->

                    <!--/. container-fluid -->
                </div>
            </section>
            <!-- /.content -->
        </div>



        <div class="card" style="margin-top: -18px; padding: 20px">
            <h6>*Jenis Pengadaan diambil otomatis dari Persetujuan Izin Prinsip</h6>
            <h6>*Nilai Pagu diambil otomatis dari Rekapitulasi Daftar Kuantitas dan Harga Perkiraan Sendiri (HPS)</h6>
            <h6>*Seluruh Nilai pada Tabel di atas adalah Nilai Sebelum PPN</h6>
        </div>
    </section>
</div>