                                                                  <!-- BATAS SDM -->
                                                                  <!-- bua -->
                                                                  <?php
                                                                    $this->db->select('*');
                                                                    $this->db->from('tbl_bua');
                                                                    $this->db->where('tbl_bua.id_kontrak', $row_kontrak['id_kontrak']);
                                                                    $this->db->order_by('no_urut','ASC');
                                                                    $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
                                                                    $query_result_bua = $this->db->get() ?>
                                                                    <?php
                                                                    foreach ($query_result_bua->result_array() as $value_bua) { ?>
                                                                        <?php $id_bua = $value_bua['id_bua'];  ?>
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_bua_detail');
                                                                        $this->db->where('tbl_bua_detail.id_bua', $id_bua);
                                                                        $kondisi_detail_bua = $this->db->get()->result_array() ?>
                                                                        <tr class="text-white"  style="font-family: RNSSanz-Black;font-size:16px;font-weight:300;background-color: #1c4e80;">
                                                                            <td class="tg-0lax"  style="font-family: RNSSanz-Medium;font-size:13px;"class="tg-0lax">
                                                                                1.3
                                                                            </td>
                                                                            <td class="tg-0lax"  style="font-family: RNSSanz-Medium;font-size:13px;"class="tg-0lax">&nbsp;&nbsp; BUA</td>
                                                                            <?php if ($adendum_result) { ?>
                                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                    <?php
                                                                                    if ($value['no_adendum'] == 1) {
                                                                                        $nilai = 'nilai_bua_add_I';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_1';
                                                                                        $cek_add = 1;
                                                                                    } else if ($value['no_adendum'] == 2) {
                                                                                        $nilai = 'nilai_bua_add_II';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_2';
                                                                                        $cek_add = 2;
                                                                                    } else if ($value['no_adendum'] == 3) {
                                                                                        $nilai = 'nilai_bua_add_III';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_3';
                                                                                        $cek_add = 3;
                                                                                    } else if ($value['no_adendum'] == 4) {
                                                                                        $nilai = 'nilai_bua_add_IV';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_4';
                                                                                        $cek_add = 4;
                                                                                    } else if ($value['no_adendum'] == 5) {
                                                                                        $nilai = 'nilai_bua_add_V';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_5';
                                                                                        $cek_add = 5;
                                                                                    } else if ($value['no_adendum'] == 6) {
                                                                                        $nilai = 'nilai_bua_add_VI';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_6';
                                                                                        $cek_add = 6;
                                                                                    } else if ($value['no_adendum'] == 7) {
                                                                                        $nilai = 'nilai_bua_add_VII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_7';
                                                                                        $cek_add = 7;
                                                                                    } else if ($value['no_adendum'] == 8) {
                                                                                        $nilai = 'nilai_bua_add_VIII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_8';
                                                                                        $cek_add = 8;
                                                                                    } else if ($value['no_adendum'] == 9) {
                                                                                        $nilai = 'nilai_bua_add_IX';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_9';
                                                                                        $cek_add = 9;
                                                                                    } else if ($value['no_adendum'] == 10) {
                                                                                        $nilai = 'nilai_bua_add_X';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_10';
                                                                                        $cek_add = 10;
                                                                                    } else if ($value['no_adendum'] == 11) {
                                                                                        $nilai = 'nilai_bua_add_XI';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_11';
                                                                                        $cek_add = 11;
                                                                                    } else if ($value['no_adendum'] == 12) {
                                                                                        $nilai = 'nilai_bua_add_XII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_12';
                                                                                        $cek_add = 12;
                                                                                    } else if ($value['no_adendum'] == 13) {
                                                                                        $nilai = 'nilai_bua_add_XIII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_13';
                                                                                        $cek_add = 13;
                                                                                    } else if ($value['no_adendum'] == 14) {
                                                                                        $nilai = 'nilai_bua_add_XIV';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_14';
                                                                                        $cek_add = 14;
                                                                                    } else if ($value['no_adendum'] == 15) {
                                                                                        $nilai = 'nilai_bua_add_XV';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_15';
                                                                                        $cek_add = 15;
                                                                                    } else if ($value['no_adendum'] == 16) {
                                                                                        $nilai = 'nilai_bua_add_XVI';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_16';
                                                                                        $cek_add = 16;
                                                                                    } else if ($value['no_adendum'] == 17) {
                                                                                        $nilai = 'nilai_bua_add_XVII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_17';
                                                                                        $cek_add = 17;
                                                                                    } else if ($value['no_adendum'] == 18) {
                                                                                        $nilai = 'nilai_bua_add_XVIII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_18';
                                                                                        $cek_add = 18;
                                                                                    } else if ($value['no_adendum'] == 19) {
                                                                                        $nilai = 'nilai_bua_add_XIX';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_19';
                                                                                        $cek_add = 19;
                                                                                    } else if ($value['no_adendum'] == 20) {
                                                                                        $nilai = 'nilai_bua_add_XX';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_20';
                                                                                        $cek_add = 20;
                                                                                    } else if ($value['no_adendum'] == 21) {
                                                                                        $nilai = 'nilai_bua_add_XXI';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_21';
                                                                                        $cek_add = 21;
                                                                                    } else if ($value['no_adendum'] == 22) {
                                                                                        $nilai = 'nilai_bua_add_XXII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_22';
                                                                                        $cek_add = 22;
                                                                                    } else if ($value['no_adendum'] == 23) {
                                                                                        $nilai = 'nilai_bua_add_XXIII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_23';
                                                                                        $cek_add = 23;
                                                                                    } else if ($value['no_adendum'] == 24) {
                                                                                        $nilai = 'nilai_bua_add_XXIV';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_24';
                                                                                        $cek_add = 24;
                                                                                    } else if ($value['no_adendum'] == 25) {
                                                                                        $nilai = 'nilai_bua_add_XXV';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_25';
                                                                                        $cek_add = 25;
                                                                                    } else if ($value['no_adendum'] == 26) {
                                                                                        $nilai = 'nilai_bua_add_XXVI';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_26';
                                                                                        $cek_add = 26;
                                                                                    } else if ($value['no_adendum'] == 27) {
                                                                                        $nilai = 'nilai_bua_add_XXVII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_27';
                                                                                        $cek_add = 27;
                                                                                    } else if ($value['no_adendum'] == 28) {
                                                                                        $nilai = 'nilai_bua_add_XXVIII';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_28';
                                                                                        $cek_add = 28;
                                                                                    } else if ($value['no_adendum'] == 29) {
                                                                                        $nilai = 'nilai_bua_add_XXIX';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_29';
                                                                                        $cek_add = 29;
                                                                                    } else if ($value['no_adendum'] == 30) {
                                                                                        $nilai = 'nilai_bua_add_XXX';
                                                                                        $update_reusable = 'update_nilai_level_2_bua_add_30';
                                                                                        $cek_add = 30;
                                                                                    } else {
                                                                                        $cek_add = 0;
                                                                                        $nilai = 'nilai_bua';
                                                                                        $update_reusable = 'update_nilai_level_2_bua';
                                                                                    }
                                                                                    ?>
                                                                                    <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_bua[$nilai], 2, ',', '.') ?>
                                                                                    </td> -->
                                                                                    <td class="tg-0lax">
                                                                                        <?php if ($value_bua[$nilai] == null || $value_bua[$nilai] == 0) { ?>
                                                                                            <?php if ($kondisi_detail_bua) { ?>
                                                                                            <?php    } else { ?>
                                                                                                <?php $this->db->select('*');
                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_bua);
                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_bua['nama_uraian']);
                                                                                                $checking_bua_detail = $this->db->get()->result_array() ?>
                                                                                                <?php if ($checking_bua_detail) { ?>
                                                                                                    <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                <?php   }  ?>
                                                                                            <?php   }  ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if ($kondisi_detail_bua) { ?>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                            <?php   }  ?>
                                                                                        <?php    } ?>
                                                                                    </td>
                                                                                <?php   } ?>
                                                                            <?php } else { ?>
                                                                                <?php
                                                                                $cek_add = 0;
                                                                                $nilai = 'nilai_bua';
                                                                                $update_reusable = 'update_nilai_level_2_bua';
                                                                                ?>
                                                                                <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_bua[$nilai], 2, ',', '.') ?> -->
                                                                                </td>
                                                                                <td class="tg-0lax">
                                                                                    <?php if ($value_bua[$nilai] == null || $value_bua[$nilai] == 0) { ?>
                                                                                        <?php if ($kondisi_detail_bua) { ?>
                                                                                        <?php    } else { ?>
                                                                                            <?php $this->db->select('*');
                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_bua);
                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_bua['nama_uraian']);
                                                                                            $checking_bua_detail = $this->db->get()->result_array() ?>
                                                                                            <?php if ($checking_bua_detail) { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                            <?php   }  ?>
                                                                                        <?php   }  ?>
                                                                                    <?php } else { ?>
                                                                                        <?php if ($kondisi_detail_bua) { ?>
                                                                                        <?php    } else { ?>
                                                                                            <?php $this->db->select('*');
                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_bua);
                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_bua['nama_uraian']);
                                                                                            $checking_bua_detail = $this->db->get()->result_array() ?>
                                                                                            <?php if ($checking_bua_detail) { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                            <?php   }  ?>
                                                                                        <?php   }  ?>
                                                                                    <?php    } ?>
                                                                                </td>
                                                                            <?php  }  ?>
                                                                            <div class="modal fade" data-backdrop="false" id="form_modal_level_2_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="title_modal_level_2_bua"></h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form action="javascript:;" method="post" id="form_simpan_level_2_bua">
                                                                                                <input type="hidden" name="id_bua">
                                                                                                <input type="hidden" name="type_add">
                                                                                                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                <div class="form-group" style="display: none;" id="form_tambah_level_2_bua">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="">Nama Uraian</label>
                                                                                                                <input type="text" name="nama_uraian" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group" style="display: none;" id="form_input_nilai_level_2_bua">
                                                                                                    <label for="">Pilih Mata Anggaran</label>
                                                                                                    <div class="row">
                                                                                                        <div class="col-6">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="">

                                                                                                                </span>
                                                                                                                <input type="hidden" class="form-control" name="nilai_bua" id="nilai_bua" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_level_2_bua">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <a href="javascript:;" style="display: none;" id="button_update_nilai_level_2_bua" class="btn btn-success button_simpan" onclick="Simpan_level_2_bua(<?= $value_bua['id_bua'] ?>,'update_nilai_level_2_bua')">Simpan</a>
                                                                                            <a href="javascript:;" id="button_tambah_level_2_bua" class="btn btn-success button_simpan" onclick="Simpan_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua')">Update</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_bua_detail');
                                                                            $this->db->where('tbl_bua_detail.id_bua', $id_bua);
                                                                            $this->db->order_by('CAST(no_urut AS DECIMAL(10,6)) ASC');
                                                                            $query_result_detail_bua = $this->db->get() ?>
                                                                            <?php
                                                                            foreach ($query_result_detail_bua->result_array() as $value_detail_bua) { ?>
                                                                                <?php $id_bua_detail = $value_detail_bua['id_bua_detail'];  ?>
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_detail_bua_1');
                                                                                $this->db->where('tbl_detail_bua_1.id_bua_detail', $id_bua_detail);
                                                                                $kondisi_bua_detail_1 = $this->db->get()->result_array() ?>
                                                                         <tr style="font-family: RNSSanz-Bold;font-size:13px;">
                                                                            <td class="tg-0lax">
                                                                                <?= $value_detail_bua['no_urut'] ?> </td>
                                                                            <td class="tg-0lax">&nbsp;&nbsp;&nbsp; <?= $value_detail_bua['nama_uraian'] ?></td>
                                                                            <?php if ($adendum_result) { ?>
                                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                    <?php
                                                                                        if ($value['no_adendum'] == 1) {
                                                                                            $nilai = 'nilai_detail_bua_add_I';
                                                                                            $cek_add = 1;
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_1';
                                                                                        } else if ($value['no_adendum'] == 2) {
                                                                                            $nilai = 'nilai_detail_bua_add_II';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_2';
                                                                                            $cek_add = 2;
                                                                                        } else if ($value['no_adendum'] == 3) {
                                                                                            $nilai = 'nilai_detail_bua_add_III';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_3';

                                                                                            $cek_add = 3;
                                                                                        } else if ($value['no_adendum'] == 4) {
                                                                                            $nilai = 'nilai_detail_bua_add_IV';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_4';

                                                                                            $cek_add = 4;
                                                                                        } else if ($value['no_adendum'] == 5) {
                                                                                            $nilai = 'nilai_detail_bua_add_V';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_5';

                                                                                            $cek_add = 5;
                                                                                        } else if ($value['no_adendum'] == 6) {
                                                                                            $nilai = 'nilai_detail_bua_add_VI';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_6';

                                                                                            $cek_add = 6;
                                                                                        } else if ($value['no_adendum'] == 7) {
                                                                                            $nilai = 'nilai_detail_bua_add_VII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_7';

                                                                                            $cek_add = 7;
                                                                                        } else if ($value['no_adendum'] == 8) {
                                                                                            $nilai = 'nilai_detail_bua_add_VIII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_8';

                                                                                            $cek_add = 8;
                                                                                        } else if ($value['no_adendum'] == 9) {
                                                                                            $nilai = 'nilai_detail_bua_add_IX';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_9';

                                                                                            $cek_add = 9;
                                                                                        } else if ($value['no_adendum'] == 10) {
                                                                                            $nilai = 'nilai_detail_bua_add_X';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_10';

                                                                                            $cek_add = 10;
                                                                                        } else if ($value['no_adendum'] == 11) {
                                                                                            $nilai = 'nilai_detail_bua_add_XI';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_11';

                                                                                            $cek_add = 11;
                                                                                        } else if ($value['no_adendum'] == 12) {
                                                                                            $nilai = 'nilai_detail_bua_add_XII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_12';

                                                                                            $cek_add = 12;
                                                                                        } else if ($value['no_adendum'] == 13) {
                                                                                            $nilai = 'nilai_detail_bua_add_XIII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_13';

                                                                                            $cek_add = 13;
                                                                                        } else if ($value['no_adendum'] == 14) {
                                                                                            $nilai = 'nilai_detail_bua_add_XIV';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_14';

                                                                                            $cek_add = 14;
                                                                                        } else if ($value['no_adendum'] == 15) {
                                                                                            $nilai = 'nilai_detail_bua_add_XV';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_15';

                                                                                            $cek_add = 15;
                                                                                        } else if ($value['no_adendum'] == 16) {
                                                                                            $nilai = 'nilai_detail_bua_add_XVI';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_16';

                                                                                            $cek_add = 16;
                                                                                        } else if ($value['no_adendum'] == 17) {
                                                                                            $nilai = 'nilai_detail_bua_add_XVII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_17';

                                                                                            $cek_add = 17;
                                                                                        } else if ($value['no_adendum'] == 18) {
                                                                                            $nilai = 'nilai_detail_bua_add_XVIII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_18';

                                                                                            $cek_add = 18;
                                                                                        } else if ($value['no_adendum'] == 19) {
                                                                                            $nilai = 'nilai_detail_bua_add_XIX';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_19';

                                                                                            $cek_add = 19;
                                                                                        } else if ($value['no_adendum'] == 20) {
                                                                                            $nilai = 'nilai_detail_bua_add_XX';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_20';

                                                                                            $cek_add = 20;
                                                                                        } else if ($value['no_adendum'] == 21) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXI';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_21';

                                                                                            $cek_add = 21;
                                                                                        } else if ($value['no_adendum'] == 22) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_22';

                                                                                            $cek_add = 22;
                                                                                        } else if ($value['no_adendum'] == 23) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXIII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_23';

                                                                                            $cek_add = 23;
                                                                                        } else if ($value['no_adendum'] == 24) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXIV';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_24';

                                                                                            $cek_add = 23;
                                                                                        } else if ($value['no_adendum'] == 25) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXV';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_25';

                                                                                            $cek_add = 25;
                                                                                        } else if ($value['no_adendum'] == 26) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXVI';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_26';

                                                                                            $cek_add = 26;
                                                                                        } else if ($value['no_adendum'] == 27) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXVII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_27';

                                                                                            $cek_add = 27;
                                                                                        } else if ($value['no_adendum'] == 28) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXVIII';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_28';

                                                                                            $cek_add = 28;
                                                                                        } else if ($value['no_adendum'] == 29) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXIX';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_29';

                                                                                            $cek_add = 29;
                                                                                        } else if ($value['no_adendum'] == 30) {
                                                                                            $nilai = 'nilai_detail_bua_add_XXX';
                                                                                            $update_reusable = 'update_nilai_level_3_bua_add_30';

                                                                                            $cek_add = 30;
                                                                                        } else {

                                                                                            $cek_add = 0;
                                                                                            $nilai = 'nilai_detail_bua';
                                                                                            $update_reusable = 'update_nilai_level_3_bua';
                                                                                        }
                                                                                    ?>
                                                                                    <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua[$nilai], 2, ',', '.') ?>
                                                                                    </td> -->
                                                                                    <td class="tg-0lax">

                                                                                        <?php if ($value_detail_bua[$nilai] == null || $value_detail_bua[$nilai] == 0) { ?>
                                                                                            <?php if ($kondisi_bua_detail_1) { ?>
                                                                                            <?php    } else { ?>
                                                                                                <?php $this->db->select('*');
                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_bua_detail);
                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua['nama_uraian']);
                                                                                                $checking_bua_detail = $this->db->get()->result_array() ?>
                                                                                                <?php if ($checking_bua_detail) { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                <?php   }  ?>

                                                                                            <?php   }  ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if ($kondisi_bua_detail_1) { ?>

                                                                                            <?php    } else { ?>
                                                                                                <?php $this->db->select('*');
                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_bua_detail);
                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua['nama_uraian']);
                                                                                                $checking_bua_detail = $this->db->get()->result_array() ?>
                                                                                                <?php if ($checking_bua_detail) { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                <?php   }  ?>
                                                                                            <?php   }  ?>
                                                                                        <?php    } ?>
                                                                                    </td>
                                                                                <?php   } ?>
                                                                            <?php } else { ?>
                                                                                <?php
                                                                                    $nilai = 'nilai_detail_bua';
                                                                                    $update_reusable = 'update_nilai_level_3_bua';
                                                                                ?>
                                                                                <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua[$nilai], 2, ',', '.') ?>
                                                                                </td> -->
                                                                                <td class="tg-0lax">
                                                                                    <?php if ($value_detail_bua[$nilai] == null || $value_detail_bua[$nilai] == 0) { ?>
                                                                                        <?php if ($kondisi_bua_detail_1) { ?>

                                                                                        <?php    } else { ?>
                                                                                            <?php $this->db->select('*');
                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_bua_detail);
                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua['nama_uraian']);
                                                                                            $checking_bua_detail = $this->db->get()->result_array() ?>
                                                                                            <?php if ($checking_bua_detail) { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_list_anggaran',0)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                            <?php   }  ?>

                                                                                        <?php   }  ?>
                                                                                    <?php } else { ?>
                                                                                        <?php if ($kondisi_bua_detail_1) { ?>

                                                                                        <?php    } else { ?>
                                                                                            <?php $this->db->select('*');
                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_bua_detail);
                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua['nama_uraian']);
                                                                                            $checking_bua_detail = $this->db->get()->result_array() ?>
                                                                                            <?php if ($checking_bua_detail) { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_list_anggaran',0)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                            <?php   }  ?>

                                                                                        <?php   }  ?>
                                                                                    <?php    } ?>
                                                                                </td>
                                                                            <?php  }  ?>

                                                                        </tr>
                                                                        <div class="modal fade" data-backdrop="false" id="form_modal_level_3_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="title_modal_level_3_bua"></h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="javascript:;" method="post" id="form_simpan_level_3_bua">
                                                                                            <input type="hidden" name="id_bua_detail">
                                                                                            <input type="hidden" name="type_add">
                                                                                            <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                            <div class="form-group" style="display: none;" id="form_tambah_level_3_bua">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="">Nama Uraian</label>
                                                                                                            <input type="text" name="nama_uraian" class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group" style="display: none;" id="form_input_nilai_level_3_bua">
                                                                                                <label for="">Pilih Mata Anggaran</label>
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="">

                                                                                                            </span>
                                                                                                            <input type="hidden" class="form-control" name="nilai_detail_bua" id="nilai_detail_bua" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_detail_bua_level_3_bua">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <a href="javascript:;" style="display: none;" id="button_update_nilai_level_3_bua" class="btn btn-success button_simpan" onclick="Simpan_level_3_bua('update_nilai_level_3_bua')">Simpan</a>
                                                                                        <a href="javascript:;" id="button_tambah_level_3_bua" class="btn btn-success button_simpan" onclick="Simpan_level_3_bua('tambah_level_3_bua')">Update</a>
                                                                                        <a href="javascript:;" id="button_edit_level_3_bua" class="btn btn-success button_simpan" onclick="Simpan_level_3_bua('edit_level_3_bua')">Edit</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_detail_bua_1');
                                                                                $this->db->where('tbl_detail_bua_1.id_bua_detail', $id_bua_detail);
                                                                                $this->db->order_by('CAST(no_urut_1_bua AS DECIMAL(10,6)) ASC');
                                                                                $query_result_detail_bua_1 = $this->db->get() ?>
                                                                        <?php
                                                                                foreach ($query_result_detail_bua_1->result_array() as $value_detail_bua_1) { ?>
                                                                            <?php $id_detail_bua_1 = $value_detail_bua_1['id_detail_bua_1'];

                                                                            ?>
                                                                            <?php
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_detail_bua_2');
                                                                                    $this->db->where('tbl_detail_bua_2.id_detail_bua_1', $id_detail_bua_1);
                                                                                    $kondisi_bua_detail_1 = $this->db->get()->result_array();

                                                                            ?>

                                                                            <tr class="text-info" style="font-size:12px;font-weight: 450;">
                                                                                <td class="tg-0lax">
                                                                                    <?= $value_detail_bua_1['no_urut_1_bua'] ?> </td>
                                                                                </td>
                                                                                <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_1['nama_uraian_1_bua'] ?></td>
                                                                                <?php if ($adendum_result) { ?>
                                                                                    <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                        <?php
                                                                                            if ($value['no_adendum'] == 1) {
                                                                                                $nilai = 'nilai_bua_detail_1_add_I';
                                                                                                $cek_add = 1;
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_1';
                                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                                $cek_add = 2;
                                                                                                $nilai = 'nilai_bua_detail_1_add_II';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_2';
                                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                                $cek_add = 3;
                                                                                                $nilai = 'nilai_bua_detail_1_add_III';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_3';
                                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                                $cek_add = 4;
                                                                                                $nilai = 'nilai_bua_detail_1_add_IV';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_4';
                                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                                $cek_add = 5;
                                                                                                $nilai = 'nilai_bua_detail_1_add_V';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_5';
                                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                                $cek_add = 6;
                                                                                                $nilai = 'nilai_bua_detail_1_add_VI';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_6';
                                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                                $cek_add = 7;
                                                                                                $nilai = 'nilai_bua_detail_1_add_VII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_7';
                                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                                $cek_add = 8;
                                                                                                $nilai = 'nilai_bua_detail_1_add_VIII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_8';
                                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                                $cek_add = 9;
                                                                                                $nilai = 'nilai_bua_detail_1_add_IX';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_9';
                                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                                $cek_add = 10;
                                                                                                $nilai = 'nilai_bua_detail_1_add_X';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_10';
                                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                                $cek_add = 11;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XI';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_11';
                                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                                $cek_add = 12;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_12';
                                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                                $cek_add = 13;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XIII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_13';
                                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                                $cek_add = 14;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XIV';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_14';
                                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                                $cek_add = 15;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XV';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_15';
                                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                                $cek_add = 16;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XVI';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_16';
                                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                                $cek_add = 17;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XVII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_17';
                                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                                $cek_add = 18;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XVIII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_18';
                                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                                $cek_add = 19;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XIX';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_19';
                                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                                $cek_add = 20;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XX';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_20';
                                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                                $cek_add = 21;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXI';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_21';
                                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                                $cek_add = 22;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_22';
                                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                                $cek_add = 23;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXIII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_23';
                                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                                $cek_add = 23;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXIV';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_24';
                                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                                $cek_add = 25;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXV';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_25';
                                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                                $cek_add = 26;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXVI';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_26';
                                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                                $cek_add = 27;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXVII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_27';
                                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                                $cek_add = 28;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXVIII';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_28';
                                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                                $cek_add = 29;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXIX';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_29';
                                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                                $cek_add = 30;
                                                                                                $nilai = 'nilai_bua_detail_1_add_XXX';
                                                                                                $update_reusable = 'update_nilai_level_4_bua_add_30';
                                                                                            } else {
                                                                                                $cek_add = 0;
                                                                                                $nilai = 'nilai_bua_detail_1';
                                                                                                $update_reusable = 'update_nilai_level_4_bua';
                                                                                            }
                                                                                        ?>
                                                                                        <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_1[$nilai], 2, ',', '.') ?>
                                                                                        </td> -->
                                                                                        <td class="tg-0lax">
                                                                                            <?php $this->db->select('*');
                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_1);
                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_1['nama_uraian_1_bua']);
                                                                                            $checking_bua_detail_1 = $this->db->get()->result_array() ?>
                                                                                            <?php if ($value_detail_bua_1[$nilai] == null || $value_detail_bua_1[$nilai] == 0) { ?>
                                                                                                <?php if ($kondisi_bua_detail_1) { ?>

                                                                                                <?php    } else { ?>

                                                                                                    <?php if ($checking_bua_detail_1) { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                    <?php   }  ?>

                                                                                                <?php   }  ?>
                                                                                            <?php } else { ?>
                                                                                                <?php if ($kondisi_bua_detail_1) { ?>

                                                                                                <?php    } else { ?>
                                                                                                    <?php if ($checking_bua_detail_1) { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                    <?php   }  ?>

                                                                                                <?php   }  ?>
                                                                                            <?php    } ?>
                                                                                        </td>
                                                                                    <?php   } ?>
                                                                                <?php } else { ?>
                                                                                    <?php
                                                                                        $nilai = 'nilai_bua_detail_1';
                                                                                        $update_reusable = 'update_nilai_level_4_bua';
                                                                                    ?>
                                                                                    <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_1[$nilai], 2, ',', '.') ?>
                                                                                    </td> -->
                                                                                    <td class="tg-0lax">
                                                                                        <?php if ($value_detail_bua_1[$nilai] == null || $value_detail_bua_1[$nilai] == 0) { ?>
                                                                                            <?php if ($kondisi_bua_detail_1) { ?>

                                                                                            <?php    } else { ?>

                                                                                                <?php $this->db->select('*');
                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_1);
                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_1['nama_uraian_1_bua']);
                                                                                                $checking_bua_detail_1 = $this->db->get()->result_array() ?>
                                                                                                <?php if ($checking_bua_detail_1) { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                <?php   }  ?>

                                                                                            <?php   }  ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if ($kondisi_bua_detail_1) { ?>

                                                                                            <?php    } else { ?>
                                                                                                <?php $this->db->select('*');
                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_1);
                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_1['nama_uraian_1_bua']);
                                                                                                $checking_bua_detail_1 = $this->db->get()->result_array() ?>
                                                                                                <?php if ($checking_bua_detail_1) { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                <?php   }  ?>

                                                                                            <?php   }  ?>
                                                                                        <?php    } ?>
                                                                                    </td>
                                                                                <?php  }  ?>
                                                                            </tr>
                                                                            <div class="modal fade" data-backdrop="false" id="form_modal_level_4_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="title_modal_level_4_bua"></h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form action="javascript:;" method="post" id="form_simpan_level_4_bua">
                                                                                                <input type="hidden" name="id_detail_bua_1">
                                                                                                <input type="hidden" name="type_add">
                                                                                                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                <div class="form-group" style="display: none;" id="form_tambah_level_4_bua">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="">Nama Uraian</label>
                                                                                                                <input type="text" name="nama_uraian" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group" style="display: none;" id="form_input_nilai_level_4_bua">
                                                                                                    <label for="">Pilih Mata Anggaran</label>
                                                                                                    <div class="row">
                                                                                                        <div class="col-6">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <input type="hidden" class="form-control" name="nilai_bua_detail_1" id="nilai_bua_detail_1" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_1_level_4_bua">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <a href="javascript:;" style="display: none;" id="button_update_nilai_level_4_bua" class="btn btn-success button_simpan" onclick="Simpan_level_4_bua('update_nilai_level_4_bua')">Simpan</a>
                                                                                            <a href="javascript:;" id="button_tambah_level_4_bua" class="btn btn-success button_simpan" onclick="Simpan_level_4_bua('tambah_level_4_bua')">Update</a>
                                                                                            <a href="javascript:;" id="button_edit_level_4_bua" class="btn btn-success button_simpan" onclick="Simpan_level_4_bua('edit_level_4_bua')">Edit</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <?php
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_detail_bua_2');
                                                                                    $this->db->where('tbl_detail_bua_2.id_detail_bua_1', $id_detail_bua_1);
                                                                                    $this->db->order_by('CAST(no_urut_2_bua AS DECIMAL(10,6)) ASC');
                                                                                    $query_result_detail_bua_2 = $this->db->get() ?>
                                                                            <?php
                                                                                    foreach ($query_result_detail_bua_2->result_array() as $value_detail_bua_2) { ?>
                                                                                <?php $id_detail_bua_2 = $value_detail_bua_2['id_detail_bua_2'];  ?>
                                                                                <?php
                                                                                        $this->db->select('*');
                                                                                        $this->db->from('tbl_detail_bua_3');
                                                                                        $this->db->where('tbl_detail_bua_3.id_detail_bua_2', $id_detail_bua_2);
                                                                                        $kondisi_bua_detail_2 = $this->db->get()->result_array() ?>
                                                                               <tr class="text-danger" style="font-size:12px;font-weight: 400;">
                                                                                    <td class="tg-0lax">
                                                                                        <?= $value_detail_bua_2['no_urut_2_bua'] ?> </td>
                                                                                    </td>
                                                                                    <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_2['nama_uraian_2_bua'] ?></td>
                                                                                    <?php if ($adendum_result) { ?>
                                                                                        <!-- detail_2 -->
                                                                                        <!-- bua_2 -->
                                                                                        <!-- level_5 -->
                                                                                        <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                            <?php
                                                                                                if ($value['no_adendum'] == 1) {
                                                                                                    $nilai = 'nilai_bua_detail_2_add_I';
                                                                                                    $cek_add = 1;
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_1';
                                                                                                } else if ($value['no_adendum'] == 2) {
                                                                                                    $cek_add = 2;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_II';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_2';
                                                                                                } else if ($value['no_adendum'] == 3) {
                                                                                                    $cek_add = 3;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_III';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_3';
                                                                                                } else if ($value['no_adendum'] == 4) {
                                                                                                    $cek_add = 4;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_IV';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_4';
                                                                                                } else if ($value['no_adendum'] == 5) {
                                                                                                    $cek_add = 5;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_V';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_5';
                                                                                                } else if ($value['no_adendum'] == 6) {
                                                                                                    $cek_add = 6;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_VI';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_6';
                                                                                                } else if ($value['no_adendum'] == 7) {
                                                                                                    $cek_add = 7;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_VII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_7';
                                                                                                } else if ($value['no_adendum'] == 8) {
                                                                                                    $cek_add = 8;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_VIII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_8';
                                                                                                } else if ($value['no_adendum'] == 9) {
                                                                                                    $cek_add = 9;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_IX';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_9';
                                                                                                } else if ($value['no_adendum'] == 10) {
                                                                                                    $cek_add = 10;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_X';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_10';
                                                                                                } else if ($value['no_adendum'] == 11) {
                                                                                                    $cek_add = 11;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XI';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_11';
                                                                                                } else if ($value['no_adendum'] == 12) {
                                                                                                    $cek_add = 12;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_12';
                                                                                                } else if ($value['no_adendum'] == 13) {
                                                                                                    $cek_add = 13;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XIII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_13';
                                                                                                } else if ($value['no_adendum'] == 14) {
                                                                                                    $cek_add = 14;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XIV';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_14';
                                                                                                } else if ($value['no_adendum'] == 15) {
                                                                                                    $cek_add = 15;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XV';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_15';
                                                                                                } else if ($value['no_adendum'] == 16) {
                                                                                                    $cek_add = 16;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XVI';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_16';
                                                                                                } else if ($value['no_adendum'] == 17) {
                                                                                                    $cek_add = 17;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XVII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_17';
                                                                                                } else if ($value['no_adendum'] == 18) {
                                                                                                    $cek_add = 18;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XVIII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_18';
                                                                                                } else if ($value['no_adendum'] == 19) {
                                                                                                    $cek_add = 19;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XIX';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_19';
                                                                                                } else if ($value['no_adendum'] == 20) {
                                                                                                    $cek_add = 20;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XX';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_20';
                                                                                                } else if ($value['no_adendum'] == 21) {
                                                                                                    $cek_add = 21;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXI';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_21';
                                                                                                } else if ($value['no_adendum'] == 22) {
                                                                                                    $cek_add = 22;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_22';
                                                                                                } else if ($value['no_adendum'] == 23) {
                                                                                                    $cek_add = 23;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXIII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_23';
                                                                                                } else if ($value['no_adendum'] == 24) {
                                                                                                    $cek_add = 23;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXIV';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_24';
                                                                                                } else if ($value['no_adendum'] == 25) {
                                                                                                    $cek_add = 25;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXV';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_25';
                                                                                                } else if ($value['no_adendum'] == 26) {
                                                                                                    $cek_add = 26;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXVI';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_26';
                                                                                                } else if ($value['no_adendum'] == 27) {
                                                                                                    $cek_add = 27;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXVII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_27';
                                                                                                } else if ($value['no_adendum'] == 28) {
                                                                                                    $cek_add = 28;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXVIII';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_28';
                                                                                                } else if ($value['no_adendum'] == 29) {
                                                                                                    $cek_add = 29;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXIX';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_29';
                                                                                                } else if ($value['no_adendum'] == 30) {
                                                                                                    $cek_add = 30;
                                                                                                    $nilai = 'nilai_bua_detail_2_add_XXX';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua_add_30';
                                                                                                } else {
                                                                                                    $cek_add = 0;
                                                                                                    $nilai = 'nilai_bua_detail_2';
                                                                                                    $update_reusable = 'update_nilai_level_5_bua';
                                                                                                }
                                                                                            ?>
                                                                                            <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_2[$nilai], 2, ',', '.') ?> -->
                                                                                            </td>
                                                                                            <td class="tg-0lax">
                                                                                                <?php $this->db->select('*');
                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_2);
                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_2['nama_uraian_2_bua']);
                                                                                                $checking_bua_detail_2 = $this->db->get()->result_array() ?>
                                                                                                <?php if ($value_detail_bua_2[$nilai] == null || $value_detail_bua_2[$nilai] == 0) { ?>
                                                                                                    <?php if ($kondisi_bua_detail_2) { ?>

                                                                                                    <?php    } else { ?>

                                                                                                        <?php if ($checking_bua_detail_2) { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                        <?php   }  ?>

                                                                                                    <?php   }  ?>
                                                                                                <?php } else { ?>
                                                                                                    <?php if ($kondisi_bua_detail_2) { ?>

                                                                                                    <?php    } else { ?>
                                                                                                        <?php if ($checking_bua_detail_2) { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                        <?php   }  ?>

                                                                                                    <?php   }  ?>
                                                                                                <?php    } ?>
                                                                                            </td>
                                                                                        <?php   } ?>
                                                                                    <?php } else { ?>
                                                                                        <?php
                                                                                            $nilai = 'nilai_bua_detail_2';
                                                                                            $update_reusable = 'update_nilai_level_5_bua';
                                                                                        ?>
                                                                                        <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_2[$nilai], 2, ',', '.') ?>
                                                                                        </td> -->
                                                                                        <td class="tg-0lax">
                                                                                            <?php if ($value_detail_bua_2[$nilai] == null || $value_detail_bua_2[$nilai] == 0) { ?>
                                                                                                <?php if ($kondisi_bua_detail_2) { ?>

                                                                                                <?php    } else { ?>
                                                                                                    <?php $this->db->select('*');
                                                                                                    $this->db->from('tbl_list_mata_anggran');
                                                                                                    $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_2);
                                                                                                    $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                    $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_2['nama_uraian_2_bua']);
                                                                                                    $checking_bua_detail_2 = $this->db->get()->result_array() ?>
                                                                                                    <?php if ($checking_bua_detail_2) { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                    <?php   }  ?>
                                                                                                <?php   }  ?>
                                                                                            <?php } else { ?>
                                                                                                <?php if ($kondisi_bua_detail_2) { ?>

                                                                                                <?php    } else { ?>
                                                                                                    <?php $this->db->select('*');
                                                                                                    $this->db->from('tbl_list_mata_anggran');
                                                                                                    $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_2);
                                                                                                    $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                    $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_2['nama_uraian_2_bua']);
                                                                                                    $checking_bua_detail_2 = $this->db->get()->result_array() ?>
                                                                                                    <?php if ($checking_bua_detail_2) { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                    <?php   }  ?>
                                                                                                <?php   }  ?>
                                                                                            <?php    } ?>
                                                                                        </td>
                                                                                    <?php  }  ?>

                                                                                </tr>

                                                                                <div class="modal fade" data-backdrop="false" id="form_modal_level_5_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="title_modal_level_5_bua"></h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action="javascript:;" method="post" id="form_simpan_level_5_bua">
                                                                                                    <input type="hidden" name="id_detail_bua_2">
                                                                                                    <input type="hidden" name="type_add">
                                                                                                    <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                    <div class="form-group" style="display: none;" id="form_tambah_level_5_bua">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="">Nama Uraian</label>
                                                                                                                    <input type="text" name="nama_uraian" class="form-control">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group" style="display: none;" id="form_input_nilai_level_5_bua">
                                                                                                        <label for="">Pilih Mata Anggaran</label>
                                                                                                        <div class="row">
                                                                                                            <div class="col-6">
                                                                                                                <div class="input-group-prepend">
                                                                                                                    <span class="">

                                                                                                                    </span>
                                                                                                                    <input type="hidden" class="form-control" name="nilai_bua_detail_2" id="nilai_bua_detail_2" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-6">
                                                                                                                <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_2_level_5_bua">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                <a href="javascript:;" style="display: none;" id="button_update_nilai_level_5_bua" class="btn btn-success button_simpan" onclick="Simpan_level_5_bua('update_nilai_level_5_bua')">Simpan</a>
                                                                                                <a href="javascript:;" id="button_tambah_level_5_bua" class="btn btn-success button_simpan" onclick="Simpan_level_5_bua('tambah_level_5_bua')">Update</a>
                                                                                                <a href="javascript:;" id="button_edit_level_5_bua" class="btn btn-success button_simpan" onclick="Simpan_level_5_bua('edit_level_5_bua')">Edit</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- level 6 -->
                                                                                <?php
                                                                                        $this->db->select('*');
                                                                                        $this->db->from('tbl_detail_bua_3');
                                                                                        $this->db->where('tbl_detail_bua_3.id_detail_bua_2', $id_detail_bua_2);
                                                                                        $this->db->order_by('CAST(no_urut_3_bua AS DECIMAL(10,6)) ASC');
                                                                                        $query_result_detail_bua_3 = $this->db->get() ?>
                                                                                <?php
                                                                                        foreach ($query_result_detail_bua_3->result_array() as $value_detail_bua_3) { ?>
                                                                                    <?php $id_detail_bua_3 = $value_detail_bua_3['id_detail_bua_3'];  ?>
                                                                                    <?php
                                                                                            $this->db->select('*');
                                                                                            $this->db->from('tbl_detail_bua_4');
                                                                                            $this->db->where('tbl_detail_bua_4.id_detail_bua_3', $id_detail_bua_3);
                                                                                            $kondisi_bua_detail_4 = $this->db->get()->result_array() ?>
                                                                                    <tr class="text-success">
                                                                                        <!-- detail_3 -->
                                                                                        <!-- bua_3 -->
                                                                                        <!-- level_6 -->
                                                                                        <td class="tg-0lax">
                                                                                            <?= $value_detail_bua_3['no_urut_3_bua'] ?> </td>
                                                                                        </td>
                                                                                        <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_3['nama_uraian_3_bua'] ?></td>
                                                                                        <?php if ($adendum_result) { ?>
                                                                                            <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                <?php
                                                                                                    if ($value['no_adendum'] == 1) {
                                                                                                        $nilai = 'nilai_bua_detail_3_add_I';
                                                                                                        $cek_add = 1;
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_1';
                                                                                                    } else if ($value['no_adendum'] == 2) {
                                                                                                        $cek_add = 2;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_II';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_2';
                                                                                                    } else if ($value['no_adendum'] == 3) {
                                                                                                        $cek_add = 3;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_III';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_3';
                                                                                                    } else if ($value['no_adendum'] == 4) {
                                                                                                        $cek_add = 4;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_IV';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_4';
                                                                                                    } else if ($value['no_adendum'] == 5) {
                                                                                                        $cek_add = 5;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_V';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_5';
                                                                                                    } else if ($value['no_adendum'] == 6) {
                                                                                                        $cek_add = 6;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_VI';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_6';
                                                                                                    } else if ($value['no_adendum'] == 7) {
                                                                                                        $cek_add = 7;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_VII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_7';
                                                                                                    } else if ($value['no_adendum'] == 8) {
                                                                                                        $cek_add = 8;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_VIII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_8';
                                                                                                    } else if ($value['no_adendum'] == 9) {
                                                                                                        $cek_add = 9;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_IX';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_9';
                                                                                                    } else if ($value['no_adendum'] == 10) {
                                                                                                        $cek_add = 10;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_X';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_10';
                                                                                                    } else if ($value['no_adendum'] == 11) {
                                                                                                        $cek_add = 11;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XI';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_11';
                                                                                                    } else if ($value['no_adendum'] == 12) {
                                                                                                        $cek_add = 12;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_12';
                                                                                                    } else if ($value['no_adendum'] == 13) {
                                                                                                        $cek_add = 13;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XIII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_13';
                                                                                                    } else if ($value['no_adendum'] == 14) {
                                                                                                        $cek_add = 14;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XIV';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_14';
                                                                                                    } else if ($value['no_adendum'] == 15) {
                                                                                                        $cek_add = 15;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XV';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_15';
                                                                                                    } else if ($value['no_adendum'] == 16) {
                                                                                                        $cek_add = 16;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XVI';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_16';
                                                                                                    } else if ($value['no_adendum'] == 17) {
                                                                                                        $cek_add = 17;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XVII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_17';
                                                                                                    } else if ($value['no_adendum'] == 18) {
                                                                                                        $cek_add = 18;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XVIII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_18';
                                                                                                    } else if ($value['no_adendum'] == 19) {
                                                                                                        $cek_add = 19;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XIX';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_19';
                                                                                                    } else if ($value['no_adendum'] == 20) {
                                                                                                        $cek_add = 20;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XX';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_20';
                                                                                                    } else if ($value['no_adendum'] == 21) {
                                                                                                        $cek_add = 21;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXI';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_21';
                                                                                                    } else if ($value['no_adendum'] == 22) {
                                                                                                        $cek_add = 22;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_22';
                                                                                                    } else if ($value['no_adendum'] == 23) {
                                                                                                        $cek_add = 23;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXIII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_23';
                                                                                                    } else if ($value['no_adendum'] == 24) {
                                                                                                        $cek_add = 23;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXIV';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_24';
                                                                                                    } else if ($value['no_adendum'] == 25) {
                                                                                                        $cek_add = 25;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXV';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_25';
                                                                                                    } else if ($value['no_adendum'] == 26) {
                                                                                                        $cek_add = 26;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXVI';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_26';
                                                                                                    } else if ($value['no_adendum'] == 27) {
                                                                                                        $cek_add = 27;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXVII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_27';
                                                                                                    } else if ($value['no_adendum'] == 28) {
                                                                                                        $cek_add = 28;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXVIII';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_28';
                                                                                                    } else if ($value['no_adendum'] == 29) {
                                                                                                        $cek_add = 29;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXIX';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_29';
                                                                                                    } else if ($value['no_adendum'] == 30) {
                                                                                                        $cek_add = 30;
                                                                                                        $nilai = 'nilai_bua_detail_3_add_XXX';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua_add_30';
                                                                                                    } else {
                                                                                                        $cek_add = 0;
                                                                                                        $nilai = 'nilai_bua_detail_3';
                                                                                                        $update_reusable = 'update_nilai_level_6_bua';
                                                                                                    }
                                                                                                ?>
                                                                                                <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_3[$nilai], 2, ',', '.') ?> -->
                                                                                                </td>
                                                                                                <td class="tg-0lax">
                                                                                                    <?php $this->db->select('*');
                                                                                                    $this->db->from('tbl_list_mata_anggran');
                                                                                                    $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_3);
                                                                                                    $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                    $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_3['nama_uraian_3_bua']);
                                                                                                    $checking_bua_detail_3 = $this->db->get()->result_array() ?>
                                                                                                    <?php if ($value_detail_bua_3[$nilai] == null || $value_detail_bua_3[$nilai] == 0) { ?>
                                                                                                        <?php if ($kondisi_bua_detail_4) { ?>

                                                                                                        <?php    } else { ?>

                                                                                                            <?php if ($checking_bua_detail_3) { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                            <?php   }  ?>

                                                                                                        <?php   }  ?>
                                                                                                    <?php } else { ?>
                                                                                                        <?php if ($kondisi_bua_detail_4) { ?>

                                                                                                        <?php    } else { ?>
                                                                                                            <?php if ($checking_bua_detail_3) { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                            <?php   }  ?>

                                                                                                        <?php   }  ?>
                                                                                                    <?php    } ?>
                                                                                                </td>
                                                                                            <?php   } ?>
                                                                                        <?php } else { ?>
                                                                                            <?php
                                                                                                $nilai = 'nilai_bua_detail_3';
                                                                                                $update_reusable = 'update_nilai_level_6_bua';
                                                                                            ?>
                                                                                            <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_3[$nilai], 2, ',', '.') ?> -->
                                                                                            </td>
                                                                                            <td class="tg-0lax">
                                                                                                <?php if ($value_detail_bua_3[$nilai] == null || $value_detail_bua_3[$nilai] == 0) { ?>
                                                                                                    <?php if ($kondisi_bua_detail_4) { ?>

                                                                                                    <?php    } else { ?>

                                                                                                        <?php $this->db->select('*');
                                                                                                        $this->db->from('tbl_list_mata_anggran');
                                                                                                        $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_3);
                                                                                                        $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                        $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_3['nama_uraian_3_bua']);
                                                                                                        $checking_bua_detail_3 = $this->db->get()->result_array() ?>
                                                                                                        <?php if ($checking_bua_detail_3) { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                        <?php   }  ?>

                                                                                                    <?php   }  ?>
                                                                                                <?php } else { ?>
                                                                                                    <?php if ($kondisi_bua_detail_4) { ?>

                                                                                                    <?php    } else { ?>
                                                                                                        <?php $this->db->select('*');
                                                                                                        $this->db->from('tbl_list_mata_anggran');
                                                                                                        $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_3);
                                                                                                        $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                        $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_3['nama_uraian_3_bua']);
                                                                                                        $checking_bua_detail_3 = $this->db->get()->result_array() ?>
                                                                                                        <?php if ($checking_bua_detail_3) { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                        <?php   }  ?>

                                                                                                    <?php   }  ?>
                                                                                                <?php    } ?>
                                                                                            </td>
                                                                                        <?php  }  ?>

                                                                                    </tr>

                                                                                    <div class="modal fade" data-backdrop="false" id="form_modal_level_6_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                        <div class="modal-dialog" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="title_modal_level_6_bua"></h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <form action="javascript:;" method="post" id="form_simpan_level_6_bua">
                                                                                                        <input type="hidden" name="id_detail_bua_3">
                                                                                                        <input type="hidden" name="type_add">
                                                                                                        <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                        <div class="form-group" style="display: none;" id="form_tambah_level_6_bua">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="">Nama Uraian</label>
                                                                                                                        <input type="text" name="nama_uraian" class="form-control">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group" style="display: none;" id="form_input_nilai_level_6_bua">
                                                                                                            <label for="">Pilih Mata Anggaran</label>
                                                                                                            <div class="row">
                                                                                                                <div class="col-6">
                                                                                                                    <div class="input-group-prepend">
                                                                                                                        <span class="">

                                                                                                                        </span>
                                                                                                                        <input type="hidden" class="form-control" name="nilai_bua_detail_3" id="nilai_bua_detail_3" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-6">
                                                                                                                    <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_3_level_6_bua">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                    <a href="javascript:;" style="display: none;" id="button_update_nilai_level_6_bua" class="btn btn-success button_simpan" onclick="Simpan_level_6_bua('update_nilai_level_6_bua')">Simpan</a>
                                                                                                    <a href="javascript:;" id="button_tambah_level_6_bua" class="btn btn-success button_simpan" onclick="Simpan_level_6_bua('tambah_level_6_bua')">Update</a>
                                                                                                    <a href="javascript:;" id="button_edit_level_6_bua" class="btn btn-success button_simpan" onclick="Simpan_level_6_bua('edit_level_6_bua')">Edit</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                    <!-- level 7 -->
                                                                                    <?php
                                                                                            $this->db->select('*');
                                                                                            $this->db->from('tbl_detail_bua_4');
                                                                                            $this->db->where('tbl_detail_bua_4.id_detail_bua_3', $id_detail_bua_3);
                                                                                            $this->db->order_by('CAST(no_urut_4_bua AS DECIMAL(10,6)) ASC');
                                                                                            $query_result_detail_bua_4 = $this->db->get() ?>
                                                                                    <?php
                                                                                            foreach ($query_result_detail_bua_4->result_array() as $value_detail_bua_4) { ?>
                                                                                        <?php $id_detail_bua_4 = $value_detail_bua_4['id_detail_bua_4'];  ?>
                                                                                        <?php
                                                                                                $this->db->select('*');
                                                                                                $this->db->from('tbl_detail_bua_5');
                                                                                                $this->db->where('tbl_detail_bua_5.id_detail_bua_4', $id_detail_bua_4);
                                                                                                $kondisi_bua_detail_5 = $this->db->get()->result_array() ?>
                                                                                        <tr>
                                                                                            <!-- kondisi_bua_detail_5 -->
                                                                                            <!-- detail_4 -->
                                                                                            <!-- bua_4 -->
                                                                                            <!-- level_7 -->
                                                                                            <td class="tg-0lax">
                                                                                                <?= $value_detail_bua_4['no_urut_4_bua'] ?> </td>
                                                                                            </td>
                                                                                            <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_4['nama_uraian_4_bua'] ?></td>
                                                                                            <?php if ($adendum_result) { ?>
                                                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                    <?php
                                                                                                        if ($value['no_adendum'] == 1) {
                                                                                                            $nilai = 'nilai_bua_detail_4_add_I';
                                                                                                            $cek_add = 1;
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_1';
                                                                                                        } else if ($value['no_adendum'] == 2) {
                                                                                                            $cek_add = 2;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_II';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_2';
                                                                                                        } else if ($value['no_adendum'] == 3) {
                                                                                                            $cek_add = 3;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_III';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_3';
                                                                                                        } else if ($value['no_adendum'] == 4) {
                                                                                                            $cek_add = 4;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_IV';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_4';
                                                                                                        } else if ($value['no_adendum'] == 5) {
                                                                                                            $cek_add = 5;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_V';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_5';
                                                                                                        } else if ($value['no_adendum'] == 6) {
                                                                                                            $cek_add = 6;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_VI';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_6';
                                                                                                        } else if ($value['no_adendum'] == 7) {
                                                                                                            $cek_add = 7;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_VII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_7';
                                                                                                        } else if ($value['no_adendum'] == 8) {
                                                                                                            $cek_add = 8;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_VIII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_8';
                                                                                                        } else if ($value['no_adendum'] == 9) {
                                                                                                            $cek_add = 9;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_IX';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_9';
                                                                                                        } else if ($value['no_adendum'] == 10) {
                                                                                                            $cek_add = 10;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_X';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_10';
                                                                                                        } else if ($value['no_adendum'] == 11) {
                                                                                                            $cek_add = 11;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XI';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_11';
                                                                                                        } else if ($value['no_adendum'] == 12) {
                                                                                                            $cek_add = 12;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_12';
                                                                                                        } else if ($value['no_adendum'] == 13) {
                                                                                                            $cek_add = 13;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XIII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_13';
                                                                                                        } else if ($value['no_adendum'] == 14) {
                                                                                                            $cek_add = 14;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XIV';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_14';
                                                                                                        } else if ($value['no_adendum'] == 15) {
                                                                                                            $cek_add = 15;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XV';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_15';
                                                                                                        } else if ($value['no_adendum'] == 16) {
                                                                                                            $cek_add = 16;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XVI';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_16';
                                                                                                        } else if ($value['no_adendum'] == 17) {
                                                                                                            $cek_add = 17;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XVII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_17';
                                                                                                        } else if ($value['no_adendum'] == 18) {
                                                                                                            $cek_add = 18;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XVIII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_18';
                                                                                                        } else if ($value['no_adendum'] == 19) {
                                                                                                            $cek_add = 19;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XIX';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_19';
                                                                                                        } else if ($value['no_adendum'] == 20) {
                                                                                                            $cek_add = 20;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XX';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_20';
                                                                                                        } else if ($value['no_adendum'] == 21) {
                                                                                                            $cek_add = 21;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXI';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_21';
                                                                                                        } else if ($value['no_adendum'] == 22) {
                                                                                                            $cek_add = 22;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_22';
                                                                                                        } else if ($value['no_adendum'] == 23) {
                                                                                                            $cek_add = 23;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXIII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_23';
                                                                                                        } else if ($value['no_adendum'] == 24) {
                                                                                                            $cek_add = 23;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXIV';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_24';
                                                                                                        } else if ($value['no_adendum'] == 25) {
                                                                                                            $cek_add = 25;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXV';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_25';
                                                                                                        } else if ($value['no_adendum'] == 26) {
                                                                                                            $cek_add = 26;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXVI';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_26';
                                                                                                        } else if ($value['no_adendum'] == 27) {
                                                                                                            $cek_add = 27;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXVII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_27';
                                                                                                        } else if ($value['no_adendum'] == 28) {
                                                                                                            $cek_add = 28;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXVIII';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_28';
                                                                                                        } else if ($value['no_adendum'] == 29) {
                                                                                                            $cek_add = 29;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXIX';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_29';
                                                                                                        } else if ($value['no_adendum'] == 30) {
                                                                                                            $cek_add = 30;
                                                                                                            $nilai = 'nilai_bua_detail_4_add_XXX';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua_add_30';
                                                                                                        } else {
                                                                                                            $cek_add = 3;
                                                                                                            $nilai = 'nilai_bua_detail_4';
                                                                                                            $update_reusable = 'update_nilai_level_7_bua';
                                                                                                        }
                                                                                                    ?>
                                                                                                    <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_4[$nilai], 2, ',', '.') ?> -->
                                                                                                    </td>
                                                                                                    <td class="tg-0lax">
                                                                                                        <?php $this->db->select('*');
                                                                                                        $this->db->from('tbl_list_mata_anggran');
                                                                                                        $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_4);
                                                                                                        $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                        $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_4['nama_uraian_4_bua']);
                                                                                                        $checking_bua_detail_4 = $this->db->get()->result_array() ?>
                                                                                                        <?php if ($value_detail_bua_4[$nilai] == null || $value_detail_bua_4[$nilai] == 0) { ?>
                                                                                                            <?php if ($kondisi_bua_detail_5) { ?>

                                                                                                            <?php    } else { ?>

                                                                                                                <?php if ($checking_bua_detail_4) { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                <?php   }  ?>

                                                                                                            <?php   }  ?>
                                                                                                        <?php } else { ?>
                                                                                                            <?php if ($kondisi_bua_detail_5) { ?>

                                                                                                            <?php    } else { ?>
                                                                                                                <?php if ($checking_bua_detail_4) { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                <?php   }  ?>

                                                                                                            <?php   }  ?>
                                                                                                        <?php    } ?>
                                                                                                    </td>
                                                                                                <?php   } ?>
                                                                                            <?php } else { ?>
                                                                                                <?php
                                                                                                    $nilai = 'nilai_bua_detail_4';
                                                                                                    $update_reusable = 'update_nilai_level_7_bua';
                                                                                                ?>
                                                                                                <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_4[$nilai], 2, ',', '.') ?> -->
                                                                                                </td>
                                                                                                <td class="tg-0lax">
                                                                                                    <?php if ($value_detail_bua_4[$nilai] == null || $value_detail_bua_4[$nilai] == 0) { ?>
                                                                                                        <?php if ($kondisi_bua_detail_5) { ?>

                                                                                                        <?php    } else { ?>

                                                                                                            <?php $this->db->select('*');
                                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_4);
                                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_4['nama_uraian_4_bua']);
                                                                                                            $checking_bua_detail_4 = $this->db->get()->result_array() ?>
                                                                                                            <?php if ($checking_bua_detail_4) { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                            <?php   }  ?>

                                                                                                        <?php   }  ?>
                                                                                                    <?php } else { ?>
                                                                                                        <?php if ($kondisi_bua_detail_5) { ?>

                                                                                                        <?php    } else { ?>
                                                                                                            <?php $this->db->select('*');
                                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_4);
                                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_4['nama_uraian_4_bua']);
                                                                                                            $checking_bua_detail_4 = $this->db->get()->result_array() ?>
                                                                                                            <?php if ($checking_bua_detail_4) { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                            <?php   }  ?>

                                                                                                        <?php   }  ?>
                                                                                                    <?php    } ?>
                                                                                                </td>
                                                                                            <?php  }  ?>

                                                                                        </tr>
                                                                                        <div class="modal fade" data-backdrop="false" id="form_modal_level_7_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                            <div class="modal-dialog" role="document">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="title_modal_level_7_bua"></h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        <form action="javascript:;" method="post" id="form_simpan_level_7_bua">
                                                                                                            <input type="hidden" name="id_detail_bua_4">
                                                                                                            <input type="hidden" name="type_add">
                                                                                                            <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                            <div class="form-group" style="display: none;" id="form_tambah_level_7_bua">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group">
                                                                                                                            <label for="">Nama Uraian</label>
                                                                                                                            <input type="text" name="nama_uraian" class="form-control">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="form-group" style="display: none;" id="form_input_nilai_level_7_bua">
                                                                                                                <label for="">Pilih Mata Anggaran</label>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-6">
                                                                                                                        <div class="input-group-prepend">
                                                                                                                            <span class="">

                                                                                                                            </span>
                                                                                                                            <input type="hidden" class="form-control" name="nilai_bua_detail_4" id="nilai_bua_detail_4" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-6">
                                                                                                                        <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_4_level_7_bua">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        <a href="javascript:;" style="display: none;" id="button_update_nilai_level_7_bua" class="btn btn-success button_simpan" onclick="Simpan_level_7_bua('update_nilai_level_7_bua')">Simpan</a>
                                                                                                        <a href="javascript:;" id="button_tambah_level_7_bua" class="btn btn-success button_simpan" onclick="Simpan_level_7_bua('tambah_level_7_bua')">Update</a>
                                                                                                        <a href="javascript:;" id="button_edit_level_7_bua" class="btn btn-success button_simpan" onclick="Simpan_level_7_bua('edit_level_7_bua')">Edit</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- level 8 -->
                                                                                        <?php
                                                                                                $this->db->select('*');
                                                                                                $this->db->from('tbl_detail_bua_5');
                                                                                                $this->db->where('tbl_detail_bua_5.id_detail_bua_4', $id_detail_bua_4);
                                                                                                $this->db->order_by('CAST(no_urut_5_bua AS DECIMAL(10,6)) ASC');
                                                                                                $query_result_detail_bua_5 = $this->db->get() ?>
                                                                                        <?php
                                                                                                foreach ($query_result_detail_bua_5->result_array() as $value_detail_bua_5) { ?>
                                                                                            <?php $id_detail_bua_5 = $value_detail_bua_5['id_detail_bua_5'];  ?>
                                                                                            <?php
                                                                                                    $this->db->select('*');
                                                                                                    $this->db->from('tbl_detail_bua_6');
                                                                                                    $this->db->where('tbl_detail_bua_6.id_detail_bua_5', $id_detail_bua_5);
                                                                                                    $kondisi_bua_detail_6 = $this->db->get()->result_array() ?>

                                                                                            <tr>
                                                                                                <!-- kondisi_bua_detail_6 -->
                                                                                                <!-- detail_5 -->
                                                                                                <!-- bua_5 -->
                                                                                                <!-- level_8 -->
                                                                                                <td class="tg-0lax">
                                                                                                    <?= $value_detail_bua_5['no_urut_5_bua'] ?> </td>
                                                                                                </td>
                                                                                                <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_5['nama_uraian_5_bua'] ?></td>
                                                                                                <?php if ($adendum_result) { ?>
                                                                                                    <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                        <?php
                                                                                                            if ($value['no_adendum'] == 1) {
                                                                                                                $nilai = 'nilai_bua_detail_5_add_I';
                                                                                                                $cek_add = 1;
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_1';
                                                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                                                $cek_add = 2;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_II';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_2';
                                                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                                                $cek_add = 3;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_III';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_3';
                                                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                                                $cek_add = 4;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_IV';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_4';
                                                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                                                $cek_add = 5;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_V';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_5';
                                                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                                                $cek_add = 6;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_VI';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_6';
                                                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                                                $cek_add = 7;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_VII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_7';
                                                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                                                $cek_add = 8;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_VIII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_8';
                                                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                                                $cek_add = 9;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_IX';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_9';
                                                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                                                $cek_add = 10;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_X';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_10';
                                                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                                                $cek_add = 11;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XI';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_11';
                                                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                                                $cek_add = 12;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_12';
                                                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                                                $cek_add = 13;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XIII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_13';
                                                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                                                $cek_add = 14;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XIV';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_14';
                                                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                                                $cek_add = 15;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XV';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_15';
                                                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                                                $cek_add = 16;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XVI';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_16';
                                                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                                                $cek_add = 17;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XVII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_17';
                                                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                                                $cek_add = 18;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XVIII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_18';
                                                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                                                $cek_add = 19;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XIX';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_19';
                                                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                                                $cek_add = 20;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XX';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_20';
                                                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                                                $cek_add = 21;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXI';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_21';
                                                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                                                $cek_add = 22;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_22';
                                                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                                                $cek_add = 23;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXIII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_23';
                                                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                                                $cek_add = 23;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXIV';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_24';
                                                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                                                $cek_add = 25;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXV';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_25';
                                                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                                                $cek_add = 26;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXVI';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_26';
                                                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                                                $cek_add = 27;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXVII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_27';
                                                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                                                $cek_add = 28;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXVIII';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_28';
                                                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                                                $cek_add = 29;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXIX';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_29';
                                                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                                                $cek_add = 30;
                                                                                                                $nilai = 'nilai_bua_detail_5_add_XXX';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua_add_30';
                                                                                                            } else {
                                                                                                                $cek_add = 0;
                                                                                                                $nilai = 'nilai_bua_detail_5';
                                                                                                                $update_reusable = 'update_nilai_level_8_bua';
                                                                                                            }
                                                                                                        ?>
                                                                                                        <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_5[$nilai], 2, ',', '.') ?> -->
                                                                                                        </td>
                                                                                                        <td class="tg-0lax">
                                                                                                            <?php $this->db->select('*');
                                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_5);
                                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_5['nama_uraian_5_bua']);
                                                                                                            $checking_bua_detail_5 = $this->db->get()->result_array() ?>
                                                                                                            <?php if ($value_detail_bua_5[$nilai] == null || $value_detail_bua_5[$nilai] == 0) { ?>
                                                                                                                <?php if ($kondisi_bua_detail_6) { ?>

                                                                                                                <?php    } else { ?>

                                                                                                                    <?php if ($checking_bua_detail_5) { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                    <?php   }  ?>

                                                                                                                <?php   }  ?>
                                                                                                            <?php } else { ?>
                                                                                                                <?php if ($kondisi_bua_detail_6) { ?>

                                                                                                                <?php    } else { ?>
                                                                                                                    <?php if ($checking_bua_detail_5) { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                    <?php   }  ?>

                                                                                                                <?php   }  ?>
                                                                                                            <?php    } ?>
                                                                                                        </td>
                                                                                                    <?php   } ?>
                                                                                                <?php } else { ?>
                                                                                                    <?php
                                                                                                        $nilai = 'nilai_bua_detail_5';
                                                                                                        $update_reusable = 'update_nilai_level_8_bua';
                                                                                                    ?>
                                                                                                    <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_5[$nilai], 2, ',', '.') ?> -->
                                                                                                    </td>
                                                                                                    <td class="tg-0lax">
                                                                                                        <?php if ($value_detail_bua_5[$nilai] == null || $value_detail_bua_5[$nilai] == 0) { ?>
                                                                                                            <?php if ($kondisi_bua_detail_6) { ?>

                                                                                                            <?php    } else { ?>

                                                                                                                <?php $this->db->select('*');
                                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_5);
                                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_5['nama_uraian_5_bua']);
                                                                                                                $checking_bua_detail_5 = $this->db->get()->result_array() ?>
                                                                                                                <?php if ($checking_bua_detail_5) { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                <?php   }  ?>

                                                                                                            <?php   }  ?>
                                                                                                        <?php } else { ?>
                                                                                                            <?php if ($kondisi_bua_detail_6) { ?>

                                                                                                            <?php    } else { ?>
                                                                                                                <?php $this->db->select('*');
                                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_5);
                                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_5['nama_uraian_5_bua']);
                                                                                                                $checking_bua_detail_5 = $this->db->get()->result_array() ?>
                                                                                                                <?php if ($checking_bua_detail_5) { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                <?php   }  ?>

                                                                                                            <?php   }  ?>
                                                                                                        <?php    } ?>
                                                                                                    </td>
                                                                                                <?php  }  ?>

                                                                                            </tr>

                                                                                            <div class="modal fade" data-backdrop="false" id="form_modal_level_8_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                                <div class="modal-dialog" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h5 class="modal-title" id="title_modal_level_8_bua"></h5>
                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <form action="javascript:;" method="post" id="form_simpan_level_8_bua">
                                                                                                                <input type="hidden" name="id_detail_bua_5">
                                                                                                                <input type="hidden" name="type_add">
                                                                                                                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                                <div class="form-group" style="display: none;" id="form_tambah_level_8_bua">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="">Nama Uraian</label>
                                                                                                                                <input type="text" name="nama_uraian" class="form-control">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="form-group" style="display: none;" id="form_input_nilai_level_8_bua">
                                                                                                                    <label for="">Pilih Mata Anggaran</label>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-6">
                                                                                                                            <div class="input-group-prepend">
                                                                                                                                <span class="">

                                                                                                                                </span>
                                                                                                                                <input type="hidden" class="form-control" name="nilai_bua_detail_5" id="nilai_bua_detail_5" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-6">
                                                                                                                            <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_5_level_8_bua">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                            <a href="javascript:;" style="display: none;" id="button_update_nilai_level_8_bua" class="btn btn-success button_simpan" onclick="Simpan_level_8_bua('update_nilai_level_8_bua')">Simpan</a>
                                                                                                            <a href="javascript:;" id="button_tambah_level_8_bua" class="btn btn-success button_simpan" onclick="Simpan_level_8_bua('tambah_level_8_bua')">Update</a>
                                                                                                            <a href="javascript:;" id="button_edit_level_8_bua" class="btn btn-success button_simpan" onclick="Simpan_level_8_bua('edit_level_8_bua')">Edit</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                            <!-- level 9 -->
                                                                                            <?php
                                                                                                    $this->db->select('*');
                                                                                                    $this->db->from('tbl_detail_bua_6');
                                                                                                    $this->db->where('tbl_detail_bua_6.id_detail_bua_5', $id_detail_bua_5);
                                                                                                    $this->db->order_by('CAST(no_urut_6_bua AS DECIMAL(10,6)) ASC');
                                                                                                    $query_result_detail_bua_6 = $this->db->get() ?>
                                                                                            <?php
                                                                                                    foreach ($query_result_detail_bua_6->result_array() as $value_detail_bua_6) { ?>
                                                                                                <?php $id_detail_bua_6 = $value_detail_bua_6['id_detail_bua_6'];  ?>
                                                                                                <?php
                                                                                                        $this->db->select('*');
                                                                                                        $this->db->from('tbl_detail_bua_7');
                                                                                                        $this->db->where('tbl_detail_bua_7.id_detail_bua_6', $id_detail_bua_6);
                                                                                                        $kondisi_bua_detail_7 = $this->db->get()->result_array() ?>
                                                                                                <tr>
                                                                                                    <!-- kondisi_bua_detail_7 -->
                                                                                                    <!-- detail_6 -->
                                                                                                    <!-- bua_6 -->
                                                                                                    <!-- level_9 -->
                                                                                                    <td class="tg-0lax">
                                                                                                        <?= $value_detail_bua_6['no_urut_6_bua'] ?> </td>
                                                                                                    </td>
                                                                                                    <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_6['nama_uraian_6_bua'] ?></td>
                                                                                                    <?php if ($adendum_result) { ?>
                                                                                                        <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                            <?php
                                                                                                                if ($value['no_adendum'] == 1) {
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_I';
                                                                                                                    $cek_add = 1;
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_1';
                                                                                                                } else if ($value['no_adendum'] == 2) {
                                                                                                                    $cek_add = 2;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_II';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_2';
                                                                                                                } else if ($value['no_adendum'] == 3) {
                                                                                                                    $cek_add = 3;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_III';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_3';
                                                                                                                } else if ($value['no_adendum'] == 4) {
                                                                                                                    $cek_add = 4;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_IV';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_4';
                                                                                                                } else if ($value['no_adendum'] == 5) {
                                                                                                                    $cek_add = 5;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_V';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_5';
                                                                                                                } else if ($value['no_adendum'] == 6) {
                                                                                                                    $cek_add = 6;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_VI';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_6';
                                                                                                                } else if ($value['no_adendum'] == 7) {
                                                                                                                    $cek_add = 7;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_VII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_7';
                                                                                                                } else if ($value['no_adendum'] == 8) {
                                                                                                                    $cek_add = 8;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_VIII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_8';
                                                                                                                } else if ($value['no_adendum'] == 9) {
                                                                                                                    $cek_add = 9;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_IX';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_9';
                                                                                                                } else if ($value['no_adendum'] == 10) {
                                                                                                                    $cek_add = 10;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_X';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_10';
                                                                                                                } else if ($value['no_adendum'] == 11) {
                                                                                                                    $cek_add = 11;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XI';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_11';
                                                                                                                } else if ($value['no_adendum'] == 12) {
                                                                                                                    $cek_add = 12;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_12';
                                                                                                                } else if ($value['no_adendum'] == 13) {
                                                                                                                    $cek_add = 13;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XIII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_13';
                                                                                                                } else if ($value['no_adendum'] == 14) {
                                                                                                                    $cek_add = 14;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XIV';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_14';
                                                                                                                } else if ($value['no_adendum'] == 15) {
                                                                                                                    $cek_add = 15;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XV';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_15';
                                                                                                                } else if ($value['no_adendum'] == 16) {
                                                                                                                    $cek_add = 16;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XVI';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_16';
                                                                                                                } else if ($value['no_adendum'] == 17) {
                                                                                                                    $cek_add = 17;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XVII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_17';
                                                                                                                } else if ($value['no_adendum'] == 18) {
                                                                                                                    $cek_add = 18;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XVIII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_18';
                                                                                                                } else if ($value['no_adendum'] == 19) {
                                                                                                                    $cek_add = 19;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XIX';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_19';
                                                                                                                } else if ($value['no_adendum'] == 20) {
                                                                                                                    $cek_add = 20;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XX';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_20';
                                                                                                                } else if ($value['no_adendum'] == 21) {
                                                                                                                    $cek_add = 21;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXI';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_21';
                                                                                                                } else if ($value['no_adendum'] == 22) {
                                                                                                                    $cek_add = 22;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_22';
                                                                                                                } else if ($value['no_adendum'] == 23) {
                                                                                                                    $cek_add = 23;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXIII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_23';
                                                                                                                } else if ($value['no_adendum'] == 24) {
                                                                                                                    $cek_add = 23;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXIV';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_24';
                                                                                                                } else if ($value['no_adendum'] == 25) {
                                                                                                                    $cek_add = 25;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXV';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_25';
                                                                                                                } else if ($value['no_adendum'] == 26) {
                                                                                                                    $cek_add = 26;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXVI';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_26';
                                                                                                                } else if ($value['no_adendum'] == 27) {
                                                                                                                    $cek_add = 27;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXVII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_27';
                                                                                                                } else if ($value['no_adendum'] == 28) {
                                                                                                                    $cek_add = 28;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXVIII';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_28';
                                                                                                                } else if ($value['no_adendum'] == 29) {
                                                                                                                    $cek_add = 29;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXIX';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_29';
                                                                                                                } else if ($value['no_adendum'] == 30) {
                                                                                                                    $cek_add = 30;
                                                                                                                    $nilai = 'nilai_bua_detail_6_add_XXX';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua_add_30';
                                                                                                                } else {
                                                                                                                    $cek_add = 0;
                                                                                                                    $nilai = 'nilai_bua_detail_6';
                                                                                                                    $update_reusable = 'update_nilai_level_9_bua';
                                                                                                                }
                                                                                                            ?>
                                                                                                            <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_6[$nilai], 2, ',', '.') ?> -->
                                                                                                            </td>
                                                                                                            <td class="tg-0lax">
                                                                                                                <?php $this->db->select('*');
                                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_6);
                                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_6['nama_uraian_6_bua']);
                                                                                                                $checking_bua_detail_6 = $this->db->get()->result_array() ?>
                                                                                                                <?php if ($value_detail_bua_6[$nilai] == null || $value_detail_bua_6[$nilai] == 0) { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_7) { ?>

                                                                                                                    <?php    } else { ?>

                                                                                                                        <?php if ($checking_bua_detail_6) { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                        <?php   }  ?>

                                                                                                                    <?php   }  ?>
                                                                                                                <?php } else { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_7) { ?>

                                                                                                                    <?php    } else { ?>
                                                                                                                        <?php if ($checking_bua_detail_6) { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                        <?php   }  ?>

                                                                                                                    <?php   }  ?>
                                                                                                                <?php    } ?>
                                                                                                            </td>
                                                                                                        <?php   } ?>
                                                                                                    <?php } else { ?>
                                                                                                        <?php
                                                                                                            $nilai = 'nilai_bua_detail_6';
                                                                                                            $update_reusable = 'update_nilai_level_9_bua';
                                                                                                        ?>
                                                                                                        <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_6[$nilai], 2, ',', '.') ?> -->
                                                                                                        </td>
                                                                                                        <td class="tg-0lax">
                                                                                                            <?php if ($value_detail_bua_6[$nilai] == null || $value_detail_bua_6[$nilai] == 0) { ?>
                                                                                                                <?php if ($kondisi_bua_detail_7) { ?>

                                                                                                                <?php    } else { ?>

                                                                                                                    <?php $this->db->select('*');
                                                                                                                    $this->db->from('tbl_list_mata_anggran');
                                                                                                                    $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_6);
                                                                                                                    $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                    $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_6['nama_uraian_6_bua']);
                                                                                                                    $checking_bua_detail_6 = $this->db->get()->result_array() ?>
                                                                                                                    <?php if ($checking_bua_detail_6) { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                    <?php   }  ?>

                                                                                                                <?php   }  ?>
                                                                                                            <?php } else { ?>
                                                                                                                <?php if ($kondisi_bua_detail_7) { ?>

                                                                                                                <?php    } else { ?>
                                                                                                                    <?php $this->db->select('*');
                                                                                                                    $this->db->from('tbl_list_mata_anggran');
                                                                                                                    $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_6);
                                                                                                                    $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                    $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_6['nama_uraian_6_bua']);
                                                                                                                    $checking_bua_detail_6 = $this->db->get()->result_array() ?>
                                                                                                                    <?php if ($checking_bua_detail_6) { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                    <?php   }  ?>

                                                                                                                <?php   }  ?>
                                                                                                            <?php    } ?>
                                                                                                        </td>
                                                                                                    <?php  }  ?>

                                                                                                </tr>

                                                                                                <div class="modal fade" data-backdrop="false" id="form_modal_level_9_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                                    <div class="modal-dialog" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="title_modal_level_9_bua"></h5>
                                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <form action="javascript:;" method="post" id="form_simpan_level_9_bua">
                                                                                                                    <input type="hidden" name="id_detail_bua_6">
                                                                                                                    <input type="hidden" name="type_add">
                                                                                                                    <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                                    <div class="form-group" style="display: none;" id="form_tambah_level_9_bua">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12">
                                                                                                                                <div class="form-group">
                                                                                                                                    <label for="">Nama Uraian</label>
                                                                                                                                    <input type="text" name="nama_uraian" class="form-control">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="form-group" style="display: none;" id="form_input_nilai_level_9_bua">
                                                                                                                        <label for="">Nilai</label>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-6">
                                                                                                                                <div class="input-group-prepend">
                                                                                                                                    <span class="">

                                                                                                                                    </span>
                                                                                                                                    <input type="hidden" class="form-control" name="nilai_bua_detail_6" id="nilai_bua_detail_6" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-6">
                                                                                                                                <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_6_level_9_bua">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                <a href="javascript:;" style="display: none;" id="button_update_nilai_level_9_bua" class="btn btn-success button_simpan" onclick="Simpan_level_9_bua('update_nilai_level_9_bua')">Simpan</a>
                                                                                                                <a href="javascript:;" id="button_tambah_level_9_bua" class="btn btn-success button_simpan" onclick="Simpan_level_9_bua('tambah_level_9_bua')">Update</a>
                                                                                                                <a href="javascript:;" id="button_edit_level_9_bua" class="btn btn-success button_simpan" onclick="Simpan_level_9_bua('edit_level_9_bua')">Edit</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- level 10 -->
                                                                                                <?php
                                                                                                        $this->db->select('*');
                                                                                                        $this->db->from('tbl_detail_bua_7');
                                                                                                        $this->db->where('tbl_detail_bua_7.id_detail_bua_6', $id_detail_bua_6);
                                                                                                        $this->db->order_by('CAST(no_urut_7_bua AS DECIMAL(10,6)) ASC');
                                                                                                        $query_result_detail_bua_7 = $this->db->get() ?>
                                                                                                <?php
                                                                                                        foreach ($query_result_detail_bua_7->result_array() as $value_detail_bua_7) { ?>
                                                                                                    <?php $id_detail_bua_7 = $value_detail_bua_7['id_detail_bua_7'];  ?>
                                                                                                    <?php
                                                                                                            $this->db->select('*');
                                                                                                            $this->db->from('tbl_detail_bua_8');
                                                                                                            $this->db->where('tbl_detail_bua_8.id_detail_bua_7', $id_detail_bua_7);
                                                                                                            $kondisi_bua_detail_8 = $this->db->get()->result_array() ?>
                                                                                                    <tr>
                                                                                                        <!-- kondisi_bua_detail_8 -->
                                                                                                        <!-- detail_7 -->
                                                                                                        <!-- bua_7 -->
                                                                                                        <!-- level_10 -->
                                                                                                        <td class="tg-0lax">
                                                                                                            <?= $value_detail_bua_7['no_urut_7_bua'] ?> </td>
                                                                                                        </td>
                                                                                                        <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_7['nama_uraian_7_bua'] ?></td>
                                                                                                        <?php if ($adendum_result) { ?>
                                                                                                            <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                                <?php
                                                                                                                    if ($value['no_adendum'] == 1) {
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_I';
                                                                                                                        $cek_add = 1;
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_1';
                                                                                                                    } else if ($value['no_adendum'] == 2) {
                                                                                                                        $cek_add = 2;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_II';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_2';
                                                                                                                    } else if ($value['no_adendum'] == 3) {
                                                                                                                        $cek_add = 3;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_III';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_3';
                                                                                                                    } else if ($value['no_adendum'] == 4) {
                                                                                                                        $cek_add = 4;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_IV';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_4';
                                                                                                                    } else if ($value['no_adendum'] == 5) {
                                                                                                                        $cek_add = 5;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_V';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_5';
                                                                                                                    } else if ($value['no_adendum'] == 6) {
                                                                                                                        $cek_add = 6;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_VI';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_6';
                                                                                                                    } else if ($value['no_adendum'] == 7) {
                                                                                                                        $cek_add = 7;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_VII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_7';
                                                                                                                    } else if ($value['no_adendum'] == 8) {
                                                                                                                        $cek_add = 8;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_VIII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_8';
                                                                                                                    } else if ($value['no_adendum'] == 9) {
                                                                                                                        $cek_add = 9;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_IX';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_9';
                                                                                                                    } else if ($value['no_adendum'] == 10) {
                                                                                                                        $cek_add = 10;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_X';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_10';
                                                                                                                    } else if ($value['no_adendum'] == 11) {
                                                                                                                        $cek_add = 11;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XI';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_11';
                                                                                                                    } else if ($value['no_adendum'] == 12) {
                                                                                                                        $cek_add = 12;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_12';
                                                                                                                    } else if ($value['no_adendum'] == 13) {
                                                                                                                        $cek_add = 13;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XIII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_13';
                                                                                                                    } else if ($value['no_adendum'] == 14) {
                                                                                                                        $cek_add = 14;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XIV';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_14';
                                                                                                                    } else if ($value['no_adendum'] == 15) {
                                                                                                                        $cek_add = 15;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XV';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_15';
                                                                                                                    } else if ($value['no_adendum'] == 16) {
                                                                                                                        $cek_add = 16;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XVI';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_16';
                                                                                                                    } else if ($value['no_adendum'] == 17) {
                                                                                                                        $cek_add = 17;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XVII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_17';
                                                                                                                    } else if ($value['no_adendum'] == 18) {
                                                                                                                        $cek_add = 18;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XVIII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_18';
                                                                                                                    } else if ($value['no_adendum'] == 19) {
                                                                                                                        $cek_add = 19;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XIX';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_19';
                                                                                                                    } else if ($value['no_adendum'] == 20) {
                                                                                                                        $cek_add = 20;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XX';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_20';
                                                                                                                    } else if ($value['no_adendum'] == 21) {
                                                                                                                        $cek_add = 21;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXI';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_21';
                                                                                                                    } else if ($value['no_adendum'] == 22) {
                                                                                                                        $cek_add = 22;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_22';
                                                                                                                    } else if ($value['no_adendum'] == 23) {
                                                                                                                        $cek_add = 23;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXIII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_23';
                                                                                                                    } else if ($value['no_adendum'] == 24) {
                                                                                                                        $cek_add = 23;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXIV';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_24';
                                                                                                                    } else if ($value['no_adendum'] == 25) {
                                                                                                                        $cek_add = 25;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXV';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_25';
                                                                                                                    } else if ($value['no_adendum'] == 26) {
                                                                                                                        $cek_add = 26;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXVI';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_26';
                                                                                                                    } else if ($value['no_adendum'] == 27) {
                                                                                                                        $cek_add = 27;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXVII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_27';
                                                                                                                    } else if ($value['no_adendum'] == 28) {
                                                                                                                        $cek_add = 28;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXVIII';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_28';
                                                                                                                    } else if ($value['no_adendum'] == 29) {
                                                                                                                        $cek_add = 29;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXIX';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_29';
                                                                                                                    } else if ($value['no_adendum'] == 30) {
                                                                                                                        $cek_add = 30;
                                                                                                                        $nilai = 'nilai_bua_detail_7_add_XXX';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua_add_30';
                                                                                                                    } else {
                                                                                                                        $cek_add = 3;
                                                                                                                        $nilai = 'nilai_bua_detail_7';
                                                                                                                        $update_reusable = 'update_nilai_level_10_bua';
                                                                                                                    }
                                                                                                                ?>
                                                                                                                <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_7[$nilai], 2, ',', '.') ?> -->
                                                                                                                </td>
                                                                                                                <td class="tg-0lax">
                                                                                                                    <?php $this->db->select('*');
                                                                                                                    $this->db->from('tbl_list_mata_anggran');
                                                                                                                    $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_7);
                                                                                                                    $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                                    $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_7['nama_uraian_7_bua']);
                                                                                                                    $checking_bua_detail_7 = $this->db->get()->result_array() ?>
                                                                                                                    <?php if ($value_detail_bua_7[$nilai] == null || $value_detail_bua_7[$nilai] == 0) { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_8) { ?>

                                                                                                                        <?php    } else { ?>

                                                                                                                            <?php if ($checking_bua_detail_7) { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                            <?php   }  ?>

                                                                                                                        <?php   }  ?>
                                                                                                                    <?php } else { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_8) { ?>

                                                                                                                        <?php    } else { ?>
                                                                                                                            <?php if ($checking_bua_detail_7) { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                            <?php   }  ?>

                                                                                                                        <?php   }  ?>
                                                                                                                    <?php    } ?>
                                                                                                                </td>
                                                                                                            <?php   } ?>
                                                                                                        <?php } else { ?>
                                                                                                            <?php
                                                                                                                $nilai = 'nilai_bua_detail_7';
                                                                                                                $update_reusable = 'update_nilai_level_10_bua';
                                                                                                            ?>
                                                                                                            <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_7[$nilai], 2, ',', '.') ?> -->
                                                                                                            </td>
                                                                                                            <td class="tg-0lax">
                                                                                                                <?php if ($value_detail_bua_7[$nilai] == null || $value_detail_bua_7[$nilai] == 0) { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_8) { ?>

                                                                                                                    <?php    } else { ?>

                                                                                                                        <?php $this->db->select('*');
                                                                                                                        $this->db->from('tbl_list_mata_anggran');
                                                                                                                        $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_7);
                                                                                                                        $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                        $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_7['nama_uraian_7_bua']);
                                                                                                                        $checking_bua_detail_7 = $this->db->get()->result_array() ?>
                                                                                                                        <?php if ($checking_bua_detail_7) { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                        <?php   }  ?>
                                                                                                                    <?php   }  ?>
                                                                                                                <?php } else { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_8) { ?>

                                                                                                                    <?php    } else { ?>
                                                                                                                        <?php $this->db->select('*');
                                                                                                                        $this->db->from('tbl_list_mata_anggran');
                                                                                                                        $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_7);
                                                                                                                        $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                        $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_7['nama_uraian_7_bua']);
                                                                                                                        $checking_bua_detail_7 = $this->db->get()->result_array() ?>
                                                                                                                        <?php if ($checking_bua_detail_7) { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                        <?php   }  ?>

                                                                                                                    <?php   }  ?>
                                                                                                                <?php    } ?>
                                                                                                            </td>
                                                                                                        <?php  }  ?>

                                                                                                    </tr>

                                                                                                    <div class="modal fade" data-backdrop="false" id="form_modal_level_10_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                                        <div class="modal-dialog" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h5 class="modal-title" id="title_modal_level_10_bua"></h5>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <div class="modal-body">
                                                                                                                    <form action="javascript:;" method="post" id="form_simpan_level_10_bua">
                                                                                                                        <input type="hidden" name="id_detail_bua_7">
                                                                                                                        <input type="hidden" name="type_add">
                                                                                                                        <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                                        <div class="form-group" style="display: none;" id="form_tambah_level_10_bua">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12">
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label for="">Nama Uraian</label>
                                                                                                                                        <input type="text" name="nama_uraian" class="form-control">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="form-group" style="display: none;" id="form_input_nilai_level_10_bua">
                                                                                                                            <label for="">Pilih Mata Anggaran</label>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-6">
                                                                                                                                    <div class="input-group-prepend">
                                                                                                                                        <span class="">

                                                                                                                                        </span>
                                                                                                                                        <input type="hidden" class="form-control" name="nilai_bua_detail_7" id="nilai_bua_detail_7" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-6">
                                                                                                                                    <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_7_level_10_bua">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                    <a href="javascript:;" style="display: none;" id="button_update_nilai_level_10_bua" class="btn btn-success button_simpan" onclick="Simpan_level_10_bua('update_nilai_level_10_bua')">Simpan</a>
                                                                                                                    <a href="javascript:;" id="button_tambah_level_10_bua" class="btn btn-success button_simpan" onclick="Simpan_level_10_bua('tambah_level_10_bua')">Update</a>
                                                                                                                    <a href="javascript:;" id="button_edit_level_10_bua" class="btn btn-success button_simpan" onclick="Simpan_level_10_bua('edit_level_10_bua')">Edit</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- level 11 -->
                                                                                                    <?php
                                                                                                            $this->db->select('*');
                                                                                                            $this->db->from('tbl_detail_bua_8');
                                                                                                            $this->db->where('tbl_detail_bua_8.id_detail_bua_7', $id_detail_bua_7);
                                                                                                            $this->db->order_by('CAST(no_urut_8_bua AS DECIMAL(10,6)) ASC');
                                                                                                            $query_result_detail_bua_8 = $this->db->get() ?>
                                                                                                    <?php
                                                                                                            foreach ($query_result_detail_bua_8->result_array() as $value_detail_bua_8) { ?>
                                                                                                        <?php $id_detail_bua_8 = $value_detail_bua_8['id_detail_bua_8'];  ?>
                                                                                                        <?php
                                                                                                                $this->db->select('*');
                                                                                                                $this->db->from('tbl_detail_bua_9');
                                                                                                                $this->db->where('tbl_detail_bua_9.id_detail_bua_8', $id_detail_bua_8);
                                                                                                                $kondisi_bua_detail_9 = $this->db->get()->result_array() ?>
                                                                                                        <tr>
                                                                                                            <!-- kondisi_bua_detail_9 -->
                                                                                                            <!-- detail_8 -->
                                                                                                            <!-- bua_8 -->
                                                                                                            <!-- level_11 -->
                                                                                                            <td class="tg-0lax">
                                                                                                                <?= $value_detail_bua_8['no_urut_8_bua'] ?> </td>
                                                                                                            </td>
                                                                                                            <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_8['nama_uraian_8_bua'] ?></td>
                                                                                                            <?php if ($adendum_result) { ?>
                                                                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                                    <?php
                                                                                                                        if ($value['no_adendum'] == 1) {
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_I';
                                                                                                                            $cek_add = 1;
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_1';
                                                                                                                        } else if ($value['no_adendum'] == 2) {
                                                                                                                            $cek_add = 2;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_II';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_2';
                                                                                                                        } else if ($value['no_adendum'] == 3) {
                                                                                                                            $cek_add = 3;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_III';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_3';
                                                                                                                        } else if ($value['no_adendum'] == 4) {
                                                                                                                            $cek_add = 4;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_IV';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_4';
                                                                                                                        } else if ($value['no_adendum'] == 5) {
                                                                                                                            $cek_add = 5;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_V';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_5';
                                                                                                                        } else if ($value['no_adendum'] == 6) {
                                                                                                                            $cek_add = 6;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_VI';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_6';
                                                                                                                        } else if ($value['no_adendum'] == 7) {
                                                                                                                            $cek_add = 7;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_VII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_7';
                                                                                                                        } else if ($value['no_adendum'] == 8) {
                                                                                                                            $cek_add = 8;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_VIII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_8';
                                                                                                                        } else if ($value['no_adendum'] == 9) {
                                                                                                                            $cek_add = 9;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_IX';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_9';
                                                                                                                        } else if ($value['no_adendum'] == 10) {
                                                                                                                            $cek_add = 10;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_X';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_10';
                                                                                                                        } else if ($value['no_adendum'] == 11) {
                                                                                                                            $cek_add = 11;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XI';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_11';
                                                                                                                        } else if ($value['no_adendum'] == 12) {
                                                                                                                            $cek_add = 12;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_12';
                                                                                                                        } else if ($value['no_adendum'] == 13) {
                                                                                                                            $cek_add = 13;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XIII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_13';
                                                                                                                        } else if ($value['no_adendum'] == 14) {
                                                                                                                            $cek_add = 14;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XIV';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_14';
                                                                                                                        } else if ($value['no_adendum'] == 15) {
                                                                                                                            $cek_add = 15;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XV';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_15';
                                                                                                                        } else if ($value['no_adendum'] == 16) {
                                                                                                                            $cek_add = 16;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XVI';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_16';
                                                                                                                        } else if ($value['no_adendum'] == 17) {
                                                                                                                            $cek_add = 17;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XVII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_17';
                                                                                                                        } else if ($value['no_adendum'] == 18) {
                                                                                                                            $cek_add = 18;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XVIII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_18';
                                                                                                                        } else if ($value['no_adendum'] == 19) {
                                                                                                                            $cek_add = 19;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XIX';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_19';
                                                                                                                        } else if ($value['no_adendum'] == 20) {
                                                                                                                            $cek_add = 20;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XX';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_20';
                                                                                                                        } else if ($value['no_adendum'] == 21) {
                                                                                                                            $cek_add = 21;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXI';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_21';
                                                                                                                        } else if ($value['no_adendum'] == 22) {
                                                                                                                            $cek_add = 22;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_22';
                                                                                                                        } else if ($value['no_adendum'] == 23) {
                                                                                                                            $cek_add = 23;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXIII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_23';
                                                                                                                        } else if ($value['no_adendum'] == 24) {
                                                                                                                            $cek_add = 23;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXIV';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_24';
                                                                                                                        } else if ($value['no_adendum'] == 25) {
                                                                                                                            $cek_add = 25;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXV';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_25';
                                                                                                                        } else if ($value['no_adendum'] == 26) {
                                                                                                                            $cek_add = 26;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXVI';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_26';
                                                                                                                        } else if ($value['no_adendum'] == 27) {
                                                                                                                            $cek_add = 27;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXVII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_27';
                                                                                                                        } else if ($value['no_adendum'] == 28) {
                                                                                                                            $cek_add = 28;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXVIII';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_28';
                                                                                                                        } else if ($value['no_adendum'] == 29) {
                                                                                                                            $cek_add = 29;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXIX';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_29';
                                                                                                                        } else if ($value['no_adendum'] == 30) {
                                                                                                                            $cek_add = 30;
                                                                                                                            $nilai = 'nilai_bua_detail_8_add_XXX';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua_add_30';
                                                                                                                        } else {
                                                                                                                            $cek_add = 3;
                                                                                                                            $nilai = 'nilai_bua_detail_8';
                                                                                                                            $update_reusable = 'update_nilai_level_11_bua';
                                                                                                                        }
                                                                                                                    ?>
                                                                                                                    <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_8[$nilai], 2, ',', '.') ?> -->
                                                                                                                    </td>
                                                                                                                    <td class="tg-0lax">
                                                                                                                        <?php $this->db->select('*');
                                                                                                                        $this->db->from('tbl_list_mata_anggran');
                                                                                                                        $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_8);
                                                                                                                        $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                                        $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_8['nama_uraian_8_bua']);
                                                                                                                        $checking_bua_detail_8 = $this->db->get()->result_array() ?>
                                                                                                                        <?php if ($value_detail_bua_8[$nilai] == null || $value_detail_bua_8[$nilai] == 0) { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                            <?php    } else { ?>

                                                                                                                                <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                                <?php   }  ?>

                                                                                                                            <?php   }  ?>
                                                                                                                        <?php } else { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                            <?php    } else { ?>
                                                                                                                                <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                                <?php   }  ?>

                                                                                                                            <?php   }  ?>
                                                                                                                        <?php    } ?>
                                                                                                                    </td>
                                                                                                                <?php   } ?>
                                                                                                            <?php } else { ?>
                                                                                                                <?php
                                                                                                                    $nilai = 'nilai_bua_detail_8';
                                                                                                                    $update_reusable = 'update_nilai_level_11_bua';
                                                                                                                ?>
                                                                                                                <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_8[$nilai], 2, ',', '.') ?> -->
                                                                                                                </td>
                                                                                                                <td class="tg-0lax">
                                                                                                                    <?php if ($value_detail_bua_8[$nilai] == null || $value_detail_bua_8[$nilai] == 0) { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                        <?php    } else { ?>

                                                                                                                            <?php $this->db->select('*');
                                                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_8);
                                                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_8['nama_uraian_8_bua']);
                                                                                                                            $checking_bua_detail_8 = $this->db->get()->result_array() ?>
                                                                                                                            <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                            <?php   }  ?>
                                                                                                                        <?php   }  ?>
                                                                                                                    <?php } else { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                        <?php    } else { ?>
                                                                                                                            <?php $this->db->select('*');
                                                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_8);
                                                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                            $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_8['nama_uraian_8_bua']);
                                                                                                                            $checking_bua_detail_8 = $this->db->get()->result_array() ?>
                                                                                                                            <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                            <?php   }  ?>
                                                                                                                        <?php   }  ?>
                                                                                                                    <?php    } ?>
                                                                                                                </td>
                                                                                                            <?php  }  ?>
                                                                                                        </tr>

                                                                                                        <div class="modal fade" data-backdrop="false" id="form_modal_level_11_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                                            <div class="modal-dialog" role="document">
                                                                                                                <div class="modal-content">
                                                                                                                    <div class="modal-header">
                                                                                                                        <h5 class="modal-title" id="title_modal_level_11_bua"></h5>
                                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="modal-body">
                                                                                                                        <form action="javascript:;" method="post" id="form_simpan_level_11_bua">
                                                                                                                            <input type="hidden" name="id_detail_bua_8">
                                                                                                                            <input type="hidden" name="type_add">
                                                                                                                            <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                                            <div class="form-group" style="display: none;" id="form_tambah_level_11_bua">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12">
                                                                                                                                        <div class="form-group">
                                                                                                                                            <label for="">Nama Uraian</label>
                                                                                                                                            <input type="text" name="nama_uraian" class="form-control">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>

                                                                                                                            <div class="form-group" style="display: none;" id="form_input_nilai_level_11_bua">
                                                                                                                                <label for="">Pilih Mata Anggaran</label>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-6">
                                                                                                                                        <div class="input-group-prepend">
                                                                                                                                            <span class="">

                                                                                                                                            </span>
                                                                                                                                            <input type="hidden" class="form-control" name="nilai_bua_detail_8" id="nilai_bua_detail_8" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-6">
                                                                                                                                        <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_8_level_11_bua">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                    <div class="modal-footer">
                                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                        <a href="javascript:;" style="display: none;" id="button_update_nilai_level_11_bua" class="btn btn-success button_simpan" onclick="Simpan_level_11_bua('update_nilai_level_11_bua')">Simpan</a>
                                                                                                                        <a href="javascript:;" id="button_tambah_level_11_bua" class="btn btn-success button_simpan" onclick="Simpan_level_11_bua('tambah_level_11_bua')">Update</a>
                                                                                                                        <a href="javascript:;" id="button_edit_level_11_bua" class="btn btn-success button_simpan" onclick="Simpan_level_11_bua('edit_level_11_bua')">Edit</a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <!-- level 12 -->
                                                                                                        <?php
                                                                                                                $this->db->select('*');
                                                                                                                $this->db->from('tbl_detail_bua_9');
                                                                                                                $this->db->where('tbl_detail_bua_9.id_detail_bua_8', $id_detail_bua_8);
                                                                                                                $this->db->order_by('CAST(no_urut_9_bua AS DECIMAL(10,6)) ASC');
                                                                                                                $query_result_detail_bua_9 = $this->db->get() ?>
                                                                                                        <?php
                                                                                                                foreach ($query_result_detail_bua_9->result_array() as $value_detail_bua_9) { ?>
                                                                                                            <?php $id_detail_bua_9 = $value_detail_bua_9['id_detail_bua_9'];  ?>
                                                                                                            <?php
                                                                                                                    $this->db->select('*');
                                                                                                                    $this->db->from('tbl_detail_bua_10');
                                                                                                                    $this->db->where('tbl_detail_bua_10.id_detail_bua_9', $id_detail_bua_9);
                                                                                                                    $kondisi_bua_detail_9 = $this->db->get()->result_array() ?>
                                                                                                            <tr>
                                                                                                                <!-- kondisi_bua_detail_9 -->
                                                                                                                <!-- detail_8 -->
                                                                                                                <!-- bua_8 -->
                                                                                                                <!-- level_11 -->
                                                                                                                <td class="tg-0lax">
                                                                                                                    <?= $value_detail_bua_8['no_urut_8_bua'] ?> </td>
                                                                                                                </td>
                                                                                                                <td class="tg-0lax">&nbsp;&nbsp;&nbsp;&nbsp; <?= $value_detail_bua_8['nama_uraian_8_bua'] ?></td>
                                                                                                                <?php if ($adendum_result) { ?>
                                                                                                                    <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                                        <?php
                                                                                                                            if ($value['no_adendum'] == 1) {
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_I';
                                                                                                                                $cek_add = 1;
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_1';
                                                                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                                                                $cek_add = 2;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_II';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_2';
                                                                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                                                                $cek_add = 3;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_III';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_3';
                                                                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                                                                $cek_add = 4;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_IV';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_4';
                                                                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                                                                $cek_add = 5;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_V';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_5';
                                                                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                                                                $cek_add = 6;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_VI';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_6';
                                                                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                                                                $cek_add = 7;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_VII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_7';
                                                                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                                                                $cek_add = 8;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_VIII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_8';
                                                                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                                                                $cek_add = 9;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_IX';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_9';
                                                                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                                                                $cek_add = 10;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_X';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_10';
                                                                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                                                                $cek_add = 11;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XI';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_11';
                                                                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                                                                $cek_add = 12;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_12';
                                                                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                                                                $cek_add = 13;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XIII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_13';
                                                                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                                                                $cek_add = 14;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XIV';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_14';
                                                                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                                                                $cek_add = 15;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XV';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_15';
                                                                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                                                                $cek_add = 16;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XVI';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_16';
                                                                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                                                                $cek_add = 17;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XVII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_17';
                                                                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                                                                $cek_add = 18;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XVIII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_18';
                                                                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                                                                $cek_add = 19;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XIX';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_19';
                                                                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                                                                $cek_add = 20;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XX';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_20';
                                                                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                                                                $cek_add = 21;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXI';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_21';
                                                                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                                                                $cek_add = 22;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_22';
                                                                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                                                                $cek_add = 23;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXIII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_23';
                                                                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                                                                $cek_add = 23;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXIV';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_24';
                                                                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                                                                $cek_add = 25;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXV';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_25';
                                                                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                                                                $cek_add = 26;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXVI';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_26';
                                                                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                                                                $cek_add = 27;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXVII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_27';
                                                                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                                                                $cek_add = 28;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXVIII';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_28';
                                                                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                                                                $cek_add = 29;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXIX';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_29';
                                                                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                                                                $cek_add = 30;
                                                                                                                                $nilai = 'nilai_bua_detail_8_add_XXX';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua_add_30';
                                                                                                                            } else {
                                                                                                                                $cek_add = 3;
                                                                                                                                $nilai = 'nilai_bua_detail_8';
                                                                                                                                $update_reusable = 'update_nilai_level_11_bua';
                                                                                                                            }
                                                                                                                        ?>
                                                                                                                        <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_8[$nilai], 2, ',', '.') ?> -->
                                                                                                                        </td>
                                                                                                                        <td class="tg-0lax">
                                                                                                                            <?php $this->db->select('*');
                                                                                                                            $this->db->from('tbl_list_mata_anggran');
                                                                                                                            $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_8);
                                                                                                                            $this->db->where('tbl_list_mata_anggran.no_add', $cek_add);
                                                                                                                            $checking_bua_detail_8 = $this->db->get()->result_array() ?>
                                                                                                                            <?php if ($value_detail_bua_8[$nilai] == null || $value_detail_bua_8[$nilai] == 0) { ?>
                                                                                                                                <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                                <?php    } else { ?>

                                                                                                                                    <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                        <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                                    <?php    } else { ?>
                                                                                                                                        <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                                    <?php   }  ?>

                                                                                                                                <?php   }  ?>
                                                                                                                            <?php } else { ?>
                                                                                                                                <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                                <?php    } else { ?>
                                                                                                                                    <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                        <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= $cek_add ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                                    <?php    } else { ?>
                                                                                                                                        <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                                    <?php   }  ?>

                                                                                                                                <?php   }  ?>
                                                                                                                            <?php    } ?>
                                                                                                                        </td>
                                                                                                                    <?php   } ?>
                                                                                                                <?php } else { ?>
                                                                                                                    <?php
                                                                                                                        $nilai = 'nilai_bua_detail_8';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua';
                                                                                                                    ?>
                                                                                                                    <!-- <td class="tg-0lax"> <?= "Rp " . number_format($value_detail_bua_8[$nilai], 2, ',', '.') ?> -->
                                                                                                                    </td>
                                                                                                                    <td class="tg-0lax">
                                                                                                                        <?php if ($value_detail_bua_8[$nilai] == null || $value_detail_bua_8[$nilai] == 0) { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                            <?php    } else { ?>

                                                                                                                                <?php $this->db->select('*');
                                                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_8);
                                                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_8['nama_uraian_8_bua']);
                                                                                                                                $checking_bua_detail_8 = $this->db->get()->result_array() ?>
                                                                                                                                <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                                <?php   }  ?>

                                                                                                                            <?php   }  ?>
                                                                                                                        <?php } else { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_9) { ?>

                                                                                                                            <?php    } else { ?>
                                                                                                                                <?php $this->db->select('*');
                                                                                                                                $this->db->from('tbl_list_mata_anggran');
                                                                                                                                $this->db->where('tbl_list_mata_anggran.id_checking', $id_detail_bua_8);
                                                                                                                                $this->db->where('tbl_list_mata_anggran.no_add', 0);
                                                                                                                                $this->db->where('tbl_list_mata_anggran.nama_mata_anggaran', $value_detail_bua_8['nama_uraian_8_bua']);
                                                                                                                                $checking_bua_detail_8 = $this->db->get()->result_array() ?>
                                                                                                                                <?php if ($checking_bua_detail_8) { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_list_anggaran',<?= 0 ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-check"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Terpilih"><i class="fas fa-times"></i></a>
                                                                                                                                <?php   }  ?>
                                                                                                                            <?php   }  ?>
                                                                                                                        <?php    } ?>
                                                                                                                    </td>
                                                                                                                <?php  }  ?>

                                                                                                            </tr>
                                                                                                            <div class="modal fade" data-backdrop="false" id="form_modal_level_12_bua" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                                                                <div class="modal-dialog" role="document">
                                                                                                                    <div class="modal-content">
                                                                                                                        <div class="modal-header">
                                                                                                                            <h5 class="modal-title" id="title_modal_level_12_bua"></h5>
                                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                                            </button>
                                                                                                                        </div>
                                                                                                                        <div class="modal-body">
                                                                                                                            <form action="javascript:;" method="post" id="form_simpan_level_12_bua">
                                                                                                                                <input type="hidden" name="id_detail_bua_9">
                                                                                                                                <input type="hidden" name="type_add">
                                                                                                                                <input type="hidden" name="id_kontrak" value="<?= $row_kontrak['id_kontrak'] ?>">
                                                                                                                                <div class="form-group" style="display: none;" id="form_tambah_level_12_bua">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-md-12">
                                                                                                                                            <div class="form-group">
                                                                                                                                                <label for="">Nama Uraian</label>
                                                                                                                                                <input type="text" name="nama_uraian" class="form-control">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div class="form-group" style="display: none;" id="form_input_nilai_level_12_bua">
                                                                                                                                    <label for="">Pilih Mata Anggaran</label>
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-6">
                                                                                                                                            <div class="input-group-prepend">
                                                                                                                                                <span class="">

                                                                                                                                                </span>
                                                                                                                                                <input type="hidden" class="form-control" name="nilai_bua_detail_9" id="nilai_bua_detail_9" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-6">
                                                                                                                                            <input type="hidden" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_9_level_12_bua">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </form>
                                                                                                                        </div>

                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                            <a href="javascript:;" style="display: none;" id="button_update_nilai_level_12_bua" class="btn btn-success button_simpan" onclick="Simpan_level_12_bua('update_nilai_level_12_bua')">Simpan</a>
                                                                                                                            <a href="javascript:;" id="button_tambah_level_12_bua" class="btn btn-success button_simpan" onclick="Simpan_level_12_bua('tambah_level_12_bua')">Update</a>
                                                                                                                            <a href="javascript:;" id="button_edit_level_12_bua" class="btn btn-success button_simpan" onclick="Simpan_level_12_bua('edit_level_12_bua')">Edit</a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        <?php   }  ?>
                                                                                                    <?php   }  ?>
                                                                                                <?php   }  ?>
                                                                                            <?php   }  ?>
                                                                                        <?php   }  ?>
                                                                                    <?php   }  ?>
                                                                                <?php   }  ?>
                                                                            <?php   }  ?>
                                                                        <?php   }  ?>
                                                                    <?php   } ?>
                                                                    <!-- hapus yg bawah -->
                                                                    <?php   } ?>