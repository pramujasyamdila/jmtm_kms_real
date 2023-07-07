<!-- Content Wrapper. Contains page content -->
<div class="main-content" style="font-family: 'Highway Gothic', sans-serif;">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i>MANAGEMENT KELOLA LEVEL</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="<?= base_url('admin/data_kontrak') ?>">DATA KONTRAK</a></div>
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/data_kontrak/kelola_level/') . $row_kontrak['id_kontrak'] ?>">MANAGEMENT KELOLA LEVEL</a></div>
            </div>
        </div>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                            </h1>
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
                            <div class="card card-outline card-warning">
                                <div class="card-header">
                                    <?= $row_kontrak['nama_kontrak'] ?>
                                </div>
                                <div class="card-body">
                                    <div class="card card-outline card-primary">
                                        <div class="card-header">
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-outline-primary btn-sm btn-lg mb-2" data-toggle="modal" data-target="#tambah_addendum">
                                                    <i class="fas fa fa-plus"></i> Tambah Addendum
                                                </button>

                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row">
                                                <!-- Button trigger modal -->
                                                <!-- Modal -->
                                                <div class="col-md-12">
                                                    <!-- lihat ad -->
                                                    <div style="overflow-y: true;">
                                                        <table id="table_kontrak" class="table table-bordered table-striped">
                                                            <thead class="bg-primary">
                                                                <tr>
                                                                    <th class="table-primary text-center text-white" style="width: 150px;"><i class="fa fa-list-ol" aria-hidden="true"></i> No</th>
                                                                    <th class="table-primary text-center text-white" style="width: 250px;"><i class="fa fa-database" aria-hidden="true"></i> Nama Program</th>
                                                                    <?php if ($adendum_result) { ?>
                                                                        <?php foreach ($adendum_result as $key => $value) { ?>
                                                                            <?php
                                                                            if ($value['no_adendum'] == 1) {
                                                                                $romawi_add = 'Add Ke I';
                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                $romawi_add = 'Add Ke II';
                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                $romawi_add = 'Add Ke III';
                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                $romawi_add = 'Add Ke IV';
                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                $romawi_add = 'Add Ke V';
                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                $romawi_add = 'Add Ke VI';
                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                $romawi_add = 'Add Ke VII';
                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                $romawi_add = 'Add Ke VIII';
                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                $romawi_add = 'Add Ke IX';
                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                $romawi_add = 'Add Ke X';
                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                $romawi_add = 'Add Ke XI';
                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                $romawi_add = 'Add Ke XII';
                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                $romawi_add = 'Add Ke XIII';
                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                $romawi_add = 'Add Ke XIV';
                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                $romawi_add = 'Add Ke XV';
                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                $romawi_add = 'Add Ke XVI';
                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                $romawi_add = 'Add Ke XVII';
                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                $romawi_add = 'Add Ke XVIII';
                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                $romawi_add = 'Add Ke XIX';
                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                $romawi_add = 'Add Ke XX';
                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                $romawi_add = 'Add Ke XXI';
                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                $romawi_add = 'Add Ke XXII';
                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                $romawi_add = 'Add Ke XXIII';
                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                $romawi_add = 'Add Ke XXIV';
                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                $romawi_add = 'Add Ke XXV';
                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                $romawi_add = 'Add Ke XXVI';
                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                $romawi_add = 'Add Ke XXVII';
                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                $romawi_add = 'Add Ke XXVIII';
                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                $romawi_add = 'Add Ke XXIX';
                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                $romawi_add = 'Add Ke XXX';
                                                                            } else {
                                                                                $romawi_add = 'Kontrak Awal';
                                                                            }
                                                                            ?>
                                                                            <th class="table-warning text-center text-white" style="width: 200px;"><i class="fa fa-list" aria-hidden="true"></i> <?= $romawi_add ?>
                                                                                <hr>
                                                                                <i class="fa fa-calendar" aria-hidden="true"></i> <br>
                                                                                <?= $value['tanggal'] ?>
                                                                            </th>
                                                                            <th class="table-secondary text-center text-white">
                                                                                <a href="javascript:;" style="font-size:11px;" class="btn btn-sm btn-danger btn-sm" onclick="ModalPenunjang('<?= $romawi_add ?>')"><i class="fas fa fa-file"></i> Dokumen Penunjang / Kontrak</a>
                                                                                <hr>
                                                                                <i class="fa fa-key" aria-hidden="true"></i> Aksi <?= $romawi_add ?>
                                                                            </th>
                                                                        <?php   } ?>
                                                                    <?php } else { ?>
                                                                        <th class="table-warning text-center text-white" style="width: 150px;"><i class="fa fa-list" aria-hidden="true"></i> Kontrak Awal
                                                                            <hr>
                                                                            <?= $row_kontrak['tahun_kontrak'] ?>
                                                                        </th>
                                                                        <th class="table-secondary text-center text-white" style="width: 130px;"> <a href="javascript:;" style="font-size:11px;margin-top:-20px;" class="btn btn-sm btn-danger btn-lg" onclick="ModalPenunjang('Kontrak Awal')"><i class="fa fa-file-pdf" aria-hidden="true"></i> Dok. Penunjang / Kontrak</a><br><i class="fa fa-key" aria-hidden="true"></i> Aksi</th>
                                                                    <?php  }  ?>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr style="font-size:12px;font-weight: 750;">
                                                                    <td>
                                                                        1
                                                                    </td>
                                                                    <td> <label for="" style="white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;" title="<?= $row_kontrak['nama_kontrak'] ?>"><?= $row_kontrak['nama_kontrak'] ?></label></td>
                                                                    <?php if ($adendum_result) { ?>
                                                                        <?php foreach ($adendum_result as $key => $value) { ?>
                                                                            <?php
                                                                            if ($value['no_adendum'] == 1) {
                                                                                $nilai = 'nilai_add_I';
                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                $nilai = 'nilai_add_II';
                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                $nilai = 'nilai_add_III';
                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                $nilai = 'nilai_add_IV';
                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                $nilai = 'nilai_add_V';
                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                $nilai = 'nilai_add_VI';
                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                $nilai = 'nilai_add_VII';
                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                $nilai = 'nilai_add_VIII';
                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                $nilai = 'nilai_add_IX';
                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                $nilai = 'nilai_add_X';
                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                $nilai = 'nilai_add_XI';
                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                $nilai = 'nilai_add_XII';
                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                $nilai = 'nilai_add_XIII';
                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                $nilai = 'nilai_add_XIV';
                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                $nilai = 'nilai_add_XV';
                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                $nilai = 'nilai_add_XVI';
                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                $nilai = 'nilai_add_XVII';
                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                $nilai = 'nilai_add_XVIII';
                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                $nilai = 'nilai_add_XIX';
                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                $nilai = 'nilai_add_XX';
                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                $nilai = 'nilai_add_XXI';
                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                $nilai = 'nilai_add_XXII';
                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                $nilai = 'nilai_add_XXIII';
                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                $nilai = 'nilai_add_XXIV';
                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                $nilai = 'nilai_add_XXV';
                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                $nilai = 'nilai_add_XXVI';
                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                $nilai = 'nilai_add_XXVII';
                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                $nilai = 'nilai_add_XXVIII';
                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                $nilai = 'nilai_add_XXIX';
                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                $nilai = 'nilai_add_XXX';
                                                                            } else {
                                                                                $nilai = 'nilai_kontrak_awal';
                                                                            }
                                                                            ?>
                                                                            <?php
                                                                            $hitung_persen_total_ppn = ($row_kontrak[$nilai] * 11) / 100;
                                                                            $hasil_ppn_total = $hitung_persen_total_ppn;
                                                                            $hasil_setelah_ppn = $row_kontrak[$nilai] + $hasil_ppn_total;
                                                                            ?>
                                                                            <td class="tg-0lax"> <?= "Rp " . number_format($hasil_setelah_ppn, 2, ',', '.') ?> (PPN 11%)
                                                                            </td>
                                                                            <td class="tg-0lax">
                                                                                <?php if ($row_kontrak[$nilai] == null || $row_kontrak[$nilai] == 0) { ?>
                                                                                    <div class="btn-group">
                                                                                        <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                        </button>
                                                                                        <div class="dropdown-menu" role="menu">
                                                                                            <a data-toggle="tooltip" data-placement="top" title="Edit Nama Kontrak" onclick="modal_level_1(<?= $row_kontrak['id_kontrak'] ?>,'edit_level_1')" class="btn btn-sm btn-info" href="javascript:;"><i class="fas fa fa-edit"></i></a>
                                                                                        </div>
                                                                                    </div>

                                                                                <?php } else { ?>
                                                                                    <div class="btn-group">
                                                                                        <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                        </button>
                                                                                        <div class="dropdown-menu" role="menu">
                                                                                            <a data-toggle="tooltip" data-placement="top" title="Edit Nama Kontrak" onclick="modal_level_1(<?= $row_kontrak['id_kontrak'] ?>,'edit_level_1')" class="btn btn-sm btn-info" href="javascript:;"><i class="fas fa fa-edit"></i></a>
                                                                                        </div>
                                                                                    </div>

                                                                                <?php    } ?>
                                                                            </td>
                                                                        <?php   } ?>
                                                                    <?php } else { ?>
                                                                        <?php
                                                                        $nilai = 'nilai_kontrak_awal';
                                                                        ?>
                                                                        <td style="width: 300px;" class="tg-0lax"> <?= "Rp " . number_format($row_kontrak[$nilai], 2, ',', '.') ?>
                                                                        </td>
                                                                        <td class="tg-0lax">
                                                                            <?php if ($row_kontrak[$nilai] == null || $row_kontrak[$nilai] == 0) { ?>
                                                                                <div class="btn-group">
                                                                                    <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                    </button>
                                                                                    <div class="dropdown-menu" role="menu">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Edit Nama Kontrak" onclick="modal_level_1(<?= $row_kontrak['id_kontrak'] ?>,'edit_level_1')" class="btn btn-sm btn-info dropdown-item" href="javascript:;"><i class="fas fa fa-edit"></i></a>

                                                                                    </div>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="btn-group">
                                                                                    <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                    </button>
                                                                                    <div class="dropdown-menu" role="menu">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Edit Nama Kontrak" onclick="modal_level_1(<?= $row_kontrak['id_kontrak'] ?>,'edit_level_1')" class="btn btn-sm btn-info dropdown-item" href="javascript:;"><i class="fas fa fa-edit"></i></a>

                                                                                    </div>
                                                                                </div>

                                                                            <?php    } ?>
                                                                        </td>
                                                                    <?php  }  ?>
                                                                </tr>
                                                                <!-- BATAS CAPEX -->
                                                                <?php $this->load->view('management_kontrak_batas/batas_capex'); ?>
                                                                <!-- BATAS OPEX -->
                                                                <?php $this->load->view('management_kontrak_batas/batas_opex'); ?>
                                                                <!-- BATAS BUA -->
                                                                <?php $this->load->view('management_kontrak_batas/batas_bua'); ?>
                                                                <!-- BATAS SDM -->
                                                                <?php $this->load->view('management_kontrak_batas/batas_sdm'); ?>

                                                            </tbody>

                                                        </table>
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
            </section>
            <!-- /.content -->
        </div>

