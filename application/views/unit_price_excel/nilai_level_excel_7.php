<?php

$this->db->select('*');
$this->db->from('tbl_unit_price_5');
$this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
$query_d = $this->db->get()->result_array();
$total_unit_price_5 = 0;
foreach ($query_d as $key => $value_unit_price_5) {
    $total_unit_price_5 +=  $value_unit_price_5['total_harga'];
};
$where = [
    'id_unit_price_4' => $id_unit_price_4
];
$data = [
    'total_harga' => $total_unit_price_5,
];
$this->Data_kontrak_model->update_tbl_unit_price_4($where, $data);
$row_unit_price_4 = $this->Data_kontrak_model->by_id_unit_price_4($id_unit_price_4);
$id_unit_price_3 = $row_unit_price_4['id_unit_price_3'];
// update after
$this->db->select('*');
$this->db->from('tbl_unit_price_4');
$this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
$query_d = $this->db->get()->result_array();
$total_unit_price_4 = 0;
foreach ($query_d as $key => $value_unit_price_4) {
    $total_unit_price_4 +=  $value_unit_price_4['total_harga'];
};
$where = [
    'id_unit_price_3' => $id_unit_price_3
];
$data = [
    'total_harga' => $total_unit_price_4,
];
$this->Data_kontrak_model->update_tbl_unit_price_3($where, $data);
$row_unit_price_3 = $this->Data_kontrak_model->by_id_unit_price_3($id_unit_price_3);
$id_unit_price_2 = $row_unit_price_3['id_unit_price_2'];

$this->db->select('*');
$this->db->from('tbl_unit_price_3');
$this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
$query_d = $this->db->get()->result_array();
$total_unit_price_3 = 0;
foreach ($query_d as $key => $value_unit_price_3) {
    $total_unit_price_3 +=  $value_unit_price_3['total_harga'];
};
$where = [
    'id_unit_price_2' => $id_unit_price_2
];
$data = [
    'total_harga' => $total_unit_price_3,
];
$this->Data_kontrak_model->update_tbl_unit_price_2($where, $data);
$row_unit_price_2 = $this->Data_kontrak_model->by_id_unit_price_2($id_unit_price_2);
$id_unit_price_1 = $row_unit_price_2['id_unit_price_1'];

$this->db->select('*');
$this->db->from('tbl_unit_price_2');
$this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
$query_d = $this->db->get()->result_array();
$total_unit_price_2 = 0;
foreach ($query_d as $key => $value_unit_price_2) {
    $total_unit_price_2 +=  $value_unit_price_2['total_harga'];
};
$where = [
    'id_unit_price_1' => $id_unit_price_1
];
$data = [
    'total_harga' => $total_unit_price_2,
];
$this->Data_kontrak_model->update_tbl_unit_price_1($where, $data);
$row_unit_price_1 = $this->Data_kontrak_model->by_id_unit_price_1($id_unit_price_1);
$id_unit_price = $row_unit_price_1['id_unit_price'];

$this->db->select('*');
$this->db->from('tbl_unit_price_1');
$this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
$query_value_unit_price_1_result = $this->db->get()->result_array();
$total_unit_price_1 = 0;
foreach ($query_value_unit_price_1_result as $key => $value_unit_price_1) {
    $total_unit_price_1 +=  $value_unit_price_1['total_harga'];
};
$where = [
    'id_unit_price' => $id_unit_price,
];
$data = [
    'total_harga' => $total_unit_price_1,
];
$this->Data_kontrak_model->update_tbl_unit_price($where, $data);
$row_unit_price = $this->Data_kontrak_model->by_id_unit_price($id_unit_price);
$this->db->select('*');
$this->db->from('tbl_unit_price');
$this->db->where('tbl_unit_price.id_kontrak', $row_unit_price['id_kontrak']);
$query_unit_price_result = $this->db->get()->result_array();
$total_unit_price = 0;
foreach ($query_unit_price_result as $key => $value_unit_price) {
    $total_unit_price += $value_unit_price['total_harga'];
};

$where = [
    'id_kontrak' => $row_unit_price['id_kontrak']
];
$data = [
    'nilai_kontrak_awal' => $total_unit_price
];
$this->Data_kontrak_model->update_kontrak($where, $data);
$this->output->set_content_type('application/json')->set_output(json_encode('success'));
