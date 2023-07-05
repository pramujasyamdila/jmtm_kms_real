<?php
// sdm
if ($type_add == '1') {
    // add_I
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_I'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_I' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_I'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_I' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_I'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_I' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_I'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_I' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_I'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_I' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_I'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_I' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_I'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_I' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_I'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_I' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_I'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_I' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_I'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_I' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_I'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_I' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '2') {
    // add_II
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_II'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_II' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_II'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_II' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_II'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_II' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_II'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_II' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_II'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_II' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_II'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_II' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_II'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_II' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_II'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_II' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_II'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_II' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_II'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_II' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_II'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_II' => $total_capex + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '3') {
    // add_III
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_III'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_III' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_III'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_III' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_III'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_III' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_III'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_III' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_III'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_III' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_III'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_III' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_III'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_III' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_III'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_III' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_III'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_III' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_III'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_III' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_III'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_III' => $total_capex + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '4') {
    // add_IV
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_IV'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_IV' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_IV'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_IV' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_IV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_IV' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_IV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_IV' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_IV'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_IV' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_IV'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_IV' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_IV'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_IV' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_IV'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_IV' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_IV'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_IV' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_IV'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_IV' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IV'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_IV' => $total_capex + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '5') {
    // add_V
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_V'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_V' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_V'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_V' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_V'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_V' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_V'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_V' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_V'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_V' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_V'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_V' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_V'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_V' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_V'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_V' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_V'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_V' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_V'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_V' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_V'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_V' => $total_capex + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '6') {
    // add_VI
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_VI'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_VI' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_VI'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_VI' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_VI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_VI' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_VI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_VI' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_VI'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_VI' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_VI'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_VI' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_VI'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_VI' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_VI'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_VI' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_VI'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_VI' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_VI'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_VI' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VI'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_VI' => $total_capex + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '7') {
    // add_VII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_VII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_VII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_VII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_VII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_VII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_VII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_VII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_VII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_VII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_VII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_VII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_VII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_VII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_VII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_VII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_VII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_VII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_VII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_VII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_VII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_VII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '8') {
    // add_VIII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_VIII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_VIII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_VIII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_VIII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_VIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_VIII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_VIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_VIII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_VIII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_VIII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_VIII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_VIII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_VIII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_VIII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_VIII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_VIII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_VIII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_VIII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_VIII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_VIII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VIII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_VIII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '9') {
    // add_IX
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_IX'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_IX' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_IX'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_IX' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_IX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_IX' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_IX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_IX' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_IX'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_IX' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_IX'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_IX' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_IX'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_IX' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_IX'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_IX' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_IX'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_IX' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_IX'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_IX' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IX'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_IX' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '10') {
    // add_X
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_X'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_X' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_X'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_X' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_X'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_X' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_X'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_X' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_X'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_X' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_X'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_X' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_X'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_X' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_X'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_X' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_X'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_X' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_X'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_X' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_X'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_X' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '11') {
    // add_XI
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XI'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XI' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XI'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XI' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XI' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XI' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XI'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XI' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XI'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XI' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XI'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XI' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XI'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XI' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XI'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XI' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XI'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XI' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XI'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XI' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '12') {
    // add_XII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '13') {
    // add_XIII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XIII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XIII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XIII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XIII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XIII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XIII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XIII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XIII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XIII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XIII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XIII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XIII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XIII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XIII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XIII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XIII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XIII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XIII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XIII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '14') {
    // XIV
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XIV'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XIV' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XIV'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XIV' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XIV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XIV' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XIV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XIV' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XIV'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XIV' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XIV'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XIV' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XIV'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XIV' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XIV'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XIV' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XIV'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XIV' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XIV'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XIV' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIV'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XIV' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '15') {
    // XV
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XV'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XV' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XV'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XV' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XV' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XV' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XV'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XV' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XV'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XV' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XV'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XV' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XV'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XV' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XV'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XV' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XV'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XV' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XV'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XV' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '16') {
    // XVI
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XVI'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XVI' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XVI'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XVI' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XVI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XVI' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XVI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XVI' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XVI'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XVI' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XVI'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XVI' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XVI'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XVI' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XVI'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XVI' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XVI'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XVI' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XVI'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XVI' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVI'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XVI' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '17') {
    // XVII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XVII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XVII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XVII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XVII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XVII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XVII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XVII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XVII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XVII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XVII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XVII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XVII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XVII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XVII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XVII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XVII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XVII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XVII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XVII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XVII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XVII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '18') {
    // XVIII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XVIII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XVIII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XVIII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XVIII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XVIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XVIII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XVIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XVIII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XVIII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XVIII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XVIII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XVIII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XVIII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XVIII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XVIII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XVIII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XVIII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XVIII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XVIII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XVIII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVIII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XVIII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '19') {
    // XIX
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XIX'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XIX' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XIX'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XIX' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XIX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XIX' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XIX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XIX' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XIX'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XIX' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XIX'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XIX' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XIX'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XIX' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XIX'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XIX' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XIX'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XIX' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XIX'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XIX' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIX'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XIX' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '20') {
    // XX
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XX'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XX' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XX'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XX' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XX' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XX' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XX'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XX' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XX'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XX' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XX'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XX' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XX'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XX' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XX'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XX' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XX'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XX' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XX'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XX' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '21') {
    // XXI
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXI'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXI' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXI'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXI' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXI' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXI' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXI'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXI' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXI'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXI' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXI'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXI' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXI'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXI' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXI'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXI' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXI'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXI' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXI'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXI' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '22') {
    // XXII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '23') {
    // XXIII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXIII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXIII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXIII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXIII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXIII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXIII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXIII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXIII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXIII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXIII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXIII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXIII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXIII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXIII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXIII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXIII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXIII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXIII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '24') {
    // XXIV
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXIV'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXIV' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXIV'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXIV' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXIV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXIV' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXIV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXIV' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXIV'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXIV' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXIV'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXIV' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXIV'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXIV' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXIV'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXIV' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXIV'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXIV' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXIV'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXIV' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIV'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIV' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '25') {
    // XXV
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXV'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXV' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXV'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXV' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXV' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXV'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXV' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXV'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXV' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXV'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXV' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXV'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXV' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXV'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXV' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXV'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXV' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXV'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXV' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXV'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXV' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '26') {
    // XXVI
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXVI'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXVI' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXVI'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXVI' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXVI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXVI' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXVI'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXVI' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXVI'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXVI' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXVI'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXVI' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXVI'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXVI' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXVI'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXVI' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXVI'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXVI' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXVI'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXVI' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVI'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVI' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '27') {
    // XXVII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXVII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXVII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXVII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXVII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXVII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXVII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXVII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXVII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXVII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXVII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXVII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXVII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXVII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXVII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXVII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXVII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXVII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXVII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXVII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXVII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '28') {
    // XXVIII
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXVIII'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXVIII' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXVIII'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXVIII' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXVIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXVIII' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXVIII'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXVIII' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXVIII'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXVIII' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXVIII'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXVIII' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXVIII'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXVIII' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXVIII'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXVIII' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXVIII'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXVIII' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXVIII'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXVIII' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVIII'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVIII' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '29') {
    // XXIX
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXIX'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXIX' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXIX'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXIX' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXIX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXIX' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXIX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXIX' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXIX'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXIX' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXIX'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXIX' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXIX'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXIX' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXIX'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXIX' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXIX'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXIX' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXIX'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXIX' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIX'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIX' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '30') {
    // XXX
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9_add_XXX'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8_add_XXX' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8_add_XXX'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7_add_XXX' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7_add_XXX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6_add_XXX' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6_add_XXX'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5_add_XXX' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5_add_XXX'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4_add_XXX' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4_add_XXX'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3_add_XXX' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3_add_XXX'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2_add_XXX' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2_add_XXX'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1_add_XXX' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1_add_XXX'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm_add_XXX' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm_add_XXX'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm_add_XXX' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXX'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_add_XXX' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else {
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_9');
    $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
    $query_detail_sdm_result_9 = $this->db->get()->result_array();
    $total_detail_sdm_9 = 0;
    foreach ($query_detail_sdm_result_9 as $key => $value_detail_sdm_9) {
        $total_detail_sdm_9 +=  $value_detail_sdm_9['nilai_sdm_detail_9'];
    };
    $where = [
        'id_detail_sdm_8' => $id_detail_sdm_8
    ];
    $data = [
        'nilai_sdm_detail_8' => $total_detail_sdm_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
    $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
    $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_8');
    $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
    $query_detail_sdm_result_8 = $this->db->get()->result_array();
    $total_detail_sdm_8 = 0;
    foreach ($query_detail_sdm_result_8 as $key => $value_detail_sdm_8) {
        $total_detail_sdm_8 +=  $value_detail_sdm_8['nilai_sdm_detail_8'];
    };

    $where = [
        'id_detail_sdm_7' => $id_detail_sdm_7
    ];
    $data = [
        'nilai_sdm_detail_7' => $total_detail_sdm_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
    $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
    $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_7');
    $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
    $query_detail_sdm_result_7 = $this->db->get()->result_array();
    $total_detail_sdm_7 = 0;
    foreach ($query_detail_sdm_result_7 as $key => $value_detail_sdm_7) {
        $total_detail_sdm_7 +=  $value_detail_sdm_7['nilai_sdm_detail_7'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_6' => $id_detail_sdm_6
    ];
    $data = [
        'nilai_sdm_detail_6' => $total_detail_sdm_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
    $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
    $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_6');
    $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
    $query_detail_sdm_result_6 = $this->db->get()->result_array();
    $total_detail_sdm_6 = 0;
    foreach ($query_detail_sdm_result_6 as $key => $value_detail_sdm_6) {
        $total_detail_sdm_6 +=  $value_detail_sdm_6['nilai_sdm_detail_6'];
    };
    // end ambil
    $where = [
        'id_detail_sdm_5' => $id_detail_sdm_5
    ];
    $data = [
        'nilai_sdm_detail_5' => $total_detail_sdm_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
    $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
    $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_5');
    $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
    $query_detail_sdm_result_5 = $this->db->get()->result_array();
    $total_detail_sdm_5 = 0;
    foreach ($query_detail_sdm_result_5 as $key => $value_detail_sdm_5) {
        $total_detail_sdm_5 +=  $value_detail_sdm_5['nilai_sdm_detail_5'];
    };

    $where = [
        'id_detail_sdm_4' => $id_detail_sdm_4
    ];
    $data = [
        'nilai_sdm_detail_4' => $total_detail_sdm_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
    $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
    $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_4');
    $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
    $query_detail_sdm_result_4 = $this->db->get()->result_array();
    $total_detail_sdm_4 = 0;
    foreach ($query_detail_sdm_result_4 as $key => $value_detail_sdm_4) {
        $total_detail_sdm_4 +=  $value_detail_sdm_4['nilai_sdm_detail_4'];
    };

    $where = [
        'id_detail_sdm_3' => $id_detail_sdm_3
    ];
    $data = [
        'nilai_sdm_detail_3' => $total_detail_sdm_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
    $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
    $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_3');
    $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
    $query_detail_sdm_result_3 = $this->db->get()->result_array();
    $total_detail_sdm_3 = 0;
    foreach ($query_detail_sdm_result_3 as $key => $value_detail_sdm_3) {
        $total_detail_sdm_3 +=  $value_detail_sdm_3['nilai_sdm_detail_3'];
    };
    $where = [
        'id_detail_sdm_2' => $id_detail_sdm_2
    ];
    $data = [
        'nilai_sdm_detail_2' => $total_detail_sdm_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
    $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
    $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_2');
    $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
    $query_detail_sdm_result_2 = $this->db->get()->result_array();
    $total_detail_sdm_2 = 0;
    foreach ($query_detail_sdm_result_2 as $key => $value_detail_sdm_2) {
        $total_detail_sdm_2 +=  $value_detail_sdm_2['nilai_sdm_detail_2'];
    };
    $where = [
        'id_detail_sdm_1' => $id_detail_sdm_1
    ];
    $data = [
        'nilai_sdm_detail_1' => $total_detail_sdm_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
    $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
    $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_sdm_1');
    $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm_1 = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm_1) {
        $total_detail_sdm_1 +=  $value_detail_sdm_1['nilai_sdm_detail_1'];
    };
    $where = [
        'id_sdm_detail' => $id_sdm_detail
    ];
    $data = [
        'nilai_detail_sdm' => $total_detail_sdm_1,
    ];
    $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
    $row_sdm_detail = $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
    $id_sdm = $row_sdm_detail['id_sdm'];
    $this->db->select('*');
    $this->db->from('tbl_sdm_detail');
    $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
    $query_detail_sdm_result = $this->db->get()->result_array();
    $total_detail_sdm = 0;
    foreach ($query_detail_sdm_result as $key => $value_detail_sdm) {
        $total_detail_sdm +=  $value_detail_sdm['nilai_detail_sdm'];
    };
    $where = [
        'id_sdm' => $id_sdm,
    ];
    $data = [
        'nilai_sdm' => $total_detail_sdm,
    ];
    $this->Data_kontrak_model->update_tbl_sdm($where, $data);
    // update after
    $row_sdm = $this->Data_kontrak_model->by_id_sdm($id_sdm);
    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_sdm['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_sdm['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_sdm['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm'];
    };

    $where = [
        'id_kontrak' => $row_sdm['id_kontrak']
    ];
    $data = [
        'nilai_kontrak_awal' => $total_sdm + $total_sdm + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
}