</div>
</section>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_nilai_kontrak_awal_level_1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_level_1"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:;" method="post" id="form_simpan_nilai_kontrak_awal_level_1">
                    <input type="hidden" name="type_add">
                    <div class="form-group" style="display: none;" id="form_input_nama_kontrak_level_1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nama Kontrak</label>
                                    <input type="text" name="nama_kontrak" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="display: none;" id="form_input_nilai_level_1">
                        <label for="">Nilai Kontrak Awal</label>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" name="nilai_kontrak_awal" id="nilai_kontrak_awal" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                </div>
                            </div>
                            <div class="col-6">
                                <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_kontrak_awal_level_1">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" style="display: none;" id="button_update_nilai_level_1" class="btn btn-success button_simpan" onclick="Simpan_level_1(<?= $row_kontrak['id_kontrak'] ?>,'update_nilai_level_1')">Simpan</a>
                <a href="javascript:;" id="button_edit_level_1" class="btn btn-success button_simpan" onclick="Simpan_level_1(<?= $row_kontrak['id_kontrak'] ?>,'edit_level_1')">Simpan</a>
            </div>
        </div>
    </div>
</div>

<!-- capex -->
<div class="modal fade" id="modal_excel_capex_2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_2.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_capex') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- capex 1 -->
<div class="modal fade" id="modal_excel_capex_3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_3.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_1') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_capex_urutan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pindahkan Urutan</h5>
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
                                <th>Nama Program</th>
                                <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody class="result_table_capex_urutan">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Update_Turunan()" class="btn btn-primary">Simpan</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_opex_urutan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pindahkan Urutan</h5>
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
                                <th>Nama Program</th>
                                <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody class="result_table_opex_urutan">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Update_Turunan()" class="btn btn-primary">Simpan</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_bua_urutan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pindahkan Urutan</h5>
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
                                <th>Nama Program</th>
                                <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody class="result_table_bua_urutan">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Update_Turunan()" class="btn btn-primary">Simpan</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_sdm_urutan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pindahkan Urutan</h5>
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
                                <th>Nama Program</th>
                                <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody class="result_table_sdm_urutan">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="Update_Turunan()" class="btn btn-primary">Simpan</a>
            </div>
        </div>
    </div>
