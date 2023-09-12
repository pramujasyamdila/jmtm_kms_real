<div class="main-content">
    <div class="section">

        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 4 : ANNALISA HARGA SATUAN
            </b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 4 - ANNALISA HARGA SATUAN
                </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">Modul ini bertujuan untuk melihat Tracking Tagihan Penyedia Jasa yang masuk ke dalam Aplikasi Kontrak Manajemen
            </h6>
        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> FILTER URAIAN HARGA SATUAN</b></h4>
            <div class="row" style="padding-left:90px">
                <div class="col-md-8">
                    <select name="cari_uraian_hps" id="cari_uraian_hps" class="form-control">
                        <option value="">Filter Uraian HPS</option>
                        <?php foreach ($get_all_hps as $key => $value) { ?>
                            <option value="<?= $value['uraian_hps'] ?>"><?= $value['uraian_hps'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" id="filter_hps" class="btn btn-xl btn-primary" style="background-color: #302B63;"><i class="fas fa fa-search"></i> Cari Uraian Hps</a>
                </div>
            </div>
            <br>
            <div class="row" style="padding-left:90px">
                <div class="col-md-8">
                    <select name="cari_uraian_hps_kontrak" id="cari_uraian_hps_kontrak" class="form-control">
                        <option value="">Filter Uraian HPS Kontrak</option>
                        <?php foreach ($get_all_hps_kontrak as $key => $value) { ?>
                            <option value="<?= $value['uraian_hps'] ?>"><?= $value['uraian_hps'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" id="filter_hps_kontrak" class="btn btn-xl btn-primary" style="background-color: #302B63;"><i class="fas fa fa-search"></i> Cari Uraian Hps Kontrak</a>
                </div>
            </div>
        </div>
        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px;">
            <h4 style="margin: 20px;">RESULT FILTER ANNALISA HARGA SATUAN HPS</h4>
            <div class="data_vendor_pekerjaan" style="overflow-x: auto;padding:50px">
                <table id="tbl_uraian_hps" style="width: 100%; font-family: 'Poppins', sans-serif;" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian Hps</th>
                            <th>Departemen</th>
                            <th>Area</th>
                            <th>Sub Area</th>
                            <th>Harga Satuan</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <br>
            <h4 style="margin: 20px;">RESULT FILTER ANNALISA HARGA SATUAN KONTRAK</h4>
            <div class="data_vendor_pekerjaan" style="overflow-x: auto;padding:50px">
                <table id="tbl_uraian_hps_kontrak" style="width: 100%; font-family: 'Poppins', sans-serif;" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian Hps</th>
                            <th>Departemen</th>
                            <th>Area</th>
                            <th>Sub Area</th>
                            <th>Harga Satuan</th>
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