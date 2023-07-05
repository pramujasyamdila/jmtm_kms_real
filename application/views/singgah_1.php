// LEVEL 2 sdm
    // Update Nilai Level 2
    public function update_nilai_level_2_sdm($id_sdm)
    {
        $type_add = $this->input->post('type_add');
        $data['id_sdm'] = $id_sdm;
        $data['type_add'] = $type_add;
        $this->load->view('sdm/nilai_level_2', $data);
    }
    // Tambah Nilai Level 2
    public function tambah_nama_uraian_level_2_sdm($id_sdm)
    {
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_sdm_detail($id_sdm);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.4 . '.' . $count,
                'id_sdm' => $id_sdm,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian' => $this->input->post('nama_uraian'),
                'no_urut' => 1.4 . '.' . $count,
                'id_sdm' => $id_sdm,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 3 sdm
    // Update Nilai Level 3
    public function update_nilai_level_3_sdm()
    {
        $this->load->view('sdm/nilai_level_3');
    }
    // Tambah Nilai Level 3
    public function tambah_nama_uraian_level_3_sdm()
    {
        $id_sdm_detail = $this->input->post('id_sdm_detail');
        $row_sdm_detail =  $this->Data_kontrak_model->by_id_sdm_detail($id_sdm_detail);
        $row_no_urut = $row_sdm_detail['no_urut'];

        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_sdm_detail_1($id_sdm_detail);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_1_sdm' => $this->input->post('nama_uraian'),
                'no_urut_1_sdm' => $row_no_urut . '.' . $count,
                'id_sdm_detail' => $id_sdm_detail,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_1_sdm' => $this->input->post('nama_uraian'),
                'no_urut_1_sdm' => $row_no_urut . '.' . $count,
                'id_sdm_detail' => $id_sdm_detail,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_1($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_3_sdm()
    {
        $id_sdm_detail = $this->input->post('id_sdm_detail');
        $where = [
            'id_sdm_detail' => $id_sdm_detail
        ];
        $data = [
            'nama_uraian' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_sdm_detail($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_3_sdm($id_sdm_detail)
    {
        $this->Data_kontrak_model->delete_tbl_sdm_detail($id_sdm_detail);
        $data['id_sdm'] = $this->input->post('id_sdm');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_3', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_1($id_sdm_detail);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 4 sdm
    // Update Nilai Level 4
    public function by_id_detail_sdm_1($id_detail_sdm_1)
    {
        $row_sdm_detail_1 = $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
        $id_sdm_detail = $row_sdm_detail_1['id_sdm_detail'];
        $result_detail_sdm_1 = $this->Data_kontrak_model->result_detail_sdm_1_by_id_sdm_detail($id_sdm_detail);
        $data = [
            'row_sdm_detail_1' => $row_sdm_detail_1,
            'result_detail_sdm_1' => $result_detail_sdm_1
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_4_sdm()
    {
        $this->load->view('sdm/nilai_level_4');
    }
    // Tambah Nilai Level 4
    public function tambah_nama_uraian_level_4_sdm()
    {
        $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
        $row_sdm_detail =  $this->Data_kontrak_model->by_id_detail_sdm_1($id_detail_sdm_1);
        $row_no_urut = $row_sdm_detail['no_urut_1_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_2($id_detail_sdm_1);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_2_sdm' => $this->input->post('nama_uraian'),
                'no_urut_2_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_1' => $id_detail_sdm_1,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_2_sdm' => $this->input->post('nama_uraian'),
                'no_urut_2_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_1' => $id_detail_sdm_1,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_2($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_4_sdm()
    {
        $id_detail_sdm_1 = $this->input->post('id_detail_sdm_1');
        $where = [
            'id_detail_sdm_1' => $id_detail_sdm_1
        ];
        $data = [
            'nama_uraian_1_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_1($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_4_sdm($id_detail_sdm_1)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_1($id_detail_sdm_1);
        $data['id_sdm_detail'] = $this->input->post('id_sdm_detail');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_4', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_2($id_detail_sdm_1);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 5 sdm
    // Update Nilai Level 5`
    public function by_id_detail_sdm_2($id_detail_sdm_2)
    {
        // 2
        // _1
        $row_sdm_detail_2 = $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
        $id_detail_sdm_1 = $row_sdm_detail_2['id_detail_sdm_1'];
        $result_detail_sdm_2 = $this->Data_kontrak_model->result_detail_sdm_2_by_id_sdm_detail($id_detail_sdm_1);
        $data = [
            'row_sdm_detail_2' => $row_sdm_detail_2,
            'result_detail_sdm_2' => $result_detail_sdm_2
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_5_sdm()
    {
        $this->load->view('sdm/nilai_level_5');
    }
    // Tambah Nilai Level 5
    public function tambah_nama_uraian_level_5_sdm()
    {

        $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
        $row_detail_sdm_2 =  $this->Data_kontrak_model->by_id_detail_sdm_2($id_detail_sdm_2);
        $row_no_urut = $row_detail_sdm_2['no_urut_2_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_3($id_detail_sdm_2);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_3_sdm' => $this->input->post('nama_uraian'),
                'no_urut_3_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_2' => $id_detail_sdm_2,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_3_sdm' => $this->input->post('nama_uraian'),
                'no_urut_3_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_2' => $id_detail_sdm_2,
                'display_order' => $count
            ];
        }

        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_3($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_5_sdm()
    {
        $id_detail_sdm_2 = $this->input->post('id_detail_sdm_2');
        $where = [
            'id_detail_sdm_2' => $id_detail_sdm_2
        ];
        $data = [
            'nama_uraian_2_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_2($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_5_sdm($id_detail_sdm_2)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_2($id_detail_sdm_2);
        $data['id_detail_sdm_1'] = $this->input->post('id_detail_sdm_1');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_5', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_3($id_detail_sdm_2);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 6 sdm
    // Update Nilai Level 6
    public function by_id_detail_sdm_3($id_detail_sdm_3)
    {
        // 3
        // _2
        $row_sdm_detail_3 = $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
        $id_detail_sdm_2 = $row_sdm_detail_3['id_detail_sdm_2'];
        $result_detail_sdm_3 = $this->Data_kontrak_model->result_detail_sdm_3_by_id_sdm_detail($id_detail_sdm_2);
        $data = [
            'row_sdm_detail_3' => $row_sdm_detail_3,
            'result_detail_sdm_3' => $result_detail_sdm_3
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_6_sdm()
    {
        $this->load->view('sdm/nilai_level_6');
    }

    public function tambah_nama_uraian_level_6_sdm()
    {
        $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
        $row_detail_sdm_3 =  $this->Data_kontrak_model->by_id_detail_sdm_3($id_detail_sdm_3);
        $row_no_urut = $row_detail_sdm_3['no_urut_3_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_4($id_detail_sdm_3);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_4_sdm' => $this->input->post('nama_uraian'),
                'no_urut_4_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_3' => $id_detail_sdm_3,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_4_sdm' => $this->input->post('nama_uraian'),
                'no_urut_4_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_3' => $id_detail_sdm_3,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_4($data);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_6_sdm()
    {
        $id_detail_sdm_3 = $this->input->post('id_detail_sdm_3');
        $where = [
            'id_detail_sdm_3' => $id_detail_sdm_3
        ];
        $data = [
            'nama_uraian_3_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_3($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_6_sdm($id_detail_sdm_3)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_3($id_detail_sdm_3);
        $data['id_detail_sdm_2'] = $this->input->post('id_detail_sdm_2');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_6', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_4($id_detail_sdm_3);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    // LEVEL 7 sdm
    // Update Nilai Level 7
    public function by_id_detail_sdm_4($id_detail_sdm_4)
    {
        // 4
        // _3
        $row_sdm_detail_4 = $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
        $id_detail_sdm_3 = $row_sdm_detail_4['id_detail_sdm_3'];
        $result_detail_sdm_4 = $this->Data_kontrak_model->result_detail_sdm_4_by_id_sdm_detail($id_detail_sdm_3);
        $data = [
            'row_sdm_detail_4' => $row_sdm_detail_4,
            'result_detail_sdm_4' => $result_detail_sdm_4
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_7_sdm()
    {
        $this->load->view('sdm/nilai_level_7');
    }

    public function tambah_nama_uraian_level_7_sdm()
    {
        $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
        $row_detail_sdm_4 =  $this->Data_kontrak_model->by_id_detail_sdm_4($id_detail_sdm_4);
        $row_no_urut = $row_detail_sdm_4['no_urut_4_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_5($id_detail_sdm_4);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_5_sdm' => $this->input->post('nama_uraian'),
                'no_urut_5_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_4' => $id_detail_sdm_4,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_5_sdm' => $this->input->post('nama_uraian'),
                'no_urut_5_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_4' => $id_detail_sdm_4,
                'display_order' => $count
            ];
        }


        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_5($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_7_sdm()
    {
        $id_detail_sdm_4 = $this->input->post('id_detail_sdm_4');
        $where = [
            'id_detail_sdm_4' => $id_detail_sdm_4
        ];
        $data = [
            'nama_uraian_4_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_4($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_7_sdm($id_detail_sdm_4)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_4($id_detail_sdm_4);
        $data['id_detail_sdm_3'] = $this->input->post('id_detail_sdm_3');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_7', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_5($id_detail_sdm_4);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 8 sdm
    // Update Nilai Level 8
    public function by_id_detail_sdm_5($id_detail_sdm_5)
    {
        // 5
        // _4
        $row_sdm_detail_5 = $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
        $id_detail_sdm_4 = $row_sdm_detail_5['id_detail_sdm_4'];
        $result_detail_sdm_5 = $this->Data_kontrak_model->result_detail_sdm_5_by_id_sdm_detail($id_detail_sdm_4);
        $data = [
            'row_sdm_detail_5' => $row_sdm_detail_5,
            'result_detail_sdm_5' => $result_detail_sdm_5
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_8_sdm()
    {
        $this->load->view('sdm/nilai_level_8');
        // 46
    }

    public function tambah_nama_uraian_level_8_sdm()
    {
        $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
        $row_detail_sdm_5 =  $this->Data_kontrak_model->by_id_detail_sdm_5($id_detail_sdm_5);
        $row_no_urut = $row_detail_sdm_5['no_urut_5_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_6($id_detail_sdm_5);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'nama_uraian_6_sdm' => $this->input->post('nama_uraian'),
                'no_urut_6_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_5' => $id_detail_sdm_5,
                'display_order' => $count
            ];
        } else {
            $data = [
                'nama_uraian_6_sdm' => $this->input->post('nama_uraian'),
                'no_urut_6_sdm' => $row_no_urut . '.' . $count,
                'id_detail_sdm_5' => $id_detail_sdm_5,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_6($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_8_sdm()
    {
        $id_detail_sdm_5 = $this->input->post('id_detail_sdm_5');
        $where = [
            'id_detail_sdm_5' => $id_detail_sdm_5
        ];
        $data = [
            'nama_uraian_5_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_5($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_8_sdm($id_detail_sdm_5)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_5($id_detail_sdm_5);
        $data['id_detail_sdm_4'] = $this->input->post('id_detail_sdm_4');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_8', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_6($id_detail_sdm_5);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 9 sdm
    // Update Nilai Level 9
    public function by_id_detail_sdm_6($id_detail_sdm_6)
    {
        // 6
        // _5
        $row_sdm_detail_6 = $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
        $id_detail_sdm_5 = $row_sdm_detail_6['id_detail_sdm_5'];
        $result_detail_sdm_6 = $this->Data_kontrak_model->result_detail_sdm_6_by_id_sdm_detail($id_detail_sdm_5);
        $data = [
            'row_sdm_detail_6' => $row_sdm_detail_6,
            'result_detail_sdm_6' => $result_detail_sdm_6
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_9_sdm()
    {
        $this->load->view('sdm/nilai_level_9');
        // 47
    }

    public function tambah_nama_uraian_level_9_sdm()
    {
        $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
        $row_detail_sdm_6 =  $this->Data_kontrak_model->by_id_detail_sdm_6($id_detail_sdm_6);
        $row_no_urut = $row_detail_sdm_6['no_urut_6_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_7($id_detail_sdm_6);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_6' => $id_detail_sdm_6,
                'nama_uraian_7_sdm' => $this->input->post('nama_uraian'),
                'no_urut_7_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_6' => $id_detail_sdm_6,
                'nama_uraian_7_sdm' => $this->input->post('nama_uraian'),
                'no_urut_7_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_7($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_9_sdm()
    {
        $id_detail_sdm_6 = $this->input->post('id_detail_sdm_6');
        $where = [
            'id_detail_sdm_6' => $id_detail_sdm_6
        ];
        $data = [
            'nama_uraian_6_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_6($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_9_sdm($id_detail_sdm_6)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_6($id_detail_sdm_6);
        $data['id_detail_sdm_5'] = $this->input->post('id_detail_sdm_5');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_9', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_7($id_detail_sdm_6);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }

    // LEVEL 10 sdm
    // Update Nilai Level 10
    public function by_id_detail_sdm_7($id_detail_sdm_7)
    {
        // 7
        // _6
        $row_sdm_detail_7 = $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
        $id_detail_sdm_6 = $row_sdm_detail_7['id_detail_sdm_6'];
        $result_detail_sdm_7 = $this->Data_kontrak_model->result_detail_sdm_7_by_id_sdm_detail($id_detail_sdm_6);
        $data = [
            'row_sdm_detail_7' => $row_sdm_detail_7,
            'result_detail_sdm_7' => $result_detail_sdm_7
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_10_sdm()
    {
        $this->load->view('sdm/nilai_level_10');
        // 48
    }

    public function tambah_nama_uraian_level_10_sdm()
    {
        $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
        $row_detail_sdm_7 =  $this->Data_kontrak_model->by_id_detail_sdm_7($id_detail_sdm_7);
        $row_no_urut = $row_detail_sdm_7['no_urut_7_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_8($id_detail_sdm_7);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_7' => $id_detail_sdm_7,
                'nama_uraian_8_sdm' => $this->input->post('nama_uraian'),
                'no_urut_8_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_7' => $id_detail_sdm_7,
                'nama_uraian_8_sdm' => $this->input->post('nama_uraian'),
                'no_urut_8_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_8($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_10_sdm()
    {
        $id_detail_sdm_7 = $this->input->post('id_detail_sdm_7');
        $where = [
            'id_detail_sdm_7' => $id_detail_sdm_7
        ];
        $data = [
            'nama_uraian_7_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_7($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_10_sdm($id_detail_sdm_7)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_7($id_detail_sdm_7);
        $data['id_detail_sdm_6'] = $this->input->post('id_detail_sdm_6');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_10', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_8($id_detail_sdm_7);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 11 sdm
    // Update Nilai Level 11
    public function by_id_detail_sdm_8($id_detail_sdm_8)
    {
        // 8
        // _7
        $row_sdm_detail_8 = $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
        $id_detail_sdm_7 = $row_sdm_detail_8['id_detail_sdm_7'];
        $result_detail_sdm_8 = $this->Data_kontrak_model->result_detail_sdm_8_by_id_sdm_detail($id_detail_sdm_6);
        $data = [
            'row_sdm_detail_8' => $row_sdm_detail_8,
            'result_detail_sdm_8' => $result_detail_sdm_8
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_11_sdm()
    {
        // 49
        $this->load->view('sdm/nilai_level_11');
    }

    public function tambah_nama_uraian_level_11_sdm()
    {
        $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
        $row_detail_sdm_8 =  $this->Data_kontrak_model->by_id_detail_sdm_8($id_detail_sdm_8);
        $row_no_urut = $row_detail_sdm_8['no_urut_8_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_9($id_detail_sdm_8);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_8' => $id_detail_sdm_8,
                'nama_uraian_9_sdm' => $this->input->post('nama_uraian'),
                'no_urut_9_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_8' => $id_detail_sdm_8,
                'nama_uraian_9_sdm' => $this->input->post('nama_uraian'),
                'no_urut_9_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_9($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_11_sdm()
    {
        $id_detail_sdm_8 = $this->input->post('id_detail_sdm_8');
        $where = [
            'id_detail_sdm_8' => $id_detail_sdm_8
        ];
        $data = [
            'nama_uraian_8_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_8($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_11_sdm($id_detail_sdm_8)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_8($id_detail_sdm_8);
        $data['id_detail_sdm_7'] = $this->input->post('id_detail_sdm_7');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_11', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_9($id_detail_sdm_8);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }


    // LEVEL 12 sdm
    // Update Nilai Level 12
    public function by_id_detail_sdm_9($id_detail_sdm_9)
    {
        // 9
        // _8
        $row_sdm_detail_9 = $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);
        $id_detail_sdm_8 = $row_sdm_detail_9['id_detail_sdm_8'];
        $result_detail_sdm_9 = $this->Data_kontrak_model->result_detail_sdm_9_by_id_sdm_detail($id_detail_sdm_8);
        $data = [
            'row_sdm_detail_9' => $row_sdm_detail_9,
            'result_detail_sdm_9' => $result_detail_sdm_9
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function update_nilai_level_12_sdm()
    {
        //  50
        $this->load->view('sdm/nilai_level_12');
    }

    public function tambah_nama_uraian_level_12_sdm()
    {
        $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
        $row_detail_sdm_9 =  $this->Data_kontrak_model->by_id_detail_sdm_9($id_detail_sdm_9);
        $row_no_urut = $row_detail_sdm_9['no_urut_9_sdm'];
        $buat_no_urut =  $this->Data_kontrak_model->cek_not_urut_detail_sdm_10($id_detail_sdm_9);
        $count = $buat_no_urut + 1;
        if ($buat_no_urut == 0) {
            $data = [
                'id_detail_sdm_9' => $id_detail_sdm_9,
                'nama_uraian_10_sdm' => $this->input->post('nama_uraian'),
                'no_urut_10_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        } else {
            $data = [
                'id_detail_sdm_9' => $id_detail_sdm_9,
                'nama_uraian_10_sdm' => $this->input->post('nama_uraian'),
                'no_urut_10_sdm' => $row_no_urut . '.' . $count,
                'display_order' => $count
            ];
        }
        $this->Data_kontrak_model->tambah_ke_tbl_detail_sdm_10($data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function edit_nama_uraian_level_12_sdm()
    {
        $id_detail_sdm_9 = $this->input->post('id_detail_sdm_9');
        $where = [
            'id_detail_sdm_9' => $id_detail_sdm_9
        ];
        $data = [
            'nama_uraian_9_sdm' => $this->input->post('nama_uraian'),
        ];
        $this->Data_kontrak_model->update_tbl_detail_sdm_9($where, $data);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
    public function hapus_induk_level_12_sdm($id_detail_sdm_9)
    {
        $this->Data_kontrak_model->delete_murni_tbl_detail_sdm_9($id_detail_sdm_9);
        $data['id_detail_sdm_8'] = $this->input->post('id_detail_sdm_8');
        $data['type_add'] =  $this->input->post('type_add');
        $this->load->view('sdm_excel/nilai_level_excel_12', $data);
        $this->Data_kontrak_model->delete_tbl_detail_sdm_10($id_detail_sdm_9);
        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
