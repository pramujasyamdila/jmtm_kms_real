<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <br>
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#FFFF00;height:50px;
  position: fixed; top:50px;">
            <b style="margin-left: auto; font-weight:900">Laporan Kinerja</b>
        </nav>
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 4 : Laporan Kinerja</b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 4 - LAPORAN KINERJA</b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;"><b> Modul ini digunakan untuk membuat laporan kinerja kontrak program </b></h6>

        </div>
        <div class="content-wrapper" style="background-color:white">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group mb-5">
                                            <input type="text" placeholder="Cari Kontrak" class="form-control rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="input-group mb-5">
                                            <input type="text" placeholder="Cari No.Kontrak" class="form-control rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-1">
                                    <a href="#" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</a>
                                </div>
                            </div>
                            <table id="table" class="table-bordered table-striped" style="font-family: RNSSanz-Black;text-transform: uppercase; margin-top: -10px">
                                <thead>
                                    <tr style="font-size: 13px; height:10px; background-color: #193B53;">
                                        <th class="text-center text-white " style="font-size: 13px; height:10px; background-color: #193B53;">No </th>
                                        <th class="text-center text-white " style="width:200px; background-color: #193B53;">Kontrak Manajemen</th>
                                        <th class="text-center text-white " style="width:100px;">Departemen</th>
                                        <th class="text-center text-white" style="width:100px">No Kontrak</th>
                                        <th class="text-center text-white" style="width:100px">Tahun Kontrak</th>
                                        <th class="text-center text-white" style="width:100px">Tahun Anggaran</th>
                                        <th class="text-center text-white" style="width:100px">Jenis Kontrak</th>
                                        <th class="text-center text-white" style="width:100px">Aksi</th>
                                </thead>
                                <tbody style="font-size: 12px;">

                                </tbody>
                            </table>

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
    </section>
</div>
<div class="modal fade" id="tambah_program">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h6 class="modal-title">
                    <i class="fas fa-briefcase"></i>
                    Tambah Kontrak
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Form Input Kontrak
                                </h3>
                            </div>
                            <form id="form_tambah_kontrak">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Nama Kontrak</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-clipboard"> </i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="nama_kontrak" placeholder="Nama Kontrak">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">Tahuh Anggaran</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-clipboard"> </i>
                                                        </span>
                                                    </div>
                                                    <select name="tahun_anggaran" class="form-control" id="">
                                                        <?php $i = 0;
                                                        for ($i = 20; $i < 30; $i++) {  ?>
                                                            <option value="20<?= $i ?>">20<?= $i ?></option>
                                                        <?php  } ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">No. Kontrak</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-clipboard"> </i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="no_kontrak" placeholder="No Kontrak">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">Tahun Kontrak</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar"> </i>
                                                        </span>
                                                    </div>
                                                    <input type="date" placeholder="Tahun" class="form-control" name="tahun_kontrak" placeholder="Tahun">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Jenis Kontrak</label>
                                                <select class="form-control" name="jenis_kontrak">
                                                    <option value="Lumpsum">Capex At Cost,Opex Lumpsum</option>
                                                    <option value="Unit Price">Unit Price</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Priode Kontrak</label>
                                                <select class="form-control" name="no_adendum_post_kontrak" onchange="pilih_addendum()">
                                                    <option>-- Pilih Periode --</option>
                                                    <option value="Kontrak Awal">Kontrak Awal</option>
                                                    <option value="1">I</option>
                                                    <option value="2">II</option>
                                                    <option value="3">III</option>
                                                    <option value="4">IV</option>
                                                    <option value="5">V</option>
                                                    <option value="6">VI</option>
                                                    <option value="7">VII</option>
                                                    <option value="8">VIII</option>
                                                    <option value="9">IX</option>
                                                    <option value="10">X</option>
                                                    <option value="11">XI</option>
                                                    <option value="12">XII</option>
                                                    <option value="13">XIII</option>
                                                    <option value="14">XIV</option>
                                                    <option value="15">XV</option>
                                                    <option value="16">XVI</option>
                                                    <option value="17">XVII</option>
                                                    <option value="18">XVIII</option>
                                                    <option value="19">XIX</option>
                                                    <option value="20">XX</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6" style="display: none;" id="tanggal_adendum_kontrak">
                                                <label for="">Tanggal Addendum</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar"> </i>
                                                        </span>
                                                    </div>
                                                    <input type="date" placeholder="Tahun" class="form-control" name="tanggal_adendum_post_kontrak" placeholder="Tahun">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button type="button" onclick="save_program()" class="btn btn-outline-success float-right"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="lihat_uraian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="table_uraian">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Uraian</th>
                            <th>Tanggan Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah Uraian</button>
            </div>
        </div>
    </div>
</div>
</div>