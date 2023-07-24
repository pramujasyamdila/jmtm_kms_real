<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <!-- <div class="section-header">
            <h1><i class="fa fa-book"></i> MANAGEMENT MATA ANGGARAN</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">MANAGEMENT MATA ANGGARAN</a></div>
            </div>
        </div> -->
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color: white;height:50px;
  position: fixed; top:50px">
            <h6 style="margin-left: auto;">Mata Anggaran</h6>
        </nav>
        <div class="content-wrapper" style="background-color:white">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
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
                                    <div class="card-body">
                                        <div class="row">
                                            <?php if ($id_departemen == 4) { ?>
                                                <div class="col-md-10">
                                                    <div style="overflow-x: auto;">
                                                        <table class="table table-bordered table-striped">
                                                            <thead class="text-center">
                                                                <tr>
                                                                    <th>Osperasi</th>
                                                                    <th>Area</th>
                                                                    <th>Sub Area</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>
                                                                        <select name="id_departemen" onchange="get_area()" class="form-control id_departemen">
                                                                            <option value="">--Pilih Operasi--</option>
                                                                            <?php foreach ($get_departemen_all as $key => $value) { ?>
                                                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control id_area">
                                                                            <option value="">--Pilih Area--</option>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <select name="id_sub_area" id="get_sub_area" class="form-control id_sub_area">
                                                                            <option value="">--Pilih Sub Area--</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- <div class="table" id="insert-lokasi"></div> -->
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <?php if ($id_departemen && $id_area == 0 && $id_sub_area == 0) { ?>
                                                    <div class="col-md-10">
                                                        <div style="overflow-x: auto;">
                                                            <table class="table table-bordered table-striped">
                                                                <thead class="text-center">
                                                                    <tr>
                                                                        <th>Operasi</th>
                                                                        <th>Area</th>
                                                                        <th>Sub Area</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="text-center">
                                                                    <tr>
                                                                        <td>
                                                                            <select name="id_departemen" onchange="get_area()" class="form-control">
                                                                                <option value="">--Pilih Operasi--</option>
                                                                                <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                                <?php  } ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control">
                                                                                <option value="">--Pilih Area--</option>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                                                <option value="">--Pilih Sub Area--</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- <div class="table" id="insert-lokasi"></div> -->
                                                        </div>
                                                    </div>

                                                <?php  } else if ($id_departemen && $id_area && $id_sub_area == 0) { ?>
                                                    <div class="col-md-10">
                                                        <div style="overflow-x: auto;">
                                                            <table class="table table-bordered table-striped">
                                                                <thead class="text-center">
                                                                    <tr>
                                                                        <th>Operasi</th>
                                                                        <th>Area</th>
                                                                        <th>Sub Area</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="text-center">
                                                                    <tr>
                                                                        <td>
                                                                            <select name="id_departemen" class="form-control">
                                                                                <option value="">--Pilih Operasi--</option>
                                                                                <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                                <?php  } ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="id_area" class="form-control">
                                                                                <option value="">--Pilih Area--</option>
                                                                                <?php foreach ($get_area as $key => $value) { ?>
                                                                                    <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                                                <?php  } ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                                                <option value="">--Pilih Sub Area--</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- <div class="table" id="insert-lokasi"></div> -->
                                                        </div>
                                                    </div>

                                                <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                                                    <div class="col-md-10">
                                                        <div style="overflow-x: auto;">
                                                            <table class="table table-bordered table-striped">
                                                                <thead class="text-center">
                                                                    <tr>
                                                                        <th>Operasi</th>
                                                                        <th>Area</th>
                                                                        <th>Sub Area</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="text-center">
                                                                    <tr>
                                                                        <td>
                                                                            <select name="id_departemen" class="form-control">
                                                                                <option value="">--Pilih Operasi--</option>
                                                                                <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                                <?php  } ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="id_area" class="form-control">
                                                                                <option value="">--Pilih Area--</option>
                                                                                <?php foreach ($get_area as $key => $value) { ?>
                                                                                    <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                                                <?php  } ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                                                <option value="">--Pilih Sub Area--</option>
                                                                                <?php foreach ($get_sub_area as $key => $value) { ?>
                                                                                    <option value="<?= $value['id_sub_area'] ?>"><?= $value['nama_sub_area'] ?></option>
                                                                                <?php  } ?>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- <div class="table" id="insert-lokasi"></div> -->
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                <?php } ?>
                                            <?php } ?>
                                            <div class="col-md-2 mt-5">
                                                <a href="javascript:;" onclick="Filter()" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>
                                            </div>
                                        </div>

                                        <div class="card card-outline card-primary">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card-body">
                                                            <table id="table" class="table-bordered table-striped">
                                                                <thead>
                                                                    <tr style="font-size: 12px;" class="bg-primary">
                                                                        <th class="text-center text-white bg-primary" rowspan="2">No </th>
                                                                        <th class="text-center text-white bg-primary" style="width:200px;" rowspan="2">Kontrak Manajemen</th>
                                                                        <th class="text-center text-white bg-primary" style="width:100px;" rowspan="2">Departemen</th>
                                                                        <th class="text-center text-white bg-primary" style="width:100px;" rowspan="2">Area</th>
                                                                        <th class="text-center text-white bg-primary" style="width:100px;" rowspan="2">Sub Area</th>
                                                                        <th class="text-center text-white" style="width:100px" rowspan="2">No Kontrak</th>
                                                                        <th class="text-center text-white" style="width:100px" rowspan="2">Tahun Kontrak</th>
                                                                        <th class="text-center text-white" style="width:100px" rowspan="2">Tahun Anggaran</th>
                                                                        <th class="text-center text-white" colspan="3">Informasi Addendum Terakhir</th>
                                                                        <th class="text-center text-white" style="width:100px" rowspan="2">Jenis Kontrak</th>
                                                                        <th class="text-center text-white" rowspan="2">Aksi</th>
                                                                    </tr>
                                                                    <tr style="font-size: 12px;" class="table-warning">
                                                                        <th class="text-center" style="width:100px">Nilai Add</th>
                                                                        <th class="text-center" style="width:100px">Tanggal Add</th>
                                                                        <th class="text-center" style="width:100px">Periode Add</th>
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
                                            </div>
                                            <!-- /.card -->
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
            </section>
            <!-- /.content -->
        </div>
    </section>
</div>