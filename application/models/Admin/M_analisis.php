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
}
