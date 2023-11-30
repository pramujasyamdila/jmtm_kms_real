<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#FFFF00;height:50px;
  position: fixed; top:50px">
            <h5> <i> <?= $row_program_kontrak_detail['nama_pekerjaan_program_mata_anggaran'] ?></i></h5>
            <b style="margin-left: auto;"> Administrasi Tagihan</b>
        </nav>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
                <b style="margin-left: auto; font-weight:1000" class="text-black">Administrasi Tagihan</b>
            </nav>

            <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h4 style="font-family: 'Poppins', sans-serif;"><b> </b></h4>
                <h6 style="font-family: 'Poppins', sans-serif;">Modul Ini Terkait Informasi Tagihan Penyedia Jasa</h6>

            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input type="text" placeholder="Cari Nama Pekerjaan" class="form-control rounded-0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <input type="text" placeholder="Cari No Kontrak" class="form-control rounded-0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mt-1">
                                                        <a href="#" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.card-header -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <style type="text/css">
                                                    .tg {
                                                        border-collapse: collapse;
                                                        border-spacing: 0;
                                                    }

                                                    .tg td {
                                                        border-color: black;
                                                        border-style: solid;
                                                        border-width: 1px;
                                                        font-family: Arial, sans-serif;
                                                        font-size: 14px;
                                                        overflow: hidden;
                                                        padding: 10px 5px;
                                                        word-break: normal;
                                                    }

                                                    .tg th {
                                                        border-color: black;
                                                        border-style: solid;
                                                        border-width: 1px;
                                                        font-family: Arial, sans-serif;
                                                        font-size: 14px;
                                                        font-weight: normal;
                                                        overflow: hidden;
                                                        padding: 10px 5px;
                                                        word-break: normal;
                                                    }

                                                    .tg .tg-0pky {
                                                        border-color: inherit;
                                                        text-align: left;
                                                        vertical-align: top
                                                    }
                                                </style>
                                                <table class="table table-striped table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                    <thead>
                                                        <tr class="text-white" style="background-color: #193B53;">
                                                            <th class="tg-0pky text-white" rowspan="3">No</th>
                                                            <th class="tg-0pky text-white">Nama Pekerjaan</th>
                                                            <th class="tg-0pky text-white">Nomor Kontrak</th>
                                                            <th class="tg-0pky text-white">Penyedia</th>
                                                            <th class="tg-0pky text-white">Total Kontrak</th>
                                                            <th class="tg-0pky text-white">Tanggal Kontrak</th>
                                                            <th class="tg-0pky text-white">Aksi</th>
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
                                                            $get_nilai_kontrak = $this->db->get() ?>
                                                            <?php
                                                            $total_kontrak  = 0;
                                                            foreach ($get_nilai_kontrak->result_array() as $value_kontrak) {
                                                                $total_kontrak += $value_kontrak['nilai_sub_kontrak_penyedia']
                                                            ?>
                                                            <?php } ?>
                                                            <tr>
                                                                <td class="tg-0pky"><?= $i++ ?></td>
                                                                <td class="tg-0pky"> <label for=""><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></label> </td>
                                                                <td class="tg-0pky"> <?= $value['no_kontrak_penyedia'] ?>
                                                                </td>
                                                                <td class="tg-0pky"><?= $value['nama_penyedia'] ?>
                                                                </td>
                                                                <td class="tg-0pky"> <?= "Rp " . number_format($total_kontrak, 2, ',', '.') ?>
                                                                </td>
                                                                <?php if (!$value['tanggal_kontrak_program']) { ?>
                                                                    <td> Belum Dibuat
                                                                    </td>
                                                                <?php  } else { ?>
                                                                    <td> <?= $value['tanggal_kontrak_program'] ?>
                                                                    </td>
                                                                <?php   } ?>
                                                                <td class="tg-0pky">
                                                                    <a href="javascript:;" onclick="Modal_lihat_barcode(<?= $value['id_detail_program_penyedia_jasa'] ?>)" class="btn btn-sm btn-primary btn-block">Qrcode View</a>
                                                                </td>

                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                                            // $this->db->order_by('display_order', 'ASC');
                                                            $query_result_sub_detail_program = $this->db->get() ?>
                                                            <?php
                                                            $b = 1;
                                                            foreach ($query_result_sub_detail_program->result_array() as $value_sub_detail_program) {
                                                            ?>
                                                                <tr>
                                                                    <td class="tg-0pky"></td>
                                                                    <td class="tg-0pky" colspan="6"><?= $value_sub_detail_program['nama_program_mata_anggaran'] ?>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </tbody>

                                                </table>

                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <!-- /.card -->

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
<!-- Modal -->
<div class="modal fade" id="modal_lihat_qrcode" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Qrcode Tagihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div class="qr_view">

                    </div>
                    <br>
                    <div class="button_view_langsung">

                    </div>
                </center>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>