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
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color: white;height:50px;
  position: fixed; top:50px">
            <h6><?= $nama_kontrak ?></h6>
            <h6 style="margin-left: auto;"> Pra Pengadaan</h6>
        </nav>
        <div class="content-wrapper" style="background-color:white">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="card card-outline card-warning">
                        <div class="card-body">
                            <div class="row">
                                <form action="<?= base_url('admin/administrasi_penyedia/search/') . $id_kontrak ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="keyword" placeholder="Masukan Keyword Pencarian..." class="form-control form-control-sm rounded-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 mt-1">
                                            <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                                        </div>
                                    </div>
                                </form>
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
                                <div style="height: 50%;overflow: scroll;">
                                    <table class="table table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                        <thead>
                                            <tr class="text-center " style="background-color: #193B53;">
                                                <th class="tg-0pky text-center text-white" style="font-size: 12px;" rowspan="3">No</th>
                                                <th class="tg-0pky text-center text-white angga  " style="font-size: 12px;width:300px !important;border: 1px solid #ccc;" rowspan="2">Uraian Pekerjaan</th>
                                                <th class="tg-0pky text-center text-white" style="font-size: 12px;width:200px !important;" rowspan="2">Nilai Pagu</th>
                                                <th class="tg-0pky text-center text-white" style="font-size: 12px;" colspan="3">Persetujuan Ijin Prinsip</th>
                                                <th class="tg-0pky text-center text-white" style="font-size: 12px;" colspan="3">Persetujuan Hps</th>
                                                <th class="tg-0pky text-center text-white" style="font-size: 12px;" colspan="2">Nota Dinas Permohonan Pengadaan</th>
                                                <th class="tg-0pky text-center text-white" style="font-size: 12px;">Aksi</th>
                                            </tr>
                                            <tr class="text-center text-white table-warning">
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Jenis Pengadaan</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Nomor Surat</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Tanggal Surat</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Nilai HPS</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Nomor Surat</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Tanggal Surat</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Nomor Surat</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;">Tanggal Surat</th>
                                                <th class="tg-0pky text-center" style="font-size: 12px;width:200px !important;"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $i = 1;
                                            $j = 1;
                                            foreach ($get_mata_anggaran as $key => $value) { ?>
                                                <?php $id_detail_program_penyedia_jasa = $value['id_detail_program_penyedia_jasa'];  ?>
                                                <tr>
                                                    <td class="tg-0pky table-warning" style="font-size: 12px;"><?= $i++ ?></td>
                                                    <td class="tg-0pky angga table-warning" style="font-size: 12px;border: 1px solid #ccc;" colspan="2">
                                                        <?= $value['nama_pekerjaan_program_mata_anggaran'] ?>
                                                    </td>

                                                    <td class="tg-0pky"><?= $value['jenis_pengadaan'] ?></td>
                                                    <td class="tg-0pky"><?= $value['no_surat_persetujuan_pip_dirops_ke_dirut'] ?></td>
                                                    <td class="tg-0pky"><?= $value['tgl_surat_persetujuan_pip_dirops_ke_dirut'] ?></td>
                                                    <td class="tg-0pky"></td>
                                                    <td class="tg-0pky"><?= $value['no_surat_persetujuan_hps_dirops_ke_dirut'] ?></td>
                                                    <td class="tg-0pky"><?= $value['tgl_surat_persetujuan_hps_dirops_ke_dirut'] ?></td>
                                                    <td class="tg-0pky"><a href="<?= base_url('admin/administrasi_penyedia/pdf_nota_dinas/' . $value['id_detail_program_penyedia_jasa']) ?>"><?= $value['no_surat_nota'] ?></a></td>
                                                    <td class="tg-0pky"><?= $value['tgl_surat_nota'] ?></td>
                                                    <?php if ($value['total_kontrak'] == null) { ?>
                                                        <td class="tg-0pky text-center" style="font-size: 12px;" colspan="2">
                                                            <a style="font-size: 12px;" title="Hapus Nama Program Mata Anggaran" class="btn btn-sm btn-outline-danger btn-block" href="javascript:;" onclick="Hapus_nama_mata_anggaran('<?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Edit Nama Program Mata Anggaran" class="btn btn-sm btn-outline-warning btn-block" href="javascript:;" onclick="Edit_nama_mata_anggaran('<?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Buat Hps" class="btn btn-sm btn-outline-secondary btn-block" target="_blank" href="<?= base_url('admin/administrasi_penyedia/buat_hps/' . $value['id_detail_program_penyedia_jasa']) ?>"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                                                            <a href="javascript:;" style="font-size: 12px;" onclick="alert_hps_belum_dibuat()" class="btn btn-block btn-outline-primary btn-sm" data-toggle="tooltip" title="Kelola Format Surat"><i class="fas fa fa-envelope"></i> </a>
                                                        </td>
                                                    <?php  } else { ?>
                                                        <td class="tg-0pky text-center" style="font-size: 12px;" colspan="2">
                                                            <a style="font-size: 12px;" title="Hapus Nama Program Mata Anggaran" class="btn btn-sm btn-outline-danger btn-block" href="javascript:;" onclick="Hapus_nama_mata_anggaran('<?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Edit Nama Program Mata Anggaran" class="btn btn-sm btn-outline-warning btn-block" href="javascript:;" onclick="Edit_nama_mata_anggaran('<?= $value['id_detail_program_penyedia_jasa'] ?>')"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                            <a style="font-size: 12px;" title="Buat Hps" class="btn btn-sm btn-outline-secondary btn-block" target="_blank" href="<?= base_url('admin/administrasi_penyedia/buat_hps/' . $value['id_detail_program_penyedia_jasa']) ?>"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                                                            <a target="_blank" style="font-size: 12px;" href="<?= base_url('admin/administrasi_penyedia/kelola_format_surat_pasca/' . $value['id_detail_program_penyedia_jasa']) ?>" class="btn btn-block btn-outline-primary btn-sm" data-toggle="tooltip" title="Kelola Format Surat"><i class="fas fa fa-envelope"></i> </a>
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
                                                        <td class="tg-0pky" style="font-size: 12px;"><?= "Rp " . number_format($value_sub_detail_program['nilai_program_mata_anggran'], 2, ',', '.') ?></td>
                                                        <td class="tg-0pky" style="font-size: 12px;"></td>
                                                        <td class="tg-0pky" style="font-size: 12px;"></td>

                                                        <td class="tg-0pky" style="font-size: 12px;"></td>
                                                        <td class="tg-0pky" style="font-size: 12px;"><?= "Rp " . number_format($value_sub_detail_program['nilai_hps'], 2, ',', '.') ?></td>

                                                        <td class="tg-0pky" style="font-size: 12px;"></td>
                                                        <td class="tg-0pky" style="font-size: 12px;"></td>
                                                        <td class="tg-0pky" style="font-size: 12px;"></td>
                                                        <td class="tg-0pky" style="font-size: 12px;"></td>
                                                        <td class="tg-0pky" style="font-size: 12px;">
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>



                                <!-- /.row -->

                                <!-- ./card-body -->
                                <!-- /.card-footer -->

                                <!-- /.card -->

                            </div>
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
                        <!-- /.col -->

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