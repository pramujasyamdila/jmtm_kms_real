<?php
    // hps_penyedia_kontrak_1
    // addendum_3
    $this->db->select('*');
    $this->db->from('tbl_hps_penyedia_kontrak_1');
    $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
    $query_tbl_hps_penyedia_kontrak_1 = $this->db->get();
    foreach ($query_tbl_hps_penyedia_kontrak_1->result_array() as $key => $value_hps_penyedia_kontrak_1) {
        $id_hps_penyedia_kontrak_1 = $value_hps_penyedia_kontrak_1['id_refrence_hps'];
        $where_hps_penyedia_kontrak_1 = [
            'id_hps_penyedia_kontrak_1' => $value_hps_penyedia_kontrak_1['id_hps_penyedia_kontrak_1'],
        ];
        $data_hps_penyedia_kontrak_1 = [
            // uraian_hps_
            'uraian_hps_addendum_3' => $value_hps_penyedia_kontrak_1['uraian_hps'],
            // satuan_hps_
            'satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_1['satuan_hps'],
            // volume_hps_
            'volume_hps_addendum_3' => $value_hps_penyedia_kontrak_1['volume_hps'],
            // harga_satuan_hps
            'harga_satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_1['harga_satuan_hps'],
            // total_harga
            'total_harga_addendum_3' => $value_hps_penyedia_kontrak_1['total_harga'],

        ];
        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_1_addendum($where_hps_penyedia_kontrak_1, $data_hps_penyedia_kontrak_1);
        // BATAS
        //  hps_penyedia_kontrak_2
        $this->db->select('*');
        $this->db->from('tbl_hps_penyedia_kontrak_2');
        $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
        $query_tbl_hps_penyedia_kontrak_2 = $this->db->get();
        foreach ($query_tbl_hps_penyedia_kontrak_2->result_array() as $key => $value_hps_penyedia_kontrak_2) {
            $id_hps_penyedia_kontrak_2 = $value_hps_penyedia_kontrak_2['id_refrence_hps'];
            $where_hps_penyedia_kontrak_2 = [
                'id_hps_penyedia_kontrak_2' => $value_hps_penyedia_kontrak_2['id_hps_penyedia_kontrak_2'],
            ];
            $data_hps_penyedia_kontrak_2 = [
                // uraian_hps_
                'uraian_hps_addendum_3' => $value_hps_penyedia_kontrak_2['uraian_hps'],
                // satuan_hps_
                'satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_2['satuan_hps'],
                // volume_hps_
                'volume_hps_addendum_3' => $value_hps_penyedia_kontrak_2['volume_hps'],
                // harga_satuan_hps
                'harga_satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_2['harga_satuan_hps'],
                // total_harga
                'total_harga_addendum_3' => $value_hps_penyedia_kontrak_2['total_harga'],
    
            ];
            $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_2_addendum($where_hps_penyedia_kontrak_2, $data_hps_penyedia_kontrak_2);
            // BATAS
            // 3
            // 2
            // value_hps_penyedia_kontrak_3
            //  hps_penyedia_kontrak_3
            $this->db->select('*');
            $this->db->from('tbl_hps_penyedia_kontrak_3');
            $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
            $query_tbl_hps_penyedia_kontrak_3 = $this->db->get();
            foreach ($query_tbl_hps_penyedia_kontrak_3->result_array() as $key => $value_hps_penyedia_kontrak_3) {
                $id_hps_penyedia_kontrak_3 = $value_hps_penyedia_kontrak_3['id_refrence_hps'];
                $where_hps_penyedia_kontrak_3 = [
                    'id_hps_penyedia_kontrak_3' => $value_hps_penyedia_kontrak_3['id_hps_penyedia_kontrak_3'],
                ];
                $data_hps_penyedia_kontrak_3 = [
                    // uraian_hps_
                    'uraian_hps_addendum_3' => $value_hps_penyedia_kontrak_3['uraian_hps'],
                    // satuan_hps_
                    'satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_3['satuan_hps'],
                    // volume_hps_
                    'volume_hps_addendum_3' => $value_hps_penyedia_kontrak_3['volume_hps'],
                    // harga_satuan_hps
                    'harga_satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_3['harga_satuan_hps'],
                    // total_harga
                    'total_harga_addendum_3' => $value_hps_penyedia_kontrak_3['total_harga'],
        
                ];
                $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_3_addendum($where_hps_penyedia_kontrak_3, $data_hps_penyedia_kontrak_3);
                // BATAS
                // penyedia_kontrak_4
                // penyedia_kontrak_3
                $this->db->select('*');
                $this->db->from('tbl_hps_penyedia_kontrak_4');
                $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                $query_tbl_hps_penyedia_kontrak_4 = $this->db->get();
                foreach ($query_tbl_hps_penyedia_kontrak_4->result_array() as $key => $value_hps_penyedia_kontrak_4) {
                    $id_hps_penyedia_kontrak_4 = $value_hps_penyedia_kontrak_4['id_refrence_hps'];
                    $where_hps_penyedia_kontrak_4 = [
                        'id_hps_penyedia_kontrak_4' => $value_hps_penyedia_kontrak_4['id_hps_penyedia_kontrak_4'],
                    ];
                    $data_hps_penyedia_kontrak_4 = [
                        // uraian_hps_
                        'uraian_hps_addendum_3' => $value_hps_penyedia_kontrak_4['uraian_hps'],
                        // satuan_hps_
                        'satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_4['satuan_hps'],
                        // volume_hps_
                        'volume_hps_addendum_3' => $value_hps_penyedia_kontrak_4['volume_hps'],
                        // harga_satuan_hps
                        'harga_satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_4['harga_satuan_hps'],
                        // total_harga
                        'total_harga_addendum_3' => $value_hps_penyedia_kontrak_4['total_harga'],
            
                    ];
                    $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_4_addendum($where_hps_penyedia_kontrak_4, $data_hps_penyedia_kontrak_4);
                    // BATAS
                    // penyedia_kontrak_5
                    // penyedia_kontrak_4
                    $this->db->select('*');
                    $this->db->from('tbl_hps_penyedia_kontrak_5');
                    $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                    $query_tbl_hps_penyedia_kontrak_5 = $this->db->get();
                    foreach ($query_tbl_hps_penyedia_kontrak_5->result_array() as $key => $value_hps_penyedia_kontrak_5) {
                        $id_hps_penyedia_kontrak_5 = $value_hps_penyedia_kontrak_5['id_refrence_hps'];
                        $where_hps_penyedia_kontrak_5 = [
                            'id_hps_penyedia_kontrak_5' => $value_hps_penyedia_kontrak_5['id_hps_penyedia_kontrak_5'],
                        ];
                        $data_hps_penyedia_kontrak_5 = [
                            // uraian_hps_
                            'uraian_hps_addendum_3' => $value_hps_penyedia_kontrak_5['uraian_hps'],
                            // satuan_hps_
                            'satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_5['satuan_hps'],
                            // volume_hps_
                            'volume_hps_addendum_3' => $value_hps_penyedia_kontrak_5['volume_hps'],
                            // harga_satuan_hps
                            'harga_satuan_hps_addendum_3' => $value_hps_penyedia_kontrak_5['harga_satuan_hps'],
                            // total_harga
                            'total_harga_addendum_3' => $value_hps_penyedia_kontrak_5['total_harga'],
                
                        ];
                        $this->Data_kontrak_model->update_tbl_hps_penyedia_kontrak_5_addendum($where_hps_penyedia_kontrak_5, $data_hps_penyedia_kontrak_5);
                    }
                }
            }
        }
    }