<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div>
        </div>
        <input type="hidden" name="tahun_filter">
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Grafik <i class="fa fa-signal" aria-hidden="true"></i></h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Button trigger modal -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button type="button" class="btn btn-primary btn-block btn-sm mb-2" data-toggle="modal" data-target="#filter_kontrak">
                                                        Fiter Kontrak
                                                    </button>
                                                    <button type="button" style="display: none;" class="btn btn-success btn-block btn-sm mb-2 tampil_button_pendaptan" data-toggle="modal" data-target="#tambah_pendaptan">
                                                        Input Pendapatan
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card card-success">
                                                <div class="card-header">
                                                    <h3 class="card-title">Grafik Kontrak</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="chart">
                                                        <canvas id="barChart2" class="bar2" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;display:block;"></canvas>
                                                        <canvas id="barChart" class="bar1" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;display:none;"></canvas>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
</div>
<!-- Modal -->
<div class="modal fade" id="open_modal_diagram" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Grafik <label for="" id="label_diagram"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Data Grafik Pendapatan
                            </div>
                            <div class="card-body">
                                <table id="table_pendapatan" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pendapatan</th>
                                            <th>Nilai Pendapatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Data Grafik Pencairan
                            </div>
                            <div class="card-body">
                                <table id="table_pencairan" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Kontrak</th>
                                            <th>No Mc</th>
                                            <th>Nama Kontrak</th>
                                            <th>Nilai Pencairan</th>
                                            <th>Tanggal Pencairan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="filter_kontrak" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white text-white">
                <h5 class="modal-title">Filter Kontrak <i class="fa fa-search-plus" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php if ($id_departemen == 4) { ?>
                        <div class="col-md-10">
                            <table class="table table-bordered table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>Osperasi</th>
                                        <th>Area</th>
                                        <th>Sub Area</th>
                                        <th>Tahun Kontrak</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>
                                            <select name="id_departemen" onchange="get_area1()" class="form-control id_departemen">
                                                <option value="">--Pilih Operasi--</option>
                                                <?php foreach ($get_departemen_all as $key => $value) { ?>
                                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                <?php  } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="id_area" id="get_area" onchange="get_sub_area1()" class="form-control id_area">
                                                <option value="">--Pilih Area--</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="id_sub_area" id="get_sub_area" class="form-control id_sub_area">
                                                <option value="">--Pilih Sub Area--</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="tahun_kontrak" id="" class="form-control">
                                                <?php for ($i = 1; $i < 30; $i++) {  ?>
                                                    <?php if ($i > 9) { ?>
                                                        <option value="20<?= $i ?>">20<?= $i ?></option>
                                                    <?php  } else { ?>
                                                        <option value="200<?= $i ?>">200<?= $i ?></option>
                                                    <?php    } ?>

                                                <?php  } ?>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <div class="table" id="insert-lokasi"></div> -->
                        </div>
                    <?php } else { ?>
                        <?php if ($id_departemen && $id_area == 0 && $id_sub_area == 0) { ?>
                            <div class="col-md-10">
                                <table class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Operasi</th>
                                            <th>Area</th>
                                            <th>Sub Area</th>
                                            <th>Tahun Kontrak</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>
                                                <select name="id_departemen" onchange="get_area2()" class="form-control">
                                                    <option value="">--Pilih Area--</option>
                                                    <?php foreach ($get_departemen as $key => $value) { ?>
                                                        <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="id_area" id="get_area" onchange="get_sub_area2()" class="form-control">
                                                    <option value="">--Pilih Area--</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                    <option value="">--Pilih Sub Area--</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="tahun_kontrak" id="" class="form-control">
                                                    <?php for ($i = 1; $i < 30; $i++) {  ?>
                                                        <?php if ($i > 9) { ?>
                                                            <option value="20<?= $i ?>">20<?= $i ?></option>
                                                        <?php  } else { ?>
                                                            <option value="200<?= $i ?>">200<?= $i ?></option>
                                                        <?php    } ?>

                                                    <?php  } ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="table" id="insert-lokasi"></div> -->
                            </div>

                        <?php  } else if ($id_departemen && $id_area && $id_sub_area == 0) { ?>
                            <div class="col-md-10">
                                <table class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Operasi</th>
                                            <th>Area</th>
                                            <th>Sub Area</th>
                                            <th>Tahun Kontrak</th>
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
                                                <select name="id_area" class="form-control" onchange="get_sub_area3()">
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
                                            <td>
                                                <select name="tahun_kontrak" id="" class="form-control">
                                                    <?php for ($i = 1; $i < 30; $i++) {  ?>
                                                        <?php if ($i > 9) { ?>
                                                            <option value="20<?= $i ?>">20<?= $i ?></option>
                                                        <?php  } else { ?>
                                                            <option value="200<?= $i ?>">200<?= $i ?></option>
                                                        <?php    } ?>

                                                    <?php  } ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="table" id="insert-lokasi"></div> -->
                            </div>

                        <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                            <div class="col-md-10">
                                <table class="table table-bordered table-striped">
                                    <thead class="text-center bg-warning text-white">
                                        <tr>
                                            <th class="text-white">Operasi</th>
                                            <th class="text-white">Area</th>
                                            <th class="text-white">Sub Area</th>
                                            <th class="text-white">Tahun Kontrak</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>
                                                <select name="id_departemen" class="form-control">
                                                    <option value="<?= $this->session->userdata('id_departemen') ?>"><?= $this->session->userdata('nama_departemen') ?></option>
                                                    <?php foreach ($get_departemen as $key => $value) { ?>
                                                        <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="id_area" class="form-control">
                                                    <option value="<?= $this->session->userdata('id_area') ?>"><?= $this->session->userdata('nama_area') ?></option>
                                                    <?php foreach ($get_area as $key => $value) { ?>
                                                        <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                    <option value="<?= $this->session->userdata('id_sub_area') ?>"><?= $this->session->userdata('nama_sub_area') ?></option>
                                                    <?php foreach ($get_sub_area as $key => $value) { ?>
                                                        <option value="<?= $value['id_sub_area'] ?>"><?= $value['nama_sub_area'] ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="tahun_kontrak" id="" class="form-control">
                                                    <?php for ($i = 1; $i < 30; $i++) {  ?>
                                                        <?php if ($i > 9) { ?>
                                                            <option value="20<?= $i ?>">20<?= $i ?></option>
                                                        <?php  } else { ?>
                                                            <option value="200<?= $i ?>">200<?= $i ?></option>
                                                        <?php    } ?>

                                                    <?php  } ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="table" id="insert-lokasi"></div> -->
                            </div>
                        <?php } else { ?>
                        <?php } ?>
                    <?php } ?>
                    <div class="col-md-2" style="margin-top: 150px;">
                        <a href="javascript:;" onclick="Result_kontrak()" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-warning text-white">
                                Result Kontrak
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kontrak</th>
                                            <th>Tahun Kontrak</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="result_kontrak">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_pendaptan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Pendapatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:;" id="form_pendaptan">
                    <input type="hidden" name="id_kontrak_filter" aria-describedby="helpId">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="">Nilai Pendapatan</label>
                            <input type="text" name="nilai_pendapatan" id="nilai_pendapatan" class="form-control" placeholder="" aria-describedby="helpId">
                            <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Pendapatan</label>
                            <input type="text" name="jenis_pendapatan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Bulan & Tahun Pendapatan</label>
                            <input type="date" name="tanggal_pendapatan" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="TambahPendapatan()" class="btn btn-primary">Simpan</a>
            </div>
        </div>
    </div>
</div>