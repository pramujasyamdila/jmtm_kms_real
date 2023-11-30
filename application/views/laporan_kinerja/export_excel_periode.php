<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export_excel.xls");
?>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: RNSSanz-Black;
        text-transform: uppercase;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        color: white !important;
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: RNSSanz-Black;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
        background-color: #193B53 !important;
    }

    .tg .tg-baqh {
        text-align: center;
        vertical-align: top
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top
    }

    .div1 {
        border: 1px solid #777777;
    }

    .div1 table {
        border-spacing: 0;
    }

    .div1 th {
        border-left: none;
        border-right: 1px solid #bbbbbb;
        padding: 5px;
        width: 80px;
        min-width: 80px;
        position: sticky;
        top: 0;
        color: #e0e0e0;
        font-weight: normal;
    }

    .div1 tr {
        color: black;
        ;
    }

    .div1 td {
        border-left: none;
        border-right: 1px solid #bbbbbb;
        border-bottom: 1px solid #bbbbbb;
        padding: 5px;
        width: 80px;
        min-width: 80px;
    }

    .div1 th:nth-child(1),
    .div1 td:nth-child(1) {
        position: sticky;
        left: 0;
        width: 150px;
        min-width: 150px;
    }

    .div1 th:nth-child(2),
    .div1 td:nth-child(2) {
        position: sticky;
        left: 150px;
        width: 50px;
        min-width: 50px;
    }

    .div1 td:nth-child(1),
    .div1 td:nth-child(2) {
        background-color: #F0F8FF;
    }

    .div1 th:nth-child(1),
    .div1 th:nth-child(2) {
        z-index: 2;
    }
