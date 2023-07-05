<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Filter_role extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Data_kontrak_model');
        $this->load->model('Auth_model');
    }

    public function get_area($id_departemen)
   {
      $data_area = $this->Data_kontrak_model->get_area_by_departemen($id_departemen);
      echo '<option value="">--Pilih Area--</option>';
      foreach ($data_area as $key => $value) {
         echo '<option value="' . $value['id_area'] . '">' . $value['nama_area'] . '</option>';
      }
   }

   public function get_sub_area($id_area)
   {
      $data_sub_area = $this->Data_kontrak_model->get_sub_by_area($id_area);
      echo '<option value="">--Pilih Sub Area--</option>';
      foreach ($data_sub_area as $key => $value) {
         echo '<option value="' . $value['id_sub_area'] . '">' . $value['nama_sub_area'] . '</option>';
      }
   }
}
