<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> EDIT MC</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/buat_tagihan/') . $row_kontrak['id_kontrak'] ?>">ADMINISTRASI TAGGIHAN PENYEDIA</a></div>
                <div class="breadcrumb-item active"><a href="">EDIT MC</a></div>
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
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
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-header">
                                        <h5>KELOLA MC</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="javascript:;" id="form_mc_edit" method="post">
                                            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_kontrak['id_detail_program_penyedia_jasa'] ?>">
                                            <div class="row">
                                                <input type="hidden" value="<?= $row_mc['id_mc'] ?>" name="id_mc">
                                                <input type="hidden" value="<?= $row_mc['no_mc'] ?>" name="data_no_mc">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Periode mc</label>
                                                        <input type="date" style="font-size:11px" class="form-control form-control-sm" value="<?= $row_mc['tanggal_mc'] ?>" name="tanggal_mc" aria-describedby="helpId" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Retensi</label>
                                                        <select style="font-size:11px" name="sts_retensi" onchange="LogikaRetensi()" class="form-control form-control-sm">
                                                            <option value="<?= $row_mc['nilai_retensi'] ?>"><?= $row_mc['nilai_retensi'] ?></option>
                                                            <option value="1">Tanpa Persen</option>
                                                            <option value="2">Dengan Persen</option>
                                                        </select>
                                                        <br>
                                                        <div id="retensi_tidak_persen" style="display:none">
                                                            <div class="input-group mb-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" style="font-size:11px" class="form-control from-control-sm" name="nilai_retensi_tanpa_persen" value="<?= $row_mc['nilai_retensi'] ?>" id="nilai_retensi2" aria-describedby="helpId" placeholder="Nilai Retensi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-retensi">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="retensi_persen" style="display:none">
                                                            <select style="font-size:11px" name="nilai_retensi" class="form-control form-control-sm">
                                                                <option value="<?= $row_mc['nilai_retensi'] ?>"><?= $row_mc['nilai_retensi'] ?>%</option>
                                                                <option value="5">5%</option>
                                                                <option value="10">10%</option>
                                                                <option value="15">15%</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Uang Muka</label>
                                                    <div class="input-group mb-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                    </span>

                                                                    <input type="text" style="font-size:11px" class="form-control form-control-sm" name="nilai_uang_muka" value="<?= $row_mc['nilai_uang_muka'] ?>" id="nilai_uang_muka2" aria-describedby="helpId" placeholder="Nilai Uang Muka">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-uang-muka">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Denda</label>
                                                    <div class="input-group mb-3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                    </span>
                                                                    <input type="text" style="font-size:11px" class="form-control form-control-sm" value="<?= $row_mc['denda'] ?>" name="denda" id="denda2" aria-describedby="helpId" placeholder="Nilai Denda">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-denda">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">PPN</label>
                                                        <select name="persen_ppn" style="font-size:11px" class="form-control form-control-sm">
                                                            <option value="<?= $row_mc['persen_ppn'] ?>"><?= $row_mc['persen_ppn'] ?>%</option>
                                                            <option value="10">10%</option>
                                                            <option value="11">11%</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:;" style="font-size:11px" onclick="Simpan_edit_traking()" class="btn btn-success btn-block">SIMPAN DATA MC</a>
                                        </form>
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