<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> Kelola Surat Kontrak</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/administrasi_penyedia') ?>">Kelola Surat</a></div>
            </div>
        </div>

        <div class="content-wrapper" style="background-color:white">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>">
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-header">
                                        <h5><i class="fa fa-book"></i> Kelola Surat Kontrak</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="card card-primary card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                        <li class="pt-2 px-3">
                                                            <h3 class="card-title"><i class="fas fa fa-envelope"></i></h3>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-two-masterdata-tab" data-toggle="pill" href="#custom-tabs-two-masterdata" role="tab" aria-controls="custom-tabs-two-masterdata" aria-selected="true">Masterdata</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-persuratan-tab" data-toggle="pill" href="#custom-tabs-two-persuratan" role="tab" aria-controls="custom-tabs-two-persuratan" aria-selected="true">Persuratan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-kontrak-tab" data-toggle="pill" href="#custom-tabs-two-kontrak" role="tab" aria-controls="custom-tabs-two-kontrak" aria-selected="false">Kontrak</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-surat_pasca-tab" data-toggle="pill" onclick="Update_Surat_Pasca()" href="#custom-tabs-two-surat_pasca" role="tab" aria-controls="custom-tabs-two-surat_pasca" aria-selected="false">Upload Surat</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                                        <div class="tab-pane fade show active" id="custom-tabs-two-masterdata" role="tabpanel" aria-labelledby="custom-tabs-two-masterdata-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Masterdata
                                                                            </h3>
                                                                        </div>
                                                                        <style>
                                                                            .wrapper1,
                                                                            .wrapper2 {
                                                                                width: 300px;
                                                                                overflow-x: scroll;
                                                                                overflow-y: hidden;
                                                                            }

                                                                            .wrapper1 {
                                                                                height: 20px;
                                                                            }

                                                                            .wrapper2 {
                                                                                height: 200px;
                                                                            }

                                                                            .div1 {
                                                                                width: 1000px;
                                                                                height: 20px;
                                                                            }

                                                                            .div2 {
                                                                                width: 1000px;
                                                                                height: 200px;
                                                                                overflow: auto;
                                                                            }

                                                                            .tableFixHead {
                                                                                font-family: 'RNSSanz-ExtraBold';
                                                                                overflow: auto;
                                                                                height: 100px;

                                                                            }

                                                                            .tableFixHead thead th {
                                                                                background-color: #302B63;
                                                                                font-family: 'RNSSanz-ExtraBold';
                                                                                color: 'white';
                                                                                position: sticky;
                                                                                top: 0;
                                                                            }

                                                                            #customers {
                                                                                font-family: Arial, Helvetica, sans-serif;
                                                                                border-collapse: collapse;
                                                                                width: 100%;
                                                                            }

                                                                            #customers td,
                                                                            #customers th {
                                                                                border: 1px solid #ddd;
                                                                                padding: 8px;
                                                                            }

                                                                            #customers tr:nth-child(even) {
                                                                                background-color: #f2f2f2;
                                                                            }

                                                                            #customers tr:hover {
                                                                                background-color: #ddd;
                                                                            }

                                                                            #customers th {
                                                                                padding-top: 2px;
                                                                                padding-bottom: 2px;
                                                                                text-align: left;
                                                                                background-color: #302B63;
                                                                                color: white;
                                                                            }
                                                                        </style>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <table id="customers" class="tableFixHead" style="font-size: 14px;">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>No</th>
                                                                                                <th>Uraian</th>
                                                                                                <th>Uraian Otomatisasi</th>
                                                                                                <th>Keterangan</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>1</td>
                                                                                                <td scope="row">TKDN %</td>
                                                                                                <td>
                                                                                                    <input type="number" onkeyup="isi_master_pra('tkdn_pra')" name="tkdn_pra" placeholder="TKDN %.." class="form-control">
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>2</td>
                                                                                                <td scope="row">
                                                                                                    Nilai Kontrak <br>
                                                                                                    Terbilang
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="form-group" style="margin-bottom:-2px">
                                                                                                        <div class="input-group colorpickerinput">
                                                                                                            <input type="number" onkeyup="isi_master_pra('harga_penawaran_terkoreksi')" placeholder="Harga Penawaran Terkoreksi..." name="harga_penawaran_terkoreksi" class="form-control">
                                                                                                            <div class="input-group-append">
                                                                                                                <div class="input-group-text">
                                                                                                                    <label for="" class="rupiah_harga_penawaran"></label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <label for="" class="terbilang_rupiah_harga_penawaran"></label>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>3</td>
                                                                                                <td scope="row">Jaminan Pelaksanaan</td>
                                                                                                <td>
                                                                                                    <select class="form-control" name="status_jaminan_gunning" onchange="status_jaminan_gunning('status_jaminan_gunning')" id="">
                                                                                                        <option value="">-- Pilih Jaminan Pelaksanaan --</option>
                                                                                                        <option value="Perlu Jaminan Pelaksanan">Perlu Jaminan Pelaksanan</option>
                                                                                                        <option value="Tidak Perlu Jaminan Pelaksanan">Tidak Perlu Jaminan Pelaksanan</option>
                                                                                                    </select>
                                                                                                    <div class="jika_jaminan">
                                                                                                        <div class="form-group" style="margin-bottom:-2px">
                                                                                                            <input type="number" onkeyup="isi_master_pra('persentase_jaminan_gunning')" name="persentase_jaminan_gunning" placeholder="Persentase Jaminan Pelaksanaan" class="form-control">
                                                                                                            <div class="input-group colorpickerinput">
                                                                                                                <input type="number" onkeyup="isi_master_pra('masa_berlaku_persentase_jaminan_gunning')" placeholder="Masa Berlaku Jaminan Pelaksanaan..." name="masa_berlaku_persentase_jaminan_gunning" class="form-control">
                                                                                                                <div class="input-group-append">
                                                                                                                    <div class="input-group-text">
                                                                                                                        <label for=""> Hari Kalender</label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="jika_tidak_jaminan">

                                                                                                    </div>
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>4</td>
                                                                                                <td scope="row">Syarat Ketentuan (Letter of Intent) </td>
                                                                                                <td>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-9">
                                                                                                            <textarea class="form-control" name="ketentuan"></textarea>
                                                                                                        </div>
                                                                                                        <div class="col-md-2" style="margin-top: 10px;">
                                                                                                            <label for=""><a href="javascript:;" class="btn btn-primary btn-sm" onclick="Simpan_ketentuan('ketentuan')">Simpan</a></label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <br>
                                                                                                    <div id="ketentuan"></div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <!-- Button trigger modal -->
                                                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_copy_ketentuan">
                                                                                                        <i class="fa fa-clipboard"></i> Contoh & Copy
                                                                                                    </button>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade show" id="custom-tabs-two-persuratan" role="tabpanel" aria-labelledby="custom-tabs-two-persuratan-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Master Persuratan
                                                                            </h3>
                                                                        </div>
                                                                        <style>
                                                                            .wrapper1,
                                                                            .wrapper2 {
                                                                                width: 300px;
                                                                                overflow-x: scroll;
                                                                                overflow-y: hidden;
                                                                            }

                                                                            .wrapper1 {
                                                                                height: 20px;
                                                                            }

                                                                            .wrapper2 {
                                                                                height: 200px;
                                                                            }

                                                                            .div1 {
                                                                                width: 1000px;
                                                                                height: 20px;
                                                                            }

                                                                            .div2 {
                                                                                width: 1000px;
                                                                                height: 200px;
                                                                                overflow: auto;
                                                                            }

                                                                            .tableFixHead {
                                                                                font-family: 'RNSSanz-ExtraBold';
                                                                                overflow: auto;
                                                                                height: 100px;

                                                                            }

                                                                            .tableFixHead thead th {
                                                                                background-color: #302B63;
                                                                                font-family: 'RNSSanz-ExtraBold';
                                                                                color: 'white';
                                                                                position: sticky;
                                                                                top: 0;
                                                                            }

                                                                            #customers {
                                                                                font-family: Arial, Helvetica, sans-serif;
                                                                                border-collapse: collapse;
                                                                                width: 100%;
                                                                            }

                                                                            #customers td,
                                                                            #customers th {
                                                                                border: 1px solid #ddd;
                                                                                padding: 8px;
                                                                            }

                                                                            #customers tr:nth-child(even) {
                                                                                background-color: #f2f2f2;
                                                                            }

                                                                            #customers tr:hover {
                                                                                background-color: #ddd;
                                                                            }

                                                                            #customers th {
                                                                                padding-top: 2px;
                                                                                padding-bottom: 2px;
                                                                                text-align: left;
                                                                                background-color: #302B63;
                                                                                color: white;
                                                                            }

                                                                            #customers2 {
                                                                                font-family: Arial, Helvetica, sans-serif;
                                                                                border-collapse: collapse;
                                                                                width: 100%;
                                                                            }

                                                                            #customers2 td,
                                                                            #customers2 th {
                                                                                border: 1px solid #ddd;
                                                                                padding: 8px;
                                                                            }

                                                                            #customers2 tr:nth-child(even) {
                                                                                background-color: #f2f2f2;
                                                                            }

                                                                            #customers2 tr:hover {
                                                                                background-color: #ddd;
                                                                            }

                                                                            #customers2 th {
                                                                                padding-top: 2px;
                                                                                padding-bottom: 2px;
                                                                                text-align: left;
                                                                                background-color: #302B63;
                                                                                color: white;
                                                                            }
                                                                        </style>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div onscroll='scroller("scroller", "scrollme")' style="overflow:scroll; height: 10;overflow-y: hidden;" id=scroller>
                                                                                        <img src="" height=1 width=2066 style="width:2066px;">
                                                                                    </div>
                                                                                    <div onscroll='scroller("scrollme", "scroller")' style="overflow:scroll; height:500px" id="scrollme">
                                                                                        <br>
                                                                                        <hr>
                                                                                        <center>
                                                                                            <h4>MASTER PERSURATAN GUNNING</h4>
                                                                                        </center>
                                                                                        <br>
                                                                                        <table id="customers" class="tableFixHead" style="font-size: 14px;">
                                                                                            <thead class="text-center">
                                                                                                <tr>
                                                                                                    <th class="text-white">No</th>
                                                                                                    <th class="text-white" style="width: 200px;">Nama Persuratan</th>
                                                                                                    <th class="text-white">No Surat</th>
                                                                                                    <th class="text-white">Tgl Surat</th>
                                                                                                    <th class="text-white">No Surat Pengumuman Pemenang</th>
                                                                                                    <th class="text-white">Tgl Surat Pengumuman Pemenang</th>
                                                                                                    <th class="text-white">No Surat Penetapan Pemenang</th>
                                                                                                    <th class="text-white">Tgl Surat Penetapan Pemenang</th>
                                                                                                    <th class="text-white">Dari Nama Penetapan</th>
                                                                                                    <th class="text-white">Dari Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Ke Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Informasi</th>
                                                                                                    <th class="text-white">View</th>
                                                                                                    <th class="text-white">Download Word/Pdf</th>
                                                                                                </tr>

                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td scope="row">1</td>
                                                                                                    <td>GUNNING</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_gunning')" value="<?= $row_program['no_surat_gunning'] ?>" name="no_surat_gunning" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tanggal_gunning')" value="<?= $row_program['tanggal_gunning'] ?>" name="tanggal_gunning" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_pengumuman_gunning')" value="<?= $row_program['no_surat_pengumuman_gunning'] ?>" name="no_surat_pengumuman_gunning" placeholder="No Surat Penetapan"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tanggal_surat_pengumuman_gunning')" value="<?= $row_program['tanggal_surat_pengumuman_gunning'] ?>" name="tanggal_surat_pengumuman_gunning" placeholder="Tanggal Surat Penetapan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_penetapan_gunning')" value="<?= $row_program['no_surat_penetapan_gunning'] ?>" name="no_surat_penetapan_gunning" placeholder="No Surat Penetapan"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tanggal_surat_penetapan_gunning')" value="<?= $row_program['tanggal_surat_penetapan_gunning'] ?>" name="tanggal_surat_penetapan_gunning" placeholder="Tanggal Surat Penetapan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('nama_penetapan_dari')" value="<?= $row_program['nama_penetapan_dari'] ?>" name="nama_penetapan_dari" placeholder="Penetapan Pemenang Dari"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_gunning')" value="<?= $row_program['pengirim_gunning'] ?>" name="pengirim_gunning" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_gunning')" value="<?= $row_program['jabatan_pengirim_gunning'] ?>" name="jabatan_pengirim_gunning" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_gunning')" value="<?= $row_program['penerima_gunning'] ?>" name="penerima_gunning" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_gunning')" value="<?= $row_program['jabatan_penerima_gunning'] ?>" name="jabatan_penerima_gunning" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><label for="" title="Struktur Organisasi" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_gunning/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>

                                                                                        <br>
                                                                                        <hr>
                                                                                        <center>
                                                                                            <h4>MASTER PERSURATAN LOI</h4>
                                                                                        </center>
                                                                                        <br>
                                                                                        <table id="customers2" class="tableFixHead" style="font-size: 14px;">
                                                                                            <thead class="text-center">
                                                                                                <tr>
                                                                                                    <th class="text-white">No</th>
                                                                                                    <th class="text-white" style="width: 200px;">Nama Persuratan</th>
                                                                                                    <th class="text-white">No Surat</th>
                                                                                                    <th class="text-white">Tgl Surat</th>
                                                                                                    <th class="text-white">No Surat Penunjukan</th>
                                                                                                    <th class="text-white">Tgl Surat Penunjukan</th>
                                                                                                    <th class="text-white">Dari Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Ke Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Informasi</th>
                                                                                                    <th class="text-white">View</th>
                                                                                                    <th class="text-white">Download Word/Pdf</th>
                                                                                                </tr>

                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td scope="row">2</td>
                                                                                                    <td>LOI</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_loi')" value="<?= $row_program['no_surat_loi'] ?>" name="no_surat_loi" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tanggal_loi')" value="<?= $row_program['tanggal_loi'] ?>" name="tanggal_loi" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_penunjukan_loi')" value="<?= $row_program['no_surat_penunjukan_loi'] ?>" name="no_surat_penunjukan_loi" placeholder="No Surat Penunjukan"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tanggal_surat_penunjukan_loi')" value="<?= $row_program['tanggal_surat_penunjukan_loi'] ?>" name="tanggal_surat_penunjukan_loi" placeholder="Tanggal Surat Penunjukan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_loi')" value="<?= $row_program['pengirim_loi'] ?>" name="pengirim_loi" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_loi')" value="<?= $row_program['jabatan_pengirim_loi'] ?>" name="jabatan_pengirim_loi" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_loi')" value="<?= $row_program['penerima_loi'] ?>" name="penerima_loi" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_loi')" value="<?= $row_program['jabatan_penerima_loi'] ?>" name="jabatan_penerima_loi" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><label for="" title="Struktur Organisasi" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_loi/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>

                                                                                        <br>
                                                                                        <hr>
                                                                                        <center>
                                                                                            <h4>MASTER PERSURATAN SHO</h4>
                                                                                        </center>
                                                                                        <br>
                                                                                        <table id="customers2" class="tableFixHead" style="font-size: 14px;">
                                                                                            <thead class="text-center">
                                                                                                <tr>
                                                                                                    <th class="text-white">No</th>
                                                                                                    <th class="text-white" style="width: 200px;">Nama Persuratan</th>
                                                                                                    <th class="text-white">No Surat</th>
                                                                                                    <th class="text-white">Tgl Surat</th>
                                                                                                    <th class="text-white">Dari Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Ke Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Informasi</th>
                                                                                                    <th class="text-white">View</th>
                                                                                                    <th class="text-white">Download Word/Pdf</th>
                                                                                                </tr>

                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td scope="row">3</td>
                                                                                                    <td>SHO</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_sho')" value="<?= $row_program['no_surat_sho'] ?>" name="no_surat_sho" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tanggal_sho')" value="<?= $row_program['tanggal_sho'] ?>" name="tanggal_sho" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_sho')" value="<?= $row_program['pengirim_sho'] ?>" name="pengirim_sho" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_sho')" value="<?= $row_program['jabatan_pengirim_sho'] ?>" name="jabatan_pengirim_sho" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_sho')" value="<?= $row_program['penerima_sho'] ?>" name="penerima_sho" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_sho')" value="<?= $row_program['jabatan_penerima_sho'] ?>" name="jabatan_penerima_sho" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><label for="" title="Struktur Organisasi" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_sho/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>

                                                                                        <br>
                                                                                        <hr>
                                                                                        <center>
                                                                                            <h4>MASTER PERSURATAN SPMK</h4>
                                                                                        </center>
                                                                                        <br>
                                                                                        <table id="customers2" class="tableFixHead" style="font-size: 14px;">
                                                                                            <thead class="text-center">
                                                                                                <tr>
                                                                                                    <th class="text-white">No</th>
                                                                                                    <th class="text-white" style="width: 200px;">Nama Persuratan</th>
                                                                                                    <th class="text-white">No Surat</th>
                                                                                                    <th class="text-white">Tgl Surat</th>
                                                                                                    <th class="text-white">Dari Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Ke Nama</th>
                                                                                                    <th class="text-white">Jabatan</th>
                                                                                                    <th class="text-white">Informasi</th>
                                                                                                    <th class="text-white">View</th>
                                                                                                    <th class="text-white">Download Word/Pdf</th>
                                                                                                </tr>

                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td scope="row">4</td>
                                                                                                    <td>SPMK</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_spmk')" value="<?= $row_program['no_surat_spmk'] ?>" name="no_surat_spmk" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tanggal_spmk')" value="<?= $row_program['tanggal_spmk'] ?>" name="tanggal_spmk" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_spmk')" value="<?= $row_program['pengirim_spmk'] ?>" name="pengirim_spmk" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_spmk')" value="<?= $row_program['jabatan_pengirim_spmk'] ?>" name="jabatan_pengirim_spmk" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_spmk')" value="<?= $row_program['penerima_spmk'] ?>" name="penerima_spmk" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_spmk')" value="<?= $row_program['jabatan_penerima_spmk'] ?>" name="jabatan_penerima_spmk" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><label for="" title="Struktur Organisasi" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_spmk/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
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
                                                        <div class="tab-pane" id="custom-tabs-two-kontrak" role="tabpanel" aria-labelledby="custom-tabs-two-kontrak-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">
                                                                                Kontrak
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="card card-outline card-primary">
                                                                                    <div class="card-header">
                                                                                        <h3 class="card-title">
                                                                                            No Kontrak
                                                                                        </h3>
                                                                                    </div>
                                                                                    <form id="form_no_kontrak_penyedia" action="javascript;;">
                                                                                        <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                                                                        <div class="card-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <label for="">No Kontrak</label>
                                                                                                    <div class="input-group mb-4">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="far fa-file"> </i>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <input type="text" class="form-control" name="no_kontrak_penyedia" placeholder="No Kontrak">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label for="">Tanggal Kontrak</label>
                                                                                                    <div class="input-group mb-4">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="far fa-file"> </i>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <input type="date" class="form-control" name="tanggal_kontrak_program" placeholder="No Kontrak">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label for="">Tahun Kontrak</label>
                                                                                                    <div class="input-group mb-4">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="far fa-file"> </i>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        <select name="tahun_kontrak_program" class="form-control">
                                                                                                            <?php $i = 0;
                                                                                                            for ($i = 20; $i < 30; $i++) {  ?>
                                                                                                                <option value="20<?= $i ?>">20<?= $i ?></option>
                                                                                                            <?php  } ?>

                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="card card-outline card-info">
                                                                                                        <div class="card-header">
                                                                                                            <h3 class="card-title">
                                                                                                                <!-- danang -->
                                                                                                                Upload Kontrak
                                                                                                            </h3>
                                                                                                        </div>
                                                                                                        <div class="card-body">
                                                                                                            <div class="container">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="card card-outline card-primary">
                                                                                                                            <div class="card-header">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-10">
                                                                                                                                        Upload Kontrak
                                                                                                                                    </div>
                                                                                                                                    <div class="col-md-2">
                                                                                                                                        <a href="javascript:;" class="btn btn-sm btn-danger" onclick="upload_kontrak_hps('1')">Upload</a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="card-body">
                                                                                                                                <table class="table">
                                                                                                                                    <thead>
                                                                                                                                        <tr>
                                                                                                                                            <th>File</th>
                                                                                                                                            <th>Aksi</th>
                                                                                                                                        </tr>
                                                                                                                                    </thead>
                                                                                                                                    <tbody id="tbl_upload_kontrak">

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
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <button type="button" onclick="simpan_data_no_kontrak()" class="btn btn-sm btn-success float-right"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="custom-tabs-two-surat_pasca" role="tabpanel" aria-labelledby="custom-tabs-two-surat_pasca-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h5 class="card-title">
                                                                                Upload Surat
                                                                            </h5>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Gunning
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_gunning">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Loi
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_loi">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Sho
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_sho">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Spmk
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table table-striped">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="text-center" id="result_dokumen_spmk">

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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" data-backdrop="false" id="modal_upload_dokumen_pasca" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title"> Upload Surat <label for="" id="name_file"></label></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <center>
                                                        <form id="form_upload_surat_pasca" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_dokumen_surat_pasca">
                                                            <div class="input-group col-md-12">
                                                                <div class="input-group-append">
                                                                    <button class="input-group-text attach_btn btn-grad100" type="button" id="loadFileXml" value="loadXml" onclick="document.getElementById('file').click();"><i class="fas fa-paperclip"></i></button>
                                                                    <input type="file" style="display:none;" id="file" class="file" name="file" />
                                                                </div>
                                                                <input type="text" name="nama_file" class="form-control" disabled>
                                                                <div class="input-group-append">
                                                                    <button type="submit" id="upload" name="upload" class="input-group-text  btn-grad100"><i class="fas fa-upload"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <br>
                                                        <div style="display: none;" id="error_file" class="alert alert-danger" role="alert">
                                                            ANDA BELUM MENGISI FILE !!!
                                                        </div>
                                                    </center>
                                                    <br>
                                                    <center>
                                                        <div class="form-group col-md-6" id="process" style="display:none;">
                                                            <small for="" style="display:none;" id="sedang_dikirim">Sedang Mengupload....</small>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    </div>
            </section>
            <!-- /.content -->
        </div>
