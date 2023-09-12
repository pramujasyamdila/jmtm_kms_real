<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_analisis extends CI_Model
{
    function m1_dok_selesai()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_dokumen_penunjang', 'mst_kontrak.id_kontrak = tbl_dokumen_penunjang.id_kontrak');
        return $this->db->count_all_results();
    }

    function m1_dok_progres()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('table_adendum', 'mst_kontrak.id_kontrak = table_adendum.id_kontrak');
        return $this->db->count_all_results();
    }

    function m1_dok_progres2()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_dokumen_penunjang', 'mst_kontrak.id_kontrak = tbl_dokumen_penunjang.id_kontrak');
        return $this->db->count_all_results();
    }

    function m2_dok_selesai()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        $this->db->join('tbl_dokumen_surat_pra', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_dokumen_surat_pra.file !=', NULL);
        return $this->db->count_all_results();
    }


    function m2_dok_progres()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        $this->db->join('tbl_dokumen_surat_pra', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_dokumen_surat_pra.file', NULL);
        return $this->db->count_all_results();
    }

    function m2_dok_selesai_pasca()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        $this->db->join('tbl_dokumen_surat_pasca', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_dokumen_surat_pasca.file !=', NULL);
        return $this->db->count_all_results();
    }


    function m2_dok_progres_pasca()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        $this->db->join('tbl_dokumen_surat_pasca', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_dokumen_surat_pasca.file', NULL);
        return $this->db->count_all_results();
    }

    function m2_dok_selesai_pasca_kontrak()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        $this->db->join('tbl_dokumen_kontrak_hps', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_kontrak_hps.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_dokumen_kontrak_hps.nama_file !=', NULL);
        return $this->db->count_all_results();
    }


    function m2_dok_progres_pasca_kontrak()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        $this->db->join('tbl_dokumen_kontrak_hps', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_kontrak_hps.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_dokumen_kontrak_hps.nama_file', NULL);
        return $this->db->count_all_results();
    }

    function total_pekerjaan_pasca()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        return $this->db->count_all_results();
    }

    //  INI INTUK TRACKER

    function get_all_detail_program()
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->where('nama_penyedia !=', NULL);
        $this->db->group_by('tbl_detail_program_penyedia_jasa.nama_penyedia');
    }
    function get_kontrak()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area');
        $query = $this->db->get();
        return $query->result_array();
    }


    function get_row_detail_program($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }


    function get_result_mc($id_detail_program_penyedia_jasa)
    {
        $this->db->select('*');
        $this->db->from('tbl_mc');
        $this->db->where('tbl_mc.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->result_array();
    }

    function result_tracking_mc($id_detail_program_penyedia_jasa, $result_mc)
    {
        $this->db->select('*');
        $this->db->from('tbl_rapot_dummy');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_rapot_dummy.id_detail_program_penyedia_jasa = tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
        $this->db->join('tbl_mc', 'tbl_rapot_dummy.id_mc = tbl_mc.id_mc');
        $this->db->where('tbl_rapot_dummy.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        foreach ($result_mc as $key => $value) {
            $this->db->where('tbl_rapot_dummy.catatan_rapot', $value['status_terakhir']);
        }
    }
    function get_pekerjaan()
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area');
        $query = $this->db->get();
        return $query->result_array();
    }


    function result_average_tracking_mc($id_detail_program_penyedia_jasa, $result_mc)
    {
        $this->db->select('AVG(hari_vendor) avg_vendor,AVG(hari_area) avg_area,AVG(hari_pusat) avg_pusat,AVG(hari_finance) avg_finance');
        $this->db->from('tbl_rapot_dummy');
        $this->db->where('tbl_rapot_dummy.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
        $query = $this->db->get();
        return $query->row_array();
    }

    // INI UNTUK DETAIL BERKAS
    // detail_berkas
    var $tbl_detail_program = 'tbl_detail_program_penyedia_jasa';
    var $order_detail_program = array('id_detail_program_penyedia_jasa', 'id_detail_program_penyedia_jasa', 'id_detail_program_penyedia_jasa');
    var $colum_detail_program = array('id_detail_program_penyedia_jasa', 'id_detail_program_penyedia_jasa', 'id_detail_program_penyedia_jasa');

    private function _get_data_query_detail_program_penyedia_jasa()
    {
        $i = 0;
        $this->db->select('*');
        $this->db->from($this->tbl_detail_program);
        if (isset($_POST['cari_nama_penyedia']) && $_POST['cari_nama_penyedia'] != '') {
            $this->db->where('tbl_detail_program_penyedia_jasa.nama_penyedia', $_POST['cari_nama_penyedia']);
        }
        foreach ($this->colum_detail_program as $item) // looping awal
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

                if (count($this->colum_detail_program) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->order_detail_program[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', 'DESC');
        }
    }

    public function getdatatbl_detail_program()
    {
        $this->_get_data_query_detail_program_penyedia_jasa();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered_data_detail_program()
    {
        $this->_get_data_query_detail_program_penyedia_jasa();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data_detail_program()
    {
        $this->_get_data_query_detail_program_penyedia_jasa();
        return $this->db->count_all_results();
    }

    // END TRACKER

    // TRACKER ALL
    function result_average_tracking_mc_all($cari_nama_penyedia)
    {
        $this->db->select('AVG(hari_vendor) avg_vendor,AVG(hari_area) avg_area,AVG(hari_pusat) avg_pusat,AVG(hari_finance) avg_finance');
        $this->db->from('tbl_rapot_dummy');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'tbl_rapot_dummy.id_detail_program_penyedia_jasa = tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
        $this->db->where('tbl_detail_program_penyedia_jasa.nama_penyedia', $cari_nama_penyedia);
        $query = $this->db->get();
        return $query->row_array();
    }

    // END TRACKER ALL
    function count_pekerjaan()
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_program_penyedia_jasa');
        $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak');
        $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area');
        return $this->db->count_all_results();
    }

    function get_mc()
    {
        $this->db->select('*');
        $this->db->from('mst_kontrak');
        $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
        $this->db->join('tbl_mc', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_mc.id_detail_program_penyedia_jasa');
        $query = $this->db->get();
        return $query->result_array();
    }
}
