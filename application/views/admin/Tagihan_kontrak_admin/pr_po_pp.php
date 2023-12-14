<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <input type="hidden" name="id_mc" value="<?= $row_mc['id_mc'] ?>">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> PR PO PP</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/buat_tagihan/') . $row_kontrak['id_kontrak'] ?>">ADMINISTRASI TAGGIHAN PENYEDIA</a></div>
                <div class="breadcrumb-item active"><a href="">PR PO PP</a></div>
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
                                        <h5>PR PO PP</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Purchase Requisition</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Purchase Order</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Permohonan Pembayaran</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <table class="table table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                    <thead style="background-color:#193B53;">
                                                        <tr>
                                                            <th style="font-size: 13px;color:white; width:100px">Keterangan</th>
                                                            <th style="font-size: 13px;color:white; width:100px">Form</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Nomor PR</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Nomor PR" value="<?= $row_mc['nomor_pr'] ?>" onchange="Simpan_mc_pr_po_pp('nomor_pr')" name="nomor_pr"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal PR</td>
                                                            <td><input type="date" class="form-control mt-2 mb-2" placeholder="Tanggal PR" value="<?= $row_mc['tanggal_pr'] ?>" onchange="Simpan_mc_pr_po_pp('tanggal_pr')" name="tanggal_pr"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nominal PR</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Nominal PR" onchange="Simpan_mc_pr_po_pp('nominal_pr')" name="nominal_pr" value="<?= $row_mc['nominal_pr'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Upload PR</td>
                                                            <td><a href="javascript:;" class="btn btn-info mt-2 mb-2" onclick="Upload_po_pr_pp('pr')">Upload</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status Upload</td>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_dokumen_mc_surat');
                                                            $this->db->where('id_mc', $row_mc['id_mc']);
                                                            $this->db->where('id_detail_program_penyedia_jasa', $row_mc['id_detail_program_penyedia_jasa']);
                                                            $this->db->where('type_dok', 'pr');
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
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <table class="table table-bordered" style="font-family: RNSSanz-Black;text-transform: uppercase;">
                                                    <thead style="background-color:#193B53;">
                                                        <tr>
                                                            <th style="font-size: 13px;color:white; width:100px">Keterangan</th>
                                                            <th style="font-size: 13px;color:white; width:100px">Form</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Nomor PO</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Nomor PO" value="<?= $row_mc['nomor_po'] ?>" onchange="Simpan_mc_pr_po_pp('nomor_po')" name="nomor_po"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal PO</td>
                                                            <td><input type="date" class="form-control mt-2 mb-2" placeholder="Tanggal PO" value="<?= $row_mc['tanggal_po'] ?>" onchange="Simpan_mc_pr_po_pp('tanggal_po')" name="tanggal_po"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Dari</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Nama Dari" onchange="Simpan_mc_pr_po_pp('nama_dari_po')" name="nama_dari_po" value="<?= $row_mc['nama_dari_po'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jabatan Dari</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Jabatan Dari" onchange="Simpan_mc_pr_po_pp('jabatan_dari_po')" name="jabatan_dari_po" value="<?= $row_mc['jabatan_dari_po'] ?>"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Jabatan Ke</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Jabatan Ke" onchange="Simpan_mc_pr_po_pp('jabatan_ke_po')" name="jabatan_ke_po" value="<?= $row_mc['jabatan_ke_po'] ?>"></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Jabatan Ke</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Jabatan Ke" onchange="Simpan_mc_pr_po_pp('jabatan_ke_po')" name="jabatan_ke_po" value="<?= $row_mc['jabatan_ke_po'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Penyedia</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" readonly value="<?= $row_program['nama_penyedia'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Pekerjaan</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" readonly value="<?= $row_program['nama_pekerjaan_program_mata_anggaran'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Kontrak</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" readonly value="Kontrak <?= $row_program['metode_pengadaan_sk'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Kontrak</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" readonly value="<?= $row_program['tanggal_kontrak_program'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nilai Purchase Order</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" placeholder="Nominal Po" onchange="Simpan_mc_pr_po_pp('nominal_po')" name="nominal_po" value="<?= $row_mc['nominal_po'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Uang Muka (Rp)</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" readonly value="<?= $row_mc['nilai_uang_muka'] ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Retensi</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" readonly value="<?= $row_mc['nilai_retensi'] ?>%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>PPN</td>
                                                            <td><input type="text" class="form-control mt-2 mb-2" readonly value="<?= $row_mc['persen_ppn'] ?>%"></td>
                                                        </tr>
                                                        <!-- kirun -->
                                                        <tr>
                                                            <td>View Surat PO</td>
                                                            <td><a href="javascript:;" class="btn btn-warning mt-2 mb-2" onclick="View_surat_mc('po')">Lihat Surat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Upload PO</td>
                                                            <td><a href="javascript:;" class="btn btn-info mt-2 mb-2" onclick="Upload_po_pr_pp('po')">Upload</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status Upload</td>
                                                            <?php
                                                            $this->db->select('*');
                                                            $this->db->from('tbl_dokumen_mc_surat');
                                                            $this->db->where('id_mc', $row_mc['id_mc']);
                                                            $this->db->where('id_detail_program_penyedia_jasa', $row_mc['id_detail_program_penyedia_jasa']);
                                                            $this->db->where('type_dok', 'po');
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
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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
    </section>
</div>

<div class="modal fade" id="modal_upload_dokumen_mc_baru" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                    <form id="form_dok_mc_baru" enctype="multipart/form-data">
                        <input type="hidden" name="id_mc" value="<?= $row_mc['id_mc'] ?>">
                        <input type="hidden" name="type_upload">
                        <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_mc['id_detail_program_penyedia_jasa'] ?>">
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
                            <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </center>
                <div style="overflow-x: auto;">
                    <table style="font-family: RNSSanz-Black;text-transform: uppercase;" class="table table-hover" id="table_dok_mc_baru">
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