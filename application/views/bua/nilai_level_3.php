<?php
// bua
$type_add = $this->input->post('type_add');
if ($type_add == '1') {
    // _add_I
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_I' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_I'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_I' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_I'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_I'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_I' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '2') {
    // _add_II
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_II' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_II'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_II' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_II'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_II'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_II' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '3') {
    // _add_III
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_III' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_III'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_III' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_III'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_III'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_III' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '4') {
    // _add_IV
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_IV' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_IV'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_IV' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_IV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IV'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_IV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '5') {
    // _add_V
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_V' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_V'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_V' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_V'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_V'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_V' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '6') {
    // _add_VI
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_VI' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_VI'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_VI' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VI'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_VI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '7') {
    // _add_VII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_VII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_VII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_VII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_VII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '8') {
    // _add_VIII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_VIII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_VIII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_VIII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_VIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_VIII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_VIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '9') {
    // _add_IX
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_IX' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_IX'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_IX' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_IX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_IX'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_IX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '10') {
    // _add_X
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_X' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_X'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_X' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_X'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_X'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_X' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '11') {
    // _add_XI
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XI' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XI'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XI' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XI'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '12') {
    // _add_XII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '13') {
    // _add_XIII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XIII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XIII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XIII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '14') {
    // _add_XIV
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XIV' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XIV'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XIV' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIV'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XIV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '15') {
    // _add_XV
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XV' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XV'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XV' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XV'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '16') {
    // _add_XVI
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XVI' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XVI'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XVI' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVI'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XVI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '17') {
    // _add_XVII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XVII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XVII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XVII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XVII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '18') {
    // _add_XVIII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XVIII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XVIII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XVIII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XVIII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XVIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '19') {
    // _add_XIX
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XIX' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XIX'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XIX' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XIX'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XIX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '20') {
    // _add_XX
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XX' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XX'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XX' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XX'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '21') {
    // _add_XXI
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXI' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXI'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXI' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXI'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '22') {
    // _add_XXII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '23') {
    // _add_XXIII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXIII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXIII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXIII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '24') {
    // _add_XXIV
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXIV' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXIV'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXIV' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIV'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '25') {
    // _add_XXV
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXV' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXV'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXV' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXV'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXV'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXV' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '26') {
    // _add_XXVI
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXVI' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXVI'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXVI' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVI'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVI'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVI' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '27') {
    // _add_XXVII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXVII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXVII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXVII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '28') {
    // _add_XXVIII
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXVIII' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXVIII'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXVIII' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXVIII'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXVIII'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXVIII' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '29') {
    // _add_XXIX
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXIX' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXIX'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXIX' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXIX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXIX'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXIX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
} else if ($type_add == '30') {
    // _add_XXX
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua_add_XXX' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua_add_XXX'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua_add_XXX' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex_add_XXX'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm_add_XXX'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_add_XXX' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));

} else {
    $id_bua_detail = $this->input->post('id_bua_detail');
    $where = [
        'id_bua_detail' => $id_bua_detail
    ];
    $data = [
        'nilai_detail_bua' => $this->input->post('nilai_detail_bua'),
    ];
    $this->Data_kontrak_model->update_tbl_bua_detail($where, $data);
    $row_bua_detail = $this->Data_kontrak_model->by_id_bua_detail($id_bua_detail);
    $id_bua = $row_bua_detail['id_bua'];
    $this->db->select('*');
    $this->db->from('tbl_bua_detail');
    $this->db->where('tbl_bua_detail.id_bua', $id_bua);
    $query_detail_bua_result = $this->db->get()->result_array();
    $total_detail_bua = 0;
    foreach ($query_detail_bua_result as $key => $value_detail_bua) {
        $total_detail_bua +=  $value_detail_bua['nilai_detail_bua'];
    };
    $where = [
        'id_bua' => $id_bua,
    ];
    $data = [
        'nilai_bua' => $total_detail_bua,
    ];
    $this->Data_kontrak_model->update_tbl_bua($where, $data);
    // update after
    $row_bua = $this->Data_kontrak_model->by_id_bua($id_bua);
    $this->db->select('*');
    $this->db->from('tbl_bua');
    $this->db->where('tbl_bua.id_kontrak', $row_bua['id_kontrak']);
    $query_bua_result = $this->db->get()->result_array();
    $total_bua = 0;
    foreach ($query_bua_result as $key => $value_bua) {
        $total_bua += $value_bua['nilai_bua'];
    };

    $this->db->select('*');
    $this->db->from('tbl_opex');
    $this->db->where('tbl_opex.id_kontrak', $row_bua['id_kontrak']);
    $query_opex_result = $this->db->get()->result_array();
    $total_opex = 0;
    foreach ($query_opex_result as $key => $value_opex) {
        $total_opex += $value_opex['nilai_opex'];
    };

    $this->db->select('*');
    $this->db->from('tbl_capex');
    $this->db->where('tbl_capex.id_kontrak', $row_bua['id_kontrak']);
    $query_capex_result = $this->db->get()->result_array();
    $total_capex = 0;
    foreach ($query_capex_result as $key => $value_capex) {
        $total_capex += $value_capex['nilai_capex'];
    };

    $this->db->select('*');
    $this->db->from('tbl_sdm');
    $this->db->where('tbl_sdm.id_kontrak', $row_bua['id_kontrak']);
    $query_sdm_result = $this->db->get()->result_array();
    $total_sdm = 0;
    foreach ($query_sdm_result as $key => $value_sdm) {
        $total_sdm += $value_sdm['nilai_sdm'];
    };

    $where = [
        'id_kontrak' => $row_bua['id_kontrak']
    ];
    $data = [
        'nilai_kontrak_awal' => $total_capex + $total_opex + $total_bua + $total_sdm,
    ];
    $this->Data_kontrak_model->update_kontrak($where, $data);
    $this->output->set_content_type('application/json')->set_output(json_encode('success'));
}
