<?php
if ($type_add != 'kontrak_awal') {
    // 
    // Taggihan_kontrak_admin_model
    // ini untuk update ke empat
    $get_row_hps_penyedia_kontrak_mc_4 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_5($id_hps_penyedia_kontrak_mc_5);
    $id_hps_penyedia_kontrak_mc_4 = $get_row_hps_penyedia_kontrak_mc_4['id_hps_penyedia_kontrak_mc_4'];
    $total_harga_hps_penyedia_kontrak_mc_4 = 0;
    $bobot_harga_hps_penyedia_kontrak_mc_4 = 0;
    $get_total_harga_hps_penyedia_kontrak_mc_4 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_4_result_total_harga($id_hps_penyedia_kontrak_mc_4);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_4 as $key => $value_hps_penyedia_kontrak_mc_4) {
        if ($value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $type_add . ''] == 0 || $value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $type_add . ''] == null) {
            $total_harga_hps_penyedia_kontrak_mc_4 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_4 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $type_add . ''];
            $bobot_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_4 = [
        'id_hps_penyedia_kontrak_mc_4' => $id_hps_penyedia_kontrak_mc_4
    ];
    $data_hps_penyedia_kontrak_mc_4 = [
        'total_harga_addendum_' . $type_add . '' => $total_harga_hps_penyedia_kontrak_mc_4,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_4,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_4($data_hps_penyedia_kontrak_mc_4, $where_hps_penyedia_kontrak_mc_4);



    // ini untuk update ke ketiga
    $get_row_hps_penyedia_kontrak_mc_3 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_4($id_hps_penyedia_kontrak_mc_4);
    $id_hps_penyedia_kontrak_mc_3 = $get_row_hps_penyedia_kontrak_mc_3['id_hps_penyedia_kontrak_mc_3'];
    $total_harga_hps_penyedia_kontrak_mc_4 = 0;
    $bobot_harga_hps_penyedia_kontrak_mc_4 = 0;
    $get_total_harga_hps_penyedia_kontrak_mc_4 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_4_result_total_harga($id_hps_penyedia_kontrak_mc_3);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_4 as $key => $value_hps_penyedia_kontrak_mc_4) {
        if ($value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $type_add . ''] == 0 || $value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $type_add . ''] == null) {
            $total_harga_hps_penyedia_kontrak_mc_4 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_4 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['total_harga_addendum_' . $type_add . ''];
            $bobot_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_3 = [
        'id_hps_penyedia_kontrak_mc_3' => $id_hps_penyedia_kontrak_mc_3
    ];
    $data_hps_penyedia_kontrak_mc_3 = [
        'total_harga_addendum_' . $type_add . '' => $total_harga_hps_penyedia_kontrak_mc_4,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_4,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_3($data_hps_penyedia_kontrak_mc_3, $where_hps_penyedia_kontrak_mc_3);




    // ini untuk update ke dua
    $get_row_hps_penyedia_kontrak_mc_2 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_3($id_hps_penyedia_kontrak_mc_3);
    $id_hps_penyedia_kontrak_mc_2 = $get_row_hps_penyedia_kontrak_mc_2['id_hps_penyedia_kontrak_mc_2'];
    $total_harga_hps_penyedia_kontrak_mc_3 = 0;
    $bobot_harga_hps_penyedia_kontrak_mc_3 = 0;
    $get_total_harga_hps_penyedia_kontrak_mc_3 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_3_result_total_harga($id_hps_penyedia_kontrak_mc_2);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_3 as $key => $value_hps_penyedia_kontrak_mc_3) {
        if ($value_hps_penyedia_kontrak_mc_3['total_harga_addendum_' . $type_add . ''] == 0 || $value_hps_penyedia_kontrak_mc_3['total_harga_addendum_' . $type_add . ''] == null) {
            $total_harga_hps_penyedia_kontrak_mc_3 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_3 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_3 += $value_hps_penyedia_kontrak_mc_3['total_harga_addendum_' . $type_add . ''];
            $bobot_harga_hps_penyedia_kontrak_mc_3 += $value_hps_penyedia_kontrak_mc_3['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_2 = [
        'id_hps_penyedia_kontrak_mc_2' => $id_hps_penyedia_kontrak_mc_2
    ];
    $data_hps_penyedia_kontrak_mc_2 = [
        'total_harga_addendum_' . $type_add . '' => $total_harga_hps_penyedia_kontrak_mc_3,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_3,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_2($data_hps_penyedia_kontrak_mc_2, $where_hps_penyedia_kontrak_mc_2);



    // ini untuk update ke satu
    $get_row_hps_penyedia_kontrak_mc_1 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_2($id_hps_penyedia_kontrak_mc_2);
    $id_hps_penyedia_kontrak_mc_1 = $get_row_hps_penyedia_kontrak_mc_1['id_hps_penyedia_kontrak_mc_1'];
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

    // ini untuk update ke empat
    $get_row_hps_penyedia_kontrak_mc_4 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_5($id_hps_penyedia_kontrak_mc_5);
    $id_hps_penyedia_kontrak_mc_4 = $get_row_hps_penyedia_kontrak_mc_4['id_hps_penyedia_kontrak_mc_4'];
    $total_harga_hps_penyedia_kontrak_mc_4 = 0;
    $bobot_harga_hps_penyedia_kontrak_mc_4 = 0;



    $get_total_harga_hps_penyedia_kontrak_mc_4 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_4_result_total_harga($id_hps_penyedia_kontrak_mc_4);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_4 as $key => $value_hps_penyedia_kontrak_mc_4) {
        if ($value_hps_penyedia_kontrak_mc_4['total_harga'] == 0 || $value_hps_penyedia_kontrak_mc_4['total_harga'] == null) {
            $total_harga_hps_penyedia_kontrak_mc_4 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_4 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['total_harga'];
            $bobot_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_4 = [
        'id_hps_penyedia_kontrak_mc_4' => $id_hps_penyedia_kontrak_mc_4
    ];
    $data_hps_penyedia_kontrak_mc_4 = [
        'total_harga' => $total_harga_hps_penyedia_kontrak_mc_4,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_4,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_4($data_hps_penyedia_kontrak_mc_4, $where_hps_penyedia_kontrak_mc_4);



    // ini untuk update ke ketiga
    $get_row_hps_penyedia_kontrak_mc_3 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_4($id_hps_penyedia_kontrak_mc_4);
    $id_hps_penyedia_kontrak_mc_3 = $get_row_hps_penyedia_kontrak_mc_3['id_hps_penyedia_kontrak_mc_3'];
    $total_harga_hps_penyedia_kontrak_mc_4 = 0;
    $bobot_harga_hps_penyedia_kontrak_mc_4 = 0;
    $get_total_harga_hps_penyedia_kontrak_mc_4 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_4_result_total_harga($id_hps_penyedia_kontrak_mc_3);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_4 as $key => $value_hps_penyedia_kontrak_mc_4) {
        if ($value_hps_penyedia_kontrak_mc_4['total_harga'] == 0 || $value_hps_penyedia_kontrak_mc_4['total_harga'] == null) {
            $total_harga_hps_penyedia_kontrak_mc_4 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_4 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['total_harga'];
            $bobot_harga_hps_penyedia_kontrak_mc_4 += $value_hps_penyedia_kontrak_mc_4['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_3 = [
        'id_hps_penyedia_kontrak_mc_3' => $id_hps_penyedia_kontrak_mc_3
    ];
    $data_hps_penyedia_kontrak_mc_3 = [
        'total_harga' => $total_harga_hps_penyedia_kontrak_mc_4,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_4,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_3($data_hps_penyedia_kontrak_mc_3, $where_hps_penyedia_kontrak_mc_3);

    // ini untuk update ke dua
    $get_row_hps_penyedia_kontrak_mc_2 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_3($id_hps_penyedia_kontrak_mc_3);
    $id_hps_penyedia_kontrak_mc_2 = $get_row_hps_penyedia_kontrak_mc_2['id_hps_penyedia_kontrak_mc_2'];
    $total_harga_hps_penyedia_kontrak_mc_3 = 0;
    $bobot_harga_hps_penyedia_kontrak_mc_3 = 0;
    $get_total_harga_hps_penyedia_kontrak_mc_3 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_3_result_total_harga($id_hps_penyedia_kontrak_mc_2);
    foreach ($get_total_harga_hps_penyedia_kontrak_mc_3 as $key => $value_hps_penyedia_kontrak_mc_3) {
        if ($value_hps_penyedia_kontrak_mc_3['total_harga'] == 0 || $value_hps_penyedia_kontrak_mc_3['total_harga'] == null) {
            $total_harga_hps_penyedia_kontrak_mc_3 += 0;
            $bobot_harga_hps_penyedia_kontrak_mc_3 += 0;
        } else {
            $total_harga_hps_penyedia_kontrak_mc_3 += $value_hps_penyedia_kontrak_mc_3['total_harga'];
            $bobot_harga_hps_penyedia_kontrak_mc_3 += $value_hps_penyedia_kontrak_mc_3['bobot_hps_mc'];
        }
    };
    $where_hps_penyedia_kontrak_mc_2 = [
        'id_hps_penyedia_kontrak_mc_2' => $id_hps_penyedia_kontrak_mc_2
    ];
    $data_hps_penyedia_kontrak_mc_2 = [
        'total_harga' => $total_harga_hps_penyedia_kontrak_mc_3,
        'bobot_hps_mc' => $bobot_harga_hps_penyedia_kontrak_mc_3,
    ];
    $this->Taggihan_kontrak_admin_model->update_tbl_hps_penyedia_kontrak_mc_2($data_hps_penyedia_kontrak_mc_2, $where_hps_penyedia_kontrak_mc_2);



    // ini untuk update ke satu
    $get_row_hps_penyedia_kontrak_mc_1 = $this->Taggihan_kontrak_admin_model->get_hps_penyedia_kontrak_mc_2($id_hps_penyedia_kontrak_mc_2);
    $id_hps_penyedia_kontrak_mc_1 = $get_row_hps_penyedia_kontrak_mc_1['id_hps_penyedia_kontrak_mc_1'];
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
