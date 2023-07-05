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
                                            <div>
                                                <div class="row col-md-4">
                                                    <label for="">PILIH FLOW DOKUMEN</label>
                                                    <select name="flow_pra_dokumen_kontrak" onchange="Pilih_flow()" class="form-control" id="">
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
                                            </div>
                                            <br>
                                            <div class="card card-primary card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                        <li class="pt-2 px-3">
                                                            <h3 class="card-title"><i class="fas fa fa-envelope"></i></h3>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Ijin Prinsip</a>
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
                                                        <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
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