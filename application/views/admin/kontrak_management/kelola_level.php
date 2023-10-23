<!-- Content Wrapper. Contains page content -->
<style>
    th,
    td {
        white-space: nowrap;
    }

    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }

    tr {
        height: 50px;
    }
</style>
<div class="main-content" style="font-family: 'RNSSanz-Bold'">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 1 : Kontrak Manajemen - <?= $row_kontrak['no_kontrak'] ?> - <?= $row_kontrak['tahun_anggaran'] ?> - Kelola Level Kontrak Manajemen</b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 1 - MODUL KELOLA LEVEL KONTRAK MANAJEMEN</b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;"><b> Modul ini digunakan dalam menyusun Mata Anggaran di dalam Kontrak Manajemen </b></h6>

        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 30px; padding-top: 2px;padding-left:20px;padding-right:20px">
            <button type="button" class="btn btn-outline-primary btn-sm btn-lg mb-2 mt-4" data-toggle="modal" data-target="#tambah_addendum">
                <i class="fas fa fa-plus"></i> Tambah Addendum
            </button>
            <br>

            <div style="overflow-x: auto;overflow-y: auto;height:550px;margin-bottom:-40px">
                <table style="font-family: RNSSanz-Black;text-transform: uppercase;" class="table" id="table_kontrak">
                    <thead class="bg-primary">
                        <tr>
                            <th class="table-primary text-center text-white" style="width: 150px;background-color: #193B53;"><i class="fa fa-list-ol" aria-hidden="true"></i> No</th>
                            <th class="table-primary text-center text-white" style="width: 250px;background-color: #193B53;"><i class="fa fa-database" aria-hidden="true"></i> Nama Program</th>
                            <?php if (!$adendum_result) { ?>
                                <th class="table-warning text-center text-white" style="width: 150px;background-color: #193B53"><i class="fa fa-list" aria-hidden="true"></i> Kontrak Awal
                                    <hr>
                                    <?= $row_kontrak['tahun_kontrak'] ?>
                                </th>
                                <th class="table-secondary text-center text-white" style="width: 130px;background-color: #193B53;"> <a href="javascript:;" style="font-size:11px;margin-top:-20px;" class="btn btn-sm btn-danger btn-lg" onclick="ModalPenunjang('Kontrak Awal')"><i class="fa fa-file-pdf" aria-hidden="true" title="Dok. Penunjang / Kontrak"></i> </a><br><i class="fa fa-key" aria-hidden="true"></i></th>
                            <?php } else { ?>
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
                                    <th class="table-warning text-center text-white" style="width: 200px;background-color: #193B53;"><i class="fa fa-list" aria-hidden="true"></i> <?= $romawi_add ?>
                                        <hr>
                                        <?= $value['tanggal'] ?>
                                    </th>
                                    <th class="table-secondary text-center text-white" style="background-color: #193B53">
                                        <a href="javascript:;" style="font-size:11px;" class="btn btn-sm btn-success btn-sm" onclick="ModalPenunjang('<?= $romawi_add ?>')"><i class="fas fa fa-file" title="Dokumen Penunjang / Kontrak"></i> </a>
                                        <a href="javascript:;" style="font-size:11px;" class="btn btn-sm btn-danger btn-sm" onclick="Hapus_addendum('<?= $romawi_add ?>')"><i class="fas fa fa-trash" title="Hapus Addendum"></i> </a>
                                        <hr>
                                        <i class="fa fa-key" title="Aksi <?= $romawi_add ?>" aria-hidden="true"></i>
                                    </th>
                                <?php   } ?>
                            <?php  }  ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:14px;font-weight: 750;font-family: RNSSanz-Black ">
                            <td style="height: 10px;">
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
                                    // seblom ppn
                                    ?>
                                    <td class="tg-0lax"> <?= number_format($row_kontrak[$nilai], 2, ',', '.') ?>
                                    </td>
                                    <td class="tg-0lax">
                                        <?php if ($row_kontrak[$nilai] == null || $row_kontrak[$nilai] == 0) { ?>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit Nama Kontrak" onclick="modal_level_1(<?= $row_kontrak['id_kontrak'] ?>,'edit_level_1')" class="btn btn-sm btn-info" href="javascript:;"><i class="fas fa fa-edit"></i></a>
                                                </div>
                                            </div>

                                        <?php } else { ?>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
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
                                <td style="width: 300px;" class="tg-0lax"> <?= number_format($row_kontrak[$nilai], 2, ',', '.') ?>
                                </td>
                                <td class="tg-0lax">
                                    <?php if ($row_kontrak[$nilai] == null || $row_kontrak[$nilai] == 0) { ?>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a data-toggle="tooltip" data-placement="top" title="Edit Nama Kontrak" onclick="modal_level_1(<?= $row_kontrak['id_kontrak'] ?>,'edit_level_1')" class="btn btn-sm btn-info dropdown-item" href="javascript:;"><i class="fas fa fa-edit"></i></a>

                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
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
                        <?php if ($row_kontrak['jenis_kontrak'] == 'Unit Price') { ?>

                        <?php    } else { ?>
                            <!-- BATAS BUA -->
                            <?php $this->load->view('management_kontrak_batas/batas_bua'); ?>
                            <!-- BATAS SDM -->
                            <?php $this->load->view('management_kontrak_batas/batas_sdm'); ?>
                        <?php   } ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SUBTOTAL (SEBELUM PPN)</th>
                            <?php if (!$adendum_result) { ?>
                                <th></th>
                                <th>Rp.4000.00</th>
                            <?php } else { ?>
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
                                    // seblom ppn
                                    ?>
                                    <th></th>
                                    <th><?php if ($row_kontrak[$nilai] == NULL || $row_kontrak[$nilai] == 0) { ?>
                                            Rp <?= number_format($row_kontrak[$nilai], 2, ',', '.') ?>
                                        <?php  } else { ?>
                                            Rp <?= number_format($row_kontrak[$nilai], 2, ',', '.') ?>
                                        <?php  } ?>
                                    </th>
                                <?php } ?>
                            <?php } ?>
                        </tr>
                        <tr>
                            <th>PPN -> Diinput Oleh User, 10%, 11%</th>
                            <?php if (!$adendum_result) { ?>
                                <?php
                                $hitung_persen_total_ppn = ($row_kontrak['nilai_kontrak_awal'] * $row_kontrak['ppn_kontrak_addendum_0']) / 100;
                                $hasil_ppn_total = $hitung_persen_total_ppn;
                                // seblom ppn
                                ?>
                                <th></th>
                                <th>Rp <?= number_format($hasil_ppn_total, 2, ',', '.') ?>(
                                    <select name="ppn_kontrak_addendum_0" onchange="pilih_ppn_kontrak('0')">
                                        <option value="<?= $row_kontrak['ppn_kontrak_addendum_0'] ?>"><?= $row_kontrak['ppn_kontrak_addendum_0'] ?>%</option>
                                        <option value="10">10%</option>
                                        <option value="11">11%</option>
                                        <option value="12">12%</option>
                                    </select> )
                                </th>
                            <?php } else { ?>
                                <?php foreach ($adendum_result as $key => $value) { ?>
                                    <th></th>
                                    <th>
                                        <?php if ($value['no_adendum'] == 'kontrak_awal') { ?>
                                            <?php
                                            $hitung_persen_total_ppn = ($row_kontrak['nilai_kontrak_awal'] * $row_kontrak['ppn_kontrak_addendum_0']) / 100;
                                            $hasil_ppn_total = $hitung_persen_total_ppn;
                                            // seblom ppn
                                            ?>
                                            Rp <?= number_format($hasil_ppn_total, 2, ',', '.') ?>
                                            ( <select name="ppn_kontrak_addendum_0" onchange="pilih_ppn_kontrak('<?= $value['no_adendum'] ?>')">
                                                <option value="<?= $row_kontrak['ppn_kontrak_addendum_0'] ?>"><?= $row_kontrak['ppn_kontrak_addendum_0'] ?>%</option>
                                                <option value="10">10%</option>
                                                <option value="11">11%</option>
                                                <option value="12">12%</option>
                                            </select> )
                                        <?php } else { ?>
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

                                            $hitung_persen_total_ppn = ($row_kontrak[$nilai] * $row_kontrak['ppn_kontrak_addendum_' . $value['no_adendum']]) / 100;
                                            $hasil_ppn_total = $hitung_persen_total_ppn;
                                            $hasil_setelah_ppn = $row_kontrak[$nilai] + $hasil_ppn_total;
                                            // seblom ppn
                                            ?>
                                            Rp <?= number_format($hasil_ppn_total, 2, ',', '.') ?>
                                            ( <select name="ppn_kontrak_addendum_<?= $value['no_adendum'] ?>" onchange="pilih_ppn_kontrak('<?= $value['no_adendum'] ?>')">
                                                <option value="<?= $row_kontrak['ppn_kontrak_addendum_' . $value['no_adendum']] ?>"><?= $row_kontrak['ppn_kontrak_addendum_' . $value['no_adendum']] ?>%</option>
                                                <option value="10">10%</option>
                                                <option value="11">11%</option>
                                                <option value="12">12%</option>
                                            </select> )
                                        <?php  }
                                        ?>
                                    <?php } ?>
                                <?php } ?>
                        </tr>

                        <tr>
                            <th>TOTAL(SETELAH PPN) -> SubTotal (Dibulatkan) + PPN</th>
                            <?php if (!$adendum_result) { ?>
                                <?php
                                $hitung_persen_total_ppn = ($row_kontrak['nilai_kontrak_awal'] * $row_kontrak['ppn_kontrak_addendum_0']) / 100;
                                $hasil_ppn_total = $hitung_persen_total_ppn;
                                $hasil_setelah_ppn = $row_kontrak['nilai_kontrak_awal'] + $hasil_ppn_total;
                                // seblom ppn
                                ?>
                                <th></th>
                                <th>Rp <?= number_format($hasil_setelah_ppn, 2, ',', '.') ?>
                                </th>
                            <?php } else { ?>
                                <?php foreach ($adendum_result as $key => $value) { ?>
                                    <th></th>
                                    <th>
                                        <?php if ($value['no_adendum'] == 'kontrak_awal') { ?>
                                            <?php
                                            $hitung_persen_total_ppn = ($row_kontrak['nilai_kontrak_awal'] * $row_kontrak['ppn_kontrak_addendum_0']) / 100;
                                            $hasil_ppn_total = $hitung_persen_total_ppn;
                                            $hasil_setelah_ppn = $row_kontrak['nilai_kontrak_awal'] + $hasil_ppn_total;
                                            // seblom ppn
                                            ?>
                                            Rp <?= number_format($hasil_setelah_ppn, 2, ',', '.') ?>
                                        <?php } else { ?>
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

                                            $hitung_persen_total_ppn = ($row_kontrak[$nilai] * $row_kontrak['ppn_kontrak_addendum_' . $value['no_adendum']]) / 100;
                                            $hasil_ppn_total = $hitung_persen_total_ppn;
                                            $hasil_setelah_ppn = $row_kontrak[$nilai] + $hasil_ppn_total;
                                            // seblom ppn
                                            ?>
                                            Rp <?= number_format($hasil_setelah_ppn, 2, ',', '.') ?>
                                        <?php  }
                                        ?>
                                    <?php } ?>
                                <?php } ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- <div class="card" style="margin-top: -18px; padding: 20px">
            <h6>SUBTOTAL (SEBELUM PPN)</h6>
            <h6>PPN -> Diinput Oleh User, 10%, 11% -> Agar di Round ;0 (Tanpa Koma)</h6>
            <h6>TOTAL(SETELAH PPN) -> SubTotal (Dibulatkan) + PPN</h6>
        </div> -->

        <div class="card" style="margin-top: -18px; padding: 20px">
            <h6>*Pastikan Nilai Nominal hanya diisi pada Turunan Terakhir</h6>
            <h6>*Ubah Nilai Nominal menjadi "0" (nol) jika ingin menurunkan mata anggaran ke level selanjutnya</h6>
            <h6>*Addendum maksimal dalam sistem adalah Addendum 30 dengan Turunan level maksimal 7 level turunan</h6>
            <h6>*Pastikan Kontrak Manajemen / Addendumnya diupload ke dalam sistem. Dokumen pendukung (jika ada) juga dapat diinput ke dalam sistem</h6>

        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
        <!-- lihat ad -->


        <!-- /.col -->

        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row -->

        <!--/. container-fluid -->
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
                            for ($i = 0; $i <= 30; $i++) {  ?>
                                <?php if ($i == 0) { ?>
                                    <option class="p-2" value="kontrak_awal">Kontrak Awal</option>
                                <?php } else { ?>
                                    <option class="p-2" value="<?= $i ?>"><?= $i ?></option>
                                <?php }
                                ?>
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
                            <option value="">Kontrak Awal</option>
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