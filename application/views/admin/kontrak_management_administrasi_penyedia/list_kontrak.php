<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color: white;height:50px;
  position: fixed; top:50px">
            <?php if ($judul) { ?>
                <h6 style="margin-left: auto;"><?= $judul ?></h6>
            <?php } else { ?>
                <h6 style="margin-left: auto;">Administrasi Penyedia</h6>
            <?php   }   ?>

        </nav>
        <div class="content-wrapper" style="background-color:white">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card card-outline card-warning">
                            <div class="row mt-3">

                                <?php if ($id_departemen == 4) { ?>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select name="id_departemen" onchange="get_area()" class="form-control id_departemen">
                                                    <option value="">--Pilih Operasi--</option>
                                                    <?php foreach ($get_departemen_all as $key => $value) { ?>
                                                        <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control id_area">
                                                    <option value="">--Pilih Area--</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="id_sub_area" id="get_sub_area" class="form-control id_sub_area">
                                                    <option value="">--Pilih Sub Area--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div style="overflow-x: auto;">

                                            <!-- <div class="table" id="insert-lokasi"></div> -->
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <?php if ($id_departemen && $id_area == 0 && $id_sub_area == 0) { ?>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select name="id_departemen" onchange="get_area()" class="form-control">
                                                        <option value="">--Pilih Operasi--</option>
                                                        <?php foreach ($get_departemen as $key => $value) { ?>
                                                            <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control">
                                                        <option value="">--Pilih Area--</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                        <option value="">--Pilih Sub Area--</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div style="overflow-x: auto;">

                                                <!-- <div class="table" id="insert-lokasi"></div> -->
                                            </div>
                                        </div>

                                    <?php  } else if ($id_departemen && $id_area && $id_sub_area == 0) { ?>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select name="id_departemen" class="form-control">
                                                        <option value="">--Pilih Operasi--</option>
                                                        <?php foreach ($get_departemen as $key => $value) { ?>
                                                            <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="id_area" class="form-control">
                                                        <option value="">--Pilih Area--</option>
                                                        <?php foreach ($get_area as $key => $value) { ?>
                                                            <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                        <option value="">--Pilih Sub Area--</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div style="overflow-x: auto;">
                                                <!-- <div class="table" id="insert-lokasi"></div> -->
                                            </div>
                                        </div>

                                    <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                                        <div class="col-md-12">\
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <select name="id_departemen" class="form-control">
                                                        <option value="">--Pilih Operasi--</option>
                                                        <?php foreach ($get_departemen as $key => $value) { ?>
                                                            <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="id_area" class="form-control">
                                                        <option value="">--Pilih Area--</option>
                                                        <?php foreach ($get_area as $key => $value) { ?>
                                                            <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                        <option value="">--Pilih Sub Area--</option>
                                                        <?php foreach ($get_sub_area as $key => $value) { ?>
                                                            <option value="<?= $value['id_sub_area'] ?>"><?= $value['nama_sub_area'] ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div style="overflow-x: auto;">
                                                <!-- <div class="table" id="insert-lokasi"></div> -->
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <a href="javascript:;" onclick="Filter()" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>

                            <!-- /.card-header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="overflow-x: auto;">
                                        <table id="table" class="table-bordered table-striped" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                            <thead>
                                                <tr style="font-size: 13px; height:10px; background-color: #193B53;">
                                                    <th class="text-center text-white" style="background-color: #193B53;" rowspan=" 2">No </th>
                                                    <th class="text-center text-white" style="width:200px;background-color: #193B53;" rowspan="2">Kontrak Manajemen</th>
                                                    <th class="text-center text-white" style="width:100px;background-color: #193B53;" rowspan="2">Departemen</th>
                                                    <th class="text-center text-white" style="width:100px;background-color: #193B53;" rowspan="2">Area</th>
                                                    <th class="text-center text-white" style="width:100px;background-color: #193B53;" rowspan="2">Sub Area</th>
                                                    <th class="text-center text-white" style="width:100px" rowspan="2">No Kontrak</th>
                                                    <th class="text-center text-white" style="width:100px" rowspan="2">Tahun Kontrak</th>
                                                    <th class="text-center text-white" style="width:100px" rowspan="2">Tahun Anggaran</th>
                                                    <th class="text-center text-white" colspan="3">Informasi Addendum Terakhir</th>
                                                    <th class="text-center text-white" style="width:100px" rowspan="2">Jenis Kontrak</th>
                                                    <th class="text-center text-white" rowspan="2">Aksi</th>
                                                </tr>
                                                <tr style="font-size: 12px;" class="table-warning">
                                                    <th class="text-center text-white" style="width:100px">Nilai Add</th>
                                                    <th class="text-center text-white" style="width:100px">Tanggal Add</th>
                                                    <th class="text-center text-white" style="width:100px">Periode Add</th>
                                                </tr>
                                            </thead>
                                            <tbody style="font-size: 12px;">

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            <!-- /.card-footer -->

                            <!-- /.card -->


                        </div>


                        <!-- /.col -->

                        <!-- /.row -->
                        <!-- Main row -->
                        <!-- /.row -->
                    </div>
                    <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
</div>
</section>
</div>