</div>



<!-- capex 2 -->
<div class="modal fade" id="modal_excel_capex_4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_4.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_2') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- capex 3 -->
<div class="modal fade" id="modal_excel_capex_5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_5.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_3') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- capex 4 -->
<div class="modal fade" id="modal_excel_capex_6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_6.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_4') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- capex 5 -->
<div class="modal fade" id="modal_excel_capex_7" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_7.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_5') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- capex 7 -->
<div class="modal fade" id="modal_excel_capex_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_8.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_7') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- capex 8 -->
<div class="modal fade" id="modal_excel_capex_9" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_9.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_8') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- capex 9 -->
<div class="modal fade" id="modal_excel_capex_10" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_9.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_capex_9') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex -->
<div class="modal fade" id="modal_excel_opex_2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_2.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_opex') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 1 -->
<div class="modal fade" id="modal_excel_opex_3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_3.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_1') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 2 -->
<div class="modal fade" id="modal_excel_opex_4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_4.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_2') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 3 -->
<div class="modal fade" id="modal_excel_opex_5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_5.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_3') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 4 -->
<div class="modal fade" id="modal_excel_opex_6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_6.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_4') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 5 -->
<div class="modal fade" id="modal_excel_opex_7" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_7.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_5') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 6 -->
<div class="modal fade" id="modal_excel_opex_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_8.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_6') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 7 -->
<div class="modal fade" id="modal_excel_opex_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_8.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_7') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 8 -->
<div class="modal fade" id="modal_excel_opex_9" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_9.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_8') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- opex 9 -->
<div class="modal fade" id="modal_excel_opex_10" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_opex_10.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_opex_9') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua -->
<div class="modal fade" id="modal_excel_bua_2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_2.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_bua') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 1 -->
<div class="modal fade" id="modal_excel_bua_3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format Kirun</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_3.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_1') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 2 -->
<div class="modal fade" id="modal_excel_bua_4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_4.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_2') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 3 -->
<div class="modal fade" id="modal_excel_bua_5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_5.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_3') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 4 -->
<div class="modal fade" id="modal_excel_bua_6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_6.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_4') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 5 -->
<div class="modal fade" id="modal_excel_bua_7" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_7.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_5') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 6 -->
<div class="modal fade" id="modal_excel_bua_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_8.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_6') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 7 -->
<div class="modal fade" id="modal_excel_bua_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_9.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_7') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 8 -->
<div class="modal fade" id="modal_excel_bua_9" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua_9.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_8') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- bua 9 -->
<div class="modal fade" id="modal_excel_bua_10" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_bua.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_bua_9') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm -->
<div class="modal fade" id="modal_excel_sdm_2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_2.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_sdm') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 1 -->
<div class="modal fade" id="modal_excel_sdm_3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_3.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_1') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 2 -->
<div class="modal fade" id="modal_excel_sdm_4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_4.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_2') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 3 -->
<div class="modal fade" id="modal_excel_sdm_5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_5.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_3') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 4 -->
<div class="modal fade" id="modal_excel_sdm_6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_6.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_4') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 5 -->
<div class="modal fade" id="modal_excel_sdm_7" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_7.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_5') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 6 -->
<div class="modal fade" id="modal_excel_sdm_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_8.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_6') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 7 -->
<div class="modal fade" id="modal_excel_sdm_8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_9.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_7') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 8 -->
<div class="modal fade" id="modal_excel_sdm_9" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm_9.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_8') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- sdm 9 -->
<div class="modal fade" id="modal_excel_sdm_10" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modal_excel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <div>
                        <label for="">Download Format</label> <br>
                        <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_sdm.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                    </div>
                </center>
                <center>
                    <label for="Divisi" style="font-weight: bold;" class="col-form-label">upload excel</label>
                </center>
                <?= form_open_multipart('excelisasi_kontrak/Upload_excel_kontrak/upload_data_excel_detail_sdm_9') ?>
                <input type="hidden" name="id_global_excel">
                <input type="hidden" name="type_add_excel">
                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">

                <div class="input-group">
                    <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                    <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                </div>
                <?= form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_dok_penunjang" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title"> Dokumen Penunjnag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <center>
                        <form id="form_dok_penunjang" enctype="multipart/form-data">
                            <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                            <input type="hidden" name="sts_dokumen">
                            <div class="input-group col-md-6">
                                <div class="input-group-append">
                                    <button class="input-group-text attach_btn btn-grad100" type="button" id="loadFileXml" value="loadXml" onclick="document.getElementById('file').click();"><i class="fas fa-paperclip"></i></button>
                                    <input type="file" style="display:none;" id="file" class="file_dokumen_penunjang" name="file_dokumen_penunjang" />
                                </div>
                                <input type="text" name="nama_file_dok_penunjang" class="form-control form-control-sm" placeholder="Nama File....">
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
                                <div class="progress-bar progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="">
                                </div>
                            </div>
                        </div>
                    </center>
                    <table class="table table-hover" id="tabledata_dok_penunjang">
                        <thead>
                            <tr class="btn-grad100">
                                <th>No</th>
                                <th>Nama Dokumen</th>
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
<div class="modal fade" id="tambah_addendum" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Addendum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:;" id="form_buat_adendum" method="post">
                    <input type="hidden" name="id_kontrak_adendum" value="<?= $row_kontrak['id_kontrak'] ?>">
                    <div class="form-group">
                        <label for="">No Addendum</label>
                        <select name="no_adendum" class="form-control" style="width: 100%;" id="">
                            <?php $i = 0;
                            for ($i = 1; $i <= 30; $i++) {  ?>
                                <option class="p-2" value="<?= $i ?>"><?= $i ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Refrence</label>
                        <select class="form-control" name="copy_add">
                            <?php foreach ($adendum_result as $key => $value) { ?>
                                <?php
                                if ($value['no_adendum'] == 1) {
                                    $romawi_add = 'Addendum Ke I';
                                } else if ($value['no_adendum'] == 2) {
                                    $romawi_add = 'Addendum Ke II';
                                } else if ($value['no_adendum'] == 3) {
                                    $romawi_add = 'Addendum Ke III';
                                } else if ($value['no_adendum'] == 4) {
                                    $romawi_add = 'Addendum Ke IV';
                                } else if ($value['no_adendum'] == 5) {
                                    $romawi_add = 'Addendum Ke V';
                                } else if ($value['no_adendum'] == 6) {
                                    $romawi_add = 'Addendum Ke VI';
                                } else if ($value['no_adendum'] == 7) {
                                    $romawi_add = 'Addendum Ke VII';
                                } else if ($value['no_adendum'] == 8) {
                                    $romawi_add = 'Addendum Ke VIII';
                                } else if ($value['no_adendum'] == 9) {
                                    $romawi_add = 'Addendum Ke IX';
                                } else if ($value['no_adendum'] == 10) {
                                    $romawi_add = 'Addendum Ke X';
                                } else if ($value['no_adendum'] == 11) {
                                    $romawi_add = 'Addendum Ke XI';
                                } else if ($value['no_adendum'] == 12) {
                                    $romawi_add = 'Addendum Ke XII';
                                } else if ($value['no_adendum'] == 13) {
                                    $romawi_add = 'Addendum Ke XIII';
                                } else if ($value['no_adendum'] == 14) {
                                    $romawi_add = 'Addendum Ke XIV';
                                } else if ($value['no_adendum'] == 15) {
                                    $romawi_add = 'Addendum Ke XV';
                                } else if ($value['no_adendum'] == 16) {
                                    $romawi_add = 'Addendum Ke XVI';
                                } else if ($value['no_adendum'] == 17) {
                                    $romawi_add = 'Addendum Ke XVII';
                                } else if ($value['no_adendum'] == 18) {
                                    $romawi_add = 'Addendum Ke XVIII';
                                } else if ($value['no_adendum'] == 19) {
                                    $romawi_add = 'Addendum Ke XIX';
                                } else if ($value['no_adendum'] == 20) {
                                    $romawi_add = 'Addendum Ke XX';
                                } else if ($value['no_adendum'] == 21) {
                                    $romawi_add = 'Addendum Ke XXI';
                                } else if ($value['no_adendum'] == 22) {
                                    $romawi_add = 'Addendum Ke XXII';
                                } else if ($value['no_adendum'] == 23) {
                                    $romawi_add = 'Addendum Ke XXIII';
                                } else if ($value['no_adendum'] == 24) {
                                    $romawi_add = 'Addendum Ke XXIV';
                                } else if ($value['no_adendum'] == 25) {
                                    $romawi_add = 'Addendum Ke XXV';
                                } else if ($value['no_adendum'] == 26) {
                                    $romawi_add = 'Addendum Ke XXVI';
                                } else if ($value['no_adendum'] == 27) {
                                    $romawi_add = 'Addendum Ke XXVII';
                                } else if ($value['no_adendum'] == 28) {
                                    $romawi_add = 'Addendum Ke XXVIII';
                                } else if ($value['no_adendum'] == 29) {
                                    $romawi_add = 'Addendum Ke XXIX';
                                } else if ($value['no_adendum'] == 30) {
                                    $romawi_add = 'Addendum Ke XXX';
                                } else {
                                    $romawi_add = 'Kontrak Awal';
                                }

                                ?>
                                <option value="<?= $value['no_adendum'] ?>"><?= $romawi_add ?></option>
                            <?php   } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Addendum</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="javascript:;" onclick="angga()" class="btn btn-primary button_simpan"><i class="fa fa-paper-plane" aria-hidden="true"></i> Simpan</a>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->