<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Kelola Surat</b>
        </nav>
        <br>
        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 2 - KELOLA SURAT PASCA</b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">Modul ini bertujuan untuk mengelola Administrasi Kontrak Program Pekerjaan yang sudah melalui Proses Pengadaan
            </h6>

        </div>
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->
        <div class="card" style="margin-top: -20px; padding-top: 10px; padding-left: 20px">
            <h5 style="font-family: 'Poppins', sans-serif;"><b>CHECKLIST DAN TO DO LIST </b></h5>
            <div class="row" style="padding-left:90px">
                <div class="col-md-4">
                    <div class="card bg-success" style="margin-top: 20px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h5 style="font-family: 'Poppins', sans-serif;">Done</h5>
                                </center>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h5><?= $total_final_dok_pasca_baru ?></h5>
                                    </center>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning" style="margin-top: 20px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h5 style="font-family: 'Poppins', sans-serif;">On Progres</h5>
                                </center>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h5><?= $total_final_progres ?></h5>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper" style="background-color:white">
            <br>

            <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>">
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <br>
                                    <div class="card-header">
                                        <h5><i class="fa fa-book"></i> Kelola Surat Kontrak</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <table class="table table-striped table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                <thead>
                                                    <tr style="background-color: #193B53;">
                                                        <th class="text-white">No</th>
                                                        <th class="text-white">Uraian</th>
                                                        <th class="text-white">Nomor Surat</th>
                                                        <th class="text-white">Tanggal Surat</th>
                                                        <th class="text-white">Upload Surat</th>
                                                        <th class="text-white">Status Upload</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Gunning</td>
                                                        <td><input onkeyup="isi_master_pra('no_surat_gunning')" name="no_surat_gunning" value="<?= $row_program['no_surat_gunning'] ?>" type="text" class="form-control" style="width: 200px;" placeholder="Nomor Surat"></td>
                                                        <td><input value="<?= $row_program['tanggal_gunning'] ?>" onchange="isi_master_pra('tanggal_gunning')" name="tanggal_gunning" type="date" class="form-control" style="width: 200px;" placeholder="Tanggal Surat"></td>
                                                        <td><a href="javascript:;" onclick="Upload_dokumen_pasca('gunning')" class="btn btn-danger">Upload Surat</a></td>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_dokumen_pasca');
                                                        $this->db->where('id_kontrak', $row_program['id_kontrak']);
                                                        $this->db->where('id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                        $this->db->where('type_dok', 'gunning');
                                                        $data_gunning = $this->db->get()->result_array();
                                                        ?>
                                                        <?php if ($data_gunning) { ?>
                                                            <td><label class="badge bg-success text-white" for="">Sudah Upload</label> </td>
                                                        <?php } else { ?>
                                                            <td><label for="" class="badge bg-danger text-white">Belum Upload</label> </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Letter Of Intent (LOI)</td>
                                                        <td><input value="<?= $row_program['no_surat_loi'] ?>" onkeyup="isi_master_pra('no_surat_loi')" name="no_surat_loi" type="text" class="form-control" style="width: 200px;" placeholder="Nomor Surat"></td>
                                                        <td><input value="<?= $row_program['tanggal_loi'] ?>" onchange="isi_master_pra('tanggal_loi')" name="tanggal_loi" type="date" class="form-control" style="width: 200px;" placeholder="Tanggal Surat"></td>
                                                        <td><a href="javascript:;" onclick="Upload_dokumen_pasca('loi')" class="btn btn-danger">Upload Surat</a></td>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_dokumen_pasca');
                                                        $this->db->where('id_kontrak', $row_program['id_kontrak']);
                                                        $this->db->where('id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                        $this->db->where('type_dok', 'loi');
                                                        $data_gunning = $this->db->get()->result_array();
                                                        ?>
                                                        <?php if ($data_gunning) { ?>
                                                            <td><label class="badge bg-success text-white" for="">Sudah Upload</label> </td>
                                                        <?php } else { ?>
                                                            <td><label for="" class="badge bg-danger text-white">Belum Upload</label> </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Site Hand Over (SHO)</td>
                                                        <td><input value="<?= $row_program['no_surat_sho'] ?>" onkeyup="isi_master_pra('no_surat_sho')" name="no_surat_sho" type="text" class="form-control" style="width: 200px;" placeholder="Nomor Surat"></td>
                                                        <td><input value="<?= $row_program['tanggal_sho'] ?>" onchange="isi_master_pra('tanggal_sho')" name="tanggal_sho" type="date" class="form-control" style="width: 200px;" placeholder="Tanggal Surat"></td>
                                                        <td><a href="javascript:;" onclick="Upload_dokumen_pasca('sho')" class="btn btn-danger">Upload Surat</a></td>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_dokumen_pasca');
                                                        $this->db->where('id_kontrak', $row_program['id_kontrak']);
                                                        $this->db->where('id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                        $this->db->where('type_dok', 'sho');
                                                        $data_gunning = $this->db->get()->result_array();
                                                        ?>
                                                        <?php if ($data_gunning) { ?>
                                                            <td><label class="badge bg-success text-white" for="">Sudah Upload</label> </td>
                                                        <?php } else { ?>
                                                            <td><label for="" class="badge bg-danger text-white">Belum Upload</label> </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Kontrak</td>
                                                        <td><input value="<?= $row_program['no_surat_kontrak'] ?>" onkeyup="isi_master_pra('no_surat_kontrak')" name="no_surat_kontrak" type="text" class="form-control" style="width: 200px;" placeholder="Nomor Surat"></td>
                                                        <td><input value="<?= $row_program['tanggal_surat_kontrak'] ?>" onchange="isi_master_pra('tanggal_surat_kontrak')" name="tanggal_surat_kontrak" type="date" class="form-control" style="width: 200px;" placeholder="Tanggal Surat"></td>
                                                        <td><a href="javascript:;" onclick="Upload_dokumen_pasca('kontrak')" class="btn btn-danger">Upload Surat</a></td>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_dokumen_pasca');
                                                        $this->db->where('id_kontrak', $row_program['id_kontrak']);
                                                        $this->db->where('id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                        $this->db->where('type_dok', 'kontrak');
                                                        $data_gunning = $this->db->get()->result_array();
                                                        ?>
                                                        <?php if ($data_gunning) { ?>
                                                            <td><label class="badge bg-success text-white" for="">Sudah Upload</label> </td>
                                                        <?php } else { ?>
                                                            <td><label for="" class="badge bg-danger text-white">Belum Upload</label> </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Surat Perintah Mulai Kerja (SPMK)</td>
                                                        <td><input value="<?= $row_program['no_surat_spmk'] ?>" onkeyup="isi_master_pra('no_surat_spmk')" name="no_surat_spmk" type="text" class="form-control" style="width: 200px;" placeholder="Nomor Surat"></td>
                                                        <td><input value="<?= $row_program['tanggal_spmk'] ?>" onchange="isi_master_pra('tanggal_spmk')" name="tanggal_spmk" type="date" class="form-control" style="width: 200px;" placeholder="Tanggal Surat"></td>
                                                        <td><a href="javascript:;" onclick="Upload_dokumen_pasca('spmk')" class="btn btn-danger">Upload Surat</a></td>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_dokumen_pasca');
                                                        $this->db->where('id_kontrak', $row_program['id_kontrak']);
                                                        $this->db->where('id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                        $this->db->where('type_dok', 'spmk');
                                                        $data_gunning = $this->db->get()->result_array();
                                                        ?>
                                                        <?php if ($data_gunning) { ?>
                                                            <td><label class="badge bg-success text-white" for="">Sudah Upload</label> </td>
                                                        <?php } else { ?>
                                                            <td><label for="" class="badge bg-danger text-white">Belum Upload</label> </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Jaminan Pelaksanaan Kontrak Awal</td>
                                                        <td><input value="<?= $row_program['no_surat_jaminan_kontrak'] ?>" onkeyup="isi_master_pra('no_surat_jaminan_kontrak')" name="no_surat_jaminan_kontrak" type="text" class="form-control" style="width: 200px;" placeholder="Nomor Surat"></td>
                                                        <td><input value="<?= $row_program['tanggal_surat_jaminan_kontrak'] ?>" onchange="isi_master_pra('tanggal_surat_jaminan_kontrak')" name="tanggal_surat_jaminan_kontrak" type="date" class="form-control" style="width: 200px;" placeholder="Tanggal Surat"></td>
                                                        <td><a href="javascript:;" onclick="Upload_dokumen_pasca('jaminan')" class="btn btn-danger">Upload Surat</a></td>
                                                        <?php
                                                        $this->db->select('*');
                                                        $this->db->from('tbl_dokumen_pasca');
                                                        $this->db->where('id_kontrak', $row_program['id_kontrak']);
                                                        $this->db->where('id_detail_program_penyedia_jasa', $row_program['id_detail_program_penyedia_jasa']);
                                                        $this->db->where('type_dok', 'jaminan');
                                                        $data_gunning = $this->db->get()->result_array();
                                                        ?>
                                                        <?php if ($data_gunning) { ?>
                                                            <td><label class="badge bg-success text-white" for="">Sudah Upload</label> </td>
                                                        <?php } else { ?>
                                                            <td><label for="" class="badge bg-danger text-white">Belum Upload</label> </td>
                                                        <?php } ?>
                                                    </tr>
                                                </tbody>
                                            </table>
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

<!-- Modal -->
<div class="modal fade" id="modal_upload_dokumen_pasca_baru" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <form id="form_dok_pasca_baru" enctype="multipart/form-data">
                        <input type="hidden" name="id_kontrak" value="<?= $row_program['id_kontrak'] ?>">
                        <input type="hidden" name="type_upload">
                        <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>">
                        <div class="input-group col-md-12">
                            <div class="input-group-append">
                                <button class="input-group-text attach_btn btn-grad100" type="button" id="loadFileXml" value="loadXml" onclick="document.getElementById('file').click();"><i class="fas fa-paperclip"></i></button>
                                <input type="file" style="display:none;" id="file" class="file_dok" name="file_dok" />
                            </div>
                            <input type="text" name="type_upload" readonly class="form-control form-control" placeholder="Nama Dokumen">
                            <div class="input-group-append">
                                <button type="submit" id="upload" name="upload" class="input-group-text"><i class="fas fa-upload"></i></button>
                            </div>
                        </div>

                    </form>
                    <div style="display: none;" id="error_file" class="alert alert-danger" role="alert">
                        ANDA BELUM MENGISI FILE !!!
                    </div>
                    <small class="text-danger" style="text-transform: capitalize;;font-family: 'Poppins', sans-serif;font-size:14px">*Masimal Ukuran Dokumen Yang Bisa Diupload Adalah 20Mb Setiap Dokumen</small>
                </center>
                <br>
                <center>
                    <div class="form-group col-md-6" id="process" style="display:none;">
                        <small for="" style="display:none;" id="sedang_dikirim">Sedang Mengupload....</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="">
                            </div>
                        </div>
                    </div>
                </center>
                <div style="overflow-x: auto;">
                    <table style="font-family: RNSSanz-Black;text-transform: uppercase;" class="table table-hover" id="table_dok_pasca_baru">
                        <thead>
                            <tr class="btn-grad100">
                                <th>No</th>
                                <th>Nama File</th>
                                <th>File</th>
                                <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</section>
</div>