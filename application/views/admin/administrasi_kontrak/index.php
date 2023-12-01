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
            <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
                <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 3 : Administrasi Tagihan</b>
            </nav>

            <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 3 - Administrasi Tagihan </b></h4>
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
                                                <table id="table_ku" class="table table-striped table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                    <thead>
                                                        <tr class="text-white" style="background-color: #193B53;">
                                                            <th class="tg-0pky text-white">No</th>
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
                                                                <td><?= $i++ ?></td>
                                                                <td> <label for=""><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></label> </td>
                                                                <td> <?= $value['no_kontrak_penyedia'] ?>
                                                                </td>
                                                                <td><?= $value['nama_penyedia'] ?>
                                                                </td>
                                                                <td> <?= "Rp " . number_format($total_kontrak, 2, ',', '.') ?>
                                                                </td>
                                                                <?php if (!$value['tanggal_kontrak_program']) { ?>
                                                                    <td> Belum Dibuat
                                                                    </td>
                                                                <?php  } else { ?>
                                                                    <td> <?= $value['tanggal_kontrak_program'] ?>
                                                                    </td>
                                                                <?php   } ?>
                                                                <td>
                                                                    <a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/buat_tagihan/') . $value['id_detail_program_penyedia_jasa'] ?>" class="btn btn-sm btn-primary btn-block">Taggihan Kontrak</a>
                                                                </td>
                                                            </tr>
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