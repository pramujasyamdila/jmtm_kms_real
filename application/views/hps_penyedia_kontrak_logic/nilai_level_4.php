<?php

if ($type_add) {
    // ini untuk update ke dua
    $get_row_hps_penyedia_kontrak_2 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_3($id_hps_penyedia_kontrak_3);
    $id_hps_penyedia_kontrak_2 = $get_row_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'];
    $total_harga_hps_penyedia_kontrak_3 = 0;
    $get_total_harga_hps_penyedia_kontrak_3 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_3_result_total_harga($id_hps_penyedia_kontrak_2);
    foreach ($get_total_harga_hps_penyedia_kontrak_3 as $key => $value_hps_penyedia_kontrak_3) {
        if ($value_hps_penyedia_kontrak_3['total_harga_addendum_' . $type_add . ''] == 0 || $value_hps_penyedia_kontrak_3['total_harga_addendum_' . $type_add . ''] == null) {
            $total_harga_hps_penyedia_kontrak_3 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_3 += $value_hps_penyedia_kontrak_3['total_harga_addendum_' . $type_add . ''];
        }
    };
    $where_hps_penyedia_kontrak_2 = [
        'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_kontrak_2
    ];
    $data_hps_penyedia_kontrak_2 = [
        'total_harga_addendum_' . $type_add . '' => $total_harga_hps_penyedia_kontrak_3,
    ];
    $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_2($data_hps_penyedia_kontrak_2, $where_hps_penyedia_kontrak_2);


    // ini untuk update ke satu
    $get_row_hps_penyedia_kontrak_1 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2($id_hps_penyedia_kontrak_2);
    $id_hps_penyedia_kontrak_1 = $get_row_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
    $total_harga_hps_penyedia_kontrak_2 = 0;
    $get_total_harga_hps_penyedia_kontrak_2 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2_result_total_harga($id_hps_penyedia_kontrak_1);
    foreach ($get_total_harga_hps_penyedia_kontrak_2 as $key => $value_hps_penyedia_kontrak_2) {
        if ($value_hps_penyedia_kontrak_2['total_harga_addendum_' . $type_add . ''] == 0 || $value_hps_penyedia_kontrak_2['total_harga_addendum_' . $type_add . ''] == null) {
            $total_harga_hps_penyedia_kontrak_2 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_2 += $value_hps_penyedia_kontrak_2['total_harga_addendum_' . $type_add . ''];
        }
    };
    $where_hps_penyedia_kontrak_1 = [
        'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_kontrak_1
    ];
    $data_hps_penyedia_kontrak_1 = [
        'total_harga_addendum_' . $type_add . '' => $total_harga_hps_penyedia_kontrak_2,
    ];
    $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data_hps_penyedia_kontrak_1, $where_hps_penyedia_kontrak_1);
} else {
    // ini untuk update ke dua
    $get_row_hps_penyedia_kontrak_2 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_3($id_hps_penyedia_kontrak_3);
    $id_hps_penyedia_kontrak_2 = $get_row_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'];
    $total_harga_hps_penyedia_kontrak_3 = 0;
    $get_total_harga_hps_penyedia_kontrak_3 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_3_result_total_harga($id_hps_penyedia_kontrak_2);
    foreach ($get_total_harga_hps_penyedia_kontrak_3 as $key => $value_hps_penyedia_kontrak_3) {
        if ($value_hps_penyedia_kontrak_3['total_harga'] == 0 || $value_hps_penyedia_kontrak_3['total_harga'] == null) {
            $total_harga_hps_penyedia_kontrak_3 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_3 += $value_hps_penyedia_kontrak_3['total_harga'];
        }
    };
    $where_hps_penyedia_kontrak_2 = [
        'id_hps_penyedia_kontrak_2' => $id_hps_penyedia_kontrak_2
    ];
    $data_hps_penyedia_kontrak_2 = [
        'total_harga' => $total_harga_hps_penyedia_kontrak_3,
    ];
    $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_2($data_hps_penyedia_kontrak_2, $where_hps_penyedia_kontrak_2);


    // ini untuk update ke satu
    $get_row_hps_penyedia_kontrak_1 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2($id_hps_penyedia_kontrak_2);
    $id_hps_penyedia_kontrak_1 = $get_row_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'];
    $total_harga_hps_penyedia_kontrak_2 = 0;
    $get_total_harga_hps_penyedia_kontrak_2 = $this->Data_kontrak_model->get_hps_penyedia_kontrak_2_result_total_harga($id_hps_penyedia_kontrak_1);
    foreach ($get_total_harga_hps_penyedia_kontrak_2 as $key => $value_hps_penyedia_kontrak_2) {
        if ($value_hps_penyedia_kontrak_2['total_harga'] == 0 || $value_hps_penyedia_kontrak_2['total_harga'] == null) {
            $total_harga_hps_penyedia_kontrak_2 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_2 += $value_hps_penyedia_kontrak_2['total_harga'];
        }
    };
    $where_hps_penyedia_kontrak_1 = [
        'id_hps_penyedia_kontrak_1' => $id_hps_penyedia_kontrak_1
    ];
    $data_hps_penyedia_kontrak_1 = [
        'total_harga' => $total_harga_hps_penyedia_kontrak_2,
    ];
    $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1($data_hps_penyedia_kontrak_1, $where_hps_penyedia_kontrak_1);
}
