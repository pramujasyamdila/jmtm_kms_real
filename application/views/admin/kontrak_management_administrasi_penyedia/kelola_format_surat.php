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
                                        <?php if ($row_program['flow_pra_dokumen_kontrak']) { ?>
                                            <div class="col-md-3">
                                                <a id="flow_button" href="javascript:;" onclick="Pilih_flow()" style="margin-top: 30px;display: none;" class="btn btn-success"> <i class="fas fa fa-save"></i> Simpan Flow Dokumen</a>
                                                <button id="flow_button_disabled" style="margin-top: 30px;" class="btn btn-success" disabled>
                                                    <i class="fas fa fa-save"></i> Simpan Flow Dokumen
                                                </button>
                                            </div>
                                            <div class="col-md-3" style="margin-left: -20px;">
                                                <a href="javascript:;" id="flow_button_edit" onclick="Edit_flow()" style="margin-top: 30px;" class="btn btn-warning"> <i class="fas fa fa-save"></i> Edit Flow Dokumen</a>
                                                <a href="javascript:;" id="flow_button_edit_batal" onclick="Edit_flow_batal()" style="margin-top: 30px;display: none;" class="btn btn-danger"> <i class="fas fa fa-save"></i> Batal Edit Flow Dokumen</a>
                                            </div>
                                        <?php    } else { ?>
                                            <div class="col-md-3">
                                                <a href="javascript:;" onclick="Pilih_flow()" style="margin-top: 30px;" class="btn btn-success"> <i class="fas fa fa-save"></i> Simpan Flow Dokumen</a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <br>
                                    <div style="color:white;width: 100%;background-color: #302B63;font-family: RNSSanz-ExtraBold;padding:20px;border-radius:20px">
                                        <label for="">Flow 1 - Persetujuan Direktur Operasi</label><br> <br>
                                        <label>1. Permohonan Izin Prinsip Coordinator Area ke General Manager</label> <br>
                                        <label>2. Permohonan Izin Prinsip General Manager ke Direktur Operasi</label> <br>
                                        <label>3. Persetujuan Izin Prinsip Direktur Operasi ke General Manager</label> <br>
                                        <label>4. Permohonan Harga Perkiraan Sendiri (HPS) Coordinator Area ke General Manager</label> <br>
                                        <label>5. Permohonan Harga Perkiraan Sendiri (HPS) General Manager ke Direktur Operasi</label> <br>
                                        <label>6. Persetujuan Harga Perkiraan Sendiri (HPS) Direktur Operasi ke General Manager</label> <br>
                                        <label>7. Nota Dinas Permohonan Pengadaan General Manager</label>
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
                                                <!-- <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Ijin Prinsip</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Persetujuan Hps</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Nota Dinas</a>
                                                        </li> -->
                                                <!-- <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-surat-tab" data-toggle="pill" href="#custom-tabs-two-surat" role="tab" aria-controls="custom-tabs-two-surat" aria-selected="false">Upload Surat</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-two-kontrakhps-tab" data-toggle="pill" href="#custom-tabs-two-kontrakhps" role="tab" aria-controls="custom-tabs-two-kontrakhps" aria-selected="false">Upload Kontrak dan HPS</a>
                                                        </li> -->
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
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div onscroll='scroller("scroller", "scrollme")' style="overflow:scroll; height: 10;overflow-y: hidden;" id=scroller>
                                                                    <img src="" height=1 width=2066 style="width:3000px;">
                                                                </div>
                                                                <div onscroll='scroller("scrollme", "scroller")' style="overflow:scroll; height:500px; width:3000px" id="scrollme">
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
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_0">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>2</td>
                                                                                <td scope="row">Nama Pekerjaan</td>
                                                                                <td>
                                                                                    <label for=""><?= $row_program['nama_pekerjaan_program_mata_anggaran'] ?></label>
                                                                                </td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_11">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>3</td>
                                                                                <td scope="row">Lokasi Pekerjaan</td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" onkeyup="pilih_status_spm('lokasi_pekerjaan_surat')" name="lokasi_pekerjaan_surat" value="<?= $row_program['lokasi_pekerjaan_surat'] ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_1">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>4</td>
                                                                                <td scope="row">Sasaran Pekerjaan</td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" onkeyup="pilih_status_spm('spm_surat')" name="spm_surat" value="<?= $row_program['spm_surat'] ?>">
                                                                                </td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_2">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
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
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_3">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
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
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_4">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>7</td>
                                                                                <td scope="row">PPN yang digunakan</td>
                                                                                <td>
                                                                                    <select name="ppn_surat" onchange="pilih_status_spm('ppn_surat')" class="form-control">
                                                                                        <?php if ($row_program['ppn_surat']) { ?>
                                                                                            <option value="<?= $row_program['ppn_surat'] ?>"><?= $row_program['ppn_surat'] ?></option>
                                                                                        <?php } else { ?>
                                                                                            <option value="">-- Pilih PPN --</option>
                                                                                        <?php  }
                                                                                        ?>
                                                                                        <option value="10%">10%</option>
                                                                                        <option value="11%">11%</option>
                                                                                        <option value="12%">12%</option>
                                                                                    </select>
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
                                                                                                    <label for="" class="mr-2 terbilang_waktu_pelaksanaan_pip"></label>
                                                                                                    <input type="text" onkeyup="pilih_status_spm('satuan_pelaksanaan_surat')" placeholder="Satuan Waktu" value="<?= $row_program['satuan_pelaksanaan_surat'] ?>" name="satuan_pelaksanaan_surat" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_5">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
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
                                                                                                    <label for="" class="mr-2 terbilang_waktu_pemeliharaan_pip"></label>
                                                                                                    <input type="text" onkeyup="pilih_status_spm('satuan_pemeliharaan_surat')" placeholder="Satuan Waktu" value="<?= $row_program['satuan_pemeliharaan_surat'] ?>" name="satuan_pemeliharaan_surat" class="form-control">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_6">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
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
                                                                                            <option value="Auction">Auction</option>
                                                                                            <option value="SBO">SBO</option>
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
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_7">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>11</td>
                                                                                <td scope="row">Pra/Pasca Kualifikasi</td>
                                                                                <td>
                                                                                    <select name="pra_pasca_surat" onchange="pilih_status_spm('pra_pasca_surat')" class="form-control">
                                                                                        <?php if ($row_program['pra_pasca_surat']) { ?>
                                                                                            <option value="<?= $row_program['pra_pasca_surat'] ?>"><?= $row_program['pra_pasca_surat'] ?></option>
                                                                                        <?php } else { ?>
                                                                                            <option value="">-- Pilih Pra/Pasca Kualifikasi --</option>
                                                                                        <?php  }
                                                                                        ?>
                                                                                        <option value="Pra Kualifikasi">Pra Kualifikasi</option>
                                                                                        <option value="Pasca Kualifikasi">Pasca Kualifikasi</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>12</td>
                                                                                <td scope="row">Pembebanan Biaya</td>
                                                                                <td>
                                                                                    <input type="text" class="form-control" onkeyup="pilih_status_spm('mata_anggaran_surat')" name="mata_anggaran_surat" value="<?= $row_program['mata_anggaran_surat'] ?>" placeholder="Mata Anggran...">
                                                                                    <br>
                                                                                    <input type="text" class="form-control" onkeyup="pilih_status_spm('tahun_anggaran_surat')" name="tahun_anggaran_surat" value="<?= $row_program['tahun_anggaran_surat'] ?>" placeholder="Tahun Anggaran">
                                                                                </td>
                                                                                <td>
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_8">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
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
                                                                                    <table class="table table-bordered">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Nama Alasan</th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody id="alasan_administrasi">

                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_9">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>14</td>
                                                                                <td scope="row">Alasan Teknis</td>
                                                                                <td>
                                                                                    <div class="row">
                                                                                        <div class="col-md-9">
                                                                                            <textarea name="nama_alasan_teknis" class="form-control"></textarea>
                                                                                        </div>
                                                                                        <div class="col-md-2" style="margin-top: 10px;">
                                                                                            <label for=""><a href="javascript:;" class="btn btn-primary btn-sm" onclick="Simpan_alasan('teknis')">Simpan</a></label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <table class="table table-bordered">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Nama Alasan</th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody id="alasan_teknis">

                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                                <td>
                                                                                    <!-- Button trigger modal -->
                                                                                    <a class="badge badge-info badge-lg text-white" data-toggle="modal" data-target="#ket_10">
                                                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade show" id="custom-tabs-two-persuratan" role="tabpanel" aria-labelledby="custom-tabs-two-persuratan-tab">
                                                    <div class="row">
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
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div onscroll='scroller("scroller", "scrollme")' style="overflow:scroll; height: 10;overflow-y: hidden;" id=scroller>
                                                                    <img src="" height=1 width=2066 style="width:2066px;">
                                                                </div>
                                                                <div onscroll='scroller("scrollme", "scroller")' style="overflow:scroll; height:500px" id="scrollme">
                                                                    <table id="customers" class="tableFixHead" style="font-size: 14px;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-white">No</th>
                                                                                <th class="text-white" style="width: 300px;">Nama Persuratan</th>
                                                                                <th class="text-white">Nomor Surat</th>
                                                                                <th class="text-white">Tanggal Surat</th>
                                                                                <th class="text-white">Dari Nama</th>
                                                                                <th class="text-white">Jabatan</th>
                                                                                <th class="text-white">Ke Nama</th>
                                                                                <th class="text-white">Jabatan</th>
                                                                                <th class="text-white">View</th>
                                                                                <th class="text-white">Upload</th>
                                                                                <th class="text-white">Status Upload</th>
                                                                            </tr>

                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td scope="row">1</td>
                                                                                <td style="width: 300px;">Permohonan Izin Prinsip Coordinator Area ke General Manager</td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_pip_ca_ke_gm')" name="no_surat_pip_ca_ke_gm" placeholder="No Surat"></td>
                                                                                <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_pip_ca_ke_gm')" name="tgl_surat_pip_ca_ke_gm" placeholder="Tanggal Surat"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_pip_ca_ke_gm')" name="pengirim_pip_ca_ke_gm" placeholder="Dari Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_pip_ca_ke_gm')" name="jabatan_pengirim_pip_ca_ke_gm" placeholder="Dari Nama Jabatan"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_pip_ca_ke_gm')" name="penerima_pip_ca_ke_gm" placeholder="Ke Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_pip_ca_ke_gm')" name="jabatan_penerima_pip_ca_ke_gm" placeholder="Ke Nama Jabatan"></td>
                                                                                <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_pip1/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_dokumen_surat_pra');
                                                                                $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                                                $this->db->where('tbl_dokumen_surat_pra.nama_file', 'Permohonan Ip Ca Ke Gm');
                                                                                $row_data_1 = $this->db->get()->row_array() ?>
                                                                                <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(<?= $row_data_1['id_dokumen_surat_pra'] ?>)">Upload Surat</a></td>
                                                                                <?php if ($row_data_1['file']) { ?>
                                                                                    <td><a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') . $row_data_1['file'] ?>" style="width:150px;" class="btn btn-sm btn-success">Sudah Upload</a></td>
                                                                                <?php } else { ?>
                                                                                    <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-warning">Belum Upload Surat</a></td>
                                                                                <?php }  ?>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">2</td>
                                                                                <td>Permohonan Izin Prinsip General Manager ke Direktur Operasi</td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_pip_gm_ke_dirops')" name="no_surat_pip_gm_ke_dirops" placeholder="No Surat"></td>
                                                                                <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_pip_gm_ke_dirops')" name="tgl_surat_pip_gm_ke_dirops" placeholder="Tanggal Surat"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_pip_gm_ke_dirops')" name="pengirim_pip_gm_ke_dirops" placeholder="Dari Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_pip_gm_ke_dirops')" name="jabatan_pengirim_pip_gm_ke_dirops" placeholder="Dari Nama Jabatan"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_pip_gm_ke_dirops')" name="penerima_pip_gm_ke_dirops" placeholder="Ke Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_pip_gm_ke_dirops')" name="jabatan_penerima_pip_gm_ke_dirops" placeholder="Ke Nama Jabatan"></td>
                                                                                <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_pip2/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_dokumen_surat_pra');
                                                                                $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                                                $this->db->where('tbl_dokumen_surat_pra.nama_file', 'Permohonan Ip Gm Ke Dirops');
                                                                                $row_data_1 = $this->db->get()->row_array() ?>
                                                                                <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(<?= $row_data_1['id_dokumen_surat_pra'] ?>)">Upload Surat</a></td>
                                                                                <?php if ($row_data_1['file']) { ?>
                                                                                    <td><a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') . $row_data_1['file'] ?>" style="width:150px;" class="btn btn-sm btn-success">Sudah Upload</a></td>
                                                                                <?php } else { ?>
                                                                                    <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-warning">Belum Upload Surat</a></td>
                                                                                <?php }  ?>
                                                                            </tr>

                                                                            <tr>
                                                                                <td scope="row">3</td>
                                                                                <td>Persetujuan Izin Prinsip Direktur Operasi ke General Manager</td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_persetujuan_pip_dirops_ke_dirut')" name="no_surat_persetujuan_pip_dirops_ke_dirut" placeholder="No Surat"></td>
                                                                                <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_persetujuan_pip_dirops_ke_dirut')" name="tgl_surat_persetujuan_pip_dirops_ke_dirut" placeholder="Tanggal Surat"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_pengirim_pip_dirops_ke_dirut')" name="persetujuan_pengirim_pip_dirops_ke_dirut" placeholder="Dari Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_pengirim_pip_dirops_ke_dirut')" name="persetujuan_jabatan_pengirim_pip_dirops_ke_dirut" placeholder="Dari Nama Jabatan"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_penerima_pip_dirops_ke_dirut')" name="persetujuan_penerima_pip_dirops_ke_dirut" placeholder="Ke Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_penerima_pip_dirops_ke_dirut')" name="persetujuan_jabatan_penerima_pip_dirops_ke_dirut" placeholder="Ke Nama Jabatan"></td>
                                                                                <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_pip_persetujuan/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_dokumen_surat_pra');
                                                                                $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                                                $this->db->where('tbl_dokumen_surat_pra.nama_file', 'Persetujuan Ip Dirops Ke Dirut');
                                                                                $row_data_1 = $this->db->get()->row_array() ?>
                                                                                <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(<?= $row_data_1['id_dokumen_surat_pra'] ?>)">Upload Surat</a></td>
                                                                                <?php if ($row_data_1['file']) { ?>
                                                                                    <td><a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') . $row_data_1['file'] ?>" style="width:150px;" class="btn btn-sm btn-success">Sudah Upload</a></td>
                                                                                <?php } else { ?>
                                                                                    <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-warning">Belum Upload Surat</a></td>
                                                                                <?php }  ?>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">4</td>
                                                                                <td>Permohonan Harga Perkiraan Sendiri (HPS) Coordinator Area ke General Manager</td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_hps_ca_ke_gm')" name="no_surat_hps_ca_ke_gm" placeholder="No Surat"></td>
                                                                                <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_hps_ca_ke_gm')" name="tgl_surat_hps_ca_ke_gm" placeholder="Tanggal Surat"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_hps_ca_ke_gm')" name="pengirim_hps_ca_ke_gm" placeholder="Dari Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_hps_ca_ke_gm')" name="jabatan_pengirim_hps_ca_ke_gm" placeholder="Dari Nama Jabatan"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_hps_ca_ke_gm')" name="penerima_hps_ca_ke_gm" placeholder="Ke Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_hps_ca_ke_gm')" name="jabatan_penerima_hps_ca_ke_gm" placeholder="Ke Nama Jabatan"></td>
                                                                                <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_hps1/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_dokumen_surat_pra');
                                                                                $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                                                $this->db->where('tbl_dokumen_surat_pra.nama_file', 'Permohonan HPS Ca Ke Gm');
                                                                                $row_data_1 = $this->db->get()->row_array() ?>
                                                                                <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(<?= $row_data_1['id_dokumen_surat_pra'] ?>)">Upload Surat</a></td>
                                                                                <?php if ($row_data_1['file']) { ?>
                                                                                    <td><a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') . $row_data_1['file'] ?>" style="width:150px;" class="btn btn-sm btn-success">Sudah Upload</a></td>
                                                                                <?php } else { ?>
                                                                                    <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-warning">Belum Upload Surat</a></td>
                                                                                <?php }  ?>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">5</td>
                                                                                <td>Permohonan Harga Perkiraan Sendiri (HPS) General Manager ke Direktur Operasi</td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_hps_gm_ke_dirops')" name="no_surat_hps_gm_ke_dirops" placeholder="No Surat"></td>
                                                                                <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_hps_gm_ke_dirops')" name="tgl_surat_hps_gm_ke_dirops" placeholder="Tanggal Surat"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_hps_gm_ke_dirops')" name="pengirim_hps_gm_ke_dirops" placeholder="Dari Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_hps_gm_ke_dirops')" name="jabatan_pengirim_hps_gm_ke_dirops" placeholder="Dari Nama Jabatan"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_hps_gm_ke_dirops')" name="penerima_hps_gm_ke_dirops" placeholder="Ke Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_hps_gm_ke_dirops')" name="jabatan_penerima_hps_gm_ke_dirops" placeholder="Ke Nama Jabatan"></td>
                                                                                <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_hps2/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_dokumen_surat_pra');
                                                                                $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                                                $this->db->where('tbl_dokumen_surat_pra.nama_file', 'Permohonan HPS Gm Ke Dirops');
                                                                                $row_data_1 = $this->db->get()->row_array() ?>
                                                                                <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(<?= $row_data_1['id_dokumen_surat_pra'] ?>)">Upload Surat</a></td>
                                                                                <?php if ($row_data_1['file']) { ?>
                                                                                    <td><a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') . $row_data_1['file'] ?>" style="width:150px;" class="btn btn-sm btn-success">Sudah Upload</a></td>
                                                                                <?php } else { ?>
                                                                                    <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-warning">Belum Upload Surat</a></td>
                                                                                <?php }  ?>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">6</td>
                                                                                <td>Persetujuan Harga Perkiraan Sendiri (HPS) Direktur Operasi ke General Manager</td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_persetujuan_hps_dirops_ke_dirut')" name="no_surat_persetujuan_hps_dirops_ke_dirut" placeholder="No Surat"></td>
                                                                                <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_persetujuan_hps_dirops_ke_dirut')" name="tgl_surat_persetujuan_hps_dirops_ke_dirut" placeholder="Tanggal Surat"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_pengirim_hps_dirops_ke_dirut')" name="persetujuan_pengirim_hps_dirops_ke_dirut" placeholder="Dari Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_pengirim_hps_dirops_ke_dirut')" name="persetujuan_jabatan_pengirim_hps_dirops_ke_dirut" placeholder="Dari Nama Jabatan"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_penerima_hps_dirops_ke_dirut')" name="persetujuan_penerima_hps_dirops_ke_dirut" placeholder="Ke Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('persetujuan_jabatan_penerima_hps_dirops_ke_dirut')" name="persetujuan_jabatan_penerima_hps_dirops_ke_dirut" placeholder="Ke Nama Jabatan"></td>
                                                                                <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_hps_persetujuan/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_dokumen_surat_pra');
                                                                                $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                                                $this->db->where('tbl_dokumen_surat_pra.nama_file', 'Persetujuan HPS Dirops Ke Dirut');
                                                                                $row_data_1 = $this->db->get()->row_array() ?>
                                                                                <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(<?= $row_data_1['id_dokumen_surat_pra'] ?>)">Upload Surat</a></td>
                                                                                <?php if ($row_data_1['file']) { ?>
                                                                                    <td><a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') . $row_data_1['file'] ?>" style="width:150px;" class="btn btn-sm btn-success">Sudah Upload</a></td>
                                                                                <?php } else { ?>
                                                                                    <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-warning">Belum Upload Surat</a></td>
                                                                                <?php }  ?>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">7</td>
                                                                                <td>Nota Dinas Permohonan Pengadaan General Manager</td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('no_surat_nota_dinas')" name="no_surat_nota_dinas" placeholder="No Surat"></td>
                                                                                <td><input type="date" style="width: 200px;" class="form-control form-control-sm" onchange="simpan_master_surat_tanggal('tgl_surat_nota_dinas')" name="tgl_surat_nota_dinas" placeholder="Tanggal Surat"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('pengirim_nota_dinas')" name="pengirim_nota_dinas" placeholder="Dari Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_pengirim_nota_dinas')" name="jabatan_pengirim_nota_dinas" placeholder="Dari Nama Jabatan"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('penerima_nota_dinas')" name="penerima_nota_dinas" placeholder="Ke Nama"></td>
                                                                                <td><input type="text" style="width: 200px;" class="form-control form-control-sm" onkeyup="simpan_master_surat('jabatan_penerima_nota_dinas')" name="jabatan_penerima_nota_dinas" placeholder="Ke Nama Jabatan"></td>
                                                                                <td><a class="btn btn-warning btn-sm" target="_blank" href="<?= base_url('admin/administrasi_penyedia/cetak_nota_dinas/' . $row_program['id_detail_program_penyedia_jasa']) ?>"> <i class="fas fa fa-file"> Preview Surat</i></a></td>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_dokumen_surat_pra');
                                                                                $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                                                $this->db->where('tbl_dokumen_surat_pra.nama_file', 'Nota Dinas');
                                                                                $row_data_1 = $this->db->get()->row_array() ?>
                                                                                <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-danger" onclick="ById_dokumen(<?= $row_data_1['id_dokumen_surat_pra'] ?>)">Upload Surat</a></td>
                                                                                <?php if ($row_data_1['file']) { ?>
                                                                                    <td><a target="_blank" href="<?= base_url('file_surat_prakualifikasi/') . $row_data_1['file'] ?>" style="width:150px;" class="btn btn-sm btn-success">Sudah Upload</a></td>
                                                                                <?php } else { ?>
                                                                                    <td><a href="javascript:;" style="width:150px;" class="btn btn-sm btn-warning">Belum Upload Surat</a></td>
                                                                                <?php }  ?>
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

