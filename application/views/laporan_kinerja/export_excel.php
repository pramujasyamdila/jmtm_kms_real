<style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
</style>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export_excel.xls");
?>
<table class="tg">
    <thead>
        <tr style="font-size: 12px;" class="bg-primary">
            <th class="tg-c3ow bg-primary">NO </th>
            <th class="tg-c3ow bg-primary angga">
                <div style="width:200px;">
                    URAIAN
                </div>
            </th>
            <th class="tg-c3ow" style="width:400px">
                <div style="width:200px;">
                    NAMA PEKERJAAN
                </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;">
                    NILAI ADDENDUM <br>
                    KONTRAK MANAJEMEN
                    TAHUN
                </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> VENDOR </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> NOMOR & TANGGAL KONTRAK </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> HPS </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> KONTRAK AWAL VENDOR </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> NILAI ADDENDUM FINAL QUANTITY VENDOR </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> PROGNOSA BEBAN </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> PROGRES FISIK </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> REALISASI PENDAPATAN SESUAI PROGRES FISIK </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> REALISASI BEBAN SESUAI PROGRES FISIK </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> EFISIENSI TOTAL (Rp) </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> MARGIN (%) </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> FEE JMTM (Rp) </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> DIKEMBALIKAN KE OWNER (Rp) </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> PROGNOSA BEBAN AKHIR TAHUN </div>
            </th>
            <th class="tg-c3ow">
                <div style="width:200px;"> KETERANGAN </div>
            </th>
            <th class="tg-c3ow bg-primary">
                <div style="width:115px;"> Aksi </div>
            </th>

    </thead>
    <tbody>

        <!-- CAPEX -->
        <?php
        // capex
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $row_kontrak['id_kontrak']);
        $query_result_capex = $this->db->get() ?>
        <?php
        foreach ($query_result_capex->result_array() as $value_capex) { ?>
            <?php $id_capex = $value_capex['id_capex'];   ?>
            <tr class="bg-info">
                <td class="tg-c3ow"><?= $value_capex['no_urut'] ?></td>
                <td class="tg-c3ow angga">
                    <div style="width:100%;color:black;">
                        <?= $value_capex['nama_uraian'] ?>
                    </div>
                </td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"><?= "Rp " . number_format($value_capex['nilai_capex'], 2, ',', '.') ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_capex);
            $result_program_capex_1 = $this->db->get() ?>
            <?php
            foreach ($result_program_capex_1->result_array() as $value_program_1) { ?>
                <?php $id_program_1 = $value_program_1['id_detail_program_penyedia_jasa'] ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_relasi_beban_1 = ($value_program_1['prognosa_beban'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                if (round($total_margin_1) < 2) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 0  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 70  / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 90  / 100;
                }

                if (round($total_margin_1) < 2) {
                    $fee_owner_1  =  $total_efisiensi_1 * 100  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_owner_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 30 / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas_1 = 0;
                $total_kontrak_awal_vendor_atas_1 += $value_program_1['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_sdm_1 = $value_program_1['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan_1 = $value_program_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_1;
                ?>
                <tr class="text-black">
                    <td class="tg-c3ow"></td>
                    <td class="tg-c3ow">

                    </td>
                    <td class="tg-c3ow angga">
                        <div style="width:200px;background-color:white;color:black;">
                            <?= $value_program_1['nama_pekerjaan_program_mata_anggaran'] ?>
                        </div>
                    </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['nama_penyedia'] ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['no_kontrak_penyedia'] ?></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_program_1['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow">
                        <?= "Rp " . number_format($value_program_1['prognosa_beban'], 2, ',', '.') ?>
                    </td>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= $value_program_1['persen_progres_fisik'] ?>%</td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_1, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= round($total_margin_1);  ?>%</td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_1, 2, ',', '.') ?> </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"> <?= $value_program_1['keterangan_laporan'] ?></td>
                    <td class="tg-c3ow">
                        <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                        <a href="javascript:;" onclick="Keterangan(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                    </td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_capex_detail');
            $this->db->where('tbl_capex_detail.id_capex', $id_capex);
            $query_result_capex_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_capex_detail->result_array() as $value_capex_detail) { ?>
                <?php $id_capex_detail = $value_capex_detail['id_capex_detail'];  ?>
                <tr class="text-black">
                    <td class="tg-c3ow"><?= $value_capex_detail['no_urut'] ?></td>
                    <td class="tg-c3ow angga">
                        <div style="width:100%;color:black;">
                            <?= $value_capex_detail['nama_uraian'] ?>
                        </div>
                    </td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_capex_detail['nilai_detail_capex'], 2, ',', '.') ?></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_capex_detail);
                if ($id_departemen == 4) {
                } else {
                    if ($id_departemen && $id_area == null && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                    } else if ($id_departemen && $id_area && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    } else if ($id_departemen && $id_area && $id_sub_area) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    }
                }
                $result_program_capex_2 = $this->db->get() ?>
                <?php
                foreach ($result_program_capex_2->result_array() as $value_program_2) { ?>
                    <?php $id_program_2 = $value_program_2['id_detail_program_penyedia_jasa'] ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_relasi_beban_2 = ($value_program_2['prognosa_beban'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    if (round($total_margin_2) < 2) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 0  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 70  / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 90  / 100;
                    }

                    if (round($total_margin_2) < 2) {
                        $fee_owner_2  =  $total_efisiensi_2 * 100  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_owner_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 30 / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas_2 = 0;
                    $total_kontrak_awal_vendor_atas_2 += $value_program_2['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_sdm_2 = $value_program_2['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan_2 = $value_program_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_2;
                    ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow">

                        </td>
                        <td class="tg-c3ow angga">
                            <div style="width:200px;background-color:white;color:black;">
                                <?= $value_program_2['nama_pekerjaan_program_mata_anggaran'] ?>
                            </div>
                        </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['nama_penyedia'] ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['no_kontrak_penyedia'] ?></td>
                        <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow">
                            <?= "Rp " . number_format($value_program_2['prognosa_beban'], 2, ',', '.') ?>
                        </td>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= $value_program_2['persen_progres_fisik'] ?>%</td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_2, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= round($total_margin_2);  ?>%</td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_2, 2, ',', '.') ?> </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"> <?= $value_program_2['keterangan_laporan'] ?></td>
                        <td class="tg-c3ow">
                            <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                            <a href="javascript:;" onclick="Keterangan(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_capex_1');
                $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
                $query_result_detail_capex_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_1->result_array() as $value_detail_capex_1) { ?>
                    <?php $id_detail_capex_1 = $value_detail_capex_1['id_detail_capex_1'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_1['no_urut_1_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_1['nama_uraian_1_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_1['nilai_capex_detail_1'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_1);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_1 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_1->result_array() as $value_program_detail_capex_1) { ?>
                        <?php $id_program_detail_capex_1 = $value_program_detail_capex_1['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_1  =  ($value_program_detail_capex_1['nilai_kontrak_km'] * $value_program_detail_capex_1['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_1 = ($value_program_detail_capex_1['prognosa_beban'] * $value_program_detail_capex_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_1 =  $value_program_detail_capex_1['nilai_kontrak_km'] - $value_program_detail_capex_1['prognosa_beban'];
                        $total_margin_detail_capex_1 = ($total_efisiensi_detail_capex_1 / $value_program_detail_capex_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_1  =  ($value_program_detail_capex_1['nilai_kontrak_km'] * $value_program_detail_capex_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_1 =  $value_program_detail_capex_1['nilai_kontrak_km'] - $value_program_detail_capex_1['prognosa_beban'];
                        $total_margin_detail_capex_1 = ($total_efisiensi_detail_capex_1 / $value_program_detail_capex_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_1 =  $value_program_detail_capex_1['nilai_kontrak_km'] - $value_program_detail_capex_1['prognosa_beban'];
                        $total_margin_detail_capex_1 = ($total_efisiensi_detail_capex_1 / $value_program_detail_capex_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_1) < 2) {
                            $fee_jmtm_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 0  / 100;
                        } else if (round($total_margin_detail_capex_1) >= 2 && round($total_margin_detail_capex_1) <= 4) {
                            $fee_jmtm_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 50  / 100;
                        } else if (round($total_margin_detail_capex_1) >= 4 && round($total_margin_detail_capex_1) <= 8) {
                            $fee_jmtm_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 70  / 100;
                        } else if (round($total_margin_detail_capex_1) >= 8) {
                            $fee_jmtm_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_1) < 2) {
                            $fee_owner_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 100  / 100;
                        } else if (round($total_margin_detail_capex_1) >= 2 && round($total_margin_detail_capex_1) <= 4) {
                            $fee_owner_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 50  / 100;
                        } else if (round($total_margin_detail_capex_1) >= 4 && round($total_margin_detail_capex_1) <= 8) {
                            $fee_owner_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 30 / 100;
                        } else if (round($total_margin_detail_capex_1) >= 8) {
                            $fee_owner_detail_capex_1  =  $total_efisiensi_detail_capex_1 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_1 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_1 += $value_program_detail_capex_1['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_1 = $value_program_detail_capex_1['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_1 = $value_program_detail_capex_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_1;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_1['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_1['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_1['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_capex_1['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_1['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_1['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_1, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_1);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_1, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_1['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_capex_2');
                $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
                $query_result_detail_capex_2 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_2->result_array() as $value_detail_capex_2) { ?>
                    <?php $id_detail_capex_2 = $value_detail_capex_2['id_detail_capex_2'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_2['no_urut_2_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_2['nama_uraian_2_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_2['nilai_capex_detail_2'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_2);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_2 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_2->result_array() as $value_program_detail_capex_2) { ?>
                        <?php $id_program_detail_capex_2 = $value_program_detail_capex_2['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_2  =  ($value_program_detail_capex_2['nilai_kontrak_km'] * $value_program_detail_capex_2['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_2 = ($value_program_detail_capex_2['prognosa_beban'] * $value_program_detail_capex_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_2 =  $value_program_detail_capex_2['nilai_kontrak_km'] - $value_program_detail_capex_2['prognosa_beban'];
                        $total_margin_detail_capex_2 = ($total_efisiensi_detail_capex_2 / $value_program_detail_capex_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_2  =  ($value_program_detail_capex_2['nilai_kontrak_km'] * $value_program_detail_capex_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_2 =  $value_program_detail_capex_2['nilai_kontrak_km'] - $value_program_detail_capex_2['prognosa_beban'];
                        $total_margin_detail_capex_2 = ($total_efisiensi_detail_capex_2 / $value_program_detail_capex_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_2 =  $value_program_detail_capex_2['nilai_kontrak_km'] - $value_program_detail_capex_2['prognosa_beban'];
                        $total_margin_detail_capex_2 = ($total_efisiensi_detail_capex_2 / $value_program_detail_capex_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_2) < 2) {
                            $fee_jmtm_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 0  / 100;
                        } else if (round($total_margin_detail_capex_2) >= 2 && round($total_margin_detail_capex_2) <= 4) {
                            $fee_jmtm_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 50  / 100;
                        } else if (round($total_margin_detail_capex_2) >= 4 && round($total_margin_detail_capex_2) <= 8) {
                            $fee_jmtm_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 70  / 100;
                        } else if (round($total_margin_detail_capex_2) >= 8) {
                            $fee_jmtm_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_2) < 2) {
                            $fee_owner_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 100  / 100;
                        } else if (round($total_margin_detail_capex_2) >= 2 && round($total_margin_detail_capex_2) <= 4) {
                            $fee_owner_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 50  / 100;
                        } else if (round($total_margin_detail_capex_2) >= 4 && round($total_margin_detail_capex_2) <= 8) {
                            $fee_owner_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 30 / 100;
                        } else if (round($total_margin_detail_capex_2) >= 8) {
                            $fee_owner_detail_capex_2  =  $total_efisiensi_detail_capex_2 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_2 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_2 += $value_program_detail_capex_2['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_2 = $value_program_detail_capex_2['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_2 = $value_program_detail_capex_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_2;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_2['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_2['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_2['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>

                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_2['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_2['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_2, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_2);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_2, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_2['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_capex_3');
                $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
                $query_result_detail_capex_3 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_3->result_array() as $value_detail_capex_3) { ?>
                    <?php $id_detail_capex_3 = $value_detail_capex_3['id_detail_capex_3'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_3['no_urut_3_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_3['nama_uraian_3_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_3['nilai_capex_detail_3'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_3);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_3 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_3->result_array() as $value_program_detail_capex_3) { ?>
                        <?php $id_program_detail_capex_3 = $value_program_detail_capex_3['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_3  =  ($value_program_detail_capex_3['nilai_kontrak_km'] * $value_program_detail_capex_3['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_3 = ($value_program_detail_capex_3['prognosa_beban'] * $value_program_detail_capex_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_3 =  $value_program_detail_capex_3['nilai_kontrak_km'] - $value_program_detail_capex_3['prognosa_beban'];
                        $total_margin_detail_capex_3 = ($total_efisiensi_detail_capex_3 / $value_program_detail_capex_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_3  =  ($value_program_detail_capex_3['nilai_kontrak_km'] * $value_program_detail_capex_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_3 =  $value_program_detail_capex_3['nilai_kontrak_km'] - $value_program_detail_capex_3['prognosa_beban'];
                        $total_margin_detail_capex_3 = ($total_efisiensi_detail_capex_3 / $value_program_detail_capex_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_3 =  $value_program_detail_capex_3['nilai_kontrak_km'] - $value_program_detail_capex_3['prognosa_beban'];
                        $total_margin_detail_capex_3 = ($total_efisiensi_detail_capex_3 / $value_program_detail_capex_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_3) < 2) {
                            $fee_jmtm_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 0  / 100;
                        } else if (round($total_margin_detail_capex_3) >= 2 && round($total_margin_detail_capex_3) <= 4) {
                            $fee_jmtm_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 50  / 100;
                        } else if (round($total_margin_detail_capex_3) >= 4 && round($total_margin_detail_capex_3) <= 8) {
                            $fee_jmtm_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 70  / 100;
                        } else if (round($total_margin_detail_capex_3) >= 8) {
                            $fee_jmtm_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_3) < 2) {
                            $fee_owner_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 100  / 100;
                        } else if (round($total_margin_detail_capex_3) >= 2 && round($total_margin_detail_capex_3) <= 4) {
                            $fee_owner_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 50  / 100;
                        } else if (round($total_margin_detail_capex_3) >= 4 && round($total_margin_detail_capex_3) <= 8) {
                            $fee_owner_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 30 / 100;
                        } else if (round($total_margin_detail_capex_3) >= 8) {
                            $fee_owner_detail_capex_3  =  $total_efisiensi_detail_capex_3 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_3 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_3 += $value_program_detail_capex_3['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_3 = $value_program_detail_capex_3['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_3 = $value_program_detail_capex_3['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_3;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_3['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_3['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_3['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_3['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_3['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_3['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_3['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_3, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_3);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_3, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_3['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _4
                $this->db->from('tbl_detail_capex_4');
                // _3
                $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
                $query_result_detail_capex_4 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_4->result_array() as $value_detail_capex_4) { ?>
                    <?php $id_detail_capex_4 = $value_detail_capex_4['id_detail_capex_4'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_4['no_urut_4_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_4['nama_uraian_4_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_4['nilai_capex_detail_4'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_4);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_4 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_4->result_array() as $value_program_detail_capex_4) { ?>
                        <?php $id_program_detail_capex_4 = $value_program_detail_capex_4['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_4  =  ($value_program_detail_capex_4['nilai_kontrak_km'] * $value_program_detail_capex_4['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_4 = ($value_program_detail_capex_4['prognosa_beban'] * $value_program_detail_capex_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_4 =  $value_program_detail_capex_4['nilai_kontrak_km'] - $value_program_detail_capex_4['prognosa_beban'];
                        $total_margin_detail_capex_4 = ($total_efisiensi_detail_capex_4 / $value_program_detail_capex_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_4  =  ($value_program_detail_capex_4['nilai_kontrak_km'] * $value_program_detail_capex_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_4 =  $value_program_detail_capex_4['nilai_kontrak_km'] - $value_program_detail_capex_4['prognosa_beban'];
                        $total_margin_detail_capex_4 = ($total_efisiensi_detail_capex_4 / $value_program_detail_capex_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_4 =  $value_program_detail_capex_4['nilai_kontrak_km'] - $value_program_detail_capex_4['prognosa_beban'];
                        $total_margin_detail_capex_4 = ($total_efisiensi_detail_capex_4 / $value_program_detail_capex_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_4) < 2) {
                            $fee_jmtm_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 0  / 100;
                        } else if (round($total_margin_detail_capex_4) >= 2 && round($total_margin_detail_capex_4) <= 4) {
                            $fee_jmtm_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 50  / 100;
                        } else if (round($total_margin_detail_capex_4) >= 4 && round($total_margin_detail_capex_4) <= 8) {
                            $fee_jmtm_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 70  / 100;
                        } else if (round($total_margin_detail_capex_4) >= 8) {
                            $fee_jmtm_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_4) < 2) {
                            $fee_owner_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 100  / 100;
                        } else if (round($total_margin_detail_capex_4) >= 2 && round($total_margin_detail_capex_4) <= 4) {
                            $fee_owner_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 50  / 100;
                        } else if (round($total_margin_detail_capex_4) >= 4 && round($total_margin_detail_capex_4) <= 8) {
                            $fee_owner_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 30 / 100;
                        } else if (round($total_margin_detail_capex_4) >= 8) {
                            $fee_owner_detail_capex_4  =  $total_efisiensi_detail_capex_4 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_4 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_4 += $value_program_detail_capex_4['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_4 = $value_program_detail_capex_4['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_4 = $value_program_detail_capex_4['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_4;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_4['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_4['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_4['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_4['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_capex_4['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_4['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_4['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_4, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_4);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_4, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_4['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _5
                $this->db->from('tbl_detail_capex_5');
                // _4
                $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
                $query_result_detail_capex_5 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_5->result_array() as $value_detail_capex_5) { ?>
                    <?php $id_detail_capex_5 = $value_detail_capex_5['id_detail_capex_5'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_5['no_urut_5_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_5['nama_uraian_5_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_5['nilai_capex_detail_5'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_5);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_5 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_5->result_array() as $value_program_detail_capex_5) { ?>
                        <?php $id_program_detail_capex_5 = $value_program_detail_capex_5['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_5  =  ($value_program_detail_capex_5['nilai_kontrak_km'] * $value_program_detail_capex_5['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_5 = ($value_program_detail_capex_5['prognosa_beban'] * $value_program_detail_capex_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_5 =  $value_program_detail_capex_5['nilai_kontrak_km'] - $value_program_detail_capex_5['prognosa_beban'];
                        $total_margin_detail_capex_5 = ($total_efisiensi_detail_capex_5 / $value_program_detail_capex_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_5  =  ($value_program_detail_capex_5['nilai_kontrak_km'] * $value_program_detail_capex_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_5 =  $value_program_detail_capex_5['nilai_kontrak_km'] - $value_program_detail_capex_5['prognosa_beban'];
                        $total_margin_detail_capex_5 = ($total_efisiensi_detail_capex_5 / $value_program_detail_capex_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_5 =  $value_program_detail_capex_5['nilai_kontrak_km'] - $value_program_detail_capex_5['prognosa_beban'];
                        $total_margin_detail_capex_5 = ($total_efisiensi_detail_capex_5 / $value_program_detail_capex_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_5) < 2) {
                            $fee_jmtm_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 0  / 100;
                        } else if (round($total_margin_detail_capex_5) >= 2 && round($total_margin_detail_capex_5) <= 4) {
                            $fee_jmtm_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 50  / 100;
                        } else if (round($total_margin_detail_capex_5) >= 4 && round($total_margin_detail_capex_5) <= 8) {
                            $fee_jmtm_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 70  / 100;
                        } else if (round($total_margin_detail_capex_5) >= 8) {
                            $fee_jmtm_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_5) < 2) {
                            $fee_owner_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 100  / 100;
                        } else if (round($total_margin_detail_capex_5) >= 2 && round($total_margin_detail_capex_5) <= 4) {
                            $fee_owner_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 50  / 100;
                        } else if (round($total_margin_detail_capex_5) >= 4 && round($total_margin_detail_capex_5) <= 8) {
                            $fee_owner_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 30 / 100;
                        } else if (round($total_margin_detail_capex_5) >= 8) {
                            $fee_owner_detail_capex_5  =  $total_efisiensi_detail_capex_5 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_5 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_5 += $value_program_detail_capex_5['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_5 = $value_program_detail_capex_5['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_5 = $value_program_detail_capex_5['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_5;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_5['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_5['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_5['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_5['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_capex_5['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_5['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_5['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_5, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_5);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_5, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_5['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _6
                $this->db->from('tbl_detail_capex_6');
                // _5
                $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
                $query_result_detail_capex_6 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_6->result_array() as $value_detail_capex_6) { ?>
                    <?php $id_detail_capex_6 = $value_detail_capex_6['id_detail_capex_6'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_6['no_urut_6_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_6['nama_uraian_6_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_6['nilai_capex_detail_6'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_6);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_6 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_6->result_array() as $value_program_detail_capex_6) { ?>
                        <?php $id_program_detail_capex_6 = $value_program_detail_capex_6['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_6  =  ($value_program_detail_capex_6['nilai_kontrak_km'] * $value_program_detail_capex_6['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_6 = ($value_program_detail_capex_6['prognosa_beban'] * $value_program_detail_capex_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_6 =  $value_program_detail_capex_6['nilai_kontrak_km'] - $value_program_detail_capex_6['prognosa_beban'];
                        $total_margin_detail_capex_6 = ($total_efisiensi_detail_capex_6 / $value_program_detail_capex_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_6  =  ($value_program_detail_capex_6['nilai_kontrak_km'] * $value_program_detail_capex_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_6 =  $value_program_detail_capex_6['nilai_kontrak_km'] - $value_program_detail_capex_6['prognosa_beban'];
                        $total_margin_detail_capex_6 = ($total_efisiensi_detail_capex_6 / $value_program_detail_capex_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_6 =  $value_program_detail_capex_6['nilai_kontrak_km'] - $value_program_detail_capex_6['prognosa_beban'];
                        $total_margin_detail_capex_6 = ($total_efisiensi_detail_capex_6 / $value_program_detail_capex_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_6) < 2) {
                            $fee_jmtm_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 0  / 100;
                        } else if (round($total_margin_detail_capex_6) >= 2 && round($total_margin_detail_capex_6) <= 4) {
                            $fee_jmtm_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 50  / 100;
                        } else if (round($total_margin_detail_capex_6) >= 4 && round($total_margin_detail_capex_6) <= 8) {
                            $fee_jmtm_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 70  / 100;
                        } else if (round($total_margin_detail_capex_6) >= 8) {
                            $fee_jmtm_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_6) < 2) {
                            $fee_owner_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 100  / 100;
                        } else if (round($total_margin_detail_capex_6) >= 2 && round($total_margin_detail_capex_6) <= 4) {
                            $fee_owner_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 50  / 100;
                        } else if (round($total_margin_detail_capex_6) >= 4 && round($total_margin_detail_capex_6) <= 8) {
                            $fee_owner_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 30 / 100;
                        } else if (round($total_margin_detail_capex_6) >= 8) {
                            $fee_owner_detail_capex_6  =  $total_efisiensi_detail_capex_6 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_6 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_6 += $value_program_detail_capex_6['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_6 = $value_program_detail_capex_6['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_6 = $value_program_detail_capex_6['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_6;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_6['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_6['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_6['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_6['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_capex_6['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_6['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_6['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_6, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_6);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_6, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_6['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _7
                $this->db->from('tbl_detail_capex_7');
                // _6
                $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
                $query_result_detail_capex_7 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_7->result_array() as $value_detail_capex_7) { ?>
                    <?php $id_detail_capex_7 = $value_detail_capex_7['id_detail_capex_7'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_7['no_urut_7_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_7['nama_uraian_7_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_7['nilai_capex_detail_7'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_7);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_7 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_7->result_array() as $value_program_detail_capex_7) { ?>
                        <?php $id_program_detail_capex_7 = $value_program_detail_capex_7['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_7  =  ($value_program_detail_capex_7['nilai_kontrak_km'] * $value_program_detail_capex_7['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_7 = ($value_program_detail_capex_7['prognosa_beban'] * $value_program_detail_capex_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_7 =  $value_program_detail_capex_7['nilai_kontrak_km'] - $value_program_detail_capex_7['prognosa_beban'];
                        $total_margin_detail_capex_7 = ($total_efisiensi_detail_capex_7 / $value_program_detail_capex_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_7  =  ($value_program_detail_capex_7['nilai_kontrak_km'] * $value_program_detail_capex_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_7 =  $value_program_detail_capex_7['nilai_kontrak_km'] - $value_program_detail_capex_7['prognosa_beban'];
                        $total_margin_detail_capex_7 = ($total_efisiensi_detail_capex_7 / $value_program_detail_capex_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_7 =  $value_program_detail_capex_7['nilai_kontrak_km'] - $value_program_detail_capex_7['prognosa_beban'];
                        $total_margin_detail_capex_7 = ($total_efisiensi_detail_capex_7 / $value_program_detail_capex_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_7) < 2) {
                            $fee_jmtm_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 0  / 100;
                        } else if (round($total_margin_detail_capex_7) >= 2 && round($total_margin_detail_capex_7) <= 4) {
                            $fee_jmtm_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 50  / 100;
                        } else if (round($total_margin_detail_capex_7) >= 4 && round($total_margin_detail_capex_7) <= 8) {
                            $fee_jmtm_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 70  / 100;
                        } else if (round($total_margin_detail_capex_7) >= 8) {
                            $fee_jmtm_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_7) < 2) {
                            $fee_owner_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 100  / 100;
                        } else if (round($total_margin_detail_capex_7) >= 2 && round($total_margin_detail_capex_7) <= 4) {
                            $fee_owner_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 50  / 100;
                        } else if (round($total_margin_detail_capex_7) >= 4 && round($total_margin_detail_capex_7) <= 8) {
                            $fee_owner_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 30 / 100;
                        } else if (round($total_margin_detail_capex_7) >= 8) {
                            $fee_owner_detail_capex_7  =  $total_efisiensi_detail_capex_7 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_7 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_7 += $value_program_detail_capex_7['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_7 = $value_program_detail_capex_7['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_7 = $value_program_detail_capex_7['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_7;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_7['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_7['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_7['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_7['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_capex_7['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_7['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_7['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_7, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_7);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_7, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_7['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _8
                $this->db->from('tbl_detail_capex_8');
                // _7
                $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
                $query_result_detail_capex_8 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_8->result_array() as $value_detail_capex_8) { ?>
                    <?php $id_detail_capex_8 = $value_detail_capex_8['id_detail_capex_8'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_8['no_urut_8_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_8['nama_uraian_8_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_8['nilai_capex_detail_8'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_8);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_8 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_8->result_array() as $value_program_detail_capex_8) { ?>
                        <?php $id_program_detail_capex_8 = $value_program_detail_capex_8['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_8  =  ($value_program_detail_capex_8['nilai_kontrak_km'] * $value_program_detail_capex_8['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_8 = ($value_program_detail_capex_8['prognosa_beban'] * $value_program_detail_capex_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_8 =  $value_program_detail_capex_8['nilai_kontrak_km'] - $value_program_detail_capex_8['prognosa_beban'];
                        $total_margin_detail_capex_8 = ($total_efisiensi_detail_capex_8 / $value_program_detail_capex_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_8  =  ($value_program_detail_capex_8['nilai_kontrak_km'] * $value_program_detail_capex_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_8 =  $value_program_detail_capex_8['nilai_kontrak_km'] - $value_program_detail_capex_8['prognosa_beban'];
                        $total_margin_detail_capex_8 = ($total_efisiensi_detail_capex_8 / $value_program_detail_capex_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_8 =  $value_program_detail_capex_8['nilai_kontrak_km'] - $value_program_detail_capex_8['prognosa_beban'];
                        $total_margin_detail_capex_8 = ($total_efisiensi_detail_capex_8 / $value_program_detail_capex_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_8) < 2) {
                            $fee_jmtm_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 0  / 100;
                        } else if (round($total_margin_detail_capex_8) >= 2 && round($total_margin_detail_capex_8) <= 4) {
                            $fee_jmtm_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 50  / 100;
                        } else if (round($total_margin_detail_capex_8) >= 4 && round($total_margin_detail_capex_8) <= 8) {
                            $fee_jmtm_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 70  / 100;
                        } else if (round($total_margin_detail_capex_8) >= 8) {
                            $fee_jmtm_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_8) < 2) {
                            $fee_owner_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 100  / 100;
                        } else if (round($total_margin_detail_capex_8) >= 2 && round($total_margin_detail_capex_8) <= 4) {
                            $fee_owner_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 50  / 100;
                        } else if (round($total_margin_detail_capex_8) >= 4 && round($total_margin_detail_capex_8) <= 8) {
                            $fee_owner_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 30 / 100;
                        } else if (round($total_margin_detail_capex_8) >= 8) {
                            $fee_owner_detail_capex_8  =  $total_efisiensi_detail_capex_8 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_8 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_8 += $value_program_detail_capex_8['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_8 = $value_program_detail_capex_8['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_8 = $value_program_detail_capex_8['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_8;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_8['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_8['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_8['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_8['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_capex_8['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_8['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_8['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_8, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_8);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_8, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_8['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _9
                $this->db->from('tbl_detail_capex_9');
                // _8
                $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
                $query_result_detail_capex_9 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_capex_9->result_array() as $value_detail_capex_9) { ?>
                    <?php $id_detail_capex_9 = $value_detail_capex_9['id_detail_capex_9'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_capex_9['no_urut_9_capex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_capex_9['nama_uraian_9_capex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_capex_9['nilai_capex_detail_9'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_capex_9);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_capex_9 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_capex_9->result_array() as $value_program_detail_capex_9) { ?>
                        <?php $id_program_detail_capex_9 = $value_program_detail_capex_9['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_9  =  ($value_program_detail_capex_9['nilai_kontrak_km'] * $value_program_detail_capex_9['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_capex_9 = ($value_program_detail_capex_9['prognosa_beban'] * $value_program_detail_capex_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_9 =  $value_program_detail_capex_9['nilai_kontrak_km'] - $value_program_detail_capex_9['prognosa_beban'];
                        $total_margin_detail_capex_9 = ($total_efisiensi_detail_capex_9 / $value_program_detail_capex_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_capex_9  =  ($value_program_detail_capex_9['nilai_kontrak_km'] * $value_program_detail_capex_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_capex_9 =  $value_program_detail_capex_9['nilai_kontrak_km'] - $value_program_detail_capex_9['prognosa_beban'];
                        $total_margin_detail_capex_9 = ($total_efisiensi_detail_capex_9 / $value_program_detail_capex_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_capex_9 =  $value_program_detail_capex_9['nilai_kontrak_km'] - $value_program_detail_capex_9['prognosa_beban'];
                        $total_margin_detail_capex_9 = ($total_efisiensi_detail_capex_9 / $value_program_detail_capex_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_capex_9) < 2) {
                            $fee_jmtm_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 0  / 100;
                        } else if (round($total_margin_detail_capex_9) >= 2 && round($total_margin_detail_capex_9) <= 4) {
                            $fee_jmtm_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 50  / 100;
                        } else if (round($total_margin_detail_capex_9) >= 4 && round($total_margin_detail_capex_9) <= 8) {
                            $fee_jmtm_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 70  / 100;
                        } else if (round($total_margin_detail_capex_9) >= 8) {
                            $fee_jmtm_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 90  / 100;
                        }

                        if (round($total_margin_detail_capex_9) < 2) {
                            $fee_owner_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 100  / 100;
                        } else if (round($total_margin_detail_capex_9) >= 2 && round($total_margin_detail_capex_9) <= 4) {
                            $fee_owner_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 50  / 100;
                        } else if (round($total_margin_detail_capex_9) >= 4 && round($total_margin_detail_capex_9) <= 8) {
                            $fee_owner_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 30 / 100;
                        } else if (round($total_margin_detail_capex_9) >= 8) {
                            $fee_owner_detail_capex_9  =  $total_efisiensi_detail_capex_9 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_capex_9 = 0;
                        $total_kontrak_awal_vendor_atas_detail_capex_9 += $value_program_detail_capex_9['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_capex_9 = $value_program_detail_capex_9['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_capex_9 = $value_program_detail_capex_9['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_capex_9;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_capex_9['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_9['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_9['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_capex_9['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_capex_9['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_capex_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_capex_9['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_capex_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_capex_9['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_capex_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_capex_9, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_capex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_capex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_capex_9);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_capex_9, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_capex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_capex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_capex_9['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_capex_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_capex_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <!-- opex -->
        <?php
        // opex
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $row_kontrak['id_kontrak']);
        $query_result_opex = $this->db->get() ?>
        <?php
        foreach ($query_result_opex->result_array() as $value_opex) { ?>
            <?php $id_opex = $value_opex['id_opex'];   ?>
            <tr class="text-white" style="background-color:purple;">
                <td class="tg-c3ow"><?= $value_opex['no_urut'] ?></td>
                <td class="tg-c3ow angga">
                    <div style="width:100%;color:black;">
                        <?= $value_opex['nama_uraian'] ?>
                    </div>
                </td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"><?= "Rp " . number_format($value_opex['nilai_opex'], 2, ',', '.') ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_opex);
            $result_program_opex_1 = $this->db->get() ?>
            <?php
            foreach ($result_program_opex_1->result_array() as $value_program_1) { ?>
                <?php $id_program_1 = $value_program_1['id_detail_program_penyedia_jasa'] ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_relasi_beban_1 = ($value_program_1['prognosa_beban'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                if (round($total_margin_1) < 2) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 0  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 70  / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 90  / 100;
                }

                if (round($total_margin_1) < 2) {
                    $fee_owner_1  =  $total_efisiensi_1 * 100  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_owner_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 30 / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas_1 = 0;
                $total_kontrak_awal_vendor_atas_1 += $value_program_1['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_sdm_1 = $value_program_1['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan_1 = $value_program_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_1;
                ?>
                <tr class="text-black">
                    <td class="tg-c3ow"></td>
                    <td class="tg-c3ow">

                    </td>
                    <td class="tg-c3ow angga">
                        <div style="width:200px;background-color:white;color:black;">
                            <?= $value_program_1['nama_pekerjaan_program_mata_anggaran'] ?>
                        </div>
                    </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['nama_penyedia'] ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['no_kontrak_penyedia'] ?></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_program_1['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow">
                        <?= "Rp " . number_format($value_program_1['prognosa_beban'], 2, ',', '.') ?>
                    </td>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= $value_program_1['persen_progres_fisik'] ?>%</td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_1, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= round($total_margin_1);  ?>%</td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_1, 2, ',', '.') ?> </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"> <?= $value_program_1['keterangan_laporan'] ?></td>
                    <td class="tg-c3ow">
                        <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                        <a href="javascript:;" onclick="Keterangan(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                    </td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_opex_detail');
            $this->db->where('tbl_opex_detail.id_opex', $id_opex);
            $query_result_opex_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_opex_detail->result_array() as $value_opex_detail) { ?>
                <?php $id_opex_detail = $value_opex_detail['id_opex_detail'];  ?>
                <tr class="text-black">
                    <td class="tg-c3ow"><?= $value_opex_detail['no_urut'] ?></td>
                    <td class="tg-c3ow angga">
                        <div style="width:100%;color:black;">
                            <?= $value_opex_detail['nama_uraian'] ?>
                        </div>
                    </td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_opex_detail['nilai_detail_opex'], 2, ',', '.') ?></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_opex_detail);
                if ($id_departemen == 4) {
                } else {
                    if ($id_departemen && $id_area == null && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                    } else if ($id_departemen && $id_area && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    } else if ($id_departemen && $id_area && $id_sub_area) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    }
                }
                $result_program_opex_2 = $this->db->get() ?>
                <?php
                foreach ($result_program_opex_2->result_array() as $value_program_2) { ?>
                    <?php $id_program_2 = $value_program_2['id_detail_program_penyedia_jasa'] ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_relasi_beban_2 = ($value_program_2['prognosa_beban'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    if (round($total_margin_2) < 2) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 0  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 70  / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 90  / 100;
                    }

                    if (round($total_margin_2) < 2) {
                        $fee_owner_2  =  $total_efisiensi_2 * 100  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_owner_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 30 / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas_2 = 0;
                    $total_kontrak_awal_vendor_atas_2 += $value_program_2['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_sdm_2 = $value_program_2['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan_2 = $value_program_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_2;
                    ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow">

                        </td>
                        <td class="tg-c3ow angga">
                            <div style="width:200px;background-color:white;color:black;">
                                <?= $value_program_2['nama_pekerjaan_program_mata_anggaran'] ?>
                            </div>
                        </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['nama_penyedia'] ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['no_kontrak_penyedia'] ?></td>
                        <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow">
                            <?= "Rp " . number_format($value_program_2['prognosa_beban'], 2, ',', '.') ?>
                        </td>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= $value_program_2['persen_progres_fisik'] ?>%</td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_2, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= round($total_margin_2);  ?>%</td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_2, 2, ',', '.') ?> </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"> <?= $value_program_2['keterangan_laporan'] ?></td>
                        <td class="tg-c3ow">
                            <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                            <a href="javascript:;" onclick="Keterangan(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_opex_1');
                $this->db->where('tbl_detail_opex_1.id_opex_detail', $id_opex_detail);
                $query_result_detail_opex_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_1->result_array() as $value_detail_opex_1) { ?>
                    <?php $id_detail_opex_1 = $value_detail_opex_1['id_detail_opex_1'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_1['no_urut_1_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_1['nama_uraian_1_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_1['nilai_opex_detail_1'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_1);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_1 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_1->result_array() as $value_program_detail_opex_1) { ?>
                        <?php $id_program_detail_opex_1 = $value_program_detail_opex_1['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_1  =  ($value_program_detail_opex_1['nilai_kontrak_km'] * $value_program_detail_opex_1['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_1 = ($value_program_detail_opex_1['prognosa_beban'] * $value_program_detail_opex_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_1 =  $value_program_detail_opex_1['nilai_kontrak_km'] - $value_program_detail_opex_1['prognosa_beban'];
                        $total_margin_detail_opex_1 = ($total_efisiensi_detail_opex_1 / $value_program_detail_opex_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_1  =  ($value_program_detail_opex_1['nilai_kontrak_km'] * $value_program_detail_opex_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_1 =  $value_program_detail_opex_1['nilai_kontrak_km'] - $value_program_detail_opex_1['prognosa_beban'];
                        $total_margin_detail_opex_1 = ($total_efisiensi_detail_opex_1 / $value_program_detail_opex_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_1 =  $value_program_detail_opex_1['nilai_kontrak_km'] - $value_program_detail_opex_1['prognosa_beban'];
                        $total_margin_detail_opex_1 = ($total_efisiensi_detail_opex_1 / $value_program_detail_opex_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_1) < 2) {
                            $fee_jmtm_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 0  / 100;
                        } else if (round($total_margin_detail_opex_1) >= 2 && round($total_margin_detail_opex_1) <= 4) {
                            $fee_jmtm_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 50  / 100;
                        } else if (round($total_margin_detail_opex_1) >= 4 && round($total_margin_detail_opex_1) <= 8) {
                            $fee_jmtm_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 70  / 100;
                        } else if (round($total_margin_detail_opex_1) >= 8) {
                            $fee_jmtm_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_1) < 2) {
                            $fee_owner_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 100  / 100;
                        } else if (round($total_margin_detail_opex_1) >= 2 && round($total_margin_detail_opex_1) <= 4) {
                            $fee_owner_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 50  / 100;
                        } else if (round($total_margin_detail_opex_1) >= 4 && round($total_margin_detail_opex_1) <= 8) {
                            $fee_owner_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 30 / 100;
                        } else if (round($total_margin_detail_opex_1) >= 8) {
                            $fee_owner_detail_opex_1  =  $total_efisiensi_detail_opex_1 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_1 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_1 += $value_program_detail_opex_1['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_1 = $value_program_detail_opex_1['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_1 = $value_program_detail_opex_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_1;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_1['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_1['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_1['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_opex_1['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_1['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_1['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_1, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_1);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_1, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_1['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_opex_2');
                $this->db->where('tbl_detail_opex_2.id_detail_opex_1', $id_detail_opex_1);
                $query_result_detail_opex_2 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_2->result_array() as $value_detail_opex_2) { ?>
                    <?php $id_detail_opex_2 = $value_detail_opex_2['id_detail_opex_2'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_2['no_urut_2_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_2['nama_uraian_2_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_2['nilai_opex_detail_2'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_2);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_2 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_2->result_array() as $value_program_detail_opex_2) { ?>
                        <?php $id_program_detail_opex_2 = $value_program_detail_opex_2['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_2  =  ($value_program_detail_opex_2['nilai_kontrak_km'] * $value_program_detail_opex_2['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_2 = ($value_program_detail_opex_2['prognosa_beban'] * $value_program_detail_opex_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_2 =  $value_program_detail_opex_2['nilai_kontrak_km'] - $value_program_detail_opex_2['prognosa_beban'];
                        $total_margin_detail_opex_2 = ($total_efisiensi_detail_opex_2 / $value_program_detail_opex_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_2  =  ($value_program_detail_opex_2['nilai_kontrak_km'] * $value_program_detail_opex_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_2 =  $value_program_detail_opex_2['nilai_kontrak_km'] - $value_program_detail_opex_2['prognosa_beban'];
                        $total_margin_detail_opex_2 = ($total_efisiensi_detail_opex_2 / $value_program_detail_opex_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_2 =  $value_program_detail_opex_2['nilai_kontrak_km'] - $value_program_detail_opex_2['prognosa_beban'];
                        $total_margin_detail_opex_2 = ($total_efisiensi_detail_opex_2 / $value_program_detail_opex_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_2) < 2) {
                            $fee_jmtm_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 0  / 100;
                        } else if (round($total_margin_detail_opex_2) >= 2 && round($total_margin_detail_opex_2) <= 4) {
                            $fee_jmtm_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 50  / 100;
                        } else if (round($total_margin_detail_opex_2) >= 4 && round($total_margin_detail_opex_2) <= 8) {
                            $fee_jmtm_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 70  / 100;
                        } else if (round($total_margin_detail_opex_2) >= 8) {
                            $fee_jmtm_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_2) < 2) {
                            $fee_owner_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 100  / 100;
                        } else if (round($total_margin_detail_opex_2) >= 2 && round($total_margin_detail_opex_2) <= 4) {
                            $fee_owner_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 50  / 100;
                        } else if (round($total_margin_detail_opex_2) >= 4 && round($total_margin_detail_opex_2) <= 8) {
                            $fee_owner_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 30 / 100;
                        } else if (round($total_margin_detail_opex_2) >= 8) {
                            $fee_owner_detail_opex_2  =  $total_efisiensi_detail_opex_2 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_2 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_2 += $value_program_detail_opex_2['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_2 = $value_program_detail_opex_2['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_2 = $value_program_detail_opex_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_2;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_2['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_2['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_2['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>

                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_2['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_2['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_2, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_2);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_2, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_2['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_opex_3');
                $this->db->where('tbl_detail_opex_3.id_detail_opex_2', $id_detail_opex_2);
                $query_result_detail_opex_3 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_3->result_array() as $value_detail_opex_3) { ?>
                    <?php $id_detail_opex_3 = $value_detail_opex_3['id_detail_opex_3'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_3['no_urut_3_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_3['nama_uraian_3_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_3['nilai_opex_detail_3'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_3);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_3 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_3->result_array() as $value_program_detail_opex_3) { ?>
                        <?php $id_program_detail_opex_3 = $value_program_detail_opex_3['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_3  =  ($value_program_detail_opex_3['nilai_kontrak_km'] * $value_program_detail_opex_3['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_3 = ($value_program_detail_opex_3['prognosa_beban'] * $value_program_detail_opex_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_3 =  $value_program_detail_opex_3['nilai_kontrak_km'] - $value_program_detail_opex_3['prognosa_beban'];
                        $total_margin_detail_opex_3 = ($total_efisiensi_detail_opex_3 / $value_program_detail_opex_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_3  =  ($value_program_detail_opex_3['nilai_kontrak_km'] * $value_program_detail_opex_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_3 =  $value_program_detail_opex_3['nilai_kontrak_km'] - $value_program_detail_opex_3['prognosa_beban'];
                        $total_margin_detail_opex_3 = ($total_efisiensi_detail_opex_3 / $value_program_detail_opex_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_3 =  $value_program_detail_opex_3['nilai_kontrak_km'] - $value_program_detail_opex_3['prognosa_beban'];
                        $total_margin_detail_opex_3 = ($total_efisiensi_detail_opex_3 / $value_program_detail_opex_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_3) < 2) {
                            $fee_jmtm_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 0  / 100;
                        } else if (round($total_margin_detail_opex_3) >= 2 && round($total_margin_detail_opex_3) <= 4) {
                            $fee_jmtm_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 50  / 100;
                        } else if (round($total_margin_detail_opex_3) >= 4 && round($total_margin_detail_opex_3) <= 8) {
                            $fee_jmtm_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 70  / 100;
                        } else if (round($total_margin_detail_opex_3) >= 8) {
                            $fee_jmtm_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_3) < 2) {
                            $fee_owner_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 100  / 100;
                        } else if (round($total_margin_detail_opex_3) >= 2 && round($total_margin_detail_opex_3) <= 4) {
                            $fee_owner_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 50  / 100;
                        } else if (round($total_margin_detail_opex_3) >= 4 && round($total_margin_detail_opex_3) <= 8) {
                            $fee_owner_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 30 / 100;
                        } else if (round($total_margin_detail_opex_3) >= 8) {
                            $fee_owner_detail_opex_3  =  $total_efisiensi_detail_opex_3 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_3 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_3 += $value_program_detail_opex_3['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_3 = $value_program_detail_opex_3['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_3 = $value_program_detail_opex_3['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_3;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_3['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_3['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_3['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_3['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_3['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_3['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_3['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_3, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_3);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_3, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_3['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _4
                $this->db->from('tbl_detail_opex_4');
                // _3
                $this->db->where('tbl_detail_opex_4.id_detail_opex_3', $id_detail_opex_3);
                $query_result_detail_opex_4 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_4->result_array() as $value_detail_opex_4) { ?>
                    <?php $id_detail_opex_4 = $value_detail_opex_4['id_detail_opex_4'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_4['no_urut_4_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_4['nama_uraian_4_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_4['nilai_opex_detail_4'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_4);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_4 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_4->result_array() as $value_program_detail_opex_4) { ?>
                        <?php $id_program_detail_opex_4 = $value_program_detail_opex_4['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_4  =  ($value_program_detail_opex_4['nilai_kontrak_km'] * $value_program_detail_opex_4['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_4 = ($value_program_detail_opex_4['prognosa_beban'] * $value_program_detail_opex_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_4 =  $value_program_detail_opex_4['nilai_kontrak_km'] - $value_program_detail_opex_4['prognosa_beban'];
                        $total_margin_detail_opex_4 = ($total_efisiensi_detail_opex_4 / $value_program_detail_opex_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_4  =  ($value_program_detail_opex_4['nilai_kontrak_km'] * $value_program_detail_opex_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_4 =  $value_program_detail_opex_4['nilai_kontrak_km'] - $value_program_detail_opex_4['prognosa_beban'];
                        $total_margin_detail_opex_4 = ($total_efisiensi_detail_opex_4 / $value_program_detail_opex_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_4 =  $value_program_detail_opex_4['nilai_kontrak_km'] - $value_program_detail_opex_4['prognosa_beban'];
                        $total_margin_detail_opex_4 = ($total_efisiensi_detail_opex_4 / $value_program_detail_opex_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_4) < 2) {
                            $fee_jmtm_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 0  / 100;
                        } else if (round($total_margin_detail_opex_4) >= 2 && round($total_margin_detail_opex_4) <= 4) {
                            $fee_jmtm_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 50  / 100;
                        } else if (round($total_margin_detail_opex_4) >= 4 && round($total_margin_detail_opex_4) <= 8) {
                            $fee_jmtm_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 70  / 100;
                        } else if (round($total_margin_detail_opex_4) >= 8) {
                            $fee_jmtm_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_4) < 2) {
                            $fee_owner_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 100  / 100;
                        } else if (round($total_margin_detail_opex_4) >= 2 && round($total_margin_detail_opex_4) <= 4) {
                            $fee_owner_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 50  / 100;
                        } else if (round($total_margin_detail_opex_4) >= 4 && round($total_margin_detail_opex_4) <= 8) {
                            $fee_owner_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 30 / 100;
                        } else if (round($total_margin_detail_opex_4) >= 8) {
                            $fee_owner_detail_opex_4  =  $total_efisiensi_detail_opex_4 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_4 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_4 += $value_program_detail_opex_4['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_4 = $value_program_detail_opex_4['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_4 = $value_program_detail_opex_4['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_4;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_4['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_4['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_4['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_4['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_opex_4['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_4['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_4['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_4, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_4);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_4, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_4['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _5
                $this->db->from('tbl_detail_opex_5');
                // _4
                $this->db->where('tbl_detail_opex_5.id_detail_opex_4', $id_detail_opex_4);
                $query_result_detail_opex_5 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_5->result_array() as $value_detail_opex_5) { ?>
                    <?php $id_detail_opex_5 = $value_detail_opex_5['id_detail_opex_5'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_5['no_urut_5_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_5['nama_uraian_5_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_5['nilai_opex_detail_5'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_5);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_5 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_5->result_array() as $value_program_detail_opex_5) { ?>
                        <?php $id_program_detail_opex_5 = $value_program_detail_opex_5['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_5  =  ($value_program_detail_opex_5['nilai_kontrak_km'] * $value_program_detail_opex_5['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_5 = ($value_program_detail_opex_5['prognosa_beban'] * $value_program_detail_opex_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_5 =  $value_program_detail_opex_5['nilai_kontrak_km'] - $value_program_detail_opex_5['prognosa_beban'];
                        $total_margin_detail_opex_5 = ($total_efisiensi_detail_opex_5 / $value_program_detail_opex_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_5  =  ($value_program_detail_opex_5['nilai_kontrak_km'] * $value_program_detail_opex_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_5 =  $value_program_detail_opex_5['nilai_kontrak_km'] - $value_program_detail_opex_5['prognosa_beban'];
                        $total_margin_detail_opex_5 = ($total_efisiensi_detail_opex_5 / $value_program_detail_opex_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_5 =  $value_program_detail_opex_5['nilai_kontrak_km'] - $value_program_detail_opex_5['prognosa_beban'];
                        $total_margin_detail_opex_5 = ($total_efisiensi_detail_opex_5 / $value_program_detail_opex_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_5) < 2) {
                            $fee_jmtm_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 0  / 100;
                        } else if (round($total_margin_detail_opex_5) >= 2 && round($total_margin_detail_opex_5) <= 4) {
                            $fee_jmtm_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 50  / 100;
                        } else if (round($total_margin_detail_opex_5) >= 4 && round($total_margin_detail_opex_5) <= 8) {
                            $fee_jmtm_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 70  / 100;
                        } else if (round($total_margin_detail_opex_5) >= 8) {
                            $fee_jmtm_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_5) < 2) {
                            $fee_owner_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 100  / 100;
                        } else if (round($total_margin_detail_opex_5) >= 2 && round($total_margin_detail_opex_5) <= 4) {
                            $fee_owner_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 50  / 100;
                        } else if (round($total_margin_detail_opex_5) >= 4 && round($total_margin_detail_opex_5) <= 8) {
                            $fee_owner_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 30 / 100;
                        } else if (round($total_margin_detail_opex_5) >= 8) {
                            $fee_owner_detail_opex_5  =  $total_efisiensi_detail_opex_5 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_5 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_5 += $value_program_detail_opex_5['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_5 = $value_program_detail_opex_5['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_5 = $value_program_detail_opex_5['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_5;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_5['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_5['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_5['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_5['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_opex_5['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_5['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_5['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_5, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_5);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_5, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_5['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _6
                $this->db->from('tbl_detail_opex_6');
                // _5
                $this->db->where('tbl_detail_opex_6.id_detail_opex_5', $id_detail_opex_5);
                $query_result_detail_opex_6 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_6->result_array() as $value_detail_opex_6) { ?>
                    <?php $id_detail_opex_6 = $value_detail_opex_6['id_detail_opex_6'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_6['no_urut_6_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_6['nama_uraian_6_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_6['nilai_opex_detail_6'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_6);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_6 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_6->result_array() as $value_program_detail_opex_6) { ?>
                        <?php $id_program_detail_opex_6 = $value_program_detail_opex_6['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_6  =  ($value_program_detail_opex_6['nilai_kontrak_km'] * $value_program_detail_opex_6['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_6 = ($value_program_detail_opex_6['prognosa_beban'] * $value_program_detail_opex_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_6 =  $value_program_detail_opex_6['nilai_kontrak_km'] - $value_program_detail_opex_6['prognosa_beban'];
                        $total_margin_detail_opex_6 = ($total_efisiensi_detail_opex_6 / $value_program_detail_opex_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_6  =  ($value_program_detail_opex_6['nilai_kontrak_km'] * $value_program_detail_opex_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_6 =  $value_program_detail_opex_6['nilai_kontrak_km'] - $value_program_detail_opex_6['prognosa_beban'];
                        $total_margin_detail_opex_6 = ($total_efisiensi_detail_opex_6 / $value_program_detail_opex_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_6 =  $value_program_detail_opex_6['nilai_kontrak_km'] - $value_program_detail_opex_6['prognosa_beban'];
                        $total_margin_detail_opex_6 = ($total_efisiensi_detail_opex_6 / $value_program_detail_opex_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_6) < 2) {
                            $fee_jmtm_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 0  / 100;
                        } else if (round($total_margin_detail_opex_6) >= 2 && round($total_margin_detail_opex_6) <= 4) {
                            $fee_jmtm_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 50  / 100;
                        } else if (round($total_margin_detail_opex_6) >= 4 && round($total_margin_detail_opex_6) <= 8) {
                            $fee_jmtm_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 70  / 100;
                        } else if (round($total_margin_detail_opex_6) >= 8) {
                            $fee_jmtm_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_6) < 2) {
                            $fee_owner_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 100  / 100;
                        } else if (round($total_margin_detail_opex_6) >= 2 && round($total_margin_detail_opex_6) <= 4) {
                            $fee_owner_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 50  / 100;
                        } else if (round($total_margin_detail_opex_6) >= 4 && round($total_margin_detail_opex_6) <= 8) {
                            $fee_owner_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 30 / 100;
                        } else if (round($total_margin_detail_opex_6) >= 8) {
                            $fee_owner_detail_opex_6  =  $total_efisiensi_detail_opex_6 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_6 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_6 += $value_program_detail_opex_6['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_6 = $value_program_detail_opex_6['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_6 = $value_program_detail_opex_6['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_6;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_6['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_6['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_6['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_6['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_opex_6['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_6['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_6['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_6, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_6);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_6, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_6['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _7
                $this->db->from('tbl_detail_opex_7');
                // _6
                $this->db->where('tbl_detail_opex_7.id_detail_opex_6', $id_detail_opex_6);
                $query_result_detail_opex_7 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_7->result_array() as $value_detail_opex_7) { ?>
                    <?php $id_detail_opex_7 = $value_detail_opex_7['id_detail_opex_7'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_7['no_urut_7_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_7['nama_uraian_7_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_7['nilai_opex_detail_7'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_7);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_7 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_7->result_array() as $value_program_detail_opex_7) { ?>
                        <?php $id_program_detail_opex_7 = $value_program_detail_opex_7['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_7  =  ($value_program_detail_opex_7['nilai_kontrak_km'] * $value_program_detail_opex_7['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_7 = ($value_program_detail_opex_7['prognosa_beban'] * $value_program_detail_opex_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_7 =  $value_program_detail_opex_7['nilai_kontrak_km'] - $value_program_detail_opex_7['prognosa_beban'];
                        $total_margin_detail_opex_7 = ($total_efisiensi_detail_opex_7 / $value_program_detail_opex_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_7  =  ($value_program_detail_opex_7['nilai_kontrak_km'] * $value_program_detail_opex_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_7 =  $value_program_detail_opex_7['nilai_kontrak_km'] - $value_program_detail_opex_7['prognosa_beban'];
                        $total_margin_detail_opex_7 = ($total_efisiensi_detail_opex_7 / $value_program_detail_opex_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_7 =  $value_program_detail_opex_7['nilai_kontrak_km'] - $value_program_detail_opex_7['prognosa_beban'];
                        $total_margin_detail_opex_7 = ($total_efisiensi_detail_opex_7 / $value_program_detail_opex_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_7) < 2) {
                            $fee_jmtm_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 0  / 100;
                        } else if (round($total_margin_detail_opex_7) >= 2 && round($total_margin_detail_opex_7) <= 4) {
                            $fee_jmtm_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 50  / 100;
                        } else if (round($total_margin_detail_opex_7) >= 4 && round($total_margin_detail_opex_7) <= 8) {
                            $fee_jmtm_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 70  / 100;
                        } else if (round($total_margin_detail_opex_7) >= 8) {
                            $fee_jmtm_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_7) < 2) {
                            $fee_owner_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 100  / 100;
                        } else if (round($total_margin_detail_opex_7) >= 2 && round($total_margin_detail_opex_7) <= 4) {
                            $fee_owner_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 50  / 100;
                        } else if (round($total_margin_detail_opex_7) >= 4 && round($total_margin_detail_opex_7) <= 8) {
                            $fee_owner_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 30 / 100;
                        } else if (round($total_margin_detail_opex_7) >= 8) {
                            $fee_owner_detail_opex_7  =  $total_efisiensi_detail_opex_7 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_7 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_7 += $value_program_detail_opex_7['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_7 = $value_program_detail_opex_7['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_7 = $value_program_detail_opex_7['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_7;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_7['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_7['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_7['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_7['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_opex_7['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_7['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_7['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_7, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_7);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_7, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_7['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _8
                $this->db->from('tbl_detail_opex_8');
                // _7
                $this->db->where('tbl_detail_opex_8.id_detail_opex_7', $id_detail_opex_7);
                $query_result_detail_opex_8 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_8->result_array() as $value_detail_opex_8) { ?>
                    <?php $id_detail_opex_8 = $value_detail_opex_8['id_detail_opex_8'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_8['no_urut_8_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_8['nama_uraian_8_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_8['nilai_opex_detail_8'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_8);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_8 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_8->result_array() as $value_program_detail_opex_8) { ?>
                        <?php $id_program_detail_opex_8 = $value_program_detail_opex_8['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_8  =  ($value_program_detail_opex_8['nilai_kontrak_km'] * $value_program_detail_opex_8['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_8 = ($value_program_detail_opex_8['prognosa_beban'] * $value_program_detail_opex_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_8 =  $value_program_detail_opex_8['nilai_kontrak_km'] - $value_program_detail_opex_8['prognosa_beban'];
                        $total_margin_detail_opex_8 = ($total_efisiensi_detail_opex_8 / $value_program_detail_opex_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_8  =  ($value_program_detail_opex_8['nilai_kontrak_km'] * $value_program_detail_opex_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_8 =  $value_program_detail_opex_8['nilai_kontrak_km'] - $value_program_detail_opex_8['prognosa_beban'];
                        $total_margin_detail_opex_8 = ($total_efisiensi_detail_opex_8 / $value_program_detail_opex_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_8 =  $value_program_detail_opex_8['nilai_kontrak_km'] - $value_program_detail_opex_8['prognosa_beban'];
                        $total_margin_detail_opex_8 = ($total_efisiensi_detail_opex_8 / $value_program_detail_opex_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_8) < 2) {
                            $fee_jmtm_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 0  / 100;
                        } else if (round($total_margin_detail_opex_8) >= 2 && round($total_margin_detail_opex_8) <= 4) {
                            $fee_jmtm_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 50  / 100;
                        } else if (round($total_margin_detail_opex_8) >= 4 && round($total_margin_detail_opex_8) <= 8) {
                            $fee_jmtm_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 70  / 100;
                        } else if (round($total_margin_detail_opex_8) >= 8) {
                            $fee_jmtm_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_8) < 2) {
                            $fee_owner_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 100  / 100;
                        } else if (round($total_margin_detail_opex_8) >= 2 && round($total_margin_detail_opex_8) <= 4) {
                            $fee_owner_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 50  / 100;
                        } else if (round($total_margin_detail_opex_8) >= 4 && round($total_margin_detail_opex_8) <= 8) {
                            $fee_owner_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 30 / 100;
                        } else if (round($total_margin_detail_opex_8) >= 8) {
                            $fee_owner_detail_opex_8  =  $total_efisiensi_detail_opex_8 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_8 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_8 += $value_program_detail_opex_8['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_8 = $value_program_detail_opex_8['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_8 = $value_program_detail_opex_8['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_8;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_8['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_8['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_8['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_8['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_opex_8['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_8['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_8['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_8, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_8);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_8, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_8['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _9
                $this->db->from('tbl_detail_opex_9');
                // _8
                $this->db->where('tbl_detail_opex_9.id_detail_opex_8', $id_detail_opex_8);
                $query_result_detail_opex_9 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_opex_9->result_array() as $value_detail_opex_9) { ?>
                    <?php $id_detail_opex_9 = $value_detail_opex_9['id_detail_opex_9'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_opex_9['no_urut_9_opex'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_opex_9['nama_uraian_9_opex'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_opex_9['nilai_opex_detail_9'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_opex_9);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_opex_9 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_opex_9->result_array() as $value_program_detail_opex_9) { ?>
                        <?php $id_program_detail_opex_9 = $value_program_detail_opex_9['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_9  =  ($value_program_detail_opex_9['nilai_kontrak_km'] * $value_program_detail_opex_9['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_opex_9 = ($value_program_detail_opex_9['prognosa_beban'] * $value_program_detail_opex_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_9 =  $value_program_detail_opex_9['nilai_kontrak_km'] - $value_program_detail_opex_9['prognosa_beban'];
                        $total_margin_detail_opex_9 = ($total_efisiensi_detail_opex_9 / $value_program_detail_opex_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_opex_9  =  ($value_program_detail_opex_9['nilai_kontrak_km'] * $value_program_detail_opex_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_opex_9 =  $value_program_detail_opex_9['nilai_kontrak_km'] - $value_program_detail_opex_9['prognosa_beban'];
                        $total_margin_detail_opex_9 = ($total_efisiensi_detail_opex_9 / $value_program_detail_opex_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_opex_9 =  $value_program_detail_opex_9['nilai_kontrak_km'] - $value_program_detail_opex_9['prognosa_beban'];
                        $total_margin_detail_opex_9 = ($total_efisiensi_detail_opex_9 / $value_program_detail_opex_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_opex_9) < 2) {
                            $fee_jmtm_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 0  / 100;
                        } else if (round($total_margin_detail_opex_9) >= 2 && round($total_margin_detail_opex_9) <= 4) {
                            $fee_jmtm_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 50  / 100;
                        } else if (round($total_margin_detail_opex_9) >= 4 && round($total_margin_detail_opex_9) <= 8) {
                            $fee_jmtm_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 70  / 100;
                        } else if (round($total_margin_detail_opex_9) >= 8) {
                            $fee_jmtm_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 90  / 100;
                        }

                        if (round($total_margin_detail_opex_9) < 2) {
                            $fee_owner_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 100  / 100;
                        } else if (round($total_margin_detail_opex_9) >= 2 && round($total_margin_detail_opex_9) <= 4) {
                            $fee_owner_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 50  / 100;
                        } else if (round($total_margin_detail_opex_9) >= 4 && round($total_margin_detail_opex_9) <= 8) {
                            $fee_owner_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 30 / 100;
                        } else if (round($total_margin_detail_opex_9) >= 8) {
                            $fee_owner_detail_opex_9  =  $total_efisiensi_detail_opex_9 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_opex_9 = 0;
                        $total_kontrak_awal_vendor_atas_detail_opex_9 += $value_program_detail_opex_9['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_opex_9 = $value_program_detail_opex_9['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_opex_9 = $value_program_detail_opex_9['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_opex_9;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_opex_9['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_9['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_9['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_opex_9['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_opex_9['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_opex_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_opex_9['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_opex_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_opex_9['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_opex_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_opex_9, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_opex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_opex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_opex_9);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_opex_9, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_opex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_opex_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_opex_9['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_opex_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_opex_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> opext Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>


        <!-- BUA -->
        <?php
        // bua
        $this->db->select('*');
        $this->db->from('tbl_bua');
        $this->db->where('tbl_bua.id_kontrak', $row_kontrak['id_kontrak']);
        $query_result_bua = $this->db->get() ?>
        <?php
        foreach ($query_result_bua->result_array() as $value_bua) { ?>
            <?php $id_bua = $value_bua['id_bua'];   ?>
            <tr class="text-white" style="background-color:purple;">
                <td class="tg-c3ow"><?= $value_bua['no_urut'] ?></td>
                <td class="tg-c3ow angga">
                    <div style="width:100%;color:black;">
                        <?= $value_bua['nama_uraian'] ?>
                    </div>
                </td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"><?= "Rp " . number_format($value_bua['nilai_bua'], 2, ',', '.') ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_bua);
            $result_program_bua_1 = $this->db->get() ?>
            <?php
            foreach ($result_program_bua_1->result_array() as $value_program_1) { ?>
                <?php $id_program_1 = $value_program_1['id_detail_program_penyedia_jasa'] ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_relasi_beban_1 = ($value_program_1['prognosa_beban'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                if (round($total_margin_1) < 2) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 0  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 70  / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 90  / 100;
                }

                if (round($total_margin_1) < 2) {
                    $fee_owner_1  =  $total_efisiensi_1 * 100  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_owner_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 30 / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas_1 = 0;
                $total_kontrak_awal_vendor_atas_1 += $value_program_1['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_sdm_1 = $value_program_1['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan_1 = $value_program_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_1;
                ?>
                <tr class="text-black">
                    <td class="tg-c3ow"></td>
                    <td class="tg-c3ow">

                    </td>
                    <td class="tg-c3ow angga">
                        <div style="width:200px;background-color:white;color:black;">
                            <?= $value_program_1['nama_pekerjaan_program_mata_anggaran'] ?>
                        </div>
                    </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['nama_penyedia'] ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['no_kontrak_penyedia'] ?></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_program_1['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow">
                        <?= "Rp " . number_format($value_program_1['prognosa_beban'], 2, ',', '.') ?>
                    </td>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= $value_program_1['persen_progres_fisik'] ?>%</td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_1, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= round($total_margin_1);  ?>%</td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_1, 2, ',', '.') ?> </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"> <?= $value_program_1['keterangan_laporan'] ?></td>
                    <td class="tg-c3ow">
                        <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                        <a href="javascript:;" onclick="Keterangan(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                    </td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_bua_detail');
            $this->db->where('tbl_bua_detail.id_bua', $id_bua);
            $query_result_bua_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_bua_detail->result_array() as $value_bua_detail) { ?>
                <?php $id_bua_detail = $value_bua_detail['id_bua_detail'];  ?>
                <tr class="text-black">
                    <td class="tg-c3ow"><?= $value_bua_detail['no_urut'] ?></td>
                    <td class="tg-c3ow angga">
                        <div style="width:100%;color:black;">
                            <?= $value_bua_detail['nama_uraian'] ?>
                        </div>
                    </td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_bua_detail['nilai_detail_bua'], 2, ',', '.') ?></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_bua_detail);
                if ($id_departemen == 4) {
                } else {
                    if ($id_departemen && $id_area == null && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                    } else if ($id_departemen && $id_area && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    } else if ($id_departemen && $id_area && $id_sub_area) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    }
                }
                $result_program_bua_2 = $this->db->get() ?>
                <?php
                foreach ($result_program_bua_2->result_array() as $value_program_2) { ?>
                    <?php $id_program_2 = $value_program_2['id_detail_program_penyedia_jasa'] ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_relasi_beban_2 = ($value_program_2['prognosa_beban'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    if (round($total_margin_2) < 2) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 0  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 70  / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 90  / 100;
                    }

                    if (round($total_margin_2) < 2) {
                        $fee_owner_2  =  $total_efisiensi_2 * 100  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_owner_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 30 / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas_2 = 0;
                    $total_kontrak_awal_vendor_atas_2 += $value_program_2['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_sdm_2 = $value_program_2['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan_2 = $value_program_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_2;
                    ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow">

                        </td>
                        <td class="tg-c3ow angga">
                            <div style="width:200px;background-color:white;color:black;">
                                <?= $value_program_2['nama_pekerjaan_program_mata_anggaran'] ?>
                            </div>
                        </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['nama_penyedia'] ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['no_kontrak_penyedia'] ?></td>
                        <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow">
                            <?= "Rp " . number_format($value_program_2['prognosa_beban'], 2, ',', '.') ?>
                        </td>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= $value_program_2['persen_progres_fisik'] ?>%</td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_2, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= round($total_margin_2);  ?>%</td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_2, 2, ',', '.') ?> </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"> <?= $value_program_2['keterangan_laporan'] ?></td>
                        <td class="tg-c3ow">
                            <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                            <a href="javascript:;" onclick="Keterangan(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_bua_1');
                $this->db->where('tbl_detail_bua_1.id_bua_detail', $id_bua_detail);
                $query_result_detail_bua_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_1->result_array() as $value_detail_bua_1) { ?>
                    <?php $id_detail_bua_1 = $value_detail_bua_1['id_detail_bua_1'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_1['no_urut_1_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_1['nama_uraian_1_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_1['nilai_bua_detail_1'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_1);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_1 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_1->result_array() as $value_program_detail_bua_1) { ?>
                        <?php $id_program_detail_bua_1 = $value_program_detail_bua_1['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_1  =  ($value_program_detail_bua_1['nilai_kontrak_km'] * $value_program_detail_bua_1['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_1 = ($value_program_detail_bua_1['prognosa_beban'] * $value_program_detail_bua_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_1 =  $value_program_detail_bua_1['nilai_kontrak_km'] - $value_program_detail_bua_1['prognosa_beban'];
                        $total_margin_detail_bua_1 = ($total_efisiensi_detail_bua_1 / $value_program_detail_bua_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_1  =  ($value_program_detail_bua_1['nilai_kontrak_km'] * $value_program_detail_bua_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_1 =  $value_program_detail_bua_1['nilai_kontrak_km'] - $value_program_detail_bua_1['prognosa_beban'];
                        $total_margin_detail_bua_1 = ($total_efisiensi_detail_bua_1 / $value_program_detail_bua_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_1 =  $value_program_detail_bua_1['nilai_kontrak_km'] - $value_program_detail_bua_1['prognosa_beban'];
                        $total_margin_detail_bua_1 = ($total_efisiensi_detail_bua_1 / $value_program_detail_bua_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_1) < 2) {
                            $fee_jmtm_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 0  / 100;
                        } else if (round($total_margin_detail_bua_1) >= 2 && round($total_margin_detail_bua_1) <= 4) {
                            $fee_jmtm_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 50  / 100;
                        } else if (round($total_margin_detail_bua_1) >= 4 && round($total_margin_detail_bua_1) <= 8) {
                            $fee_jmtm_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 70  / 100;
                        } else if (round($total_margin_detail_bua_1) >= 8) {
                            $fee_jmtm_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_1) < 2) {
                            $fee_owner_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 100  / 100;
                        } else if (round($total_margin_detail_bua_1) >= 2 && round($total_margin_detail_bua_1) <= 4) {
                            $fee_owner_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 50  / 100;
                        } else if (round($total_margin_detail_bua_1) >= 4 && round($total_margin_detail_bua_1) <= 8) {
                            $fee_owner_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 30 / 100;
                        } else if (round($total_margin_detail_bua_1) >= 8) {
                            $fee_owner_detail_bua_1  =  $total_efisiensi_detail_bua_1 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_1 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_1 += $value_program_detail_bua_1['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_1 = $value_program_detail_bua_1['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_1 = $value_program_detail_bua_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_1;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_1['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_1['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_1['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_bua_1['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_1['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_1['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_1, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_1);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_1, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_1['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_bua_2');
                $this->db->where('tbl_detail_bua_2.id_detail_bua_1', $id_detail_bua_1);
                $query_result_detail_bua_2 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_2->result_array() as $value_detail_bua_2) { ?>
                    <?php $id_detail_bua_2 = $value_detail_bua_2['id_detail_bua_2'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_2['no_urut_2_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_2['nama_uraian_2_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_2['nilai_bua_detail_2'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_2);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_2 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_2->result_array() as $value_program_detail_bua_2) { ?>
                        <?php $id_program_detail_bua_2 = $value_program_detail_bua_2['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_2  =  ($value_program_detail_bua_2['nilai_kontrak_km'] * $value_program_detail_bua_2['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_2 = ($value_program_detail_bua_2['prognosa_beban'] * $value_program_detail_bua_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_2 =  $value_program_detail_bua_2['nilai_kontrak_km'] - $value_program_detail_bua_2['prognosa_beban'];
                        $total_margin_detail_bua_2 = ($total_efisiensi_detail_bua_2 / $value_program_detail_bua_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_2  =  ($value_program_detail_bua_2['nilai_kontrak_km'] * $value_program_detail_bua_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_2 =  $value_program_detail_bua_2['nilai_kontrak_km'] - $value_program_detail_bua_2['prognosa_beban'];
                        $total_margin_detail_bua_2 = ($total_efisiensi_detail_bua_2 / $value_program_detail_bua_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_2 =  $value_program_detail_bua_2['nilai_kontrak_km'] - $value_program_detail_bua_2['prognosa_beban'];
                        $total_margin_detail_bua_2 = ($total_efisiensi_detail_bua_2 / $value_program_detail_bua_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_2) < 2) {
                            $fee_jmtm_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 0  / 100;
                        } else if (round($total_margin_detail_bua_2) >= 2 && round($total_margin_detail_bua_2) <= 4) {
                            $fee_jmtm_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 50  / 100;
                        } else if (round($total_margin_detail_bua_2) >= 4 && round($total_margin_detail_bua_2) <= 8) {
                            $fee_jmtm_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 70  / 100;
                        } else if (round($total_margin_detail_bua_2) >= 8) {
                            $fee_jmtm_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_2) < 2) {
                            $fee_owner_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 100  / 100;
                        } else if (round($total_margin_detail_bua_2) >= 2 && round($total_margin_detail_bua_2) <= 4) {
                            $fee_owner_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 50  / 100;
                        } else if (round($total_margin_detail_bua_2) >= 4 && round($total_margin_detail_bua_2) <= 8) {
                            $fee_owner_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 30 / 100;
                        } else if (round($total_margin_detail_bua_2) >= 8) {
                            $fee_owner_detail_bua_2  =  $total_efisiensi_detail_bua_2 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_2 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_2 += $value_program_detail_bua_2['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_2 = $value_program_detail_bua_2['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_2 = $value_program_detail_bua_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_2;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_2['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_2['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_2['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>

                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_2['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_2['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_2, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_2);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_2, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_2['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_bua_3');
                $this->db->where('tbl_detail_bua_3.id_detail_bua_2', $id_detail_bua_2);
                $query_result_detail_bua_3 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_3->result_array() as $value_detail_bua_3) { ?>
                    <?php $id_detail_bua_3 = $value_detail_bua_3['id_detail_bua_3'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_3['no_urut_3_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_3['nama_uraian_3_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_3['nilai_bua_detail_3'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_3);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_3 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_3->result_array() as $value_program_detail_bua_3) { ?>
                        <?php $id_program_detail_bua_3 = $value_program_detail_bua_3['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_3  =  ($value_program_detail_bua_3['nilai_kontrak_km'] * $value_program_detail_bua_3['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_3 = ($value_program_detail_bua_3['prognosa_beban'] * $value_program_detail_bua_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_3 =  $value_program_detail_bua_3['nilai_kontrak_km'] - $value_program_detail_bua_3['prognosa_beban'];
                        $total_margin_detail_bua_3 = ($total_efisiensi_detail_bua_3 / $value_program_detail_bua_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_3  =  ($value_program_detail_bua_3['nilai_kontrak_km'] * $value_program_detail_bua_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_3 =  $value_program_detail_bua_3['nilai_kontrak_km'] - $value_program_detail_bua_3['prognosa_beban'];
                        $total_margin_detail_bua_3 = ($total_efisiensi_detail_bua_3 / $value_program_detail_bua_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_3 =  $value_program_detail_bua_3['nilai_kontrak_km'] - $value_program_detail_bua_3['prognosa_beban'];
                        $total_margin_detail_bua_3 = ($total_efisiensi_detail_bua_3 / $value_program_detail_bua_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_3) < 2) {
                            $fee_jmtm_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 0  / 100;
                        } else if (round($total_margin_detail_bua_3) >= 2 && round($total_margin_detail_bua_3) <= 4) {
                            $fee_jmtm_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 50  / 100;
                        } else if (round($total_margin_detail_bua_3) >= 4 && round($total_margin_detail_bua_3) <= 8) {
                            $fee_jmtm_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 70  / 100;
                        } else if (round($total_margin_detail_bua_3) >= 8) {
                            $fee_jmtm_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_3) < 2) {
                            $fee_owner_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 100  / 100;
                        } else if (round($total_margin_detail_bua_3) >= 2 && round($total_margin_detail_bua_3) <= 4) {
                            $fee_owner_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 50  / 100;
                        } else if (round($total_margin_detail_bua_3) >= 4 && round($total_margin_detail_bua_3) <= 8) {
                            $fee_owner_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 30 / 100;
                        } else if (round($total_margin_detail_bua_3) >= 8) {
                            $fee_owner_detail_bua_3  =  $total_efisiensi_detail_bua_3 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_3 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_3 += $value_program_detail_bua_3['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_3 = $value_program_detail_bua_3['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_3 = $value_program_detail_bua_3['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_3;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_3['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_3['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_3['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_3['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_3['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_3['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_3['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_3, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_3);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_3, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_3['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _4
                $this->db->from('tbl_detail_bua_4');
                // _3
                $this->db->where('tbl_detail_bua_4.id_detail_bua_3', $id_detail_bua_3);
                $query_result_detail_bua_4 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_4->result_array() as $value_detail_bua_4) { ?>
                    <?php $id_detail_bua_4 = $value_detail_bua_4['id_detail_bua_4'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_4['no_urut_4_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_4['nama_uraian_4_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_4['nilai_bua_detail_4'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_4);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_4 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_4->result_array() as $value_program_detail_bua_4) { ?>
                        <?php $id_program_detail_bua_4 = $value_program_detail_bua_4['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_4  =  ($value_program_detail_bua_4['nilai_kontrak_km'] * $value_program_detail_bua_4['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_4 = ($value_program_detail_bua_4['prognosa_beban'] * $value_program_detail_bua_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_4 =  $value_program_detail_bua_4['nilai_kontrak_km'] - $value_program_detail_bua_4['prognosa_beban'];
                        $total_margin_detail_bua_4 = ($total_efisiensi_detail_bua_4 / $value_program_detail_bua_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_4  =  ($value_program_detail_bua_4['nilai_kontrak_km'] * $value_program_detail_bua_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_4 =  $value_program_detail_bua_4['nilai_kontrak_km'] - $value_program_detail_bua_4['prognosa_beban'];
                        $total_margin_detail_bua_4 = ($total_efisiensi_detail_bua_4 / $value_program_detail_bua_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_4 =  $value_program_detail_bua_4['nilai_kontrak_km'] - $value_program_detail_bua_4['prognosa_beban'];
                        $total_margin_detail_bua_4 = ($total_efisiensi_detail_bua_4 / $value_program_detail_bua_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_4) < 2) {
                            $fee_jmtm_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 0  / 100;
                        } else if (round($total_margin_detail_bua_4) >= 2 && round($total_margin_detail_bua_4) <= 4) {
                            $fee_jmtm_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 50  / 100;
                        } else if (round($total_margin_detail_bua_4) >= 4 && round($total_margin_detail_bua_4) <= 8) {
                            $fee_jmtm_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 70  / 100;
                        } else if (round($total_margin_detail_bua_4) >= 8) {
                            $fee_jmtm_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_4) < 2) {
                            $fee_owner_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 100  / 100;
                        } else if (round($total_margin_detail_bua_4) >= 2 && round($total_margin_detail_bua_4) <= 4) {
                            $fee_owner_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 50  / 100;
                        } else if (round($total_margin_detail_bua_4) >= 4 && round($total_margin_detail_bua_4) <= 8) {
                            $fee_owner_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 30 / 100;
                        } else if (round($total_margin_detail_bua_4) >= 8) {
                            $fee_owner_detail_bua_4  =  $total_efisiensi_detail_bua_4 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_4 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_4 += $value_program_detail_bua_4['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_4 = $value_program_detail_bua_4['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_4 = $value_program_detail_bua_4['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_4;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_4['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_4['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_4['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_4['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_bua_4['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_4['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_4['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_4, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_4);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_4, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_4['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _5
                $this->db->from('tbl_detail_bua_5');
                // _4
                $this->db->where('tbl_detail_bua_5.id_detail_bua_4', $id_detail_bua_4);
                $query_result_detail_bua_5 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_5->result_array() as $value_detail_bua_5) { ?>
                    <?php $id_detail_bua_5 = $value_detail_bua_5['id_detail_bua_5'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_5['no_urut_5_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_5['nama_uraian_5_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_5['nilai_bua_detail_5'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_5);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_5 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_5->result_array() as $value_program_detail_bua_5) { ?>
                        <?php $id_program_detail_bua_5 = $value_program_detail_bua_5['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_5  =  ($value_program_detail_bua_5['nilai_kontrak_km'] * $value_program_detail_bua_5['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_5 = ($value_program_detail_bua_5['prognosa_beban'] * $value_program_detail_bua_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_5 =  $value_program_detail_bua_5['nilai_kontrak_km'] - $value_program_detail_bua_5['prognosa_beban'];
                        $total_margin_detail_bua_5 = ($total_efisiensi_detail_bua_5 / $value_program_detail_bua_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_5  =  ($value_program_detail_bua_5['nilai_kontrak_km'] * $value_program_detail_bua_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_5 =  $value_program_detail_bua_5['nilai_kontrak_km'] - $value_program_detail_bua_5['prognosa_beban'];
                        $total_margin_detail_bua_5 = ($total_efisiensi_detail_bua_5 / $value_program_detail_bua_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_5 =  $value_program_detail_bua_5['nilai_kontrak_km'] - $value_program_detail_bua_5['prognosa_beban'];
                        $total_margin_detail_bua_5 = ($total_efisiensi_detail_bua_5 / $value_program_detail_bua_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_5) < 2) {
                            $fee_jmtm_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 0  / 100;
                        } else if (round($total_margin_detail_bua_5) >= 2 && round($total_margin_detail_bua_5) <= 4) {
                            $fee_jmtm_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 50  / 100;
                        } else if (round($total_margin_detail_bua_5) >= 4 && round($total_margin_detail_bua_5) <= 8) {
                            $fee_jmtm_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 70  / 100;
                        } else if (round($total_margin_detail_bua_5) >= 8) {
                            $fee_jmtm_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_5) < 2) {
                            $fee_owner_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 100  / 100;
                        } else if (round($total_margin_detail_bua_5) >= 2 && round($total_margin_detail_bua_5) <= 4) {
                            $fee_owner_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 50  / 100;
                        } else if (round($total_margin_detail_bua_5) >= 4 && round($total_margin_detail_bua_5) <= 8) {
                            $fee_owner_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 30 / 100;
                        } else if (round($total_margin_detail_bua_5) >= 8) {
                            $fee_owner_detail_bua_5  =  $total_efisiensi_detail_bua_5 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_5 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_5 += $value_program_detail_bua_5['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_5 = $value_program_detail_bua_5['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_5 = $value_program_detail_bua_5['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_5;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_5['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_5['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_5['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_5['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_bua_5['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_5['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_5['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_5, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_5);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_5, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_5['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _6
                $this->db->from('tbl_detail_bua_6');
                // _5
                $this->db->where('tbl_detail_bua_6.id_detail_bua_5', $id_detail_bua_5);
                $query_result_detail_bua_6 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_6->result_array() as $value_detail_bua_6) { ?>
                    <?php $id_detail_bua_6 = $value_detail_bua_6['id_detail_bua_6'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_6['no_urut_6_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_6['nama_uraian_6_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_6['nilai_bua_detail_6'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_6);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_6 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_6->result_array() as $value_program_detail_bua_6) { ?>
                        <?php $id_program_detail_bua_6 = $value_program_detail_bua_6['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_6  =  ($value_program_detail_bua_6['nilai_kontrak_km'] * $value_program_detail_bua_6['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_6 = ($value_program_detail_bua_6['prognosa_beban'] * $value_program_detail_bua_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_6 =  $value_program_detail_bua_6['nilai_kontrak_km'] - $value_program_detail_bua_6['prognosa_beban'];
                        $total_margin_detail_bua_6 = ($total_efisiensi_detail_bua_6 / $value_program_detail_bua_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_6  =  ($value_program_detail_bua_6['nilai_kontrak_km'] * $value_program_detail_bua_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_6 =  $value_program_detail_bua_6['nilai_kontrak_km'] - $value_program_detail_bua_6['prognosa_beban'];
                        $total_margin_detail_bua_6 = ($total_efisiensi_detail_bua_6 / $value_program_detail_bua_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_6 =  $value_program_detail_bua_6['nilai_kontrak_km'] - $value_program_detail_bua_6['prognosa_beban'];
                        $total_margin_detail_bua_6 = ($total_efisiensi_detail_bua_6 / $value_program_detail_bua_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_6) < 2) {
                            $fee_jmtm_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 0  / 100;
                        } else if (round($total_margin_detail_bua_6) >= 2 && round($total_margin_detail_bua_6) <= 4) {
                            $fee_jmtm_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 50  / 100;
                        } else if (round($total_margin_detail_bua_6) >= 4 && round($total_margin_detail_bua_6) <= 8) {
                            $fee_jmtm_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 70  / 100;
                        } else if (round($total_margin_detail_bua_6) >= 8) {
                            $fee_jmtm_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_6) < 2) {
                            $fee_owner_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 100  / 100;
                        } else if (round($total_margin_detail_bua_6) >= 2 && round($total_margin_detail_bua_6) <= 4) {
                            $fee_owner_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 50  / 100;
                        } else if (round($total_margin_detail_bua_6) >= 4 && round($total_margin_detail_bua_6) <= 8) {
                            $fee_owner_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 30 / 100;
                        } else if (round($total_margin_detail_bua_6) >= 8) {
                            $fee_owner_detail_bua_6  =  $total_efisiensi_detail_bua_6 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_6 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_6 += $value_program_detail_bua_6['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_6 = $value_program_detail_bua_6['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_6 = $value_program_detail_bua_6['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_6;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_6['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_6['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_6['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_6['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_bua_6['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_6['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_6['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_6, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_6);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_6, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_6['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _7
                $this->db->from('tbl_detail_bua_7');
                // _6
                $this->db->where('tbl_detail_bua_7.id_detail_bua_6', $id_detail_bua_6);
                $query_result_detail_bua_7 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_7->result_array() as $value_detail_bua_7) { ?>
                    <?php $id_detail_bua_7 = $value_detail_bua_7['id_detail_bua_7'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_7['no_urut_7_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_7['nama_uraian_7_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_7['nilai_bua_detail_7'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_7);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_7 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_7->result_array() as $value_program_detail_bua_7) { ?>
                        <?php $id_program_detail_bua_7 = $value_program_detail_bua_7['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_7  =  ($value_program_detail_bua_7['nilai_kontrak_km'] * $value_program_detail_bua_7['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_7 = ($value_program_detail_bua_7['prognosa_beban'] * $value_program_detail_bua_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_7 =  $value_program_detail_bua_7['nilai_kontrak_km'] - $value_program_detail_bua_7['prognosa_beban'];
                        $total_margin_detail_bua_7 = ($total_efisiensi_detail_bua_7 / $value_program_detail_bua_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_7  =  ($value_program_detail_bua_7['nilai_kontrak_km'] * $value_program_detail_bua_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_7 =  $value_program_detail_bua_7['nilai_kontrak_km'] - $value_program_detail_bua_7['prognosa_beban'];
                        $total_margin_detail_bua_7 = ($total_efisiensi_detail_bua_7 / $value_program_detail_bua_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_7 =  $value_program_detail_bua_7['nilai_kontrak_km'] - $value_program_detail_bua_7['prognosa_beban'];
                        $total_margin_detail_bua_7 = ($total_efisiensi_detail_bua_7 / $value_program_detail_bua_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_7) < 2) {
                            $fee_jmtm_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 0  / 100;
                        } else if (round($total_margin_detail_bua_7) >= 2 && round($total_margin_detail_bua_7) <= 4) {
                            $fee_jmtm_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 50  / 100;
                        } else if (round($total_margin_detail_bua_7) >= 4 && round($total_margin_detail_bua_7) <= 8) {
                            $fee_jmtm_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 70  / 100;
                        } else if (round($total_margin_detail_bua_7) >= 8) {
                            $fee_jmtm_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_7) < 2) {
                            $fee_owner_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 100  / 100;
                        } else if (round($total_margin_detail_bua_7) >= 2 && round($total_margin_detail_bua_7) <= 4) {
                            $fee_owner_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 50  / 100;
                        } else if (round($total_margin_detail_bua_7) >= 4 && round($total_margin_detail_bua_7) <= 8) {
                            $fee_owner_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 30 / 100;
                        } else if (round($total_margin_detail_bua_7) >= 8) {
                            $fee_owner_detail_bua_7  =  $total_efisiensi_detail_bua_7 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_7 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_7 += $value_program_detail_bua_7['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_7 = $value_program_detail_bua_7['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_7 = $value_program_detail_bua_7['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_7;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_7['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_7['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_7['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_7['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_bua_7['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_7['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_7['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_7, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_7);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_7, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_7['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _8
                $this->db->from('tbl_detail_bua_8');
                // _7
                $this->db->where('tbl_detail_bua_8.id_detail_bua_7', $id_detail_bua_7);
                $query_result_detail_bua_8 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_8->result_array() as $value_detail_bua_8) { ?>
                    <?php $id_detail_bua_8 = $value_detail_bua_8['id_detail_bua_8'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_8['no_urut_8_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_8['nama_uraian_8_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_8['nilai_bua_detail_8'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_8);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_8 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_8->result_array() as $value_program_detail_bua_8) { ?>
                        <?php $id_program_detail_bua_8 = $value_program_detail_bua_8['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_8  =  ($value_program_detail_bua_8['nilai_kontrak_km'] * $value_program_detail_bua_8['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_8 = ($value_program_detail_bua_8['prognosa_beban'] * $value_program_detail_bua_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_8 =  $value_program_detail_bua_8['nilai_kontrak_km'] - $value_program_detail_bua_8['prognosa_beban'];
                        $total_margin_detail_bua_8 = ($total_efisiensi_detail_bua_8 / $value_program_detail_bua_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_8  =  ($value_program_detail_bua_8['nilai_kontrak_km'] * $value_program_detail_bua_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_8 =  $value_program_detail_bua_8['nilai_kontrak_km'] - $value_program_detail_bua_8['prognosa_beban'];
                        $total_margin_detail_bua_8 = ($total_efisiensi_detail_bua_8 / $value_program_detail_bua_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_8 =  $value_program_detail_bua_8['nilai_kontrak_km'] - $value_program_detail_bua_8['prognosa_beban'];
                        $total_margin_detail_bua_8 = ($total_efisiensi_detail_bua_8 / $value_program_detail_bua_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_8) < 2) {
                            $fee_jmtm_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 0  / 100;
                        } else if (round($total_margin_detail_bua_8) >= 2 && round($total_margin_detail_bua_8) <= 4) {
                            $fee_jmtm_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 50  / 100;
                        } else if (round($total_margin_detail_bua_8) >= 4 && round($total_margin_detail_bua_8) <= 8) {
                            $fee_jmtm_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 70  / 100;
                        } else if (round($total_margin_detail_bua_8) >= 8) {
                            $fee_jmtm_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_8) < 2) {
                            $fee_owner_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 100  / 100;
                        } else if (round($total_margin_detail_bua_8) >= 2 && round($total_margin_detail_bua_8) <= 4) {
                            $fee_owner_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 50  / 100;
                        } else if (round($total_margin_detail_bua_8) >= 4 && round($total_margin_detail_bua_8) <= 8) {
                            $fee_owner_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 30 / 100;
                        } else if (round($total_margin_detail_bua_8) >= 8) {
                            $fee_owner_detail_bua_8  =  $total_efisiensi_detail_bua_8 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_8 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_8 += $value_program_detail_bua_8['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_8 = $value_program_detail_bua_8['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_8 = $value_program_detail_bua_8['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_8;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_8['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_8['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_8['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_8['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_bua_8['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_8['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_8['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_8, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_8);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_8, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_8['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _9
                $this->db->from('tbl_detail_bua_9');
                // _8
                $this->db->where('tbl_detail_bua_9.id_detail_bua_8', $id_detail_bua_8);
                $query_result_detail_bua_9 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_bua_9->result_array() as $value_detail_bua_9) { ?>
                    <?php $id_detail_bua_9 = $value_detail_bua_9['id_detail_bua_9'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_bua_9['no_urut_9_bua'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_bua_9['nama_uraian_9_bua'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_bua_9['nilai_bua_detail_9'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_bua_9);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_bua_9 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_bua_9->result_array() as $value_program_detail_bua_9) { ?>
                        <?php $id_program_detail_bua_9 = $value_program_detail_bua_9['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_9  =  ($value_program_detail_bua_9['nilai_kontrak_km'] * $value_program_detail_bua_9['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_bua_9 = ($value_program_detail_bua_9['prognosa_beban'] * $value_program_detail_bua_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_9 =  $value_program_detail_bua_9['nilai_kontrak_km'] - $value_program_detail_bua_9['prognosa_beban'];
                        $total_margin_detail_bua_9 = ($total_efisiensi_detail_bua_9 / $value_program_detail_bua_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_bua_9  =  ($value_program_detail_bua_9['nilai_kontrak_km'] * $value_program_detail_bua_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_bua_9 =  $value_program_detail_bua_9['nilai_kontrak_km'] - $value_program_detail_bua_9['prognosa_beban'];
                        $total_margin_detail_bua_9 = ($total_efisiensi_detail_bua_9 / $value_program_detail_bua_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_bua_9 =  $value_program_detail_bua_9['nilai_kontrak_km'] - $value_program_detail_bua_9['prognosa_beban'];
                        $total_margin_detail_bua_9 = ($total_efisiensi_detail_bua_9 / $value_program_detail_bua_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_bua_9) < 2) {
                            $fee_jmtm_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 0  / 100;
                        } else if (round($total_margin_detail_bua_9) >= 2 && round($total_margin_detail_bua_9) <= 4) {
                            $fee_jmtm_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 50  / 100;
                        } else if (round($total_margin_detail_bua_9) >= 4 && round($total_margin_detail_bua_9) <= 8) {
                            $fee_jmtm_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 70  / 100;
                        } else if (round($total_margin_detail_bua_9) >= 8) {
                            $fee_jmtm_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 90  / 100;
                        }

                        if (round($total_margin_detail_bua_9) < 2) {
                            $fee_owner_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 100  / 100;
                        } else if (round($total_margin_detail_bua_9) >= 2 && round($total_margin_detail_bua_9) <= 4) {
                            $fee_owner_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 50  / 100;
                        } else if (round($total_margin_detail_bua_9) >= 4 && round($total_margin_detail_bua_9) <= 8) {
                            $fee_owner_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 30 / 100;
                        } else if (round($total_margin_detail_bua_9) >= 8) {
                            $fee_owner_detail_bua_9  =  $total_efisiensi_detail_bua_9 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_bua_9 = 0;
                        $total_kontrak_awal_vendor_atas_detail_bua_9 += $value_program_detail_bua_9['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_bua_9 = $value_program_detail_bua_9['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_bua_9 = $value_program_detail_bua_9['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_bua_9;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_bua_9['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_9['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_9['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_bua_9['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_bua_9['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_bua_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_bua_9['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_bua_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_bua_9['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_bua_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_bua_9, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_bua_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_bua_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_bua_9);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_bua_9, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_bua_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_bua_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_bua_9['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_bua_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_bua_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> Buat Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>

        <!-- SDM -->
        <?php
        // sdm
        $this->db->select('*');
        $this->db->from('tbl_sdm');
        $this->db->where('tbl_sdm.id_kontrak', $row_kontrak['id_kontrak']);
        $query_result_sdm = $this->db->get() ?>
        <?php
        foreach ($query_result_sdm->result_array() as $value_sdm) { ?>
            <?php $id_sdm = $value_sdm['id_sdm'];   ?>
            <tr class="text-white" style="background-color:gray;">
                <td class="tg-c3ow"><?= $value_sdm['no_urut'] ?></td>
                <td class="tg-c3ow angga">
                    <div style="width:100%;color:black;">
                        <?= $value_sdm['nama_uraian'] ?>
                    </div>
                </td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"><?= "Rp " . number_format($value_sdm['nilai_sdm'], 2, ',', '.') ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_sdm);
            $result_program_sdm_1 = $this->db->get() ?>
            <?php
            foreach ($result_program_sdm_1->result_array() as $value_program_1) { ?>
                <?php $id_program_1 = $value_program_1['id_detail_program_penyedia_jasa'] ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_relasi_beban_1 = ($value_program_1['prognosa_beban'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan_1  =  ($value_program_1['nilai_kontrak_km'] * $value_program_1['persen_progres_fisik']) / 100;
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                $total_efisiensi_1 =  $value_program_1['nilai_kontrak_km'] - $value_program_1['prognosa_beban'];
                $total_margin_1 = ($total_efisiensi_1 / $value_program_1['nilai_kontrak_km']) * 100;
                ?>
                <?php
                if (round($total_margin_1) < 2) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 0  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 70  / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_jmtm_1  =  $total_efisiensi_1 * 90  / 100;
                }

                if (round($total_margin_1) < 2) {
                    $fee_owner_1  =  $total_efisiensi_1 * 100  / 100;
                } else if (round($total_margin_1) >= 2 && round($total_margin_1) <= 4) {
                    $fee_owner_1  =  $total_efisiensi_1 * 50  / 100;
                } else if (round($total_margin_1) >= 4 && round($total_margin_1) <= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 30 / 100;
                } else if (round($total_margin_1) >= 8) {
                    $fee_owner_1  =  $total_efisiensi_1 * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas_1 = 0;
                $total_kontrak_awal_vendor_atas_1 += $value_program_1['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_sdm_1 = $value_program_1['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan_1 = $value_program_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_1;
                ?>
                <tr class="text-black">
                    <td class="tg-c3ow"></td>
                    <td class="tg-c3ow">

                    </td>
                    <td class="tg-c3ow angga">
                        <div style="width:200px;background-color:white;color:black;">
                            <?= $value_program_1['nama_pekerjaan_program_mata_anggaran'] ?>
                        </div>
                    </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['nama_penyedia'] ?></td>
                    <td class="tg-c3ow"><?= $value_program_1['no_kontrak_penyedia'] ?></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_program_1['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($value_program_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-c3ow">
                        <?= "Rp " . number_format($value_program_1['prognosa_beban'], 2, ',', '.') ?>
                    </td>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= $value_program_1['persen_progres_fisik'] ?>%</td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <?php if ($value_program_1['persen_progres_fisik']) { ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_1, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-c3ow"></td>
                    <?php   }  ?>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= round($total_margin_1);  ?>%</td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_1, 2, ',', '.') ?> </td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_1, 2, ',', '.') ?></td>
                    <td class="tg-c3ow"> <?= $value_program_1['keterangan_laporan'] ?></td>
                    <td class="tg-c3ow">
                        <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                        <a href="javascript:;" onclick="Keterangan(<?= $value_program_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                    </td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_sdm_detail');
            $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
            $query_result_sdm_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_sdm_detail->result_array() as $value_sdm_detail) { ?>
                <?php $id_sdm_detail = $value_sdm_detail['id_sdm_detail'];  ?>
                <tr class="text-black">
                    <td class="tg-c3ow"><?= $value_sdm_detail['no_urut'] ?></td>
                    <td class="tg-c3ow angga">
                        <div style="width:100%;color:black;">
                            <?= $value_sdm_detail['nama_uraian'] ?>
                        </div>
                    </td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"><?= "Rp " . number_format($value_sdm_detail['nilai_detail_sdm'], 2, ',', '.') ?></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                    <td class="tg-0pky"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_sdm_detail);
                if ($id_departemen == 4) {
                } else {
                    if ($id_departemen && $id_area == null && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                    } else if ($id_departemen && $id_area && $id_sub_area == null) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    } else if ($id_departemen && $id_area && $id_sub_area) {
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                    }
                }
                $result_program_sdm_2 = $this->db->get() ?>
                <?php
                foreach ($result_program_sdm_2->result_array() as $value_program_2) { ?>
                    <?php $id_program_2 = $value_program_2['id_detail_program_penyedia_jasa'] ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_relasi_beban_2 = ($value_program_2['prognosa_beban'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan_2  =  ($value_program_2['nilai_kontrak_km'] * $value_program_2['persen_progres_fisik']) / 100;
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    $total_efisiensi_2 =  $value_program_2['nilai_kontrak_km'] - $value_program_2['prognosa_beban'];
                    $total_margin_2 = ($total_efisiensi_2 / $value_program_2['nilai_kontrak_km']) * 100;
                    ?>
                    <?php
                    if (round($total_margin_2) < 2) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 0  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 70  / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_jmtm_2  =  $total_efisiensi_2 * 90  / 100;
                    }

                    if (round($total_margin_2) < 2) {
                        $fee_owner_2  =  $total_efisiensi_2 * 100  / 100;
                    } else if (round($total_margin_2) >= 2 && round($total_margin_2) <= 4) {
                        $fee_owner_2  =  $total_efisiensi_2 * 50  / 100;
                    } else if (round($total_margin_2) >= 4 && round($total_margin_2) <= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 30 / 100;
                    } else if (round($total_margin_2) >= 8) {
                        $fee_owner_2  =  $total_efisiensi_2 * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas_2 = 0;
                    $total_kontrak_awal_vendor_atas_2 += $value_program_2['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_sdm_2 = $value_program_2['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan_2 = $value_program_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_2;
                    ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow">

                        </td>
                        <td class="tg-c3ow angga">
                            <div style="width:200px;background-color:white;color:black;">
                                <?= $value_program_2['nama_pekerjaan_program_mata_anggaran'] ?>
                            </div>
                        </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['nama_penyedia'] ?></td>
                        <td class="tg-c3ow"><?= $value_program_2['no_kontrak_penyedia'] ?></td>
                        <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-c3ow">
                            <?= "Rp " . number_format($value_program_2['prognosa_beban'], 2, ',', '.') ?>
                        </td>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= $value_program_2['persen_progres_fisik'] ?>%</td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <?php if ($value_program_2['persen_progres_fisik']) { ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_2, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-c3ow"></td>
                        <?php   }  ?>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= round($total_margin_2);  ?>%</td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_2, 2, ',', '.') ?> </td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_2, 2, ',', '.') ?></td>
                        <td class="tg-c3ow"> <?= $value_program_2['keterangan_laporan'] ?></td>
                        <td class="tg-c3ow">
                            <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                            <a href="javascript:;" onclick="Keterangan(<?= $value_program_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_sdm_1');
                $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
                $query_result_detail_sdm_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_1->result_array() as $value_detail_sdm_1) { ?>
                    <?php $id_detail_sdm_1 = $value_detail_sdm_1['id_detail_sdm_1'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_1['no_urut_1_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_1['nama_uraian_1_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_1['nilai_sdm_detail_1'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_1);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_1 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_1->result_array() as $value_program_detail_sdm_1) { ?>
                        <?php $id_program_detail_sdm_1 = $value_program_detail_sdm_1['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_1  =  ($value_program_detail_sdm_1['nilai_kontrak_km'] * $value_program_detail_sdm_1['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_1 = ($value_program_detail_sdm_1['prognosa_beban'] * $value_program_detail_sdm_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_1 =  $value_program_detail_sdm_1['nilai_kontrak_km'] - $value_program_detail_sdm_1['prognosa_beban'];
                        $total_margin_detail_sdm_1 = ($total_efisiensi_detail_sdm_1 / $value_program_detail_sdm_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_1  =  ($value_program_detail_sdm_1['nilai_kontrak_km'] * $value_program_detail_sdm_1['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_1 =  $value_program_detail_sdm_1['nilai_kontrak_km'] - $value_program_detail_sdm_1['prognosa_beban'];
                        $total_margin_detail_sdm_1 = ($total_efisiensi_detail_sdm_1 / $value_program_detail_sdm_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_1 =  $value_program_detail_sdm_1['nilai_kontrak_km'] - $value_program_detail_sdm_1['prognosa_beban'];
                        $total_margin_detail_sdm_1 = ($total_efisiensi_detail_sdm_1 / $value_program_detail_sdm_1['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_1) < 2) {
                            $fee_jmtm_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_1) >= 2 && round($total_margin_detail_sdm_1) <= 4) {
                            $fee_jmtm_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_1) >= 4 && round($total_margin_detail_sdm_1) <= 8) {
                            $fee_jmtm_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_1) >= 8) {
                            $fee_jmtm_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_1) < 2) {
                            $fee_owner_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_1) >= 2 && round($total_margin_detail_sdm_1) <= 4) {
                            $fee_owner_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_1) >= 4 && round($total_margin_detail_sdm_1) <= 8) {
                            $fee_owner_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_1) >= 8) {
                            $fee_owner_detail_sdm_1  =  $total_efisiensi_detail_sdm_1 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_1 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_1 += $value_program_detail_sdm_1['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_1 = $value_program_detail_sdm_1['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_1 = $value_program_detail_sdm_1['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_1;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_1['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_1['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_1['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_1['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_sdm_1['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_1['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_1['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_1['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_1['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_1, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_1);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_1, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_1, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_1['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_1['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_sdm_2');
                $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
                $query_result_detail_sdm_2 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_2->result_array() as $value_detail_sdm_2) { ?>
                    <?php $id_detail_sdm_2 = $value_detail_sdm_2['id_detail_sdm_2'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_2['no_urut_2_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_2['nama_uraian_2_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_2['nilai_sdm_detail_2'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_2);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_2 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_2->result_array() as $value_program_detail_sdm_2) { ?>
                        <?php $id_program_detail_sdm_2 = $value_program_detail_sdm_2['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_2  =  ($value_program_detail_sdm_2['nilai_kontrak_km'] * $value_program_detail_sdm_2['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_2 = ($value_program_detail_sdm_2['prognosa_beban'] * $value_program_detail_sdm_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_2 =  $value_program_detail_sdm_2['nilai_kontrak_km'] - $value_program_detail_sdm_2['prognosa_beban'];
                        $total_margin_detail_sdm_2 = ($total_efisiensi_detail_sdm_2 / $value_program_detail_sdm_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_2  =  ($value_program_detail_sdm_2['nilai_kontrak_km'] * $value_program_detail_sdm_2['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_2 =  $value_program_detail_sdm_2['nilai_kontrak_km'] - $value_program_detail_sdm_2['prognosa_beban'];
                        $total_margin_detail_sdm_2 = ($total_efisiensi_detail_sdm_2 / $value_program_detail_sdm_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_2 =  $value_program_detail_sdm_2['nilai_kontrak_km'] - $value_program_detail_sdm_2['prognosa_beban'];
                        $total_margin_detail_sdm_2 = ($total_efisiensi_detail_sdm_2 / $value_program_detail_sdm_2['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_2) < 2) {
                            $fee_jmtm_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_2) >= 2 && round($total_margin_detail_sdm_2) <= 4) {
                            $fee_jmtm_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_2) >= 4 && round($total_margin_detail_sdm_2) <= 8) {
                            $fee_jmtm_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_2) >= 8) {
                            $fee_jmtm_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_2) < 2) {
                            $fee_owner_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_2) >= 2 && round($total_margin_detail_sdm_2) <= 4) {
                            $fee_owner_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_2) >= 4 && round($total_margin_detail_sdm_2) <= 8) {
                            $fee_owner_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_2) >= 8) {
                            $fee_owner_detail_sdm_2  =  $total_efisiensi_detail_sdm_2 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_2 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_2 += $value_program_detail_sdm_2['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_2 = $value_program_detail_sdm_2['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_2 = $value_program_detail_sdm_2['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_2;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_2['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_2['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_2['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_2['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_2['nilai_hps'], 2, ',', '.') ?></td>

                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_2['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_2['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_2['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_2['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_2, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_2);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_2, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_2, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_2['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_2['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_sdm_3');
                $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
                $query_result_detail_sdm_3 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_3->result_array() as $value_detail_sdm_3) { ?>
                    <?php $id_detail_sdm_3 = $value_detail_sdm_3['id_detail_sdm_3'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_3['no_urut_3_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_3['nama_uraian_3_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_3['nilai_sdm_detail_3'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_3);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_3 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_3->result_array() as $value_program_detail_sdm_3) { ?>
                        <?php $id_program_detail_sdm_3 = $value_program_detail_sdm_3['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_3  =  ($value_program_detail_sdm_3['nilai_kontrak_km'] * $value_program_detail_sdm_3['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_3 = ($value_program_detail_sdm_3['prognosa_beban'] * $value_program_detail_sdm_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_3 =  $value_program_detail_sdm_3['nilai_kontrak_km'] - $value_program_detail_sdm_3['prognosa_beban'];
                        $total_margin_detail_sdm_3 = ($total_efisiensi_detail_sdm_3 / $value_program_detail_sdm_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_3  =  ($value_program_detail_sdm_3['nilai_kontrak_km'] * $value_program_detail_sdm_3['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_3 =  $value_program_detail_sdm_3['nilai_kontrak_km'] - $value_program_detail_sdm_3['prognosa_beban'];
                        $total_margin_detail_sdm_3 = ($total_efisiensi_detail_sdm_3 / $value_program_detail_sdm_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_3 =  $value_program_detail_sdm_3['nilai_kontrak_km'] - $value_program_detail_sdm_3['prognosa_beban'];
                        $total_margin_detail_sdm_3 = ($total_efisiensi_detail_sdm_3 / $value_program_detail_sdm_3['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_3) < 2) {
                            $fee_jmtm_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_3) >= 2 && round($total_margin_detail_sdm_3) <= 4) {
                            $fee_jmtm_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_3) >= 4 && round($total_margin_detail_sdm_3) <= 8) {
                            $fee_jmtm_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_3) >= 8) {
                            $fee_jmtm_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_3) < 2) {
                            $fee_owner_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_3) >= 2 && round($total_margin_detail_sdm_3) <= 4) {
                            $fee_owner_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_3) >= 4 && round($total_margin_detail_sdm_3) <= 8) {
                            $fee_owner_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_3) >= 8) {
                            $fee_owner_detail_sdm_3  =  $total_efisiensi_detail_sdm_3 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_3 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_3 += $value_program_detail_sdm_3['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_3 = $value_program_detail_sdm_3['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_3 = $value_program_detail_sdm_3['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_3;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_3['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_3['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_3['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_3['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_3['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_3['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_3['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_3['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_3['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_3, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_3);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_3, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_3, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_3['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_3['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _4
                $this->db->from('tbl_detail_sdm_4');
                // _3
                $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
                $query_result_detail_sdm_4 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_4->result_array() as $value_detail_sdm_4) { ?>
                    <?php $id_detail_sdm_4 = $value_detail_sdm_4['id_detail_sdm_4'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_4['no_urut_4_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_4['nama_uraian_4_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_4['nilai_sdm_detail_4'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_4);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_4 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_4->result_array() as $value_program_detail_sdm_4) { ?>
                        <?php $id_program_detail_sdm_4 = $value_program_detail_sdm_4['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_4  =  ($value_program_detail_sdm_4['nilai_kontrak_km'] * $value_program_detail_sdm_4['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_4 = ($value_program_detail_sdm_4['prognosa_beban'] * $value_program_detail_sdm_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_4 =  $value_program_detail_sdm_4['nilai_kontrak_km'] - $value_program_detail_sdm_4['prognosa_beban'];
                        $total_margin_detail_sdm_4 = ($total_efisiensi_detail_sdm_4 / $value_program_detail_sdm_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_4  =  ($value_program_detail_sdm_4['nilai_kontrak_km'] * $value_program_detail_sdm_4['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_4 =  $value_program_detail_sdm_4['nilai_kontrak_km'] - $value_program_detail_sdm_4['prognosa_beban'];
                        $total_margin_detail_sdm_4 = ($total_efisiensi_detail_sdm_4 / $value_program_detail_sdm_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_4 =  $value_program_detail_sdm_4['nilai_kontrak_km'] - $value_program_detail_sdm_4['prognosa_beban'];
                        $total_margin_detail_sdm_4 = ($total_efisiensi_detail_sdm_4 / $value_program_detail_sdm_4['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_4) < 2) {
                            $fee_jmtm_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_4) >= 2 && round($total_margin_detail_sdm_4) <= 4) {
                            $fee_jmtm_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_4) >= 4 && round($total_margin_detail_sdm_4) <= 8) {
                            $fee_jmtm_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_4) >= 8) {
                            $fee_jmtm_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_4) < 2) {
                            $fee_owner_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_4) >= 2 && round($total_margin_detail_sdm_4) <= 4) {
                            $fee_owner_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_4) >= 4 && round($total_margin_detail_sdm_4) <= 8) {
                            $fee_owner_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_4) >= 8) {
                            $fee_owner_detail_sdm_4  =  $total_efisiensi_detail_sdm_4 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_4 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_4 += $value_program_detail_sdm_4['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_4 = $value_program_detail_sdm_4['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_4 = $value_program_detail_sdm_4['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_4;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_4['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_4['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_4['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_4['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_sdm_4['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_4['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_4['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_4['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_4['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_4, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_4);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_4, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_4, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_4['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_4['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _5
                $this->db->from('tbl_detail_sdm_5');
                // _4
                $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
                $query_result_detail_sdm_5 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_5->result_array() as $value_detail_sdm_5) { ?>
                    <?php $id_detail_sdm_5 = $value_detail_sdm_5['id_detail_sdm_5'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_5['no_urut_5_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_5['nama_uraian_5_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_5['nilai_sdm_detail_5'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_5);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_5 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_5->result_array() as $value_program_detail_sdm_5) { ?>
                        <?php $id_program_detail_sdm_5 = $value_program_detail_sdm_5['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_5  =  ($value_program_detail_sdm_5['nilai_kontrak_km'] * $value_program_detail_sdm_5['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_5 = ($value_program_detail_sdm_5['prognosa_beban'] * $value_program_detail_sdm_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_5 =  $value_program_detail_sdm_5['nilai_kontrak_km'] - $value_program_detail_sdm_5['prognosa_beban'];
                        $total_margin_detail_sdm_5 = ($total_efisiensi_detail_sdm_5 / $value_program_detail_sdm_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_5  =  ($value_program_detail_sdm_5['nilai_kontrak_km'] * $value_program_detail_sdm_5['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_5 =  $value_program_detail_sdm_5['nilai_kontrak_km'] - $value_program_detail_sdm_5['prognosa_beban'];
                        $total_margin_detail_sdm_5 = ($total_efisiensi_detail_sdm_5 / $value_program_detail_sdm_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_5 =  $value_program_detail_sdm_5['nilai_kontrak_km'] - $value_program_detail_sdm_5['prognosa_beban'];
                        $total_margin_detail_sdm_5 = ($total_efisiensi_detail_sdm_5 / $value_program_detail_sdm_5['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_5) < 2) {
                            $fee_jmtm_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_5) >= 2 && round($total_margin_detail_sdm_5) <= 4) {
                            $fee_jmtm_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_5) >= 4 && round($total_margin_detail_sdm_5) <= 8) {
                            $fee_jmtm_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_5) >= 8) {
                            $fee_jmtm_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_5) < 2) {
                            $fee_owner_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_5) >= 2 && round($total_margin_detail_sdm_5) <= 4) {
                            $fee_owner_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_5) >= 4 && round($total_margin_detail_sdm_5) <= 8) {
                            $fee_owner_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_5) >= 8) {
                            $fee_owner_detail_sdm_5  =  $total_efisiensi_detail_sdm_5 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_5 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_5 += $value_program_detail_sdm_5['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_5 = $value_program_detail_sdm_5['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_5 = $value_program_detail_sdm_5['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_5;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_5['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_5['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_5['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_5['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_sdm_5['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_5['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_5['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_5['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_5['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_5, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_5);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_5, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_5, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_5['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_5['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _6
                $this->db->from('tbl_detail_sdm_6');
                // _5
                $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
                $query_result_detail_sdm_6 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_6->result_array() as $value_detail_sdm_6) { ?>
                    <?php $id_detail_sdm_6 = $value_detail_sdm_6['id_detail_sdm_6'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_6['no_urut_6_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_6['nama_uraian_6_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_6['nilai_sdm_detail_6'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_6);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_6 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_6->result_array() as $value_program_detail_sdm_6) { ?>
                        <?php $id_program_detail_sdm_6 = $value_program_detail_sdm_6['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_6  =  ($value_program_detail_sdm_6['nilai_kontrak_km'] * $value_program_detail_sdm_6['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_6 = ($value_program_detail_sdm_6['prognosa_beban'] * $value_program_detail_sdm_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_6 =  $value_program_detail_sdm_6['nilai_kontrak_km'] - $value_program_detail_sdm_6['prognosa_beban'];
                        $total_margin_detail_sdm_6 = ($total_efisiensi_detail_sdm_6 / $value_program_detail_sdm_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_6  =  ($value_program_detail_sdm_6['nilai_kontrak_km'] * $value_program_detail_sdm_6['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_6 =  $value_program_detail_sdm_6['nilai_kontrak_km'] - $value_program_detail_sdm_6['prognosa_beban'];
                        $total_margin_detail_sdm_6 = ($total_efisiensi_detail_sdm_6 / $value_program_detail_sdm_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_6 =  $value_program_detail_sdm_6['nilai_kontrak_km'] - $value_program_detail_sdm_6['prognosa_beban'];
                        $total_margin_detail_sdm_6 = ($total_efisiensi_detail_sdm_6 / $value_program_detail_sdm_6['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_6) < 2) {
                            $fee_jmtm_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_6) >= 2 && round($total_margin_detail_sdm_6) <= 4) {
                            $fee_jmtm_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_6) >= 4 && round($total_margin_detail_sdm_6) <= 8) {
                            $fee_jmtm_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_6) >= 8) {
                            $fee_jmtm_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_6) < 2) {
                            $fee_owner_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_6) >= 2 && round($total_margin_detail_sdm_6) <= 4) {
                            $fee_owner_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_6) >= 4 && round($total_margin_detail_sdm_6) <= 8) {
                            $fee_owner_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_6) >= 8) {
                            $fee_owner_detail_sdm_6  =  $total_efisiensi_detail_sdm_6 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_6 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_6 += $value_program_detail_sdm_6['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_6 = $value_program_detail_sdm_6['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_6 = $value_program_detail_sdm_6['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_6;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_6['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_6['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_6['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_6['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_sdm_6['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_6['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_6['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_6['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_6['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_6, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_6);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_6, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_6, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_6['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_6['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _7
                $this->db->from('tbl_detail_sdm_7');
                // _6
                $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
                $query_result_detail_sdm_7 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_7->result_array() as $value_detail_sdm_7) { ?>
                    <?php $id_detail_sdm_7 = $value_detail_sdm_7['id_detail_sdm_7'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_7['no_urut_7_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_7['nama_uraian_7_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_7['nilai_sdm_detail_7'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_7);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_7 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_7->result_array() as $value_program_detail_sdm_7) { ?>
                        <?php $id_program_detail_sdm_7 = $value_program_detail_sdm_7['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_7  =  ($value_program_detail_sdm_7['nilai_kontrak_km'] * $value_program_detail_sdm_7['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_7 = ($value_program_detail_sdm_7['prognosa_beban'] * $value_program_detail_sdm_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_7 =  $value_program_detail_sdm_7['nilai_kontrak_km'] - $value_program_detail_sdm_7['prognosa_beban'];
                        $total_margin_detail_sdm_7 = ($total_efisiensi_detail_sdm_7 / $value_program_detail_sdm_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_7  =  ($value_program_detail_sdm_7['nilai_kontrak_km'] * $value_program_detail_sdm_7['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_7 =  $value_program_detail_sdm_7['nilai_kontrak_km'] - $value_program_detail_sdm_7['prognosa_beban'];
                        $total_margin_detail_sdm_7 = ($total_efisiensi_detail_sdm_7 / $value_program_detail_sdm_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_7 =  $value_program_detail_sdm_7['nilai_kontrak_km'] - $value_program_detail_sdm_7['prognosa_beban'];
                        $total_margin_detail_sdm_7 = ($total_efisiensi_detail_sdm_7 / $value_program_detail_sdm_7['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_7) < 2) {
                            $fee_jmtm_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_7) >= 2 && round($total_margin_detail_sdm_7) <= 4) {
                            $fee_jmtm_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_7) >= 4 && round($total_margin_detail_sdm_7) <= 8) {
                            $fee_jmtm_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_7) >= 8) {
                            $fee_jmtm_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_7) < 2) {
                            $fee_owner_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_7) >= 2 && round($total_margin_detail_sdm_7) <= 4) {
                            $fee_owner_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_7) >= 4 && round($total_margin_detail_sdm_7) <= 8) {
                            $fee_owner_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_7) >= 8) {
                            $fee_owner_detail_sdm_7  =  $total_efisiensi_detail_sdm_7 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_7 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_7 += $value_program_detail_sdm_7['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_7 = $value_program_detail_sdm_7['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_7 = $value_program_detail_sdm_7['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_7;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_7['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_7['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_7['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_7['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_sdm_7['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_7['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_7['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_7['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_7['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_7, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_7);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_7, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_7, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_7['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_7['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _8
                $this->db->from('tbl_detail_sdm_8');
                // _7
                $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
                $query_result_detail_sdm_8 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_8->result_array() as $value_detail_sdm_8) { ?>
                    <?php $id_detail_sdm_8 = $value_detail_sdm_8['id_detail_sdm_8'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_8['no_urut_8_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_8['nama_uraian_8_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_8['nilai_sdm_detail_8'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_8);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_8 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_8->result_array() as $value_program_detail_sdm_8) { ?>
                        <?php $id_program_detail_sdm_8 = $value_program_detail_sdm_8['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_8  =  ($value_program_detail_sdm_8['nilai_kontrak_km'] * $value_program_detail_sdm_8['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_8 = ($value_program_detail_sdm_8['prognosa_beban'] * $value_program_detail_sdm_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_8 =  $value_program_detail_sdm_8['nilai_kontrak_km'] - $value_program_detail_sdm_8['prognosa_beban'];
                        $total_margin_detail_sdm_8 = ($total_efisiensi_detail_sdm_8 / $value_program_detail_sdm_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_8  =  ($value_program_detail_sdm_8['nilai_kontrak_km'] * $value_program_detail_sdm_8['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_8 =  $value_program_detail_sdm_8['nilai_kontrak_km'] - $value_program_detail_sdm_8['prognosa_beban'];
                        $total_margin_detail_sdm_8 = ($total_efisiensi_detail_sdm_8 / $value_program_detail_sdm_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_8 =  $value_program_detail_sdm_8['nilai_kontrak_km'] - $value_program_detail_sdm_8['prognosa_beban'];
                        $total_margin_detail_sdm_8 = ($total_efisiensi_detail_sdm_8 / $value_program_detail_sdm_8['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_8) < 2) {
                            $fee_jmtm_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_8) >= 2 && round($total_margin_detail_sdm_8) <= 4) {
                            $fee_jmtm_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_8) >= 4 && round($total_margin_detail_sdm_8) <= 8) {
                            $fee_jmtm_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_8) >= 8) {
                            $fee_jmtm_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_8) < 2) {
                            $fee_owner_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_8) >= 2 && round($total_margin_detail_sdm_8) <= 4) {
                            $fee_owner_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_8) >= 4 && round($total_margin_detail_sdm_8) <= 8) {
                            $fee_owner_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_8) >= 8) {
                            $fee_owner_detail_sdm_8  =  $total_efisiensi_detail_sdm_8 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_8 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_8 += $value_program_detail_sdm_8['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_8 = $value_program_detail_sdm_8['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_8 = $value_program_detail_sdm_8['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_8;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_8['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_8['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_8['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_8['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_sdm_8['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_8['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_8['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_8['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_8['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_8, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_8);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_8, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_8, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_8['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_8['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <?php
                $this->db->select('*');
                // _9
                $this->db->from('tbl_detail_sdm_9');
                // _8
                $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
                $query_result_detail_sdm_9 = $this->db->get() ?>
                <?php
                foreach ($query_result_detail_sdm_9->result_array() as $value_detail_sdm_9) { ?>
                    <?php $id_detail_sdm_9 = $value_detail_sdm_9['id_detail_sdm_9'];  ?>
                    <tr class="text-black">
                        <td class="tg-c3ow"><?= $value_detail_sdm_9['no_urut_9_sdm'] ?></td>
                        <td class="tg-c3ow angga">
                            <div style="width:100%;color:black;">
                                <?= $value_detail_sdm_9['nama_uraian_9_sdm'] ?>
                            </div>
                        </td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"><?= "Rp " . number_format($value_detail_sdm_9['nilai_sdm_detail_9'], 2, ',', '.') ?></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_checking', $id_detail_sdm_9);
                    if ($id_departemen == 4) {
                    } else {
                        if ($id_departemen && $id_area == null && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                        } else if ($id_departemen && $id_area && $id_sub_area == null) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        } else if ($id_departemen && $id_area && $id_sub_area) {
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
                        }
                    }
                    $result_program_detail_sdm_9 = $this->db->get() ?>
                    <?php
                    foreach ($result_program_detail_sdm_9->result_array() as $value_program_detail_sdm_9) { ?>
                        <?php $id_program_detail_sdm_9 = $value_program_detail_sdm_9['id_detail_program_penyedia_jasa'] ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_9  =  ($value_program_detail_sdm_9['nilai_kontrak_km'] * $value_program_detail_sdm_9['persen_progres_fisik']) / 100;
                        $total_relasi_beban_detail_sdm_9 = ($value_program_detail_sdm_9['prognosa_beban'] * $value_program_detail_sdm_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_9 =  $value_program_detail_sdm_9['nilai_kontrak_km'] - $value_program_detail_sdm_9['prognosa_beban'];
                        $total_margin_detail_sdm_9 = ($total_efisiensi_detail_sdm_9 / $value_program_detail_sdm_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan_detail_sdm_9  =  ($value_program_detail_sdm_9['nilai_kontrak_km'] * $value_program_detail_sdm_9['persen_progres_fisik']) / 100;
                        $total_efisiensi_detail_sdm_9 =  $value_program_detail_sdm_9['nilai_kontrak_km'] - $value_program_detail_sdm_9['prognosa_beban'];
                        $total_margin_detail_sdm_9 = ($total_efisiensi_detail_sdm_9 / $value_program_detail_sdm_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        $total_efisiensi_detail_sdm_9 =  $value_program_detail_sdm_9['nilai_kontrak_km'] - $value_program_detail_sdm_9['prognosa_beban'];
                        $total_margin_detail_sdm_9 = ($total_efisiensi_detail_sdm_9 / $value_program_detail_sdm_9['nilai_kontrak_km']) * 100;
                        ?>
                        <?php
                        if (round($total_margin_detail_sdm_9) < 2) {
                            $fee_jmtm_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 0  / 100;
                        } else if (round($total_margin_detail_sdm_9) >= 2 && round($total_margin_detail_sdm_9) <= 4) {
                            $fee_jmtm_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_9) >= 4 && round($total_margin_detail_sdm_9) <= 8) {
                            $fee_jmtm_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 70  / 100;
                        } else if (round($total_margin_detail_sdm_9) >= 8) {
                            $fee_jmtm_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 90  / 100;
                        }

                        if (round($total_margin_detail_sdm_9) < 2) {
                            $fee_owner_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 100  / 100;
                        } else if (round($total_margin_detail_sdm_9) >= 2 && round($total_margin_detail_sdm_9) <= 4) {
                            $fee_owner_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 50  / 100;
                        } else if (round($total_margin_detail_sdm_9) >= 4 && round($total_margin_detail_sdm_9) <= 8) {
                            $fee_owner_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 30 / 100;
                        } else if (round($total_margin_detail_sdm_9) >= 8) {
                            $fee_owner_detail_sdm_9  =  $total_efisiensi_detail_sdm_9 * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas_detail_sdm_9 = 0;
                        $total_kontrak_awal_vendor_atas_detail_sdm_9 += $value_program_detail_sdm_9['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm_detail_sdm_9 = $value_program_detail_sdm_9['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan_detail_sdm_9 = $value_program_detail_sdm_9['nilai_sub_kontrak_penyedia'] +  $fee_owner_detail_sdm_9;
                        ?>
                        <tr class="text-black">
                            <td class="tg-c3ow"></td>
                            <td class="tg-c3ow">

                            </td>
                            <td class="tg-c3ow angga">
                                <div style="width:200px;background-color:white;color:black;">
                                    <?= $value_program_detail_sdm_9['nama_pekerjaan_program_mata_anggaran'] ?>
                                </div>
                            </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_9['nilai_kontrak_km'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_9['nama_penyedia'] ?></td>
                            <td class="tg-c3ow"><?= $value_program_detail_sdm_9['no_kontrak_penyedia'] ?></td>
                            <td class="tg-c3ow"> <?= "Rp " . number_format($value_program_detail_sdm_9['nilai_hps'], 2, ',', '.') ?></td>


                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($value_program_detail_sdm_9['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-c3ow">
                                <?= "Rp " . number_format($value_program_detail_sdm_9['prognosa_beban'], 2, ',', '.') ?>
                            </td>
                            <?php if ($value_program_detail_sdm_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= $value_program_detail_sdm_9['persen_progres_fisik'] ?>%</td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <?php if ($value_program_detail_sdm_9['persen_progres_fisik']) { ?>
                                <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_pendapatan_detail_sdm_9, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-c3ow"></td>
                            <?php   }  ?>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_relasi_beban_detail_sdm_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($total_efisiensi_detail_sdm_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= round($total_margin_detail_sdm_9);  ?>%</td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_jmtm_detail_sdm_9, 2, ',', '.') ?> </td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($fee_owner_detail_sdm_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"><?= "Rp " . number_format($prognoa_beban_tahunan_detail_sdm_9, 2, ',', '.') ?></td>
                            <td class="tg-c3ow"> <?= $value_program_detail_sdm_9['keterangan_laporan'] ?></td>
                            <td class="tg-c3ow">
                                <a href="javascript:;" onclick="ProgresFisik(<?= $value_program_detail_sdm_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-primary btn-block"><i class="fas fa fa-file"></i> Keloa Progres Fisik</a>
                                <a href="javascript:;" onclick="Keterangan(<?= $value_program_detail_sdm_9['id_detail_sub_program_penyedia_jasa'] ?>)" style="font-size: 10px;" class="btn btn-sm btn-outline-secondary btn-block mt-2"><i class="fas fa fa-file"></i> sdmt Keterangan</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>


    </tbody>
</table>