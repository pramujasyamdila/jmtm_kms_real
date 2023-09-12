<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_excelisasi_model extends CI_Model
{
    // capex
    public function delete_tbl_capex_detail($id_capex)
    {
        $this->db->delete('tbl_capex_detail', ['id_capex' => $id_capex]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_capex_level_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_capex_detail', $data);
        }
    }

    public function insert_kualifikasi($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('c_calon_pemilih', $data);
            // $this->db->replace('tbl_sbu', $data);
        }
    }

    public function update_via_excel_capex_level_2($data, $where)
    {
        for ($data = 0; $data > 0; $data++) {
            $this->db->update_batch('tbl_capex_detail', $data, $where);
        }
    }

    public function cek_upload_excel_capex($id_capex)
    {
        $this->db->select('*');
        $this->db->from('tbl_capex_detail');
        $this->db->where('tbl_capex_detail.id_capex', $id_capex);
        $query = $this->db->get();
        return $query->result_array();
    }

    // tbl_detail_capex_1
    public function delete_tbl_detail_capex_1($id_capex_detail)
    {
        $this->db->delete('tbl_detail_capex_1', ['id_capex_detail' => $id_capex_detail]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_1($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_1', $data);
        }
    }

    // tbl_detail_capex_2
    public function delete_tbl_detail_capex_2($id_detail_capex_1)
    {
        $this->db->delete('tbl_detail_capex_2', ['id_detail_capex_1' => $id_detail_capex_1]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_2', $data);
        }
    }

    // tbl_detail_capex_3
    public function delete_tbl_detail_capex_3($id_detail_capex_2)
    {
        $this->db->delete('tbl_detail_capex_3', ['id_detail_capex_2' => $id_detail_capex_2]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_3($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_3', $data);
        }
    }

    // tbl_detail_capex_4
    public function delete_tbl_detail_capex_4($id_detail_capex_3)
    {
        $this->db->delete('tbl_detail_capex_4', ['id_detail_capex_3' => $id_detail_capex_3]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_4($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_4', $data);
        }
    }

    // tbl_detail_capex_5
    public function delete_tbl_detail_capex_5($id_detail_capex_4)
    {
        $this->db->delete('tbl_detail_capex_5', ['id_detail_capex_4' => $id_detail_capex_4]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_5($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_5', $data);
        }
    }

    // tbl_detail_capex_6
    public function delete_tbl_detail_capex_6($id_detail_capex_5)
    {
        $this->db->delete('tbl_detail_capex_6', ['id_detail_capex_5' => $id_detail_capex_5]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_6($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_6', $data);
        }
    }


    // tbl_detail_capex_7
    public function delete_tbl_detail_capex_7($id_detail_capex_6)
    {
        $this->db->delete('tbl_detail_capex_7', ['id_detail_capex_6' => $id_detail_capex_6]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_7($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_7', $data);
        }
    }

    // tbl_detail_capex_8
    public function delete_tbl_detail_capex_8($id_detail_capex_7)
    {
        $this->db->delete('tbl_detail_capex_8', ['id_detail_capex_7' => $id_detail_capex_7]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_8($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_8', $data);
        }
    }

    // tbl_detail_capex_9
    public function delete_tbl_detail_capex_9($id_detail_capex_8)
    {
        $this->db->delete('tbl_detail_capex_9', ['id_detail_capex_8' => $id_detail_capex_8]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_9($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_9', $data);
        }
    }

    // tbl_detail_capex_10
    public function delete_tbl_detail_capex_10($id_detail_capex_9)
    {
        $this->db->delete('tbl_detail_capex_10', ['id_detail_capex_9' => $id_detail_capex_9]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_capex_10($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_capex_10', $data);
        }
    }

    // BATAS OPEX
    // opex
    public function delete_tbl_opex_detail($id_opex)
    {
        $this->db->delete('tbl_opex_detail', ['id_opex' => $id_opex]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_opex_level_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_opex_detail', $data);
        }
    }

    // tbl_detail_opex_1
    public function delete_tbl_detail_opex_1($id_opex_detail)
    {
        $this->db->delete('tbl_detail_opex_1', ['id_opex_detail' => $id_opex_detail]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_1($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_1', $data);
        }
    }

    // tbl_detail_opex_2
    public function delete_tbl_detail_opex_2($id_detail_opex_1)
    {
        $this->db->delete('tbl_detail_opex_2', ['id_detail_opex_1' => $id_detail_opex_1]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_2', $data);
        }
    }

    // tbl_detail_opex_3
    public function delete_tbl_detail_opex_3($id_detail_opex_2)
    {
        $this->db->delete('tbl_detail_opex_3', ['id_detail_opex_2' => $id_detail_opex_2]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_3($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_3', $data);
        }
    }

    // tbl_detail_opex_4
    public function delete_tbl_detail_opex_4($id_detail_opex_3)
    {
        $this->db->delete('tbl_detail_opex_4', ['id_detail_opex_3' => $id_detail_opex_3]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_4($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_4', $data);
        }
    }

    // tbl_detail_opex_5
    public function delete_tbl_detail_opex_5($id_detail_opex_4)
    {
        $this->db->delete('tbl_detail_opex_5', ['id_detail_opex_4' => $id_detail_opex_4]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_5($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_5', $data);
        }
    }

    // tbl_detail_opex_6
    public function delete_tbl_detail_opex_6($id_detail_opex_5)
    {
        $this->db->delete('tbl_detail_opex_6', ['id_detail_opex_5' => $id_detail_opex_5]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_6($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_6', $data);
        }
    }


    // tbl_detail_opex_7
    public function delete_tbl_detail_opex_7($id_detail_opex_6)
    {
        $this->db->delete('tbl_detail_opex_7', ['id_detail_opex_6' => $id_detail_opex_6]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_7($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_7', $data);
        }
    }

    // tbl_detail_opex_8
    public function delete_tbl_detail_opex_8($id_detail_opex_7)
    {
        $this->db->delete('tbl_detail_opex_8', ['id_detail_opex_7' => $id_detail_opex_7]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_8($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_8', $data);
        }
    }

    // tbl_detail_opex_9
    public function delete_tbl_detail_opex_9($id_detail_opex_8)
    {
        $this->db->delete('tbl_detail_opex_9', ['id_detail_opex_8' => $id_detail_opex_8]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_9($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_9', $data);
        }
    }

    // tbl_detail_opex_10
    public function delete_tbl_detail_opex_10($id_detail_opex_9)
    {
        $this->db->delete('tbl_detail_opex_10', ['id_detail_opex_9' => $id_detail_opex_9]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_opex_10($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_opex_10', $data);
        }
    }

    // BATAS BUA
    // bua
    public function delete_tbl_bua_detail($id_bua)
    {
        $this->db->delete('tbl_bua_detail', ['id_bua' => $id_bua]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_bua_level_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_bua_detail', $data);
        }
    }

    // tbl_detail_bua_1
    public function delete_tbl_detail_bua_1($id_bua_detail)
    {
        $this->db->delete('tbl_detail_bua_1', ['id_bua_detail' => $id_bua_detail]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_1($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_1', $data);
        }
    }

    // tbl_detail_bua_2
    public function delete_tbl_detail_bua_2($id_detail_bua_1)
    {
        $this->db->delete('tbl_detail_bua_2', ['id_detail_bua_1' => $id_detail_bua_1]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_2', $data);
        }
    }

    // tbl_detail_bua_3
    public function delete_tbl_detail_bua_3($id_detail_bua_2)
    {
        $this->db->delete('tbl_detail_bua_3', ['id_detail_bua_2' => $id_detail_bua_2]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_3($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_3', $data);
        }
    }

    // tbl_detail_bua_4
    public function delete_tbl_detail_bua_4($id_detail_bua_3)
    {
        $this->db->delete('tbl_detail_bua_4', ['id_detail_bua_3' => $id_detail_bua_3]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_4($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_4', $data);
        }
    }

    // tbl_detail_bua_5
    public function delete_tbl_detail_bua_5($id_detail_bua_4)
    {
        $this->db->delete('tbl_detail_bua_5', ['id_detail_bua_4' => $id_detail_bua_4]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_5($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_5', $data);
        }
    }

    // tbl_detail_bua_6
    public function delete_tbl_detail_bua_6($id_detail_bua_5)
    {
        $this->db->delete('tbl_detail_bua_6', ['id_detail_bua_5' => $id_detail_bua_5]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_6($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_6', $data);
        }
    }


    // tbl_detail_bua_7
    public function delete_tbl_detail_bua_7($id_detail_bua_6)
    {
        $this->db->delete('tbl_detail_bua_7', ['id_detail_bua_6' => $id_detail_bua_6]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_7($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_7', $data);
        }
    }

    // tbl_detail_bua_8
    public function delete_tbl_detail_bua_8($id_detail_bua_7)
    {
        $this->db->delete('tbl_detail_bua_8', ['id_detail_bua_7' => $id_detail_bua_7]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_8($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_8', $data);
        }
    }

    // tbl_detail_bua_9
    public function delete_tbl_detail_bua_9($id_detail_bua_8)
    {
        $this->db->delete('tbl_detail_bua_9', ['id_detail_bua_8' => $id_detail_bua_8]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_9($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_9', $data);
        }
    }

    // tbl_detail_bua_10
    public function delete_tbl_detail_bua_10($id_detail_bua_9)
    {
        $this->db->delete('tbl_detail_bua_10', ['id_detail_bua_9' => $id_detail_bua_9]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_bua_10($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_bua_10', $data);
        }
    }

    // BATAS SDM
    // sdm
    public function delete_tbl_sdm_detail($id_sdm)
    {
        $this->db->delete('tbl_sdm_detail', ['id_sdm' => $id_sdm]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_sdm_level_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_sdm_detail', $data);
        }
    }

    // tbl_detail_sdm_1
    public function delete_tbl_detail_sdm_1($id_sdm_detail)
    {
        $this->db->delete('tbl_detail_sdm_1', ['id_sdm_detail' => $id_sdm_detail]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_1($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_1', $data);
        }
    }

    // tbl_detail_sdm_2
    public function delete_tbl_detail_sdm_2($id_detail_sdm_1)
    {
        $this->db->delete('tbl_detail_sdm_2', ['id_detail_sdm_1' => $id_detail_sdm_1]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_2', $data);
        }
    }

    // tbl_detail_sdm_3
    public function delete_tbl_detail_sdm_3($id_detail_sdm_2)
    {
        $this->db->delete('tbl_detail_sdm_3', ['id_detail_sdm_2' => $id_detail_sdm_2]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_3($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_3', $data);
        }
    }

    // tbl_detail_sdm_4
    public function delete_tbl_detail_sdm_4($id_detail_sdm_3)
    {
        $this->db->delete('tbl_detail_sdm_4', ['id_detail_sdm_3' => $id_detail_sdm_3]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_4($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_4', $data);
        }
    }

    // tbl_detail_sdm_5
    public function delete_tbl_detail_sdm_5($id_detail_sdm_4)
    {
        $this->db->delete('tbl_detail_sdm_5', ['id_detail_sdm_4' => $id_detail_sdm_4]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_5($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_5', $data);
        }
    }

    // tbl_detail_sdm_6
    public function delete_tbl_detail_sdm_6($id_detail_sdm_5)
    {
        $this->db->delete('tbl_detail_sdm_6', ['id_detail_sdm_5' => $id_detail_sdm_5]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_6($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_6', $data);
        }
    }


    // tbl_detail_sdm_7
    public function delete_tbl_detail_sdm_7($id_detail_sdm_6)
    {
        $this->db->delete('tbl_detail_sdm_7', ['id_detail_sdm_6' => $id_detail_sdm_6]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_7($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_7', $data);
        }
    }

    // tbl_detail_sdm_8
    public function delete_tbl_detail_sdm_8($id_detail_sdm_7)
    {
        $this->db->delete('tbl_detail_sdm_8', ['id_detail_sdm_7' => $id_detail_sdm_7]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_8($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_8', $data);
        }
    }

    // tbl_detail_sdm_9
    public function delete_tbl_detail_sdm_9($id_detail_sdm_8)
    {
        $this->db->delete('tbl_detail_sdm_9', ['id_detail_sdm_8' => $id_detail_sdm_8]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_9($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_9', $data);
        }
    }

    // tbl_detail_sdm_10
    public function delete_tbl_detail_sdm_10($id_detail_sdm_9)
    {
        $this->db->delete('tbl_detail_sdm_10', ['id_detail_sdm_9' => $id_detail_sdm_9]);
        return $this->db->affected_rows();
    }

    public function insert_via_excel_tbl_detail_sdm_10($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_detail_sdm_10', $data);
        }
    }


    // ININ UNTUK EXCEL HPS PENYEDIA

    public function insert_via_hps_penyedia_1($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_1', $data);
        }
    }

    public function insert_via_hps_penyedia_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_2', $data);
        }
    }

    public function insert_via_hps_penyedia_3($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_3', $data);
        }
    }

    public function insert_via_hps_penyedia_4($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_4', $data);
        }
    }

    public function insert_via_hps_penyedia_5($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_5', $data);
        }
    }

    // EXCEL HPS PENYEDIA KONTRAK
    public function insert_via_hps_penyedia_kontrak_1($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_kontrak_1', $data);
        }
    }

    public function insert_via_hps_penyedia_kontrak_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_kontrak_2', $data);
        }
    }

    public function insert_via_hps_penyedia_kontrak_3($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_kontrak_3', $data);
        }
    }

    public function insert_via_hps_penyedia_kontrak_4($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_kontrak_4', $data);
        }
    }

    public function insert_via_hps_penyedia_kontrak_5($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_hps_penyedia_kontrak_5', $data);
        }
    }

    // update
    public function update_ke_tbl_hps_penyedia_kontrak_mc_1($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_mc_1', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_hps_penyedia_kontrak_mc_2($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_mc_2', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_ke_tbl_hps_penyedia_kontrak_mc_3($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_mc_3', $data, $where);
        return $this->db->affected_rows();
    }
    public function update_ke_tbl_hps_penyedia_kontrak_mc_4($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_mc_4', $data, $where);
        return $this->db->affected_rows();
    }
    public function update_ke_tbl_hps_penyedia_kontrak_mc_5($where, $data)
    {
        $this->db->update('tbl_hps_penyedia_kontrak_mc_5', $data, $where);
        return $this->db->affected_rows();
    }

    // INI UNTUK UNIT PRICE
    // unit_price
    public function delete_tbl_unit_price_1($id_unit_price)
    {
        $this->db->delete('tbl_unit_price_1', ['id_unit_price' => $id_unit_price]);
        return $this->db->affected_rows();
    }
    // _1
    public function insert_via_excel_unit_price_level_1($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_1', $data);
        }
    }

    // _2
    public function insert_via_excel_unit_price_level_2($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_2', $data);
        }
    }

    // _3
    public function insert_via_excel_unit_price_level_3($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_3', $data);
        }
    }

    // _4
    public function insert_via_excel_unit_price_level_4($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_4', $data);
        }
    }

    // _5
    public function insert_via_excel_unit_price_level_5($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_5', $data);
        }
    }

    // _6
    public function insert_via_excel_unit_price_level_6($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_6', $data);
        }
    }
    // _7
    public function insert_via_excel_unit_price_level_7($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_7', $data);
        }
    }
    // _8
    public function insert_via_excel_unit_price_level_8($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_8', $data);
        }
    }
    // _9
    public function insert_via_excel_unit_price_level_9($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_9', $data);
        }
    }
    // _10
    public function insert_via_excel_unit_price_level_10($data)
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->replace('tbl_unit_price_10', $data);
        }
    }
}
