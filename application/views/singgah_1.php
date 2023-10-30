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
                                                                                            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                            $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                            $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm);
                                                                                            if ($id_departemen == 4) {
                                                                                            } else {
                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                            }
                                                                                            $result_program = $this->db->get() ?>
                                                                                            <?php
                                                                                            foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                <?php
                                                                                                $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                ?>
                                                                                                <?php
                                                                                                $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                ?>
                                                                                                <?php
                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail);
                                                                                                if ($id_departemen == 4) {
                                                                                                } else {
                                                                                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                }
                                                                                                $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                $result_program = $this->db->get() ?>
                                                                                                <?php
                                                                                                foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                    <?php
                                                                                                    $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                    $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                    $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                    ?>
                                                                                                    <?php
                                                                                                    $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                    $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                    $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                    ?>
                                                                                                    <?php
                                                                                                    $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                    $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_1);
                                                                                                    if ($id_departemen == 4) {
                                                                                                    } else {
                                                                                                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                        $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                    }
                                                                                                    $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                    $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                    $result_program = $this->db->get() ?>
                                                                                                    <?php
                                                                                                    foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                        <?php
                                                                                                        $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                        $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                        $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                        ?>
                                                                                                        <?php
                                                                                                        $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                        $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                        $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                        ?>
                                                                                                        <?php
                                                                                                        $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                        $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                        $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                        $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_2);
                                                                                                        if ($id_departemen == 4) {
                                                                                                        } else {
                                                                                                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                            $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                        }
                                                                                                        $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                        $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                        $result_program = $this->db->get() ?>
                                                                                                        <?php
                                                                                                        foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                            <?php
                                                                                                            $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                            $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                            $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                            ?>
                                                                                                            <?php
                                                                                                            $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                            $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                            $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                            ?>
                                                                                                            <?php
                                                                                                            $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                            $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                            $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                            $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_3);
                                                                                                            if ($id_departemen == 4) {
                                                                                                            } else {
                                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                            }
                                                                                                            $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                            $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                            $result_program = $this->db->get() ?>
                                                                                                            <?php
                                                                                                            foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                                <?php
                                                                                                                $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                ?>
                                                                                                                <?php
                                                                                                                $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                ?>
                                                                                                                <?php
                                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                                $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                                $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                                $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_4);
                                                                                                                if ($id_departemen == 4) {
                                                                                                                } else {
                                                                                                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                                }
                                                                                                                $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                                $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                                $result_program = $this->db->get() ?>
                                                                                                                <?php
                                                                                                                foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                                    <?php
                                                                                                                    $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                    $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                    $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                    $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                    ?>
                                                                                                                    <?php
                                                                                                                    $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                    $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                    $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                    ?>
                                                                                                                    <?php
                                                                                                                    $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                    $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                                    $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                                    $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_5);
                                                                                                                    if ($id_departemen == 4) {
                                                                                                                    } else {
                                                                                                                        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                                        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                                        $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                                    }
                                                                                                                    $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                                    $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                                    $result_program = $this->db->get() ?>
                                                                                                                    <?php
                                                                                                                    foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                                        <?php
                                                                                                                        $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                        $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                        $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                        $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                        ?>
                                                                                                                        <?php
                                                                                                                        $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                        $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                        $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                        ?>
                                                                                                                        <?php
                                                                                                                        $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                        $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                                        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                                        $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                                        $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_6);
                                                                                                                        if ($id_departemen == 4) {
                                                                                                                        } else {
                                                                                                                            $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                                            $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                                            $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                                        }
                                                                                                                        $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                                        $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                                        $result_program = $this->db->get() ?>
                                                                                                                        <?php
                                                                                                                        foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                                            <?php
                                                                                                                            $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                            $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                            $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                            $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                            ?>
                                                                                                                            <?php
                                                                                                                            $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                            $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                            $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                            ?>
                                                                                                                            <?php
                                                                                                                            $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                            $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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
                                                                                                                            $this->db->from('tbl_sub_detail_program_penyedia_jasa');
                                                                                                                            $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'left');
                                                                                                                            $this->db->where('tbl_sub_detail_program_penyedia_jasa.nama_program_mata_anggaran', $nama_uraian_sdm_detail_7);
                                                                                                                            if ($id_departemen == 4) {
                                                                                                                            } else {
                                                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $row_kontrak['id_departemen']);
                                                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $row_kontrak['id_area']);
                                                                                                                                $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $row_kontrak['id_sub_area']);
                                                                                                                            }
                                                                                                                            $this->db->order_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'ASC');
                                                                                                                            $this->db->group_by('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                                                                            $result_program = $this->db->get() ?>
                                                                                                                            <?php
                                                                                                                            foreach ($result_program->result_array() as $value_program) { ?>
                                                                                                                                <?php
                                                                                                                                $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                                $total_relasi_beban = ($value_program['prognosa_beban'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                                ?>
                                                                                                                                <?php
                                                                                                                                $total_relasi_pendapatan  =  ($value_program['nilai_kontrak_km'] * $value_program['persen_progres_fisik']) / 100;
                                                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
                                                                                                                                ?>
                                                                                                                                <?php
                                                                                                                                $total_efisiensi =  $value_program['nilai_kontrak_km'] - $value_program['prognosa_beban'];
                                                                                                                                $total_margin = ($total_efisiensi / $value_program['nilai_kontrak_km']) * 100;
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