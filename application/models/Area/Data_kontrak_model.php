<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kontrak_model extends CI_Model
{
    public $table = 'mst_kontrak';
    public $colum_order = array('id_kontrak', 'no_kontrak', 'nama_kontrak', 'tahun_anggaran', 'id_kontrak');
    public $order = array('id_kontrak', 'no_kontrak', 'nama_kontrak', 'tahun_anggaran', 'id_kontrak');

    private function _get_data_query($sess_detail_role)
    {
        $this->db->from($this->table);
        $this->db->join('detail_role', 'detail_role.id_detail_role = mst_kontrak.id_detail_role', 'left');
        $this->db->where('id_area', $sess_detail_role);
        $i = 0;
        foreach ($this->order as $item) // looping awal {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST {

                if ($i === 0) // looping awal {
                    $this->db->group_start();
        $this->db->like($item, $_POST['search']['value']);
    } else {
    $this->db->or_like(
        $item,
        $_POST['search']['value']
    );
}

if (count($this->order) - 1 == $i) {
    $this->db->group_end();
}
}
$i++;
}
if (isset($_POST['order'])) {
    $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
} else {
    $this->db->order_by('id_kontrak', 'DESC');
}
}

function getdatatable($sess_detail_role) //nam[ilin data pake ini {
    $this->_get_data_query($sess_detail_role); //ambil data dari get yg di atas
    if ($_POST['length'] != -1) {
        $this->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $this->db->get();
    return $query->result();
}
function count_filtered_data($sess_detail_role)
{
    $this->_get_data_query($sess_detail_role); //ambil data dari get yg di atas
    $query = $this->db->get();
    return $query->num_rows();
}

function count_all_data($sess_detail_role)
{
    $this->db->from($this->table);
    $this->db->where('id_detail_role', $sess_detail_role);
    return $this->db->count_all_results();
}

function getByid($id_kontrak)
{
    return $this->db->get_where($this->table, ['id_kontrak' => $id_kontrak])->row();
}

function update($where, $data)
{
    $this->db->update($this->table, $data, $where);
    return $this->db->affected_rows();
}

function add($data)
{
    $this->db->insert($this->table, $data);
    return $this->db->affected_rows();
}

function get_by_id_join($id_kontrak)
{
    $this->db->select('*');
    $this->db->from('mst_kontrak');
    $this->db->join('detail_role', 'mst_kontrak.id_detail_role = detail_role.id_detail_role');
    $this->db->join('mst_role', 'detail_role.id_role = mst_role.id_role', 'left');
    $this->db->join('mst_area', 'detail_role.id_area = mst_area.id_area', 'left');
    $this->db->join('mst_ruas_kontrak', 'detail_role.id_ruas_kontrak = mst_ruas_kontrak.id_ruas_kontrak', 'left');
    $this->db->join('mst_owner', 'detail_role.id_owner = mst_owner.id_owner', 'left');
    $this->db->where('mst_kontrak.id_kontrak', $id_kontrak);
    $query = $this->db->get();
    return $query->row_array();
}

function get_row_kontrak($id_kontrak)
{
    $this->db->select('*');
    $this->db->from('mst_kontrak');
    $this->db->where('mst_kontrak.id_kontrak', $id_kontrak);
    $query = $this->db->get();
    return $query->row_array();
}

function get_segalanya()
{
    $this->db->select('*');
    $this->db->from('detail_role');
    $this->db->join('mst_role', 'detail_role.id_role = mst_role.id_role', 'left');
    $this->db->join('mst_area', 'detail_role.id_area = mst_area.id_area', 'left');
    $this->db->join('mst_ruas_kontrak', 'detail_role.id_ruas_kontrak = mst_ruas_kontrak.id_ruas_kontrak', 'left');
    $this->db->join('mst_owner', 'detail_role.id_owner = mst_owner.id_owner', 'left');
    $this->db->where_not_in('mst_role.id_role', [1, 10, 7, 9, 8, 6]);
    $query = $this->db->get();
    return $query->result_array();
}

