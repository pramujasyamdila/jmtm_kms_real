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
                                            <div class="row" style="width: 100%;background-color: #302B63;font-family: RNSSanz-ExtraBold;padding:20px;border-radius:20px">
                                                <div class="row col-md-4">
                                                    <label for="" class="text-white">PILIH FLOW DOKUMEN</label>
                                                    <select name="flow_pra_dokumen_kontrak" class="form-control" id="">
                                                        <?php if ($row_program['flow_pra_dokumen_kontrak'] == null) { ?>
                                                            <option value="">-- Pilih Flow --</option>
                                                        <?php    } else { ?>
                                                            <?php if ($row_program['flow_pra_dokumen_kontrak'] == 'Flow 1') { ?>
                                                                <option value="<?= $row_program['flow_pra_dokumen_kontrak'] ?>"><?= $row_program['flow_pra_dokumen_kontrak'] ?> Dirops</option>
                                                            <?php    } else { ?>
                                                                <option value="<?= $row_program['flow_pra_dokumen_kontrak'] ?>"><?= $row_program['flow_pra_dokumen_kontrak'] ?> Dirut</option>
                                                            <?php } ?> <?php } ?>
                                                        <option value="Flow 1">Flow 1 Dirops</option>
                                                        <option value="Flow 2">Flow 2 Dirut</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="javascript:;" onclick="Pilih_flow()" style="margin-top: 30px;" class="btn btn-success"> <i class="fas fa fa-save"></i> Simpan Flow Dokumen</a>
                                                </div>
                                            </div>
                                            <br>

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
                                                            <a class="nav-link" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Ijin Prinsip</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Persetujuan Hps</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Nota Dinas</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" onclick="Update()" id="custom-tabs-two-surat-tab" data-toggle="pill" href="#custom-tabs-two-surat" role="tab" aria-controls="custom-tabs-two-surat" aria-selected="false">Upload Surat</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-kontrakhps-tab" data-toggle="pill" href="#custom-tabs-two-kontrakhps" role="tab" aria-controls="custom-tabs-two-kontrakhps" aria-selected="false">Upload Kontrak dan HPS</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                                        <!-- PIP -->
                                                        <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                                            <div class="card card-outline card-primary">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">
                                                                        Persetujuan & Permohonan Ijin Prinsip
                                                                    </h3>
                                                                </div>
                                                                <br>
                                                                <div class="container">
                                                                    <select name="flow_2_ip" onchange="flow_2_ip()" class="form-control">
                                                                        <option value="">--Pilih Surat IP--</option>
                                                                        <option value="1">Permohonan IP CA ke GM</option>
                                                                        <option value="2">Permohonan IP GM ke DIROPS</option>
                                                                        <option value="4">Persetujuan IP GM ke DIROPS</option>
                                                                    </select>
                                                                </div>
                                                                <br>
                                                                <div class="render">

                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;" onclick="Simpan_semua_surat('pip')" class="btn btn-sm btn-success">Simpan Surat PIP</a>
                                                            </div>
                                                        </div>
                                                        <!-- Hps -->
                                                        <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-warning">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Persetujuan & Permohonan Hps
                                                                            </h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <br>
                                                                            <div class="container">
                                                                                <select name="flow_2_hps" onchange="flow_2_hps()" class="form-control">
                                                                                    <option value="">--Pilih Surat IP--</option>
                                                                                    <option value="1">Permohonan HPS CA ke GM</option>
                                                                                    <option value="2">Permohonan HPS GM ke DIROPS</option>
                                                                                    <option value="4">Persetujuan HPS DIROPS ke GM</option>
                                                                                </select>
                                                                            </div>
                                                                            <br>
                                                                            <div class="render_hps">

                                                                            </div>
                                                                            <div>
                                                                                <a href="javascript:;" onclick="Simpan_semua_surat('phps')" class="btn btn-sm btn-success">Simpan Surat HPS</a>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Nota Dinas -->
                                                        <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Nota Dinas
                                                                            </h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <h1>NOTA DINAS</h1>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>



                                                                                <div class="row mt-5">
                                                                                    <div class="col-md-1">
                                                                                        Nomor
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <h5>: <input type="text" name="no_surat_nota"></h5>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <input type="date" name="tgl_surat_nota">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Lampiran
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <h5>: <input type="text" name="lampiran_nota"> </h5>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Perihal
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <h5>: Permohonan Pelaksanaan Pengadaan <b for="" class="jenis_pengadaan"></b> <b for="" class="nama_pekerjaan"></b> </h5>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Kepada
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <h5>: Procurement General Manager </h5>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-1">
                                                                                        Dari
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <h5>: <b class="nama_departemen"></b> General Manager </h5>
                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                    <div class="col-md-2">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mt-3">
                                                                                    <div style="background-color:black;width:100%;height:3px">

                                                                                    </div>
                                                                                    <div class="mt-2">
                                                                                        <h5>Sehubungan dengan telah ditetapkannya nilai Kontrak Manajemen Bidang Pemeliharaan Jalan Tol
                                                                                            Pada Ruas Jalan Tol <b class="nama_area"></b> Tahun 2022 serta Persetujuan Harga Perkiraan Sendini (HPS)
                                                                                            oleh Direktur Operasi PT JMTM, dengan memperhatikan Surat Keputusan Direksi Nomor 120/DIR-
                                                                                            /K9TS/2021 tanggal 12 November 2021 tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa di
                                                                                            Lingkungan PT Jasamarga Tollroad Maintenance, melalui surat ini kami mohon untuk dapat
                                                                                            dilaksanakan kegiatan pengadaan jasa pada pekerjaan sebagai berikut :
                                                                                        </h5>
                                                                                    </div>

                                                                                    <div class="row mt-3">

                                                                                        <table class="table table-bordered" style="width:100%">
                                                                                            <tr>
                                                                                                <th>
                                                                                                    No.
                                                                                                </th>
                                                                                                <th>
                                                                                                    Nama Pekerjaan
                                                                                                </th>
                                                                                                <th>
                                                                                                    Nilai Hps(Rp)
                                                                                                </th>
                                                                                                <th>
                                                                                                    Perkiraan Waktu Pelaksanaan
                                                                                                </th>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    1
                                                                                                </td>
                                                                                                <td>
                                                                                                    <b for="" class="nama_pekerjaan"></b>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <b for="" class="total_hps_pure"></b>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <b for="" class="waktu_pelaksanaan_pip"></b> Hari Kalender
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>

                                                                                        <div class="row mt-4">
                                                                                            <h5>
                                                                                                Demikian disampaikan, atas perhatian dan kerja sama yang baik, kami ucapkan terima kasih.
                                                                                            </h5>
                                                                                        </div>
                                                                                        <br>

                                                                                        <div class="row mt-4">
                                                                                            <div class="col-md-2">

                                                                                            </div>

                                                                                            <div class="col-md-10">
                                                                                                <center>
                                                                                                    <br>
                                                                                                    <br>
                                                                                                    <br><br><br><br>
                                                                                                    <h5><input type="text" name="nama_nota_dinas"></h5>
                                                                                                    <div style="background-color:black;width:100%;height:3px">

                                                                                                    </div>
                                                                                                    <!-- kondisi role -->
                                                                                                    <h5><b class="nama_departemen"></b> General Manager
                                                                                                    </h5>
                                                                                                </center>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <br><br><br>
                                                                                                <h5>Tembusan, Yth
                                                                                                    Direktur Operasi (sebagai laporan)</h5>
                                                                                                <br><br><br>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <a href="javascript:;" onclick="Simpan_semua_surat('nota')" class="btn btn-sm btn-success">Simpan Surat Nota Dinas</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- SURAT -->
                                                        <div class="tab-pane fade" id="custom-tabs-two-kontrakhps" role="tabpanel" aria-labelledby="custom-tabs-two-surat-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                <!-- danang -->
                                                                                Upload HPS
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
                                                                                                        Upload HPS
                                                                                                    </div>
                                                                                                    <div class="col-md-2">
                                                                                                        <a href="javascript:;" class="btn btn-sm btn-danger" onclick="upload_kontrak_hps('2')">Upload</a>
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
                                                                                                    <tbody id="tbl_upload_hps">

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

                                                        <!-- kontrak hps -->
                                                        <!-- SURAT -->
                                                        <div class="tab-pane fade" id="custom-tabs-two-surat" role="tabpanel" aria-labelledby="custom-tabs-two-surat-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="card card-outline card-info">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">
                                                                                Upload Surat
                                                                            </h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Upload Surat Ijin Prinsip
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody id="result_dokumen_pip">

                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Upload Surat HPS
                                                                                            </div>
                                                                                            <div class="card-body">
                                                                                                <table class="table">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>Nama Surat</th>
                                                                                                            <th>File</th>
                                                                                                            <th>Aksi</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody id="result_dokumen_hps">


                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="card card-outline card-primary">
                                                                                            <div class="card-header">
                                                                                                Upload Surat Nota Dinas
                                                                                                <div class="card-body">
                                                                                                    <table class="table">
                                                                                                        <thead>
                                                                                                            <tr>
                                                                                                                <th>Nama Surat</th>
                                                                                                                <th>File</th>
                                                                                                                <th>Aksi</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody id="result_dokumen_nota_dinas">

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
                                                                                    <div onscroll='scroller("scroller", "scrollme")' style="overflow:scroll; height: 10;overflow-y: hidden;" id=scroller>
                                                                                        <img src="" height=1 width=2066 style="width:2066px;">
                                                                                    </div>
                                                                                    <div onscroll='scroller("scrollme", "scroller")' style="overflow:scroll; height:500px" id="scrollme">
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
                                                                                                    <td scope="row">Jenis Pengadaan</td>
                                                                                                    <td>
                                                                                                        <select name="jenis_pengadaan" onchange="pilih_status_spm('jenis_pengadaan')" class="form-control">
                                                                                                            <option value="">-- Pilih Jenis Pengadaan --</option>
                                                                                                            <option value="Penyedia Barang">Penyedia Barang</option>
                                                                                                            <option value="Jasa Pemborongan">Jasa Pemborongan</option>
                                                                                                            <option value="Jasa Lain">Jasa Lain</option>
                                                                                                            <option value="Jasa Konsultasi">Jasa Konsultasi</option>
                                                                                                            <option value="Jasa Konsultasi Perorangan">Jasa Konsultasi Perorangan</option>
                                                                                                            <option value="Jasa Konsultasi">Jasa Konsultasi</option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>2</td>
                                                                                                    <td scope="row">Nama Pekerjaan</td>
                                                                                                    <td>
                                                                                                        <label for=""><?= $row_program['nama_pekerjaan_program_mata_anggaran'] ?></label>
                                                                                                    </td>
                                                                                                    <td><label for="" title="Nama Pekerjaan diambil saat membuat mata anggaran" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>3</td>
                                                                                                    <td scope="row">Lokasi Pekerjaan</td>
                                                                                                    <td>
                                                                                                        <label for="">Ruas Jalan Tol <?= $row_program['nama_sub_area'] ?></label>
                                                                                                    </td>
                                                                                                    <td><label for="" title="Lokasi Pekerjaan diambil mengikuti sub-area kontrak manajemen yang dipilih" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>4</td>
                                                                                                    <td scope="row">Sasaran Pekerjaan</td>
                                                                                                    <td>
                                                                                                        <select name="status_spm" onchange="pilih_status_spm('status_spm')" class="form-control">
                                                                                                            <option value="">-- Pilih Status SPM --</option>
                                                                                                            <option value="SPM">SPM</option>
                                                                                                            <option value="NON SPM">NON SPM</option>
                                                                                                        </select>
                                                                                                        <div class="jika_dipilih_spm" style="display: none;">
                                                                                                            <br>
                                                                                                            <select class="form-control" name="id_spm" onchange="pilih_spm()">
                                                                                                                <option value="">-- Pilih SPM --</option>
                                                                                                                <?php foreach ($get_spm as $key => $value) { ?>
                                                                                                                    <option value="<?= $value['id_spm'] ?>"><?= $value['nama_spm'] ?></option>
                                                                                                                <?php } ?>
                                                                                                            </select><br>
                                                                                                            <div class="result_spm"></div>
                                                                                                        </div>
                                                                                                        <div class="jika_dipilih_non_spm" style="display: none;">
                                                                                                            <input class="form-control" type="text" onkeyup="pilih_status_non_spm('ket_non_spm')" name="ket_non_spm" placeholder="Ket Non Spm">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>5</td>
                                                                                                    <td scope="row">Pagu Biaya (Setelah PPN)</td>
                                                                                                    <td>
                                                                                                        <br>
                                                                                                        <?php
                                                                                                        $total_pagu = 0;
                                                                                                        $total_hps = 0;
                                                                                                        ?>
                                                                                                        <?php foreach ($result_sub_program as $key => $value) { ?>

                                                                                                            <?php
                                                                                                            $total_pagu += $value['nilai_program_mata_anggran'];
                                                                                                            $total_hps += $value['nilai_hps'];
                                                                                                            ?>
                                                                                                            <p style="margin-top: -20px;"><?= $value['nama_program_mata_anggaran'] ?></p>
                                                                                                            <p style="margin-top: -20px;"><?= "Rp " . number_format($value['nilai_program_mata_anggran'], 2, ',', '.') ?></p>
                                                                                                        <?php  } ?>
                                                                                                        <p style="margin-top: -20px;">Total</p>
                                                                                                        <p style="margin-top: -20px;"><?= "Rp " . number_format($total_pagu, 2, ',', '.') ?></p>

                                                                                                    </td>
                                                                                                    <td><label for="" title="Nilai Pagu diambil dari Tabel Pra Pengadaan Pekerjaan ...otomatis nama...." class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>6</td>
                                                                                                    <td scope="row">Perkiraan Biaya (Setelah PPN)</td>
                                                                                                    <td>
                                                                                                        <br>
                                                                                                        <?php
                                                                                                        $total_pagu = 0;
                                                                                                        $total_hps = 0;
                                                                                                        ?>
                                                                                                        <?php foreach ($result_sub_program as $key => $value) { ?>

                                                                                                            <?php
                                                                                                            $total_hps += $value['nilai_hps'];
                                                                                                            ?>
                                                                                                            <p style="margin-top: -20px;"><?= $value['nama_program_mata_anggaran'] ?></p>
                                                                                                            <p style="margin-top: -20px;"><?= "Rp " . number_format($value['nilai_hps'], 2, ',', '.') ?></p>
                                                                                                        <?php  } ?>
                                                                                                        <p style="margin-top: -20px;">Total</p>
                                                                                                        <p style="margin-top: -20px;"><?= "Rp " . number_format($total_hps, 2, ',', '.') ?></p>

                                                                                                    </td>
                                                                                                    <td><label for="" title="Nilai Perkiraan Biaya diambil Dari Tabel Pra Pengadaan Pekerjaan ...otomatis nama...." class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>7</td>
                                                                                                    <td scope="row">PPN yang digunakan</td>
                                                                                                    <td>
                                                                                                        <p>10/11/12%</p>
                                                                                                    <td></td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td>8</td>
                                                                                                    <td scope="row">Waktu Pelaksanaan</td>
                                                                                                    <td>
                                                                                                        <div class="form-group">
                                                                                                            <div class="input-group colorpickerinput">
                                                                                                                <input type="number" onkeyup="pilih_status_non_spm('waktu_pelaksanaan_pip')" placeholder="Waktu Pelaksanaan..." name="waktu_pelaksanaan_pip" class="form-control">
                                                                                                                <div class="input-group-append">
                                                                                                                    <div class="input-group-text">
                                                                                                                        <label for="" class="terbilang_waktu_pelaksanaan_pip"></label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>9</td>
                                                                                                    <td scope="row">Waktu Pemeliharaan</td>
                                                                                                    <td>
                                                                                                        <div class="form-group">
                                                                                                            <div class="input-group colorpickerinput">
                                                                                                                <input type="number" onkeyup="pilih_status_non_spm('waktu_pemeliharaan_pip')" placeholder="Waktu Pemeliharaan..." name="waktu_pemeliharaan_pip" class="form-control">
                                                                                                                <div class="input-group-append">
                                                                                                                    <div class="input-group-text">
                                                                                                                        <label for="" class="terbilang_waktu_pemeliharaan_pip"></label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>10</td>
                                                                                                    <td scope="row">Metode Pengadaan</td>
                                                                                                    <td>
                                                                                                        <select name="jenis_pengadaan_sk" onchange="pilih_jenis_pengadaan('jenis_pengadaan_sk')" class="form-control">
                                                                                                            <option value="">-- Pilih Jenis Pengadaan --</option>
                                                                                                            <option value="Penyedia Barang/Jasa">Penyedia Barang/Jasa</option>
                                                                                                            <option value="Penyedia Jasa Konsultansi">Penyedia Jasa Konsultansi</option>
                                                                                                        </select>
                                                                                                        <div class="jika_dipilih_barang" style="display: none;">
                                                                                                            <br>
                                                                                                            <select class="form-control" name="metode_pengadaan_sk" onchange="pilih_metode_pengadaan('metode_pengadaan_sk')">
                                                                                                                <option value="">-- Pilih Metode Pengadaan --</option>
                                                                                                                <option value="Tender Umum">Tender Umum</option>
                                                                                                                <option value="Tender Terbatas">Tender Terbatas</option>
                                                                                                                <option value="Penunjukan Langsung">Penunjukan Langsung</option>
                                                                                                                <option value="Transaksi Langsung">Transaksi Langsung</option>
                                                                                                                <option value="Beauty Contest">Beauty Contest</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="jika_dipilih_jasa" style="display: none;">
                                                                                                            <br>
                                                                                                            <select class="form-control" name="metode_pengadaan_sk2" onchange="pilih_metode_pengadaan('metode_pengadaan_sk2')">
                                                                                                                <option value="">-- Pilih Metode Pengadaan --</option>
                                                                                                                <option value="Seleksi Umum">Seleksi Umum</option>
                                                                                                                <option value="Seleksi Terbatas">Seleksi Terbatas</option>
                                                                                                                <option value="Penunjukan Langsung">Penunjukan Langsung</option>
                                                                                                                <option value="Transaksi Langsung">Transaksi Langsung</option>
                                                                                                                <option value="Beauty Contest">Beauty Contest</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>11</td>
                                                                                                    <td scope="row">Pra/Pasca Kualifikasi</td>
                                                                                                    <td>
                                                                                                        <label for="">Pra/Pasca Kualifikasi</label>
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>12</td>
                                                                                                    <td scope="row">Pembebanan Biaya</td>
                                                                                                    <td>
                                                                                                        <select name="sts_tahun_pembebanan" class="form-control" onchange="pilih_sts_tahun()" id="">
                                                                                                            <option value="">-- Pilih Single-Years / Multi-Years --</option>
                                                                                                            <option value="single_years">Single Years</option>
                                                                                                            <option value="multi_years">Multi Years</option>
                                                                                                        </select>
                                                                                                        <br>
                                                                                                        <select name="jenis_anggaran" class="form-control" onchange="pilih_jenis_anggaran('jenis_anggaran')" id="">
                                                                                                            <option value="">-- Pilih Capex / Opex --</option>
                                                                                                            <option value="Capex">Capex</option>
                                                                                                            <option value="Opex">Opex</option>
                                                                                                        </select>
                                                                                                        <br>
                                                                                                        <div class="pilih_tahun_pembebanan">
                                                                                                            <select name="tahun_multiyers" class="form-control" onchange="add_multi_years()">
                                                                                                                <option value="">-- Pilih --</option>
                                                                                                                <?php $i = 0;
                                                                                                                for ($i = 10; $i <= 30; $i++) {  ?>
                                                                                                                    <option class="p-2" value="20<?= $i ?>">20<?= $i ?></option>
                                                                                                                <?php  } ?>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="result_multiyears"></div>
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>13</td>
                                                                                                    <td scope="row">Alasan Administrasi</td>
                                                                                                    <td>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-9">
                                                                                                                <textarea class="form-control" name="nama_alasan_administrasi"></textarea>
                                                                                                            </div>
                                                                                                            <div class="col-md-2" style="margin-top: 10px;">
                                                                                                                <label for=""><a href="javascript:;" class="btn btn-primary btn-sm" onclick="Simpan_alasan('administrasi')">Simpan</a></label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <br>
                                                                                                        <div id="alasan_administrasi"></div>
                                                                                                    </td>
                                                                                                    <td><label for="" title="Contoh : 1. Berdasarkan Surat Keputusan Direksi Nomor : 130/DIR-I/KPTS/2022, tanggal 1 November 2022, tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa di Lingkungan PT Jasamarga Tollroad Maintenance;" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label> <input type="text" style="display: none;" value="Berdasarkan Surat Keputusan Direksi Nomor : 130/DIR-I/KPTS/2022, tanggal 1 November 2022, tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa di Lingkungan PT Jasamarga Tollroad Maintenance;" id="administrasi_text" value=""> <a href="javascript:;" onclick="copy_administrasi_text()"><label for="" title="Copy Contoh" class="badge badge-warning"><i class="fa fa-clipboard" aria-hidden="true"></i></label></a></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>14</td>
                                                                                                    <td scope="row">Alasan Teknissi</td>
                                                                                                    <td>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-9">
                                                                                                                <textarea name="nama_alasan_teknis" class="form-control"></textarea>
                                                                                                            </div>
                                                                                                            <div class="col-md-2" style="margin-top: 10px;">
                                                                                                                <label for=""><a href="javascript:;" class="btn btn-primary btn-sm" onclick="Simpan_alasan('teknis')">Simpan</a></label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div id="alasan_teknis"></div>
                                                                                                    </td>
                                                                                                    <td><label for="" title="Contoh : Peserta yang diundang untuk menyampaikan Dokumen Penawaran adalah Peserta yang mempunyai kompetensi dan kemampuan usaha sebagai Penyedia Jasa yang telah memenuhi persyaratan kualifikasi sebagai Penyedia Jasa.    Metode Tender Umum dengan Pra Kualifikasi dapat menjamin proses pengadaan yang efektif, efisien, kompetitif, dan transparan. " class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label> <input style="display: none;" type="text" value="2.1 Peserta yang diundang untuk menyampaikan Dokumen Penawaran adalah Peserta yang mempunyai kompetensi dan kemampuan usaha sebagai Penyedia Jasa yang telah memenuhi persyaratan kualifikasi sebagai Penyedia Jasa.      2.2 Metode Tender Umum dengan Pra Kualifikasi dapat menjamin proses pengadaan yang efektif, efisien, kompetitif, dan transparan. " id="teknis_text" value=""> <a href="javascript:;" onclick="copy_teknis_text()"><label for="" title="Copy Contoh" class="badge badge-warning"><i class="fa fa-clipboard" aria-hidden="true"></i></label></a></td>
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
                                                                        </style>
                                                                        <div class="card-body">
                                                                            <div class="container">
                                                                                <div class="row">
                                                                                    <div onscroll='scroller("scroller", "scrollme")' style="overflow:scroll; height: 10;overflow-y: hidden;" id=scroller>
                                                                                        <img src="" height=1 width=2066 style="width:2066px;">
                                                                                    </div>
                                                                                    <div onscroll='scroller("scrollme", "scroller")' style="overflow:scroll; height:500px" id="scrollme">
                                                                                        <table id="customers" class="tableFixHead" style="font-size: 14px;">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th class="text-white">No</th>
                                                                                                    <th class="text-white" style="width: 200px;">Nama Persuratan</th>
                                                                                                    <th class="text-white">Nomor Surat</th>
                                                                                                    <th class="text-white">Tanggal Surat</th>
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
                                                                                                    <td>Permohonan Ip Ca Ke Gm</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_pip_ca_ke_gm')" name="no_surat_pip_ca_ke_gm" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_pip_ca_ke_gm')" name="tgl_surat_pip_ca_ke_gm" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_pip_ca_ke_gm')" name="pengirim_pip_ca_ke_gm" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_pip_ca_ke_gm')" name="jabatan_pengirim_pip_ca_ke_gm" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_pip_ca_ke_gm')" name="penerima_pip_ca_ke_gm" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_pip_ca_ke_gm')" name="jabatan_penerima_pip_ca_ke_gm" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td><label for="" title="Struktur Organisasi" class="badge badge-info"><i class="fa fa-info-circle" aria-hidden="true"></i></label></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_pip1/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">2</td>
                                                                                                    <td>Permohonan Ip Gm Ke Dirops</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_pip_gm_ke_dirops')" name="no_surat_pip_gm_ke_dirops" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_pip_gm_ke_dirops')" name="tgl_surat_pip_gm_ke_dirops" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_pip_gm_ke_dirops')" name="pengirim_pip_gm_ke_dirops" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_pip_gm_ke_dirops')" name="jabatan_pengirim_pip_gm_ke_dirops" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_pip_gm_ke_dirops')" name="penerima_pip_gm_ke_dirops" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_pip_gm_ke_dirops')" name="jabatan_penerima_pip_gm_ke_dirops" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_pip2/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">3</td>
                                                                                                    <td>Permohonan Ip Dirops Ke Dirut</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_pip_dirops_ke_dirut')" name="no_surat_pip_dirops_ke_dirut" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_pip_dirops_ke_dirut')" name="tgl_surat_pip_dirops_ke_dirut" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_pip_dirops_ke_dirut')" name="pengirim_pip_dirops_ke_dirut" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_pip_dirops_ke_dirut')" name="jabatan_pengirim_pip_dirops_ke_dirut" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_pip_dirops_ke_dirut')" name="penerima_pip_dirops_ke_dirut" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_pip_dirops_ke_dirut')" name="jabatan_penerima_pip_dirops_ke_dirut" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url() ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">4</td>
                                                                                                    <td>Persetujuan Ip Dirops Ke Dirut</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_persetujuan_pip_dirops_ke_dirut')" name="no_surat_persetujuan_pip_dirops_ke_dirut" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_persetujuan_pip_dirops_ke_dirut')" name="tgl_surat_persetujuan_pip_dirops_ke_dirut" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_pengirim_pip_dirops_ke_dirut')" name="persetujuan_pengirim_pip_dirops_ke_dirut" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_pengirim_pip_dirops_ke_dirut')" name="persetujuan_jabatan_pengirim_pip_dirops_ke_dirut" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_penerima_pip_dirops_ke_dirut')" name="persetujuan_penerima_pip_dirops_ke_dirut" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_penerima_pip_dirops_ke_dirut')" name="persetujuan_jabatan_penerima_pip_dirops_ke_dirut" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url() ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">5</td>
                                                                                                    <td>Permohonan HPS Ca Ke Gm</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_hps_ca_ke_gm')" name="no_surat_hps_ca_ke_gm" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_hps_ca_ke_gm')" name="tgl_surat_hps_ca_ke_gm" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_hps_ca_ke_gm')" name="pengirim_hps_ca_ke_gm" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_hps_ca_ke_gm')" name="jabatan_pengirim_hps_ca_ke_gm" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_hps_ca_ke_gm')" name="penerima_hps_ca_ke_gm" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_hps_ca_ke_gm')" name="jabatan_penerima_hps_ca_ke_gm" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url() ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">6</td>
                                                                                                    <td>Permohonan HPS Gm Ke Dirops</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_hps_gm_ke_dirops')" name="no_surat_hps_gm_ke_dirops" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_hps_gm_ke_dirops')" name="tgl_surat_hps_gm_ke_dirops" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_hps_gm_ke_dirops')" name="pengirim_hps_gm_ke_dirops" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_hps_gm_ke_dirops')" name="jabatan_pengirim_hps_gm_ke_dirops" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_hps_gm_ke_dirops')" name="penerima_hps_gm_ke_dirops" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_hps_gm_ke_dirops')" name="jabatan_penerima_hps_gm_ke_dirops" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url() ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">7</td>
                                                                                                    <td>Permohonan HPS Dirops Ke Dirut</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_hps_dirops_ke_dirut')" name="no_surat_hps_dirops_ke_dirut" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_hps_dirops_ke_dirut')" name="tgl_surat_hps_dirops_ke_dirut" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_hps_dirops_ke_dirut')" name="pengirim_hps_dirops_ke_dirut" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_hps_dirops_ke_dirut')" name="jabatan_pengirim_hps_dirops_ke_dirut" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_hps_dirops_ke_dirut')" name="penerima_hps_dirops_ke_dirut" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_hps_dirops_ke_dirut')" name="jabatan_penerima_hps_dirops_ke_dirut" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url() ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">8</td>
                                                                                                    <td>Persetujuan HPS Dirops Ke Dirut</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_persetujuan_hps_dirops_ke_dirut')" name="no_surat_persetujuan_hps_dirops_ke_dirut" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_persetujuan_hps_dirops_ke_dirut')" name="tgl_surat_persetujuan_hps_dirops_ke_dirut" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_pengirim_hps_dirops_ke_dirut')" name="persetujuan_pengirim_hps_dirops_ke_dirut" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_pengirim_hps_dirops_ke_dirut')" name="persetujuan_jabatan_pengirim_hps_dirops_ke_dirut" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_penerima_hps_dirops_ke_dirut')" name="persetujuan_penerima_hps_dirops_ke_dirut" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_penerima_hps_dirops_ke_dirut')" name="persetujuan_jabatan_penerima_hps_dirops_ke_dirut" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url() ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td scope="row">9</td>
                                                                                                    <td>Nota Dinas Permohonan Pengadaan</td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_nota_dinas')" name="no_surat_nota_dinas" placeholder="No Surat"></td>
                                                                                                    <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_nota_dinas')" name="tgl_surat_nota_dinas" placeholder="Tanggal Surat"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_nota_dinas')" name="pengirim_nota_dinas" placeholder="Dari Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_nota_dinas')" name="jabatan_pengirim_nota_dinas" placeholder="Dari Nama Jabatan"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_nota_dinas')" name="penerima_nota_dinas" placeholder="Ke Nama"></td>
                                                                                                    <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_nota_dinas')" name="jabatan_penerima_nota_dinas" placeholder="Ke Nama Jabatan"></td>
                                                                                                    <td></td>
                                                                                                    <td><a class="btn btn-warning btn-sm" href="<?= base_url() ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" data-backdrop="false" id="modal_upload_dokumen_pra" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                            <form id="form_upload_surat" enctype="multipart/form-data">
                                                                <input type="hidden" name="id_dokumen_surat_pra">
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
        <div>
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

    </section>
</div>