<div class="modal fade" id="ket_0" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    "Jenis Pengadaan sesuai Keputusan Direksi PT JMTM nomor: 148/DIR-I/KPTS/2023 tanggal 27 Juni 2023 tentang Perubahan atas Keputusan Direksi nomor: 130/DIR-I/KPTS/2022 tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa di Lingkungan PT Jasamarga Tollroad Maintenance"
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_11" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Nama Pekerjaan diambil saat membuat mata anggaran
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Isi sesuai Ruas Jalan Tol yang diinginkan sesuai standard format
                    "Ruas Jalan Tol …..:
                    contoh pengisian
                    "Ruas Jalan Tol Jakarta-Cikampek"
                    dengan
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <p>
                        1. Jika pekerjaan berkaitan dengan SPM, maka format dasarnya adalah
                        "Pemenuhan Standar Pelayanan Minimal (SPM) Substansi Pelayanan ….." , pilih 1 atau beberapa substansi pelayanan. Adapun Substansi pelayanan sesuai dengan Permen PUPR No 16/PRT/M/2014 adalah sebagai berikut : Kondisi Jalan Tol ; Kecepatan Tempuh Rata-Rata ; Aksesibilitas ; Mobilitas ; Keselamatan ; Unit Pertolongan / Penyelamatan dan Bantuan Pelayanan ; Lingkungan ; TI dan TIP
                    </p>
                    <p>
                        2. Jika pekerjaan tidak berkaitan dengan SPM, maka isi sesuai dengan Sasaran Pekerjaan yang diinginkan, contoh: "Transformasi Proses Kerja Kontrak Manajemen berbasis Web"
                    </p>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    "Nilai Pagu di ambil dari Isian di Halaman Depan Tabel Pra Pengadaan Pekerjaan"
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    "Nilai Perkiraan Biaya di ambil dari Isian di Halaman Depan Tabel Pra Pengadaan Pekerjaan"
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Satuan waktu yang umum digunakan adalah <br>
                    <p>
                        1. Hari Kalender
                    </p>
                    <p>
                        2. Bulan
                    </p>
                    <p>
                        3. Triwulan
                    </p>
                    <p>
                        4. Semester
                    </p>
                    <p>
                        5. Tahun
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Satuan waktu yang umum digunakan adalah <br>
                    <p>
                        1. Hari Kalender
                    </p>
                    <p>
                        2. Bulan
                    </p>
                    <p>
                        3. Triwulan
                    </p>
                    <p>
                        4. Semester
                    </p>
                    <p>
                        5. Tahun
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_7" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    "Metode Pengadaan sesuai Keputusan Direksi PT JMTM nomor: 148/DIR-I/KPTS/2023 tanggal 27 Juni 2023 tentang Perubahan atas Keputusan Direksi nomor: 130/DIR-I/KPTS/2022 tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa di Lingkungan PT Jasamarga Tollroad Maintenance"
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    1. Isi mata anggaran dengan tulisan CAPEX/OPEX <br>
                    2. Isi Tahun Anggaran sesuai Rencanan Pembebanan, jika Single Years Tulis 1 Tahun (misal Tahun 2023), jika Multi Years Tulis sesuai Tahun Rencana dipisahkan dengan tanda koma (misal Tahun 2023, Tahun 2024, Tahun 2025)
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_9" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <p>
                        Berdasarkan Surat Keputusan Direksi PT JMTM nomor: 148/DIR-I/KPTS/2023 tanggal 27 Juni 2023 tentang Perubahan atas Keputusan Direksi nomor: 130/DIR-I/KPTS/2022 tentang Pedoman Pelaksanaan Pengadaan Barang/Jasa di Lingkungan PT Jasamarga Tollroad Maintenance;
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ket_10" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <p>
                        2.1 Peserta yang diundang untuk menyampaikan Dokumen Penawaran adalah Peserta yang mempunyai kompetensi dan kemampuan usaha sebagai Penyedia Jasa yang telah memenuhi persyaratan kualifikasi sebagai Penyedia Jasa.
                    </p>
                    <p>
                        2.2 Metode Tender Umum dengan Pra Kualifikasi dapat menjamin proses pengadaan yang efektif, efisien, kompetitif, dan transparan.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>