<?php
$total_harga_hps_penyedia_2 = 0;
$get_total_harga_hps_penyedia_2 = $this->Data_kontrak_model->get_hps_penyedia_2_result_total_harga($id_hps_penyedia_1);
foreach ($get_total_harga_hps_penyedia_2 as $key => $value_hps_penyedia_2) {
    if ($value_hps_penyedia_2['total_harga'] == 0 || $value_hps_penyedia_2['total_harga'] == null) {
        $total_harga_hps_penyedia_2 += 0;
    } else {
        $total_harga_hps_penyedia_2 += $value_hps_penyedia_2['total_harga'];
    }
};
$where_hps_penyedia_1 = [
    'id_hps_penyedia_1' => $id_hps_penyedia_1
];
$data_hps_penyedia_1 = [
    'total_harga' => $total_harga_hps_penyedia_2,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_1($data_hps_penyedia_1, $where_hps_penyedia_1);
// logika update ke hps_penyedia_kontrak_1
$total_harga_hps_penyedia_kontrak_2 = 0;
$get_total_harga_hps_penyedia_kontrak_2 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2_result_total_harga($id_hps_penyedia_1);
foreach ($get_total_harga_hps_penyedia_kontrak_2 as $key => $value_hps_penyedia_kontrak_2) {
    if ($value_hps_penyedia_kontrak_2['total_harga'] == 0 || $value_hps_penyedia_kontrak_2['total_harga'] == null) {
        $total_harga_hps_penyedia_kontrak_2 += 0;
    } else {
        $total_harga_hps_penyedia_kontrak_2 += $value_hps_penyedia_kontrak_2['total_harga'];
    }
};
$where_hps_penyedia_kontrak_1 = [
    'id_refrence_hps' => $id_hps_penyedia_1
];
$data_hps_penyedia_kontrak_1 = [
    'total_harga' => $total_harga_hps_penyedia_kontrak_2,
];
$this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data_hps_penyedia_kontrak_1, $where_hps_penyedia_kontrak_1);
