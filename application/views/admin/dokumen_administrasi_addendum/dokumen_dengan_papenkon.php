<!-- Content Wrapper. Contains page content -->
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
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="<?= base_url('assets/logo.png') ?>" width="250px" alt="">
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6 mt-4">
                                        <label> <i class="fa fa-book"></i> Surat Permohonan Persetujuan Izin Prinsip Ca Ke Operasi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="card card-primary card-tabs">
                                        <div class="card-header p-0 pt-1">
                                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                                <li class="pt-2 px-3">
                                                    <h3 class="card-title"><i class="fas fa fa-envelope"></i></h3>
                                                </li>
                                                <?php if ($row_program['papenkon'] == 'dengan_papenkon') { ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="permohonan_evaluasi-tab" data-toggle="pill" href="#permohonan_evaluasi" role="tab" aria-controls="permohonan_evaluasi" aria-selected="true">Surat Ke Papenkon(Permohonan Evaluasi dan Negosiasi</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="undangan_evaluasi-tab" data-toggle="pill" href="#undangan_evaluasi" role="tab" aria-controls="undangan_evaluasi" aria-selected="true">Penandatanganan Undangan Evaluasi</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="ba_evaluasi-tab" data-toggle="pill" href="#ba_evaluasi" role="tab" aria-controls="ba_evaluasi" aria-selected="true">BA Evaluasi</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="ba_addendum-tab" data-toggle="pill" href="#ba_addendum" role="tab" aria-controls="ba_addendum" aria-selected="true">Surat Permohonan Persetujuan BA Add</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="persetujuan_adendum-tab" data-toggle="pill" href="#persetujuan_adendum" role="tab" aria-controls="persetujuan_adendum" aria-selected="true">Surat Persetujuan Add</a>
                                                    </li>
                                                <?php } else if ($row_program['papenkon'] == 'tanpa_papenkon') { ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="undangan_evaluasi-tab" data-toggle="pill" href="#undangan_evaluasi" role="tab" aria-controls="undangan_evaluasi" aria-selected="true">Penandatanganan Undangan Evaluasi</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="ba_evaluasi-tab" data-toggle="pill" href="#ba_evaluasi" role="tab" aria-controls="ba_evaluasi" aria-selected="true">BA Evaluasi</a>
                                                    </li>
                                                <?php  } else { ?>
                                                <?php   } ?>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                                <div class="tab-pane active" id="permohonan_evaluasi" role="tabpanel" aria-labelledby="permohonan_evaluasi-tab">
                                                    <?php $this->load->view('admin/dokumen_administrasi_addendum/dengan_papenkon/permohonan_evaluasi'); ?>
                                                </div>
                                                <div class="tab-pane" id="undangan_evaluasi" role="tabpanel" aria-labelledby="undangan_evaluasi-tab">
                                                    <?php $this->load->view('admin/dokumen_administrasi_addendum/dengan_papenkon/undangan_evaluasi'); ?>
                                                </div>
                                                <div class="tab-pane" id="ba_evaluasi" role="tabpanel" aria-labelledby="ba_evaluasi-tab">
                                                    <?php $this->load->view('admin/dokumen_administrasi_addendum/dengan_papenkon/ba_evaluasi'); ?>
                                                </div>
                                                <div class="tab-pane" id="ba_addendum" role="tabpanel" aria-labelledby="ba_addendum-tab">
                                                    <?php $this->load->view('admin/dokumen_administrasi_addendum/dengan_papenkon/ba_addendum'); ?>
                                                </div>
                                                <div class="tab-pane" id="persetujuan_adendum" role="tabpanel" aria-labelledby="persetujuan_adendum-tab">
                                                    <?php $this->load->view('admin/dokumen_administrasi_addendum/dengan_papenkon/persetujuan_adendum'); ?>
                                                </div>
                                            </div>
                                        </div>

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