</div>
</div>

<div class="modal fade" data-backdrop="false" id="modal_upload_dokumen_kontrak_hps" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"> Upload <label for="" id="kontrak_hps"></label></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_upload_kontrak_hps" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="container-fluid">
                        <center>
                            <input type="hidden" name="sts_dokumen">
                            <input type="hidden" name="id_detail_program_penyedia_jasa">
                            <input type="file" name="nama_file" class="form-control">
                            <div style="display: none;" id="error_file1" class="alert alert-danger" role="alert">
                                ANDA BELUM MENGISI FILE !!!
                            </div>
                        </center>
                        <br>
                        <center>
                            <div class="form-group col-md-6" id="process_kontrakhps" style="display:none;">
                                <small for="" style="display:none;" id="sedang_dikirim_kontrakhps">Sedang Mengupload....</small>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal_copy_ketentuan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">COPY PENGISIAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1. Lingkup pekerjaan yang dapat dimulai terlebih dahulu meliputi pekerjaan persiapan, diantaranya mobilisasi personil, peralatan, material, laboratorium serta koordinasi dengan pihak-pihak terkait.
                </p>
                <p>
                    2. Pekerjaan tersebut harus dilaksanakan sesuai dengan persyaratan pelaksanaan pekerjaan (syarat-syarat umum, administrasi, spesifikasi maupun gambar rencana) yang telah ditetapkan dalam Dokumen Pengadaan.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</section>
</div>