</style>
<table class="table2 tg mt-3 div1">
    <colgroup>
        <col style="width: 32px">
        <col style="width: 64px">
        <col style="width: 138px">
        <col style="width: 245px">
        <col style="width: 200px">
        <col style="width: 246px">
        <col style="width: 208px">
        <col style="width: 238px">
    </colgroup>
    <thead>
        <tr>
            <th class="tg-baqh" rowspan="2">NO</th>
            <th class="tg-baqh" rowspan="2">URAIAN</th>
            <th class="tg-baqh" rowspan="2">NAMA PEKERJAAN</th>
            <th class="tg-baqh">PENDAPATAN KONTRAK MANAJEMEN</th>
            <th class="tg-baqh" colspan="4">DATA PENYEDIA</th>
            <th class="tg-baqh" rowspan="2">HPS</th>
            <th class="tg-baqh" rowspan="2">KONTRAK AWAL VENDOR</th>
            <th class="tg-baqh" rowspan="2">NILAI ADDENDUM FINAL QUANTITY VENDOR</th>
            <th class="tg-baqh" rowspan="2">PROGNOSA BEBAN</th>
            <th class="tg-baqh" rowspan="2">PROGRES FISIK</th>
            <th class="tg-baqh" rowspan="2">REALISASI PENDAPATAN SESUAI PROGRES FISIK</th>
            <th class="tg-baqh" rowspan="2">REALISASI BEBAN SESUAI PROGRES FISIK</th>
            <th class="tg-baqh" rowspan="2">EFISIENSI TOTAL (Rp)</th>
            <th class="tg-baqh" rowspan="2">MARGIN (%)</th>
            <th class="tg-baqh" rowspan="2">FEE JMTM (Rp)</th>
            <th class="tg-baqh" rowspan="2">DIKEMBALIKAN KE OWNER (Rp)</th>
            <th class="tg-baqh" rowspan="2">PROGNOSA BEBAN AKHIR TAHUN</th>
            <th class="tg-baqh" rowspan="2">KETERANGAN</th>
        </tr>
        <tr>
            <th class="tg-baqh">KONTRAK AWAL/ ADD</th>
            <th class="tg-baqh">Nama Penyedia</th>
            <th class="tg-baqh">Nomor Kontrak Penyedia</th>
            <th class="tg-0lax">Tanggal Kontrak Penyedia</th>
            <th class="tg-0lax">Nilai Kontrak Penyedia Terupdate</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // capex
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $row_kontrak['id_kontrak']);
        $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
        $query_result_capex = $this->db->get() ?>
        <?php
        foreach ($query_result_capex->result_array() as $value_capex) { ?>
            <?php $id_capex = $value_capex['id_capex'];   ?>
            <?php $nama_uraian_capex = $value_capex['nama_uraian']; ?>
            <tr>
                <td class="tg-0lax"><?= $value_capex['no_urut'] ?></td>
                <td class="tg-0lax"><?= $value_capex['nama_uraian']; ?></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex);
            if ($id_departemen == 4) {
            } else {
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
            }
            $result_program = $this->db->get() ?>
            <?php
            foreach ($result_program->result_array() as $value_program) { ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                // 
                if (round($total_margin) < 2) {
                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                }

                if (round($total_margin) < 2) {
                    $fee_owner  =  $total_efisiensi * 100  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_owner  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_owner  =  $total_efisiensi * 30 / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_owner  =  $total_efisiensi * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas = 0;
                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                ?>
                <tr>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                    <!-- ambil kontrak awal / addendum -->
                    <?php
                    // capex
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->limit(1);
                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                    <?php if ($value_program['persen_progres_fisik']) { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-0lax"></td>
                    <?php   }  ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                        <td class="tg-0lax"></td>
                    <?php } else { ?>
                        <td class="tg-0lax">0</td>
                        <td class="tg-0lax">0</td>
                    <?php   }
                    ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_capex_detail');
            $this->db->where('tbl_capex_detail.id_capex', $id_capex);
            $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
            $query_result_capex_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_capex_detail->result_array() as $value_capex_detail) { ?>
                <?php $id_capex_detail = $value_capex_detail['id_capex_detail'];  ?>
                <?php $nama_uraian_capex_detail = $value_capex_detail['nama_uraian']; ?>
                <tr>
                    <td class="tg-0lax"><?= $value_capex_detail['no_urut'] ?></td>
                    <td class="tg-0lax"><?= $value_capex_detail['nama_uraian']; ?></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail);
                if ($id_departemen == 4) {
                } else {
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                }
                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                $result_program = $this->db->get() ?>
                <?php
                foreach ($result_program->result_array() as $value_program) { ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    // 
                    if (round($total_margin) < 2) {
                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                    }

                    if (round($total_margin) < 2) {
                        $fee_owner  =  $total_efisiensi * 100  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_owner  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_owner  =  $total_efisiensi * 30 / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_owner  =  $total_efisiensi * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas = 0;
                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                    ?>
                    <tr>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                        <!-- ambil kontrak awal / addendum -->
                        <?php
                        // capex
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->limit(1);
                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                        <?php if ($value_program['persen_progres_fisik']) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-0lax"></td>
                        <?php   }  ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                            <td class="tg-0lax"></td>
                        <?php } else { ?>
                            <td class="tg-0lax">0</td>
                            <td class="tg-0lax">0</td>
                        <?php   }
                        ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                    </tr>
                <?php } ?>
                <!-- _1_ -->
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_capex_1');
                $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
                $this->db->order_by('CAST(no_urut_1_capex AS DECIMAL(10,6)) ASC');
                $query_result_capex_detail_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_capex_detail_1->result_array() as $value_capex_detail_1) { ?>
                    <?php $id_detail_capex_1 = $value_capex_detail_1['id_detail_capex_1'];  ?>
                    <?php $nama_uraian_capex_detail_1 = $value_capex_detail_1['nama_uraian_1_capex']; ?>
                    <tr>
                        <td class="tg-0lax"><?= $value_capex_detail_1['no_urut_1_capex'] ?></td>
                        <td class="tg-0lax"><?= $value_capex_detail_1['nama_uraian_1_capex']; ?></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail_1);
                    if ($id_departemen == 4) {
                    } else {
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                    }
                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                    $result_program = $this->db->get() ?>
                    <?php
                    foreach ($result_program->result_array() as $value_program) { ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        // 
                        if (round($total_margin) < 2) {
                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                        }

                        if (round($total_margin) < 2) {
                            $fee_owner  =  $total_efisiensi * 100  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_owner  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_owner  =  $total_efisiensi * 30 / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_owner  =  $total_efisiensi * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas = 0;
                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                        ?>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                            <!-- ambil kontrak awal / addendum -->
                            <?php
                            // capex
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->limit(1);
                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-0lax"></td>
                            <?php   }  ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                <td class="tg-0lax"></td>
                            <?php } else { ?>
                                <td class="tg-0lax">0</td>
                                <td class="tg-0lax">0</td>
                            <?php   }
                            ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    // _1
                    // _2
                    $this->db->select('*');
                    $this->db->from('tbl_detail_capex_2');
                    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
                    $this->db->order_by('CAST(no_urut_2_capex AS DECIMAL(10,6)) ASC');
                    $query_result_capex_detail_2 = $this->db->get() ?>
                    <?php
                    foreach ($query_result_capex_detail_2->result_array() as $value_capex_detail_2) { ?>
                        <?php $id_detail_capex_2 = $value_capex_detail_2['id_detail_capex_2'];  ?>
                        <?php $nama_uraian_capex_detail_2 = $value_capex_detail_2['nama_uraian_2_capex']; ?>
                        <tr>
                            <td class="tg-0lax"><?= $value_capex_detail_2['no_urut_2_capex'] ?></td>
                            <td class="tg-0lax"><?= $value_capex_detail_2['nama_uraian_2_capex']; ?></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail_2);
                        if ($id_departemen == 4) {
                        } else {
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                        }
                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                        $result_program = $this->db->get() ?>
                        <?php
                        foreach ($result_program->result_array() as $value_program) { ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            // 
                            if (round($total_margin) < 2) {
                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                            }

                            if (round($total_margin) < 2) {
                                $fee_owner  =  $total_efisiensi * 100  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_owner  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_owner  =  $total_efisiensi * 30 / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_owner  =  $total_efisiensi * 10  / 100;
                            }
                            $total_kontrak_awal_vendor_atas = 0;
                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                            $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                            ?>
                            <tr>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                <!-- ambil kontrak awal / addendum -->
                                <?php
                                // capex
                                $this->db->select('*');
                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->limit(1);
                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                <?php   } else { ?>
                                    <td class="tg-0lax"></td>
                                <?php   }  ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                    <td class="tg-0lax"></td>
                                <?php } else { ?>
                                    <td class="tg-0lax">0</td>
                                    <td class="tg-0lax">0</td>
                                <?php   }
                                ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                            </tr>
                        <?php } ?>
                        <?php
                        // _2
                        // _3
                        $this->db->select('*');
                        $this->db->from('tbl_detail_capex_3');
                        $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
                        $this->db->order_by('CAST(no_urut_3_capex AS DECIMAL(10,6)) ASC');
                        $query_result_capex_detail_3 = $this->db->get() ?>
                        <?php
                        foreach ($query_result_capex_detail_3->result_array() as $value_capex_detail_3) { ?>
                            <?php $id_detail_capex_3 = $value_capex_detail_3['id_detail_capex_3'];  ?>
                            <?php $nama_uraian_capex_detail_3 = $value_capex_detail_3['nama_uraian_3_capex']; ?>
                            <tr>
                                <td class="tg-0lax"><?= $value_capex_detail_3['no_urut_3_capex'] ?></td>
                                <td class="tg-0lax"><?= $value_capex_detail_3['nama_uraian_3_capex']; ?></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                            </tr>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail_3);
                            if ($id_departemen == 4) {
                            } else {
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                            }
                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                            $result_program = $this->db->get() ?>
                            <?php
                            foreach ($result_program->result_array() as $value_program) { ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                // 
                                if (round($total_margin) < 2) {
                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                }

                                if (round($total_margin) < 2) {
                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                }
                                $total_kontrak_awal_vendor_atas = 0;
                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                ?>
                                <tr>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                    <!-- ambil kontrak awal / addendum -->
                                    <?php
                                    // capex
                                    $this->db->select('*');
                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->limit(1);
                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                    <?php   } else { ?>
                                        <td class="tg-0lax"></td>
                                    <?php   }  ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                        <td class="tg-0lax"></td>
                                    <?php } else { ?>
                                        <td class="tg-0lax">0</td>
                                        <td class="tg-0lax">0</td>
                                    <?php   }
                                    ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            // _3
                            // _4
                            $this->db->select('*');
                            $this->db->from('tbl_detail_capex_4');
                            $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
                            $this->db->order_by('CAST(no_urut_4_capex AS DECIMAL(10,6)) ASC');
                            $query_result_capex_detail_4 = $this->db->get() ?>
                            <?php
                            foreach ($query_result_capex_detail_4->result_array() as $value_capex_detail_4) { ?>
                                <?php $id_detail_capex_4 = $value_capex_detail_4['id_detail_capex_4'];  ?>
                                <?php $nama_uraian_capex_detail_4 = $value_capex_detail_4['nama_uraian_4_capex']; ?>
                                <tr>
                                    <td class="tg-0lax"><?= $value_capex_detail_4['no_urut_4_capex'] ?></td>
                                    <td class="tg-0lax"><?= $value_capex_detail_4['nama_uraian_4_capex']; ?></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                </tr>
                                <?php
                                $this->db->select('*');
                                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail_4);
                                if ($id_departemen == 4) {
                                } else {
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                }
                                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                $result_program = $this->db->get() ?>
                                <?php
                                foreach ($result_program->result_array() as $value_program) { ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    // 
                                    if (round($total_margin) < 2) {
                                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                    }

                                    if (round($total_margin) < 2) {
                                        $fee_owner  =  $total_efisiensi * 100  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_owner  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_owner  =  $total_efisiensi * 30 / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_owner  =  $total_efisiensi * 10  / 100;
                                    }
                                    $total_kontrak_awal_vendor_atas = 0;
                                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                    $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                    ?>
                                    <tr>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                        <!-- ambil kontrak awal / addendum -->
                                        <?php
                                        // capex
                                        $this->db->select('*');
                                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->limit(1);
                                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                        <?php if ($value_program['persen_progres_fisik']) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                        <?php   } else { ?>
                                            <td class="tg-0lax"></td>
                                        <?php   }  ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                            <td class="tg-0lax"></td>
                                        <?php } else { ?>
                                            <td class="tg-0lax">0</td>
                                            <td class="tg-0lax">0</td>
                                        <?php   }
                                        ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                    </tr>
                                <?php } ?>

                                <?php
                                // _4
                                // _5
                                $this->db->select('*');
                                $this->db->from('tbl_detail_capex_5');
                                $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
                                $this->db->order_by('CAST(no_urut_5_capex AS DECIMAL(10,6)) ASC');
                                $query_result_capex_detail_5 = $this->db->get() ?>
                                <?php
                                foreach ($query_result_capex_detail_5->result_array() as $value_capex_detail_5) { ?>
                                    <?php $id_detail_capex_5 = $value_capex_detail_5['id_detail_capex_5'];  ?>
                                    <?php $nama_uraian_capex_detail_5 = $value_capex_detail_5['nama_uraian_5_capex']; ?>
                                    <tr>
                                        <td class="tg-0lax"><?= $value_capex_detail_5['no_urut_5_capex'] ?></td>
                                        <td class="tg-0lax"><?= $value_capex_detail_5['nama_uraian_5_capex']; ?></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                    </tr>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail_5);
                                    if ($id_departemen == 4) {
                                    } else {
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                    }
                                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                    $result_program = $this->db->get() ?>
                                    <?php
                                    foreach ($result_program->result_array() as $value_program) { ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        // 
                                        if (round($total_margin) < 2) {
                                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                        }

                                        if (round($total_margin) < 2) {
                                            $fee_owner  =  $total_efisiensi * 100  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_owner  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_owner  =  $total_efisiensi * 30 / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_owner  =  $total_efisiensi * 10  / 100;
                                        }
                                        $total_kontrak_awal_vendor_atas = 0;
                                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                        $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                        ?>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                            <!-- ambil kontrak awal / addendum -->
                                            <?php
                                            // capex
                                            $this->db->select('*');
                                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->limit(1);
                                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                            <?php   } else { ?>
                                                <td class="tg-0lax"></td>
                                            <?php   }  ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                <td class="tg-0lax"></td>
                                            <?php } else { ?>
                                                <td class="tg-0lax">0</td>
                                                <td class="tg-0lax">0</td>
                                            <?php   }
                                            ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    // _5
                                    // _6
                                    $this->db->select('*');
                                    $this->db->from('tbl_detail_capex_6');
                                    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
                                    $this->db->order_by('CAST(no_urut_6_capex AS DECIMAL(10,6)) ASC');
                                    $query_result_capex_detail_6 = $this->db->get() ?>
                                    <?php
                                    foreach ($query_result_capex_detail_6->result_array() as $value_capex_detail_6) { ?>
                                        <?php $id_detail_capex_6 = $value_capex_detail_6['id_detail_capex_6'];  ?>
                                        <?php $nama_uraian_capex_detail_6 = $value_capex_detail_6['nama_uraian_6_capex']; ?>
                                        <tr>
                                            <td class="tg-0lax"><?= $value_capex_detail_6['no_urut_6_capex'] ?></td>
                                            <td class="tg-0lax"><?= $value_capex_detail_6['nama_uraian_6_capex']; ?></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                        </tr>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail_6);
                                        if ($id_departemen == 4) {
                                        } else {
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                        }
                                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                        $result_program = $this->db->get() ?>
                                        <?php
                                        foreach ($result_program->result_array() as $value_program) { ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            // 
                                            if (round($total_margin) < 2) {
                                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                            }

                                            if (round($total_margin) < 2) {
                                                $fee_owner  =  $total_efisiensi * 100  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_owner  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_owner  =  $total_efisiensi * 30 / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_owner  =  $total_efisiensi * 10  / 100;
                                            }
                                            $total_kontrak_awal_vendor_atas = 0;
                                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                            $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                            ?>
                                            <tr>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                <!-- ambil kontrak awal / addendum -->
                                                <?php
                                                // capex
                                                $this->db->select('*');
                                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                $this->db->limit(1);
                                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                <?php   } else { ?>
                                                    <td class="tg-0lax"></td>
                                                <?php   }  ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                    <td class="tg-0lax"></td>
                                                <?php } else { ?>
                                                    <td class="tg-0lax">0</td>
                                                    <td class="tg-0lax">0</td>
                                                <?php   }
                                                ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php
                                        // _6
                                        // _7
                                        $this->db->select('*');
                                        $this->db->from('tbl_detail_capex_7');
                                        $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
                                        $this->db->order_by('CAST(no_urut_7_capex AS DECIMAL(10,6)) ASC');
                                        $query_result_capex_detail_7 = $this->db->get() ?>
                                        <?php
                                        foreach ($query_result_capex_detail_7->result_array() as $value_capex_detail_7) { ?>
                                            <?php $id_detail_capex_7 = $value_capex_detail_7['id_detail_capex_7'];  ?>
                                            <?php $nama_uraian_capex_detail_7 = $value_capex_detail_7['nama_uraian_7_capex']; ?>
                                            <tr>
                                                <td class="tg-0lax"><?= $value_capex_detail_7['no_urut_7_capex'] ?></td>
                                                <td class="tg-0lax"><?= $value_capex_detail_7['nama_uraian_7_capex']; ?></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                            </tr>
                                            <?php
                                            $this->db->select('*');
                                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_capex_detail_7);
                                            if ($id_departemen == 4) {
                                            } else {
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                            }
                                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                            $result_program = $this->db->get() ?>
                                            <?php
                                            foreach ($result_program->result_array() as $value_program) { ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                // 
                                                if (round($total_margin) < 2) {
                                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                                }

                                                if (round($total_margin) < 2) {
                                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                                }
                                                $total_kontrak_awal_vendor_atas = 0;
                                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                                $total_ke_atas_capex = $value_program['total_hps_mata_anggaran'];
                                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                                ?>
                                                <tr>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                    <!-- ambil kontrak awal / addendum -->
                                                    <?php
                                                    // capex
                                                    $this->db->select('*');
                                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                    $this->db->limit(1);
                                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                    <?php   } else { ?>
                                                        <td class="tg-0lax"></td>
                                                    <?php   }  ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                        <td class="tg-0lax"></td>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax">0</td>
                                                        <td class="tg-0lax">0</td>
                                                    <?php   }
                                                    ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>


        <?php
        // opex
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $row_kontrak['id_kontrak']);
        $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
        $query_result_opex = $this->db->get() ?>
        <?php
        foreach ($query_result_opex->result_array() as $value_opex) { ?>
            <?php $id_opex = $value_opex['id_opex'];   ?>
            <?php $nama_uraian_opex = $value_opex['nama_uraian']; ?>
            <tr>
                <td class="tg-0lax"><?= $value_opex['no_urut'] ?></td>
                <td class="tg-0lax"><?= $value_opex['nama_uraian']; ?></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex);
            if ($id_departemen == 4) {
            } else {
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
            }
            $result_program = $this->db->get() ?>
            <?php
            foreach ($result_program->result_array() as $value_program) { ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                // 
                if (round($total_margin) < 2) {
                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                }

                if (round($total_margin) < 2) {
                    $fee_owner  =  $total_efisiensi * 100  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_owner  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_owner  =  $total_efisiensi * 30 / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_owner  =  $total_efisiensi * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas = 0;
                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                ?>
                <tr>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                    <!-- ambil kontrak awal / addendum -->
                    <?php
                    // opex
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->limit(1);
                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                    <?php if ($value_program['persen_progres_fisik']) { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-0lax"></td>
                    <?php   }  ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                        <td class="tg-0lax"></td>
                    <?php } else { ?>
                        <td class="tg-0lax">0</td>
                        <td class="tg-0lax">0</td>
                    <?php   }
                    ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_opex_detail');
            $this->db->where('tbl_opex_detail.id_opex', $id_opex);
            $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
            $query_result_opex_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_opex_detail->result_array() as $value_opex_detail) { ?>
                <?php $id_opex_detail = $value_opex_detail['id_opex_detail'];  ?>
                <?php $nama_uraian_opex_detail = $value_opex_detail['nama_uraian']; ?>
                <tr>
                    <td class="tg-0lax"><?= $value_opex_detail['no_urut'] ?></td>
                    <td class="tg-0lax"><?= $value_opex_detail['nama_uraian']; ?></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail);
                if ($id_departemen == 4) {
                } else {
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                }
                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                $result_program = $this->db->get() ?>
                <?php
                foreach ($result_program->result_array() as $value_program) { ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    // 
                    if (round($total_margin) < 2) {
                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                    }

                    if (round($total_margin) < 2) {
                        $fee_owner  =  $total_efisiensi * 100  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_owner  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_owner  =  $total_efisiensi * 30 / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_owner  =  $total_efisiensi * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas = 0;
                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                    ?>
                    <tr>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                        <!-- ambil kontrak awal / addendum -->
                        <?php
                        // opex
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->limit(1);
                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                        <?php if ($value_program['persen_progres_fisik']) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-0lax"></td>
                        <?php   }  ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                            <td class="tg-0lax"></td>
                        <?php } else { ?>
                            <td class="tg-0lax">0</td>
                            <td class="tg-0lax">0</td>
                        <?php   }
                        ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                    </tr>
                <?php } ?>
                <!-- _1_ -->
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_opex_1');
                $this->db->where('tbl_detail_opex_1.id_opex_detail', $id_opex_detail);
                $this->db->order_by('CAST(no_urut_1_opex AS DECIMAL(10,6)) ASC');
                $query_result_opex_detail_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_opex_detail_1->result_array() as $value_opex_detail_1) { ?>
                    <?php $id_detail_opex_1 = $value_opex_detail_1['id_detail_opex_1'];  ?>
                    <?php $nama_uraian_opex_detail_1 = $value_opex_detail_1['nama_uraian_1_opex']; ?>
                    <tr>
                        <td class="tg-0lax"><?= $value_opex_detail_1['no_urut_1_opex'] ?></td>
                        <td class="tg-0lax"><?= $value_opex_detail_1['nama_uraian_1_opex']; ?></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail_1);
                    if ($id_departemen == 4) {
                    } else {
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                    }
                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                    $result_program = $this->db->get() ?>
                    <?php
                    foreach ($result_program->result_array() as $value_program) { ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        // 
                        if (round($total_margin) < 2) {
                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                        }

                        if (round($total_margin) < 2) {
                            $fee_owner  =  $total_efisiensi * 100  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_owner  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_owner  =  $total_efisiensi * 30 / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_owner  =  $total_efisiensi * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas = 0;
                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                        ?>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                            <!-- ambil kontrak awal / addendum -->
                            <?php
                            // opex
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->limit(1);
                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-0lax"></td>
                            <?php   }  ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                <td class="tg-0lax"></td>
                            <?php } else { ?>
                                <td class="tg-0lax">0</td>
                                <td class="tg-0lax">0</td>
                            <?php   }
                            ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    // _1
                    // _2
                    $this->db->select('*');
                    $this->db->from('tbl_detail_opex_2');
                    $this->db->where('tbl_detail_opex_2.id_detail_opex_1', $id_detail_opex_1);
                    $this->db->order_by('CAST(no_urut_2_opex AS DECIMAL(10,6)) ASC');
                    $query_result_opex_detail_2 = $this->db->get() ?>
                    <?php
                    foreach ($query_result_opex_detail_2->result_array() as $value_opex_detail_2) { ?>
                        <?php $id_detail_opex_2 = $value_opex_detail_2['id_detail_opex_2'];  ?>
                        <?php $nama_uraian_opex_detail_2 = $value_opex_detail_2['nama_uraian_2_opex']; ?>
                        <tr>
                            <td class="tg-0lax"><?= $value_opex_detail_2['no_urut_2_opex'] ?></td>
                            <td class="tg-0lax"><?= $value_opex_detail_2['nama_uraian_2_opex']; ?></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail_2);
                        if ($id_departemen == 4) {
                        } else {
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                        }
                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                        $result_program = $this->db->get() ?>
                        <?php
                        foreach ($result_program->result_array() as $value_program) { ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            // 
                            if (round($total_margin) < 2) {
                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                            }

                            if (round($total_margin) < 2) {
                                $fee_owner  =  $total_efisiensi * 100  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_owner  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_owner  =  $total_efisiensi * 30 / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_owner  =  $total_efisiensi * 10  / 100;
                            }
                            $total_kontrak_awal_vendor_atas = 0;
                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                            $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                            ?>
                            <tr>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                <!-- ambil kontrak awal / addendum -->
                                <?php
                                // opex
                                $this->db->select('*');
                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->limit(1);
                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                <?php   } else { ?>
                                    <td class="tg-0lax"></td>
                                <?php   }  ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                    <td class="tg-0lax"></td>
                                <?php } else { ?>
                                    <td class="tg-0lax">0</td>
                                    <td class="tg-0lax">0</td>
                                <?php   }
                                ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                            </tr>
                        <?php } ?>
                        <?php
                        // _2
                        // _3
                        $this->db->select('*');
                        $this->db->from('tbl_detail_opex_3');
                        $this->db->where('tbl_detail_opex_3.id_detail_opex_2', $id_detail_opex_2);
                        $this->db->order_by('CAST(no_urut_3_opex AS DECIMAL(10,6)) ASC');
                        $query_result_opex_detail_3 = $this->db->get() ?>
                        <?php
                        foreach ($query_result_opex_detail_3->result_array() as $value_opex_detail_3) { ?>
                            <?php $id_detail_opex_3 = $value_opex_detail_3['id_detail_opex_3'];  ?>
                            <?php $nama_uraian_opex_detail_3 = $value_opex_detail_3['nama_uraian_3_opex']; ?>
                            <tr>
                                <td class="tg-0lax"><?= $value_opex_detail_3['no_urut_3_opex'] ?></td>
                                <td class="tg-0lax"><?= $value_opex_detail_3['nama_uraian_3_opex']; ?></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                            </tr>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail_3);
                            if ($id_departemen == 4) {
                            } else {
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                            }
                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                            $result_program = $this->db->get() ?>
                            <?php
                            foreach ($result_program->result_array() as $value_program) { ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                // 
                                if (round($total_margin) < 2) {
                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                }

                                if (round($total_margin) < 2) {
                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                }
                                $total_kontrak_awal_vendor_atas = 0;
                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                ?>
                                <tr>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                    <!-- ambil kontrak awal / addendum -->
                                    <?php
                                    // opex
                                    $this->db->select('*');
                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->limit(1);
                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                    <?php   } else { ?>
                                        <td class="tg-0lax"></td>
                                    <?php   }  ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                        <td class="tg-0lax"></td>
                                    <?php } else { ?>
                                        <td class="tg-0lax">0</td>
                                        <td class="tg-0lax">0</td>
                                    <?php   }
                                    ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            // _3
                            // _4
                            $this->db->select('*');
                            $this->db->from('tbl_detail_opex_4');
                            $this->db->where('tbl_detail_opex_4.id_detail_opex_3', $id_detail_opex_3);
                            $this->db->order_by('CAST(no_urut_4_opex AS DECIMAL(10,6)) ASC');
                            $query_result_opex_detail_4 = $this->db->get() ?>
                            <?php
                            foreach ($query_result_opex_detail_4->result_array() as $value_opex_detail_4) { ?>
                                <?php $id_detail_opex_4 = $value_opex_detail_4['id_detail_opex_4'];  ?>
                                <?php $nama_uraian_opex_detail_4 = $value_opex_detail_4['nama_uraian_4_opex']; ?>
                                <tr>
                                    <td class="tg-0lax"><?= $value_opex_detail_4['no_urut_4_opex'] ?></td>
                                    <td class="tg-0lax"><?= $value_opex_detail_4['nama_uraian_4_opex']; ?></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                </tr>
                                <?php
                                $this->db->select('*');
                                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail_4);
                                if ($id_departemen == 4) {
                                } else {
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                }
                                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                $result_program = $this->db->get() ?>
                                <?php
                                foreach ($result_program->result_array() as $value_program) { ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    // 
                                    if (round($total_margin) < 2) {
                                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                    }

                                    if (round($total_margin) < 2) {
                                        $fee_owner  =  $total_efisiensi * 100  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_owner  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_owner  =  $total_efisiensi * 30 / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_owner  =  $total_efisiensi * 10  / 100;
                                    }
                                    $total_kontrak_awal_vendor_atas = 0;
                                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                    $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                    ?>
                                    <tr>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                        <!-- ambil kontrak awal / addendum -->
                                        <?php
                                        // opex
                                        $this->db->select('*');
                                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->limit(1);
                                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                        <?php if ($value_program['persen_progres_fisik']) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                        <?php   } else { ?>
                                            <td class="tg-0lax"></td>
                                        <?php   }  ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                            <td class="tg-0lax"></td>
                                        <?php } else { ?>
                                            <td class="tg-0lax">0</td>
                                            <td class="tg-0lax">0</td>
                                        <?php   }
                                        ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                    </tr>
                                <?php } ?>

                                <?php
                                // _4
                                // _5
                                $this->db->select('*');
                                $this->db->from('tbl_detail_opex_5');
                                $this->db->where('tbl_detail_opex_5.id_detail_opex_4', $id_detail_opex_4);
                                $this->db->order_by('CAST(no_urut_5_opex AS DECIMAL(10,6)) ASC');
                                $query_result_opex_detail_5 = $this->db->get() ?>
                                <?php
                                foreach ($query_result_opex_detail_5->result_array() as $value_opex_detail_5) { ?>
                                    <?php $id_detail_opex_5 = $value_opex_detail_5['id_detail_opex_5'];  ?>
                                    <?php $nama_uraian_opex_detail_5 = $value_opex_detail_5['nama_uraian_5_opex']; ?>
                                    <tr>
                                        <td class="tg-0lax"><?= $value_opex_detail_5['no_urut_5_opex'] ?></td>
                                        <td class="tg-0lax"><?= $value_opex_detail_5['nama_uraian_5_opex']; ?></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                    </tr>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail_5);
                                    if ($id_departemen == 4) {
                                    } else {
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                    }
                                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                    $result_program = $this->db->get() ?>
                                    <?php
                                    foreach ($result_program->result_array() as $value_program) { ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        // 
                                        if (round($total_margin) < 2) {
                                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                        }

                                        if (round($total_margin) < 2) {
                                            $fee_owner  =  $total_efisiensi * 100  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_owner  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_owner  =  $total_efisiensi * 30 / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_owner  =  $total_efisiensi * 10  / 100;
                                        }
                                        $total_kontrak_awal_vendor_atas = 0;
                                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                        $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                        ?>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                            <!-- ambil kontrak awal / addendum -->
                                            <?php
                                            // opex
                                            $this->db->select('*');
                                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->limit(1);
                                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                            <?php   } else { ?>
                                                <td class="tg-0lax"></td>
                                            <?php   }  ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                <td class="tg-0lax"></td>
                                            <?php } else { ?>
                                                <td class="tg-0lax">0</td>
                                                <td class="tg-0lax">0</td>
                                            <?php   }
                                            ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    // _5
                                    // _6
                                    $this->db->select('*');
                                    $this->db->from('tbl_detail_opex_6');
                                    $this->db->where('tbl_detail_opex_6.id_detail_opex_5', $id_detail_opex_5);
                                    $this->db->order_by('CAST(no_urut_6_opex AS DECIMAL(10,6)) ASC');
                                    $query_result_opex_detail_6 = $this->db->get() ?>
                                    <?php
                                    foreach ($query_result_opex_detail_6->result_array() as $value_opex_detail_6) { ?>
                                        <?php $id_detail_opex_6 = $value_opex_detail_6['id_detail_opex_6'];  ?>
                                        <?php $nama_uraian_opex_detail_6 = $value_opex_detail_6['nama_uraian_6_opex']; ?>
                                        <tr>
                                            <td class="tg-0lax"><?= $value_opex_detail_6['no_urut_6_opex'] ?></td>
                                            <td class="tg-0lax"><?= $value_opex_detail_6['nama_uraian_6_opex']; ?></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                        </tr>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail_6);
                                        if ($id_departemen == 4) {
                                        } else {
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                        }
                                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                        $result_program = $this->db->get() ?>
                                        <?php
                                        foreach ($result_program->result_array() as $value_program) { ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            // 
                                            if (round($total_margin) < 2) {
                                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                            }

                                            if (round($total_margin) < 2) {
                                                $fee_owner  =  $total_efisiensi * 100  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_owner  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_owner  =  $total_efisiensi * 30 / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_owner  =  $total_efisiensi * 10  / 100;
                                            }
                                            $total_kontrak_awal_vendor_atas = 0;
                                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                            $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                            ?>
                                            <tr>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                <!-- ambil kontrak awal / addendum -->
                                                <?php
                                                // opex
                                                $this->db->select('*');
                                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                $this->db->limit(1);
                                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                <?php   } else { ?>
                                                    <td class="tg-0lax"></td>
                                                <?php   }  ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                    <td class="tg-0lax"></td>
                                                <?php } else { ?>
                                                    <td class="tg-0lax">0</td>
                                                    <td class="tg-0lax">0</td>
                                                <?php   }
                                                ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php
                                        // _6
                                        // _7
                                        $this->db->select('*');
                                        $this->db->from('tbl_detail_opex_7');
                                        $this->db->where('tbl_detail_opex_7.id_detail_opex_6', $id_detail_opex_6);
                                        $this->db->order_by('CAST(no_urut_7_opex AS DECIMAL(10,6)) ASC');
                                        $query_result_opex_detail_7 = $this->db->get() ?>
                                        <?php
                                        foreach ($query_result_opex_detail_7->result_array() as $value_opex_detail_7) { ?>
                                            <?php $id_detail_opex_7 = $value_opex_detail_7['id_detail_opex_7'];  ?>
                                            <?php $nama_uraian_opex_detail_7 = $value_opex_detail_7['nama_uraian_7_opex']; ?>
                                            <tr>
                                                <td class="tg-0lax"><?= $value_opex_detail_7['no_urut_7_opex'] ?></td>
                                                <td class="tg-0lax"><?= $value_opex_detail_7['nama_uraian_7_opex']; ?></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                            </tr>
                                            <?php
                                            $this->db->select('*');
                                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_opex_detail_7);
                                            if ($id_departemen == 4) {
                                            } else {
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                            }
                                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                            $result_program = $this->db->get() ?>
                                            <?php
                                            foreach ($result_program->result_array() as $value_program) { ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                // 
                                                if (round($total_margin) < 2) {
                                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                                }

                                                if (round($total_margin) < 2) {
                                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                                }
                                                $total_kontrak_awal_vendor_atas = 0;
                                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                                $total_ke_atas_opex = $value_program['total_hps_mata_anggaran'];
                                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                                ?>
                                                <tr>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                    <!-- ambil kontrak awal / addendum -->
                                                    <?php
                                                    // opex
                                                    $this->db->select('*');
                                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                    $this->db->limit(1);
                                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                    <?php   } else { ?>
                                                        <td class="tg-0lax"></td>
                                                    <?php   }  ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                        <td class="tg-0lax"></td>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax">0</td>
                                                        <td class="tg-0lax">0</td>
                                                    <?php   }
                                                    ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <?php
        // bua
        $this->db->select('*');
        $this->db->from('tbl_bua');
        $this->db->where('tbl_bua.id_kontrak', $row_kontrak['id_kontrak']);
        $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
        $query_result_bua = $this->db->get() ?>
        <?php
        foreach ($query_result_bua->result_array() as $value_bua) { ?>
            <?php $id_bua = $value_bua['id_bua'];   ?>
            <?php $nama_uraian_bua = $value_bua['nama_uraian']; ?>
            <tr>
                <td class="tg-0lax"><?= $value_bua['no_urut'] ?></td>
                <td class="tg-0lax"><?= $value_bua['nama_uraian']; ?></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua);
            if ($id_departemen == 4) {
            } else {
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
            }
            $result_program = $this->db->get() ?>
            <?php
            foreach ($result_program->result_array() as $value_program) { ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                // 
                if (round($total_margin) < 2) {
                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                }

                if (round($total_margin) < 2) {
                    $fee_owner  =  $total_efisiensi * 100  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_owner  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_owner  =  $total_efisiensi * 30 / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_owner  =  $total_efisiensi * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas = 0;
                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                ?>
                <tr>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                    <!-- ambil kontrak awal / addendum -->
                    <?php
                    // bua
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->limit(1);
                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                    <?php if ($value_program['persen_progres_fisik']) { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-0lax"></td>
                    <?php   }  ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                        <td class="tg-0lax"></td>
                    <?php } else { ?>
                        <td class="tg-0lax">0</td>
                        <td class="tg-0lax">0</td>
                    <?php   }
                    ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_bua_detail');
            $this->db->where('tbl_bua_detail.id_bua', $id_bua);
            $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
            $query_result_bua_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_bua_detail->result_array() as $value_bua_detail) { ?>
                <?php $id_bua_detail = $value_bua_detail['id_bua_detail'];  ?>
                <?php $nama_uraian_bua_detail = $value_bua_detail['nama_uraian']; ?>
                <tr>
                    <td class="tg-0lax"><?= $value_bua_detail['no_urut'] ?></td>
                    <td class="tg-0lax"><?= $value_bua_detail['nama_uraian']; ?></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail);
                if ($id_departemen == 4) {
                } else {
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                }
                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                $result_program = $this->db->get() ?>
                <?php
                foreach ($result_program->result_array() as $value_program) { ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    // 
                    if (round($total_margin) < 2) {
                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                    }

                    if (round($total_margin) < 2) {
                        $fee_owner  =  $total_efisiensi * 100  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_owner  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_owner  =  $total_efisiensi * 30 / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_owner  =  $total_efisiensi * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas = 0;
                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                    ?>
                    <tr>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                        <!-- ambil kontrak awal / addendum -->
                        <?php
                        // bua
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->limit(1);
                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                        <?php if ($value_program['persen_progres_fisik']) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-0lax"></td>
                        <?php   }  ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                            <td class="tg-0lax"></td>
                        <?php } else { ?>
                            <td class="tg-0lax">0</td>
                            <td class="tg-0lax">0</td>
                        <?php   }
                        ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                    </tr>
                <?php } ?>
                <!-- _1_ -->
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_bua_1');
                $this->db->where('tbl_detail_bua_1.id_bua_detail', $id_bua_detail);
                $this->db->order_by('CAST(no_urut_1_bua AS DECIMAL(10,6)) ASC');
                $query_result_bua_detail_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_bua_detail_1->result_array() as $value_bua_detail_1) { ?>
                    <?php $id_detail_bua_1 = $value_bua_detail_1['id_detail_bua_1'];  ?>
                    <?php $nama_uraian_bua_detail_1 = $value_bua_detail_1['nama_uraian_1_bua']; ?>
                    <tr>
                        <td class="tg-0lax"><?= $value_bua_detail_1['no_urut_1_bua'] ?></td>
                        <td class="tg-0lax"><?= $value_bua_detail_1['nama_uraian_1_bua']; ?></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail_1);
                    if ($id_departemen == 4) {
                    } else {
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                    }
                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                    $result_program = $this->db->get() ?>
                    <?php
                    foreach ($result_program->result_array() as $value_program) { ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        // 
                        if (round($total_margin) < 2) {
                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                        }

                        if (round($total_margin) < 2) {
                            $fee_owner  =  $total_efisiensi * 100  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_owner  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_owner  =  $total_efisiensi * 30 / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_owner  =  $total_efisiensi * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas = 0;
                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                        ?>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                            <!-- ambil kontrak awal / addendum -->
                            <?php
                            // bua
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->limit(1);
                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-0lax"></td>
                            <?php   }  ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                <td class="tg-0lax"></td>
                            <?php } else { ?>
                                <td class="tg-0lax">0</td>
                                <td class="tg-0lax">0</td>
                            <?php   }
                            ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    // _1
                    // _2
                    $this->db->select('*');
                    $this->db->from('tbl_detail_bua_2');
                    $this->db->where('tbl_detail_bua_2.id_detail_bua_1', $id_detail_bua_1);
                    $this->db->order_by('CAST(no_urut_2_bua AS DECIMAL(10,6)) ASC');
                    $query_result_bua_detail_2 = $this->db->get() ?>
                    <?php
                    foreach ($query_result_bua_detail_2->result_array() as $value_bua_detail_2) { ?>
                        <?php $id_detail_bua_2 = $value_bua_detail_2['id_detail_bua_2'];  ?>
                        <?php $nama_uraian_bua_detail_2 = $value_bua_detail_2['nama_uraian_2_bua']; ?>
                        <tr>
                            <td class="tg-0lax"><?= $value_bua_detail_2['no_urut_2_bua'] ?></td>
                            <td class="tg-0lax"><?= $value_bua_detail_2['nama_uraian_2_bua']; ?></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail_2);
                        if ($id_departemen == 4) {
                        } else {
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                        }
                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                        $result_program = $this->db->get() ?>
                        <?php
                        foreach ($result_program->result_array() as $value_program) { ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            // 
                            if (round($total_margin) < 2) {
                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                            }

                            if (round($total_margin) < 2) {
                                $fee_owner  =  $total_efisiensi * 100  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_owner  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_owner  =  $total_efisiensi * 30 / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_owner  =  $total_efisiensi * 10  / 100;
                            }
                            $total_kontrak_awal_vendor_atas = 0;
                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                            $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                            ?>
                            <tr>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                <!-- ambil kontrak awal / addendum -->
                                <?php
                                // bua
                                $this->db->select('*');
                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->limit(1);
                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                <?php   } else { ?>
                                    <td class="tg-0lax"></td>
                                <?php   }  ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                    <td class="tg-0lax"></td>
                                <?php } else { ?>
                                    <td class="tg-0lax">0</td>
                                    <td class="tg-0lax">0</td>
                                <?php   }
                                ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                            </tr>
                        <?php } ?>
                        <?php
                        // _2
                        // _3
                        $this->db->select('*');
                        $this->db->from('tbl_detail_bua_3');
                        $this->db->where('tbl_detail_bua_3.id_detail_bua_2', $id_detail_bua_2);
                        $this->db->order_by('CAST(no_urut_3_bua AS DECIMAL(10,6)) ASC');
                        $query_result_bua_detail_3 = $this->db->get() ?>
                        <?php
                        foreach ($query_result_bua_detail_3->result_array() as $value_bua_detail_3) { ?>
                            <?php $id_detail_bua_3 = $value_bua_detail_3['id_detail_bua_3'];  ?>
                            <?php $nama_uraian_bua_detail_3 = $value_bua_detail_3['nama_uraian_3_bua']; ?>
                            <tr>
                                <td class="tg-0lax"><?= $value_bua_detail_3['no_urut_3_bua'] ?></td>
                                <td class="tg-0lax"><?= $value_bua_detail_3['nama_uraian_3_bua']; ?></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                            </tr>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail_3);
                            if ($id_departemen == 4) {
                            } else {
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                            }
                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                            $result_program = $this->db->get() ?>
                            <?php
                            foreach ($result_program->result_array() as $value_program) { ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                // 
                                if (round($total_margin) < 2) {
                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                }

                                if (round($total_margin) < 2) {
                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                }
                                $total_kontrak_awal_vendor_atas = 0;
                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                ?>
                                <tr>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                    <!-- ambil kontrak awal / addendum -->
                                    <?php
                                    // bua
                                    $this->db->select('*');
                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->limit(1);
                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                    <?php   } else { ?>
                                        <td class="tg-0lax"></td>
                                    <?php   }  ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                        <td class="tg-0lax"></td>
                                    <?php } else { ?>
                                        <td class="tg-0lax">0</td>
                                        <td class="tg-0lax">0</td>
                                    <?php   }
                                    ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            // _3
                            // _4
                            $this->db->select('*');
                            $this->db->from('tbl_detail_bua_4');
                            $this->db->where('tbl_detail_bua_4.id_detail_bua_3', $id_detail_bua_3);
                            $this->db->order_by('CAST(no_urut_4_bua AS DECIMAL(10,6)) ASC');
                            $query_result_bua_detail_4 = $this->db->get() ?>
                            <?php
                            foreach ($query_result_bua_detail_4->result_array() as $value_bua_detail_4) { ?>
                                <?php $id_detail_bua_4 = $value_bua_detail_4['id_detail_bua_4'];  ?>
                                <?php $nama_uraian_bua_detail_4 = $value_bua_detail_4['nama_uraian_4_bua']; ?>
                                <tr>
                                    <td class="tg-0lax"><?= $value_bua_detail_4['no_urut_4_bua'] ?></td>
                                    <td class="tg-0lax"><?= $value_bua_detail_4['nama_uraian_4_bua']; ?></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                </tr>
                                <?php
                                $this->db->select('*');
                                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail_4);
                                if ($id_departemen == 4) {
                                } else {
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                }
                                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                $result_program = $this->db->get() ?>
                                <?php
                                foreach ($result_program->result_array() as $value_program) { ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    // 
                                    if (round($total_margin) < 2) {
                                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                    }

                                    if (round($total_margin) < 2) {
                                        $fee_owner  =  $total_efisiensi * 100  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_owner  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_owner  =  $total_efisiensi * 30 / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_owner  =  $total_efisiensi * 10  / 100;
                                    }
                                    $total_kontrak_awal_vendor_atas = 0;
                                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                    $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                    ?>
                                    <tr>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                        <!-- ambil kontrak awal / addendum -->
                                        <?php
                                        // bua
                                        $this->db->select('*');
                                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->limit(1);
                                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                        <?php if ($value_program['persen_progres_fisik']) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                        <?php   } else { ?>
                                            <td class="tg-0lax"></td>
                                        <?php   }  ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                            <td class="tg-0lax"></td>
                                        <?php } else { ?>
                                            <td class="tg-0lax">0</td>
                                            <td class="tg-0lax">0</td>
                                        <?php   }
                                        ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                    </tr>
                                <?php } ?>

                                <?php
                                // _4
                                // _5
                                $this->db->select('*');
                                $this->db->from('tbl_detail_bua_5');
                                $this->db->where('tbl_detail_bua_5.id_detail_bua_4', $id_detail_bua_4);
                                $this->db->order_by('CAST(no_urut_5_bua AS DECIMAL(10,6)) ASC');
                                $query_result_bua_detail_5 = $this->db->get() ?>
                                <?php
                                foreach ($query_result_bua_detail_5->result_array() as $value_bua_detail_5) { ?>
                                    <?php $id_detail_bua_5 = $value_bua_detail_5['id_detail_bua_5'];  ?>
                                    <?php $nama_uraian_bua_detail_5 = $value_bua_detail_5['nama_uraian_5_bua']; ?>
                                    <tr>
                                        <td class="tg-0lax"><?= $value_bua_detail_5['no_urut_5_bua'] ?></td>
                                        <td class="tg-0lax"><?= $value_bua_detail_5['nama_uraian_5_bua']; ?></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                    </tr>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail_5);
                                    if ($id_departemen == 4) {
                                    } else {
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                    }
                                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                    $result_program = $this->db->get() ?>
                                    <?php
                                    foreach ($result_program->result_array() as $value_program) { ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        // 
                                        if (round($total_margin) < 2) {
                                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                        }

                                        if (round($total_margin) < 2) {
                                            $fee_owner  =  $total_efisiensi * 100  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_owner  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_owner  =  $total_efisiensi * 30 / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_owner  =  $total_efisiensi * 10  / 100;
                                        }
                                        $total_kontrak_awal_vendor_atas = 0;
                                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                        $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                        ?>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                            <!-- ambil kontrak awal / addendum -->
                                            <?php
                                            // bua
                                            $this->db->select('*');
                                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->limit(1);
                                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                            <?php   } else { ?>
                                                <td class="tg-0lax"></td>
                                            <?php   }  ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                <td class="tg-0lax"></td>
                                            <?php } else { ?>
                                                <td class="tg-0lax">0</td>
                                                <td class="tg-0lax">0</td>
                                            <?php   }
                                            ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    // _5
                                    // _6
                                    $this->db->select('*');
                                    $this->db->from('tbl_detail_bua_6');
                                    $this->db->where('tbl_detail_bua_6.id_detail_bua_5', $id_detail_bua_5);
                                    $this->db->order_by('CAST(no_urut_6_bua AS DECIMAL(10,6)) ASC');
                                    $query_result_bua_detail_6 = $this->db->get() ?>
                                    <?php
                                    foreach ($query_result_bua_detail_6->result_array() as $value_bua_detail_6) { ?>
                                        <?php $id_detail_bua_6 = $value_bua_detail_6['id_detail_bua_6'];  ?>
                                        <?php $nama_uraian_bua_detail_6 = $value_bua_detail_6['nama_uraian_6_bua']; ?>
                                        <tr>
                                            <td class="tg-0lax"><?= $value_bua_detail_6['no_urut_6_bua'] ?></td>
                                            <td class="tg-0lax"><?= $value_bua_detail_6['nama_uraian_6_bua']; ?></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                        </tr>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail_6);
                                        if ($id_departemen == 4) {
                                        } else {
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                        }
                                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                        $result_program = $this->db->get() ?>
                                        <?php
                                        foreach ($result_program->result_array() as $value_program) { ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            // 
                                            if (round($total_margin) < 2) {
                                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                            }

                                            if (round($total_margin) < 2) {
                                                $fee_owner  =  $total_efisiensi * 100  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_owner  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_owner  =  $total_efisiensi * 30 / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_owner  =  $total_efisiensi * 10  / 100;
                                            }
                                            $total_kontrak_awal_vendor_atas = 0;
                                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                            $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                            ?>
                                            <tr>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                <!-- ambil kontrak awal / addendum -->
                                                <?php
                                                // bua
                                                $this->db->select('*');
                                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                $this->db->limit(1);
                                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                <?php   } else { ?>
                                                    <td class="tg-0lax"></td>
                                                <?php   }  ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                    <td class="tg-0lax"></td>
                                                <?php } else { ?>
                                                    <td class="tg-0lax">0</td>
                                                    <td class="tg-0lax">0</td>
                                                <?php   }
                                                ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php
                                        // _6
                                        // _7
                                        $this->db->select('*');
                                        $this->db->from('tbl_detail_bua_7');
                                        $this->db->where('tbl_detail_bua_7.id_detail_bua_6', $id_detail_bua_6);
                                        $this->db->order_by('CAST(no_urut_7_bua AS DECIMAL(10,6)) ASC');
                                        $query_result_bua_detail_7 = $this->db->get() ?>
                                        <?php
                                        foreach ($query_result_bua_detail_7->result_array() as $value_bua_detail_7) { ?>
                                            <?php $id_detail_bua_7 = $value_bua_detail_7['id_detail_bua_7'];  ?>
                                            <?php $nama_uraian_bua_detail_7 = $value_bua_detail_7['nama_uraian_7_bua']; ?>
                                            <tr>
                                                <td class="tg-0lax"><?= $value_bua_detail_7['no_urut_7_bua'] ?></td>
                                                <td class="tg-0lax"><?= $value_bua_detail_7['nama_uraian_7_bua']; ?></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                            </tr>
                                            <?php
                                            $this->db->select('*');
                                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_bua_detail_7);
                                            if ($id_departemen == 4) {
                                            } else {
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                            }
                                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                            $result_program = $this->db->get() ?>
                                            <?php
                                            foreach ($result_program->result_array() as $value_program) { ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                // 
                                                if (round($total_margin) < 2) {
                                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                                }

                                                if (round($total_margin) < 2) {
                                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                                }
                                                $total_kontrak_awal_vendor_atas = 0;
                                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                                $total_ke_atas_bua = $value_program['total_hps_mata_anggaran'];
                                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                                ?>
                                                <tr>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                    <!-- ambil kontrak awal / addendum -->
                                                    <?php
                                                    // bua
                                                    $this->db->select('*');
                                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                    $this->db->limit(1);
                                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                    <?php   } else { ?>
                                                        <td class="tg-0lax"></td>
                                                    <?php   }  ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                        <td class="tg-0lax"></td>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax">0</td>
                                                        <td class="tg-0lax">0</td>
                                                    <?php   }
                                                    ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <?php
        // sdm
        $this->db->select('*');
        $this->db->from('tbl_sdm');
        $this->db->where('tbl_sdm.id_kontrak', $row_kontrak['id_kontrak']);
        $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
        $query_result_sdm = $this->db->get() ?>
        <?php
        foreach ($query_result_sdm->result_array() as $value_sdm) { ?>
            <?php $id_sdm = $value_sdm['id_sdm'];   ?>
            <?php $nama_uraian_sdm = $value_sdm['nama_uraian']; ?>
            <tr>
                <td class="tg-0lax"><?= $value_sdm['no_urut'] ?></td>
                <td class="tg-0lax"><?= $value_sdm['nama_uraian']; ?></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm);
            if ($id_departemen == 4) {
            } else {
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
            }
            $result_program = $this->db->get() ?>
            <?php
            foreach ($result_program->result_array() as $value_program) { ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                ?>
                <?php
                // 
                if (round($total_margin) < 2) {
                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                }

                if (round($total_margin) < 2) {
                    $fee_owner  =  $total_efisiensi * 100  / 100;
                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                    $fee_owner  =  $total_efisiensi * 50  / 100;
                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                    $fee_owner  =  $total_efisiensi * 30 / 100;
                } else if (round($total_margin) >= 8) {
                    $fee_owner  =  $total_efisiensi * 10  / 100;
                }
                $total_kontrak_awal_vendor_atas = 0;
                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                ?>
                <tr>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                    <!-- ambil kontrak awal / addendum -->
                    <?php
                    // sdm
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->limit(1);
                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                    <?php
                    if ($get_addendum_kontrak) { ?>
                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                        <?php } ?>
                    <?php } else { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                    <?php } ?>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                    <?php if ($value_program['persen_progres_fisik']) { ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                    <?php   } else { ?>
                        <td class="tg-0lax"></td>
                    <?php   }  ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                        <td class="tg-0lax"></td>
                    <?php } else { ?>
                        <td class="tg-0lax">0</td>
                        <td class="tg-0lax">0</td>
                    <?php   }
                    ?>
                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                </tr>
            <?php } ?>
            <?php
            $this->db->select('*');
            $this->db->from('tbl_sdm_detail');
            $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
            $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
            $query_result_sdm_detail = $this->db->get() ?>
            <?php
            foreach ($query_result_sdm_detail->result_array() as $value_sdm_detail) { ?>
                <?php $id_sdm_detail = $value_sdm_detail['id_sdm_detail'];  ?>
                <?php $nama_uraian_sdm_detail = $value_sdm_detail['nama_uraian']; ?>
                <tr>
                    <td class="tg-0lax"><?= $value_sdm_detail['no_urut'] ?></td>
                    <td class="tg-0lax"><?= $value_sdm_detail['nama_uraian']; ?></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                    <td class="tg-0lax"></td>
                </tr>
                <?php
                $this->db->select('*');
                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail);
                if ($id_departemen == 4) {
                } else {
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                }
                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                $result_program = $this->db->get() ?>
                <?php
                foreach ($result_program->result_array() as $value_program) { ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                    ?>
                    <?php
                    // 
                    if (round($total_margin) < 2) {
                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                    }

                    if (round($total_margin) < 2) {
                        $fee_owner  =  $total_efisiensi * 100  / 100;
                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                        $fee_owner  =  $total_efisiensi * 50  / 100;
                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                        $fee_owner  =  $total_efisiensi * 30 / 100;
                    } else if (round($total_margin) >= 8) {
                        $fee_owner  =  $total_efisiensi * 10  / 100;
                    }
                    $total_kontrak_awal_vendor_atas = 0;
                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                    $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                    ?>
                    <tr>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                        <!-- ambil kontrak awal / addendum -->
                        <?php
                        // sdm
                        $this->db->select('*');
                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->limit(1);
                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                        <?php
                        if ($get_addendum_kontrak) { ?>
                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                            <?php } ?>
                        <?php } else { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                        <?php } ?>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                        <?php if ($value_program['persen_progres_fisik']) { ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                        <?php   } else { ?>
                            <td class="tg-0lax"></td>
                        <?php   }  ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                            <td class="tg-0lax"></td>
                        <?php } else { ?>
                            <td class="tg-0lax">0</td>
                            <td class="tg-0lax">0</td>
                        <?php   }
                        ?>
                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                    </tr>
                <?php } ?>
                <!-- _1_ -->
                <?php
                $this->db->select('*');
                $this->db->from('tbl_detail_sdm_1');
                $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
                $this->db->order_by('CAST(no_urut_1_sdm AS DECIMAL(10,6)) ASC');
                $query_result_sdm_detail_1 = $this->db->get() ?>
                <?php
                foreach ($query_result_sdm_detail_1->result_array() as $value_sdm_detail_1) { ?>
                    <?php $id_detail_sdm_1 = $value_sdm_detail_1['id_detail_sdm_1'];  ?>
                    <?php $nama_uraian_sdm_detail_1 = $value_sdm_detail_1['nama_uraian_1_sdm']; ?>
                    <tr>
                        <td class="tg-0lax"><?= $value_sdm_detail_1['no_urut_1_sdm'] ?></td>
                        <td class="tg-0lax"><?= $value_sdm_detail_1['nama_uraian_1_sdm']; ?></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                        <td class="tg-0lax"></td>
                    </tr>
                    <?php
                    $this->db->select('*');
                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_1);
                    if ($id_departemen == 4) {
                    } else {
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                    }
                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                    $result_program = $this->db->get() ?>
                    <?php
                    foreach ($result_program->result_array() as $value_program) { ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                        ?>
                        <?php
                        // 
                        if (round($total_margin) < 2) {
                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                        }

                        if (round($total_margin) < 2) {
                            $fee_owner  =  $total_efisiensi * 100  / 100;
                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                            $fee_owner  =  $total_efisiensi * 50  / 100;
                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                            $fee_owner  =  $total_efisiensi * 30 / 100;
                        } else if (round($total_margin) >= 8) {
                            $fee_owner  =  $total_efisiensi * 10  / 100;
                        }
                        $total_kontrak_awal_vendor_atas = 0;
                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                        $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                        ?>
                        <tr>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                            <!-- ambil kontrak awal / addendum -->
                            <?php
                            // sdm
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->limit(1);
                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                            <?php
                            if ($get_addendum_kontrak) { ?>
                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                <?php } ?>
                            <?php } else { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                            <?php } ?>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                            <?php   } else { ?>
                                <td class="tg-0lax"></td>
                            <?php   }  ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                <td class="tg-0lax"></td>
                            <?php } else { ?>
                                <td class="tg-0lax">0</td>
                                <td class="tg-0lax">0</td>
                            <?php   }
                            ?>
                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    // _1
                    // _2
                    $this->db->select('*');
                    $this->db->from('tbl_detail_sdm_2');
                    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
                    $this->db->order_by('CAST(no_urut_2_sdm AS DECIMAL(10,6)) ASC');
                    $query_result_sdm_detail_2 = $this->db->get() ?>
                    <?php
                    foreach ($query_result_sdm_detail_2->result_array() as $value_sdm_detail_2) { ?>
                        <?php $id_detail_sdm_2 = $value_sdm_detail_2['id_detail_sdm_2'];  ?>
                        <?php $nama_uraian_sdm_detail_2 = $value_sdm_detail_2['nama_uraian_2_sdm']; ?>
                        <tr>
                            <td class="tg-0lax"><?= $value_sdm_detail_2['no_urut_2_sdm'] ?></td>
                            <td class="tg-0lax"><?= $value_sdm_detail_2['nama_uraian_2_sdm']; ?></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                            <td class="tg-0lax"></td>
                        </tr>
                        <?php
                        $this->db->select('*');
                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_2);
                        if ($id_departemen == 4) {
                        } else {
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                        }
                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                        $result_program = $this->db->get() ?>
                        <?php
                        foreach ($result_program->result_array() as $value_program) { ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                            ?>
                            <?php
                            // 
                            if (round($total_margin) < 2) {
                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                            }

                            if (round($total_margin) < 2) {
                                $fee_owner  =  $total_efisiensi * 100  / 100;
                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                $fee_owner  =  $total_efisiensi * 50  / 100;
                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                $fee_owner  =  $total_efisiensi * 30 / 100;
                            } else if (round($total_margin) >= 8) {
                                $fee_owner  =  $total_efisiensi * 10  / 100;
                            }
                            $total_kontrak_awal_vendor_atas = 0;
                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                            $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                            ?>
                            <tr>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                <!-- ambil kontrak awal / addendum -->
                                <?php
                                // sdm
                                $this->db->select('*');
                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->limit(1);
                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                <?php
                                if ($get_addendum_kontrak) { ?>
                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                    <?php } ?>
                                <?php } else { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                <?php } ?>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                <?php   } else { ?>
                                    <td class="tg-0lax"></td>
                                <?php   }  ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                    <td class="tg-0lax"></td>
                                <?php } else { ?>
                                    <td class="tg-0lax">0</td>
                                    <td class="tg-0lax">0</td>
                                <?php   }
                                ?>
                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                            </tr>
                        <?php } ?>
                        <?php
                        // _2
                        // _3
                        $this->db->select('*');
                        $this->db->from('tbl_detail_sdm_3');
                        $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
                        $this->db->order_by('CAST(no_urut_3_sdm AS DECIMAL(10,6)) ASC');
                        $query_result_sdm_detail_3 = $this->db->get() ?>
                        <?php
                        foreach ($query_result_sdm_detail_3->result_array() as $value_sdm_detail_3) { ?>
                            <?php $id_detail_sdm_3 = $value_sdm_detail_3['id_detail_sdm_3'];  ?>
                            <?php $nama_uraian_sdm_detail_3 = $value_sdm_detail_3['nama_uraian_3_sdm']; ?>
                            <tr>
                                <td class="tg-0lax"><?= $value_sdm_detail_3['no_urut_3_sdm'] ?></td>
                                <td class="tg-0lax"><?= $value_sdm_detail_3['nama_uraian_3_sdm']; ?></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                                <td class="tg-0lax"></td>
                            </tr>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_3);
                            if ($id_departemen == 4) {
                            } else {
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                            }
                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                            $result_program = $this->db->get() ?>
                            <?php
                            foreach ($result_program->result_array() as $value_program) { ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                ?>
                                <?php
                                // 
                                if (round($total_margin) < 2) {
                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                }

                                if (round($total_margin) < 2) {
                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                } else if (round($total_margin) >= 8) {
                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                }
                                $total_kontrak_awal_vendor_atas = 0;
                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                ?>
                                <tr>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                    <!-- ambil kontrak awal / addendum -->
                                    <?php
                                    // sdm
                                    $this->db->select('*');
                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->limit(1);
                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                    <?php
                                    if ($get_addendum_kontrak) { ?>
                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                    <?php } ?>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                    <?php   } else { ?>
                                        <td class="tg-0lax"></td>
                                    <?php   }  ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                        <td class="tg-0lax"></td>
                                    <?php } else { ?>
                                        <td class="tg-0lax">0</td>
                                        <td class="tg-0lax">0</td>
                                    <?php   }
                                    ?>
                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                </tr>
                            <?php } ?>

                            <?php
                            // _3
                            // _4
                            $this->db->select('*');
                            $this->db->from('tbl_detail_sdm_4');
                            $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
                            $this->db->order_by('CAST(no_urut_4_sdm AS DECIMAL(10,6)) ASC');
                            $query_result_sdm_detail_4 = $this->db->get() ?>
                            <?php
                            foreach ($query_result_sdm_detail_4->result_array() as $value_sdm_detail_4) { ?>
                                <?php $id_detail_sdm_4 = $value_sdm_detail_4['id_detail_sdm_4'];  ?>
                                <?php $nama_uraian_sdm_detail_4 = $value_sdm_detail_4['nama_uraian_4_sdm']; ?>
                                <tr>
                                    <td class="tg-0lax"><?= $value_sdm_detail_4['no_urut_4_sdm'] ?></td>
                                    <td class="tg-0lax"><?= $value_sdm_detail_4['nama_uraian_4_sdm']; ?></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                    <td class="tg-0lax"></td>
                                </tr>
                                <?php
                                $this->db->select('*');
                                $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_4);
                                if ($id_departemen == 4) {
                                } else {
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                    $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                }
                                $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                $result_program = $this->db->get() ?>
                                <?php
                                foreach ($result_program->result_array() as $value_program) { ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                    $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                    ?>
                                    <?php
                                    // 
                                    if (round($total_margin) < 2) {
                                        $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                    }

                                    if (round($total_margin) < 2) {
                                        $fee_owner  =  $total_efisiensi * 100  / 100;
                                    } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                        $fee_owner  =  $total_efisiensi * 50  / 100;
                                    } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                        $fee_owner  =  $total_efisiensi * 30 / 100;
                                    } else if (round($total_margin) >= 8) {
                                        $fee_owner  =  $total_efisiensi * 10  / 100;
                                    }
                                    $total_kontrak_awal_vendor_atas = 0;
                                    $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                    $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                                    $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                    ?>
                                    <tr>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                        <!-- ambil kontrak awal / addendum -->
                                        <?php
                                        // sdm
                                        $this->db->select('*');
                                        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->limit(1);
                                        $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                        <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                        <?php
                                        if ($get_addendum_kontrak) { ?>
                                            <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                        <?php } ?>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                        <?php if ($value_program['persen_progres_fisik']) { ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                        <?php   } else { ?>
                                            <td class="tg-0lax"></td>
                                        <?php   }  ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                        <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                        <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                            <td class="tg-0lax"></td>
                                        <?php } else { ?>
                                            <td class="tg-0lax">0</td>
                                            <td class="tg-0lax">0</td>
                                        <?php   }
                                        ?>
                                        <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                        <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                    </tr>
                                <?php } ?>

                                <?php
                                // _4
                                // _5
                                $this->db->select('*');
                                $this->db->from('tbl_detail_sdm_5');
                                $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
                                $this->db->order_by('CAST(no_urut_5_sdm AS DECIMAL(10,6)) ASC');
                                $query_result_sdm_detail_5 = $this->db->get() ?>
                                <?php
                                foreach ($query_result_sdm_detail_5->result_array() as $value_sdm_detail_5) { ?>
                                    <?php $id_detail_sdm_5 = $value_sdm_detail_5['id_detail_sdm_5'];  ?>
                                    <?php $nama_uraian_sdm_detail_5 = $value_sdm_detail_5['nama_uraian_5_sdm']; ?>
                                    <tr>
                                        <td class="tg-0lax"><?= $value_sdm_detail_5['no_urut_5_sdm'] ?></td>
                                        <td class="tg-0lax"><?= $value_sdm_detail_5['nama_uraian_5_sdm']; ?></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                        <td class="tg-0lax"></td>
                                    </tr>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                    $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                    $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_5);
                                    if ($id_departemen == 4) {
                                    } else {
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                    }
                                    $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                    $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                    $result_program = $this->db->get() ?>
                                    <?php
                                    foreach ($result_program->result_array() as $value_program) { ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                        $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                        ?>
                                        <?php
                                        // 
                                        if (round($total_margin) < 2) {
                                            $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                        }

                                        if (round($total_margin) < 2) {
                                            $fee_owner  =  $total_efisiensi * 100  / 100;
                                        } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                            $fee_owner  =  $total_efisiensi * 50  / 100;
                                        } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                            $fee_owner  =  $total_efisiensi * 30 / 100;
                                        } else if (round($total_margin) >= 8) {
                                            $fee_owner  =  $total_efisiensi * 10  / 100;
                                        }
                                        $total_kontrak_awal_vendor_atas = 0;
                                        $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                        $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                                        $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                        ?>
                                        <tr>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                            <!-- ambil kontrak awal / addendum -->
                                            <?php
                                            // sdm
                                            $this->db->select('*');
                                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                            $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->limit(1);
                                            $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                            <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                            <?php
                                            if ($get_addendum_kontrak) { ?>
                                                <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                            <?php } ?>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                            <?php if ($value_program['persen_progres_fisik']) { ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                            <?php   } else { ?>
                                                <td class="tg-0lax"></td>
                                            <?php   }  ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                            <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                            <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                <td class="tg-0lax"></td>
                                            <?php } else { ?>
                                                <td class="tg-0lax">0</td>
                                                <td class="tg-0lax">0</td>
                                            <?php   }
                                            ?>
                                            <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                            <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    // _5
                                    // _6
                                    $this->db->select('*');
                                    $this->db->from('tbl_detail_sdm_6');
                                    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
                                    $this->db->order_by('CAST(no_urut_6_sdm AS DECIMAL(10,6)) ASC');
                                    $query_result_sdm_detail_6 = $this->db->get() ?>
                                    <?php
                                    foreach ($query_result_sdm_detail_6->result_array() as $value_sdm_detail_6) { ?>
                                        <?php $id_detail_sdm_6 = $value_sdm_detail_6['id_detail_sdm_6'];  ?>
                                        <?php $nama_uraian_sdm_detail_6 = $value_sdm_detail_6['nama_uraian_6_sdm']; ?>
                                        <tr>
                                            <td class="tg-0lax"><?= $value_sdm_detail_6['no_urut_6_sdm'] ?></td>
                                            <td class="tg-0lax"><?= $value_sdm_detail_6['nama_uraian_6_sdm']; ?></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                            <td class="tg-0lax"></td>
                                        </tr>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                        $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                        $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_6);
                                        if ($id_departemen == 4) {
                                        } else {
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                            $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                        }
                                        $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                        $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                        $result_program = $this->db->get() ?>
                                        <?php
                                        foreach ($result_program->result_array() as $value_program) { ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                            $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                            ?>
                                            <?php
                                            // 
                                            if (round($total_margin) < 2) {
                                                $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                            }

                                            if (round($total_margin) < 2) {
                                                $fee_owner  =  $total_efisiensi * 100  / 100;
                                            } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                $fee_owner  =  $total_efisiensi * 50  / 100;
                                            } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                $fee_owner  =  $total_efisiensi * 30 / 100;
                                            } else if (round($total_margin) >= 8) {
                                                $fee_owner  =  $total_efisiensi * 10  / 100;
                                            }
                                            $total_kontrak_awal_vendor_atas = 0;
                                            $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                            $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                                            $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                            ?>
                                            <tr>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                <!-- ambil kontrak awal / addendum -->
                                                <?php
                                                // sdm
                                                $this->db->select('*');
                                                $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                $this->db->limit(1);
                                                $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                <?php
                                                if ($get_addendum_kontrak) { ?>
                                                    <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                <?php } ?>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                <?php if ($value_program['persen_progres_fisik']) { ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                <?php   } else { ?>
                                                    <td class="tg-0lax"></td>
                                                <?php   }  ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                    <td class="tg-0lax"></td>
                                                <?php } else { ?>
                                                    <td class="tg-0lax">0</td>
                                                    <td class="tg-0lax">0</td>
                                                <?php   }
                                                ?>
                                                <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php
                                        // _6
                                        // _7
                                        $this->db->select('*');
                                        $this->db->from('tbl_detail_sdm_7');
                                        $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
                                        $this->db->order_by('CAST(no_urut_7_sdm AS DECIMAL(10,6)) ASC');
                                        $query_result_sdm_detail_7 = $this->db->get() ?>
                                        <?php
                                        foreach ($query_result_sdm_detail_7->result_array() as $value_sdm_detail_7) { ?>
                                            <?php $id_detail_sdm_7 = $value_sdm_detail_7['id_detail_sdm_7'];  ?>
                                            <?php $nama_uraian_sdm_detail_7 = $value_sdm_detail_7['nama_uraian_7_sdm']; ?>
                                            <tr>
                                                <td class="tg-0lax"><?= $value_sdm_detail_7['no_urut_7_sdm'] ?></td>
                                                <td class="tg-0lax"><?= $value_sdm_detail_7['nama_uraian_7_sdm']; ?></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                                <td class="tg-0lax"></td>
                                            </tr>
                                            <?php
                                            $this->db->select('*');
                                            $this->db->from('tbl_laporan_sub_detail_program_penyedia_jasa');
                                            $this->db->join('tbl_laporan_detail_program_penyedia_jasa', 'tbl_laporan_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                            $this->db->where('tbl_laporan_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_7);
                                            if ($id_departemen == 4) {
                                            } else {
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                            }
                                            $this->db->order_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                            $this->db->group_by('tbl_laporan_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                            $result_program = $this->db->get() ?>
                                            <?php
                                            foreach ($result_program->result_array() as $value_program) { ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_relasi_pendapatan  =  ($value_program['nilai_program_mata_anggran'] * $value_program['persen_progres_fisik']) / 100;
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                $total_efisiensi =  $value_program['nilai_program_mata_anggran'] - $value_program['prognosa_beban'];
                                                $total_margin = ($total_efisiensi / $value_program['nilai_program_mata_anggran']) * 100;
                                                ?>
                                                <?php
                                                // 
                                                if (round($total_margin) < 2) {
                                                    $fee_jmtm  =  $total_efisiensi * 0  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_jmtm  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 70  / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_jmtm  =  $total_efisiensi * 90  / 100;
                                                }

                                                if (round($total_margin) < 2) {
                                                    $fee_owner  =  $total_efisiensi * 100  / 100;
                                                } else if (round($total_margin) >= 2 && round($total_margin) <= 4) {
                                                    $fee_owner  =  $total_efisiensi * 50  / 100;
                                                } else if (round($total_margin) >= 4 && round($total_margin) <= 8) {
                                                    $fee_owner  =  $total_efisiensi * 30 / 100;
                                                } else if (round($total_margin) >= 8) {
                                                    $fee_owner  =  $total_efisiensi * 10  / 100;
                                                }
                                                $total_kontrak_awal_vendor_atas = 0;
                                                $total_kontrak_awal_vendor_atas += $value_program['nilai_sub_kontrak_penyedia'];
                                                $total_ke_atas_sdm = $value_program['total_hps_mata_anggaran'];
                                                $prognoa_beban_tahunan = $value_program['nilai_sub_kontrak_penyedia'] +  $fee_owner;
                                                ?>
                                                <tr>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"></td>
                                                    <td class="tg-0lax"><?= $value_program['nama_pekerjaan_program_mata_anggaran']; ?></td>
                                                    <!-- ambil kontrak awal / addendum -->
                                                    <?php
                                                    // sdm
                                                    $this->db->select('*');
                                                    $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                                                    $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value_program['id_detail_program_penyedia_jasa']);
                                                    $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
                                                    $this->db->limit(1);
                                                    $get_addendum_kontrak = $this->db->get()->result_array() ?>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"><?= $value_program['nama_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['no_kontrak_penyedia']; ?></td>
                                                    <td class="tg-0lax"><?= $value_program['tanggal_kontrak_program']; ?></td>
                                                    <?php
                                                    if ($get_addendum_kontrak) { ?>
                                                        <?php foreach ($get_addendum_kontrak as $value_addendum_kontrak) { ?>
                                                            <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak_addendum_' . $value_addendum_kontrak['no_addendum']], 2, ',', '.') ?></td>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($value_program['total_kontrak'], 2, ',', '.') ?></td>
                                                    <?php } ?>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_hps'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['nilai_sub_kontrak_penyedia'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['prognosa_beban'], 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= "Rp " . number_format($value_program['persen_progres_fisik'], 2, ',', '.') ?></td>
                                                    <?php if ($value_program['persen_progres_fisik']) { ?>
                                                        <td class="tg-0lax"> <?= "Rp " . number_format($total_relasi_pendapatan, 2, ',', '.') ?></td>
                                                    <?php   } else { ?>
                                                        <td class="tg-0lax"></td>
                                                    <?php   }  ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_relasi_beban, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"><?= number_format($total_margin, 2);  ?>%</td>
                                                    <?php if ($value_program['formula_fee_jmtm'] == 1) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_jmtm, 2, ',', '.') ?> </td>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($fee_owner, 2, ',', '.') ?></td>
                                                    <?php } else if ($value_program['formula_fee_jmtm'] == 2) { ?>
                                                        <td class="tg-0lax"><?= "Rp " . number_format($total_efisiensi * 100  / 100, 2, ',', '.'); ?> </td>
                                                        <td class="tg-0lax"></td>
                                                    <?php } else { ?>
                                                        <td class="tg-0lax">0</td>
                                                        <td class="tg-0lax">0</td>
                                                    <?php   }
                                                    ?>
                                                    <td class="tg-0lax"><?= "Rp " . number_format($prognoa_beban_tahunan, 2, ',', '.') ?></td>
                                                    <td class="tg-0lax"> <?= $value_program['keterangan_laporan'] ?></td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>