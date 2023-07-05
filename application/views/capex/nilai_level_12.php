<?php
$type_add = $this->input->post('type_add');
if ($type_add == '1') {
    // add_I
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_I' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_I'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_I' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_I'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_I' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_I'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_I' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_I'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_I' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_I'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_I' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_I'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_I' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_I'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_I' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_I'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_I' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_I'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_I' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_I'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_I' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_I'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_I' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '2') {
    // add_II
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_II' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_II'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_II' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_II'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_II' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_II'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_II' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_II'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_II' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_II'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_II' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_II'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_II' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_II'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_II' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_II'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_II' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_II'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_II' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_II'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_II' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_II'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_II' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '3') {
    // add_III
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_III' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_III'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_III' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_III'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_III' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_III'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_III' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_III'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_III' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_III'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_III' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_III'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_III' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_III'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_III' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_III'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_III' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_III'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_III' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_III'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_III' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_III'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_III' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '4') {
    // add_IV
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_IV' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_IV'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_IV' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_IV'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_IV' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_IV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_IV' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_IV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_IV' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_IV'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_IV' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_IV'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_IV' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_IV'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_IV' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_IV'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_IV' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_IV'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_IV' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_IV'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_IV' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IV'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_IV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '5') {
    // add_V
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_V' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_V'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_V' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_V'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_V' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_V'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_V' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_V'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_V' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_V'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_V' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_V'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_V' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_V'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_V' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_V'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_V' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_V'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_V' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_V'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_V' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_V'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_V' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '6') {
    // add_VI
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_VI' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_VI'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_VI' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_VI'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_VI' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_VI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_VI' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_VI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_VI' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_VI'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_VI' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_VI'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_VI' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_VI'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_VI' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_VI'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_VI' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_VI'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_VI' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_VI'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_VI' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VI'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_VI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '7') {
    // add_VII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_VII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_VII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_VII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_VII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_VII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_VII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_VII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_VII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_VII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_VII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_VII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_VII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_VII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_VII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_VII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_VII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_VII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_VII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_VII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_VII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_VII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_VII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '8') {
    // add_VIII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_VIII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_VIII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_VIII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_VIII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_VIII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_VIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_VIII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_VIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_VIII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_VIII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_VIII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_VIII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_VIII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_VIII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_VIII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_VIII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_VIII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_VIII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_VIII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_VIII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_VIII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VIII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_VIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '9') {
    // add_IX
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_IX' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_IX'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_IX' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_IX'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_IX' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_IX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_IX' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_IX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_IX' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_IX'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_IX' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_IX'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_IX' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_IX'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_IX' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_IX'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_IX' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_IX'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_IX' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_IX'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_IX' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IX'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_IX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '10') {
    // add_X
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_X' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_X'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_X' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_X'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_X' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_X'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_X' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_X'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_X' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_X'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_X' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_X'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_X' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_X'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_X' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_X'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_X' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_X'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_X' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_X'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_X' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_X'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_X' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '11') {
    // add_XI
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XI' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XI'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XI' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XI'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XI' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XI' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XI' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XI'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XI' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XI'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XI' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XI'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XI' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XI'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XI' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XI'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XI' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XI'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XI' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XI'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '12') {
    // add_XII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '13') {
    // add_XIII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XIII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XIII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XIII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XIII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XIII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XIII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XIII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XIII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XIII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XIII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XIII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XIII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XIII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XIII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XIII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XIII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XIII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XIII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XIII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '14') {
    // XIV
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XIV' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XIV'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XIV' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XIV'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XIV' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XIV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XIV' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XIV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XIV' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XIV'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XIV' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XIV'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XIV' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XIV'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XIV' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XIV'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XIV' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XIV'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XIV' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XIV'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XIV' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIV'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XIV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '15') {
    // XV
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XV' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XV'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XV' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XV'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XV' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XV' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XV' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XV'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XV' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XV'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XV' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XV'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XV' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XV'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XV' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XV'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XV' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XV'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XV' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XV'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '16') {
    // XVI
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XVI' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XVI'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XVI' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XVI'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XVI' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XVI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XVI' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XVI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XVI' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XVI'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XVI' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XVI'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XVI' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XVI'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XVI' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XVI'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XVI' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XVI'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XVI' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XVI'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XVI' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVI'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XVI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '17') {
    // XVII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XVII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XVII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XVII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XVII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XVII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XVII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XVII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XVII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XVII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XVII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XVII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XVII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XVII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XVII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XVII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XVII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XVII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XVII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XVII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XVII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XVII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XVII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '18') {
    // XVIII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XVIII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XVIII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XVIII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XVIII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XVIII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XVIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XVIII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XVIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XVIII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XVIII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XVIII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XVIII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XVIII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XVIII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XVIII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XVIII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XVIII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XVIII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XVIII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XVIII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XVIII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVIII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XVIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '19') {
    // XIX
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XIX' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XIX'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XIX' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XIX'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XIX' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XIX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XIX' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XIX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XIX' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XIX'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XIX' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XIX'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XIX' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XIX'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XIX' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XIX'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XIX' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XIX'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XIX' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XIX'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XIX' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIX'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XIX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '20') {
    // XX
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XX' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XX'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XX' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XX'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XX' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XX' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XX' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XX'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XX' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XX'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XX' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XX'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XX' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XX'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XX' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XX'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XX' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XX'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XX' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XX'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '21') {
    // XXI
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXI' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXI'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXI' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXI'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXI' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXI' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXI' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXI'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXI' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXI'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXI' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXI'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXI' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXI'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXI' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXI'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXI' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXI'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXI' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXI'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '22') {
    // XXII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '23') {
    // XXIII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXIII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXIII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXIII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXIII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXIII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXIII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXIII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXIII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXIII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXIII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXIII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXIII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXIII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXIII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXIII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXIII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXIII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXIII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXIII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '24') {
    // XXIV
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXIV' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXIV'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXIV' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXIV'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXIV' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXIV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXIV' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXIV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXIV' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXIV'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXIV' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXIV'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXIV' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXIV'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXIV' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXIV'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXIV' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXIV'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXIV' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXIV'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXIV' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIV'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '25') {
    // XXV
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXV' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXV'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXV' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXV'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXV' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXV' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXV'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXV' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXV'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXV' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXV'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXV' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXV'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXV' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXV'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXV' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXV'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXV' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXV'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXV' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXV'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '26') {
    // XXVI
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXVI' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXVI'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXVI' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXVI'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXVI' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXVI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXVI' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXVI'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXVI' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXVI'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXVI' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXVI'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXVI' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXVI'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXVI' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXVI'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXVI' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXVI'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXVI' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXVI'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXVI' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVI'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '27') {
    // XXVII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXVII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXVII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXVII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXVII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXVII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXVII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXVII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXVII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXVII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXVII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXVII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXVII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXVII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXVII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXVII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXVII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXVII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXVII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXVII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXVII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXVII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '28') {
    // XXVIII
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXVIII' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXVIII'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXVIII' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXVIII'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXVIII' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXVIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXVIII' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXVIII'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXVIII' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXVIII'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXVIII' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXVIII'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXVIII' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXVIII'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXVIII' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXVIII'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXVIII' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXVIII'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXVIII' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXVIII'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXVIII' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVIII'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '29') {
    // XXIX
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXIX' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXIX'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXIX' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXIX'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXIX' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXIX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXIX' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXIX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXIX' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXIX'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXIX' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXIX'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXIX' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXIX'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXIX' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXIX'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXIX' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXIX'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXIX' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXIX'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXIX' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIX'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '30') {
    // XXX
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9_add_XXX' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9_add_XXX'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8_add_XXX' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8_add_XXX'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7_add_XXX' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7_add_XXX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6_add_XXX' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6_add_XXX'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5_add_XXX' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5_add_XXX'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4_add_XXX' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4_add_XXX'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3_add_XXX' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3_add_XXX'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2_add_XXX' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2_add_XXX'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1_add_XXX' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1_add_XXX'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex_add_XXX' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex_add_XXX'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex_add_XXX' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXX'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_add_XXX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else {
    $id_detail_capex_9 = $this->input->post('id_detail_capex_9');
    $where = [
        'id_detail_capex_9' => $id_detail_capex_9
    ];
    $data = [
        'nilai_capex_detail_9' => $this->input->post('nilai_capex_detail_9'),
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_9($where, $data);
    $row_capex_detail_9 = $this->Data_kontrak_model->by_id_detail_capex_9($id_detail_capex_9);
    $id_detail_capex_8 = $row_capex_detail_9['id_detail_capex_8'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_9');
    $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
    $query_detail_capex_result_9 = $this->db->get()->result_array();
    $total_detail_capex_9 = 0;
    foreach ($query_detail_capex_result_9 as $key => $value_detail_capex_9) {
        $total_detail_capex_9 +=  $value_detail_capex_9['nilai_capex_detail_9'];
    };
    $where = [
        'id_detail_capex_8' => $id_detail_capex_8
    ];
    $data = [
        'nilai_capex_detail_8' => $total_detail_capex_9,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_8($where, $data);
    $row_capex_detail_8 = $this->Data_kontrak_model->by_id_detail_capex_8($id_detail_capex_8);
    $id_detail_capex_7 = $row_capex_detail_8['id_detail_capex_7'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_8');
    $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
    $query_detail_capex_result_8 = $this->db->get()->result_array();
    $total_detail_capex_8 = 0;
    foreach ($query_detail_capex_result_8 as $key => $value_detail_capex_8) {
        $total_detail_capex_8 +=  $value_detail_capex_8['nilai_capex_detail_8'];
    };

    $where = [
        'id_detail_capex_7' => $id_detail_capex_7
    ];
    $data = [
        'nilai_capex_detail_7' => $total_detail_capex_8,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_7($where, $data);
    $row_capex_detail_7 = $this->Data_kontrak_model->by_id_detail_capex_7($id_detail_capex_7);
    $id_detail_capex_6 = $row_capex_detail_7['id_detail_capex_6'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_7');
    $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
    $query_detail_capex_result_7 = $this->db->get()->result_array();
    $total_detail_capex_7 = 0;
    foreach ($query_detail_capex_result_7 as $key => $value_detail_capex_7) {
        $total_detail_capex_7 +=  $value_detail_capex_7['nilai_capex_detail_7'];
    };
    // end ambil
    $where = [
        'id_detail_capex_6' => $id_detail_capex_6
    ];
    $data = [
        'nilai_capex_detail_6' => $total_detail_capex_7,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_6($where, $data);
    $row_capex_detail_6 = $this->Data_kontrak_model->by_id_detail_capex_6($id_detail_capex_6);
    $id_detail_capex_5 = $row_capex_detail_6['id_detail_capex_5'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_6');
    $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
    $query_detail_capex_result_6 = $this->db->get()->result_array();
    $total_detail_capex_6 = 0;
    foreach ($query_detail_capex_result_6 as $key => $value_detail_capex_6) {
        $total_detail_capex_6 +=  $value_detail_capex_6['nilai_capex_detail_6'];
    };
    // end ambil
    $where = [
        'id_detail_capex_5' => $id_detail_capex_5
    ];
    $data = [
        'nilai_capex_detail_5' => $total_detail_capex_6,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_5($where, $data);
    $row_capex_detail_5 = $this->Data_kontrak_model->by_id_detail_capex_5($id_detail_capex_5);
    $id_detail_capex_4 = $row_capex_detail_5['id_detail_capex_4'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_5');
    $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
    $query_detail_capex_result_5 = $this->db->get()->result_array();
    $total_detail_capex_5 = 0;
    foreach ($query_detail_capex_result_5 as $key => $value_detail_capex_5) {
        $total_detail_capex_5 +=  $value_detail_capex_5['nilai_capex_detail_5'];
    };

    $where = [
        'id_detail_capex_4' => $id_detail_capex_4
    ];
    $data = [
        'nilai_capex_detail_4' => $total_detail_capex_5
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_4($where, $data);
    $row_capex_detail_4 = $this->Data_kontrak_model->by_id_detail_capex_4($id_detail_capex_4);
    $id_detail_capex_3 = $row_capex_detail_4['id_detail_capex_3'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_4');
    $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
    $query_detail_capex_result_4 = $this->db->get()->result_array();
    $total_detail_capex_4 = 0;
    foreach ($query_detail_capex_result_4 as $key => $value_detail_capex_4) {
        $total_detail_capex_4 +=  $value_detail_capex_4['nilai_capex_detail_4'];
    };

    $where = [
        'id_detail_capex_3' => $id_detail_capex_3
    ];
    $data = [
        'nilai_capex_detail_3' => $total_detail_capex_4,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_3($where, $data);
    $row_capex_detail_3 = $this->Data_kontrak_model->by_id_detail_capex_3($id_detail_capex_3);
    $id_detail_capex_2 = $row_capex_detail_3['id_detail_capex_2'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_3');
    $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
    $query_detail_capex_result_3 = $this->db->get()->result_array();
    $total_detail_capex_3 = 0;
    foreach ($query_detail_capex_result_3 as $key => $value_detail_capex_3) {
        $total_detail_capex_3 +=  $value_detail_capex_3['nilai_capex_detail_3'];
    };
    $where = [
        'id_detail_capex_2' => $id_detail_capex_2
    ];
    $data = [
        'nilai_capex_detail_2' => $total_detail_capex_3,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_2($where, $data);
    $row_capex_detail_2 = $this->Data_kontrak_model->by_id_detail_capex_2($id_detail_capex_2);
    $id_detail_capex_1 = $row_capex_detail_2['id_detail_capex_1'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_2');
    $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
    $query_detail_capex_result_2 = $this->db->get()->result_array();
    $total_detail_capex_2 = 0;
    foreach ($query_detail_capex_result_2 as $key => $value_detail_capex_2) {
        $total_detail_capex_2 +=  $value_detail_capex_2['nilai_capex_detail_2'];
    };
    $where = [
        'id_detail_capex_1' => $id_detail_capex_1
    ];
    $data = [
        'nilai_capex_detail_1' => $total_detail_capex_2,
    ];
    $this->Data_kontrak_model->update_tbl_detail_capex_1($where, $data);
    $row_capex_detail_1 = $this->Data_kontrak_model->by_id_detail_capex_1($id_detail_capex_1);
    $id_capex_detail = $row_capex_detail_1['id_capex_detail'];
    $this->db->select('*');
    $this->db->from('tbl_detail_capex_1');
    $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex_1 = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex_1) {
        $total_detail_capex_1 +=  $value_detail_capex_1['nilai_capex_detail_1'];
    };
    $where = [
        'id_capex_detail' => $id_capex_detail
    ];
    $data = [
        'nilai_detail_capex' => $total_detail_capex_1,
    ];
    $this->Data_kontrak_model->update_tbl_capex_detail($where, $data);
    $row_capex_detail = $this->Data_kontrak_model->by_id_capex_detail($id_capex_detail);
    $id_capex = $row_capex_detail['id_capex'];
    $this->db->select('*');
    $this->db->from('tbl_capex_detail');
    $this->db->where('tbl_capex_detail.id_capex', $id_capex);
    $query_detail_capex_result = $this->db->get()->result_array();
    $total_detail_capex = 0;
    foreach ($query_detail_capex_result as $key => $value_detail_capex) {
        $total_detail_capex +=  $value_detail_capex['nilai_detail_capex'];
    };
    $where = [
        'id_capex' => $id_capex,
    ];
    $data = [
        'nilai_capex' => $total_detail_capex,
    ];
    $this->Data_kontrak_model->update_tbl_capex($where, $data);
    // update after
    $row_capex = $this->Data_kontrak_model->by_id_capex($id_capex);
    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_capex['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_capex['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex'];
    };

    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_capex['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_capex['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm'];
    };

    $where = [
        'id_kontrak' => $row_capex['id_kontrak']
    ];
    $data = [
        'nilai_kontrak_awal' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
}
