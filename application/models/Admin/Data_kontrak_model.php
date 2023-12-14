<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kontrak_model extends CI_Model
{
    var $table = 'mst_kontrak';
    var $colum_order = array('id_kontrak', 'nama_kontrak', 'nama_departemen', 'nama_area', 'nama_sub_area', 'tahun_anggaran', 'id_kontrak');
    var $order = array('id_kontrak', 'nama_kontrak', 'nama_departemen', 'nama_area', 'nama_sub_area', 'tahun_anggaran', 'id_kontrak');

    private function _get_data_query($id_departemen, $id_area, $id_sub_area)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        if (isset($_POST['id_departemen'])) {
            $this->db->like('mst_kontrak.id_departemen', $_POST['id_departemen']);
        } else {
        }
        if (isset($_POST['id_area'])) {
            $this->db->like('mst_kontrak.id_area', $_POST['id_area']);
        } else {
        }
        if (isset($_POST['id_sub_area'])) {
            $this->db->like('mst_kontrak.id_sub_area', $_POST['id_sub_area']);
        } else {
        }
        if ($id_departemen == 4) {
        } else {
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $i = 0;
        foreach ($this->order as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('mst_kontrak.id_kontrak', 'DESC');
        }
    }

    public function getdatatable($id_departemen, $id_area, $id_sub_area) //nam[ilin data pake ini
    {
        $this->_get_data_query($id_departemen, $id_area, $id_sub_area); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_data($id_departemen, $id_area, $id_sub_area)
    {
        $this->_get_data_query($id_departemen, $id_area, $id_sub_area); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data($id_departemen, $id_area, $id_sub_area)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        if (isset($_POST['id_departemen'])) {
            $this->db->like('mst_kontrak.id_departemen', $_POST['id_departemen']);
        } else {
        }
        if (isset($_POST['id_area'])) {
            $this->db->like('mst_kontrak.id_area', $_POST['id_area']);
        } else {
        }
        if (isset($_POST['id_sub_area'])) {
            $this->db->like('mst_kontrak.id_sub_area', $_POST['id_sub_area']);
        } else {
        }
        if ($id_departemen == 4) {
        } else {
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        return $this->db->count_all_results();
    }

    public function getByid($id_kontrak)
    {
        return $this->db->get_where($this->table, ['id_kontrak' => $id_kontrak])->row();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }


    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }


    public function get_by_id_join($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->where('mst_kontrak.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    // capex
    var $table_capex = 'table_capex';
    var $colum_capex = array('id_capex', 'nama_uraian_lv3',  'date_created', 'id_capex');
    private function _get_data_query_capex($id_kontrak)
    {
        $this->db->from($this->table_capex);
        $this->db->where('id_kontrak', $id_kontrak);
        $i = 0;
        foreach ($this->colum_capex as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_capex) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_capex[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_capex', 'DESC');
        }
    }

    public function getdatatable_capex($id_kontrak) //nam[ilin data pake ini
    {
        $this->_get_data_query_capex($id_kontrak); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_capex($id_kontrak)
    {
        $this->_get_data_query_capex($id_kontrak); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_capex($id_kontrak)
    {
        $this->db->from($this->table_capex);
        $this->db->where('id_kontrak', $id_kontrak);
        return $this->db->count_all_results();
    }

    public function add_capex($data)
    {
        $this->db->insert('table_capex', $data);
        return $this->db->affected_rows();
    }

    // end capex


    // opex

    var $tbl_opex = 'tbl_opex';
    var $colum_opex = array('id_opex', 'nama_uraian_lv3',  'date_created', 'id_opex');
    private function _get_data_query_opex($id_kontrak)
    {
        $this->db->from($this->tbl_opex);
        $this->db->where('id_kontrak', $id_kontrak);
        $i = 0;
        foreach ($this->colum_opex as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_opex) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_opex[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_opex', 'DESC');
        }
    }

    public function getdatatbl_opex($id_kontrak) //nam[ilin data pake ini
    {
        $this->_get_data_query_opex($id_kontrak); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_opex($id_kontrak)
    {
        $this->_get_data_query_opex($id_kontrak); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_opex($id_kontrak)
    {
        $this->db->from($this->tbl_opex);
        $this->db->where('id_kontrak', $id_kontrak);
        return $this->db->count_all_results();
    }

    public function add_opex($data)
    {
        $this->db->insert('tbl_opex', $data);
        return $this->db->affected_rows();
    }




    // end opex

    // bua
    var $tbl_bua = 'tbl_bua';
    var $colum_bua = array('id_bua', 'nama_uraian_lv3',  'date_created', 'id_bua');
    private function _get_data_query_bua($id_kontrak)
    {
        $this->db->from($this->tbl_bua);
        $this->db->where('id_kontrak', $id_kontrak);
        $i = 0;
        foreach ($this->colum_bua as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_bua) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_bua[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_bua', 'DESC');
        }
    }

    public function getdatatbl_bua($id_kontrak) //nam[ilin data pake ini
    {
        $this->_get_data_query_bua($id_kontrak); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_bua($id_kontrak)
    {
        $this->_get_data_query_bua($id_kontrak); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_bua($id_kontrak)
    {
        $this->db->from($this->tbl_bua);
        $this->db->where('id_kontrak', $id_kontrak);
        return $this->db->count_all_results();
    }

    public function add_bua($data)
    {
        $this->db->insert('tbl_bua', $data);
        return $this->db->affected_rows();
    }
    // end bua


    // sdm
    var $tbl_sdm = 'tbl_sdm';
    var $colum_sdm = array('id_sdm', 'nama_uraian_lv3',  'date_created', 'id_sdm');
    private function _get_data_query_sdm($id_kontrak)
    {
        $this->db->from($this->tbl_sdm);
        $this->db->where('id_kontrak', $id_kontrak);
        $i = 0;
        foreach ($this->colum_sdm as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_sdm) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_sdm[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_sdm', 'DESC');
        }
    }

    public function getdatatbl_sdm($id_kontrak) //nam[ilin data pake ini
    {
        $this->_get_data_query_sdm($id_kontrak); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_sdm($id_kontrak)
    {
        $this->_get_data_query_sdm($id_kontrak); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_sdm($id_kontrak)
    {
        $this->db->from($this->tbl_sdm);
        $this->db->where('id_kontrak', $id_kontrak);
        return $this->db->count_all_results();
    }

    public function add_sdm($data)
    {
        $this->db->insert('tbl_sdm', $data);
        return $this->db->affected_rows();
    }
    // end sdm

    // INI UNTUK GET ID CAPEX
    public function getByid_capex($id_capex)
    {
        $this->db->select('*');
        $this->db->from('table_capex');
        $this->db->where('id_capex', $id_capex);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function add_capex_detail($data)
    {
        $this->db->insert('detail_capex', $data);
        return $this->db->affected_rows();
    }

    // result table detail_capex

    var $detail_capex = 'detail_capex';
    var $colum_detail_capex = array('id_detail_capex', 'nama_uraian_lv4',  'date_created', 'id_capex');
    private function _get_data_query_detail_capex($id_capex)
    {
        $this->db->from($this->detail_capex);
        $this->db->where('id_capex', $id_capex);
        $i = 0;
        foreach ($this->colum_detail_capex as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_detail_capex) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_detail_capex[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_detail_capex', 'DESC');
        }
    }

    public function getdatatable_detail_capex($id_capex) //nam[ilin data pake ini
    {
        $this->_get_data_query_detail_capex($id_capex); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_detail_capex($id_capex)
    {
        $this->_get_data_query_detail_capex($id_capex); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_detail_capex($id_capex)
    {
        $this->db->from($this->detail_capex);
        $this->db->where('id_capex', $id_capex);
        return $this->db->count_all_results();
    }




    // INI UNTUK DETAIL OPEX
    public function getByid_opex($id_opex)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('id_opex', $id_opex);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function add_opex_detail($data)
    {
        $this->db->insert('detail_opex', $data);
        return $this->db->affected_rows();
    }

    // result table detail_opex
    var $detail_opex = 'detail_opex';
    var $colum_detail_opex = array('id_detail_opex', 'nama_uraian_lv4',  'date_created', 'id_opex');
    private function _get_data_query_detail_opex($id_opex)
    {
        $this->db->from($this->detail_opex);
        $this->db->where('id_opex', $id_opex);
        $i = 0;
        foreach ($this->colum_detail_opex as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_detail_opex) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_detail_opex[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_detail_opex', 'DESC');
        }
    }

    public function getdatatable_detail_opex($id_opex) //nam[ilin data pake ini
    {
        $this->_get_data_query_detail_opex($id_opex); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_detail_opex($id_opex)
    {
        $this->_get_data_query_detail_opex($id_opex); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_detail_opex($id_opex)
    {
        $this->db->from($this->detail_opex);
        $this->db->where('id_opex', $id_opex);
        return $this->db->count_all_results();
    }


    // result table detail_bua
    public function getByid_bua($id_bua)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua');
        $this->db->where('id_bua', $id_bua);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function add_bua_detail($data)
    {
        $this->db->insert('detail_bua', $data);
        return $this->db->affected_rows();
    }
    var $detail_bua = 'detail_bua';
    var $colum_detail_bua = array('id_detail_bua', 'nama_uraian_lv4',  'date_created', 'id_bua');
    private function _get_data_query_detail_bua($id_bua)
    {
        $this->db->from($this->detail_bua);
        $this->db->where('id_bua', $id_bua);
        $i = 0;
        foreach ($this->colum_detail_bua as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_detail_bua) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_detail_bua[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_detail_bua', 'DESC');
        }
    }

    public function getdatatable_detail_bua($id_bua) //nam[ilin data pake ini
    {
        $this->_get_data_query_detail_bua($id_bua); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_detail_bua($id_bua)
    {
        $this->_get_data_query_detail_bua($id_bua); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_detail_bua($id_bua)
    {
        $this->db->from($this->detail_bua);
        $this->db->where('id_bua', $id_bua);
        return $this->db->count_all_results();
    }









    // INI UNTUK DETAIL sdm
    public function getByid_sdm($id_sdm)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm');
        $this->db->where('id_sdm', $id_sdm);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function add_sdm_detail($data)
    {
        $this->db->insert('detail_sdm', $data);
        return $this->db->affected_rows();
    }

    // result table detail_sdm
    var $detail_sdm = 'detail_sdm';
    var $colum_detail_sdm = array('id_detail_sdm', 'nama_uraian_lv4',  'date_created', 'id_sdm');
    private function _get_data_query_detail_sdm($id_sdm)
    {
        $this->db->from($this->detail_sdm);
        $this->db->where('id_sdm', $id_sdm);
        $i = 0;
        foreach ($this->colum_detail_sdm as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->colum_detail_sdm) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->colum_detail_sdm[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_detail_sdm', 'DESC');
        }
    }

    public function getdatatable_detail_sdm($id_sdm) //nam[ilin data pake ini
    {
        $this->_get_data_query_detail_sdm($id_sdm); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_detail_sdm($id_sdm)
    {
        $this->_get_data_query_detail_sdm($id_sdm); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_detail_sdm($id_sdm)
    {
        $this->db->from($this->detail_sdm);
        $this->db->where('id_sdm', $id_sdm);
        return $this->db->count_all_results();
    }

    public function get_level($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('table_capex');
        $this->db->where('table_capex.id_kontrak', $id_kontrak);
        $this->db->order_by('table_capex.id_capex', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function row_level3($id_capex)
    {
        $this->db->select('*');
        $this->db->from('table_capex');
        $this->db->where('table_capex.id_capex', $id_capex);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_level_detail_capex($id_capex)
    {
        $this->db->select('*');
        $this->db->from('detail_capex');
        $this->db->where('detail_capex.id_capex', $id_capex);
        $query = $this->db->get();
        return $query->result_array();
    }

    // update level 3
    public function update_capex($where, $data)
    {
        $this->db->update('tbl_capex', $data, $where);
        return $this->db->affected_rows();
    }




    public function delete_level3($id_capex)
    {
        $this->db->delete('table_capex', ['id_capex' => $id_capex]);
        $this->db->delete('detail_capex', ['id_capex' => $id_capex]);
        return $this->db->affected_rows();
    }

    public function get_level_detail_opex($id_opex)
    {
        $this->db->select('*');
        $this->db->from('detail_opex');
        $this->db->where('detail_opex.id_opex', $id_opex);
        $query = $this->db->get();
        return $query->result_array();
    }

    // update level 3
    public function update_opex($where, $data)
    {
        $this->db->update('tbl_opex', $data, $where);
        return $this->db->affected_rows();
    }


    public function delete_level3_opex($id_opex)
    {
        $this->db->delete('tbl_opex', ['id_opex' => $id_opex]);
        $this->db->delete('detail_opex', ['id_opex' => $id_opex]);
        return $this->db->affected_rows();
    }


    public function add_program($data)
    {
        $this->db->insert('tbl_program', $data);
        return $this->db->affected_rows();
    }

    // ini untuk program 


    public function get_by_id_program($id_program)
    {
        $this->db->select('*');
        $this->db->from('tbl_program');
        $this->db->where('tbl_program.id_program', $id_program);
        $query = $this->db->get();
        return $query->row_array();
    }



    public function get_result_kontrak_by_program($id_program)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->where('mst_kontrak.id_program', $id_program);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 
    public function by_id_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->where('mst_kontrak.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function update_kontrak($where, $data)
    {
        $this->db->update('mst_kontrak', $data, $where);
        return $this->db->affected_rows();
    }

    // insert CAPEX OPEX SDM BUA

    // CAPEX
    public function tambah_ke_tbl_capex($data)
    {
        $this->db->insert('tbl_capex', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_opex($data)
    {
        $this->db->insert('tbl_opex', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_bua($data)
    {
        $this->db->insert('tbl_bua', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_sdm($data)
    {
        $this->db->insert('tbl_sdm', $data);
        return $this->db->affected_rows();
    }

    // buat no_urut
    public function cek_not_urut_capex_detail($id_capex)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_capex_detail_1($id_capex_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_1');
        $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_2($id_detail_capex_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_2');
        $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_3($id_detail_capex_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_3');
        $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_4($id_detail_capex_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_4');
        $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_5($id_detail_capex_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_5');
        $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_6($id_detail_capex_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_6');
        $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_7($id_detail_capex_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_7');
        $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_8($id_detail_capex_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_8');
        $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_9($id_detail_capex_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_9');
        $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_capex_10($id_detail_capex_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_10');
        $this->db->where('tbl_detail_capex_10.id_detail_capex_9', $id_detail_capex_9);
        return $this->db->count_all_results();
    }



    // result by_kontrak
    public function result_cek_id_kontrak_di_tbl_capex($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_detail_capex($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->result_array();
    }
    // row capex by_kontrak
    public function row_cek_id_kontrak_di_tbl_capex($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function row_capex_by_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function row_opex_by_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function row_bua_by_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua');
        $this->db->where('tbl_bua.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function row_sdm_by_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm');
        $this->db->where('tbl_sdm.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }


    // count jumlah_result tbl_capex
    public function get_kode_urut_kontrak($id_program)
    {
        $this->db->select('id_program');
        $this->db->from('mst_kontrak');
        $this->db->where('id_program', $id_program);
        $data = $this->db->get();
        return $data->num_rows();
    }

    // INI UNTUK UPDATE NILAI KONTRAK




    // INI UNTUK ADDDENDUM
    var $order_addendum = array('id_adendum', 'no_adendum', 'jumlah', 'tanggal', 'id_program');
    private function _get_data_query_addendum($id_program)
    {
        $this->db->from('table_adendum');
        $this->db->where('id_program', $id_program);
        $i = 0;
        foreach ($this->order_addendum as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order_addendum) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order_addendum[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_adendum', 'DESC');
        }
    }

    public function getdatatable_addendum($id_program) //nam[ilin data pake ini
    {
        $this->_get_data_query_addendum($id_program); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_data_addendum($id_program)
    {
        $this->_get_data_query_addendum($id_program); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data_addendum($id_program)
    {
        $this->db->from('table_adendum');
        $this->db->where('id_program', $id_program);
        return $this->db->count_all_results();
    }
    public function add_addendum($data)
    {
        $this->db->insert('table_adendum', $data);
        return $this->db->affected_rows();
    }

    public function getByid_adendum($id_adendum)
    {
        $this->db->select('*');
        $this->db->from('table_adendum');
        $this->db->where('table_adendum.id_adendum', $id_adendum);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_addendum_by_id($id_kontrak)
    {
        $this->db->select_max('no_adendum');
        $this->db->from('table_adendum');
        $this->db->where('table_adendum.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_addendum_by_result($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('table_adendum');
        $this->db->where('table_adendum.id_kontrak', $id_kontrak);
        $this->db->order_by('CAST(no_adendum AS DECIMAL(10,6)) ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_addendum_by_result_mata_anggaran($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('table_adendum');
        $this->db->where('table_adendum.id_kontrak', $id_kontrak);
        $this->db->where('table_adendum.no_adendum', 'kontrak_awal');
        $query = $this->db->get();
        return $query->result_array();
    }



    public function hapus_addendum($id_adendum)
    {
        $this->db->delete('table_adendum', ['id_adendum' => $id_adendum]);
        return $this->db->affected_rows();
    }


    public function update_adendum($where, $data)
    {
        $this->db->update('table_adendum', $data, $where);
        return $this->db->affected_rows();
    }



    public function get_max_addendum_by_id($id_program)
    {
        $this->db->select('*');
        $this->db->from('table_adendum');
        $this->db->where('id_program', $id_program);
        $this->db->order_by('CAST(no_adendum AS DECIMAL(1)) DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }


    // 
    public function update_tbl_capex_where_kontrak($where, $data)
    {
        $this->db->update('tbl_capex', $data, $where);
        $updatedId = $this->db->get('tbl_capex')->row_array();
        return $updatedId;
    }



    // ========== BATAS Capex ==============

    // LOGIKA CAPEX FIX   
    // by_capex capex
    public function row_detail_capex_by_id_capex($id_capex)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query = $this->db->get();
        return $query->row_array();
    }


    // by_id capex
    public function by_id_capex($id_capex)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_capex', $id_capex);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_capex_detail($id_capex_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex_detail', $id_capex_detail);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_capex_1($id_detail_capex_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_1');
        $this->db->where('tbl_detail_capex_1.id_detail_capex_1', $id_detail_capex_1);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_detail_capex_2($id_detail_capex_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_2');
        $this->db->where('tbl_detail_capex_2.id_detail_capex_2', $id_detail_capex_2);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_capex_3($id_detail_capex_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_3');
        $this->db->where('tbl_detail_capex_3.id_detail_capex_3', $id_detail_capex_3);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_capex_4($id_detail_capex_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_4');
        $this->db->where('tbl_detail_capex_4.id_detail_capex_4', $id_detail_capex_4);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_capex_5($id_detail_capex_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_5');
        $this->db->where('tbl_detail_capex_5.id_detail_capex_5', $id_detail_capex_5);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_capex_6($id_detail_capex_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_6');
        $this->db->where('tbl_detail_capex_6.id_detail_capex_6', $id_detail_capex_6);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_capex_7($id_detail_capex_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_7');
        $this->db->where('tbl_detail_capex_7.id_detail_capex_7', $id_detail_capex_7);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_capex_8($id_detail_capex_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_8');
        $this->db->where('tbl_detail_capex_8.id_detail_capex_8', $id_detail_capex_8);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_capex_9($id_detail_capex_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_9');
        $this->db->where('tbl_detail_capex_9.id_detail_capex_9', $id_detail_capex_9);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_capex_10($id_detail_capex_10)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_10');
        $this->db->where('tbl_detail_capex_10.id_detail_capex_10', $id_detail_capex_10);
        $query = $this->db->get();
        return $query->row_array();
    }
    // level created capex
    public function tambah_ke_tbl_detail_capex($data)
    {
        $this->db->insert('tbl_capex_detail', $data);
        return $this->db->affected_rows();
    }

    public function create_detail_program_penyedia($data)
    {
        $this->db->insert('tbl_detail_program_penyedia_jasa', $data);
        return $this->db->affected_rows();
    }


    public function create_tbl_list_mata_anggran($data)
    {
        $this->db->insert('tbl_list_mata_anggran', $data);
        return $this->db->affected_rows();
    }

    public function get_mata_anggaran($id_departemen, $id_area, $id_sub_area, $keyword = null, $id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_kontrak', $id_kontrak);
        if ($id_departemen == 4) {
            if ($keyword) {
                $this->db->like('nama_pekerjaan_program_mata_anggaran', $keyword);
                $this->db->or_like('no_kontrak_penyedia', $keyword);
                $this->db->or_like('mst_kontrak.no_kontrak', $keyword);
                $this->db->or_like('nama_penyedia', $keyword);
                $this->db->or_like('nama_area', $keyword);
                $this->db->or_like('nama_departemen', $keyword);
                $this->db->or_like('nama_sub_area', $keyword);
            } else {
            }
        } else {
            if ($keyword) {
                $this->db->like('nama_pekerjaan_program_mata_anggaran', $keyword);
                $this->db->or_like('no_kontrak_penyedia', $keyword);
                $this->db->or_like('mst_kontrak.no_kontrak', $keyword);
                $this->db->or_like('nama_penyedia', $keyword);
                $this->db->or_like('nama_area', $keyword);
                $this->db->or_like('nama_departemen', $keyword);
                $this->db->or_like('nama_sub_area', $keyword);
            } else {
            }
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_mata_anggaran_tagihan($id_departemen, $id_area, $id_sub_area, $keyword = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        if ($id_departemen == 4) {
            if ($keyword) {
                $this->db->like('nama_pekerjaan_program_mata_anggaran', $keyword);
                $this->db->or_like('no_kontrak_penyedia', $keyword);
                $this->db->or_like('mst_kontrak.no_kontrak', $keyword);
                $this->db->or_like('nama_penyedia', $keyword);
                $this->db->or_like('nama_area', $keyword);
                $this->db->or_like('nama_departemen', $keyword);
                $this->db->or_like('nama_sub_area', $keyword);
            } else {
            }
        } else {
            if ($keyword) {
                $this->db->like('nama_pekerjaan_program_mata_anggaran', $keyword);
                $this->db->or_like('no_kontrak_penyedia', $keyword);
                $this->db->or_like('mst_kontrak.no_kontrak', $keyword);
                $this->db->or_like('nama_penyedia', $keyword);
                $this->db->or_like('nama_area', $keyword);
                $this->db->or_like('nama_departemen', $keyword);
                $this->db->or_like('nama_sub_area', $keyword);
            } else {
            }
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_mata_anggaran_row($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_mata_anggaran_row_hapus($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function get_all_list_mata_anggran($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_list_mata_anggran');
        $this->db->where('id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->result_array();
    }






    public function tambah_ke_tbl_detail_capex_1($data)
    {
        $this->db->insert('tbl_detail_capex_1', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_capex_2($data)
    {
        $this->db->insert('tbl_detail_capex_2', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_capex_3($data)
    {
        $this->db->insert('tbl_detail_capex_3', $data);
        return $this->db->affected_rows();
    }


    public function tambah_ke_tbl_detail_capex_4($data)
    {
        $this->db->insert('tbl_detail_capex_4', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_capex_5($data)
    {
        $this->db->insert('tbl_detail_capex_5', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_capex_6($data)
    {
        $this->db->insert('tbl_detail_capex_6', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_capex_7($data)
    {
        $this->db->insert('tbl_detail_capex_7', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_capex_8($data)
    {
        $this->db->insert('tbl_detail_capex_8', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_capex_9($data)
    {
        $this->db->insert('tbl_detail_capex_9', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_capex_10($data)
    {
        $this->db->insert('tbl_detail_capex_10', $data);
        return $this->db->affected_rows();
    }

    // update capex
    public function update_tbl_capex($where, $data)
    {
        $this->db->update('tbl_capex', $data, $where);
        $updatedId = $this->db->get('tbl_capex')->row_array();
        return $updatedId;
    }
    public function update_tbl_capex_detail($where, $data)
    {
        $this->db->update('tbl_capex_detail', $data, $where);
        $updatedId = $this->db->get('tbl_capex_detail')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_1($where, $data)
    {
        $this->db->update('tbl_detail_capex_1', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_1')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_2($where, $data)
    {
        $this->db->update('tbl_detail_capex_2', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_2')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_3($where, $data)
    {
        $this->db->update('tbl_detail_capex_3', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_3')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_4($where, $data)
    {
        $this->db->update('tbl_detail_capex_4', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_4')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_5($where, $data)
    {
        $this->db->update('tbl_detail_capex_5', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_5')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_6($where, $data)
    {
        $this->db->update('tbl_detail_capex_6', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_6')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_7($where, $data)
    {
        $this->db->update('tbl_detail_capex_7', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_7')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_8($where, $data)
    {
        $this->db->update('tbl_detail_capex_8', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_8')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_9($where, $data)
    {
        $this->db->update('tbl_detail_capex_9', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_9')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_capex_10($where, $data)
    {
        $this->db->update('tbl_detail_capex_10', $data, $where);
        $updatedId = $this->db->get('tbl_detail_capex_10')->row_array();
        return $updatedId;
    }

    // delete murni
    public function delete_tbl_capex_detail($id_capex_detail)
    {
        $this->db->delete('tbl_capex_detail', ['id_capex_detail' => $id_capex_detail]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_capex_1($id_detail_capex_1)
    {
        $this->db->delete('tbl_detail_capex_1', ['id_detail_capex_1' => $id_detail_capex_1]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_capex_2($id_detail_capex_2)
    {
        $this->db->delete('tbl_detail_capex_2', ['id_detail_capex_2' => $id_detail_capex_2]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_capex_3($id_detail_capex_3)
    {
        $this->db->delete('tbl_detail_capex_3', ['id_detail_capex_3' => $id_detail_capex_3]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_capex_4($id_detail_capex_4)
    {
        $this->db->delete('tbl_detail_capex_4', ['id_detail_capex_4' => $id_detail_capex_4]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_capex_5($id_detail_capex_5)
    {
        $this->db->delete('tbl_detail_capex_5', ['id_detail_capex_5' => $id_detail_capex_5]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_capex_6($id_detail_capex_6)
    {
        $this->db->delete('tbl_detail_capex_6', ['id_detail_capex_6' => $id_detail_capex_6]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_capex_7($id_detail_capex_7)
    {
        $this->db->delete('tbl_detail_capex_7', ['id_detail_capex_7' => $id_detail_capex_7]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_capex_8($id_detail_capex_8)
    {
        $this->db->delete('tbl_detail_capex_8', ['id_detail_capex_8' => $id_detail_capex_8]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_capex_9($id_detail_capex_9)
    {
        $this->db->delete('tbl_detail_capex_9', ['id_detail_capex_9' => $id_detail_capex_9]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_capex_10($id_detail_capex_10)
    {
        $this->db->delete('tbl_detail_capex_10', ['id_detail_capex_10' => $id_detail_capex_10]);
        return $this->db->affected_rows();
    }

    // delete triger

    public function delete_tbl_detail_capex_1($id_capex_detail)
    {
        $this->db->delete('tbl_detail_capex_1', ['id_capex_detail' => $id_capex_detail]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_capex_2($id_detail_capex_1)
    {
        $this->db->delete('tbl_detail_capex_2', ['id_detail_capex_1' => $id_detail_capex_1]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_capex_3($id_detail_capex_2)
    {
        $this->db->delete('tbl_detail_capex_3', ['id_detail_capex_2' => $id_detail_capex_2]);
        return $this->db->affected_rows();
    }


    public function delete_tbl_detail_capex_4($id_detail_capex_3)
    {
        $this->db->delete('tbl_detail_capex_4', ['id_detail_capex_3' => $id_detail_capex_3]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_capex_5($id_detail_capex_4)
    {
        $this->db->delete('tbl_detail_capex_5', ['id_detail_capex_4' => $id_detail_capex_4]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_capex_6($id_detail_capex_5)
    {
        $this->db->delete('tbl_detail_capex_6', ['id_detail_capex_5' => $id_detail_capex_5]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_capex_7($id_detail_capex_6)
    {
        $this->db->delete('tbl_detail_capex_7', ['id_detail_capex_6' => $id_detail_capex_6]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_capex_8($id_detail_capex_7)
    {
        $this->db->delete('tbl_detail_capex_8', ['id_detail_capex_7' => $id_detail_capex_7]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_capex_9($id_detail_capex_8)
    {
        $this->db->delete('tbl_detail_capex_9', ['id_detail_capex_8' => $id_detail_capex_8]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_capex_10($id_detail_capex_9)
    {
        $this->db->delete('tbl_detail_capex_10', ['id_detail_capex_9' => $id_detail_capex_9]);
        return $this->db->affected_rows();
    }









    // ========== BATAS opex ==============

    // LOGIKA opex FIX
    // by_opex opex
    // buat no_urut
    public function cek_not_urut_opex_detail($id_opex)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_opex_detail_1($id_opex_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_1');
        $this->db->where('tbl_detail_opex_1.id_opex_detail', $id_opex_detail);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_2($id_detail_opex_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_2');
        $this->db->where('tbl_detail_opex_2.id_detail_opex_1', $id_detail_opex_1);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_3($id_detail_opex_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_3');
        $this->db->where('tbl_detail_opex_3.id_detail_opex_2', $id_detail_opex_2);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_4($id_detail_opex_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_4');
        $this->db->where('tbl_detail_opex_4.id_detail_opex_3', $id_detail_opex_3);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_5($id_detail_opex_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_5');
        $this->db->where('tbl_detail_opex_5.id_detail_opex_4', $id_detail_opex_4);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_6($id_detail_opex_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_6');
        $this->db->where('tbl_detail_opex_6.id_detail_opex_5', $id_detail_opex_5);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_7($id_detail_opex_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_7');
        $this->db->where('tbl_detail_opex_7.id_detail_opex_6', $id_detail_opex_6);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_8($id_detail_opex_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_8');
        $this->db->where('tbl_detail_opex_8.id_detail_opex_7', $id_detail_opex_7);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_9($id_detail_opex_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_9');
        $this->db->where('tbl_detail_opex_9.id_detail_opex_8', $id_detail_opex_8);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_opex_10($id_detail_opex_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_10');
        $this->db->where('tbl_detail_opex_10.id_detail_opex_9', $id_detail_opex_9);
        return $this->db->count_all_results();
    }

    public function row_detail_opex_by_id_opex($id_opex)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function result_detail_opex_by_id_opex($id_opex)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query = $this->db->get();
        return $query->result_array();
    }

    // by_id opex
    public function by_id_opex($id_opex)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_opex', $id_opex);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_opex_detail($id_opex_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex_detail', $id_opex_detail);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_opex_1($id_detail_opex_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_1');
        $this->db->where('tbl_detail_opex_1.id_detail_opex_1', $id_detail_opex_1);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_detail_opex_2($id_detail_opex_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_2');
        $this->db->where('tbl_detail_opex_2.id_detail_opex_2', $id_detail_opex_2);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_opex_3($id_detail_opex_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_3');
        $this->db->where('tbl_detail_opex_3.id_detail_opex_3', $id_detail_opex_3);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_opex_4($id_detail_opex_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_4');
        $this->db->where('tbl_detail_opex_4.id_detail_opex_4', $id_detail_opex_4);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_opex_5($id_detail_opex_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_5');
        $this->db->where('tbl_detail_opex_5.id_detail_opex_5', $id_detail_opex_5);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_opex_6($id_detail_opex_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_6');
        $this->db->where('tbl_detail_opex_6.id_detail_opex_6', $id_detail_opex_6);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_opex_7($id_detail_opex_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_7');
        $this->db->where('tbl_detail_opex_7.id_detail_opex_7', $id_detail_opex_7);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_opex_8($id_detail_opex_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_8');
        $this->db->where('tbl_detail_opex_8.id_detail_opex_8', $id_detail_opex_8);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_opex_9($id_detail_opex_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_9');
        $this->db->where('tbl_detail_opex_9.id_detail_opex_9', $id_detail_opex_9);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_opex_10($id_detail_opex_10)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_10');
        $this->db->where('tbl_detail_opex_10.id_detail_opex_10', $id_detail_opex_10);
        $query = $this->db->get();
        return $query->row_array();
    }
    // level created opex
    public function tambah_ke_tbl_detail_opex($data)
    {
        $this->db->insert('tbl_opex_detail', $data);
        return $this->db->affected_rows();
    }


    public function tambah_ke_tbl_detail_opex_1($data)
    {
        $this->db->insert('tbl_detail_opex_1', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_opex_2($data)
    {
        $this->db->insert('tbl_detail_opex_2', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_opex_3($data)
    {
        $this->db->insert('tbl_detail_opex_3', $data);
        return $this->db->affected_rows();
    }


    public function tambah_ke_tbl_detail_opex_4($data)
    {
        $this->db->insert('tbl_detail_opex_4', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_opex_5($data)
    {
        $this->db->insert('tbl_detail_opex_5', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_opex_6($data)
    {
        $this->db->insert('tbl_detail_opex_6', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_opex_7($data)
    {
        $this->db->insert('tbl_detail_opex_7', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_opex_8($data)
    {
        $this->db->insert('tbl_detail_opex_8', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_opex_9($data)
    {
        $this->db->insert('tbl_detail_opex_9', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_opex_10($data)
    {
        $this->db->insert('tbl_detail_opex_10', $data);
        return $this->db->affected_rows();
    }

    // update opex
    public function update_tbl_opex($where, $data)
    {
        $this->db->update('tbl_opex', $data, $where);
        $updatedId = $this->db->get('tbl_opex')->row_array();
        return $updatedId;
    }
    public function update_tbl_opex_detail($where, $data)
    {
        $this->db->update('tbl_opex_detail', $data, $where);
        $updatedId = $this->db->get('tbl_opex_detail')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_1($where, $data)
    {
        $this->db->update('tbl_detail_opex_1', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_1')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_2($where, $data)
    {
        $this->db->update('tbl_detail_opex_2', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_2')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_3($where, $data)
    {
        $this->db->update('tbl_detail_opex_3', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_3')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_4($where, $data)
    {
        $this->db->update('tbl_detail_opex_4', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_4')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_5($where, $data)
    {
        $this->db->update('tbl_detail_opex_5', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_5')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_6($where, $data)
    {
        $this->db->update('tbl_detail_opex_6', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_6')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_7($where, $data)
    {
        $this->db->update('tbl_detail_opex_7', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_7')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_8($where, $data)
    {
        $this->db->update('tbl_detail_opex_8', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_8')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_9($where, $data)
    {
        $this->db->update('tbl_detail_opex_9', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_9')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_opex_10($where, $data)
    {
        $this->db->update('tbl_detail_opex_10', $data, $where);
        $updatedId = $this->db->get('tbl_detail_opex_10')->row_array();
        return $updatedId;
    }

    // delete murni
    public function delete_tbl_opex_detail($id_opex_detail)
    {
        $this->db->delete('tbl_opex_detail', ['id_opex_detail' => $id_opex_detail]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_opex_1($id_detail_opex_1)
    {
        $this->db->delete('tbl_detail_opex_1', ['id_detail_opex_1' => $id_detail_opex_1]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_opex_2($id_detail_opex_2)
    {
        $this->db->delete('tbl_detail_opex_2', ['id_detail_opex_2' => $id_detail_opex_2]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_opex_3($id_detail_opex_3)
    {
        $this->db->delete('tbl_detail_opex_3', ['id_detail_opex_3' => $id_detail_opex_3]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_opex_4($id_detail_opex_4)
    {
        $this->db->delete('tbl_detail_opex_4', ['id_detail_opex_4' => $id_detail_opex_4]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_opex_5($id_detail_opex_5)
    {
        $this->db->delete('tbl_detail_opex_5', ['id_detail_opex_5' => $id_detail_opex_5]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_opex_6($id_detail_opex_6)
    {
        $this->db->delete('tbl_detail_opex_6', ['id_detail_opex_6' => $id_detail_opex_6]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_opex_7($id_detail_opex_7)
    {
        $this->db->delete('tbl_detail_opex_7', ['id_detail_opex_7' => $id_detail_opex_7]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_opex_8($id_detail_opex_8)
    {
        $this->db->delete('tbl_detail_opex_8', ['id_detail_opex_8' => $id_detail_opex_8]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_opex_9($id_detail_opex_9)
    {
        $this->db->delete('tbl_detail_opex_9', ['id_detail_opex_9' => $id_detail_opex_9]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_opex_10($id_detail_opex_10)
    {
        $this->db->delete('tbl_detail_opex_10', ['id_detail_opex_10' => $id_detail_opex_10]);
        return $this->db->affected_rows();
    }

    // delete triger

    public function delete_tbl_detail_opex_1($id_opex_detail)
    {
        $this->db->delete('tbl_detail_opex_1', ['id_opex_detail' => $id_opex_detail]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_opex_2($id_detail_opex_1)
    {
        $this->db->delete('tbl_detail_opex_2', ['id_detail_opex_1' => $id_detail_opex_1]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_opex_3($id_detail_opex_2)
    {
        $this->db->delete('tbl_detail_opex_3', ['id_detail_opex_2' => $id_detail_opex_2]);
        return $this->db->affected_rows();
    }


    public function delete_tbl_detail_opex_4($id_detail_opex_3)
    {
        $this->db->delete('tbl_detail_opex_4', ['id_detail_opex_3' => $id_detail_opex_3]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_opex_5($id_detail_opex_4)
    {
        $this->db->delete('tbl_detail_opex_5', ['id_detail_opex_4' => $id_detail_opex_4]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_opex_6($id_detail_opex_5)
    {
        $this->db->delete('tbl_detail_opex_6', ['id_detail_opex_5' => $id_detail_opex_5]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_opex_7($id_detail_opex_6)
    {
        $this->db->delete('tbl_detail_opex_7', ['id_detail_opex_6' => $id_detail_opex_6]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_opex_8($id_detail_opex_7)
    {
        $this->db->delete('tbl_detail_opex_8', ['id_detail_opex_7' => $id_detail_opex_7]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_opex_9($id_detail_opex_8)
    {
        $this->db->delete('tbl_detail_opex_9', ['id_detail_opex_8' => $id_detail_opex_8]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_opex_10($id_detail_opex_9)
    {
        $this->db->delete('tbl_detail_opex_10', ['id_detail_opex_9' => $id_detail_opex_9]);
        return $this->db->affected_rows();
    }






    // ========== BATAS bua ==============

    // LOGIKA bua FIX
    // by_bua bua
    // buat no_urut
    public function cek_not_urut_bua_detail($id_bua)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua_detail');
        $this->db->where('tbl_bua_detail.id_bua', $id_bua);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_bua_detail_1($id_bua_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_1');
        $this->db->where('tbl_detail_bua_1.id_bua_detail', $id_bua_detail);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_2($id_detail_bua_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_2');
        $this->db->where('tbl_detail_bua_2.id_detail_bua_1', $id_detail_bua_1);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_3($id_detail_bua_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_3');
        $this->db->where('tbl_detail_bua_3.id_detail_bua_2', $id_detail_bua_2);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_4($id_detail_bua_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_4');
        $this->db->where('tbl_detail_bua_4.id_detail_bua_3', $id_detail_bua_3);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_5($id_detail_bua_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_5');
        $this->db->where('tbl_detail_bua_5.id_detail_bua_4', $id_detail_bua_4);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_6($id_detail_bua_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_6');
        $this->db->where('tbl_detail_bua_6.id_detail_bua_5', $id_detail_bua_5);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_7($id_detail_bua_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_7');
        $this->db->where('tbl_detail_bua_7.id_detail_bua_6', $id_detail_bua_6);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_8($id_detail_bua_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_8');
        $this->db->where('tbl_detail_bua_8.id_detail_bua_7', $id_detail_bua_7);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_9($id_detail_bua_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_9');
        $this->db->where('tbl_detail_bua_9.id_detail_bua_8', $id_detail_bua_8);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_bua_10($id_detail_bua_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_10');
        $this->db->where('tbl_detail_bua_10.id_detail_bua_9', $id_detail_bua_9);
        return $this->db->count_all_results();
    }

    public function row_detail_bua_by_id_bua($id_bua)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua_detail');
        $this->db->where('tbl_bua_detail.id_bua', $id_bua);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function result_detail_bua_by_id_bua($id_bua)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua_detail');
        $this->db->where('tbl_bua_detail.id_bua', $id_bua);
        $query = $this->db->get();
        return $query->result_array();
    }

    // by_id bua
    public function by_id_bua($id_bua)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua');
        $this->db->where('tbl_bua.id_bua', $id_bua);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_bua_detail($id_bua_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua_detail');
        $this->db->where('tbl_bua_detail.id_bua_detail', $id_bua_detail);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_bua_1($id_detail_bua_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_1');
        $this->db->where('tbl_detail_bua_1.id_detail_bua_1', $id_detail_bua_1);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_detail_bua_2($id_detail_bua_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_2');
        $this->db->where('tbl_detail_bua_2.id_detail_bua_2', $id_detail_bua_2);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_bua_3($id_detail_bua_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_3');
        $this->db->where('tbl_detail_bua_3.id_detail_bua_3', $id_detail_bua_3);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_bua_4($id_detail_bua_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_4');
        $this->db->where('tbl_detail_bua_4.id_detail_bua_4', $id_detail_bua_4);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_bua_5($id_detail_bua_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_5');
        $this->db->where('tbl_detail_bua_5.id_detail_bua_5', $id_detail_bua_5);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_bua_6($id_detail_bua_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_6');
        $this->db->where('tbl_detail_bua_6.id_detail_bua_6', $id_detail_bua_6);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_bua_7($id_detail_bua_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_7');
        $this->db->where('tbl_detail_bua_7.id_detail_bua_7', $id_detail_bua_7);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_bua_8($id_detail_bua_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_8');
        $this->db->where('tbl_detail_bua_8.id_detail_bua_8', $id_detail_bua_8);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_bua_9($id_detail_bua_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_9');
        $this->db->where('tbl_detail_bua_9.id_detail_bua_9', $id_detail_bua_9);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_bua_10($id_detail_bua_10)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_10');
        $this->db->where('tbl_detail_bua_10.id_detail_bua_10', $id_detail_bua_10);
        $query = $this->db->get();
        return $query->row_array();
    }
    // level created bua
    public function tambah_ke_tbl_detail_bua($data)
    {
        $this->db->insert('tbl_bua_detail', $data);
        return $this->db->affected_rows();
    }


    public function tambah_ke_tbl_detail_bua_1($data)
    {
        $this->db->insert('tbl_detail_bua_1', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_bua_2($data)
    {
        $this->db->insert('tbl_detail_bua_2', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_bua_3($data)
    {
        $this->db->insert('tbl_detail_bua_3', $data);
        return $this->db->affected_rows();
    }


    public function tambah_ke_tbl_detail_bua_4($data)
    {
        $this->db->insert('tbl_detail_bua_4', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_bua_5($data)
    {
        $this->db->insert('tbl_detail_bua_5', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_bua_6($data)
    {
        $this->db->insert('tbl_detail_bua_6', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_bua_7($data)
    {
        $this->db->insert('tbl_detail_bua_7', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_bua_8($data)
    {
        $this->db->insert('tbl_detail_bua_8', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_bua_9($data)
    {
        $this->db->insert('tbl_detail_bua_9', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_bua_10($data)
    {
        $this->db->insert('tbl_detail_bua_10', $data);
        return $this->db->affected_rows();
    }

    // update bua
    public function update_tbl_bua($where, $data)
    {
        $this->db->update('tbl_bua', $data, $where);
        $updatedId = $this->db->get('tbl_bua')->row_array();
        return $updatedId;
    }
    public function update_tbl_bua_detail($where, $data)
    {
        $this->db->update('tbl_bua_detail', $data, $where);
        $updatedId = $this->db->get('tbl_bua_detail')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_1($where, $data)
    {
        $this->db->update('tbl_detail_bua_1', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_1')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_2($where, $data)
    {
        $this->db->update('tbl_detail_bua_2', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_2')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_3($where, $data)
    {
        $this->db->update('tbl_detail_bua_3', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_3')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_4($where, $data)
    {
        $this->db->update('tbl_detail_bua_4', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_4')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_5($where, $data)
    {
        $this->db->update('tbl_detail_bua_5', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_5')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_6($where, $data)
    {
        $this->db->update('tbl_detail_bua_6', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_6')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_7($where, $data)
    {
        $this->db->update('tbl_detail_bua_7', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_7')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_8($where, $data)
    {
        $this->db->update('tbl_detail_bua_8', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_8')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_9($where, $data)
    {
        $this->db->update('tbl_detail_bua_9', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_9')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_bua_10($where, $data)
    {
        $this->db->update('tbl_detail_bua_10', $data, $where);
        $updatedId = $this->db->get('tbl_detail_bua_10')->row_array();
        return $updatedId;
    }

    // delete murni
    public function delete_tbl_bua_detail($id_bua_detail)
    {
        $this->db->delete('tbl_bua_detail', ['id_bua_detail' => $id_bua_detail]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_bua_1($id_detail_bua_1)
    {
        $this->db->delete('tbl_detail_bua_1', ['id_detail_bua_1' => $id_detail_bua_1]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_bua_2($id_detail_bua_2)
    {
        $this->db->delete('tbl_detail_bua_2', ['id_detail_bua_2' => $id_detail_bua_2]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_bua_3($id_detail_bua_3)
    {
        $this->db->delete('tbl_detail_bua_3', ['id_detail_bua_3' => $id_detail_bua_3]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_bua_4($id_detail_bua_4)
    {
        $this->db->delete('tbl_detail_bua_4', ['id_detail_bua_4' => $id_detail_bua_4]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_bua_5($id_detail_bua_5)
    {
        $this->db->delete('tbl_detail_bua_5', ['id_detail_bua_5' => $id_detail_bua_5]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_bua_6($id_detail_bua_6)
    {
        $this->db->delete('tbl_detail_bua_6', ['id_detail_bua_6' => $id_detail_bua_6]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_bua_7($id_detail_bua_7)
    {
        $this->db->delete('tbl_detail_bua_7', ['id_detail_bua_7' => $id_detail_bua_7]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_bua_8($id_detail_bua_8)
    {
        $this->db->delete('tbl_detail_bua_8', ['id_detail_bua_8' => $id_detail_bua_8]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_bua_9($id_detail_bua_9)
    {
        $this->db->delete('tbl_detail_bua_9', ['id_detail_bua_9' => $id_detail_bua_9]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_bua_10($id_detail_bua_10)
    {
        $this->db->delete('tbl_detail_bua_10', ['id_detail_bua_10' => $id_detail_bua_10]);
        return $this->db->affected_rows();
    }

    // delete triger

    public function delete_tbl_detail_bua_1($id_bua_detail)
    {
        $this->db->delete('tbl_detail_bua_1', ['id_bua_detail' => $id_bua_detail]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_bua_2($id_detail_bua_1)
    {
        $this->db->delete('tbl_detail_bua_2', ['id_detail_bua_1' => $id_detail_bua_1]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_bua_3($id_detail_bua_2)
    {
        $this->db->delete('tbl_detail_bua_3', ['id_detail_bua_2' => $id_detail_bua_2]);
        return $this->db->affected_rows();
    }


    public function delete_tbl_detail_bua_4($id_detail_bua_3)
    {
        $this->db->delete('tbl_detail_bua_4', ['id_detail_bua_3' => $id_detail_bua_3]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_bua_5($id_detail_bua_4)
    {
        $this->db->delete('tbl_detail_bua_5', ['id_detail_bua_4' => $id_detail_bua_4]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_bua_6($id_detail_bua_5)
    {
        $this->db->delete('tbl_detail_bua_6', ['id_detail_bua_5' => $id_detail_bua_5]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_bua_7($id_detail_bua_6)
    {
        $this->db->delete('tbl_detail_bua_7', ['id_detail_bua_6' => $id_detail_bua_6]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_bua_8($id_detail_bua_7)
    {
        $this->db->delete('tbl_detail_bua_8', ['id_detail_bua_7' => $id_detail_bua_7]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_bua_9($id_detail_bua_8)
    {
        $this->db->delete('tbl_detail_bua_9', ['id_detail_bua_8' => $id_detail_bua_8]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_bua_10($id_detail_bua_9)
    {
        $this->db->delete('tbl_detail_bua_10', ['id_detail_bua_9' => $id_detail_bua_9]);
        return $this->db->affected_rows();
    }





    // ========== BATAS sdm ==============

    // LOGIKA sdm FIX
    // by_sdm sdm
    // buat no_urut
    public function cek_not_urut_sdm_detail($id_sdm)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm_detail');
        $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_sdm_detail_1($id_sdm_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_1');
        $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_2($id_detail_sdm_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_2');
        $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_3($id_detail_sdm_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_3');
        $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_4($id_detail_sdm_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_4');
        $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_5($id_detail_sdm_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_5');
        $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_6($id_detail_sdm_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_6');
        $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_7($id_detail_sdm_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_7');
        $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_8($id_detail_sdm_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_8');
        $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_9($id_detail_sdm_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_9');
        $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
        return $this->db->count_all_results();
    }

    public function cek_not_urut_detail_sdm_10($id_detail_sdm_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_10');
        $this->db->where('tbl_detail_sdm_10.id_detail_sdm_9', $id_detail_sdm_9);
        return $this->db->count_all_results();
    }

    public function row_detail_sdm_by_id_sdm($id_sdm)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm_detail');
        $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function result_detail_sdm_by_id_sdm($id_sdm)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm_detail');
        $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
        $query = $this->db->get();
        return $query->result_array();
    }

    // by_id sdm
    public function by_id_sdm($id_sdm)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm');
        $this->db->where('tbl_sdm.id_sdm', $id_sdm);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_sdm_detail($id_sdm_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm_detail');
        $this->db->where('tbl_sdm_detail.id_sdm_detail', $id_sdm_detail);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_sdm_1($id_detail_sdm_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_1');
        $this->db->where('tbl_detail_sdm_1.id_detail_sdm_1', $id_detail_sdm_1);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_detail_sdm_2($id_detail_sdm_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_2');
        $this->db->where('tbl_detail_sdm_2.id_detail_sdm_2', $id_detail_sdm_2);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_sdm_3($id_detail_sdm_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_3');
        $this->db->where('tbl_detail_sdm_3.id_detail_sdm_3', $id_detail_sdm_3);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_detail_sdm_4($id_detail_sdm_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_4');
        $this->db->where('tbl_detail_sdm_4.id_detail_sdm_4', $id_detail_sdm_4);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_sdm_5($id_detail_sdm_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_5');
        $this->db->where('tbl_detail_sdm_5.id_detail_sdm_5', $id_detail_sdm_5);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_sdm_6($id_detail_sdm_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_6');
        $this->db->where('tbl_detail_sdm_6.id_detail_sdm_6', $id_detail_sdm_6);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_sdm_7($id_detail_sdm_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_7');
        $this->db->where('tbl_detail_sdm_7.id_detail_sdm_7', $id_detail_sdm_7);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_sdm_8($id_detail_sdm_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_8');
        $this->db->where('tbl_detail_sdm_8.id_detail_sdm_8', $id_detail_sdm_8);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_sdm_9($id_detail_sdm_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_9');
        $this->db->where('tbl_detail_sdm_9.id_detail_sdm_9', $id_detail_sdm_9);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_detail_sdm_10($id_detail_sdm_10)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_10');
        $this->db->where('tbl_detail_sdm_10.id_detail_sdm_10', $id_detail_sdm_10);
        $query = $this->db->get();
        return $query->row_array();
    }
    // level created sdm
    public function tambah_ke_tbl_detail_sdm($data)
    {
        $this->db->insert('tbl_sdm_detail', $data);
        return $this->db->affected_rows();
    }


    public function tambah_ke_tbl_detail_sdm_1($data)
    {
        $this->db->insert('tbl_detail_sdm_1', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_sdm_2($data)
    {
        $this->db->insert('tbl_detail_sdm_2', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_sdm_3($data)
    {
        $this->db->insert('tbl_detail_sdm_3', $data);
        return $this->db->affected_rows();
    }


    public function tambah_ke_tbl_detail_sdm_4($data)
    {
        $this->db->insert('tbl_detail_sdm_4', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_sdm_5($data)
    {
        $this->db->insert('tbl_detail_sdm_5', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_detail_sdm_6($data)
    {
        $this->db->insert('tbl_detail_sdm_6', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_sdm_7($data)
    {
        $this->db->insert('tbl_detail_sdm_7', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_sdm_8($data)
    {
        $this->db->insert('tbl_detail_sdm_8', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_sdm_9($data)
    {
        $this->db->insert('tbl_detail_sdm_9', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_detail_sdm_10($data)
    {
        $this->db->insert('tbl_detail_sdm_10', $data);
        return $this->db->affected_rows();
    }

    // update sdm
    public function update_tbl_sdm($where, $data)
    {
        $this->db->update('tbl_sdm', $data, $where);
        $updatedId = $this->db->get('tbl_sdm')->row_array();
        return $updatedId;
    }
    public function update_tbl_sdm_detail($where, $data)
    {
        $this->db->update('tbl_sdm_detail', $data, $where);
        $updatedId = $this->db->get('tbl_sdm_detail')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_1($where, $data)
    {
        $this->db->update('tbl_detail_sdm_1', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_1')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_2($where, $data)
    {
        $this->db->update('tbl_detail_sdm_2', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_2')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_3($where, $data)
    {
        $this->db->update('tbl_detail_sdm_3', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_3')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_4($where, $data)
    {
        $this->db->update('tbl_detail_sdm_4', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_4')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_5($where, $data)
    {
        $this->db->update('tbl_detail_sdm_5', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_5')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_6($where, $data)
    {
        $this->db->update('tbl_detail_sdm_6', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_6')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_7($where, $data)
    {
        $this->db->update('tbl_detail_sdm_7', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_7')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_8($where, $data)
    {
        $this->db->update('tbl_detail_sdm_8', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_8')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_9($where, $data)
    {
        $this->db->update('tbl_detail_sdm_9', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_9')->row_array();
        return $updatedId;
    }

    public function update_tbl_detail_sdm_10($where, $data)
    {
        $this->db->update('tbl_detail_sdm_10', $data, $where);
        $updatedId = $this->db->get('tbl_detail_sdm_10')->row_array();
        return $updatedId;
    }

    // delete murni
    public function delete_tbl_sdm_detail($id_sdm_detail)
    {
        $this->db->delete('tbl_sdm_detail', ['id_sdm_detail' => $id_sdm_detail]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_sdm_1($id_detail_sdm_1)
    {
        $this->db->delete('tbl_detail_sdm_1', ['id_detail_sdm_1' => $id_detail_sdm_1]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_sdm_2($id_detail_sdm_2)
    {
        $this->db->delete('tbl_detail_sdm_2', ['id_detail_sdm_2' => $id_detail_sdm_2]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_sdm_3($id_detail_sdm_3)
    {
        $this->db->delete('tbl_detail_sdm_3', ['id_detail_sdm_3' => $id_detail_sdm_3]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_sdm_4($id_detail_sdm_4)
    {
        $this->db->delete('tbl_detail_sdm_4', ['id_detail_sdm_4' => $id_detail_sdm_4]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_sdm_5($id_detail_sdm_5)
    {
        $this->db->delete('tbl_detail_sdm_5', ['id_detail_sdm_5' => $id_detail_sdm_5]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_sdm_6($id_detail_sdm_6)
    {
        $this->db->delete('tbl_detail_sdm_6', ['id_detail_sdm_6' => $id_detail_sdm_6]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_sdm_7($id_detail_sdm_7)
    {
        $this->db->delete('tbl_detail_sdm_7', ['id_detail_sdm_7' => $id_detail_sdm_7]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_detail_sdm_8($id_detail_sdm_8)
    {
        $this->db->delete('tbl_detail_sdm_8', ['id_detail_sdm_8' => $id_detail_sdm_8]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_sdm_9($id_detail_sdm_9)
    {
        $this->db->delete('tbl_detail_sdm_9', ['id_detail_sdm_9' => $id_detail_sdm_9]);
        return $this->db->affected_rows();
    }
    public function delete_murni_tbl_detail_sdm_10($id_detail_sdm_10)
    {
        $this->db->delete('tbl_detail_sdm_10', ['id_detail_sdm_10' => $id_detail_sdm_10]);
        return $this->db->affected_rows();
    }

    // delete triger

    public function delete_tbl_detail_sdm_1($id_sdm_detail)
    {
        $this->db->delete('tbl_detail_sdm_1', ['id_sdm_detail' => $id_sdm_detail]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_sdm_2($id_detail_sdm_1)
    {
        $this->db->delete('tbl_detail_sdm_2', ['id_detail_sdm_1' => $id_detail_sdm_1]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_sdm_3($id_detail_sdm_2)
    {
        $this->db->delete('tbl_detail_sdm_3', ['id_detail_sdm_2' => $id_detail_sdm_2]);
        return $this->db->affected_rows();
    }


    public function delete_tbl_detail_sdm_4($id_detail_sdm_3)
    {
        $this->db->delete('tbl_detail_sdm_4', ['id_detail_sdm_3' => $id_detail_sdm_3]);
        return $this->db->affected_rows();
    }

    public function delete_tbl_detail_sdm_5($id_detail_sdm_4)
    {
        $this->db->delete('tbl_detail_sdm_5', ['id_detail_sdm_4' => $id_detail_sdm_4]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_sdm_6($id_detail_sdm_5)
    {
        $this->db->delete('tbl_detail_sdm_6', ['id_detail_sdm_5' => $id_detail_sdm_5]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_sdm_7($id_detail_sdm_6)
    {
        $this->db->delete('tbl_detail_sdm_7', ['id_detail_sdm_6' => $id_detail_sdm_6]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_sdm_8($id_detail_sdm_7)
    {
        $this->db->delete('tbl_detail_sdm_8', ['id_detail_sdm_7' => $id_detail_sdm_7]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_sdm_9($id_detail_sdm_8)
    {
        $this->db->delete('tbl_detail_sdm_9', ['id_detail_sdm_8' => $id_detail_sdm_8]);
        return $this->db->affected_rows();
    }
    public function delete_tbl_detail_sdm_10($id_detail_sdm_9)
    {
        $this->db->delete('tbl_detail_sdm_10', ['id_detail_sdm_9' => $id_detail_sdm_9]);
        return $this->db->affected_rows();
    }






    // ININ UNTUK YANG BATAS UNIT PRICE
    // insert unit price
    public function tambah_ke_tbl_unit_price($data)
    {
        $this->db->insert('tbl_unit_price', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_unit_price_1($data)
    {
        $this->db->insert('tbl_unit_price_1', $data);
        return $this->db->affected_rows();
    }
    public function tambah_ke_tbl_unit_price_2($data)
    {
        $this->db->insert('tbl_unit_price_2', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_3($data)
    {
        $this->db->insert('tbl_unit_price_3', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_4($data)
    {
        $this->db->insert('tbl_unit_price_4', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_5($data)
    {
        $this->db->insert('tbl_unit_price_5', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_6($data)
    {
        $this->db->insert('tbl_unit_price_6', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_7($data)
    {
        $this->db->insert('tbl_unit_price_7', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_8($data)
    {
        $this->db->insert('tbl_unit_price_8', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_9($data)
    {
        $this->db->insert('tbl_unit_price_9', $data);
        return $this->db->affected_rows();
    }

    public function tambah_ke_tbl_unit_price_10($data)
    {
        $this->db->insert('tbl_unit_price_10', $data);
        return $this->db->affected_rows();
    }

    // no urut unit price
    public function cek_no_urut_tbl_unit_price($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price');
        $this->db->where('tbl_unit_price.id_kontrak', $id_kontrak);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_1($id_unit_price)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        return $this->db->count_all_results();
    }
    public function cek_no_urut_tbl_unit_price_2($id_unit_price_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_3($id_unit_price_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_4($id_unit_price_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_5($id_unit_price_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_6($id_unit_price_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        return $this->db->count_all_results();
    }
    public function cek_no_urut_tbl_unit_price_7($id_unit_price_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_8($id_unit_price_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_7', $id_unit_price_7);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_9($id_unit_price_10)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_9');
        $this->db->where('tbl_unit_price_9.id_unit_price_10', $id_unit_price_10);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_unit_price_10($id_unit_price_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_10');
        $this->db->where('tbl_unit_price_10.id_unit_price_9', $id_unit_price_9);
        return $this->db->count_all_results();
    }
    // by_id_unit_price
    public function by_id_unit_price($id_unit_price)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price');
        $this->db->where('tbl_unit_price.id_unit_price', $id_unit_price);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function by_id_unit_price_1($id_unit_price_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price_1', $id_unit_price_1);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_1($id_unit_price)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function by_id_unit_price_2($id_unit_price_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_2', $id_unit_price_2);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_result_unit_price_2($id_unit_price_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function by_id_unit_price_3($id_unit_price_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_3', $id_unit_price_3);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_3($id_unit_price_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function by_id_unit_price_4($id_unit_price_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_4', $id_unit_price_4);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_4($id_unit_price_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function by_id_unit_price_5($id_unit_price_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_5', $id_unit_price_5);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_5($id_unit_price_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function by_id_unit_price_6($id_unit_price_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_6', $id_unit_price_6);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_6($id_unit_price_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function by_id_unit_price_7($id_unit_price_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_7', $id_unit_price_7);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_7($id_unit_price_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function by_id_unit_price_8($id_unit_price_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_8', $id_unit_price_8);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_8($id_unit_price_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_7', $id_unit_price_7);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function by_id_unit_price_9($id_unit_price_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_9');
        $this->db->where('tbl_unit_price_9.id_unit_price_9', $id_unit_price_9);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_9($id_unit_price_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_9');
        $this->db->where('tbl_unit_price_9.id_unit_price_8', $id_unit_price_8);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function by_id_unit_price_10($id_unit_price_10)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_10');
        $this->db->where('tbl_unit_price_10.id_unit_price_10', $id_unit_price_10);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_result_unit_price_10($id_unit_price_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_10');
        $this->db->where('tbl_unit_price_10.id_unit_price_9', $id_unit_price_9);
        $query = $this->db->get();
        return $query->result_array();
    }
    // by id unit price triger
    public function by_id_unit_price_triger($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price');
        $this->db->where('tbl_unit_price.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_unit_price_1_triger($id_unit_price)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_1');
        $this->db->where('tbl_unit_price_1.id_unit_price', $id_unit_price);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_2_triger($id_unit_price_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_2');
        $this->db->where('tbl_unit_price_2.id_unit_price_1', $id_unit_price_1);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_3_triger($id_unit_price_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_3');
        $this->db->where('tbl_unit_price_3.id_unit_price_2', $id_unit_price_2);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_4_triger($id_unit_price_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_4');
        $this->db->where('tbl_unit_price_4.id_unit_price_3', $id_unit_price_3);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_5_triger($id_unit_price_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_5');
        $this->db->where('tbl_unit_price_5.id_unit_price_4', $id_unit_price_4);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_6_triger($id_unit_price_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_6');
        $this->db->where('tbl_unit_price_6.id_unit_price_5', $id_unit_price_5);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_7_triger($id_unit_price_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_7');
        $this->db->where('tbl_unit_price_7.id_unit_price_6', $id_unit_price_6);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_8_triger($id_unit_price_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_8');
        $this->db->where('tbl_unit_price_8.id_unit_price_7', $id_unit_price_7);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function by_id_unit_price_9_triger($id_unit_price_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_9');
        $this->db->where('tbl_unit_price_9.id_unit_price_8', $id_unit_price_8);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_id_unit_price_10_triger($id_unit_price_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_unit_price_10');
        $this->db->where('tbl_unit_price_10.id_unit_price_9', $id_unit_price_9);
        $query = $this->db->get();
        return $query->row_array();
    }

    // update
    public function update_ke_tbl_unit_price($where, $data)
    {
        $this->db->update('tbl_unit_price', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_1($where, $data)
    {
        $this->db->update('tbl_unit_price_1', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_2($where, $data)
    {
        $this->db->update('tbl_unit_price_2', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_3($where, $data)
    {
        $this->db->update('tbl_unit_price_3', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_4($where, $data)
    {
        $this->db->update('tbl_unit_price_4', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_5($where, $data)
    {
        $this->db->update('tbl_unit_price_5', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_6($where, $data)
    {
        $this->db->update('tbl_unit_price_6', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_7($where, $data)
    {
        $this->db->update('tbl_unit_price_7', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_8($where, $data)
    {
        $this->db->update('tbl_unit_price_8', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_9($where, $data)
    {
        $this->db->update('tbl_unit_price_9', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_unit_price_10($where, $data)
    {
        $this->db->update('tbl_unit_price_10', $data, $where);
        return $this->db->affected_rows();
    }
    // delete murni 
    public function delete_murni_tbl_unit_price($id_unit_price)
    {
        $this->db->delete('tbl_unit_price', ['id_unit_price' => $id_unit_price]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_1($id_unit_price_1)
    {
        $this->db->delete('tbl_unit_price_1', ['id_unit_price_1' => $id_unit_price_1]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_2($id_unit_price_2)
    {
        $this->db->delete('tbl_unit_price_2', ['id_unit_price_2' => $id_unit_price_2]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_3($id_unit_price_3)
    {
        $this->db->delete('tbl_unit_price_3', ['id_unit_price_3' => $id_unit_price_3]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_4($id_unit_price_4)
    {
        $this->db->delete('tbl_unit_price_4', ['id_unit_price_4' => $id_unit_price_4]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_5($id_unit_price_5)
    {
        $this->db->delete('tbl_unit_price_5', ['id_unit_price_5' => $id_unit_price_5]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_6($id_unit_price_6)
    {
        $this->db->delete('tbl_unit_price_6', ['id_unit_price_6' => $id_unit_price_6]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_7($id_unit_price_7)
    {
        $this->db->delete('tbl_unit_price_7', ['id_unit_price_7' => $id_unit_price_7]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_8($id_unit_price_8)
    {
        $this->db->delete('tbl_unit_price_8', ['id_unit_price_8' => $id_unit_price_8]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_9($id_unit_price_9)
    {
        $this->db->delete('tbl_unit_price_9', ['id_unit_price_9' => $id_unit_price_9]);
        return $this->db->affected_rows();
    }

    public function delete_murni_tbl_unit_price_10($id_unit_price_10)
    {
        $this->db->delete('tbl_unit_price_10', ['id_unit_price_10' => $id_unit_price_10]);
        return $this->db->affected_rows();
    }
    // delete triger
    public function delete_tbl_unit_price_1($id_unit_price)
    {
        $this->db->delete('tbl_unit_price_1', ['id_unit_price' => $id_unit_price]);
        return $this->db->affected_rows();
    }

    // delete triger
    // price_1
    public function delete_tbl_unit_price_2($id_unit_price_1)
    {
        $this->db->delete('tbl_unit_price_2', ['id_unit_price_1' => $id_unit_price_1]);
        return $this->db->affected_rows();
    }

    // price_2
    public function delete_tbl_unit_price_3($id_unit_price_2)
    {
        $this->db->delete('tbl_unit_price_3', ['id_unit_price_2' => $id_unit_price_2]);
        return $this->db->affected_rows();
    }


    // price_4
    // id_unit_price_3
    public function delete_tbl_unit_price_4($id_unit_price_3)
    {
        $this->db->delete('tbl_unit_price_4', ['id_unit_price_3' => $id_unit_price_3]);
        return $this->db->affected_rows();
    }


    // price_5
    // id_unit_price_4
    public function delete_tbl_unit_price_5($id_unit_price_4)
    {
        $this->db->delete('tbl_unit_price_5', ['id_unit_price_4' => $id_unit_price_4]);
        return $this->db->affected_rows();
    }


    // price_6
    // id_unit_price_5
    public function delete_tbl_unit_price_6($id_unit_price_5)
    {
        $this->db->delete('tbl_unit_price_6', ['id_unit_price_5' => $id_unit_price_5]);
        return $this->db->affected_rows();
    }


    // price_7
    // id_unit_price_6
    public function delete_tbl_unit_price_7($id_unit_price_6)
    {
        $this->db->delete('tbl_unit_price_7', ['id_unit_price_6' => $id_unit_price_6]);
        return $this->db->affected_rows();
    }


    // price_8
    // id_unit_price_9
    public function delete_tbl_unit_price_8($id_unit_price_9)
    {
        $this->db->delete('tbl_unit_price_8', ['id_unit_price_9' => $id_unit_price_9]);
        return $this->db->affected_rows();
    }

    // price_9
    // id_unit_price_8
    public function delete_tbl_unit_price_9($id_unit_price_8)
    {
        $this->db->delete('tbl_unit_price_9', ['id_unit_price_8' => $id_unit_price_8]);
        return $this->db->affected_rows();
    }


    // price_10
    // id_unit_price_9
    public function delete_tbl_unit_price_10($id_unit_price_9)
    {
        $this->db->delete('tbl_unit_price_10', ['id_unit_price_9' => $id_unit_price_9]);
        return $this->db->affected_rows();
    }





    // ini untuk insert merge adendum

    public function result_tbl_capex_detail_by_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $this->db->where('tbl_capex.id_addendum', null);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_tbl_capex_detail_by_id_capex($id_capex)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $this->db->where('tbl_capex.id_addendum', null);
        $query = $this->db->get();
        return $query->result_array();
    }

    // cek kontrak sduah ada
    public function cek_no_kontrak_sudah_ada($no_kontrak = null, $tahun_anggaran)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->where('mst_kontrak.tahun_anggaran', $tahun_anggaran);
        $this->db->like('mst_kontrak.no_kontrak', $no_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }



    // by kontrak capex
    public function by_kontrak_tbl_capex($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex');
        $this->db->where('tbl_capex.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_kontrak_tbl_capex_detail($id_capex)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query = $this->db->get();
        return $query->row_array();
    }
    // opex
    public function by_kontrak_tbl_opex($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex');
        $this->db->where('tbl_opex.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function by_kontrak_tbl_opex_detail($id_opex)
    {
        $this->db->select('*');
        $this->db->from('tbl_opex_detail');
        $this->db->where('tbl_opex_detail.id_opex', $id_opex);
        $query = $this->db->get();
        return $query->row_array();
    }
    // bua
    public function by_kontrak_tbl_bua($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua');
        $this->db->where('tbl_bua.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_bua($where, $data)
    {
        $this->db->update('tbl_bua', $data, $where);
        return $this->db->affected_rows();
    }

    public function by_kontrak_tbl_bua_detail($id_bua)
    {
        $this->db->select('*');
        $this->db->from('tbl_bua_detail');
        $this->db->where('tbl_bua_detail.id_bua', $id_bua);
        $query = $this->db->get();
        return $query->row_array();
    }

    // sdm
    public function by_kontrak_tbl_sdm($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm');
        $this->db->where('tbl_sdm.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_sdm($where, $data)
    {
        $this->db->update('tbl_sdm', $data, $where);
        return $this->db->affected_rows();
    }

    public function by_kontrak_tbl_sdm_detail($id_sdm)
    {
        $this->db->select('*');
        $this->db->from('tbl_sdm_detail');
        $this->db->where('tbl_sdm_detail.id_sdm', $id_sdm);
        $query = $this->db->get();
        return $query->row_array();
    }

    // INI UNTUK ADMINISTRASI DATA
    public function add_sub_program($data)
    {
        $this->db->insert('tbl_sub_detail_program_penyedia_jasa', $data);
        return $this->db->affected_rows();
    }

    public function update_rup($where, $data)
    {
        $this->db->update('tbl_detail_program_penyedia_jasa', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_rup_ke_sub_detail_program_penyedia_jasa($where, $data)
    {
        $this->db->update('tbl_sub_detail_program_penyedia_jasa', $data, $where);
        return $this->db->affected_rows();
    }
    public function get_sub_program_penyedia_jasa($id_detail_sub_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function get_sub_program_by_id_detail_program($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.status_mata_anggaran_addendum', 0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_sub_program($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_rekap_hps($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_hps');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_hps.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_hps.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }


    var $table_list_mata_anggran = 'tbl_list_mata_anggran';
    var $order_mata_anggran = array('id_list_mata_anggaran', 'nilai_program_mata_anggran', 'id_list_mata_anggaran');

    private function _get_data_query_mata_anggran($id_kontrak)
    {
        $this->db->from($this->table_list_mata_anggran);
        $this->db->where('id_kontrak', $id_kontrak);
        $i = 0;
        foreach ($this->order_mata_anggran as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable_list_mata_anggran mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order_mata_anggran) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_list_mata_anggaran', 'DESC');
        }
    }

    public function getdatatable_list_mata_anggran($id_kontrak) //nam[ilin data pake ini
    {
        $this->_get_data_query_mata_anggran($id_kontrak); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_data_mata_anggran($id_kontrak)
    {
        $this->_get_data_query_mata_anggran($id_kontrak); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data_mata_anggran($id_kontrak)
    {
        $this->_get_data_query_mata_anggran($id_kontrak);
        return $this->db->count_all_results();
    }


    public function delete_tbl_list_mata_anggran($id_kontrak)
    {
        $this->db->delete('tbl_list_mata_anggran', ['id_kontrak' => $id_kontrak]);
        return $this->db->affected_rows();
    }



    // inin utnuk hps table

    var $tbl_hps_kontrak_penyedia_jasa = 'tbl_hps_kontrak_penyedia_jasa';
    var $order_hps = array('id_hps_kontrak_penyedia_jasa', 'no_hps',  'uraian_hps',  'satuan_hps',  'volume_hps', 'harga_satuan_hps', 'id_hps_kontrak_penyedia_jasa');

    private function _get_data_queryhps($id_detail_sub_program_penyedia_jasa)
    {
        $this->db->from($this->tbl_hps_kontrak_penyedia_jasa);
        $this->db->where('id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $i = 0;
        foreach ($this->order_hps as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatbl_hps_kontrak_penyedia_jasa mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order_hps) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_hps_kontrak_penyedia_jasa', 'ASC');
        }
    }

    public function getdatatable_hps($id_detail_sub_program_penyedia_jasa) //nam[ilin data pake ini
    {
        $this->_get_data_queryhps($id_detail_sub_program_penyedia_jasa); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_datahps($id_detail_sub_program_penyedia_jasa)
    {
        $this->_get_data_queryhps($id_detail_sub_program_penyedia_jasa); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_datahps($id_detail_sub_program_penyedia_jasa)
    {
        $this->_get_data_queryhps($id_detail_sub_program_penyedia_jasa);
        return $this->db->count_all_results();
    }



    public function delete_list_anggaran($id_checking, $cek_add)
    {
        $this->db->delete('tbl_list_mata_anggran', [
            'id_checking' => $id_checking,
            'no_add' => $cek_add
        ]);
        return $this->db->affected_rows();
    }

    public function getByid_detail_program_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_departemen', 'tbl_detail_program_penyedia_jasa.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'tbl_detail_program_penyedia_jasa.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'tbl_detail_program_penyedia_jasa.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function get_spm()
    {
        $this->db->select('*');
        $this->db->from('tbl_spm_subtansi');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_detail_smp($id_detail_program_penyedia_jasa, $id_spm)
    {
        $this->db->select('*');
        $this->db->from('tbl_spm_detail');
        $this->db->where('tbl_spm_detail.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_spm_detail.id_spm', $id_spm);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_result_detail_smp($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_spm_detail');
        $this->db->where('tbl_spm_detail.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->join('tbl_spm_subtansi', 'tbl_spm_detail.id_spm = tbl_spm_subtansi.id_spm', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }





    public function add_spm_detail($data)
    {
        $this->db->insert('tbl_spm_detail', $data);
        return $this->db->affected_rows();
    }



    public function delete_spm($data_delete)
    {
        $this->db->delete('tbl_spm_detail', $data_delete);
    }



    public function tambah_addendum_kontrak_penyedia_jasa($data)
    {
        $this->db->insert('tbl_addendum_kontrak_penyedia_jasa', $data);
        return $this->db->affected_rows();
    }


    // inin utnuk Addendum Kontrak Penyedia Jasa Table

    var $tbl_addendum_kontrak_penyedia_jasa = 'tbl_addendum_kontrak_penyedia_jasa';
    var $order__addendum_kontrak_penyedia_jasa = array('id_addendum', 'no_addendum',  'nama_addendum',  'nilai_addendum',  'volume__addendum_kontrak_penyedia_jasa', 'tanggal_addendum', 'id_addendum');

    private function _get_data_query_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $this->db->from($this->tbl_addendum_kontrak_penyedia_jasa);
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $i = 0;
        foreach ($this->order__addendum_kontrak_penyedia_jasa as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatbl_addendum_kontrak_penyedia_jasa mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order__addendum_kontrak_penyedia_jasa) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_addendum', 'ASC');
        }
    }

    public function getdatatable__addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa) //nam[ilin data pake ini
    {
        $this->_get_data_query_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_data_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $this->_get_data_query_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa)
    {
        $this->_get_data_query_addendum_kontrak_penyedia_jasa($id_detail_program_penyedia_jasa);
        return $this->db->count_all_results();
    }
    // ADMINISTRASI KONTRAK MODUL 4
    public function table_result_bapp($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_bapp');
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function table_row_bapp($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_bapp');
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function tambah_bapp($data)
    {
        $this->db->insert('tbl_bapp', $data);
        return $this->db->affected_rows();
    }

    public function update_bapp($where, $data)
    {
        $this->db->update('tbl_bapp', $data, $where);
        return $this->db->affected_rows();
    }

    // row_mc

    public function row_mc($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('tbl_mc.id_mc', $id_mc);
        $this->db->order_by('id_mc', 'DESC');
        $data = $this->db->get();
        return $data->row_array();
    }


    // sub_program
    public function get_row_sub_program($id_detail_sub_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }

    // inin utnuk Addendum Kontrak Penyedia Jasa Table

    var $tbl_addendum_pq = 'tbl_addendum_pq';
    var $order__addendum_kontrak_penyedia_jasa_pq = array('id_addendum', 'no_addendum',  'nama_addendum',  'nilai_addendum',  'volume__addendum_kontrak_penyedia_jasa', 'tanggal_addendum', 'id_addendum');

    private function _get_data_query_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa)
    {
        $this->db->from($this->tbl_addendum_pq);
        $this->db->where('id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $i = 0;
        foreach ($this->order__addendum_kontrak_penyedia_jasa_pq as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatbl_addendum_pq mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order__addendum_kontrak_penyedia_jasa_pq) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_addendum', 'ASC');
        }
    }

    public function getdatatable__addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa) //nam[ilin data pake ini
    {
        $this->_get_data_query_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_data_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa)
    {
        $this->_get_data_query_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa)
    {
        $this->_get_data_query_addendum_kontrak_penyedia_jasa_pq($id_detail_sub_program_penyedia_jasa);
        return $this->db->count_all_results();
    }


    public function save_addendum_pq($data)
    {
        $this->db->insert('tbl_addendum_pq', $data);
        return $this->db->affected_rows();
    }


    // update addendum_pq
    public function update_ke_sub_program($where, $data)
    {
        $this->db->update('tbl_sub_detail_program_penyedia_jasa', $data, $where);
        return $this->db->affected_rows();
    }


    // tbl_nilai_kontrak_penyedia

    public function get_result_nilai_kontrak_penyedia($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_nilai_kontrak_penyedia');
        $this->db->where('tbl_nilai_kontrak_penyedia.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function get_result_nilai_kontrak_penyedia_mc($id_detail_program_penyedia_jasa, $cek_kontrak_penyedia)
    {
        $this->db->select('*');
        $this->db->from('tbl_nilai_kontrak_penyedia');
        $this->db->where('tbl_nilai_kontrak_penyedia.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_nilai_kontrak_penyedia.status_nilai_kontrak', $cek_kontrak_penyedia);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function by_id_nilai_kontrak($id_nilai_kontrak_penyedia)
    {
        $this->db->select('*');
        $this->db->from('tbl_nilai_kontrak_penyedia');
        $this->db->where('tbl_nilai_kontrak_penyedia.id_nilai_kontrak_penyedia', $id_nilai_kontrak_penyedia);
        $data = $this->db->get();
        return $data->row_array();
    }

    public function save_nilai_kontrak_penyedia_jasa($data)
    {
        $this->db->insert('tbl_nilai_kontrak_penyedia', $data);
        return $this->db->affected_rows();
    }


    // get sub program where detail program

    public function get_sub_program($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.status_mata_anggaran_addendum', 0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_sub_program_tambahan_anggaran($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_nilai_kontrak_penyedia_jasa($where, $data)
    {
        $this->db->update('tbl_nilai_kontrak_penyedia', $data, $where);
        return $this->db->affected_rows();
    }
    // LINE 1 LOGIC ADDENDUM PENYEDIA
    // hps_penyedia_1
    public function cek_no_urut_tbl_hps_penyedia_1($id_detail_program_penyedia_jasa, $id_detail_sub_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_1');
        $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        return $this->db->count_all_results();
    }


    public function get_hps_penyedia_1($id_hps_penyedia_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_1');
        $this->db->where('tbl_hps_penyedia_1.id_hps_penyedia_1', $id_hps_penyedia_1);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_result_hps_penyedia_1($id_detail_program_penyedia_jasa, $id_detail_sub_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_1');
        $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function create_tbl_hps_penyedia_1($data)
    {
        $this->db->insert('tbl_hps_penyedia_1', $data);
        return $this->db->affected_rows();
    }
    public function update_tbl_hps_penyedia_1($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_1', $data, $where);
        return $this->db->affected_rows();
    }

    // hps_penyedia_kontrak_1
    public function get_hps_penyedia_kontrak_1($id_hps_penyedia_kontrak_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_1');
        $this->db->where('tbl_hps_penyedia_kontrak_1.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
        $query = $this->db->get();
        return $query->row_array();
    }
    // LINE 2 LOGIC ADDENDUM PENYEDIA
    // hps_penyedia_2
    public function cek_no_urut_tbl_hps_penyedia_2($id_hps_penyedia_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_2');
        $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
        return $this->db->count_all_results();
    }

    public function get_hps_penyedia_2($id_hps_penyedia_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_2');
        $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_2', $id_hps_penyedia_2);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function create_tbl_hps_penyedia_2($data)
    {
        $this->db->insert('tbl_hps_penyedia_2', $data);
        return $this->db->affected_rows();
    }
    // 2
    public function update_tbl_hps_penyedia_2($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_2', $data, $where);
        return $this->db->affected_rows();
    }


    // hps_penyedia_kontrak_2
    // 2
    public function get_hps_penyedia_kontrak_2($id_hps_penyedia_kontrak_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_2');
        $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function create_tbl_hps_penyedia_kontrak_2($data)
    {
        $this->db->insert('tbl_hps_penyedia_kontrak_2', $data);
        return $this->db->affected_rows();
    }
    public function update_tbl_hps_penyedia_kontrak_2($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_2', $data, $where);
        return $this->db->affected_rows();
    }

    public function create_tbl_hps_penyedia_kontrak_1($data)
    {
        $this->db->insert('tbl_hps_penyedia_kontrak_1', $data);
        return $this->db->affected_rows();
    }
    public function update_tbl_hps_penyedia_kontrak_1($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_1', $data, $where);
        return $this->db->affected_rows();
    }

    // LINE 3 LOGIC ADDENDUM PENYEDIA
    // _3
    //  _2
    // hps_penyedia_3
    public function cek_no_urut_tbl_hps_penyedia_3($id_hps_penyedia_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_3');
        $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
        return $this->db->count_all_results();
    }

    public function get_hps_penyedia_3($id_hps_penyedia_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_3');
        $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_3', $id_hps_penyedia_3);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function create_tbl_hps_penyedia_3($data)
    {
        $this->db->insert('tbl_hps_penyedia_3', $data);
        return $this->db->affected_rows();
    }
    // 3
    public function update_tbl_hps_penyedia_3($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_3', $data, $where);
        return $this->db->affected_rows();
    }

    // hps_penyedia_kontrak_3
    // 3
    public function get_hps_penyedia_kontrak_3($id_hps_penyedia_kontrak_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_3');
        $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function create_tbl_hps_penyedia_kontrak_3($data)
    {
        $this->db->insert('tbl_hps_penyedia_kontrak_3', $data);
        return $this->db->affected_rows();
    }
    public function update_tbl_hps_penyedia_kontrak_3($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_3', $data, $where);
        return $this->db->affected_rows();
    }



    // LINE 4 LOGIC ADDENDUM PENYEDIA
    // _4
    //  _3
    // hps_penyedia_4
    public function cek_no_urut_tbl_hps_penyedia_4($id_hps_penyedia_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_4');
        $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
        return $this->db->count_all_results();
    }

    public function get_hps_penyedia_4($id_hps_penyedia_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_4');
        $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_4', $id_hps_penyedia_4);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function create_tbl_hps_penyedia_4($data)
    {
        $this->db->insert('tbl_hps_penyedia_4', $data);
        return $this->db->affected_rows();
    }
    // 4
    public function update_tbl_hps_penyedia_4($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_4', $data, $where);
        return $this->db->affected_rows();
    }

    // hps_penyedia_kontrak_4
    // 4
    public function get_hps_penyedia_kontrak_4($id_hps_penyedia_kontrak_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_4');
        $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function create_tbl_hps_penyedia_kontrak_4($data)
    {
        $this->db->insert('tbl_hps_penyedia_kontrak_4', $data);
        return $this->db->affected_rows();
    }
    public function update_tbl_hps_penyedia_kontrak_4($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_4', $data, $where);
        return $this->db->affected_rows();
    }


    // LINE 4 LOGIC ADDENDUM PENYEDIA
    // _5
    //  _4
    // hps_penyedia_5
    public function cek_no_urut_tbl_hps_penyedia_5($id_hps_penyedia_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_5');
        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
        return $this->db->count_all_results();
    }

    public function get_hps_penyedia_5($id_hps_penyedia_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_5');
        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_5', $id_hps_penyedia_5);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function create_tbl_hps_penyedia_5($data)
    {
        $this->db->insert('tbl_hps_penyedia_5', $data);
        return $this->db->affected_rows();
    }
    // 5
    public function update_tbl_hps_penyedia_5($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_5', $data, $where);
        return $this->db->affected_rows();
    }

    // hps_penyedia_kontrak_5
    // 5
    public function get_hps_penyedia_kontrak_5($id_hps_penyedia_kontrak_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_5');
        $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_5', $id_hps_penyedia_kontrak_5);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function create_tbl_hps_penyedia_kontrak_5($data)
    {
        $this->db->insert('tbl_hps_penyedia_kontrak_5', $data);
        return $this->db->affected_rows();
    }
    public function update_tbl_hps_penyedia_kontrak_5($data, $where)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_5', $data, $where);
        return $this->db->affected_rows();
    }

    // BATAS AKHIR
    public function get_addendum_by_result_penyedia_kontrak($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_addendum_by_id_penyedia_kontrak($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_addendum_penyedia_kontrak($data)
    {
        $this->db->insert('tbl_hps_penyedia_kontrak_addendum', $data);
        return $this->db->affected_rows();
    }

    public function update_tbl_hps_penyedia_kontrak_1_addendum($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_1', $data, $where);
        $updatedId = $this->db->get('tbl_hps_penyedia_kontrak_1')->row_array();
        return $updatedId;
    }

    public function update_tbl_hps_penyedia_kontrak_2_addendum($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_2', $data, $where);
        $updatedId = $this->db->get('tbl_hps_penyedia_kontrak_2')->row_array();
        return $updatedId;
    }

    // 3
    public function update_tbl_hps_penyedia_kontrak_3_addendum($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_3', $data, $where);
        $updatedId = $this->db->get('tbl_hps_penyedia_kontrak_3')->row_array();
        return $updatedId;
    }
    // 4
    public function update_tbl_hps_penyedia_kontrak_4_addendum($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_4', $data, $where);
        $updatedId = $this->db->get('tbl_hps_penyedia_kontrak_4')->row_array();
        return $updatedId;
    }

    // 5
    public function update_tbl_hps_penyedia_kontrak_5_addendum($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_5', $data, $where);
        $updatedId = $this->db->get('tbl_hps_penyedia_kontrak_5')->row_array();
        return $updatedId;
    }

    // ini untuuk row  hps penyedia 
    public function get_hps_penyedia_1_result($id_hps_penyedia_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_1');
        $this->db->where('tbl_hps_penyedia_1.id_hps_penyedia_1', $id_hps_penyedia_1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_hps_penyedia_2_result($id_hps_penyedia_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_2');
        $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_2', $id_hps_penyedia_2);
        $query = $this->db->get();
        return $query->result_array();
    }
    // 3
    public function get_hps_penyedia_3_result($id_hps_penyedia_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_3');
        $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_3', $id_hps_penyedia_3);
        $query = $this->db->get();
        return $query->result_array();
    }
    // 4
    public function get_hps_penyedia_4_result($id_hps_penyedia_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_4');
        $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_4', $id_hps_penyedia_4);
        $query = $this->db->get();
        return $query->result_array();
    }
    // 5
    public function get_hps_penyedia_5_result($id_hps_penyedia_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_5');
        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_5', $id_hps_penyedia_5);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_hps_penyedia_2_result_total_harga($id_hps_penyedia_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_2');
        $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
        $query = $this->db->get();
        return $query->result_array();
    }
    // 3
    // 2
    public function get_hps_penyedia_3_result_total_harga($id_hps_penyedia_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_3');
        $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 4
    // 3
    public function get_hps_penyedia_4_result_total_harga($id_hps_penyedia_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_4');
        $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 5
    // 4
    public function get_hps_penyedia_5_result_total_harga($id_hps_penyedia_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_5');
        $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
        $query = $this->db->get();
        return $query->result_array();
    }





    public function get_hps_penyedia_kontrak_2_result_total_harga($id_hps_penyedia_kontrak_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_2');
        $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
        $query = $this->db->get();
        return $query->result_array();
    }
    // 3
    // 2
    public function get_hps_penyedia_kontrak_3_result_total_harga($id_hps_penyedia_kontrak_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_3');
        $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 4
    // 3
    public function get_hps_penyedia_kontrak_4_result_total_harga($id_hps_penyedia_kontrak_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_4');
        $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 5
    // 4
    public function get_hps_penyedia_kontrak_5_result_total_harga($id_hps_penyedia_kontrak_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_5');
        $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
        $query = $this->db->get();
        return $query->result_array();
    }



    // cek multiyesr

    public function cek_ke_tbl_multiyers($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_multiyers');
        $this->db->where('tbl_multiyers.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_ke_tbl_multiyers($data)
    {
        $this->db->insert('tbl_multiyers', $data);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_multiyers($where, $data)
    {
        $this->db->update('tbl_multiyers', $data, $where);
        return $this->db->affected_rows();
    }
    public function delete_ke_tbl_multiyers($id_detail_program_penyedia_jasa)
    {
        $this->db->delete('tbl_multiyers', ['id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa]);
        return $this->db->affected_rows();
    }


    public function delete_by_id_multi_years_ke_tbl_multiyers($id_multi_years)
    {
        $this->db->delete('tbl_multiyers', ['id_multi_years' => $id_multi_years]);
        return $this->db->affected_rows();
    }
    public function get_result_detail_multiyears($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_multiyers');
        $this->db->where('tbl_multiyers.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    // alasan teknis_pip
    public function get_result_detail_teknis($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_alasan_teknis_pip');
        $this->db->where('tbl_alasan_teknis_pip.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function add_ke_tbl_alasan_teknis_pip($data)
    {
        $this->db->insert('tbl_alasan_teknis_pip', $data);
        return $this->db->affected_rows();
    }

    public function delete_ke_tbl_alasan_teknis_pip($id_alasan_teknis)
    {
        $this->db->delete('tbl_alasan_teknis_pip', ['id_alasan_teknis' => $id_alasan_teknis]);
        return $this->db->affected_rows();
    }

    // alasan administrasi_pip

    public function get_result_detail_administrasi($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_alasan_administrasi_pip');
        $this->db->where('tbl_alasan_administrasi_pip.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_ke_tbl_alasan_administrasi_pip($data)
    {
        $this->db->insert('tbl_alasan_administrasi_pip', $data);
        return $this->db->affected_rows();
    }

    public function delete_ke_tbl_alasan_administrasi_pip($id_alasan_administrasi)
    {
        $this->db->delete('tbl_alasan_administrasi_pip', ['id_alasan_administrasi' => $id_alasan_administrasi]);
        return $this->db->affected_rows();
    }

    public function count_multi_yeras($id_detail_program_penyedia_jasa)
    {
        $this->db->from('tbl_multiyers');
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        return $this->db->count_all_results();
    }

    // INI UNTUK DOK PENUNJANG
    var $pdf_hps_order = array('id_dokumen_penunjang', 'file_dokumen_penunjang', 'id_dokumen_penunjang');
    private function _get_dok_penunjang($id_kontrak, $sts_dokumen)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_penunjang');
        $this->db->where('id_kontrak', $id_kontrak);
        $this->db->where('sts_dokumen', $sts_dokumen);
        $i = 0;
        foreach ($this->pdf_hps_order as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->pdf_hps_order) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->pdf_hps_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_dokumen_penunjang', 'DESC');
        }
    }

    public function get_data_dok_penunjang($id_kontrak, $sts_dokumen) //nam[ilin data pake ini
    {
        $this->_get_dok_penunjang($id_kontrak, $sts_dokumen); //ambil data dari get yg di atas
        if ($_POST['length'] != -3) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_get_data_dok_penunjang($id_kontrak, $sts_dokumen)
    {
        $this->_get_dok_penunjang($id_kontrak, $sts_dokumen); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function count_all_get_data_dok_penunjang($id_kontrak, $sts_dokumen)
    {
        $this->db->from('tbl_dokumen_penunjang');
        $this->db->where('id_kontrak', $id_kontrak);
        $this->db->where('sts_dokumen', $sts_dokumen);
        return $this->db->count_all_results();
    }


    // INI UNTUK DOK PENUNJANG
    var $pdf_dok_pasca_baru = array('id_dokumen_pasca', 'file_dok', 'id_dokumen_pasca');
    private function _get_dok_pasca_baru($id_kontrak, $id_detail_program_penyedia_jasa, $type_dok)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_pasca');
        $this->db->where('id_kontrak', $id_kontrak);
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('type_dok', $type_dok);
        $i = 0;
        foreach ($this->pdf_dok_pasca_baru as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->pdf_dok_pasca_baru) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->pdf_dok_pasca_baru[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_dokumen_pasca', 'DESC');
        }
    }

    public function get_dokumen_pasca_baru($id_kontrak, $id_detail_program_penyedia_jasa, $type_dok) //nam[ilin data pake ini
    {
        $this->_get_dok_pasca_baru($id_kontrak, $id_detail_program_penyedia_jasa, $type_dok); //ambil data dari get yg di atas
        if ($_POST['length'] != -3) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_get_dokumen_pasca_baru($id_kontrak, $id_detail_program_penyedia_jasa, $type_dok)
    {
        $this->_get_dok_pasca_baru($id_kontrak, $id_detail_program_penyedia_jasa, $type_dok); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function count_all_get_dokumen_pasca_baru($id_kontrak, $id_detail_program_penyedia_jasa, $type_dok)
    {
        $this->db->from('tbl_dokumen_pasca');
        $this->db->where('id_kontrak', $id_kontrak);
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('type_dok', $type_dok);
        return $this->db->count_all_results();
    }


    public function create_dok_pasca_baru($data)
    {
        $this->db->insert('tbl_dokumen_pasca', $data);
        return $this->db->affected_rows();
    }

    public function deletedata_dok_pasca_baru($id_dokumen_pasca)
    {
        $this->db->delete('tbl_dokumen_pasca', ['id_dokumen_pasca' => $id_dokumen_pasca]);
    }



    public function create_dok_penunjang($data)
    {
        $this->db->insert('tbl_dokumen_penunjang', $data);
        return $this->db->affected_rows();
    }

    public function deletedata_dok_penunjang($id_dokumen_penunjang)
    {
        $this->db->delete('tbl_dokumen_penunjang', ['id_dokumen_penunjang' => $id_dokumen_penunjang]);
    }




    public function delete_addendum($where)
    {
        $this->db->where($where);
        $this->db->delete('table_adendum');
    }



    public function select_max_addendum($id_kontrak)
    {
        $this->db->select_max('CAST(no_adendum AS UNSIGNED)', 'max_value');
        $this->db->from('table_adendum');
        $this->db->where('id_kontrak', $id_kontrak);
        $query = $this->db->get();
        $result = $query->row()->max_value;
        return $result;
    }

    public function select_max_addendum_row($row_max_add, $id_kontrak)
    {

        $this->db->select('*');
        $this->db->from('table_adendum');
        $this->db->where('id_kontrak', $id_kontrak);
        $this->db->where('no_adendum', $row_max_add);
        $query = $this->db->get();
        return $query->row_array();
    }

    // addendum administarsi trakhir
    public function get_row_addendum_administrasi_terakhir($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->order_by('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', 'ASC');
        $query = $this->db->get();
        return $query->row_array();
    }


    public function getByid_detail_program_penyedia_jasa_get_nilai_kontrak_addendum($id_detail_program_penyedia_jasa, $addendum)
    {
        $logic = 'total_kontrak_addendum_' . $addendum . '';
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_detail_program_penyedia_jasa.' . $logic . ' !=', null);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_area($id_area)
    {
        $this->db->select('*');
        $this->db->from('mst_area');
        $this->db->where('mst_area.id_area', $id_area);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_departemen($id_departemen)
    {
        $this->db->select('*');
        $this->db->from('mst_departemen');
        $this->db->where('mst_departemen.id_departemen', $id_departemen);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_departemen_all()
    {
        $this->db->select('*');
        $this->db->from('mst_departemen');
        $this->db->where('mst_departemen.nama_departemen !=', 'admin');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_sub_area($id_sub_area)
    {
        $this->db->select('*');
        $this->db->from('mst_sub_area');
        $this->db->where('mst_sub_area.id_sub_area', $id_sub_area);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_sub_by_area($id_area)
    {
        $this->db->select('*');
        $this->db->from('mst_sub_area');
        $this->db->where('mst_sub_area.id_area', $id_area);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_area_by_departemen($id_departemen)
    {
        $this->db->select('*');
        $this->db->from('mst_area');
        $this->db->where('mst_area.id_departemen', $id_departemen);
        $query = $this->db->get();
        return $query->result_array();
    }



    public function get_hps_traking()
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_1');
        $this->db->like('tbl_hps_penyedia_1.uraian_hps', 'Lapis Perekat (Tack Coat)');
        $this->db->where('tbl_hps_penyedia_1.satuan_hps !=', null);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_hps_traking_2()
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_2');
        $this->db->like('tbl_hps_penyedia_2.uraian_hps', 'Lapis Perekat (Tack Coat)');
        $this->db->where('tbl_hps_penyedia_2.satuan_hps !=', null);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_hps_traking_3()
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_3');
        $this->db->like('tbl_hps_penyedia_3.uraian_hps', 'Lapis Perekat (Tack Coat)');
        $this->db->where('tbl_hps_penyedia_3.satuan_hps !=', null);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_hps_traking_kontrak()
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_1');
        $this->db->like('tbl_hps_penyedia_kontrak_1.uraian_hps', 'Lapis Perekat (Tack Coat)');
        $this->db->where('tbl_hps_penyedia_kontrak_1.satuan_hps !=', null);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_hps_traking_kontrak_2()
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_2');
        $this->db->like('tbl_hps_penyedia_kontrak_2.uraian_hps', 'Lapis Perekat (Tack Coat)');
        $this->db->where('tbl_hps_penyedia_kontrak_2.satuan_hps !=', null);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_hps_traking_kontrak_3()
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_3');
        $this->db->like('tbl_hps_penyedia_kontrak_3.uraian_hps', 'Lapis Perekat (Tack Coat)');
        $this->db->where('tbl_hps_penyedia_kontrak_3.satuan_hps !=', null);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function cek_tbl_monitoring($id_detail_program_penyedia_jasa, $flow)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pra');
        $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pra.flow', $flow);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_tbl_monitoring_pip($id_detail_program_penyedia_jasa, $flow)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pra');
        $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pra.flow', $flow);
        $this->db->where('tbl_dokumen_surat_pra.jenis', 'Ip');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_tbl_monitoring_hps($id_detail_program_penyedia_jasa, $flow)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pra');
        $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pra.flow', $flow);
        $this->db->where('tbl_dokumen_surat_pra.jenis', 'Hps');
        $query = $this->db->get();
        return $query->result_array();
    }



    public function cek_tbl_monitoring_nota_dinas($id_detail_program_penyedia_jasa, $flow)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pra');
        $this->db->where('tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pra.flow', $flow);
        $this->db->where('tbl_dokumen_surat_pra.jenis', 'Nota Dinas');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_row_id_dokumen_surat_pra($id_dokumen_surat_pra)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pra');
        $this->db->where('tbl_dokumen_surat_pra.id_dokumen_surat_pra', $id_dokumen_surat_pra);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function insert_ke_tbl_dokumen_surat_pra($data)
    {
        $this->db->insert('tbl_dokumen_surat_pra', $data);
        return $this->db->affected_rows();
    }

    public function delete_flow_1($id_detail_program_penyedia_jasa)
    {
        $this->db->where('flow', 'Flow 1');
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->delete('tbl_dokumen_surat_pra');
        return $this->db->affected_rows();
    }

    public function delete_flow_2($id_detail_program_penyedia_jasa)
    {
        $this->db->where('flow', 'Flow 2');
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->delete('tbl_dokumen_surat_pra');
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_dokumen_surat_pra($where, $data)
    {
        $this->db->update('tbl_dokumen_surat_pra', $data, $where);
        return $this->db->affected_rows();
    }


    // pasca
    public function cek_tbl_dokumen_surat_pasca($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pasca');
        $this->db->where('tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_tbl_monitoring_gunning($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pasca');
        $this->db->where('tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pasca.nama_file', 'Gunning');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_tbl_monitoring_loi($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pasca');
        $this->db->where('tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pasca.nama_file', 'Loi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_tbl_monitoring_sho($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pasca');
        $this->db->where('tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pasca.nama_file', 'Sho');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_tbl_monitoring_spmk($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pasca');
        $this->db->where('tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_dokumen_surat_pasca.nama_file', 'Spmk');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert_ke_tbl_dokumen_surat_pasca($data)
    {
        $this->db->insert('tbl_dokumen_surat_pasca', $data);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_dokumen_surat_pasca($where, $data)
    {
        $this->db->update('tbl_dokumen_surat_pasca', $data, $where);
        return $this->db->affected_rows();
    }

    public function get_row_id_dokumen_surat_pasca($id_dokumen_surat_pasca)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_surat_pasca');
        $this->db->where('tbl_dokumen_surat_pasca.id_dokumen_surat_pasca', $id_dokumen_surat_pasca);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function cek_no_urut_tbl_hps_penyedia_kontrak_2($id_hps_penyedia_kontrak_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_2');
        $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_hps_penyedia_kontrak_3($id_hps_penyedia_kontrak_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_3');
        $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_hps_penyedia_kontrak_4($id_hps_penyedia_kontrak_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_4');
        $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
        return $this->db->count_all_results();
    }

    public function cek_no_urut_tbl_hps_penyedia_kontrak_5($id_hps_penyedia_kontrak_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_5');
        $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
        return $this->db->count_all_results();
    }
    public function get_addendum($id_adendum)
    {
        $this->db->select('*');
        $this->db->from('table_adendum');
        $this->db->where('table_adendum.id_adendum', $id_adendum);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_by_id_sub_program($id_detail_sub_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }



    public function udpate_ke_tbl_program($where, $data)
    {
        $this->db->update('tbl_detail_program_penyedia_jasa', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_program($id_detail_program_penyedia_jasa)
    {
        $this->db->delete('tbl_detail_program_penyedia_jasa', ['id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa]);
        return $this->db->affected_rows();
    }

    public function delete_sub_program($id_detail_program_penyedia_jasa)
    {
        $this->db->delete('tbl_sub_detail_program_penyedia_jasa', ['id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa]);
        return $this->db->affected_rows();
    }

    public function delete_mc($id_detail_program_penyedia_jasa)
    {
        $this->db->delete('tbl_mc', ['id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa]);
        return $this->db->affected_rows();
    }


    // result urutan
    // CAPEX

    public function result_detail_capex_by_id_capex($id_capex)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $this->db->order_by('no_urut');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function result_detail_capex_1_by_id_capex_detail($id_capex_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_1');
        $this->db->where('tbl_detail_capex_1.id_capex_detail', $id_capex_detail);
        $this->db->order_by('no_urut_1_capex');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_detail_capex_2_by_id_capex_detail($id_detail_capex_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_2');
        $this->db->where('tbl_detail_capex_2.id_detail_capex_1', $id_detail_capex_1);
        $this->db->order_by('no_urut_2_capex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _3
    // _2
    public function result_detail_capex_3_by_id_capex_detail($id_detail_capex_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_3');
        $this->db->where('tbl_detail_capex_3.id_detail_capex_2', $id_detail_capex_2);
        $this->db->order_by('no_urut_3_capex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _4
    // _3
    public function result_detail_capex_4_by_id_capex_detail($id_detail_capex_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_4');
        $this->db->where('tbl_detail_capex_4.id_detail_capex_3', $id_detail_capex_3);
        $this->db->order_by('no_urut_4_capex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _5
    // _4
    public function result_detail_capex_5_by_id_capex_detail($id_detail_capex_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_5');
        $this->db->where('tbl_detail_capex_5.id_detail_capex_4', $id_detail_capex_4);
        $this->db->order_by('no_urut_5_capex');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _6
    // _5
    public function result_detail_capex_6_by_id_capex_detail($id_detail_capex_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_6');
        $this->db->where('tbl_detail_capex_6.id_detail_capex_5', $id_detail_capex_5);
        $this->db->order_by('no_urut_6_capex');
        $query = $this->db->get();
        return $query->result_array();
    }



    // _7
    // _6
    public function result_detail_capex_7_by_id_capex_detail($id_detail_capex_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_7');
        $this->db->where('tbl_detail_capex_7.id_detail_capex_6', $id_detail_capex_6);
        $this->db->order_by('no_urut_7_capex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _8
    // _7
    public function result_detail_capex_8_by_id_capex_detail($id_detail_capex_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_8');
        $this->db->where('tbl_detail_capex_8.id_detail_capex_7', $id_detail_capex_7);
        $this->db->order_by('no_urut_8_capex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _9
    // _8
    public function result_detail_capex_9_by_id_capex_detail($id_detail_capex_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_9');
        $this->db->where('tbl_detail_capex_9.id_detail_capex_8', $id_detail_capex_8);
        $this->db->order_by('no_urut_9_capex');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _10
    // _9
    public function result_detail_capex_10_by_id_capex_detail($id_detail_capex_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_capex_10');
        $this->db->where('tbl_detail_capex_10.id_detail_capex_9', $id_detail_capex_9);
        $this->db->order_by('no_urut_10_capex');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_urutan_capex_detail($where, $data)
    {
        $this->db->update('tbl_capex_detail', $data, $where);
        return $this->db->affected_rows();
    }

    // _1
    public function update_urutan_detail_capex_1($where, $data)
    {
        $this->db->update('tbl_detail_capex_1', $data, $where);
        return $this->db->affected_rows();
    }

    // _2
    public function update_urutan_detail_capex_2($where, $data)
    {
        $this->db->update('tbl_detail_capex_2', $data, $where);
        return $this->db->affected_rows();
    }


    // _3
    public function update_urutan_detail_capex_3($where, $data)
    {
        $this->db->update('tbl_detail_capex_3', $data, $where);
        return $this->db->affected_rows();
    }


    // _4
    public function update_urutan_detail_capex_4($where, $data)
    {
        $this->db->update('tbl_detail_capex_4', $data, $where);
        return $this->db->affected_rows();
    }


    // _5
    public function update_urutan_detail_capex_5($where, $data)
    {
        $this->db->update('tbl_detail_capex_5', $data, $where);
        return $this->db->affected_rows();
    }


    // _6
    public function update_urutan_detail_capex_6($where, $data)
    {
        $this->db->update('tbl_detail_capex_6', $data, $where);
        return $this->db->affected_rows();
    }


    // _7
    public function update_urutan_detail_capex_7($where, $data)
    {
        $this->db->update('tbl_detail_capex_7', $data, $where);
        return $this->db->affected_rows();
    }


    // _8
    public function update_urutan_detail_capex_8($where, $data)
    {
        $this->db->update('tbl_detail_capex_8', $data, $where);
        return $this->db->affected_rows();
    }


    // _9
    public function update_urutan_detail_capex_9($where, $data)
    {
        $this->db->update('tbl_detail_capex_9', $data, $where);
        return $this->db->affected_rows();
    }


    // _10
    public function update_urutan_detail_capex_10($where, $data)
    {
        $this->db->update('tbl_detail_capex_10', $data, $where);
        return $this->db->affected_rows();
    }




    // result urutan
    // opex


    public function result_detail_opex_1_by_id_opex_detail($id_opex_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_1');
        $this->db->where('tbl_detail_opex_1.id_opex_detail', $id_opex_detail);
        $this->db->order_by('no_urut_1_opex');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_detail_opex_2_by_id_opex_detail($id_detail_opex_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_2');
        $this->db->where('tbl_detail_opex_2.id_detail_opex_1', $id_detail_opex_1);
        $this->db->order_by('no_urut_2_opex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _3
    // _2
    public function result_detail_opex_3_by_id_opex_detail($id_detail_opex_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_3');
        $this->db->where('tbl_detail_opex_3.id_detail_opex_2', $id_detail_opex_2);
        $this->db->order_by('no_urut_3_opex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _4
    // _3
    public function result_detail_opex_4_by_id_opex_detail($id_detail_opex_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_4');
        $this->db->where('tbl_detail_opex_4.id_detail_opex_3', $id_detail_opex_3);
        $this->db->order_by('no_urut_4_opex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _5
    // _4
    public function result_detail_opex_5_by_id_opex_detail($id_detail_opex_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_5');
        $this->db->where('tbl_detail_opex_5.id_detail_opex_4', $id_detail_opex_4);
        $this->db->order_by('no_urut_5_opex');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _6
    // _5
    public function result_detail_opex_6_by_id_opex_detail($id_detail_opex_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_6');
        $this->db->where('tbl_detail_opex_6.id_detail_opex_5', $id_detail_opex_5);
        $this->db->order_by('no_urut_6_opex');
        $query = $this->db->get();
        return $query->result_array();
    }



    // _7
    // _6
    public function result_detail_opex_7_by_id_opex_detail($id_detail_opex_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_7');
        $this->db->where('tbl_detail_opex_7.id_detail_opex_6', $id_detail_opex_6);
        $this->db->order_by('no_urut_7_opex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _8
    // _7
    public function result_detail_opex_8_by_id_opex_detail($id_detail_opex_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_8');
        $this->db->where('tbl_detail_opex_8.id_detail_opex_7', $id_detail_opex_7);
        $this->db->order_by('no_urut_8_opex');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _9
    // _8
    public function result_detail_opex_9_by_id_opex_detail($id_detail_opex_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_9');
        $this->db->where('tbl_detail_opex_9.id_detail_opex_8', $id_detail_opex_8);
        $this->db->order_by('no_urut_9_opex');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _10
    // _9
    public function result_detail_opex_10_by_id_opex_detail($id_detail_opex_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_opex_10');
        $this->db->where('tbl_detail_opex_10.id_detail_opex_9', $id_detail_opex_9);
        $this->db->order_by('no_urut_10_opex');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_urutan_opex_detail($where, $data)
    {
        $this->db->update('tbl_opex_detail', $data, $where);
        return $this->db->affected_rows();
    }

    // _1
    public function update_urutan_detail_opex_1($where, $data)
    {
        $this->db->update('tbl_detail_opex_1', $data, $where);
        return $this->db->affected_rows();
    }

    // _2
    public function update_urutan_detail_opex_2($where, $data)
    {
        $this->db->update('tbl_detail_opex_2', $data, $where);
        return $this->db->affected_rows();
    }


    // _3
    public function update_urutan_detail_opex_3($where, $data)
    {
        $this->db->update('tbl_detail_opex_3', $data, $where);
        return $this->db->affected_rows();
    }


    // _4
    public function update_urutan_detail_opex_4($where, $data)
    {
        $this->db->update('tbl_detail_opex_4', $data, $where);
        return $this->db->affected_rows();
    }


    // _5
    public function update_urutan_detail_opex_5($where, $data)
    {
        $this->db->update('tbl_detail_opex_5', $data, $where);
        return $this->db->affected_rows();
    }


    // _6
    public function update_urutan_detail_opex_6($where, $data)
    {
        $this->db->update('tbl_detail_opex_6', $data, $where);
        return $this->db->affected_rows();
    }


    // _7
    public function update_urutan_detail_opex_7($where, $data)
    {
        $this->db->update('tbl_detail_opex_7', $data, $where);
        return $this->db->affected_rows();
    }


    // _8
    public function update_urutan_detail_opex_8($where, $data)
    {
        $this->db->update('tbl_detail_opex_8', $data, $where);
        return $this->db->affected_rows();
    }


    // _9
    public function update_urutan_detail_opex_9($where, $data)
    {
        $this->db->update('tbl_detail_opex_9', $data, $where);
        return $this->db->affected_rows();
    }


    // _10
    public function update_urutan_detail_opex_10($where, $data)
    {
        $this->db->update('tbl_detail_opex_10', $data, $where);
        return $this->db->affected_rows();
    }


    // result urutan
    // bua


    public function result_detail_bua_1_by_id_bua_detail($id_bua_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_1');
        $this->db->where('tbl_detail_bua_1.id_bua_detail', $id_bua_detail);
        $this->db->order_by('no_urut_1_bua');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_detail_bua_2_by_id_bua_detail($id_detail_bua_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_2');
        $this->db->where('tbl_detail_bua_2.id_detail_bua_1', $id_detail_bua_1);
        $this->db->order_by('no_urut_2_bua');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _3
    // _2
    public function result_detail_bua_3_by_id_bua_detail($id_detail_bua_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_3');
        $this->db->where('tbl_detail_bua_3.id_detail_bua_2', $id_detail_bua_2);
        $this->db->order_by('no_urut_3_bua');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _4
    // _3
    public function result_detail_bua_4_by_id_bua_detail($id_detail_bua_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_4');
        $this->db->where('tbl_detail_bua_4.id_detail_bua_3', $id_detail_bua_3);
        $this->db->order_by('no_urut_4_bua');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _5
    // _4
    public function result_detail_bua_5_by_id_bua_detail($id_detail_bua_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_5');
        $this->db->where('tbl_detail_bua_5.id_detail_bua_4', $id_detail_bua_4);
        $this->db->order_by('no_urut_5_bua');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _6
    // _5
    public function result_detail_bua_6_by_id_bua_detail($id_detail_bua_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_6');
        $this->db->where('tbl_detail_bua_6.id_detail_bua_5', $id_detail_bua_5);
        $this->db->order_by('no_urut_6_bua');
        $query = $this->db->get();
        return $query->result_array();
    }



    // _7
    // _6
    public function result_detail_bua_7_by_id_bua_detail($id_detail_bua_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_7');
        $this->db->where('tbl_detail_bua_7.id_detail_bua_6', $id_detail_bua_6);
        $this->db->order_by('no_urut_7_bua');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _8
    // _7
    public function result_detail_bua_8_by_id_bua_detail($id_detail_bua_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_8');
        $this->db->where('tbl_detail_bua_8.id_detail_bua_7', $id_detail_bua_7);
        $this->db->order_by('no_urut_8_bua');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _9
    // _8
    public function result_detail_bua_9_by_id_bua_detail($id_detail_bua_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_9');
        $this->db->where('tbl_detail_bua_9.id_detail_bua_8', $id_detail_bua_8);
        $this->db->order_by('no_urut_9_bua');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _10
    // _9
    public function result_detail_bua_10_by_id_bua_detail($id_detail_bua_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_bua_10');
        $this->db->where('tbl_detail_bua_10.id_detail_bua_9', $id_detail_bua_9);
        $this->db->order_by('no_urut_10_bua');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_urutan_bua_detail($where, $data)
    {
        $this->db->update('tbl_bua_detail', $data, $where);
        return $this->db->affected_rows();
    }

    // _1
    public function update_urutan_detail_bua_1($where, $data)
    {
        $this->db->update('tbl_detail_bua_1', $data, $where);
        return $this->db->affected_rows();
    }

    // _2
    public function update_urutan_detail_bua_2($where, $data)
    {
        $this->db->update('tbl_detail_bua_2', $data, $where);
        return $this->db->affected_rows();
    }


    // _3
    public function update_urutan_detail_bua_3($where, $data)
    {
        $this->db->update('tbl_detail_bua_3', $data, $where);
        return $this->db->affected_rows();
    }


    // _4
    public function update_urutan_detail_bua_4($where, $data)
    {
        $this->db->update('tbl_detail_bua_4', $data, $where);
        return $this->db->affected_rows();
    }


    // _5
    public function update_urutan_detail_bua_5($where, $data)
    {
        $this->db->update('tbl_detail_bua_5', $data, $where);
        return $this->db->affected_rows();
    }


    // _6
    public function update_urutan_detail_bua_6($where, $data)
    {
        $this->db->update('tbl_detail_bua_6', $data, $where);
        return $this->db->affected_rows();
    }


    // _7
    public function update_urutan_detail_bua_7($where, $data)
    {
        $this->db->update('tbl_detail_bua_7', $data, $where);
        return $this->db->affected_rows();
    }


    // _8
    public function update_urutan_detail_bua_8($where, $data)
    {
        $this->db->update('tbl_detail_bua_8', $data, $where);
        return $this->db->affected_rows();
    }


    // _9
    public function update_urutan_detail_bua_9($where, $data)
    {
        $this->db->update('tbl_detail_bua_9', $data, $where);
        return $this->db->affected_rows();
    }


    // _10
    public function update_urutan_detail_bua_10($where, $data)
    {
        $this->db->update('tbl_detail_bua_10', $data, $where);
        return $this->db->affected_rows();
    }



    // result urutan
    // sdm
    public function result_detail_sdm_1_by_id_sdm_detail($id_sdm_detail)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_1');
        $this->db->where('tbl_detail_sdm_1.id_sdm_detail', $id_sdm_detail);
        $this->db->order_by('no_urut_1_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function result_detail_sdm_2_by_id_sdm_detail($id_detail_sdm_1)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_2');
        $this->db->where('tbl_detail_sdm_2.id_detail_sdm_1', $id_detail_sdm_1);
        $this->db->order_by('no_urut_2_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _3
    // _2
    public function result_detail_sdm_3_by_id_sdm_detail($id_detail_sdm_2)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_3');
        $this->db->where('tbl_detail_sdm_3.id_detail_sdm_2', $id_detail_sdm_2);
        $this->db->order_by('no_urut_3_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _4
    // _3
    public function result_detail_sdm_4_by_id_sdm_detail($id_detail_sdm_3)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_4');
        $this->db->where('tbl_detail_sdm_4.id_detail_sdm_3', $id_detail_sdm_3);
        $this->db->order_by('no_urut_4_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _5
    // _4
    public function result_detail_sdm_5_by_id_sdm_detail($id_detail_sdm_4)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_5');
        $this->db->where('tbl_detail_sdm_5.id_detail_sdm_4', $id_detail_sdm_4);
        $this->db->order_by('no_urut_5_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _6
    // _5
    public function result_detail_sdm_6_by_id_sdm_detail($id_detail_sdm_5)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_6');
        $this->db->where('tbl_detail_sdm_6.id_detail_sdm_5', $id_detail_sdm_5);
        $this->db->order_by('no_urut_6_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }



    // _7
    // _6
    public function result_detail_sdm_7_by_id_sdm_detail($id_detail_sdm_6)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_7');
        $this->db->where('tbl_detail_sdm_7.id_detail_sdm_6', $id_detail_sdm_6);
        $this->db->order_by('no_urut_7_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _8
    // _7
    public function result_detail_sdm_8_by_id_sdm_detail($id_detail_sdm_7)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_8');
        $this->db->where('tbl_detail_sdm_8.id_detail_sdm_7', $id_detail_sdm_7);
        $this->db->order_by('no_urut_8_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }

    // _9
    // _8
    public function result_detail_sdm_9_by_id_sdm_detail($id_detail_sdm_8)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_9');
        $this->db->where('tbl_detail_sdm_9.id_detail_sdm_8', $id_detail_sdm_8);
        $this->db->order_by('no_urut_9_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }


    // _10
    // _9
    public function result_detail_sdm_10_by_id_sdm_detail($id_detail_sdm_9)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_sdm_10');
        $this->db->where('tbl_detail_sdm_10.id_detail_sdm_9', $id_detail_sdm_9);
        $this->db->order_by('no_urut_10_sdm');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_urutan_sdm_detail($where, $data)
    {
        $this->db->update('tbl_sdm_detail', $data, $where);
        return $this->db->affected_rows();
    }

    // _1
    public function update_urutan_detail_sdm_1($where, $data)
    {
        $this->db->update('tbl_detail_sdm_1', $data, $where);
        return $this->db->affected_rows();
    }

    // _2
    public function update_urutan_detail_sdm_2($where, $data)
    {
        $this->db->update('tbl_detail_sdm_2', $data, $where);
        return $this->db->affected_rows();
    }


    // _3
    public function update_urutan_detail_sdm_3($where, $data)
    {
        $this->db->update('tbl_detail_sdm_3', $data, $where);
        return $this->db->affected_rows();
    }


    // _4
    public function update_urutan_detail_sdm_4($where, $data)
    {
        $this->db->update('tbl_detail_sdm_4', $data, $where);
        return $this->db->affected_rows();
    }


    // _5
    public function update_urutan_detail_sdm_5($where, $data)
    {
        $this->db->update('tbl_detail_sdm_5', $data, $where);
        return $this->db->affected_rows();
    }


    // _6
    public function update_urutan_detail_sdm_6($where, $data)
    {
        $this->db->update('tbl_detail_sdm_6', $data, $where);
        return $this->db->affected_rows();
    }


    // _7
    public function update_urutan_detail_sdm_7($where, $data)
    {
        $this->db->update('tbl_detail_sdm_7', $data, $where);
        return $this->db->affected_rows();
    }


    // _8
    public function update_urutan_detail_sdm_8($where, $data)
    {
        $this->db->update('tbl_detail_sdm_8', $data, $where);
        return $this->db->affected_rows();
    }


    // _9
    public function update_urutan_detail_sdm_9($where, $data)
    {
        $this->db->update('tbl_detail_sdm_9', $data, $where);
        return $this->db->affected_rows();
    }


    // _10
    public function update_urutan_detail_sdm_10($where, $data)
    {
        $this->db->update('tbl_detail_sdm_10', $data, $where);
        return $this->db->affected_rows();
    }


    public function simpan_laporan_periode($data)
    {
        $this->db->insert('tbl_laporan_periode_kinerja', $data);
        return $this->db->affected_rows();
    }


    public function simpan_laporan_periode_ke_detail_program($data)
    {
        $this->db->insert('tbl_laporan_detail_program_penyedia_jasa', $data);
        return $this->db->affected_rows();
    }

    public function simpan_laporan_periode_ke_sub_detail_program($data)
    {
        $this->db->insert('tbl_laporan_sub_detail_program_penyedia_jasa', $data);
        return $this->db->affected_rows();
    }

    public function get_program_by_id_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_sub_program_by_id_kontrak($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_sub_program_by_id_kontrak_mata_anggran($id_detail_program_penyedia_jasa, $addendun_ke)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_detail_program_penyedia_jasa');
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_sub_detail_program_penyedia_jasa.addendum_ke', $addendun_ke);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_row_periode($id_laporan_periode)
    {
        $this->db->select('*');
        $this->db->from('tbl_laporan_periode_kinerja');
        $this->db->where('tbl_laporan_periode_kinerja.id_laporan_periode', $id_laporan_periode);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_row_detail_program_periode($id_laporan_periode)
    {
        $this->db->select('*');
        $this->db->from('tbl_laporan_detail_program_penyedia_jasa');
        $this->db->where('tbl_laporan_detail_program_penyedia_jasa.id_laporan_periode', $id_laporan_periode);
        $query = $this->db->get();
        return $query->row_array();
    }



    public function delete_laporan_periode($id_laporan_periode)
    {
        $this->db->delete('tbl_laporan_periode_kinerja', ['id_laporan_periode' => $id_laporan_periode]);
        return $this->db->affected_rows();
    }

    public function delete_laporan_periode_detail_program($id_laporan_periode)
    {
        $this->db->delete('tbl_laporan_detail_program_penyedia_jasa', ['id_laporan_periode' => $id_laporan_periode]);
        return $this->db->affected_rows();
    }

    public function delete_laporan_periode_sub_detail_program($id_detail_program_penyedia_jasa)
    {
        $this->db->delete('tbl_laporan_sub_detail_program_penyedia_jasa', ['id_detail_program_penyedia_jasa' => $id_detail_program_penyedia_jasa]);
        return $this->db->affected_rows();
    }

    public function upload_laporan_kinerja($data)
    {
        $this->db->insert('tbl_dokumen_laporan_kinerja', $data);
        return $this->db->affected_rows();
    }

    public function get_result_laporan_kinerja_dokumen($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_laporan_kinerja');
        $this->db->where('tbl_dokumen_laporan_kinerja.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_row_laporan_kinerja_dokumen($id_dokumen_laporan_kinerja)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_laporan_kinerja');
        $this->db->where('tbl_dokumen_laporan_kinerja.id_dokumen_laporan_kinerja', $id_dokumen_laporan_kinerja);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_dokumen_laporan_periode($id_dokumen_laporan_kinerja)
    {
        $this->db->delete('tbl_dokumen_laporan_kinerja', ['id_dokumen_laporan_kinerja' => $id_dokumen_laporan_kinerja]);
        return $this->db->affected_rows();
    }


    public function get_row_kontrak($id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->where('mst_kontrak.id_kontrak', $id_kontrak);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_triger_hps_penyedia_1($id_hps_penyedia_1)
    {
        $this->db->delete('tbl_hps_penyedia_1', ['id_hps_penyedia_1' => $id_hps_penyedia_1]);
        $this->db->delete('tbl_hps_penyedia_kontrak_1', ['id_refrence_hps' => $id_hps_penyedia_1]);
        return $this->db->affected_rows();
    }

    public function delete_triger_hps_penyedia_2($id_hps_penyedia_2)
    {
        $this->db->delete('tbl_hps_penyedia_2', ['id_hps_penyedia_2' => $id_hps_penyedia_2]);
        $this->db->delete('tbl_hps_penyedia_kontrak_2', ['id_refrence_hps' => $id_hps_penyedia_2]);
        return $this->db->affected_rows();
    }

    public function delete_triger_hps_penyedia_3($id_hps_penyedia_3)
    {
        $this->db->delete('tbl_hps_penyedia_3', ['id_hps_penyedia_3' => $id_hps_penyedia_3]);
        $this->db->delete('tbl_hps_penyedia_kontrak_3', ['id_refrence_hps' => $id_hps_penyedia_3]);
        return $this->db->affected_rows();
    }

    public function delete_triger_hps_penyedia_4($id_hps_penyedia_4)
    {
        $this->db->delete('tbl_hps_penyedia_4', ['id_hps_penyedia_4' => $id_hps_penyedia_4]);
        $this->db->delete('tbl_hps_penyedia_kontrak_4', ['id_refrence_hps' => $id_hps_penyedia_4]);
        return $this->db->affected_rows();
    }

    public function delete_triger_hps_penyedia_5($id_hps_penyedia_5)
    {
        $this->db->delete('tbl_hps_penyedia_5', ['id_hps_penyedia_5' => $id_hps_penyedia_5]);
        $this->db->delete('tbl_hps_penyedia_kontrak_5', ['id_refrence_hps' => $id_hps_penyedia_5]);
        return $this->db->affected_rows();
    }


    // update urutan hps
    // _1


    public function update_urutan_hps_penyedia_1($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_1', $data, $where);
        return $this->db->affected_rows();
    }
    public function update_urutan_hps_penyedia_kontrak_1($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_1', $data, $where);
        return $this->db->affected_rows();
    }

    public function create_file_enkrip($data)
    {
        $this->db->insert('tbl_enkrip', $data);
        return $this->db->affected_rows();
    }

    public function get_enkrip()
    {
        $this->db->select('*');
        $this->db->from('tbl_enkrip');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_row_enkrip($id_enkrip)
    {
        $this->db->select('*');
        $this->db->from('tbl_enkrip');
        $this->db->where('tbl_enkrip.id_enkrip', $id_enkrip);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function udapte_enkrip($where, $data)
    {
        $this->db->update('tbl_enkrip', $data, $where);
        return $this->db->affected_rows();
    }

    function get_result_kontrak($get_pegawai)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        $id_departemen = $get_pegawai['id_departemen'];
        $id_area = $get_pegawai['id_area'];
        $id_sub_area = $get_pegawai['id_sub_area'];
        if ($_POST['id_kontrak_filter']) {
            $this->db->where('mst_kontrak.id_kontrak', $_POST['id_kontrak_filter']);
        } else {
        }
        if ($id_departemen == 4) {
        } else {
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }


    function get_result_kontrak_select($id_departemen, $id_area, $id_sub_area)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        if (isset($_POST['id_departemen'])) {
            $this->db->like('mst_kontrak.id_departemen', $_POST['id_departemen']);
        } else {
        }
        if (isset($_POST['id_area'])) {
            $this->db->like('mst_kontrak.id_area', $_POST['id_area']);
        } else {
        }
        if (isset($_POST['id_sub_area'])) {
            $this->db->like('mst_kontrak.id_sub_area', $_POST['id_sub_area']);
        } else {
        }
        if ($id_departemen == 4) {
        } else {
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_tbl_unit_price($where, $data)
    {
        $this->db->update('tbl_unit_price', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price')->row_array();
        return $updatedId;
    }

    // price_1
    public function update_tbl_unit_price_1($where, $data)
    {
        $this->db->update('tbl_unit_price_1', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_1')->row_array();
        return $updatedId;
    }

    // price_2
    public function update_tbl_unit_price_2($where, $data)
    {
        $this->db->update('tbl_unit_price_2', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_2')->row_array();
        return $updatedId;
    }


    // price_3
    public function update_tbl_unit_price_3($where, $data)
    {
        $this->db->update('tbl_unit_price_3', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_3')->row_array();
        return $updatedId;
    }


    // price_4
    public function update_tbl_unit_price_4($where, $data)
    {
        $this->db->update('tbl_unit_price_4', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_4')->row_array();
        return $updatedId;
    }


    // price_5
    public function update_tbl_unit_price_5($where, $data)
    {
        $this->db->update('tbl_unit_price_5', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_5')->row_array();
        return $updatedId;
    }


    // price_6
    public function update_tbl_unit_price_6($where, $data)
    {
        $this->db->update('tbl_unit_price_6', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_6')->row_array();
        return $updatedId;
    }


    // price_7
    public function update_tbl_unit_price_7($where, $data)
    {
        $this->db->update('tbl_unit_price_7', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_7')->row_array();
        return $updatedId;
    }


    // price_8
    public function update_tbl_unit_price_8($where, $data)
    {
        $this->db->update('tbl_unit_price_8', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_8')->row_array();
        return $updatedId;
    }


    // price_9
    public function update_tbl_unit_price_9($where, $data)
    {
        $this->db->update('tbl_unit_price_9', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_9')->row_array();
        return $updatedId;
    }


    // price_10
    public function update_tbl_unit_price_10($where, $data)
    {
        $this->db->update('tbl_unit_price_10', $data, $where);
        $updatedId = $this->db->get('tbl_unit_price_10')->row_array();
        return $updatedId;
    }

    public function get_mata_anggaran_analisis_data($id_departemen, $id_area, $sub_area, $keyword = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_departemen', $id_departemen);
        $this->db->where('tbl_detail_program_penyedia_jasa.id_area', $id_area);
        $this->db->where('tbl_detail_program_penyedia_jasa.id_sub_area', $sub_area);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_mc_by_id($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->join('tbl_rapot_dummy', 'tbl_mc.id_mc = tbl_rapot_dummy.id_mc', 'left');
        $this->db->where('tbl_mc.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        // $this->db->group_by('tbl_mc.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_rapot_dummy.pic', 'Vendor');
        $this->db->order_by('tbl_rapot_dummy.tanggal_rapot', 'desc');
        $this->db->group_by('tbl_mc.no_mc');
        // $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_mc_by_id2($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->join('tbl_rapot_dummy', 'tbl_mc.id_mc = tbl_rapot_dummy.id_mc', 'left');
        $this->db->where('tbl_mc.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rapot_dummy.pic', 'Area');
        $this->db->group_by('tbl_mc.id_detail_program_penyedia_jasa');
        $this->db->order_by('sts_tanggal_trakhir', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function get_mc_by_id3($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->join('tbl_rapot_dummy', 'tbl_mc.id_mc = tbl_rapot_dummy.id_mc', 'left');
        $this->db->where('tbl_mc.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rapot_dummy.pic', 'Pusat');
        $this->db->group_by('tbl_mc.id_detail_program_penyedia_jasa');
        $this->db->order_by('sts_tanggal_trakhir', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_mc_by_id4($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->join('tbl_rapot_dummy', 'tbl_mc.id_mc = tbl_rapot_dummy.id_mc', 'left');
        $this->db->where('tbl_mc.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rapot_dummy.pic', 'Finance');
        $this->db->where('tbl_rapot_dummy.catatan_rapot !=', 'Pencairan');
        $this->db->group_by('tbl_mc.id_detail_program_penyedia_jasa');
        $this->db->order_by('sts_tanggal_trakhir', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_mc_by_id5($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->join('tbl_rapot_dummy', 'tbl_mc.id_mc = tbl_rapot_dummy.id_mc', 'left');
        $this->db->where('tbl_mc.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rapot_dummy.pic', 'Finance');
        $this->db->where('tbl_rapot_dummy.catatan_rapot !=', 'Diterima Finance');
        $this->db->group_by('tbl_mc.id_detail_program_penyedia_jasa');
        $this->db->order_by('sts_tanggal_trakhir', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_mata_anggaran_filter($id_departemen, $id_area, $id_sub_area)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        if ($id_departemen == 4) {
        } else {
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function create_tbl_rekap_hps($data)
    {
        $this->db->insert('tbl_rekap_hps', $data);
        return $this->db->affected_rows();
    }
    public function update_ke_tbl_rekap_hps($where, $data)
    {
        $this->db->update('tbl_rekap_hps', $data, $where);
        return $this->db->affected_rows();
    }

    public function cek_no_urut_tbl_hps_penyedia_kontrak_1($id_detail_program_penyedia_jasa, $id_detail_sub_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_1');
        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        return $this->db->count_all_results();
    }


    public function cek_rekap_kontrak_awal($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 0);
        $query = $this->db->get();
        return $query->result_array();
    }
    // 1
    public function cek_rekap_kontrak_addendum_1($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 2
    public function cek_rekap_kontrak_addendum_2($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 2);
        $query = $this->db->get();
        return $query->result_array();
    }


    // 3
    public function cek_rekap_kontrak_addendum_3($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 3);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 4
    public function cek_rekap_kontrak_addendum_4($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 4);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 5
    public function cek_rekap_kontrak_addendum_5($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 5);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 6
    public function cek_rekap_kontrak_addendum_6($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 6);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 7
    public function cek_rekap_kontrak_addendum_7($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 7);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 8
    public function cek_rekap_kontrak_addendum_8($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 8);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 9
    public function cek_rekap_kontrak_addendum_9($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 9);
        $query = $this->db->get();
        return $query->result_array();
    }

    // 10
    public function cek_rekap_kontrak_addendum_10($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->join('tbl_sub_detail_program_penyedia_jasa', 'tbl_sub_detail_program_penyedia_jasa.id_detail_sub_program_penyedia_jasa = tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', 'left');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', 10);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function create_tbl_rekap_hps_kontrak($data)
    {
        $this->db->insert('tbl_rekap_kontrak', $data);
        return $this->db->affected_rows();
    }
    public function update_ke_tbl_rekap_hps_kontrak($where, $data)
    {
        $this->db->update('tbl_rekap_kontrak', $data, $where);
        return $this->db->affected_rows();
    }

    public function cek_rekap_sudah_ada($id_detail_program_penyedia_jasa, $id_detail_sub_program_penyedia_jasa, $type_add)
    {
        $this->db->select('*');
        $this->db->from('tbl_rekap_kontrak');
        $this->db->where('tbl_rekap_kontrak.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.id_detail_sub_program_penyedia_jasa', $id_detail_sub_program_penyedia_jasa);
        $this->db->where('tbl_rekap_kontrak.no_addendum', $type_add);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_penyedia()
    {
        $this->db->select('*');
        $this->db->from('tbl_vendor_identitas_prusahaan');
        $this->db->group_by('tbl_vendor_identitas_prusahaan.id_vendor');
        $this->db->group_by('tbl_vendor_identitas_prusahaan.nama_usaha');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_row_penyedia($id_identitas_prusahaan)
    {
        $this->db->select('*');
        $this->db->from('tbl_vendor_identitas_prusahaan');
        $this->db->where('tbl_vendor_identitas_prusahaan.id_identitas_prusahaan', $id_identitas_prusahaan);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function add_ke_tbl_ketentuan($data)
    {
        $this->db->insert('tbl_ketentuan', $data);
        return $this->db->affected_rows();
    }

    public function get_result_tbl_ketentuan($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_ketentuan');
        $this->db->where('tbl_ketentuan.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function delete_ke_tbl_ketentuan($id_ketentuan)
    {
        $this->db->delete('tbl_ketentuan', ['id_ketentuan' => $id_ketentuan]);
        return $this->db->affected_rows();
    }

    // tbl_flow_papenkon
    public function add_ke_tbl_flow_papenkon($data)
    {
        $this->db->insert('tbl_flow_papenkon', $data);
        return $this->db->affected_rows();
    }

    public function cek_flow_papenkon($id_detail_program_penyedia_jasa, $addendum_flow, $flow_papenkon)
    {
        $this->db->select('*');
        $this->db->from('tbl_flow_papenkon');
        $this->db->where('tbl_flow_papenkon.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $this->db->where('tbl_flow_papenkon.addendum_flow', $addendum_flow);
        $this->db->where('tbl_flow_papenkon.flow_papenkon', $flow_papenkon);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_flow($where, $data)
    {
        $this->db->update('tbl_flow_papenkon', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_flow_tambahan($where, $data)
    {
        $this->db->update('tbl_tambahan_flow_papenkon', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_flow_tambahan($id_flow_papenkon_tambahan)
    {
        $this->db->delete('tbl_tambahan_flow_papenkon', ['id_flow_papenkon_tambahan' => $id_flow_papenkon_tambahan]);
        return $this->db->affected_rows();
    }

    public function add_ke_tbl_flow_papenkon_tambahan($data)
    {
        $this->db->insert('tbl_tambahan_flow_papenkon', $data);
        return $this->db->affected_rows();
    }


    public function clear_table_hps($where)
    {
        $this->db->delete('tbl_hps_penyedia_1', $where);
        return $this->db->affected_rows();
    }

    public function clear_table_hps_penyedia_kontrak_1($where)
    {
        $this->db->delete('tbl_hps_penyedia_kontrak_1', $where);
        return $this->db->affected_rows();
    }

    function get_all_kontrak($id_departemen, $id_area, $id_sub_area, $id_kontrak)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        $this->db->where('mst_kontrak.id_kontrak', $id_kontrak);
        if (isset($_POST['id_departemen'])) {
            $this->db->like('mst_kontrak.id_departemen', $_POST['id_departemen']);
        } else {
        }
        if (isset($_POST['id_area'])) {
            $this->db->like('mst_kontrak.id_area', $_POST['id_area']);
        } else {
        }
        if (isset($_POST['id_sub_area'])) {
            $this->db->like('mst_kontrak.id_sub_area', $_POST['id_sub_area']);
        } else {
        }
        if ($id_departemen == 4) {
        } else {
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    function result_kontrak_export($id_departemen, $id_area, $id_sub_area)
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
        $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
        $this->db->where('mst_kontrak.sts_delete', '');
        if (isset($_POST['id_departemen'])) {
            $this->db->like('mst_kontrak.id_departemen', $_POST['id_departemen']);
        } else {
        }
        if (isset($_POST['id_area'])) {
            $this->db->like('mst_kontrak.id_area', $_POST['id_area']);
        } else {
        }
        if (isset($_POST['id_sub_area'])) {
            $this->db->like('mst_kontrak.id_sub_area', $_POST['id_sub_area']);
        } else {
        }
        if ($id_departemen == 4) {
        } else {
            if ($id_departemen && $id_area == 0 && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
            } else if ($id_departemen && $id_area && $id_sub_area == 0) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
            } else if ($id_departemen && $id_area && $id_sub_area) {
                $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                $this->db->where('mst_kontrak.id_area', $id_area);
                $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
            }
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    function cek_valid_addendum($id_kontrak, $no_adendum)
    {
        $this->db->select('*');
        $this->db->from('table_adendum');
        $this->db->where('table_adendum.id_kontrak', $id_kontrak);
        $this->db->where('table_adendum.no_adendum', $no_adendum);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_addendum($data, $where)
    {
        $this->db->update('table_adendum', $data, $where);
        return $this->db->affected_rows();
    }


        // INI UNTUK DOK PENUNJANG
        var $pdf_dok_mc_baru = array('id_dokumen_mc', 'file_dok', 'id_dokumen_mc');
        private function _get_dok_mc_baru($id_mc, $id_detail_program_penyedia_jasa, $type_dok)
        {
            $this->db->select('*');
            $this->db->from('tbl_dokumen_mc_surat');
            $this->db->where('id_mc', $id_mc);
            $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
            $this->db->where('type_dok', $type_dok);
            $i = 0;
            foreach ($this->pdf_dok_mc_baru as $item) // looping awal
            {
                if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
                {
    
                    if ($i === 0) // looping awal
                    {
                        $this->db->group_start();
                        $this->db->like($item, $_POST['search']['value']);
                    } else {
                        $this->db->or_like(
                            $item,
                            $_POST['search']['value']
                        );
                    }
    
                    if (count($this->pdf_dok_mc_baru) - 1 == $i)
                        $this->db->group_end();
                }
                $i++;
            }
            if (isset($_POST['order'])) {
                $this->db->order_by($this->pdf_dok_mc_baru[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            } else {
                $this->db->order_by('id_dokumen_mc_surat', 'DESC');
            }
        }
    
        public function get_dokumen_mc_baru($id_mc, $id_detail_program_penyedia_jasa, $type_dok) //nam[ilin data pake ini
        {
            $this->_get_dok_mc_baru($id_mc, $id_detail_program_penyedia_jasa, $type_dok); //ambil data dari get yg di atas
            if ($_POST['length'] != -3) {
                $this->db->limit($_POST['length'], $_POST['start']);
            }
            $query = $this->db->get();
            return $query->result();
        }
        public function count_filtered_get_dokumen_mc_baru($id_mc, $id_detail_program_penyedia_jasa, $type_dok)
        {
            $this->_get_dok_mc_baru($id_mc, $id_detail_program_penyedia_jasa, $type_dok); //ambil data dari get yg di atas
            $query = $this->db->get();
            return $query->num_rows();
        }
        public function count_all_get_dokumen_mc_baru($id_mc, $id_detail_program_penyedia_jasa, $type_dok)
        {
            $this->db->from('tbl_dokumen_mc_surat');
            $this->db->where('id_mc', $id_mc);
            $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
            $this->db->where('type_dok', $type_dok);
            return $this->db->count_all_results();
        }
    
    
        public function create_dok_mc_baru($data)
        {
            $this->db->insert('tbl_dokumen_mc_surat', $data);
            return $this->db->affected_rows();
        }
    
        public function deletedata_dok_mc_baru($id_dokumen_mc_surat)
        {
            $this->db->delete('tbl_dokumen_mc_surat', ['id_dokumen_mc_surat' => $id_dokumen_mc_surat]);
        }

            
        public function deletedata_tracking($id_rapot_mc_traking)
        {
            $this->db->delete('tbl_rapot_dummy', ['id_rapot_mc_traking' => $id_rapot_mc_traking]);
        }
}