// capex
public $table_capex = 'table_capex';
public $colum_capex = array('id_capex', 'nama_uraian_lv3', 'date_created', 'id_capex');
function _get_data_query_capex($id_kontrak)
{
    $this->db->from($this->table_capex);
    $this->db->where('id_kontrak', $id_kontrak);
    $i = 0;
    foreach ($this->colum_capex as $item) // looping awal {
        if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST {

            if ($i === 0) // looping awal {
                $this->db->group_start();
    $this->db->like($item, $_POST['search']['value']);
} else {
    $this->db->or_like(
        $item,
        $_POST['search']['value']
    );
}

if (count($this->colum_capex) - 1 == $i) {
    $this->db->group_end();
}
}
$i++;
}
if (isset($_POST['order'])) {
    $this->db->order_by($this->colum_capex[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
} else {
    $this->db->order_by('id_capex', 'DESC');
}
}

function getdatatable_capex($id_kontrak) //nam[ilin data pake ini {
    $this->_get_data_query_capex($id_kontrak); //ambil data dari get yg di atas
    if ($_POST['length'] != -1) {
        $this->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $this->db->get();
    return $query->result();
}
function count_filtered_capex($id_kontrak)
{
    $this->_get_data_query_capex($id_kontrak); //ambil data dari get yg di atas
    $query = $this->db->get();
    return $query->num_rows();
}

function count_all_capex($id_kontrak)
{
    $this->db->from($this->table_capex);
    $this->db->where('id_kontrak', $id_kontrak);
    return $this->db->count_all_results();
}

function add_capex($data)
{
    $this->db->insert('table_capex', $data);
    return $this->db->affected_rows();
}

// end capex

// opex

public $table_opex = 'table_opex';
public $colum_opex = array('id_opex', 'nama_uraian_lv3', 'date_created', 'id_opex');
function _get_data_query_opex($id_kontrak)
{
    $this->db->from($this->table_opex);
    $this->db->where('id_kontrak', $id_kontrak);
    $i = 0;
    foreach ($this->colum_opex as $item) // looping awal {
        if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST {

            if ($i === 0) // looping awal {
                $this->db->group_start();
    $this->db->like($item, $_POST['search']['value']);
} else {
    $this->db->or_like(
        $item,
        $_POST['search']['value']
    );
}

if (count($this->colum_opex) - 1 == $i) {
    $this->db->group_end();
}
}
$i++;
}
if (isset($_POST['order'])) {
    $this->db->order_by($this->colum_opex[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
} else {
    $this->db->order_by('id_opex', 'DESC');
}
}

function getdatatable_opex($id_kontrak) //nam[ilin data pake ini {
    $this->_get_data_query_opex($id_kontrak); //ambil data dari get yg di atas
    if ($_POST['length'] != -1) {
        $this->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $this->db->get();
    return $query->result();
}
function count_filtered_opex($id_kontrak)
{
    $this->_get_data_query_opex($id_kontrak); //ambil data dari get yg di atas
    $query = $this->db->get();
    return $query->num_rows();
}

function count_all_opex($id_kontrak)
{
    $this->db->from($this->table_opex);
    $this->db->where('id_kontrak', $id_kontrak);
    return $this->db->count_all_results();
}

function add_opex($data)
{
    $this->db->insert('table_opex', $data);
    return $this->db->affected_rows();
}

// end opex

// bua
public $table_bua = 'table_bua';
public $colum_bua = array('id_bua', 'nama_uraian_lv3', 'date_created', 'id_bua');
function _get_data_query_bua($id_kontrak)
{
    $this->db->from($this->table_bua);
    $this->db->where('id_kontrak', $id_kontrak);
    $i = 0;
    foreach ($this->colum_bua as $item) // looping awal {
        if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST {

            if ($i === 0) // looping awal {
                $this->db->group_start();
    $this->db->like($item, $_POST['search']['value']);
} else {
    $this->db->or_like(
        $item,
        $_POST['search']['value']
    );
}

if (count($this->colum_bua) - 1 == $i) {
    $this->db->group_end();
}
}
$i++;
}
if (isset($_POST['order'])) {
    $this->db->order_by($this->colum_bua[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
} else {
    $this->db->order_by('id_bua', 'DESC');
}
}

function getdatatable_bua($id_kontrak) //nam[ilin data pake ini {
    $this->_get_data_query_bua($id_kontrak); //ambil data dari get yg di atas
    if ($_POST['length'] != -1) {
        $this->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $this->db->get();
    return $query->result();
}
function count_filtered_bua($id_kontrak)
{
    $this->_get_data_query_bua($id_kontrak); //ambil data dari get yg di atas
    $query = $this->db->get();
    return $query->num_rows();
}

function count_all_bua($id_kontrak)
{
    $this->db->from($this->table_bua);
    $this->db->where('id_kontrak', $id_kontrak);
    return $this->db->count_all_results();
}

function add_bua($data)
{
    $this->db->insert('table_bua', $data);
    return $this->db->affected_rows();
}
// end bua

// sdm
public $table_sdm = 'table_sdm';
public $colum_sdm = array('id_sdm', 'nama_uraian_lv3', 'date_created', 'id_sdm');
function _get_data_query_sdm($id_kontrak)
{
    $this->db->from($this->table_sdm);
    $this->db->where('id_kontrak', $id_kontrak);
    $i = 0;
    foreach ($this->colum_sdm as $item) // looping awal {
        if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST {

            if ($i === 0) // looping awal {
                $this->db->group_start();
    $this->db->like($item, $_POST['search']['value']);
} else {
    $this->db->or_like(
        $item,
        $_POST['search']['value']
    );
}

if (count($this->colum_sdm) - 1 == $i) {
    $this->db->group_end();
}
}
$i++;
}
if (isset($_POST['order'])) {
    $this->db->order_by($this->colum_sdm[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
} else {
    $this->db->order_by('id_sdm', 'DESC');
}
}

function getdatatable_sdm($id_kontrak) //nam[ilin data pake ini {
    $this->_get_data_query_sdm($id_kontrak); //ambil data dari get yg di atas
    if ($_POST['length'] != -1) {
        $this->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $this->db->get();
    return $query->result();
}
function count_filtered_sdm($id_kontrak)
{
    $this->_get_data_query_sdm($id_kontrak); //ambil data dari get yg di atas
    $query = $this->db->get();
    return $query->num_rows();
}

function count_all_sdm($id_kontrak)
{
    $this->db->from($this->table_sdm);
    $this->db->where('id_kontrak', $id_kontrak);
    return $this->db->count_all_results();
}

function add_sdm($data)
{
    $this->db->insert('table_sdm', $data);
    return $this->db->affected_rows();
}

function get_area_kontrak($id_area)
{
    $this->db->select('*');
    $this->db->from('mst_kontrak');
    $this->db->join('detail_role', 'mst_kontrak.id_detail_role = detail_role.id_detail_role', 'left');
    $this->db->where('detail_role.id_area', $id_area);
    $query = $this->db->get();
    return $query->row_array();
}
// end sdm
function loop_level($id_kontrak)
{
    $this->db->select('*');
    $this->db->from('table_capex');
    // $this->db->join('detail_role', 'mst_kontrak.id_detail_role = detail_role.id_detail_role', 'left');
    $this->db->where('table_capex.id_kontrak', $id_kontrak);
    $query = $this->db->get();
    return $query->result_array();
}

function tambah_ke_tbl_detail_capex($data)
{
    $this->db->insert('tbl_capex_detail', $data);
    return $this->db->affected_rows();
}

// INI UNTUK ADDDENDUM
public $order_addendum = array('id_adendum', 'no_adendum', 'jumlah', 'tanggal', 'id_program');
function _get_data_query_addendum($id_program)
{
    $this->db->from('table_adendum');
    $this->db->where('id_program', $id_program);
    $i = 0;
    foreach ($this->order_addendum as $item) // looping awal {
        if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST {

            if ($i === 0) // looping awal {
                $this->db->group_start();
    $this->db->like($item, $_POST['search']['value']);
} else {
    $this->db->or_like(
        $item,
        $_POST['search']['value']
    );
}

if (count($this->order_addendum) - 1 == $i) {
    $this->db->group_end();
}
}
$i++;
}
if (isset($_POST['order'])) {
    $this->db->order_by($this->order_addendum[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
} else {
    $this->db->order_by('id_addendum', 'DESC');
}
}

function getdatatable_addendum($id_program) //nam[ilin data pake ini {
    $this->_get_data_query_addendum($id_program); //ambil data dari get yg di atas
    if ($_POST['length'] != -1) {
        $this->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $this->db->get();
    return $query->result();
}
function count_filtered_data_addendum($id_program)
{
    $this->_get_data_query_addendum($id_program); //ambil data dari get yg di atas
    $query = $this->db->get();
    return $query->num_rows();
}

function count_all_data_addendum($id_program)
{
    $this->db->from('table_adendum');
    $this->db->where('id_program', $id_program);
    return $this->db->count_all_results();
}
}
