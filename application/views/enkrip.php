<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <i class="nav-icon far fa-address-card"></i>
                        Kontrak Mangement <?= $this->session->userdata('username'); ?> - <?= $this->session->userdata('id_area'); ?>

                        <br>
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
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                Table Kontrak
                            </h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-block bg-gradient-success" data-toggle="modal" data-target="#tambah_program">
                                    <i class="fas fa-plus"></i>
                                    Tambah Kontrak
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <?= form_open_multipart('enkripsi/enkrip/upload_data') ?>

                                        <input type="file" class="form-control" name="file_asli"> <br>
                                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                                        <?= form_close(); ?>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>File</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($get_enkrip as $key => $value) { ?>
                                                <tr>
                                                    <td>
                                                         <a style="white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis; border: none;" for="" href="<?= base_url('file_dokumen_penunjang/') . $value['file_asli'] ?>" target="_blank" rel="noopener noreferrer"><?= $value['file_asli'] ?></a>
                                                        </label></td>
                                                    <td><?= $value['password'] ?></td>
                                                    <?php if ($value['status'] == 1) { ?>
                                                        <td>Terenkrip</td>
                                                    <?php } else { ?>
                                                        <td>Terdekripsi</td>
                                                    <?php  }
                                                    ?>
                                                    <td>
                                                        <?php if ($value['status'] == 1) { ?>
                                                            <a href="<?= base_url('enkripsi/enkrip/update_dekrip/') . $value['id_enkrip'] ?>" class="btn btn-success">Dekripsi</a>
                                                        <?php } else { ?>
                                                            <a href="<?= base_url('enkripsi/enkrip/update_enkrip/') . $value['id_enkrip'] ?>" class="btn btn-warning">Enkrip</a>
                                                        <?php  }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>