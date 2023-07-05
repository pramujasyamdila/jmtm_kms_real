<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan_kontrak_model extends CI_Model
{
    var $filed = array('no_adendum', 'tanggal_adendum', 'jumlah', 'no_kontrak');
    private function _get_all_adendum($no_kontrak = null)
    {
        $i = 0;
        $this->db->select('*');
        $this->db->from('tbl_adendum');
        $this->db->join('tbl_kontrak', 'tbl_kontrak.no_kontrak = tbl_adendum.no_kontrak', 'left');
        if (isset($no_kontrak)) {
            $this->db->like('tbl_adendum.no_kontrak', $no_kontrak);
        }
        foreach ($this->filed as $item) // looping awal
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

                if (count($this->filed) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->filed[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('tbl_adendum.no_adendum', 'DESC');
        }
    }

    public function GetByKontrakAdendum($no_kontrak) //nam[ilin data pake ini
    {
        $this->_get_all_adendum($no_kontrak); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_adendum($no_kontrak)
    {
        $this->_get_all_adendum($no_kontrak); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_seacrh_adendum($no_kontrak)
    {
        $this->_get_all_adendum($no_kontrak);
        return $this->db->count_all_results();
    }



    var $filed_rapot = array('id_rapot_mc_traking', 'id_mc', 'uraian', 'pic', 'tanggal_rapot', 'catatan_rapot', 'hari_vendor', 'hari_area', 'hari_pusat', 'hari_finance');
    private function _get_all_rapot($id_mc = null)
    {
        $i = 0;
        $this->db->select('*');
        $this->db->from('tbl_rapot_mc_traking');
        $this->db->where('id_mc', $id_mc);
        foreach ($this->filed_rapot as $item) // looping awal
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

                if (count($this->filed_rapot) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->filed_rapot[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('tbl_rapot_mc_traking.id_rapot_mc_traking', 'ASC');
        }
    }

    public function getdattable_rapot_traking($id_mc) //nam[ilin data pake ini
    {
        $this->_get_all_rapot($id_mc); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_rapot_traking($id_mc)
    {
        $this->_get_all_rapot($id_mc); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_seacrh_rapot_traking($id_mc)
    {
        $this->_get_all_rapot($id_mc);
        return $this->db->count_all_results();
    }

    public function GetByIdKontrak($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_kontrak');
        $this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_kontrak.id_vendor', 'left');
        $this->db->where('no_kontrak', $no_kontrak);
        $data = $this->db->get();
        return $data->row_array();
    }

    public function get_addendum($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_addendum');
        $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $data = $this->db->get();
        return $data->result_array();
    }


    public function GetByIdKontrakDetail($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->join('tbl_kontrak', 'tbl_kontrak.no_kontrak = tbl_mc.no_kontrak', 'left');
        $this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_kontrak.id_vendor', 'left');
        $this->db->join('tbl_detail_kontrak', 'tbl_detail_kontrak.no_kontrak = tbl_kontrak.no_kontrak', 'left');
        $this->db->join('tbl_program', 'tbl_program.id_program = tbl_detail_kontrak.id_program', 'left');
        $this->db->where('tbl_mc.no_kontrak', $no_kontrak);
        $this->db->group_by('tbl_mc.no_mc');
        $this->db->order_by('(tbl_mc.no_mc)');
        $data = $this->db->get();
        return $data->result_array();
    }


    public function get_row_kontrak($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_kontrak');
        $this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_kontrak.id_vendor', 'left');
        $this->db->join('tbl_detail_kontrak', 'tbl_detail_kontrak.no_kontrak = tbl_kontrak.no_kontrak', 'left');
        $this->db->join('tbl_program', 'tbl_program.id_program = tbl_detail_kontrak.id_program', 'left');
        $this->db->where('tbl_kontrak.no_kontrak', $no_kontrak);
        $this->db->group_by('tbl_kontrak.no_kontrak');
        $data = $this->db->get();
        return $data->row_array();
    }



    public function cekKontrak($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('tbl_mc.no_kontrak', $no_kontrak);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function cek_row_mc($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('tbl_mc.id_mc', $id_mc);
        $data = $this->db->get();
        return $data->row_array();
    }


    public function cek_mc_traking($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_traking_mc');
        $this->db->join('tbl_mc', 'tbl_mc.id_mc = tbl_traking_mc.id_mc', 'left');
        $this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_traking_mc.id_vendor', 'left');
        $this->db->where('tbl_traking_mc.id_mc', $id_mc);
        $data = $this->db->get();
        return $data->row_array();
    }


    public function cek_mc_traking_row($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_traking_mc');
        $this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_traking_mc.id_vendor', 'left');
        $this->db->where('tbl_traking_mc.id_mc', $id_mc);
        $data = $this->db->get();
        return $data->row();
    }



    public function cek_only_no_mc($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('no_kontrak', $no_kontrak);
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }

    public function get_last_mc($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('no_kontrak', $no_kontrak);
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }
    public function cek_pertama_mc_apa($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('no_kontrak', $no_kontrak);
        $this->db->order_by('tbl_mc.no_mc', 'ASC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }


    public function get_last_mc_jumlah($no_kontrak)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('no_kontrak', $no_kontrak);
        $this->db->order_by('tbl_mc.no_mc', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }


    public function insert_mc($data)
    {
        $this->db->insert('tbl_mc', $data);
    }

    public function create_file_mc($data)
    {
        $this->db->insert('tbl_traking_mc', $data);
    }

    public function create_rapot($data)
    {
        $this->db->insert('tbl_rapot_mc_traking', $data);
    }

    public function update_mc($data, $where)
    {
        $this->db->where('id_mc', $where);
        $this->db->update('tbl_mc', $data);
    }
    public function update_mc_traking($data, $where)
    {
        $this->db->where('id_traking ', $where);
        $this->db->update('tbl_traking_mc', $data);
    }

    public function delete_mc_traking($id_traking)
    {
        $this->db->delete('tbl_traking_mc', ['id_traking' => $id_traking]);
    }

    // kode otomatis mc
    public function get_kode_mc($no_kontrak)
    {
        $this->db->select_max('no_mc');
        $this->db->from('tbl_mc');
        $this->db->where('no_kontrak', $no_kontrak);
        $this->db->not_like('no_mc', 'um');
        $data = $this->db->get();
        $hasil = $data->row();
        return $hasil->no_mc;
    }

    // vendor
    public function get_traking_vendor($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_rapot_mc_traking');
        $this->db->where('id_mc', $id_mc);
        $this->db->where('uraian', 'Vendor Kirim Berkas');
        $this->db->order_by('tbl_rapot_mc_traking.id_mc', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }
    // area
    public function get_traking_area($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_rapot_mc_traking');
        $this->db->where('id_mc', $id_mc);
        $this->db->where('pic', 'Area');
        $this->db->order_by('tbl_rapot_mc_traking.id_mc', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }
    public function get_traking_pusat($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_rapot_mc_traking');
        $this->db->where('id_mc', $id_mc);
        $this->db->where('pic', 'Pusat');
        $this->db->order_by('tbl_rapot_mc_traking.id_mc', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }
    public function get_traking_finance($id_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_rapot_mc_traking');
        $this->db->where('id_mc', $id_mc);
        $this->db->where('pic', 'Finance');
        $this->db->order_by('tbl_rapot_mc_traking.id_mc', 'DESC');
        $this->db->limit(1);
        $data = $this->db->get();
        return $data->row_array();
    }




    // INI UNTUK DOK PENUNJANG
    var $pdf_hps_order = array('id_detail_program_penyedia_jasa', 'id_detail_program_penyedia_jasa');
    private function _get_dok_mc($id_detail_program_penyedia_jasa, $type)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        if ($type == 'file_refrensi_bank_mc') {
            $this->db->where('file_refrensi_bank_mc !=', null);
        } else  if ($type == 'file_ktp_mc') {
            $this->db->where('file_ktp_mc !=', null);
        } else  if ($type == 'file_npwp_mc') {
            $this->db->where('file_npwp_mc !=', null);
        } else  if ($type == 'file_sppkp_mc') {
            $this->db->where('file_sppkp_mc !=', null);
        } else  if ($type == 'file_sbu_mc') {
            $this->db->where('file_sbu_mc !=', null);
        } else  if ($type == 'file_kontrak_jasa_pemborongan_mc') {
            $this->db->where('file_kontrak_jasa_pemborongan_mc !=', null);
        } else  if ($type == 'file_addendum_mc') {
            $this->db->where('file_addendum_mc !=', null);
        } else  if ($type == 'file_spmk_mc') {
            $this->db->where('file_spmk_mc !=', null);
        }
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
            $this->db->order_by('id_detail_program_penyedia_jasa', 'DESC');
        }
    }

    public function get_data_dok_mc($id_detail_program_penyedia_jasa, $type) //nam[ilin data pake ini
    {
        $this->_get_dok_mc($id_detail_program_penyedia_jasa, $type); //ambil data dari get yg di atas
        if ($_POST['length'] != -3) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function count_filtered_get_data_dok_mc($id_detail_program_penyedia_jasa, $type)
    {
        $this->_get_dok_mc($id_detail_program_penyedia_jasa, $type); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function count_all_get_data_dok_mc($id_detail_program_penyedia_jasa, $type)
    {
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->where('id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        if ($type == 'file_refrensi_bank_mc') {
            $this->db->where('file_refrensi_bank_mc', $type);
        } else  if ($type == 'file_ktp_mc') {
            $this->db->where('file_ktp_mc', $type);
        } else  if ($type == 'file_npwp_mc') {
            $this->db->where('file_npwp_mc', $type);
        } else  if ($type == 'file_sppkp_mc') {
            $this->db->where('file_sppkp_mc', $type);
        } else  if ($type == 'file_sbu_mc') {
            $this->db->where('file_sbu_mc', $type);
        } else  if ($type == 'file_kontrak_jasa_pemborongan_mc') {
            $this->db->where('file_kontrak_jasa_pemborongan_mc', $type);
        } else  if ($type == 'file_addendum_mc') {
            $this->db->where('file_addendum_mc', $type);
        } else  if ($type == 'file_spmk_mc') {
            $this->db->where('file_spmk_mc', $type);
        }
        return $this->db->count_all_results();
    }
    public function create_dok_mc($data)
    {
        $this->db->insert('tbl_detail_program_penyedia_jasa', $data);
        return $this->db->affected_rows();
    }
}
