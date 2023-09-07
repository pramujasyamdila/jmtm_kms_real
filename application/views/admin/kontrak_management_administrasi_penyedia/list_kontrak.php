<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->

<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Lembar Kerja</b>
        </nav>
        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b>LEMBAR KERJA</b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;"><b>Pilih Kontrak Manajemen yang diinginkan untuk difokuskan ke dalam Lembar Kerja</b></h6>
        </div>
        <div class="card" style="margin-top: -20px; padding-bottom: 15px; padding-top: 15px">
            <div class="row">
                <div class="col-md-12">
                    <?php if ($id_departemen == 4) { ?>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <select name="id_departemen" onchange="get_area()" class="form-control id_departemen">
                                        <option value="">--Pilih Operasi--</option>
                                        <?php foreach ($get_departemen_all as $key => $value) { ?>
                                            <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control id_area">
                                        <option value="">--Pilih Area--</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="id_sub_area" id="get_sub_area" class="form-control id_sub_area">
                                        <option value="">--Pilih Sub Area--</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <a href="javascript:;" onclick="Filter()" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>

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
                                    <div class="col-md-3">
                                        <select name="id_departemen" onchange="get_area()" class="form-control">
                                            <option value="">--Pilih Operasi--</option>
                                            <?php foreach ($get_departemen as $key => $value) { ?>
                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control">
                                            <option value="">--Pilih Area--</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="id_sub_area" id="get_sub_area" class="form-control">
                                            <option value="">--Pilih Sub Area--</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="javascript:;" onclick="Filter()" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>

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
                                    <div class="col-md-3">
                                        <select name="id_departemen" class="form-control">
                                            <option value="">--Pilih Operasi--</option>
                                            <?php foreach ($get_departemen as $key => $value) { ?>
                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="id_area" class="form-control">
                                            <option value="">--Pilih Area--</option>
                                            <?php foreach ($get_area as $key => $value) { ?>
                                                <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="id_sub_area" id="get_sub_area" class="form-control">
                                            <option value="">--Pilih Sub Area--</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="javascript:;" onclick="Filter()" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div style="overflow-x: auto;">
                                    <!-- <div class="table" id="insert-lokasi"></div> -->
                                </div>
                            </div>

                        <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="id_departemen" class="form-control">
                                            <option value="">--Pilih Operasi--</option>
                                            <?php foreach ($get_departemen as $key => $value) { ?>
                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="id_area" class="form-control">
                                            <option value="">--Pilih Area--</option>
                                            <?php foreach ($get_area as $key => $value) { ?>
                                                <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="id_sub_area" id="get_sub_area" class="form-control">
                                            <option value="">--Pilih Sub Area--</option>
                                            <?php foreach ($get_sub_area as $key => $value) { ?>
                                                <option value="<?= $value['id_sub_area'] ?>"><?= $value['nama_sub_area'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="javascript:;" onclick="Filter()" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>

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

            </div>
        </div>

        <div class="card" style="margin-top: -20px; padding: 20px">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
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
                                    <th class="text-center text-white" style="width:200px;background-color: #193B53;width:100px">Nilai Add</th>
                                    <th class="text-center text-white" style="width:200px;background-color: #193B53;width:100px">Tanggal Add</th>
                                    <th class="text-center text-white" style="width:200px;background-color: #193B53;width:100px">Periode Add</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px;">

                            </tbody>
                        </table>

                    </div>


                </div>
                <!-- /.row -->
            </div>
        </div>


        <div class="card" style="margin-top: -18px; padding: 20px">
            <h6>*Tanggal Kontrak adalah Tanggal Kontrak Manajemen di Tanda Tangani Para Pihak</h6>
            <h6>*Tahun Anggaran adalah Data untuk 1 Tahun Anggaran tertentu di dalam Kontrak Manajemen</h6>
            <h6>*Informasi Addendum Terakhir adalah Informasi Nilai, Tanggal, dan Periode Addendum terakhir yang telah diinput di dalam Kelola Level Kontrak Manajemen</h6>

        </div>
</div>
</section>
</div>