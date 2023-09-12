<div class="main-content">
    <div class="section">

        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 4 : TRACKING TAGIHAN PENYEDIA JASA
            </b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 4 - TRACKING TAGIHAN PENYEDIA JASA
                </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">Modul ini bertujuan untuk melihat Tracking Tagihan Penyedia Jasa yang masuk ke dalam Aplikasi Kontrak Manajemen
            </h6>
        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> FILTER NAMA VENDOR </b></h4>
            <div class="row" style="padding-left:90px">
                <div class="col-md-8">
                    <select name="cari_nama_vendor" id="cari_nama_penyedia" class="form-control">
                        <option value="">Filter Nama Penyedia</option>
                        <?php foreach ($detail_program as $key => $value) { ?>
                            <option value="<?= $value['nama_penyedia'] ?>"><?= $value['nama_penyedia'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" id="filter" class="btn btn-xl btn-primary" style="background-color: #302B63;"><i class="fas fa fa-search"></i> Cari Penyedia</a>
                </div>
            </div>
        </div>
        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px;">
            <div class="data_vendor_pekerjaan" style="overflow-x: auto;display:none;padding:50px">
                <table id="tbl_pekerjaan_penyedia" style="width: 100%; font-family: 'Poppins', sans-serif;" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pekerjaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px;">
            <br>
            <center>
                <h4 style="font-family: 'Poppins', sans-serif;">RATA-RATA KINERJA TAGIHAN PENYEDIA JASA <label for="" class="nama_vendor_all"></label>
                </h4>
            </center>
            <div class="data_vendor_pekerjaan_average" style="overflow-x: auto;padding:50px;display:none">
                <center>
                    <div class="row">
                        <div class="col-md-3">
                            <a class="btn text-white" style="width: 200px;height:50px;font-size:20px;background-color: #302B63;">VENDOR</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn text-white" style="width: 200px;height:50px;font-size:20px;background-color: #302B63">AREA</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn text-white" style="width: 200px;height:50px;font-size:20px;background-color: #302B63">PUSAT</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn text-white" style="width: 200px;height:50px;font-size:20px;background-color: #302B63">FINANCE</a>
                        </div>
                    </div>
                </center>
                <br>
                <center>
                    <div class="row">
                        <div class="col-md-3">
                            <a class="btn btn-danger text-white" style="width: 200px;height:50px;font-size:20px"><label for="" class="average_vendor_all"></label></a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-warning text-white" style="width: 200px;height:50px;font-size:20px"><label for="" class="average_area_all"></label></a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-success text-white" style="width: 200px;height:50px;font-size:20px"><label for="" class="average_pusat_all"></label></a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-success text-white" style="width: 200px;height:50px;font-size:20px"><label for="" class="average_finance_all"></label></a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #302B63;">
                <h5 class="modal-title">DETAIL MC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 style="font-family: 'Poppins', sans-serif;">Nama Pekerjaan : <label for="" class="nama_pekerjaan"></label></h6> <br>
                <h6 style="font-family: 'Poppins', sans-serif;">Penyedia : <label for="" class="nama_penyedia"></label> </h6>
                <br>
                <div style="overflow-x: auto;">
                    <table style="width: 100%;font-family: 'Poppins', sans-serif;" class="table">
                        <thead>
                            <tr>
                                <th>MC KE</th>
                                <th>PERIODE</th>
                                <th>SERTIFIKAT BULAN INI (SETELAH PPN)</th>
                                <th>STATUS TERAKHIR TRACKING</th>
                                <th>TANGGAL UPDATE TRACKING</th>
                                <th>VENDOR</th>
                                <th>AREA</th>
                                <th>PUSAT</th>
                                <th>FINANCE</th>
                            </tr>
                        </thead>
                        <tbody class="result_mc">

                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Average</td>
                                <td><label for="" class="average_vendor"></label></td>
                                <td><label for="" class="average_area"></label></td>
                                <td><label for="" class="average_pusat"></label></td>
                                <td><label for="" class="average_finance"></label></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>