<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#FFFF00;height:50px;
  position: fixed; top:50px">
        <b>
            <?= $row_kontrak['nama_pekerjaan_program_mata_anggaran'] ?>
        </b>
        <b style="margin-left: auto;"> Administrasi Tagihan</b>
    </nav>
    <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black"> Administrasi Tagihan</b>
        </nav>
    <div class="row mt-5">
        <div class="col-md-9">
            <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 3 - ADMINISTRASI TAGIHAN </b></h4>
                <h6 style="font-family: 'Poppins', sans-serif;">Modul ini digunakan dalam membuat Data Terkait Tagihan Penyedia Jasa yang dipiliih</h6>
            </div>
        </div>
        <div class="col-md-3">
            <div class="qr_view">

            </div>
        </div>
    </div>
    <br>
    <!-- Main content -->
    <div class="col-md-12">
        <!-- /.card-header -->
        <div class="row">
            <div class="col-6">
                <!-- <small id="helpId" class="form-text text-muted">Ini Pake Search Select</small> -->
                <div class="input-group">
                    <input type="hidden" class="form-control" value="<?= $row_kontrak['id_detail_program_penyedia_jasa'] ?>" id="id_detail_program_penyedia_jasa" name="id_detail_program_penyedia_jasa" readonly placeholder="Cari No. Kontrak">
                    <span class="input-group-btn">
                        <!-- <a href="javascript:;" onclick="cari_no_kontrak()" class="btn btn-primary text-white"><i class="fas fa-search"></i> Cari</a> -->
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary mb-4">
                    <br>
                    <a style="width: 200px;margin-left:10px" target="_blank" href="<?= base_url('export_pdf/buat_pdf/print_tagihan/'. $row_kontrak['id_detail_program_penyedia_jasa'])?>" class="btn btn-info"> <i class="fas fa fa-file"></i> Report Print To PDF</a>
                    <div class="card-header card-info card-outline"><strong>Histori Kontrak Penyedia</strong><span class="small ms-1"></span></div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Penyedia Jasa</th>
                                <th colspan="2"><?= $row_kontrak['nama_penyedia'] ?></th>
                            </tr>
                            <tr>
                                <th class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Nomor Kontrak</th>
                                <th colspan="2"><?= $row_kontrak['no_kontrak_penyedia'] ?></th>
                            </tr>
                            <tr>
                                <td style="background-color:#193B53;font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Histori Kontrak</td>
                                <td style="background-color:#193B53;font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Nilai Kontrak / Addendum</td>
                                <td style="background-color:#193B53;font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Tanggal Kontrak / Addendum</td>
                            </tr>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $row_kontrak['id_detail_program_penyedia_jasa']);
                            $get_nilai_kontrak = $this->db->get();
                            $total_kontrak  = 0;
                            foreach ($get_nilai_kontrak->result_array() as $value_kontrak) {
                                $total_kontrak += $value_kontrak['nilai_sub_kontrak_penyedia']
                            ?>
                            <?php } ?>
                            <tr>
                                <td class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Kontrak Awal</td>
                                <td><?= "Rp " . number_format($total_kontrak, 2, ',', '.') ?></td>
                                <td><?= date('d-M-Y', strtotime($row_kontrak['tanggal_kontrak_program']))  ?></td>
                            </tr>
                            <?php foreach ($looping_adendum as $key => $value) { ?>
                                <tr>
                                    <td class="bg-warning" style="font-family: RNSSanz-Black;text-transform: uppercase;color:white;">Addendum <?= $value['no_addendum'] ?></td>
                                    <td><?= "Rp " . number_format($row_kontrak['total_kontrak_addendum_' . $value['no_addendum']], 2, ',', '.') ?></td>
                                    <td><?= date('d-M-Y', strtotime($value['tanggal_addendum']))  ?></td>
                                </tr>
                            <?php    } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-success mb-4">
                    <div class="card-body">
                        <button style="display: none;" type="button" class="btn btn-sm btn-outline-primary create_mcku" data-toggle="modal" data-target="#modelId">
                            Tambah Master Data Tagihan Penyedia / MC +
                        </button>
                        <br>
                        <div style="overflow-x: auto;overflow-y: scroll;">
                            <style type="text/css">
                                .div1 {
                                    overflow: scroll;
                                    border: 1px solid #777777;
                                }

                                .div1 table {
                                    border-spacing: 0;
                                }

                                .div1 th {
                                    border-left: none;
                                    border-right: 1px solid #bbbbbb;
                                    padding: 5px;
                                    width: 80px;
                                    min-width: 80px;
                                    position: sticky;
                                    top: 0;
                                    color: #e0e0e0;
                                    background-color: #409cff;
                                    font-weight: normal;
                                }

                                .div1 tr {
                                    color: black;
                                    ;
                                }

                                .div1 td {
                                    border-left: none;
                                    border-right: 1px solid #bbbbbb;
                                    border-bottom: 1px solid #bbbbbb;
                                    padding: 5px;
                                    width: 80px;
                                    min-width: 80px;
                                }

                                .div1 th:nth-child(1),
                                .div1 td:nth-child(1) {
                                    position: sticky;
                                    left: 0;
                                    width: 150px;
                                    min-width: 150px;
                                }

                                .div1 th:nth-child(2),
                                .div1 td:nth-child(2) {
                                    position: sticky;
                                    left: 150px;
                                    width: 50px;
                                    min-width: 50px;
                                }

                                .div1 td:nth-child(1),
                                .div1 td:nth-child(2) {
                                    background-color: #F0F8FF;
                                }

                                .div1 th:nth-child(1),
                                .div1 th:nth-child(2) {
                                    z-index: 2;
                                    background-color: #F0F8FF;
                                }
                            </style>
                            <table id="tabledetail" class="table div1" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                <thead class="text-center">
                                    <tr style="background-color:#193B53;">
                                        <th style="font-size: 13px;color:white; width:100px" rowspan="2">MC Ke</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Periode</th>
                                        <th style="font-size: 13px;color:white; width:750px" colspan="3">Sebelum PPN</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">PPN</th>
                                        <th style="font-size: 13px;color:white; width:250px" colspan="3">Setelah PPN</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Retensi</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Pengembaliaan uang muka </th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Denda</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Total Potongan</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Total Invoice</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Status Tracking</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Tanggal Update Tracking</th>
                                        <th style="font-size: 13px;color:white; width:250px" rowspan="2">Aksi</th>
                                    </tr>
                                    <tr class="table-warning">
                                        <th style="font-size: 13px;width:250px">S.D.Bulan Lalu</th>
                                        <th style="font-size: 13px;width:250px">Bulan Ini</th>
                                        <th style="font-size: 13px;width:250px">S.D Bulan Ini</th>
                                        <th style="font-size: 13px;width:250px">S.D.Bulan Lalu</th>
                                        <th style="font-size: 13px;width:250px">Bulan Ini</th>
                                        <th style="font-size: 13px;width:250px">S.D Bulan Ini</th>
                                    </tr>
                                </thead>
                                <tbody class="result_datanya">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="margin-top: -18px; padding: 20px">
            <h5><b>PETUNJUK UMUM</b></h5>
            <h6>*Histori Kontrak diambil berdasarkan data yang telah diisi di Pasca Pengadaan</h6>
            <h6>*Tracking MC agar dapat diupdate pada masing-masing Akun sesuai dengan pergerakan Dokumen</h6>
        </div>
    </div>
    <!--/. container-fluid -->
    <!-- /.content -->
