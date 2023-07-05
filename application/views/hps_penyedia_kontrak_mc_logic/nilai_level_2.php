<?php
// _addendum_
// hps_penyedia_kontrak
if ($type_add != 'kontrak_awal') {
    $total_harga_hps_penyedia_kontrak_mc_2 = 0;
    $bobot_harga_hps_penyedia_kontrak_mc_2 = 0;
    $get_total_harga_hps_penyedia_kontrak_mc_2 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_2_result_total_harga($id_hps_penyedia_kontrak_mc_1);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_2 as $key => $value_hps_penyedia_kontrak_mc_2) {
        if ($value_hps_penyedia_kontrak_mc_2['total_harga_addendum_' . $type_add . ''] == 0 || $value_hps_penyedia_kontrak_mc_2['total_harga_addendum_' . $type_add . ''] == null) {
            $total_harga_hps_penyedia_kontrak_mc_2 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_2 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_2 += $value_hps_penyedia_kontrak_mc_2['total_harga_addendum_' . $type_add . ''];
            $bobot_harga_hps_penyedia_kontrak_mc_2 += $value_hps_penyedia_kontrak_mc_2['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_1 = [
        'id_hps_penyedia_kontrak_mc_1' => $id_hps_penyedia_kontrak_mc_1
    ];
    $data_hps_penyedia_kontrak_mc_1 = [
        'total_harga_addendum_' . $type_add . '' => $total_harga_hps_penyedia_kontrak_mc_2,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_2,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_1($data_hps_penyedia_kontrak_mc_1, $where_hps_penyedia_kontrak_mc_1);
} else {
    $total_harga_hps_penyedia_kontrak_mc_2 = 0; 
    $bobot_harga_hps_penyedia_kontrak_mc_2 = 0;
    $get_total_harga_hps_penyedia_kontrak_mc_2 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_2_result_total_harga($id_hps_penyedia_kontrak_mc_1);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_2 as $key => $value_hps_penyedia_kontrak_mc_2) {
        if ($value_hps_penyedia_kontrak_mc_2['total_harga'] == 0 || $value_hps_penyedia_kontrak_mc_2['total_harga'] == null) {
            $total_harga_hps_penyedia_kontrak_mc_2 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_2 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_2 += $value_hps_penyedia_kontrak_mc_2['total_harga'];
            $bobot_harga_hps_penyedia_kontrak_mc_2 += $value_hps_penyedia_kontrak_mc_2['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_1 = [
        'id_hps_penyedia_kontrak_mc_1' => $id_hps_penyedia_kontrak_mc_1
    ];
    $data_hps_penyedia_kontrak_mc_1 = [
        'total_harga' => $total_harga_hps_penyedia_kontrak_mc_2,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_2,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_1($data_hps_penyedia_kontrak_mc_1, $where_hps_penyedia_kontrak_mc_1);
}