</div>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" data-backdrop="false" id="modelId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-white"> Form Master Data Tagihan Penyedia / MC </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <label id="header_no_mc" for=""></label>
                        </div>
                        <div class="card-body">
                            <form action="javascript:;" id="form_mc" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="jumlah_mcku">
                                            <label for="">No Kontrak</label>
                                            <input type="hidden" name="id_detail_program_penyedia_jasau">
                                            <input type="text" class="form-control" readonly value="<?= $row_kontrak['no_kontrak_penyedia'] ?>" aria-describedby="helpId" placeholder="">
                                            <small id="helpId" class="form-text text-muted">Otomartis Generate</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tanggal Periode</label>
                                            <input type="date" required class="form-control" name="tanggal_mc" aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">PPN</label>
                                            <select name="persen_ppn" class="form-control">
                                                <option value="">--- Pilih PPN ---</option>
                                                <option value="10">10%</option>
                                                <option value="11">11%</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Retensi</label>
                                            <select name="sts_retensi" onchange="LogikaRetensi()" class="form-control">
                                                <option value="">--- Metode Retensi ---</option>
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

                                                                <input type="text" class="form-control" name="nilai_retensi_tanpa_persen" id="nilai_retensi2" aria-describedby="helpId" placeholder="Nilai Retensi">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-retensi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="retensi_persen" style="display:none">
                                                <select name="nilai_retensi" class="form-control">
                                                    <option value="">--- Pilih Retensi Persen ---</option>
                                                    <option value="5">5%</option>
                                                    <option value="10">10%</option>
                                                    <option value="15">15%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Pengembalian Uang Muka</label>
                                        <div class="input-group mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="nilai_uang_muka" id="nilai_uang_muka2" aria-describedby="helpId" placeholder="Pengembalian Uang Muka">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-uang-muka">
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

                                                        <input type="text" class="form-control" name="denda" id="denda2" aria-describedby="helpId" placeholder="Nilai Denda">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-denda">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="jika_ada_um">
                                            <input type="hidden" name="cek_um">
                                            <input type="hidden" readonly class="form-control" name="jika_no_urut">
                                        </div>
                                        <div id="jika_tidak_ada_um">
                                            <div class="form-group">
                                                <label for="">Jenis Mc</label>
                                                <select name="cek_um" onchange="NilaiManipulasiMc()" class="form-control">
                                                    <option value="">--- Plih ---</option>
                                                    <option value="ada">Um</option>
                                                    <option value="tidak ada">Number
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">No Mc</label>
                                            <select name="no_mc_manipulasi" onchange="jika_mc_number()" class="form-control">
                                                <option value="">--- Plih ---</option>
                                                <option value="Um">Um</option>
                                                <?php for ($i = 1; $i < 30; $i++) {  ?>
                                                    <option value="<?= $i ?>"> <?= $i ?> </option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 sd_bln_lalu">
                                        <label for="">Nilai S/D Bulan Lalu</label>
                                        <div class="input-group mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="sd_bulan_lalu_number" id="nilai_sd_bulalan_lalu" aria-describedby="helpId" placeholder="Nilai S/D Bulan Lalu">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-sd_bln_lalu">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="jumlah_mc" id="jumlah_mc2" aria-describedby="helpId" placeholder="Jumlah Mc">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                    <a href="javascript:;" id="simpan_mc_botton" onclick="Simpan_mc()" class="btn btn-outline-success">Simpan</a>
                                    <button disabled style="display: none;" id="loading_button_mc" class="btn btn-success">Loading...</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

<!-- MODAL UPLOAD MC -->
<div class="modal fade" data-backdrop="false" id="modal_penagihan" tabindex="-1" role="dialog" aria-labelledby="modal_penagihan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Mc</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:;" id="form_upload_mc" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id_mc_upload">
                        <label for="">No Kontrak</label>
                        <input type="text" class="form-control" readonly name="no_kontrak_mc_upload" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="keterangan_upload_mc"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Upload <label class="text-danger">*</label></label>
                        <input type="file" name="file_mc" accept="application/msword, application/vnd.ms-excel,application/pdf" class="form-control form-control-sm file_mc">
                    </div>
                    <br>
                    <center>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"> Cancel</button>
                        <button type="submit" id="upload_mcku" name="upload" class="btn btn-outline-success"><i class="fas fa-save"></i> UPLOAD</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->

<!-- Modal -->
<!-- <div class="modal fade" data-backdrop="false" id="modal_traking" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">Traking MC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <h3>TRAKING MC</h3>
                </center>
                <br>
                <div class="card">
                    <div class="card-header bg-success">
                        DATA TRACKING
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="hori-timeline" dir="ltr">
                                                <ul class="list-inline events">
                                                    <li class="list-inline-item event-list">
                                                        <div class="px-4">
                                                            <label for="">Vendor <i class="fas fa fa-user"></i></label>
                                                            <div id="vendor_line" class="event-date">
                                                                <label for="" id="hari_vendor"></label>
                                                            </div>
                                                            <h5 id="uraian_vendor" class="font-size-16"></h5>
                                                            <p class="text-muted"></p>

                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item event-list">
                                                        <div class="px-4">
                                                            <label for="">Area <i class="fas fa fa-users"></i></label>
                                                            <div id="area_line" class="event-date ">
                                                                <label for="" id="hari_area"></label>
                                                            </div>
                                                            <h5 id="uraian_area" class="font-size-16"></h5>
                                                            <p class="text-muted"></p>

                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item event-list">
                                                        <div class="px-4">
                                                            <label for="">Pusat <i class="fas fa fa-users"></i></label>
                                                            <div id="pusat_line" class="event-date">
                                                                <label for="" id="hari_pusat">Menunggu</label>
                                                            </div>
                                                            <h5 id="uraian_pusat" class="font-size-16">Menunggu Proses</h5>
                                                            <p class="text-muted"></p>

                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item event-list">
                                                        <div class="px-4">
                                                            <label for="">Finance <i class="fas fa fa-users"></i></label>
                                                            <div id="finance_line" class="event-date">
                                                                <label for="" id="hari_finance">Menunggu</label>
                                                            </div>
                                                            <h5 id="uraian_finance" class="font-size-16">Menunggu Proses</h5>
                                                            <p class="text-muted"></p>

                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>
                            </div>
                            <br>
                            <table id="datatable_traking_mc" style="font-size: 14px;" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Uraian</th>
                                        <th>PIC</th>
                                        <th>Tanggal</th>
                                        <th>Catatan</th>
                                        <th>Vendor</th>
                                        <th>Area</th>
                                        <th>Pusat</th>
                                        <th>Finance</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <?php if ($this->session->userdata('id_vendor')) { ?>
                    <div id="button_vendor" class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <a class="btn-sm btn btn-success text-white" data-toggle="modal" data-target="#modal_kirim_revisi_vendor" href="javascript:;">Kirim Revisi</a>
                    </div>
                <?php     } else { ?>
                    <?php if ($this->session->userdata('role') ==  1 || $this->session->userdata('2')) { ?>

                    <?php } else if ($this->session->userdata('role') ==  3) { ?>
                        <div id="button_area" class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <a class="btn-sm btn btn-danger text-white" data-toggle="modal" data-target="#modal_revisi_area" href="javascript:;">Revisi</a>
                            <a class="btn-sm btn btn-success text-white" data-toggle="modal" data-target="#modal_aprove_area" href="javascript:;">Approve</a>
                        </div>
                    <?php  } else if ($this->session->userdata('role') ==  4) { ?>
                        <div id="button_pusat" class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <a class="btn-sm btn btn-danger text-white" data-toggle="modal" data-target="#modal_revisi_pusat" href="javascript:;">Revisi</a>
                            <a class="btn-sm btn btn-success text-white" data-toggle="modal" data-target="#modal_aprove_pusat" href="javascript:;">Approve</a>
                        </div>
                    <?php   } else if ($this->session->userdata('role') ==  5) { ?>
                        <div id="button_finance" class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <a class="btn-sm btn btn-success text-white" data-toggle="modal" data-target="#modal_diterima_finance" href=" javascript:;">Terima Berkas</a>
                        </div>
                        <div id="button_pencairan" class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <a class="btn-sm btn btn-success text-white" data-toggle="modal" data-target="#modal_pencairan" href=" javascript:;">Cairkan</a>
                        </div>
                    <?php } ?>

                <?php  }  ?>

            </div>
        </div>
    </div>
</div> -->


<!-- ini untuk kirim revisi vendor -->

<div class=" modal fade" data-backdrop="false" id="modal_kirim_revisi_vendor" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kirim Revisi Vendor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javasript:;" id="form_kirim_revisi_vendor" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_detail_program_penyedia_jasau">
                        <input type="hidden" name="id_mc">
                        <input type="hidden" name="id_traking">
                        <input type="hidden" name="tanggal_mc">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="catatan_rapot"> </textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Kirim_revisi_vendor()" class="btn btn-sm btn-primary">Kirim revisi</a>
            </div>
        </div>
    </div>
</div>


<!-- Ini Untuk Approve Area -->

<div class="modal fade" data-backdrop="false" id="modal_aprove_area" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Approve Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javasript:;" id="form_aprove_area" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_detail_program_penyedia_jasau">
                        <input type="hidden" name="id_mc">
                        <input type="hidden" name="id_traking">
                        <input type="hidden" name="jumlah_hari_vendor">
                        <input type="hidden" name="waktu_kirim_vendor">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="catatan_rapot"> </textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Setujui_area()" class="btn btn-sm btn-primary">Setujui</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" data-backdrop="false" id="modal_revisi_area" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Revisi Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javasript:;" id="form_revisi_area" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_detail_program_penyedia_jasau">
                        <input type="hidden" name="id_mc">
                        <input type="hidden" name="id_traking">
                        <input type="hidden" name="jumlah_hari_vendor">
                        <input type="hidden" name="waktu_kirim_vendor">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="catatan_rapot"> </textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Revisi_area()" class="btn btn-sm btn-danger">Revisi</a>
            </div>
        </div>
    </div>
</div>

<!-- MODAL PUSAT -->

<div class="modal fade" data-backdrop="false" id="modal_revisi_pusat" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Revisi Pusat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javasript:;" id="form_revisi_pusat" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_detail_program_penyedia_jasau">
                        <input type="hidden" name="id_mc">
                        <input type="hidden" name="id_traking">
                        <input type="hidden" name="jumlah_hari_vendor">
                        <input type="hidden" name="jumlah_hari_area">
                        <input type="hidden" name="waktu_kirim_area">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="catatan_rapot"> </textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Revisi_pusat()" class="btn btn-sm btn-danger">Revisi</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" data-backdrop="false" id="modal_aprove_pusat" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Aprove Pusat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javasript:;" id="form_aprove_pusat" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_detail_program_penyedia_jasau">
                        <input type="hidden" name="id_mc">
                        <input type="hidden" name="id_traking">
                        <input type="hidden" name="jumlah_hari_vendor">
                        <input type="hidden" name="jumlah_hari_area">
                        <input type="hidden" name="waktu_kirim_area">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="catatan_rapot"> </textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Setujui_pusat()" class="btn btn-sm btn-danger">Aprove</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" data-backdrop="false" id="modal_diterima_finance" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Terima Berkas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    Apa Anda Yakin Berkas Sudah Anda Terima ??
                </center>
                <form action="javasript:;" id="form_aprove_finance" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_detail_program_penyedia_jasau">
                        <input type="hidden" name="id_mc">
                        <input type="hidden" name="id_traking">
                        <input type="hidden" name="jumlah_hari_vendor">
                        <input type="hidden" name="jumlah_hari_area">
                        <input type="hidden" name="jumlah_hari_pusat">
                        <input type="hidden" name="waktu_kirim_pusat">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="catatan_rapot"> </textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Belum</button>
                <a href="javascript:;" onclick="Terima_finance()" class="btn btn-sm btn-danger">Berkas Di Terima</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" data-backdrop="false" id="modal_pencairan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pencairan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    Apa Anda Yakin Ingin Mencairkan ??
                </center>
                <form action="javasript:;" id="form_pencairan_grafik" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_detail_program_penyedia_jasau">
                        <input type="hidden" name="id_mc">
                        <input type="hidden" name="sts_tanggal_trakhir">
                        <input type="hidden" name="setelah_ppn">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea type="text" class="form-control" name="catatan"> </textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <a href="javascript:;" onclick="Pencairan_grafik()" class="btn btn-sm btn-danger">Cairkan</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" data-backdrop="false" id="modal_traking2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Traking MC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <h3>TRAKING MC</h3>
                </center>
                <br>
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        DATA TRACKING
                    </div>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-body">
                                        <div class="hori-timeline" dir="ltr">
                                            <ul class="list-inline events">
                                                <li class="list-inline-item event-list">
                                                    <div class="card">
                                                        <div class="card-header bg-primary text-white text-center">
                                                            Vendor &nbsp; <i class="fas fa fa-user"></i>
                                                        </div>
                                                        <div class="card-body">
                                                            <span style="font-size: 20px;" class="badge badge-transparent" id="vendor_line"> <label for="" id="hari_vendor">Menunggu</label></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item event-list">
                                                    <div class="card">
                                                        <div class="card-header bg-warning text-white text-center">
                                                            Area &nbsp; <i class="fas fa fa-user"></i>
                                                        </div>
                                                        <div class="card-body">
                                                            <span style="font-size: 20px;" class="badge badge-transparent" id="area_line"> <label for="" id="hari_area">Menunggu</label></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item event-list">
                                                    <div class="card">
                                                        <div class="card-header bg-info text-white text-center">
                                                            Pusat &nbsp; <i class="fas fa fa-user"></i>
                                                        </div>
                                                        <div class="card-body">
                                                            <span style="font-size: 20px;" class="badge badge-transparent" id="pusat_line"> <label for="" id="hari_pusat">Menunggu</label></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item event-list">
                                                    <div class="card">
                                                        <div class="card-header bg-success text-white text-center">
                                                            Finance &nbsp; <i class="fas fa fa-user"></i>
                                                        </div>
                                                        <div class="card-body">
                                                            <span style="font-size: 20px;" class="badge badge-transparent" id="finance_line"> <label for="" id="hari_finance">Menunggu</label></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Form Traking
                            </div>
                            <div class="card-body">
                                <form action="javasript:;" id="form_kirim_traking" method="post">
                                    <input type="hidden" name="id_mc">
                                    <input type="hidden" name="id_detail_program_penyedia_jasau">
                                    <input type="hidden" name="tanggal_mc">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">PIC</label>
                                                <select onchange="pilih_pic()" name="pic" class="form-control">
                                                    <option value="">--pilih--</option>
                                                    <!-- oprasi -->
                                                    <?php if ($id_departemen && $id_area == 0 && $id_sub_area == 0) { ?>
                                                        <option class="show_vendor" value="Vendor">Vendor</option>
                                                        <option class="show_area" value="Area">Area</option>
                                                        <option class="show_pusat" value="Pusat">Pusat</option>
                                                        <option class="show_finance" value="Finance">Finance</option>
                                                        <!-- area -->
                                                    <?php  } else if ($id_departemen && $id_area && $id_sub_area == 0) { ?>
                                                        <option class="show_vendor" value="Vendor">Vendor</option>
                                                        <option class="show_area" value="Area">Area</option>
                                                        <option class="show_pusat" value="Pusat">Pusat</option>
                                                        <option class="show_finance" value="Finance">Finance</option>
                                                        <!-- sub area -->
                                                    <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                                                        <option class="show_vendor" value="Vendor">Vendor</option>
                                                        <option class="show_area" value="Area">Area</option>
                                                    <?php } else { ?>
                                                        <option class="show_vendor" value="Vendor">Vendor</option>
                                                        <option class="show_area" value="Area">Area</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Uraian</label>
                                                <select name="uraian" onchange="pilih_uraian()" class="form-control" id="uraian">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Tanggal</label>
                                                <input type="date" name="tanggal_rapot" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-4" style="display: none;" id="keterangan">
                                            <div class="form-group">
                                                <label for="">Keterangan</label>
                                                <textarea name="keterangan_traking" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                    </div>
                                </form>
                                <a href="javascript:;" onclick="Kirim_Traking()" class="btn btn-sm btn-danger">Simpan</a>
                                <!-- <a class="btn-sm btn btn-success text-white" data-toggle="modal" data-target="#modal_pencairan" href=" javascript:;">Cairkan</a> -->
                            </div>
                        </div>
                        <table id="datatable_traking_mc" style="font-size: 14px;" class="table table-striped table-bordered">
                            <thead class="bg-primary">
                                <tr>
                                    <th class="text-white">No</th>
                                    <th class="text-white">Uraian</th>
                                    <th class="text-white">PIC</th>
                                    <th class="text-white">Tanggal</th>
                                    <th class="text-white">Catatan</th>
                                    <th class="text-white">Vendor</th>
                                    <th class="text-white">Area</th>
                                    <th class="text-white">Pusat</th>
                                    <th class="text-white">Finance</th>
                                    <th class="text-white">Keterangan</th>
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
</div>
</div>

<div class="modal fade" data-backdrop="false" id="edit_mc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-white">Update Bulan Ini</div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <form action="javascript:;" id="form_mc_edit" method="post">
                        <div class="row">
                            <input type="hidden" name="id_detail_program_penyedia_jasa_edit">
                            <input type="hidden" name="jumlah_mc_edit">
                            <input type="hidden" name="id_mc_edit">
                            <input type="hidden" name="data_no_mc_edit">
                            <div class="col-md-12">
                                <label for="">Jumlah Nilai Kontrak / Mc Bulan Ini</label>
                                <div class="input-group mb-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                </span>
                                                <input type="text" style="font-size:11px" id="jumlah_mc4" class="form-control form-control-sm" name="jumlah_mc_biasa_edit">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" style="font-size:11px" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah-mc-4" name="jumlah_mc_rupiah">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="tanggal_mc">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="nilai_retensi_tanpa_persen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="nilai_retensi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="nilai_uang_muka">
                                </div>
                            </div>
                            <input type="hidden" name="bobot_nilai">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="denda">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" name="persen_ppn">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                            <a href="javascript:;" onclick="Simpan_edit_traking()" class="btn btn-outline-success">Simpan</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" data-backdrop="false" id="modal_pindah_urutan_mc" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pindahkan Urutan Mc</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No Hps</th>
                                <th>Jumlah Mc</th>
                                <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody class="table_result_urutan">

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <a href="javascript:;" onclick="Pencairan_grafik()" class="btn btn-sm btn-danger">Cairkan</a>
            </div>
        </div>
    </div>
</div>

</div>



<!-- Button trigger modal -->